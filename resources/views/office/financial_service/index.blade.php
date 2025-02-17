@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4" style="margin-right: 250px">
    <!-- Financial Dashboard Header -->
    <div class="financial-header p-4 bg-dark-green text-white d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-bold">Financial Services Overview</h2>
            <p class="text-white-50">Manage your office's financial health, expenses, and invoices</p>
        </div>
        <div>
            <button class="btn btn-outline-light"><i class="fas fa-file-invoice"></i> Generate Report</button>
            <button class="btn btn-light ms-2"><i class="fas fa-plus"></i> Add Transaction</button>
        </div>
    </div>

    <!-- Key Financial Metrics -->
    <div class="row mt-4">
        <!-- Total Revenue -->
        <div class="col-lg-4">
            <div class="card financial-card">
                <div class="card-body">
                    <h6>Total Revenue</h6>
                    <h2 class="text-success">$350,000</h2>
                    <p class="text-muted"><i class="fas fa-chart-line"></i> +8% This Month</p>
                </div>
            </div>
        </div>

        <!-- Total Expenses -->
        <div class="col-lg-4">
            <div class="card financial-card">
                <div class="card-body">
                    <h6>Total Expenses</h6>
                    <h2 class="text-danger">$120,500</h2>
                    <p class="text-muted"><i class="fas fa-arrow-down"></i> -3.2% This Month</p>
                </div>
            </div>
        </div>

        <!-- Net Profit -->
        <div class="col-lg-4">
            <div class="card financial-card">
                <div class="card-body">
                    <h6>Net Profit</h6>
                    <h2 class="text-primary">$229,500</h2>
                    <p class="text-muted"><i class="fas fa-balance-scale"></i> Financial Balance</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Financial Charts & Reports -->
    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5>Revenue & Expense Report</h5>
                </div>
                <div class="card-body">
                    <canvas id="financialChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Quick Invoice & Payment Logs -->
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between">
                    <h5>Recent Payments</h5>
                    <span class="badge bg-primary">Updated</span>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            Tenant Payment <span class="text-success">$2,500</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Maintenance Cost <span class="text-danger">$850</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Subscription Renewal <span class="text-warning">$100</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions Table -->
    <div class="card shadow-sm mt-4">
        <div class="card-header d-flex justify-content-between">
            <h5>Recent Transactions</h5>
            <button class="btn btn-sm btn-outline-dark">View All</button>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead class="bg-light">
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Feb 15, 2025</td>
                        <td>Tenant Rent Payment</td>
                        <td class="text-success">$3,800</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Feb 18, 2025</td>
                        <td>Building Maintenance</td>
                        <td class="text-danger">$750</td>
                        <td><span class="badge bg-danger">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-dark"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Styling -->
<style>
/* General Styling */
.financial-header {
    background: #2d714e;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.financial-card {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.financial-card:hover {
    transform: translateY(-5px);
}

.text-success {
    color: #28a745 !important;
}

.text-danger {
    color: #dc3545 !important;
}

.text-primary {
    color: #007bff !important;
}

.btn-outline-dark {
    border-color: #2d714e;
    color: #2d714e;
}

.btn-outline-dark:hover {
    background-color: #2d714e;
    color: white;
}

.badge.bg-primary {
    background-color: #2d714e !important;
}

</style>

@endsection
