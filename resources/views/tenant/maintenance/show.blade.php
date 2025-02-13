@extends('tenant.includes.master')


@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Maintenance Report</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>

                <li class="breadcrumb-item active">Maintenance Report</li>
            </ol>
        </div>
    </div>


    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Maintenance Reports</h4>
                        <p class="text-muted font-14">

                        </p>


                        <table id="scroll-vertical-datatable" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Maintenance ID</th>
                                    <th>Property</th>
                                    <th>Issue</th>
                                    <th>Description</th>
                                    <th>Priority Level</th>
                                    <th>Attachments</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <tr>
                                    <td>1</td>
                                <td>July 24, 1950</td>

                                    <td>MTN-001</td>
                                    <td>Sunrise Apartments</td>
                                    <td>Leaking Pipe</td>
                                    <td>Water leakage in the kitchen sink.</td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td><a href="#"><i class="ri-file-download-line text-primary fs-20"></i></a></td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                        <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                <td>July 24, 1950</td>

                                    <td>MTN-002</td>
                                    <td>Green Valley</td>
                                    <td>Broken Window</td>
                                    <td>Cracked glass in the living room.</td>
                                    <td><span class="badge bg-warning">Medium</span></td>
                                    <td><a href="#"><i class="ri-file-download-line text-primary fs-20"></i></a></td>
                                    <td><span class="badge bg-success">Resolved</span></td>
                                    <td>
                                        <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                        <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                <td>July 24, 1950</td>

                                    <td>MTN-003</td>
                                    <td>Lakeview Condos</td>
                                    <td>Power Outage</td>
                                    <td>Electrical issue in the lobby.</td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td><a href="#"><i class="ri-file-download-line text-primary fs-20"></i></a></td>
                                    <td><span class="badge bg-warning">In Progress</span></td>
                                    <td>
                                        <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                        <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                <td>July 24, 1950</td>

                                    <td>MTN-004</td>
                                    <td>Blue Hills</td>
                                    <td>Broken Elevator</td>
                                    <td>Elevator stuck between floors.</td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td><a href="#"><i class="ri-file-download-line text-primary fs-20"></i></a></td>
                                    <td><span class="badge bg-warning">In Progress</span></td>
                                    <td>
                                        <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                        <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                <td>July 24, 1950</td>

                                    <td>MTN-005</td>
                                    <td>Sunset Villas</td>
                                    <td>AC Malfunction</td>
                                    <td>Air conditioning not cooling properly.</td>
                                    <td><span class="badge bg-warning">Medium</span></td>
                                    <td><a href="#"><i class="ri-file-download-line text-primary fs-20"></i></a></td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                        <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
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
