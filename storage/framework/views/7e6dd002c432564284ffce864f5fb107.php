<?php $__env->startSection('title', 'Venue Manage'); ?>
<?php $__env->startSection('event_show','show'); ?>
<?php $__env->startSection('venue_active','active'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>Coming Soon</h1><br><br><br><br>
        <a class="btn" href="<?php echo e(url('/dashboard')); ?>">Back to home</a>
        <img src="<?php echo e(asset('backend/assets/img/not-found.svg')); ?>" class="img-fluid py-5" alt="Page Not Found">
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/backend/eventManage/VenueManage/index.blade.php ENDPATH**/ ?>