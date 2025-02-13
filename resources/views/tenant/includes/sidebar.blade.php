 <div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="index.html" class="logo">
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

                <!--- Sidenav Menu -->
                <ul class="side-nav">
                    <li class="side-nav-title" style="
                    border-radius: 2px;
                    color: white;
                    background-color: #2d714e;
                ">Tenant Panel</li>
                    <hr style="margin: 0.0005rem 0;">

                    <li class="side-nav-item">
                        <a href="{{route('tenant.dashboard')}}" class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-dashboard" style="color: #2d714e"></i></span>
                            <span class="menu-text"> Dashboard </span>
                            <span class="badge bg-danger rounded">3</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{route('tenant.rental')}}" class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-key" style="color: #2d714e"></i></span>
                            <span class="menu-text"> My Rentals </span>
                        </a>
                    </li>

                   


                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarInvoice1" aria-expanded="false" aria-controls="sidebarInvoice1"
                            class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-comment-dots " style="color: #2d714e"></i></span>
                            <span class="menu-text"> Requests</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarInvoice1">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{route('tenant.request')}}" class="side-nav-link">
                                        <span class="menu-text">Send Request</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{route('tenant.request.show')}}" class="side-nav-link">
                                        <span class="menu-text">Show Requests</span>
                                    </a>
                                </li>
                              
                            </ul>
                        </div>
                    </li>

                   

                    {{-- <li class="side-nav-item"> 2 
                        <a href="{{route('tenant.maintenance')}}" class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-tools" style="color: #2d714e"></i></span>
                            <span class="menu-text"> Maintenance </span>
                        </a>
                    </li> --}}



                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false" aria-controls="sidebarInvoice"
                            class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-tools" style="color: #2d714e"></i></span>
                            <span class="menu-text"> Maintenance</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarInvoice">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{route('tenant.maintenance')}}" class="side-nav-link">
                                        <span class="menu-text">Report Form</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{route('tenant.maintenance.show')}}" class="side-nav-link">
                                        <span class="menu-text">Show Report</span>
                                    </a>
                                </li>
                              
                            </ul>
                        </div>
                    </li>


                    
                    <li class="side-nav-item">
                        <a href="{{route('tenant.payment')}}" class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-credit-card" style="color: #2d714e"></i></span>
                            <span class="menu-text"> Payment </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{route('tenant.messages')}}" class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-envelope-open-text" style="color: #2d714e"></i></span>
                            <span class="menu-text"> Messages </span>
                        </a>
                    </li>
                    
                    <li class="side-nav-item">
                        <a href="{{route('tenant.document')}}" class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-folder-open" style="color: #2d714e"></i></span>
                            <span class="menu-text"> Documents </span>
                        </a>
                    </li>

                    

                    <li class="side-nav-item">
                        <a href="{{route('maintenance.setting')}}" class="side-nav-link">
                            <span class="menu-icon"> <i class="fas fa-cog" style="color: #2d714e"></i></span>
                            <span class="menu-text"> Settings </span>
                        </a>
                    </li>
                    
                    {{-- <li class="side-nav-item">
                        <a href="apps-email.html" class="side-nav-link">
                            <span class="menu-icon"><i class="fas fa-shield-alt"></i></span>
                            <span class="menu-text"> Insurance </span>
                        </a>
                    </li> --}}

                    

                
                </ul>

                <div class="clearfix"></div>
            </div>
        </div>