<?php $__env->startSection('title', 'Selling request'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Sale Requestion</h1>
    <div class="section contact ">
        <div class="row gy-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <a href="<?php echo e(route('requestDetail')); ?>" type="button"
                                            class="btn btn-warning mb-3">View Detail</a>
                                        <!-- Disabled Backdrop Modal-->
                                        <button type="button" class="btn btn-success mb-1" data-bs-toggle="modal"
                                            data-bs-target="#Approve">
                                            Approve
                                        </button>
                                        <div class="modal fade" id="Approve" tabindex="-1"
                                            data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Warning</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to Approve this request? This action cannot be undone
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
                                           Reject
                                        </button>
                                        <div class="modal fade" id="Reject" tabindex="-1"
                                            data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Warning</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to Reject this request? This action cannot be undone
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
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <a href="<?php echo e(route('requestDetail')); ?>" type="button"
                                            class="btn btn-warning mb-3">View Detail</a>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <a href="<?php echo e(route('requestDetail')); ?>" type="button"
                                            class="btn btn-warning mb-3">View Detail</a>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card">
                            <div class="row">
                                <div class="info-box col-lg-9 ">
                                    <div class="d-grid gap-2 ">
                                        <h5>Organization: PDIDDY</h5>
                                        <h5>Event: The Diddy Party</h5>
                                        <h5>Event Date: 30-Oct-2024</h5>
                                        <h5>Ticket Price: 1000$</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-3 ">
                                    <div class="d-flex flex-column">
                                        <button type="button" class="btn btn-warning mb-3 ">View Detail</button>
                                        <button type="button" class="btn btn-success mb-1">Approve</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/backend/ticketMng/sellingRequest.blade.php ENDPATH**/ ?>