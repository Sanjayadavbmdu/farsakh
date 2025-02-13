@extends('admin.includes.master')

@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Add New Property</h4>
        </div>
        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Properties</a></li>
                <li class="breadcrumb-item active">Add Property</li>
            </ol>
        </div>
    </div>

    <div class="page-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Property Information</h4>

                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Basic Information -->
                            <div class="row mb-3 mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Property Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Property Type</label>
                                    <select name="type" class="form-select">
                                        <option value="Apartment">Apartment</option>
                                        <option value="House">House</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Commercial">Commercial</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Property Status</label>
                                    <select name="status" class="form-select">
                                        <option value="For Sale">For Sale</option>
                                        <option value="For Rent">For Rent</option>
                                        <option value="Sold">Sold</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Pricing & Location -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Price ($)</label>
                                    <input type="number" name="price" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Size (sqft)</label>
                                    <input type="number" name="size" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Year Built</label>
                                    <input type="number" name="year_built" class="form-control">
                                </div>
                            </div>

                            <!-- Property Features -->
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Bedrooms</label>
                                    <input type="number" name="bedrooms" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Bathrooms</label>
                                    <input type="number" name="bathrooms" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Garage</label>
                                    <input type="number" name="garage" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Furnished</label>
                                    <select name="furnished" class="form-select">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Semi">Semi-Furnished</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Address & Location -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">City</label>
                                    <input type="text" name="city" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" name="zip" class="form-control">
                                </div>
                            </div>

                            <!-- Google Maps -->
                            <div class="mb-3">
                                <label class="form-label">Property Location (Google Maps)</label>
                                <input type="text" name="map_location" class="form-control" placeholder="Paste Google Maps URL">
                            </div>

                            <!-- Amenities -->
                            <div class="mb-3">
                                <label class="form-label">Amenities</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="checkbox" name="amenities[]" value="Swimming Pool"> Swimming Pool
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="amenities[]" value="Gym"> Gym
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="amenities[]" value="Parking"> Parking
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="amenities[]" value="Security"> Security
                                    </div>
                                </div>
                            </div>

                            <!-- Upload Images & Documents -->
                            <div class="mb-3">
                                <label class="form-label">Upload Property Images</label>
                                <input type="file" name="images[]" multiple class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Documents (Ownership Proof, Floor Plan, etc.)</label>
                                <input type="file" name="documents[]" multiple class="form-control">
                            </div>

                            <!-- SEO Meta Data -->
                            <div class="mb-3">
                                <label class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="2"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit Property</button>
                            </div>

                        </form>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
@endsection
