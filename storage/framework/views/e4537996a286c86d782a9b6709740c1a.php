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

    <!-- Event Management Nav -->
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#event-nav" data-bs-toggle="collapse" href="#">
             <i class="bi bi-calendar3-event"></i></i><span>Event Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="event-nav" class="nav-content collapse <?php echo $__env->yieldContent('event_show'); ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo e(url('event')); ?>" class="<?php echo $__env->yieldContent('event_active'); ?>">
                    <i class="bi bi-circle "></i><span>Event List</span>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo e(url('venue')); ?>" class="<?php echo $__env->yieldContent('venue_active'); ?>">
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
            <ul id="ticket-nav" class="nav-content collapse <?php echo $__env->yieldContent('ticket_show'); ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo e(route('sellingRequest')); ?>" class="<?php echo $__env->yieldContent('sell_active'); ?>">
                    <i class="bi bi-circle"></i><span>Incoming Ticket Selling Request</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('managerticket')); ?>" class="<?php echo $__env->yieldContent('mt_active'); ?>">
                    <i class="bi bi-circle"></i><span>Manage Tickets</span>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo e(route('manageProCodeDetail')); ?>" class="<?php echo $__env->yieldContent('pro_active'); ?>">
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
            <ul id="user-nav" class="nav-content collapse <?php echo $__env->yieldContent('user_show'); ?> " data-bs-parent="#sidebar-nav">
                 <li>
                    <a href="<?php echo e(url('user')); ?>" class="<?php echo $__env->yieldContent('ul_active'); ?>">
                    <i class="bi bi-circle"></i><span>User List</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('roleAndpermission')); ?>" class="<?php echo $__env->yieldContent('rp_active'); ?>">
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
            <ul id="support-nav" class="nav-content collapse <?php echo $__env->yieldContent('support_show'); ?> " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo e(route('supportMessageDetail')); ?>" class="<?php echo $__env->yieldContent('support_active'); ?>">
                    <i class="bi bi-circle"></i><span>Support Message</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('goinSupport')); ?>"class="<?php echo $__env->yieldContent('goin_active'); ?>">
                    <i class="bi bi-circle"></i><span>On-going Support</span>
                    </a>
                </li>
            </ul>
        </li>
    <!-- End Support Center Nav -->
    </ul>
  </aside>
<?php /**PATH D:\ST15\wamp\www\Ticket Booking System\ticket-booking-system\resources\views/backend/layout/components/sidebar.blade.php ENDPATH**/ ?>