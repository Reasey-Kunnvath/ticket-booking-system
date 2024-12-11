  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    <!-- Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('dashboard')); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
    <!-- End Dashboard Nav -->

    <!-- Ticket Management Nav -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-grid"></i>
          <span>Ticket Management</span>
        </a>
      </li>
    <!-- End Ticket Management Nav -->

    <!-- Support Center Nav -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-grid"></i>
          <span>Support Center</span>
        </a>
      </li>
    <!-- End Support Center Nav -->

    <!-- User Management Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                    <i class="bi bi-circle"></i><span>User Role</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                    <i class="bi bi-circle"></i><span>Client Profile</span>
                    </a>
                </li>
            </ul>
        </li>
    <!-- End User Management Nav -->



     

    </ul>

  </aside>
<?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/backend/layout/components/sidebar.blade.php ENDPATH**/ ?>