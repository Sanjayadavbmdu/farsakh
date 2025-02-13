@extends('admin.includes.master')

@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Offices/Companies</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Offices/Companies</li>
            </ol>
        </div>
    </div>

    <div class="page-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Offices/Companies</h4>
                        <p class="text-muted font-14">Manage listed offices and companies.</p>

                        <!-- Filters Section -->
                        <div class="d-flex row rounded mb-3">
                            <div class="col-md-2">
                                <input type="text" id="searchFilter" class="form-control form-control-sm rounded-pill" placeholder="Search">
                            </div>
                            <div class="col-md-2">
                                <select id="companySelect" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Companies</option>
                                    <option value="TechCorp">TechCorp</option>
                                    <option value="Biz Solutions">Biz Solutions</option>
                                    <option value="Finance Ltd">Finance Ltd</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="locationSelect" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Locations</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="New York">New York</option>
                                    <option value="London">London</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="typeSelect" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Types</option>
                                    <option value="IT">IT</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Real Estate">Real Estate</option>
                                </select>
                            </div>

                            <div class="d-flex col-md-4 justify-content-end">
                                <button class="btn btn-primary rounded-circle btn-icon me-2" id="exportExcel" title="Export to Excel">
                                    <i class="fa-solid fa-file-excel"></i>
                                </button>
                                <button class="btn btn-primary rounded-circle btn-icon me-2" id="exportPdf" title="Export to PDF">
                                    <i class="fa-solid fa-file-pdf"></i>
                                </button>
                                <button class="btn btn-primary rounded-circle btn-icon me-2" id="printButton" title="Print">
                                    <i class="fa-solid fa-print"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Table of Offices/Companies -->
                        <table id="offices-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company ID</th>
                                    <th>Company Name</th>
                                    <th>Location</th>
                                    <th>Owner</th>
                                    <th>Revenue</th>
                                    <th>Status</th>
                                    <th>Industry</th>
                                    <th>Founded</th>
                                    <th>Enquiries</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>CMP-001</td>
                                    <td>TechCorp</td>
                                    <td><i class="fas fa-map-marker-alt text-primary"></i> Dubai, UAE</td>
                                    <td>John Doe</td>
                                    <td>$10M</td>
                                    <td><span class="badge bg-success"><i class="fas fa-check-circle"></i> Active</span></td>
                                    <td>IT</td>
                                    <td><i class="fas fa-calendar-alt"></i> 2010</td>
                                    <td>5</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>CMP-002</td>
                                    <td>Biz Solutions</td>
                                    <td><i class="fas fa-map-marker-alt text-primary"></i> New York, USA</td>
                                    <td>Jane Smith</td>
                                    <td>$20M</td>
                                    <td><span class="badge bg-danger"><i class="fas fa-times-circle"></i> Inactive</span></td>
                                    <td>Finance</td>
                                    <td><i class="fas fa-calendar-alt"></i> 2005</td>
                                    <td>3</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>CMP-003</td>
                                    <td>Finance Ltd</td>
                                    <td><i class="fas fa-map-marker-alt text-primary"></i> London, UK</td>
                                    <td>Michael Brown</td>
                                    <td>$50M</td>
                                    <td><span class="badge bg-warning"><i class="fas fa-exclamation-circle"></i> Pending</span></td>
                                    <td>Banking</td>
                                    <td><i class="fas fa-calendar-alt"></i> 1998</td>
                                    <td>8</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div> <!-- container -->
@endsection

@section('script')
    <script>
        // $(document).ready(function() {
        //     "use strict";

        //     $("#offices-datatable").DataTable({
        //         scrollY: "350px",
        //         scrollCollapse: true,
        //         paging: false,
        //         language: {
        //             paginate: {
        //                 previous: "<i class='ri-arrow-left-s-line'>",
        //                 next: "<i class='ri-arrow-right-s-line'>"
        //             }
        //         },
        //         drawCallback: function() {
        //             $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        //         }
        //     });

        // });
    </script>
@endsection
