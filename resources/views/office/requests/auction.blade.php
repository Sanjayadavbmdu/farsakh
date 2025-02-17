@extends('office.includes.master')


@section('content')


<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-gavel"></i> Auction Requests Management</h4>
        </div>
    </div>

    <!-- Filters Section -->
    <div class="d-flex row rounded " style="margin-bottom: 20px">
        <div class="col-md-2">
            <label class="form-label">Property</label>
            <select class="form-control form-select-sm rounded-pill">
                <option>All Properties</option>
                <option>Luxury Villa</option>
                <option>Downtown Apartment</option>
            </select>
        </div>
        <div class="col-md-2">
            <label class="form-label">Status</label>
            <select class="form-control form-select-sm rounded-pill">
                <option>All</option>
                <option>Pending</option>
                <option>Approved</option>
                <option>Rejected</option>
            </select>
        </div>
        <div class="col-md-2">
            <label class="form-label">Auction Date</label>
            <input type="date" class="form-control  rounded-pill">
        </div>
        {{-- <div class="col-md-2">
            <select id="statusFilter" class="form-select form-select-sm rounded-pill">
                <option value="">All Status</option>
                <option value="Permanently Banned">Permanently Banned</option>
                <option value="Temporarily Banned">Temporarily Banned</option>
            </select>
        </div> --}}
        <div class="d-flex col-md-6 justify-content-end mt-1">
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

    <!-- Auction Requests Table -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Auction ID</th>
                        <th>Property</th>
                        <th>Owner</th>
                        <th>Auction Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AUC-3001</td>
                        <td>Luxury Villa</td>
                        <td>John Smith</td>
                        <td>2025-03-10</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#auctionDetailsModal"><i class="fas fa-eye"></i> View</button>
                            <button class="btn btn-sm btn-outline-success"><i class="fas fa-check"></i> Approve</button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i> Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <td>AUC-3002</td>
                        <td>Downtown Apartment</td>
                        <td>Alice Johnson</td>
                        <td>2025-02-25</td>
                        <td><span class="badge bg-success">Approved</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i> View</button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-check-double"></i> Mark Completed</button>
                        </td>
                    </tr>
                    <tr>
                        <td>AUC-3003</td>
                        <td>Seaside Bungalow</td>
                        <td>Mark Lee</td>
                        <td>2025-02-15</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i> View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Auction Request Details Modal -->
<div class="modal fade" id="auctionDetailsModal" tabindex="-1" aria-labelledby="auctionDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark-green text-white">
                <h5 class="modal-title" id="auctionDetailsLabel"><i class="fas fa-info-circle"></i> Auction Request Details</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Property:</strong> Luxury Villa</p>
                <p><strong>Owner:</strong> John Smith</p>
                <p><strong>Auction Date:</strong> 2025-03-10</p>
                <p><strong>Starting Bid:</strong> $500,000</p>
                <p><strong>Current Highest Bid:</strong> $750,000</p>
                <p><strong>Status:</strong> <span class="badge bg-warning">Pending</span></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-success"><i class="fas fa-check"></i> Approve</button>
                <button class="btn btn-outline-danger"><i class="fas fa-times"></i> Reject</button>
            </div>
        </div>
    </div>
</div>

@endsection