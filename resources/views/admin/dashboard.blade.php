@extends('admin.includes.master')

@section('content')

<style>
    /* Theme Variables */
    :root {
        --theme-primary: #2d714e;
        --theme-secondary: #1f3d2b;
        --accent-color: #4CAF50;
        --bg-light: #f5f7fa;
        --bg-dark: #1a2c23;
        --glass-effect: rgba(255, 255, 255, 0.1);
        --shadow-light: 0px 10px 20px rgba(0, 0, 0, 0.1);
        --shadow-dark: 0px 10px 30px rgba(0, 0, 0, 0.3);
    }

    body {
        background: var(--bg-light);
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease-in-out;
    }

    /* Dashboard Header */
    .dashboard-header {
        background: linear-gradient(135deg, var(--theme-primary), var(--accent-color));
        padding: 2rem;
        border-radius: 15px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
        box-shadow: var(--shadow-light);
    }

    /* Theme Toggle Button */
    .theme-toggle {
        background: white;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .theme-toggle:hover {
        background: var(--accent-color);
        color: white;
    }

    /* Card Styling */
    .metric-card {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: var(--shadow-light);
        border: none;
    }

    .metric-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-dark);
    }

    .metric-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--theme-primary);
    }

    /* Chart Container */
    .chart-container {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: var(--shadow-light);
    }

    /* Glassmorphism Effect */
    .glass-box {
        background: var(--glass-effect);
        backdrop-filter: blur(10px);
        padding: 1rem;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: var(--shadow-light);
    }

    /* Quick Actions */
    .quick-actions {
        display: flex;
        gap: 10px;
    }

    .action-btn {
        background: var(--theme-primary);
        color: white;
        padding: 0.8rem 1.2rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .action-btn:hover {
        background: var(--accent-color);
    }
</style>

<div class="container-fluid">

    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <div>
            <h2>Welcome Back, Admin</h2>
            <p>Your latest performance overview</p>
        </div>
        {{-- <div class="d-flex align-items-center">
            <div class="theme-toggle">
                <i class="fas fa-moon"></i>
            </div>
        </div> --}}
    </div>

    <!-- Dashboard Cards -->
    <div class="row">
        <div class="col-md-3">
            <div class="metric-card d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted">Total Properties</h6>
                    <h3 class="mb-0">245</h3>
                    <span class="text-success small">↑ 12% from last month</span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="metric-card d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted">Active Subscriptions</h6>
                    <h3 class="mb-0">125</h3>
                    <span class="text-warning small">↗ 5% from last month</span>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="metric-card d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted">Total Office/Companies</h6>
                    <h3 class="mb-0">20</h3>
                    <span class="text-warning small">↗ 5% from last month</span>
                </div>
            </div>
        </div>



        <div class="col-md-3">
            <div class="metric-card d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted">Total Users</h6>
                    <h3 class="mb-0">150</h3>
                    <span class="text-warning small">↗ 5% from last month</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Charts & Recent Activity -->
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="chart-container">
                <h5>Subscription Analytics</h5>
                <canvas id="subscriptionChart"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="chart-container">
                <h5>Recent Activities</h5>
                <div class="glass-box">
                    <p>John Doe added a new listing.</p>
                    <p>Subscription renewed by Sarah Brown.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Transactions -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="chart-container">
                <h5>Recent Transactions</h5>
                <table class="table table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th>Property</th>
                            <th>Tenant</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sunrise Apartment</td>
                            <td>Sarah Johnson</td>
                            <td>$1,200</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>Feb 10, 2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script>
    // Dark Mode Toggle
    document.querySelector('.theme-toggle').addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });

    // Subscription Chart
    const ctx = document.getElementById('subscriptionChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Subscriptions',
                data: [65, 78, 82, 75, 88],
                backgroundColor: ['#2d714e', '#4CAF50', '#3c8d4e', '#2e5f3e', '#1f3d2b']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>

@endsection
