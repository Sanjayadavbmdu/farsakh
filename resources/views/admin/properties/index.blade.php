@extends('admin.includes.master')



@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Properties</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>

                <li class="breadcrumb-item active">Properties</li>
            </ol>
        </div>
    </div>


    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Properties</h4>
                        <p class="text-muted font-14">

                        </p>
                         <!-- Filters Section -->
                         <div class="d-flex row rounded " style="margin-bottom: 20px">
                            <div class="col-md-2">
                                <input type="text" id="searchFilter" class="form-control form-control-sm rounded-pill" placeholder="Search">
                            </div>
                            <div class="col-md-2">
                                {{-- <label for="propertySelect" class="form-label">Select Property</label> --}}
                                <select id="propertySelect" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Properties</option>
                                    <option value="Property 1">Property 1</option>
                                    <option value="Property 2">Property 2</option>
                                    <option value="Property 3">Property 3</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                {{-- <label for="apartmentSelect" class="form-label">Select Apartment</label> --}}
                                <select id="apartmentSelect" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Location</option>
                                    <option value="Apartment A">Location A</option>
                                    <option value="Apartment B">Location B</option>
                                    <option value="Apartment C">Location C</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                {{-- <label for="typeSelect" class="form-label">Select Type</label> --}}
                                <select id="typeSelect" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Types</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Maintenance">Maintenance</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                           
                        
                           
                        
                        
                            <div class="d-flex col-md-4 justify-content-end mt-1 mb-1">
                                <button class="btn btn-primary mr-1 rounded-circle btn-icon me-2" id="exportExcel" title="Excel">
                                    <i class="fa-solid fa-file-excel"></i>
                                </button>
                                <button class="btn btn-primary mr-1 rounded-circle btn-icon me-2" id="copyButton" title="COPY">
                                    <i class="fa-solid fa-copy"></i>
                                </button>
                                <button class="btn btn-primary mr-1 rounded-circle btn-icon me-2" id="exportPdf" title="PDF">
                                    <i class="fa-solid fa-file-pdf"></i>
                                </button>
                                <button class="btn btn-primary mr-1 rounded-circle btn-icon me-2" title="Print" id="printButton">
                                    <i class="fa-solid fa-print"></i>
                                </button>
                            </div>
                            
                         </div>


                         <table id="properties-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Property ID</th>
                                    <th>Property Name</th>
                                    <th>Location</th>
                                    <th>Owner Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                    <th>Listed Date</th>
                                    <th>Enquiry</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PR-001</td>
                                    <td>Sunrise Villa</td>
                                    <td><i class="fas fa-map-marker-alt text-primary"></i> Dubai, UAE</td>
                                    <td>John Doe</td>
                                    <td>$1,200,000</td>
                                    <td><span class="badge bg-success"><i class="fas fa-check-circle"></i> Available</span></td>
                                    <td>Villa</td>
                                    <td><i class="fas fa-calendar-alt"></i> Feb 10, 2024</td>
                                    <td>2</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('admin.property.show')}}"><i class="fas fa-eye"></i> View</a></li>
                                                {{-- <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li> --}}
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                        
                                <tr>
                                    <td>2</td>
                                    <td>PR-002</td>
                                    <td>Skyline Apartment</td>
                                    <td><i class="fas fa-map-marker-alt text-primary"></i> New York, USA</td>
                                    <td>Jane Smith</td>
                                    <td>$850,000</td>
                                    <td><span class="badge bg-danger"><i class="fas fa-times-circle"></i> Sold</span></td>
                                    <td>Apartment</td>
                                    <td><i class="fas fa-calendar-alt"></i> Jan 15, 2024</td>
                                    <td>3</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                {{-- <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li> --}}
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                        
                                <tr>
                                    <td>3</td>
                                    <td>PR-003</td>
                                    <td>Business Tower</td>
                                    <td><i class="fas fa-map-marker-alt text-primary"></i> London, UK</td>
                                    <td>Michael Johnson</td>
                                    <td>$3,500,000</td>
                                    <td><span class="badge bg-warning"><i class="fas fa-exclamation-circle"></i> Rented</span></td>
                                    <td>Office</td>
                                    <td><i class="fas fa-calendar-alt"></i> Dec 5, 2023</td>
                                    <td>3</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                {{-- <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li> --}}
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                        
                                <tr>
                                    <td>4</td>
                                    <td>PR-004</td>
                                    <td>Luxury Penthouse</td>
                                    <td><i class="fas fa-map-marker-alt text-primary"></i> Paris, France</td>
                                    <td>Emily White</td>
                                    <td>$2,200,000</td>
                                    <td><span class="badge bg-success"><i class="fas fa-check-circle"></i> Available</span></td>
                                    <td>Penthouse</td>
                                    <td><i class="fas fa-calendar-alt"></i> Feb 5, 2024</td>
                                    <td>20</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                {{-- <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li> --}}
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        


                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div><!-- end row-->




    </div> <!-- container -->
@endsection


@section('script')
    <script>
        $(document).ready(function() {
            "use strict";

            $("#scroll-vertical-datatable").DataTable({
                scrollY: "350px",
                scrollCollapse: !0,
                paging: !1,
                language: {
                    paginate: {
                        previous: "<i class='ri-arrow-left-s-line'>",
                        next: "<i class='ri-arrow-right-s-line'>"
                    }
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                }
            })

        });
    </script>
@endsection
