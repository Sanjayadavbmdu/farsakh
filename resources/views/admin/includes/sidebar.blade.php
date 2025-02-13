<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="#" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="assets/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ri-close-line align-middle"></i>
    </button>

    <div data-simplebar>

        <!-- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title"
                style="font-size: 15px !important; border-radius: 2px; color: white; background-color: #2d714e;">
                Admin Panel
            </li>
            <hr style="margin: 0.0005rem 0;">

            <li class="side-nav-item">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-tachometer-alt" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Dashboard </span>
                    <span class="badge bg-danger rounded">3</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.properties.admin.show') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-plus-circle" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Listing </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.properties') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-home" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Properties </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.company.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-building" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Office/Company </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.user.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-users" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Users </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.tenant.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-user-friends" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Tenants </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.maintenance.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-tools" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Maintenance </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.auction.show') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-gavel" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Auction </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.blacklist.show') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-ban" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Blacklist </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.subscription.show') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-file-invoice-dollar" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Subscription Plan </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.subscription.subscribed') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-credit-card" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Subscriptions </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('admin.messages.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-envelope-open-text" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Messages </span>
                </a>
            </li>

            {{-- <li class="side-nav-item">
                <a href="{{ route('maintenance.setting') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-cogs" style="color: #2d714e"></i></span>
                    <span class="menu-text"> Settings </span>
                </a>
            </li> --}}

        </ul>

        <div class="clearfix"></div>
    </div>
</div>
