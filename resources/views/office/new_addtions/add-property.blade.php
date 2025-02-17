@extends('office.includes.master')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <div class="content-wrapper p-4" style="margin-right: 250px">
        <!-- Page Header -->
        <div class="card shadow-sm mb-4">
            <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
                <h4 class="fw-bold"><i class="fas fa-building"></i> Register New Property & Type</h4>
            <a href="{{route('office.new_addtions.show.property')}}" class="btn btn" style="color: white"><i class="fas fa-list" style="padding-right: 5px"></i> View Properties</a>

            </div>
        </div>

        <!-- Property Registration Form -->
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Property Basic Details -->
                    <h5 class="fw-bold mb-3">🏠 Property Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Property Name</label>
                            <input type="text" class="form-control" name="property_name"
                                placeholder="Enter property name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Property Type</label>
                            <select class="form-control" name="property_type" required>
                                <option value="">Select Type</option>
                                <option value="apartment">Apartment</option>
                                <option value="villa">Villa</option>
                                <option value="commercial">Commercial</option>
                                <option value="land">Land</option>
                            </select>
                        </div>
                    </div>

                    <!-- Property Address & Location -->
                    <h5 class="fw-bold mt-4 mb-3">📍 Location & Address</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter property address"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city" placeholder="Enter city" required>
                        </div>
                    </div>

                    <!-- Map for Selecting Location -->
                   <!-- Property Map -->
<h5 class="fw-bold mt-4 mb-3">📍 Select Property Location</h5>
<div id="map" style="height: 300px; border-radius: 8px;"></div>
<input type="hidden" name="latitude" id="latitude">
<input type="hidden" name="longitude" id="longitude">

                    <!-- Upload Property Images -->
                    <h5 class="fw-bold mt-4 mb-3">📷 Upload Property Images</h5>
                    <div class="mb-3">
                        <input type="file" class="form-control" name="property_images[]" multiple required>
                    </div>

                    <!-- Property Pricing & Features -->
                    <h5 class="fw-bold mt-4 mb-3">💰 Pricing & Features</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Price ($)</label>
                            <input type="number" class="form-control" name="price" placeholder="Enter price" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Number of Bedrooms</label>
                            <input type="number" class="form-control" name="bedrooms" placeholder="Enter bedrooms count"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Number of Bathrooms</label>
                            <input type="number" class="form-control" name="bathrooms" placeholder="Enter bathrooms count"
                                required>
                        </div>
                    </div>

                    <!-- Assign to Owner & Tenant -->
                    <h5 class="fw-bold mt-4 mb-3">👤 Assign Owner & Tenant</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Select Owner</label>
                            <select class="form-control" name="owner_id" required>
                                <option value="">Choose Owner</option>
                                <option value="1">John Doe</option>
                                <option value="2">Sarah Smith</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Select Tenant</label>
                            <select class="form-control" name="tenant_id">
                                <option value="">Choose Tenant (Optional)</option>
                                <option value="3">Mark Spencer</option>
                                <option value="4">Emily Johnson</option>
                            </select>
                        </div>
                    </div>

                    <!-- Property Status -->
                    <h5 class="fw-bold mt-4 mb-3">📌 Property Status</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status" required>
                                <option value="available">Available</option>
                                <option value="rented">Rented</option>
                                <option value="sold">Sold</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Listed Since</label>
                            <input type="date" class="form-control" name="listed_date" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end mt-4">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"
                                style="padding-right: 5px"></i> Register Property</button>
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

        /* Map Placeholder */
        #map {
            border: 2px solid #ccc;
            border-radius: 8px;
        }
    </style>

    <!-- Map Script (Example: Google Maps, Leaflet, OpenStreetMap) -->
  <!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('map').setView([25.276987, 55.296249], 12); // Default view (Dubai)

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var marker = L.marker([25.276987, 55.296249], { draggable: true }).addTo(map);

        marker.on('dragend', function (event) {
            var position = marker.getLatLng();
            document.getElementById('latitude').value = position.lat;
            document.getElementById('longitude').value = position.lng;
        });
    });
</script>
@endsection
