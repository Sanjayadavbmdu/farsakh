@extends('tenant.includes.master')


@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Maintenance</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>

                <li class="breadcrumb-item active">Maintenance</li>
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
                        <h4 class="header-title">Maintenance Report Form</h4>
                        <p class="text-muted font-14">

                        </p>

                        

                        <div class="row">
                            <div class="">
                                <form>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Property</label>
                                        <select name="" class="form-control" id="">
                                            <option value="" selected disabled>Select Property </option>
                                            <option value="">Property1</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Issue Title</label>
                                        <input type="text" class="form-control" name="" id=""
                                            placeholder="Enter Issue Here">
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Description</label>
                                        <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Priority Level</label>
                                        <select name="" class="form-control" id="">
                                            <option value="">Select Priority Level</option>

                                            <option value="">Urgent</option>
                                            <option value="">Medium</option>
                                            <option value="">Low</option>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Attach Supporting Media (Images or
                                            Videos)</label>
                                        <input type="file" id="example-fileinput" multiple class="form-control">
                                    </div>

                                    <button class="btn btn-primary">Submit</button>

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
