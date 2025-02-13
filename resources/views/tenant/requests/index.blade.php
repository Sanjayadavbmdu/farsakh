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

    <div class="row" style="
    width: 684px;
">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Submit a Request</h4>
                    <p class="text-muted font-14">
                        
                    </p>


                    <div class="row">
                        <div class="">
                            <form>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Property</label>
                                    <select name="" class="form-select" id="">
                                        <option value="" selected disabled>Select Property </option>
                                        <option value="">Property1</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Request Type</label>
                                    <select class="form-select" id="example-select">
                                        <option value="-1" selected disabled>Select Request Type</option>
                                        <option>Evacuation Request</option>
                                        <option>Property Inquiry</option>
                                        <option>Ask to leave property</option>
                                        <option>Ask to lease</option>
                                        <option>Ask for maintenance</option>
                                        <option>Maintenance Request</option>
                                       
                                    </select>
                                </div>   
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description</label>
                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                </div>

                                <button class="btn btn-primary">Submit Request</button>
                                <a href="{{route('tenant.request.show')}}" class="btn btn-primary">Show Requests</a>
                               
                            </form>
                        </div> <!-- end col -->

                      
                    </div>
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