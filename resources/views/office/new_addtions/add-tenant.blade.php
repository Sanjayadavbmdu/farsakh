@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-user-plus"></i> Add New Tenant</h4>
            <a href="{{route('office.new_addtions.show.tenant')}}" class="btn " style="color: #fff"><i class="fas fa-list" style="padding-right: 5px"></i> View All Tenants</a>
        </div>
    </div>

    <!-- Tenant Registration Form -->
    <div class="card shadow-lg">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- Tenant Personal Information -->
                    <div class="col-md-6">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-user"></i> Tenant Information</h5>

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Profile Image</label>
                            <input type="file" class="form-control" name="profile_image" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Contract</label>
                            <input type="file" class="form-control" name="lease_end" required>
                        </div>
                    </div>

                    <!-- Lease Information -->
                    <div class="col-md-6">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-file-contract"></i> Lease Information</h5>

                        <div class="mb-3">
                            <label class="form-label">Property Assigned</label>
                            <select class="form-control" name="property_id" required>
                                <option value="">Select Property</option>
                                <option value="1">Luxury Apartment - #PROP123</option>
                                <option value="2">Beach Villa - #PROP456</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lease Start Date</label>
                            <input type="date" class="form-control" name="lease_start" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lease End Date</label>
                            <input type="date" class="form-control" name="lease_end" required>
                        </div>
                       

                        <div class="mb-3">
                            <label class="form-label">Monthly Rent</label>
                            <input type="number" class="form-control" name="monthly_rent" required>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-dark-green px-4"><i class="fas fa-save" style="padding-right: 5px"></i> Save Tenant</button>
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

/* Custom Button */
.btn-dark-green {
    background-color: #2d714e;
    color: white;
    border-radius: 8px;
}

.btn-dark-green:hover {
    background-color: #22583d;
}

/* Card Styling */
.card {
    border-radius: 12px;
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
}

/* Form Labels */
.form-label {
    font-weight: bold;
}
</style>

@endsection
