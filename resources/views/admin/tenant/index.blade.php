@extends('admin.includes.master')

@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Tenant Management</h4>
        </div>
        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Tenants</li>
            </ol>
        </div>
    </div>

    <div class="page-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Tenants</h4>
                        <p class="text-muted font-14">

                        </p>
                         <!-- Filters Section -->
                         <div class="d-flex row rounded " style="margin-bottom: 20px">
                            <div class="col-md-2">
                                <input type="text" id="searchFilter" class="form-control form-control-sm rounded-pill" placeholder="Search by Name or Email">
                            </div>
                            <div class="col-md-2">
                                <select id="statusSelect" class="form-select form-select-sm rounded-pill">
                                    <option value="">All Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <div class="d-flex col-md-8 justify-content-end mt-1">
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

                        <!-- Tenants Table -->
                        <table id="tenants-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tenant ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Joined Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>TEN-001</td>
                                    <td>Acme Corp</td>
                                    <td>acme@example.com</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><i class="fas fa-calendar-alt"></i> Jan 10, 2024</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Deactivate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>TEN-002</td>
                                    <td>Beta Ltd.</td>
                                    <td>beta@example.com</td>
                                    <td><span class="badge bg-danger">Inactive</span></td>
                                    <td><i class="fas fa-calendar-alt"></i> Feb 5, 2024</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Deactivate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>TEN-003</td>
                                    <td>Gamma Enterprises</td>
                                    <td>gamma@example.com</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td><i class="fas fa-calendar-alt"></i> Mar 20, 2024</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye"></i> View</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Deactivate</a></li>
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
        //     "use strict";

        //     $("#tenants-datatable").DataTable({
        //         responsive: true,
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
