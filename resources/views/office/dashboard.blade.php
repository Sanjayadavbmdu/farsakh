<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Office Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #206843;
            --secondary-color: #206843;
            --glass-bg:#206843;
            --blur: blur(10px);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: white;
            /* color: white; */
            min-height: 100vh;
        }

        .dashboard-container {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 20px;
            padding: 20px;
        }

        /* Office Header */
        .office-header {
            grid-column: 1 / -1;
            background: var(--glass-bg);
            backdrop-filter: var(--blur);
            padding: 1rem;
            color: white;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .office-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .office-logo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(45deg, #4cc9f0, #4895ef);
        }

        /* Sidebar */
        .sidebar {
            background: var(--glass-bg);
            backdrop-filter: var(--blur);
            border-radius: 15px;
            padding: 1rem;
            height: calc(100vh - 100px);
            position: sticky;
            color: white;
            top: 20px;
        }

        .menu-item {
            padding: 12px;
            margin: 8px 0;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .menu-item:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        /* Main Content */
        .main-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        /* Statistics Cards */
        .stat-card {
            /* background: var(--glass-bg); */
            /* backdrop-filter: var(--blur); */
            padding: 1.5rem;
            border-radius: 15px;
            /* transition: var(--transition); */
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: bold;
            background: #206843;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Navigation Icons */
        .nav-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--glass-bg);
            display: grid;
            place-items: center;
            cursor: pointer;
            position: relative;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ff0062;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            font-size: 0.8rem;
            display: grid;
            place-items: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .dashboard-container {
                grid-template-columns: 1fr;
            }

            .sidebar {
                height: auto;
                position: static;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Office Header -->
        <header class="office-header">
            <div class="office-info">
                <div class="office-logo"></div>
                <div>
                    <h2>Premium Estates</h2>
                    <p>Owner: John Smith | Status: <span style="color: #90e0ef;">Online</span></p>
                </div>
            </div>
            <div class="nav-icons">
                <div class="nav-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </div>
                <div class="nav-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="nav-icon">
                    <img src="https://i.pravatar.cc/40" alt="Profile" class="profile-img">
                </div>
            </div>
        </header>

        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="menu-item">
                <i class="fas fa-chart-line"></i>
                Dashboard
            </div>
            <div class="menu-item">
                <i class="fas fa-building"></i>
                Properties
            </div>
            <div class="menu-item">
                <i class="fas fa-file-contract"></i>
                Contracts
            </div>
            <div class="menu-item">
                <i class="fas fa-users"></i>
                Clients
            </div>
            <div class="menu-item">
                <i class="fas fa-comments"></i>
                Messages
            </div>
            <div class="menu-item">
                <i class="fas fa-cog"></i>
                Settings
            </div>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Statistics Cards -->
            <div class="stat-card">
                <h3>Total Properties</h3>
                <div class="stat-value">127</div>
            </div>
            <div class="stat-card">
                <h3>Occupancy Rate</h3>
                <div class="stat-value">89%</div>
            </div>
            <div class="stat-card">
                <h3>Total Revenue</h3>
                <div class="stat-value">$2.4M</div>
            </div>
            <div class="stat-card">
                <h3>Active Contracts</h3>
                <div class="stat-value">84</div>
            </div>
        </main>
    </div>

    <script>
        // Interactive Elements
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all items
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                // Add active class to clicked item
                this.classList.add('active');
            });
        });

        // Dynamic Statistics Update
        const stats = {
            properties: 127,
            occupancy: 89,
            revenue: 2.4,
            contracts: 84
        };

        function updateStats() {
            document.querySelectorAll('.stat-value').forEach((el, index) => {
                const values = Object.values(stats);
                el.textContent = index === 2 ? `$${values[index]}M` : values[index] + (index === 1 ? '%' : '');
            });
        }

        // Toggle Sidebar on Mobile
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = sidebar.style.display === 'none' ? 'block' : 'none';
        }

        // Initialize
        updateStats();

       
    </script>
</body>
</html>
