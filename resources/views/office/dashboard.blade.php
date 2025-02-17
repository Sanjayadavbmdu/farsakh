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
    <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1 mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Revenue">
                                Total Value</h5>
                            <h3 class="mt-2 mb-1 fw-bold">$1.25M</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    15.34%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-success-subtle text-success rounded fs-28">
                                <iconify-icon icon="solar:wallet-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-revenue"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Products Sold">
                                Active Contracts</h5>
                            <h3 class="mt-2 mb-1 fw-bold">48</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    10.12%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-info-subtle text-info rounded fs-28">
                                <iconify-icon icon="solar:cart-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-products"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="New Customers">
                                Pending Requests</h5>
                            <h3 class="mt-2 mb-1 fw-bold">1</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger me-1"><i class="ri-arrow-down-line"></i>
                                    5.47%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-warning-subtle text-warning rounded fs-28">
                                <iconify-icon icon="solar:user-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-customers"></div>
            </div>
        </div><!-- end col -->

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-2 justify-content-between">
                        <div>
                            <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Profit Margin">
                                Late Payments</h5>
                            <h3 class="mt-2 mb-1 fw-bold">3</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-1"><i class="ri-arrow-up-line"></i>
                                    8.21%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                        <div class="avatar-lg flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle text-primary rounded fs-28">
                                <iconify-icon icon="solar:graph-up-bold-duotone"></iconify-icon>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="apex-charts" id="chart-profit"></div>
            </div>
        </div><!-- end col -->

    </div><!-- end row -->

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
                        <li class="mb-3"><i class="fas fa-check-circle text-success"></i> 85 Active Contracts</li>
                        {{-- <li class="mb-3"><i class="fas fa-exclamation-circle text-warning"></i> 10 Pending Approvals</li> --}}
                        
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
