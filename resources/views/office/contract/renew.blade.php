@extends('office.includes.master')


@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Page Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center bg-dark-green text-white rounded">
            <h4 class="fw-bold"><i class="fas fa-file-signature"></i> Contract Management - New & Renewals</h4>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#newContractModal"><i class="fas fa-plus"></i> New Contract</button>
        </div>
    </div>

    <!-- Contracts Table -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Contract ID</th>
                        <th>Property</th>
                        <th>Tenant</th>
                        <th>Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CNTR-2025-01</td>
                        <td>Luxury Villa</td>
                        <td>John Smith</td>
                        <td>Lease</td>
                        <td>2023-05-10</td>
                        <td>2025-05-10</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#contractDetailsModal"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#renewContractModal"><i class="fas fa-redo"></i> Renew</button>
                        </td>
                    </tr>
                    <tr>
                        <td>CNTR-2024-12</td>
                        <td>Downtown Apartment</td>
                        <td>Alice Johnson</td>
                        <td>Residential</td>
                        <td>2022-02-15</td>
                        <td>2024-02-15</td>
                        <td><span class="badge bg-danger">Expired</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#renewContractModal"><i class="fas fa-redo"></i> Renew</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- New Contract Modal -->
<div class="modal fade" id="newContractModal" tabindex="-1" aria-labelledby="newContractLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark-green text-white">
                <h5 class="modal-title" id="newContractLabel"><i class="fas fa-plus-circle"></i> Add New Contract</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Property</label>
                            <select class="form-control">
                                <option>Luxury Villa</option>
                                <option>Downtown Apartment</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tenant</label>
                            <input type="text" class="form-control" placeholder="Enter tenant name">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Contract Type</label>
                            <select class="form-control">
                                <option>Lease</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Rent Amount</label>
                            <input type="text" class="form-control" placeholder="$ Enter amount">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-dark-green"><i class="fas fa-save"></i> Save Contract</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Renew Contract Modal -->
<div class="modal fade" id="renewContractModal" tabindex="-1" aria-labelledby="renewContractLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark-green text-white">
                <h5 class="modal-title" id="renewContractLabel"><i class="fas fa-redo"></i> Renew Contract</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="form-label">New End Date</label>
                <input type="date" class="form-control">
                <div class="mt-3">
                    <button class="btn btn-dark-green w-100"><i class="fas fa-save"></i> Renew Contract</button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

