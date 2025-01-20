<?php $__env->startSection('title', 'On-going Support List'); ?>
<?php $__env->startSection('content'); ?>
    <h1>On-going Support List</h1>
    <div class="section contact ">
        <div class="row gy-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="my-auto col-lg-10">
                                        <dl class="row my-1">
                                            <dt class="col-sm-3 mx-3 my-1">New Support Ticket #123 From</dt>
                                            <dd class="col-sm-8 my-1">Dreamybull</dd>
                                             <dt class="col-sm-3 my-auto mx-3 ">Content:</dt>
                                            <dd class="col-sm-8 my-2" >“Hi i was facing a problem when trying to purchasing ticket....”</dd>
                                        </dl>
                                </div>
                                <div class="info-box col-lg-2 " >
                                    <a href="<?php echo e(route('supportMessageViewDetail')); ?>" type="button"
                                        class="btn btn-warning btn-sm mb-2 " style="width: 100%">
                                        View and Reply Message
                                    </a>
                                    <a href="<?php echo e(route('goinSupport')); ?>" type="button"
                                        class="btn btn-primary btn-sm" style="width: 100%">
                                        Problem Solved
                                    </a>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/backend/supportCenter/supportMeessage/goinSupport.blade.php ENDPATH**/ ?>