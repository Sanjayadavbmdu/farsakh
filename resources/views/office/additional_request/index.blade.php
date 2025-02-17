@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Requests Dashboard Header -->
    <div class="requests-header p-4 bg-dark-green text-white d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-bold">Manage Additional Requests</h2>
            <p class="text-white-50">Track and handle advertisement licenses, permits, and other office service requests</p>
        </div>
        {{-- <div>
            <button class="btn btn-outline-light"><i class="fas fa-file-alt"></i> View Reports</button>
            <button class="btn btn-light ms-2"><i class="fas fa-plus"></i> Submit Request</button>
        </div> --}}
    </div>

    <!-- Key Request Statistics -->
    <div class="row mt-4">
        <!-- Pending Requests -->
        <div class="col-lg-4">
            <div class="card request-card">
                <div class="card-body">
                    <h6>Pending Requests</h6>
                    <h2 class="text-warning">8</h2>
                    <p class="text-muted"><i class="fas fa-clock"></i> Waiting for Approval</p>
                </div>
            </div>
        </div>

        <!-- Approved Requests -->
        <div class="col-lg-4">
            <div class="card request-card">
                <div class="card-body">
                    <h6>Approved Requests</h6>
                    <h2 class="text-success">15</h2>
                    <p class="text-muted"><i class="fas fa-check-circle"></i> Successfully Processed</p>
                </div>
            </div>
        </div>

        <!-- Rejected Requests -->
        <div class="col-lg-4">
            <div class="card request-card">
                <div class="card-body">
                    <h6>Rejected Requests</h6>
                    <h2 class="text-danger">3</h2>
                    <p class="text-muted"><i class="fas fa-times-circle"></i> Not Approved</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-lg mt-4">
        <div class="card-header bg-dark-green text-white d-flex justify-content-between align-items-center">
            <h5 class="fw-bold " style="color: #2d714e">📌 Recent Requests</h5>
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Filter by Status
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">All</a></li>
                    <li><a class="dropdown-item" href="#">Pending</a></li>
                    <li><a class="dropdown-item" href="#">Approved</a></li>
                    <li><a class="dropdown-item" href="#">Rejected</a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-hover request-table">
                    <thead class="" style="">
                        <tr>
                            <th>#</th>
                            <th>Request Type</th>
                            <th>Submitted By</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="expandable-row" data-bs-toggle="collapse" data-bs-target="#requestDetails1">
                            <td>1</td>
                            <td> Advertisement Permit</td>
                            <td>John Smith</td>
                            <td>Feb 15, 2025</td>
                            <td>
                                <span class="badge bg-warning" data-bs-toggle="tooltip" title="Waiting for Approval">
                                    Pending
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-success"><i class="fas fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                        <tr id="requestDetails1" class="collapse">
                            <td colspan="6">
                                <div class="expanded-content p-3">
                                    <strong>Details:</strong> Advertisement permit for property #145.
                                    <br><strong>Requested Documents:</strong> ID, Business License.
                                </div>
                            </td>
                        </tr>
                        <tr class="expandable-row" data-bs-toggle="collapse" data-bs-target="#requestDetails2">
                            <td>2</td>
                            <td> Business License Renewal</td>
                            <td>Michael Lee</td>
                            <td>Feb 10, 2025</td>
                            <td>
                                <span class="badge bg-success" data-bs-toggle="tooltip" title="Approved & Processed">
                                    Approved
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-dark"><i class="fas fa-print"></i></button>
                            </td>
                        </tr>
                        <tr id="requestDetails2" class="collapse">
                            <td colspan="6">
                                <div class="expanded-content p-3">
                                    <strong>Details:</strong> License renewal for "Lee Real Estate Agency."
                                    <br><strong>Payment Status:</strong> Completed.
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <style>
    /* Table Styling */
    .request-table {
        border-radius: 10px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }
    
    .table-dark {
        background-color: #2d714e !important;
    }
    
    .request-table tbody tr {
        transition: all 0.3s ease-in-out;
    }
    
    .request-table tbody tr:hover {
        /* background: #2d714e; */
        cursor: pointer;
    }
    
    /* Expandable Row */
    .expanded-content {
        background: #f8f9fa;
        border-left: 5px solid #2d714e;
        font-size: 0.9rem;
    }
    
    /* Action Buttons */
    .btn-outline-primary:hover {
        background: #007bff;
        color: white;
    }
    
    .btn-outline-success:hover {
        background: #28a745;
        color: white;
    }
    
    .btn-outline-danger:hover {
        background: #dc3545;
        color: white;
    }
    
    
    </style>
    

</div>

<!-- Styling -->
<style>
/* General Styling */
.requests-header {
    background: #2d714e;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.request-card {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.request-card:hover {
    transform: translateY(-5px);
}

.text-success {
    color: #28a745 !important;
}

.text-warning {
    color: #ffc107 !important;
}

.text-danger {
    color: #dc3545 !important;
}

.btn-outline-dark {
    border-color: #2d714e;
    color: #2d714e;
}

.btn-outline-dark:hover {
    background-color: #2d714e;
    color: white;
}

.badge.bg-warning {
    background-color: #ffc107 !important;
    color: black;
}

.badge.bg-success {
    background-color: #28a745 !important;
}

.badge.bg-danger {
    background-color: #dc3545 !important;
}
</style>

@endsection
