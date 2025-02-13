@extends('admin.includes.master')

@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Add New Property Auction</h4>
        </div>
        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Auctions</a></li>
                <li class="breadcrumb-item active">Add Auction</li>
            </ol>
        </div>
    </div>

    <div class="page-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Auction Details</h4>

                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Auction Information -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Auction Title</label>
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
                                    <label class="form-label">Auction Status</label>
                                    <select name="status" class="form-select">
                                        <option value="Upcoming">Upcoming</option>
                                        <option value="Ongoing">Ongoing</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Auction Pricing & Timing -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Starting Price ($)</label>
                                    <input type="number" name="starting_price" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Reserve Price ($)</label>
                                    <input type="number" name="reserve_price" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Minimum Bid Increment ($)</label>
                                    <input type="number" name="min_increment" class="form-control">
                                </div>
                            </div>

                            <!-- Auction Timing -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Start Date & Time</label>
                                    <input type="datetime-local" name="start_time" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">End Date & Time</label>
                                    <input type="datetime-local" name="end_time" class="form-control" required>
                                </div>
                            </div>

                            <!-- Property Details -->
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
                                    <label class="form-label">Size (sqft)</label>
                                    <input type="number" name="size" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Year Built</label>
                                    <input type="number" name="year_built" class="form-control">
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

                            <!-- Upload Images & Documents -->
                            <div class="mb-3">
                                <label class="form-label">Upload Property Images</label>
                                <input type="file" name="images[]" multiple class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Legal Documents</label>
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
                                <button type="submit" class="btn btn-primary">Submit Auction</button>
                            </div>

                        </form>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
@endsection
