@extends('office.includes.master')

@section('content')

<div class="content-wrapper" style="margin-right: 240px">
    
    <!-- Subscription Header -->
    <div class="dashboard-header p-4 text-white rounded-lg">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-1">Subscription Management</h2>
                <p class="mb-0">Monitor your office subscription status and payments</p>
            </div>
            <div class="quick-actions">
                <button class="btn btn-light btn-sm shadow-sm"><i class="fas fa-credit-card"></i> Manage Payment</button>
            </div>
        </div>
    </div>

    <!-- Subscription Overview -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-theme text-white">
                    <h5 class="mb-0">Current Subscription</h5>
                </div>
                <div class="card-body">
                    <h4>Premium Plan</h4>
                    <p class="text-muted">Access to all features, priority support, unlimited properties.</p>
                    <div class="progress mt-3" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: 75%;"></div>
                    </div>
                    <p class="mt-2"><strong>Next Billing Date:</strong> March 15, 2025</p>
                    <button class="btn btn-outline-danger btn-sm"><i class="fas fa-times"></i> Cancel Subscription</button>
                </div>
            </div>
        </div>

        <!-- Subscription Summary -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-theme text-white">
                    <h5 class="mb-0">Subscription Summary</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-check-circle text-success"></i> Active Subscription</span>
                            <span class="badge bg-success">Active</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-calendar-alt text-primary"></i> Plan Type</span>
                            <span>Premium</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-dollar-sign text-warning"></i> Monthly Cost</span>
                            <span>$99</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-receipt text-info"></i> Last Payment</span>
                            <span>Feb 15, 2025</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment History Table -->
    <div class="card mt-4 shadow-sm">
        <div class="card-header bg-theme text-white d-flex justify-content-between">
            <h5 class="mb-0">Payment History</h5>
            <button class="btn btn-light btn-sm"><i class="fas fa-file-download"></i> Export</button>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="bg-light">
                    <tr>
                        <th>Invoice #</th>
                        <th>Payment Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Receipt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#INV-1234</td>
                        <td>Feb 15, 2025</td>
                        <td>$99</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td><button class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i></button></td>
                    </tr>
                    <tr>
                        <td>#INV-1233</td>
                        <td>Jan 15, 2025</td>
                        <td>$99</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td><button class="btn btn-sm btn-outline-primary"><i class="fas fa-download"></i></button></td>
                    </tr>
                    <tr>
                        <td>#INV-1232</td>
                        <td>Dec 15, 2024</td>
                        <td>$99</td>
                        <td><span class="badge bg-danger">Failed</span></td>
                        <td><button class="btn btn-sm btn-outline-danger"><i class="fas fa-exclamation-circle"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<style>
/* Theme Colors */
.bg-theme {
    background-color: #2d714e !important;
}

/* Dashboard Header */
.dashboard-header {
    background: linear-gradient(135deg, #2d714e 0%, #145032 100%);
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

/* Cards */
.card {
    border-radius: 10px;
}

/* Progress Bar */
.progress {
    height: 8px;
    border-radius: 5px;
}

/* Table */
.table-hover tbody tr:hover {
    background-color: #f1f1f1;
}

/* Quick Actions */
.quick-actions .btn {
    border-radius: 20px;
}
</style>

@endsection
