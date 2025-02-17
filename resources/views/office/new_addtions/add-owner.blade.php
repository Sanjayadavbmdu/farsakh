@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-user-plus"></i> Add New Property Owner</h4>
            <a href="{{route('office.new_addtions.show.owner')}}" class="btn btn" style="color: white"><i class="fas fa-list" style="padding-right: 5px"></i> View Owners</a>
        </div>
    </div>

    <!-- Add Owner Form -->
    <div class="card shadow-lg">
        <div class="card-body">
            <form id="addOwnerForm">
                <div class="row">
                    <!-- Owner Profile Picture -->
                    <div class="col-md-4 text-center">
                        <div class="profile-upload-box">
                            <label for="ownerImage" class="upload-label">
                                <i class="fas fa-camera"></i>
                                <span>Upload Photo</span>
                            </label>
                            <input type="file" id="ownerImage" class="d-none">
                            <img id="previewImage" src="default-avatar.png" class="img-fluid rounded-circle mt-2">
                        </div>
                    </div>

                    <!-- Owner Details -->
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Full Name</label>
                                <input type="text" class="form-control" placeholder="Owner's Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Email Address</label>
                                <input type="email" class="form-control" placeholder="example@mail.com" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="+123456789" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">National ID / Passport</label>
                                <input type="text" class="form-control" placeholder="ID Number" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="fw-bold">Address</label>
                                <input type="text" class="form-control" placeholder="Owner's Address" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Ownership Type</label>
                                <select class="form-control">
                                    <option value="individual">Individual</option>
                                    <option value="company">Company</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Properties Owned</label>
                                <input type="number" class="form-control" placeholder="Number of Properties">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="text-end mt-4">
                    <button type="reset" class="btn btn-outline-secondary"><i class="fas fa-redo" style="padding-right: 5px"></i> Reset</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save" style="padding-right: 5px"></i> Save Owner</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
/* Dark Green Theme */
.bg-dark-green {
    background-color: #2d714e !important;
}

/* Profile Upload Box */
.profile-upload-box {
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    background: rgba(45, 113, 78, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.upload-label {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    color: white;
    font-size: 14px;
    font-weight: bold;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}

.profile-upload-box:hover .upload-label {
    opacity: 1;
}

/* Button Styling */
.btn-dark-green {
    background-color: #2d714e;
    color: white;
    font-weight: bold;
}

.btn-dark-green:hover {
    background-color: #235b3b;
}
</style>

<script>
document.getElementById('ownerImage').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImage').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});
</script>

@endsection
