@extends('tenant.includes.master')


@section('content')
<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-bold mb-0">Reciept History</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>
            
            <li class="breadcrumb-item active">Reciept History</li>
        </ol>
    </div>
</div>


<div class="page-container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="header-title">Receipt History</h4> --}}

                    <!-- Filters Section -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="propertySelect" class="form-label">Select Property</label>
                            <select id="propertySelect" class="form-control">
                                <option value="">All Properties</option>
                                <option value="Property 1">Property 1</option>
                                <option value="Property 2">Property 2</option>
                                <option value="Property 3">Property 3</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="apartmentSelect" class="form-label">Select Apartment</label>
                            <select id="apartmentSelect" class="form-control">
                                <option value="">All Apartments</option>
                                <option value="Apartment A">Apartment A</option>
                                <option value="Apartment B">Apartment B</option>
                                <option value="Apartment C">Apartment C</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="typeSelect" class="form-label">Select Type</label>
                            <select id="typeSelect" class="form-control">
                                <option value="">All Types</option>
                                <option value="Rent">Rent</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="transactionType" class="form-label">Transaction Type</label>
                            <select id="transactionType" class="form-control">
                                <option value="">All Transactions</option>
                                <option value="Give">Give</option>
                                <option value="Take">Take</option>
                            </select>
                        </div>
                    </div>

                    <!-- Receipt History Table -->
                    <table id="scroll-vertical-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Feb 12, 2024</td>
                                <td>$1000</td>
                                <td><i class="ri-checkbox-circle-line text-success"></i> Success</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Feb 11, 2024</td>
                                <td>$2000</td>
                                <td><i class="ri-checkbox-circle-line text-success"></i> Success</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Feb 10, 2024</td>
                                <td>$1500</td>
                                <td><i class="ri-error-warning-line text-danger"></i> Failed</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Feb 9, 2024</td>
                                <td>$1800</td>
                                <td><i class="ri-time-line text-warning"></i> Pending</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Feb 8, 2024</td>
                                <td>$1300</td>
                                <td><i class="ri-checkbox-circle-line text-success"></i> Success</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div><!-- end row-->
</div>
 <!-- container -->

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