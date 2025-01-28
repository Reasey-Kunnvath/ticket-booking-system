<?php $__env->startSection('title', 'Selling Detail '); ?>
<?php $__env->startSection('content'); ?>
    <ul class="list-inline ">
        <li class="list-inline-item col-sm-11">
            <h1>Request Detail </h1>
        </li>
        <li class="list-inline-item"><a href="<?php echo e(route('sellingRequest')); ?>" type="button" class="btn btn-primary">Back</a>
        </li>
    </ul>
    <!-- End Page Title -->
    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-4 d-flex flex-column ">
                        <h3>Event Poster</h3>
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="backend/assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="backend/assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="backend/assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End Slides with fade transition -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Organization detail</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Organization: </div>
                                    <div class="col-lg-9 col-md-8">PDIDDY</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Category:</div>
                                    <div class="col-lg-9 col-md-8">Party</div>
                                </div>
                                <h5 class="card-title">Contact Information</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Fullname:</div>
                                    <div class="col-lg-9 col-md-8">Dreamybull</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Phone number:</div>
                                    <div class="col-lg-9 col-md-8">012 345 678</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Email:</div>
                                    <div class="col-lg-9 col-md-8">Dreamybull@gmail.com</div>
                                </div>
                                <h5 class="card-title">About Event</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Title:</div>
                                    <div class="col-lg-9 col-md-8">The Diddy Party</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Subtitle</div>
                                    <div class="col-lg-9 col-md-8">Puff daddy party</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Ticket Price:</div>
                                    <div class="col-lg-9 col-md-8">1000$</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Ticket Quantity:</div>
                                    <div class="col-lg-9 col-md-8">100</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Event Date:</div>
                                    <div class="col-lg-9 col-md-8">30-Oct-2024</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Event Purpose:</div>
                                    <div class="col-lg-9 col-md-8">PARTY</div>
                                </div>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#Approve">
                                    Approve
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
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#Reject">
                                    Reject
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ST15\wamp\www\Ticket Booking System\ticket-booking-system\resources\views/backend/ticketMng/requestDetail.blade.php ENDPATH**/ ?>