
<!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg shadow-lg bg-white navbar-light py-0 px-4">
                <a href="<?php echo e(url('/')); ?>" class="navbar-brand d-flex align-items-center text-center">
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
                        <a href="<?php echo e(url('/')); ?>" class="nav-item nav-link <?php echo e(request()->routeIs('Home') ? 'active' : ''); ?>">Home</a>
                        <div class="nav-item dropdown">
                            <a href="<?php echo e(url('/all-event')); ?>" class="nav-link dropdown-toggle <?php echo e(request()->routeIs('All-Events') || request()->routeIs('Concert') ? 'active' : ''); ?>" data-bs-toggle="dropdown">Events</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php echo e(url('/upcoming-event')); ?>" class="dropdown-item <?php echo e(request()->routeIs('Upcoming-Events') ? 'active' : ''); ?>" >Upcoming</a>
                                <a href="<?php echo e(url('/most-popular-event')); ?>" class="dropdown-item <?php echo e(request()->routeIs('Most-Popular-Events') ? 'active' : ''); ?>">Most Popular</a>
                                <a href="<?php echo e(url('/all-event')); ?>" class="dropdown-item <?php echo e(request()->routeIs('All-Events') ? 'active' : ''); ?>">All Events</a>
                                <a href="<?php echo e(url('/concert')); ?>" class="dropdown-item <?php echo e(request()->routeIs('Concert') ? 'active' : ''); ?>">Concerts</a>
                                <a href="<?php echo e(url('/conference')); ?>" class="dropdown-item <?php echo e(request()->routeIs('Conference') ? 'active' : ''); ?>">Conferences</a>
                                <a href="<?php echo e(url('/sport')); ?>" class="dropdown-item <?php echo e(request()->routeIs('Sport') ? 'active' : ''); ?>">Sports</a>
                            </div>
                        </div>
                        

                        <a href="<?php echo e(url('/help-center')); ?>" class="nav-item nav-link <?php echo e(request()->routeIs('Help-Center') ? 'active' : ''); ?>">Help Center</a>
                        <?php if(session('role') == "admin" || session('role') == "user"): ?>
                            <a href="<?php echo e(url('/cart')); ?>"
                            class="nav-item nav-link <?php echo e(request()->routeIs('Cart') ? 'active' : ''); ?>">
                                Cart
                                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                <span class="small-badge top-0 start-100 translate-middle badge ms-1 rounded-pill bg-danger">2</span>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(url('/login')); ?>"
                            class="nav-item nav-link <?php echo e(request()->routeIs('Cart') ? 'active' : ''); ?>">
                                Cart
                                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                <span class="small-badge top-0 start-100 translate-middle badge ms-1 rounded-pill bg-danger">2</span>
                            </a>
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo e(url('/sell-your-ticket')); ?>" class="btn btn-primary px-3 d-none d-lg-flex" >Sell Your Tickets</a>
                </div>

                <?php if(session('role') == "admin"): ?>
                    <a href="<?php echo e(url('/dashboard')); ?>" class="nav-item nav-link d-flex align-items-center">
                        <div class="p-2 me-2">
                            Dashboard
                        </div>
                    </a>
                <?php elseif(session('role') == "user"): ?>
                    <a href="<?php echo e(url('/user-profile')); ?>" class="nav-item nav-link d-flex align-items-center">
                        <div class="p-2 me-2">
                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Icon" style="width: 50px; height: 50px; border-radius: 50%;">
                        </div>
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(url('/login')); ?>" class="nav-item nav-link">
                        <div class="p-2 me-2">
                            Login
                        </div>
                    </a>
                <?php endif; ?>
            </nav>
        </div>
<!-- Navbar End -->

<?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/frontend/layout/header.blade.php ENDPATH**/ ?>