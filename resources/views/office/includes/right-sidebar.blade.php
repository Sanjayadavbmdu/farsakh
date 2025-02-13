<div class="sidenav-menu-right">
    <button class="button-close-fullsidebar">
        <i class="ri-close-line align-middle"></i>
    </button>

    <div data-simplebar>
        <ul class="side-nav">
            <hr style="margin: 0.0005rem 0;">

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarInvoice1" aria-expanded="false" aria-controls="sidebarInvoice1" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-plus-circle" style="color: #2d714e"></i></span>
                    <span class="menu-text">New Additions</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarInvoice1">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request')}}" class="side-nav-link">
                                <span class="menu-text">Add new property owners</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request.show')}}" class="side-nav-link">
                                <span class="menu-text">Add new tenants</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request.show')}}" class="side-nav-link">
                                <span class="menu-text">Register new properties</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarInvoice2" aria-expanded="false" aria-controls="sidebarInvoice2" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-tasks" style="color: #2d714e"></i></span>
                    <span class="menu-text">Request Management</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarInvoice2">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request')}}" class="side-nav-link">
                                <span class="menu-text">Property management requests</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request.show')}}" class="side-nav-link">
                                <span class="menu-text">Evacuation requests</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request.show')}}" class="side-nav-link">
                                <span class="menu-text">Auction requests</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarInvoice3" aria-expanded="false" aria-controls="sidebarInvoice3" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-file-contract" style="color: #2d714e"></i></span>
                    <span class="menu-text">Contract Management</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarInvoice3">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request')}}" class="side-nav-link">
                                <span class="menu-text">View active and expired contracts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request.show')}}" class="side-nav-link">
                                <span class="menu-text">Organize new contracts or renew existing ones</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarInvoice4" aria-expanded="false" aria-controls="sidebarInvoice4" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-receipt" style="color: #2d714e"></i></span>
                    <span class="menu-text">Receipts and Financials</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarInvoice4">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request')}}" class="side-nav-link">
                                <span class="menu-text">Issue receipts and payments</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request.show')}}" class="side-nav-link">
                                <span class="menu-text">Generate receipt reports</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarInvoice5" aria-expanded="false" aria-controls="sidebarInvoice5" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-envelope" style="color: #2d714e"></i></span>
                    <span class="menu-text">Message Management</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarInvoice5">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request')}}" class="side-nav-link">
                                <span class="menu-text">View incoming and outgoing messages</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('tenant.request.show')}}" class="side-nav-link">
                                <span class="menu-text">Message Management</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <div class="clearfix"></div>
    </div>
</div>
