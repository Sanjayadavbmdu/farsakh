@extends('tenant.includes.master')

@section('content')
    <div class="page-title-head d-flex align-items-center gap-2">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-bold mb-0">Documents</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0 fs-13">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Farsak</a></li>

                <li class="breadcrumb-item active">Documents</li>
            </ol>
        </div>
    </div>
    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="header-title">Documents</h4> --}}
                        <p class="text-muted font-14">

                        </p>



                        <!-- Document Section -->
                        <div id="my-rentals" class="p-2">
                            {{-- <h1 class="text-center mb-4">Document Management</h1> --}}
                            <div class="card mb-3">
                                <div class="card-body" style="background-color: #e7eaec;">
                                    <h5 class="card-title">Lease Contract</h5>
                                    <p class="card-text">This document contains the terms and conditions of your lease
                                        agreement.</p>
                                    <a href="#" class="btn btn-primary me-2">View</a>
                                    <a href="#" class="btn btn-secondary">Download</a>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body" style="background-color: #e7eaec;">
                                    <h5 class="card-title">Payment Receipt - January 2025</h5>
                                    <p class="card-text">Receipt for your payment made in January 2025.</p>
                                    <a href="#" class="btn btn-primary me-2">View</a>
                                    <a href="#" class="btn btn-secondary">Download</a>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body" style="background-color: #e7eaec;">
                                    <h5 class="card-title">Payment Receipt - February 2025</h5>
                                    <p class="card-text">Receipt for your payment made in February 2025.</p>
                                    <a href="#" class="btn btn-primary me-2">View</a>
                                    <a href="#" class="btn btn-secondary">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
