@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-file-alt"></i> Receipt Reports</h4>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#generateReportModal">
                <i class="fas fa-download"></i> Generate Report
            </button>
        </div>
    </div>

    <!-- Filters -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">From Date</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">To Date</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Property</label>
                    <select class="form-control">
                        <option>All Properties</option>
                        <option>Luxury Villa</option>
                        <option>Downtown Apartment</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Status</label>
                    <select class="form-control">
                        <option>All</option>
                        <option>Paid</option>
                        <option>Pending</option>
                        <option>Failed</option>
                    </select>
                </div>
                <div class="col-md-12 text-end">
                    <button type="submit" class="btn btn-dark-green"><i class="fas fa-filter"></i> Apply Filters</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Receipts Table -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Receipt ID</th>
                        <th>Property</th>
                        <th>Tenant</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>RCPT-2025-01</td>
                        <td>Luxury Villa</td>
                        <td>John Smith</td>
                        <td>$2,500</td>
                        <td>2024-02-10</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-file-download"></i> Download</button>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-print"></i> Print</button>
                        </td>
                    </tr>
                    <tr>
                        <td>RCPT-2024-12</td>
                        <td>Downtown Apartment</td>
                        <td>Alice Johnson</td>
                        <td>$1,800</td>
                        <td>2024-01-25</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-exclamation-circle"></i> Retry Payment</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Generate Report Modal -->
<div class="modal fade" id="generateReportModal" tabindex="-1" aria-labelledby="generateReportLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark-green text-white">
                <h5 class="modal-title" id="generateReportLabel"><i class="fas fa-file-excel"></i> Generate Receipt Report</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">From Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">To Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Format</label>
                            <select class="form-control">
                                <option>PDF</option>
                                <option>Excel</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-dark-green"><i class="fas fa-download"></i> Generate Report</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection