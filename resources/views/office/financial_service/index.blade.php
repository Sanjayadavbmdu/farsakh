@extends('office.includes.master')

@section('content')

<div class="content-wrapper p-4">

    <!-- Animated Financial Header -->
    <div class="financial-header glass-card p-4 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="text-white fw-bold">Financial Dashboard</h2>
            <p class="text-white-50 mb-0">Monitor income, expenses & financial health</p>
        </div>
        <div class="d-flex">
            <button class="btn btn-neon"><i class="fas fa-file-invoice-dollar"></i> Generate Report</button>
            <button class="btn btn-outline-light ms-2"><i class="fas fa-plus-circle"></i> Add Transaction</button>
        </div>
    </div>

    <!-- Financial Overview Section -->
    <div class="row mt-4">
        <!-- Revenue Card -->
        <div class="col-lg-3 col-md-6">
            <div class="card neumorphic-card">
                <div class="card-body">
                    <h6 class="text-muted">Total Revenue</h6>
                    <h2 class="text-neon">$285,450</h2>
                    <p class="text-success"><i class="fas fa-arrow-up"></i> +12.3% This Month</p>
                </div>
            </div>
        </div>

        <!-- Expenses Card -->
        <div class="col-lg-3 col-md-6">
            <div class="card neumorphic-card">
                <div class="card-body">
                    <h6 class="text-muted">Total Expenses</h6>
                    <h2 class="text-danger">$82,150</h2>
                    <p class="text-danger"><i class="fas fa-arrow-down"></i> -5.8% vs. Last Month</p>
                </div>
            </div>
        </div>

        <!-- AI Budget Predictor -->
        <div class="col-lg-3 col-md-6">
            <div class="card neumorphic-card">
                <div class="card-body">
                    <h6 class="text-muted">Predicted Expenses</h6>
                    <h2 class="text-warning">$95,800</h2>
                    <p class="text-warning"><i class="fas fa-chart-line"></i> AI-Based Estimate</p>
                </div>
            </div>
        </div>

        <!-- Pending Payments -->
        <div class="col-lg-3 col-md-6">
            <div class="card neumorphic-card">
                <div class="card-body">
                    <h6 class="text-muted">Pending Invoices</h6>
                    <h2 class="text-primary">$7,520</h2>
                    <p class="text-warning"><i class="fas fa-exclamation-circle"></i> 4 Due This Week</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Financial Charts & Insights -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card glass-card shadow-lg">
                <div class="card-header">
                    <h5 class="mb-0">Income vs. Expenses</h5>
                </div>
                <div class="card-body">
                    <canvas id="financeChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Quick Summary Section -->
        <div class="col-lg-4">
            <div class="card glass-card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="mb-0">Quick Financial Summary</h5>
                    <span class="badge bg-neon">Live Data</span>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item bg-transparent text-white d-flex justify-content-between">
                            Active Contracts <span class="badge bg-primary">145</span>
                        </li>
                        <li class="list-group-item bg-transparent text-white d-flex justify-content-between">
                            Unpaid Invoices <span class="badge bg-danger">9</span>
                        </li>
                        <li class="list-group-item bg-transparent text-white d-flex justify-content-between">
                            Maintenance Requests <span class="badge bg-warning">3</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions Table -->
    <div class="card glass-card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Recent Transactions</h5>
            <button class="btn btn-sm btn-outline-light">View All</button>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead>
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
                        <td>$3,800</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>
                            <button class="btn btn-sm btn-neon"><i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Feb 18, 2025</td>
                        <td>Building Maintenance</td>
                        <td>$750</td>
                        <td><span class="badge bg-danger">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-light"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<style>
/* Glassmorphism & Neumorphism */
.glass-card {
    background: rgba(45, 113, 78, 0.25);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.neumorphic-card {
    border-radius: 15px;
    box-shadow: 5px 5px 10px #1f4d36, -5px -5px 10px #3a8d60;
    padding: 20px;
    transition: transform 0.3s;
}

.neumorphic-card:hover {
    transform: translateY(-5px);
}

/* Neon Text & Buttons */
.text-neon {
    color: #2dfc89;
    text-shadow: 0 0 10px #2dfc89;
}

.btn-neon {
    background: #2dfc89;
    color: black;
    border: none;
    box-shadow: 0 0 10px #2dfc89;
}

.btn-neon:hover {
    background: #1bbf67;
}
</style>

@endsection
