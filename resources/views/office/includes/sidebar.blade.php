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

         <!--- Sidenav Menu -->
         <ul class="side-nav">
           
             <hr style="margin: 0.0005rem 0;">

             <li class="side-nav-item">
                 <a href="{{ route('maintenance.dashboard') }}" class="side-nav-link">
                     <span class="menu-icon"><i class="fas fa-dashboard" style="color: #2d714e"></i></span>
                     <span class="menu-text"> Dashboard </span>
                     <span class="badge bg-danger rounded">3</span>
                 </a>
             </li>
             <li class="side-nav-item">
                 <a href="{{ route('office.subscription') }}" class="side-nav-link">
                     <span class="menu-icon"> <i class="fas fa-tools" style="color: #2d714e"></i></span>
                     <span class="menu-text">Subscription Management</span>
                 </a>
             </li>

             <li class="side-nav-item">
                 <a href="{{ route('office.platfrom') }}" class="side-nav-link">
                     <span class="menu-icon"><i class="fas fa-exclamation-circle" style="color: #2d714e"></i></span>
                     <span class="menu-text">Platform Messages</span>
                 </a>
             </li>
             <li class="side-nav-item">
                <a href="{{ route('office.financial') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="fas fa-handshake" style="color: #2d714e"></i></span>
                    <span class="menu-text">Financial Services</span>
                </a>
            </li>



             {{-- <li class="side-nav-item">
                 <a href="{{ route('tenant.maintenance') }}" class="side-nav-link">
                     <span class="menu-icon"><i class="fas fa-tools" style="color: #2d714e"></i></span>
                     <span class="menu-text"> Maintenance </span>
                 </a>
             </li> --}}



             <li class="side-nav-item">
                 <a href="{{ route('maintenance.payments') }}" class="side-nav-link">
                     <span class="menu-icon"><i class="fas fa-credit-card" style="color: #2d714e"></i></span>
                     <span class="menu-text">Additional Requests </span>
                 </a>
             </li>


         </ul>

         <div class="clearfix"></div>
     </div>
 </div>
