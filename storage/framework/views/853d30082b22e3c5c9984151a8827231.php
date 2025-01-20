<?php $__env->startSection('title', 'Promote Code'); ?>
<?php $__env->startSection('content'); ?>
    <ul class="list-inline ">
        <li class="list-inline-item col-sm-10">
            <h1>Promote Code </h1>
        </li>
        <li class="list-inline-item">
            <a type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#AddPromoteCode">
                Add Promote Code
            </a>
            <div class="modal fade" id="AddPromoteCode" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="text-center fw-bold mt-5">
                            <h1 class="modal-title">Add Promote Code</h1>
                        </div>
                        <div class="modal-body text-start">
                            <label for="inputNanme4" class="form-label ">Promote Code</label>
                            <input type="text" class="form-control mb-2" id="inputNanme4">
                            <label for="inputNanme4" class="form-label mb-2">Apply For
                                Event</label>
                            <input type="text" class="form-control mb-2" id="inputNanme4">
                            <label for="inputNanme4" class="form-label">Procode Code
                                Quantity</label>
                            <input type="text" class="form-control mb-2" id="inputNanme4">
                            <label for="inputNanme4" class="form-label mb-2">Discount</label>
                            <input type="text" class="form-control mb-2" id="inputNanme4">
                            <label for="inputNanme4" class="form-label mb-2">Expiry
                                Date</label>
                            <input type="text" class="form-control mb-2" id="inputNanme4">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                            <button type="button" class="btn btn-warning">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <h5>Promote Code</h5>
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
                                <div class="info-box col-lg-2 align-self-center">
                                    <div>
                                        <!-- Disabled Backdrop Modal-->
                                        <button type="button" class="btn btn-success " data-bs-toggle="modal"
                                            data-bs-target="#EditCode">
                                            Edit Code
                                        </button>
                                        <div class="modal fade" id="EditCode" tabindex="-1" data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="text-center fw-bold mt-5">
                                                        <h1 class="modal-title">Edit Promote Code</h1>
                                                    </div>
                                                    <div class="modal-body text-start">
                                                        <label for="inputNanme4" class="form-label ">Promote Code</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                        <label for="inputNanme4" class="form-label mb-2">Apply For
                                                            Event</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                        <label for="inputNanme4" class="form-label">Procode Code
                                                            Quantity</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                        <label for="inputNanme4" class="form-label mb-2">Discount</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                        <label for="inputNanme4" class="form-label mb-2">Expiry
                                                            Date</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Discard</button>
                                                        <button type="button" class="btn btn-warning"> Update</button>
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
                                                        Are you sure you want to Delete? This action cannot
                                                        be undone
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Disabled Backdrop Modal-->
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="card">
                            <div class="row" style="text-align: center">
                                <div class="info-box col align-self-center">
                                    <div class="d-grid gap-4">
                                        <h5>Promote Code</h5>
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
                                <div class="info-box col-lg-2 align-self-center">
                                    <div>
                                        <!-- Disabled Backdrop Modal-->
                                        <button type="button" class="btn btn-success " data-bs-toggle="modal"
                                            data-bs-target="#EditCode">
                                            Edit Code
                                        </button>
                                        <div class="modal fade" id="EditCode" tabindex="-1" data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="text-center fw-bold mt-5">
                                                        <h1 class="modal-title">Edit Promote Code</h1>
                                                    </div>
                                                    <div class="modal-body text-start">
                                                        <label for="inputNanme4" class="form-label ">Promote Code</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                        <label for="inputNanme4" class="form-label mb-2">Apply For
                                                            Event</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                        <label for="inputNanme4" class="form-label">Procode Code
                                                            Quantity</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                        <label for="inputNanme4" class="form-label mb-2">Discount</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                        <label for="inputNanme4" class="form-label mb-2">Expiry
                                                            Date</label>
                                                        <input type="text" class="form-control mb-2" id="inputNanme4">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Discard</button>
                                                        <button type="button" class="btn btn-warning"> Update</button>
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
                                                        Are you sure you want to Delete? This action cannot
                                                        be undone
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
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
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/backend/ticketMng/managePromoteCode.blade.php ENDPATH**/ ?>