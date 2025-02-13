@extends('office.includes.master')

@section('content')

<div class="content-wrapper" style="margin-right: 240px">
    <!-- Dashboard Header -->
    <div class="dashboard-header p-4 text-white rounded-lg">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-1">Welcome back, John!</h2>
                <p class="mb-0">Here’s an overview of your real estate management</p>
            </div>
            <div class="quick-actions">
                <button class="btn btn-light btn-sm shadow-sm"><i class="fas fa-plus"></i> Add Property</button>
                <button class="btn btn-light btn-sm shadow-sm"><i class="fas fa-user-plus"></i> New Tenant</button>
            </div>
        </div>
    </div>

    <!-- Key Metrics Cards -->
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card metric-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-uppercase text-muted">Total Properties</h6>
                            <h2 class="mb-0">120</h2>
                        </div>
                        <div class="icon-circle bg-theme">
                            <i class="fas fa-building text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card metric-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-uppercase text-muted">Total Tenants</h6>
                            <h2 class="mb-0">300</h2>
                        </div>
                        <div class="icon-circle bg-theme">
                            <i class="fas fa-users text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card metric-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-uppercase text-muted">Total Revenue</h6>
                            <h2 class="mb-0">$1.2M</h2>
                        </div>
                        <div class="icon-circle bg-theme">
                            <i class="fas fa-dollar-sign text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts & Main Content -->
    <div class="row">
        <!-- Revenue Chart -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-theme text-white">
                    <h5 class="mb-0">Revenue Overview</h5>
                </div>
                <div class="card-body">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Quick Status -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-theme text-white">
                    <h5 class="mb-0">Quick Status</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check-circle text-success"></i> 85 Active Contracts</li>
                        <li class="mb-3"><i class="fas fa-exclamation-circle text-warning"></i> 10 Pending Approvals</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Properties Management -->
    <div class="card mt-4">
        <div class="card-header bg-theme text-white d-flex justify-content-between">
            <h5 class="mb-0">Properties Management</h5>
            <button class="btn btn-light btn-sm"><i class="fas fa-filter"></i> Filter</button>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="bg-light">
                    <tr>
                        <th>Property</th>
                        <th>Tenant</th>
                        <th>Status</th>
                        <th>Contract End</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luxury Villa</td>
                        <td>John Smith</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>2024-12-31</td>
                        <td>
                            <button class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <!-- Add more rows -->
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

/* Metrics Cards */
.metric-card {
    border: none;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.metric-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

/* Icons */
.icon-circle {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}
</style>

@endsection
@section('script')


<script>
// Chart.js for Revenue Graph
document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById("revenueChart").getContext("2d");
    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                label: "Revenue",
                backgroundColor: "rgba(45, 113, 78, 0.2)",
                borderColor: "#2d714e",
                data: [12000, 15000, 17000, 14000, 18000, 21000],
                fill: true
            }]
        }
    });
});
</script>

@endsection
