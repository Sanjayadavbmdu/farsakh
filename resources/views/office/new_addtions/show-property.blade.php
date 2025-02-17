@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-building"></i> Properties List</h4>
            <a href="{{route('office.new_addtions.add.property')}}" class="btn btn text-white"><i class="fas fa-plus" style="padding-right: 5px"></i> Add New Property</a>
        </div>
    </div>

 <!-- Filters Section -->
 <div class="d-flex row rounded " style="margin-bottom: 20px">
    <div class="col-md-3">
        <input type="text" id="searchFilter" class="form-control form-control-sm rounded-pill" placeholder="Search by Name or Email">
    </div>
    <div class="col-md-2">
        {{-- <label class="form-label">Property Type</label> --}}
        <select class="form-select  form-select-sm rounded-pill">
            <option value="" selected disabled>Property Type</option>
            <option>All</option>
            <option>Apartment</option>
            <option>Villa</option>
            <option>Commercial</option>
            <option>Land</option>
        </select>
    </div>
    <div class="col-md-2">
        <select class="form-select form-select-sm rounded-pill">
            <option value="" selected disabled>Select Status</option>
            <option>All</option>
            <option>Available</option>
            <option>Rented</option>
            <option>Sold</option>
        </select>
    </div>
    <div class="d-flex col-md-5 justify-content-end mt-1">
        <button class="btn btn-primary rounded-circle btn-icon me-2" id="exportExcel" title="Excel">
            <i class="fa-solid fa-file-excel"></i>
        </button>
        <button class="btn btn-primary rounded-circle btn-icon me-2" id="copyButton" title="Copy">
            <i class="fa-solid fa-copy"></i>
        </button>
        <button class="btn btn-primary rounded-circle btn-icon me-2" id="exportPdf" title="PDF">
            <i class="fa-solid fa-file-pdf"></i>
        </button>
        <button class="btn btn-primary rounded-circle btn-icon me-2" id="printButton" title="Print">
            <i class="fa-solid fa-print"></i>
        </button>
    </div>
</div>

    <!-- Properties Display - Cards View -->
    <div class="row">
        @php
            $dummyProperties = [
                ['name' => 'Luxury Villa', 'type' => 'Villa', 'price' => 450000, 'status' => 'Available', 'owner' => 'John Doe', 'image' => 'https://cdn.britannica.com/05/157305-004-53D5D212.jpg'],
                ['name' => 'Modern Apartment', 'type' => 'Apartment', 'price' => 220000, 'status' => 'Rented', 'owner' => 'Sarah Smith', 'image' => 'https://cdn.britannica.com/05/157305-004-53D5D212.jpg'],
                ['name' => 'Beach House', 'type' => 'Villa', 'price' => 700000, 'status' => 'Available', 'owner' => 'Emma Johnson', 'image' => 'https://cdn.britannica.com/05/157305-004-53D5D212.jpg'],
                ['name' => 'City Commercial Space', 'type' => 'Commercial', 'price' => 1500000, 'status' => 'Sold', 'owner' => 'Michael Brown', 'image' => 'https://cdn.britannica.com/05/157305-004-53D5D212.jpg'],
                ['name' => 'Suburban Home', 'type' => 'Apartment', 'price' => 320000, 'status' => 'Rented', 'owner' => 'David Lee', 'image' => 'https://cdn.britannica.com/05/157305-004-53D5D212.jpg'],
            ];
        @endphp

    </div>

    <!-- Table View -->
    <div class="card shadow-sm ">
        <div class="card-body">
            <table id="scroll-vertical-datatable"
            class="table table-striped dt-responsive nowrap w-100">
                <thead class="">
                    <tr>
                        <th>Property</th>
                        <th>Type</th>
                        <th>Owner</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dummyProperties as $property)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ $property['image'] }}" class="rounded me-3" width="40">
                                <div>
                                    <h6 class="mb-0">{{ $property['name'] }}</h6>
                                    <small class="text-muted">#PROP-{{ rand(1000,9999) }}</small>
                                </div>
                            </div>
                        </td>
                        <td>{{ $property['type'] }}</td>
                        <td>{{ $property['owner'] }}</td>
                        <td>${{ number_format($property['price']) }}</td>
                        <td><span class="badge bg-{{ $property['status'] == 'Available' ? 'success' : ($property['status'] == 'Rented' ? 'warning' : 'danger') }}">{{ ucfirst($property['status']) }}</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<style>
/* Dark Green Theme */
.bg-dark-green {
    background-color: #2d714e !important;
}

/* Property Card Styling */
.property-card {
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    margin-bottom: 20px;
}

.property-card:hover {
    transform: scale(1.03);
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
}

/* Property Image */
.property-image {
    height: 200px;
    object-fit: cover;
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
</style>

@endsection
