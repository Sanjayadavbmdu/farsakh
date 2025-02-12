@extends('tenant.includes.master')


@section('content')
<style>
     .settings-container {
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .nav-pills .nav-link {
            color: #6c757d;
            border-radius: 8px;
        }
        .nav-pills .nav-link.active {
            background-color: #206843;
            color: #fff;
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
            border: 3px solid #007bff;
        }
        .toggle-switch {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .dark-mode {
            background: #343a40 !important;
            color: white !important;
        }
</style>


<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-bold mb-0">Settings</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>

            <li class="breadcrumb-item active">Settings</li>
        </ol>
    </div>
</div>



<div class="settings-container">
    <!-- Nav Pills -->
    <ul class="nav nav-pills mb-3 justify-content-center" id="settings-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#account-settings">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#notifications-settings">Notifications</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#appearance-settings">Appearance</a>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Account Settings -->
        <div class="tab-pane fade show active" id="account-settings">
            <h4 class="mb-3">Profile Settings</h4>
            <div class="text-center mb-3">
                <input type="file" id="profilePicInput" hidden>
                <img src="https://via.placeholder.com/100" id="profilePic" class="profile-pic" alt="Profile Picture">
            </div>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="John Doe">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="john@example.com">
            </div>
            <button class="btn btn-primary w-100">Save Changes</button>
        </div>

        <!-- Notification Settings -->
        <div class="tab-pane fade" id="notifications-settings">
            <h4 class="mb-3">Notification Preferences</h4>
            <div class="toggle-switch mb-3">
                <span>Email Notifications</span>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" checked>
                </div>
            </div>
            <div class="toggle-switch mb-3">
                <span>SMS Alerts</span>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox">
                </div>
            </div>
            {{-- <div class="toggle-switch mb-3">
                <span>Push Notifications</span>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" checked>
                </div>
            </div> --}}
            <button class="btn btn-primary w-100">Update Preferences</button>
        </div>

        <!-- Appearance Settings -->
        <div class="tab-pane fade" id="appearance-settings">
            <h4 class="mb-3">Customize Appearance</h4>
            <div class="toggle-switch mb-3">
                <span>Dark Mode</span>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="darkModeToggle">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')


@endsection