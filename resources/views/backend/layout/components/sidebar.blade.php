  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <!-- Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
    <!-- End Dashboard Nav -->

    <!-- Event Management Nav -->
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#event-nav" data-bs-toggle="collapse" href="#">
             <i class="bi bi-calendar3-event"></i></i><span>Event Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="event-nav" class="nav-content collapse @yield('event_show')" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('event')}}" class="@yield('event_active')">
                    <i class="bi bi-circle "></i><span>Event List</span>
                    </a>
                </li>
                 <li>
                    <a href="{{url('venue')}}" class="@yield('venue_active')">
                    <i class="bi bi-circle"></i><span>Venue Management</span>
                    </a>
                </li>
            </ul>
        </li>
    <!-- End Event Management Nav -->

    <!-- Ticket Management Nav -->
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#ticket-nav" data-bs-toggle="collapse" href="#">
             <i class="bi bi-ticket-perforated"></i></i><span>Ticket Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="ticket-nav" class="nav-content collapse @yield('ticket_show')" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('sellingRequest')}}" class="@yield('sell_active')">
                    <i class="bi bi-circle"></i><span>Incoming Ticket Selling Request</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('managerticket')}}" class="@yield('mt_active')">
                    <i class="bi bi-circle"></i><span>Manage Tickets</span>
                    </a>
                </li>
                 <li>
                    <a href="{{route('manageProCodeDetail')}}" class="@yield('pro_active')">
                    <i class="bi bi-circle"></i><span>Manage Promo Code</span>
                    </a>
                </li>
            </ul>
        </li>
    <!-- End Ticket Management Nav -->

    <!-- User Management Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user-nav" class="nav-content collapse @yield('user_show') " data-bs-parent="#sidebar-nav">
                 <li>
                    <a href="{{url('user')}}" class="@yield('ul_active')">
                    <i class="bi bi-circle"></i><span>User List</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('roleAndpermission')}}" class="@yield('rp_active')">
                    <i class="bi bi-circle"></i><span>User Role & Permission</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="bi bi-circle"></i><span>Client Profile</span>
                    </a>
                </li>
            </ul>
        </li>
    <!-- End User Management Nav -->

    <!-- Support Center Nav -->
      <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#support-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-telephone"></i></i><span>Support Center</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="support-nav" class="nav-content collapse @yield('support_show') " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('supportMessageDetail')}}" class="@yield('support_active')">
                    <i class="bi bi-circle"></i><span>Support Message</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('goinSupport')}}"class="@yield('goin_active')">
                    <i class="bi bi-circle"></i><span>On-going Support</span>
                    </a>
                </li>
            </ul>
        </li>
    <!-- End Support Center Nav -->
    </ul>
  </aside>
