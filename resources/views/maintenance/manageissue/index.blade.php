@extends('maintenance.includes.master')


@section('content')
<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-bold mb-0">Manage Issue</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>
            
            <li class="breadcrumb-item active">Manage Issue</li>
        </ol>
    </div>
</div>


<div class="page-container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Manage Issue</h4>
                    <p class="text-muted font-14">
                        
                    </p>


                    <table id="scroll-vertical-datatable"
                        class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Maintenance ID</th>
                                <th>Property Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>July 24, 1950</td>
                                <td>FR-01-20234</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset btn btn-primary">Send Response</a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line"></i></a>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>July 24, 1950</td>
                                <td>FR-01-20234</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset btn btn-primary">Send Response</a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>July 24, 1950</td>
                                <td>FR-01-20234</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset btn btn-primary">Send Response</a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>July 24, 1950</td>
                                <td>FR-01-20234</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset btn btn-primary">Send Response</a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>July 24, 1950</td>
                                <td>FR-01-20234</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset btn btn-primary">Send Response</a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>July 24, 1950</td>
                                <td>FR-01-20234</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset btn btn-primary">Send Response</a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>July 24, 1950</td>
                                <td>FR-01-20234</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset btn btn-primary">Send Response</a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>July 24, 1950</td>
                                <td>FR-01-20234</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="text-muted">
                                    <a href="javascript: void(0);" class="link-reset btn btn-primary">Send Response</a>
                                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i
                                            class="ri-delete-bin-line"></i></a>
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