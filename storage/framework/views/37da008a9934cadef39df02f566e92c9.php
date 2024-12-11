
<!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg shadow-lg bg-white navbar-light py-0 px-4">
                <a href="" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src=<?php echo e(asset("frontend/assets/img/icon-deal.png")); ?> alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">OG</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo e(url('/home')); ?>" class="nav-item nav-link <?php echo e(request()->routeIs('Home') ? 'active' : ''); ?>">Home</a>
                        <div class="nav-item dropdown">
                            <a href="<?php echo e(url('/all-event')); ?>" class="nav-link dropdown-toggle <?php echo e(request()->routeIs('All-Events') || request()->routeIs('Concert') ? 'active' : ''); ?>" data-bs-toggle="dropdown">Events</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php echo e(url('/all-event')); ?>" class="dropdown-item <?php echo e(request()->routeIs('All-Events') ? 'active' : ''); ?>">All Events</a>
                                <a href="<?php echo e(url('/concert')); ?>" class="dropdown-item <?php echo e(request()->routeIs('Concert') ? 'active' : ''); ?>">Concerts</a>
                                <a href="<?php echo e(url('')); ?>" class="dropdown-item">Conferences</a>
                                <a href="<?php echo e(url('')); ?>" class="dropdown-item">Sports</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="about.html" class="nav-item nav-link">About</a>

                        <a href="contact.html" class="nav-item nav-link">Help Center</a>

                        <a href="" class="nav-item nav-link align-items-center" >Cart <i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex" >Sell Your Tickets</a>

                </div>

                <a href="#" class="nav-item nav-link d-flex align-items-center">
                    <div class="p-2 me-2">
                        <img class="img-fluid" src=<?php echo e(asset("frontend/assets/img/userprofile.png")); ?> alt="Icon" style="width: 50px; height: 50px;">
                    </div>
                </a>

            </nav>
        </div>
<!-- Navbar End -->
<?php /**PATH D:\ST15\wamp\www\Ticket Booking System\ticket-booking-system\resources\views/frontend/layout/header.blade.php ENDPATH**/ ?>