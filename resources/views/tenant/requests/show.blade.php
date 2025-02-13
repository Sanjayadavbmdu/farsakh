@extends('tenant.includes.master')


@section('content')
<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-bold mb-0">Requests</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>
            
            <li class="breadcrumb-item active">Requests</li>
        </ol>
    </div>
</div>


<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Requests</h4>
                    <p class="text-muted font-14">
                        
                    </p>


                    <table id="scroll-vertical-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Req. ID</th>
                                <th>Property</th>
                                <th>Request Type</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2024-02-12</td>
                                <td>REQ-001</td>
                                <td>Sunrise Apartments</td>

                                <td>Maintenance</td>
                                <td>Leaking pipe in the kitchen</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                    <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2024-02-11</td>
                                <td>REQ-002</td>
                                <td>Sunrise Apartments</td>

                                <td>Cleaning</td>
                                <td>Deep cleaning required in lobby</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                    <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                    <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2024-02-10</td>
                                <td>REQ-003</td>
                                <td>Sunrise Apartments</td>

                                <td>Security</td>
                                <td>Security camera malfunctioning</td>
                                <td><span class="badge bg-danger">Urgent</span></td>
                                <td>
                                    <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                    <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2024-02-09</td>
                                <td>REQ-004</td>
                                <td>Sunrise Apartments</td>

                                <td>Electrical</td>
                                <td>Power outage in basement</td>
                                <td><span class="badge bg-warning">In Progress</span></td>
                                <td>
                                    <a href="#" class="text-success fs-20 p-1"><i class="ri-edit-line"></i></a>
                                    <a href="#" class="text-danger fs-20 p-1"><i class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2024-02-08</td>
                                <td>REQ-005</td>
                                <td>Sunrise Apartments</td>

                                <td>Plumbing</td>
                                <td>Clogged drain in restroom</td>
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

$(document).ready(function () { "use strict";

    $("#scroll-vertical-datatable").DataTable({
     scrollY: "350px", 
     scrollCollapse: !0,
      paging: !1,
       language: { paginate: { previous: "<i class='ri-arrow-left-s-line'>", next: "<i class='ri-arrow-right-s-line'>" } },
        drawCallback: function () { $(".dataTables_paginate > .pagination").addClass("pagination-rounded") } })

       });
</script>


@endsection