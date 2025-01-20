<?php $__env->startSection('title', 'Promote Code'); ?>
<?php $__env->startSection('content'); ?>
     <ul class="list-inline ">
        <li class="list-inline-item col-sm-10">
            <h1>Promote Code </h1>
        </li>
        <li class="list-inline-item"><a href="#" type="button" class="btn btn-primary">Add Promote Code</a>
        </li>
    </ul>
    <div class="section contact ">
        <div class="row gy-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row" style="text-align: center">
                                <div class="info-box col align-self-center">
                                    <div class="d-grid gap-4">
                                        <h5 >Promote Code</h5>
                                        <h5>PDIDDY</h5>
                                    </div>
                                </div>
                                 <div class="info-box col">
                                    <div class="d-grid gap-4">
                                        <h5>On Event</h5>
                                        <h5>All</h5>
                                    </div>
                                </div>
                                <div class="info-box col">
                                    <div class="d-grid gap-4">
                                        <h5>Expiry</h5>
                                        <h5>30-12-2024</h5>
                                    </div>
                                </div>
                                <div class="info-box col">
                                    <div class="d-grid gap-4">
                                        <h5>Discount</h5>
                                        <h5>20%</h5>
                                    </div>
                                </div>
                                <div class="info-box col">
                                    <div class="d-grid gap-4">
                                        <h5>Quantity</h5>
                                        <h5>20</h5>
                                    </div>
                                </div>
                                <div class="info-box col">
                                    <div class="d-grid gap-4">
                                        <h5>Unused Quantity</h5>
                                        <h5>50</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-2 align-self-center" >
                                    <div >
                                            <!-- Disabled Backdrop Modal-->
                                            <button type="button" class="btn btn-success " data-bs-toggle="modal"
                                                data-bs-target="#Approve">
                                                Edit Code
                                            </button>
                                            <div class="modal fade" id="Approve" tabindex="-1" data-bs-backdrop="false">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Warning</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to Approve this request? This action
                                                            cannot be undone
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-success"> Approve</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Disabled Backdrop Modal-->
                                            <!-- Disabled Backdrop Modal-->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#Reject">
                                                Delete Code
                                            </button>
                                            <div class="modal fade" id="Reject" tabindex="-1" data-bs-backdrop="false">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Warning</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to Reject this request? This action cannot
                                                            be undone
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-danger">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Disabled Backdrop Modal-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ST15\wamp\www\Ticket Booking System\ticket-booking-system\resources\views/backend/ticketMng/managePromoteCode.blade.php ENDPATH**/ ?>