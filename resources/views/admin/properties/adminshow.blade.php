@extends('admin.includes.master')

@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Property Listings</h4>
        </div>
        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Properties</li>
            </ol>
        </div>
    </div>

    <div class="page-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Properties Listings</h4>
                        <p class="text-muted font-14">

                        </p>

                        <!-- Filters Section -->
                        <div class="d-flex row rounded " style="margin-bottom: 20px">
                            <div class="col-md-2">
                                <input type="text" id="searchFilter" class="form-control form-control-sm rounded-pill" placeholder="Search by Name or Email">
                            </div>
                            <div class="col-md-2">
                                <select id="statusFilter" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Status</option>
                                    <option value="Available">Available</option>
                                    <option value="Sold">Sold</option>
                                    <option value="Rented">Rented</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="statusSelect" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <div class="d-flex col-md-6 justify-content-end mt-1">
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
                                <a href="{{route('admin.properties.add')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> Add New Listing
                                </a>
                            </div>
                        </div>

                        <!-- Property Listings Table -->
                        <table id="properties-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Property Title</th>
                                    <th>Type</th>
                                    <th>Location</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Added On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Luxury Beach Villa</td>
                                    <td>Villa</td>
                                    <td>Miami, FL</td>
                                    <td>$1,500,000</td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td><i class="fas fa-calendar-alt"></i> Jan 20, 2024</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Modern Apartment in NYC</td>
                                    <td>Apartment</td>
                                    <td>New York, NY</td>
                                    <td>$850,000</td>
                                    <td><span class="badge bg-danger">Sold</span></td>
                                    <td><i class="fas fa-calendar-alt"></i> Feb 10, 2024</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Commercial Office Space</td>
                                    <td>Commercial</td>
                                    <td>Los Angeles, CA</td>
                                    <td>$2,300,000</td>
                                    <td><span class="badge bg-warning">Rented</span></td>
                                    <td><i class="fas fa-calendar-alt"></i> Mar 5, 2024</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div> 
                </div> 
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // $(document).ready(function() {
        //     $('#properties-datatable').DataTable();
        // });
    </script>
@endsection
