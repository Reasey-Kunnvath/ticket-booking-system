<?php $__env->startSection('title', 'Event List'); ?>
<?php $__env->startSection('event_show','show'); ?>
<?php $__env->startSection('event_active','active'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Event List
                    <button type="button" class="btn btn-primary btn-sm float-end mt-n1" data-bs-toggle="modal"
                        data-bs-target="#createform">
                        Create Event
                    </button>
                </h5>
                <!-- Disabled Backdrop Modal -->
                <div class="modal fade" id="createform" tabindex="-1" data-bs-backdrop="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-primary bg-opacity-10">
                                <h5 class="modal-title ">Create Event Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                            </div>
                            <form action="" enctype="multipart/form-data">
                                <div class="modal-body bg-light">
                                    <!-- Multi Columns Form -->
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputName5" class="form-label">Event ID</label>
                                            <input type="text" class="form-control" id="inputName5" disabled
                                                name="eventid" value="<?php echo e('E' . time()); ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputName5" class="form-label">Event Name</label>
                                            <input type="text" class="form-control" id="inputName5">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputEmail5" class="form-label">Start Date</label>
                                            <input type="date" class="form-control" id="inputEmail5">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword5" class="form-label">Open Date</label>
                                            <input type="date" class="form-control" id="inputPassword5">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword5" class="form-label">Close Date</label>
                                            <input type="date" class="form-control" id="inputPassword5">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress5" class="form-label">Location</label>
                                            <input type="text" class="form-control" id="inputAddres5s"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Event Category</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Choose...</option>
                                                <option value="nonprofit">Sport</option>
                                                <option value="corporate">Concert</option>
                                                <option value="government">Conference</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Organization Name</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Choose...</option>
                                                <option value="">YG Entertainment</option>
                                                <option value="">MAMA</option>
                                                <option value="">M-Net</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="eventImage" class="form-label">Upload Your Event Image (JPG, JPEG,
                                                PNG)<span style="color:red">*</span></label>
                                            <input type="file" class="form-control mt-2" id="eventImage"
                                                accept=".jpg, .jpeg, .png" required="">
                                        </div>
                                    </div>
                                    <!-- End Multi Columns Form -->
                                </div>
                                <div class="modal-footer bg-primary bg-opacity-10 ">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Disabled Backdrop Modal-->


                <!-- Table with stripped rows -->
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Event ID</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Event Category</th>
                            <th scope="col">Event Date</th>
                            <th scope="col">Open Date</th>
                            <th scope="col">Close Date</th>
                            <th scope="col">Organization Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>E0001</td>
                            <td>2NE1 ASIA TOUR</td>
                            <td>KUALA LUMPUR</td>
                            <td>Concert</td>
                            <td>2025-05-25</td>
                            <td>2025-04-25</td>
                            <td>2025-05-15</td>
                            <td>YG Entertainment</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm"data-bs-toggle="modal"
                                    data-bs-target="#viewEvent"><i class="bi bi-eye"></i></button>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editform"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                <!-- Edit Modal -->
                                <div class="modal fade" id="editform" tabindex="-1" data-bs-backdrop="false">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning bg-opacity-10">
                                                <h5 class="modal-title ">Edit Event</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"aria-label="Close"></button>
                                            </div>
                                            <form action="" enctype="multipart/form-data">
                                                <div class="modal-body bg-light">
                                                    <!-- Multi Columns Form -->
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label for="inputName5" class="form-label">Event ID</label>
                                                            <input type="text" class="form-control" id="inputName5"
                                                                disabled value="E0001">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputName5" class="form-label">Event Name</label>
                                                            <input type="text" class="form-control" id="inputName5"
                                                                value="2NE1 ASIA TOUR">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputEmail5" class="form-label">Start Date</label>
                                                            <input type="date" class="form-control" id="inputEmail5"
                                                                value="2025-05-25">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputPassword5" class="form-label">Open
                                                                Date</label>
                                                            <input type="date" class="form-control"
                                                                id="inputPassword5" value="2025-05-25">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputPassword5" class="form-label">Close
                                                                Date</label>
                                                            <input type="date" class="form-control"
                                                                id="inputPassword5" value="2025-05-25">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="inputAddress5" class="form-label">Location</label>
                                                            <input type="text" class="form-control" id="inputAddres5s"
                                                                placeholder="" value="KUALA LUMPUR">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputState" class="form-label">Event
                                                                Category</label>
                                                            <select id="inputState" class="form-select">
                                                                <option selected>Choose...</option>
                                                                <option value="nonprofit">Sport</option>
                                                                <option value="corporate" selected>Concert</option>
                                                                <option value="government">Conference</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputState" class="form-label">Organization
                                                                Name</label>
                                                            <select id="inputState" class="form-select">
                                                                <option>Choose...</option>
                                                                <option value="" selected>YG Entertainment</option>
                                                                <option value="">MAMA</option>
                                                                <option value="">M-Net</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="eventImage" class="form-label">Upload Your Event Image
                                                            (JPG, JPEG, PNG)<span style="color:red">*</span></label>
                                                        <input type="file" class="form-control mt-2" id="eventImage"
                                                            accept=".jpg, .jpeg, .png" required="">
                                                    </div>
                                                    <!-- End Multi Columns Form -->
                                                </div>
                                                <div class="modal-footer bg-warning bg-opacity-10 ">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Edit Modal-->
                                <!-- View Modal -->
                                    <div class="modal fade" id="viewEvent" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success bg-opacity-10">
                                                <h5 class="modal-title">Event Detail</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="card">
                                                            <div class="card-body pt-4 d-flex flex-column ">
                                                                <h5>Event Poster</h5>
                                                                <div id="carouselExampleFade"
                                                                    class="carousel slide carousel-fade"
                                                                    data-bs-ride="carousel">
                                                                    <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                            <img src="frontend/assets/images/event-01.jpg"
                                                                                class="d-block w-100" alt="...">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img src="frontend/assets/images/event-02.jpg"
                                                                                class="d-block w-100" alt="...">
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img src="frontend/assets/images/event-03.jpg"
                                                                                class="d-block w-100" alt="...">
                                                                        </div>
                                                                    </div>
                                                                    <button class="carousel-control-prev" type="button"
                                                                        data-bs-target="#carouselExampleFade"
                                                                        data-bs-slide="prev">
                                                                        <span class="carousel-control-prev-icon"
                                                                            aria-hidden="true"></span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </button>
                                                                    <button class="carousel-control-next" type="button"
                                                                        data-bs-target="#carouselExampleFade"
                                                                        data-bs-slide="next">
                                                                        <span class="carousel-control-next-icon"
                                                                            aria-hidden="true"></span>
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
                                                                        <button class="nav-link active"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#profile-overview">Overview</button>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content pt-2">
                                                                    <div class="tab-pane fade show active profile-overview"
                                                                        id="profile-overview">
                                                                         <h5 class="card-title">About Event</h5>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label "> Event Title:
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-8">2NE1 ASIA TOUR
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label">Event Category:
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-8">Concert
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label">Event Date:</div>
                                                                            <div class="col-lg-6 col-md-8">2025-05-25</div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label">Open Date:</div>
                                                                            <div class="col-lg-6 col-md-8">2025-05-25</div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label">Close Date:</div>
                                                                            <div class="col-lg-6 col-md-8">2025-05-25</div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label">Event
                                                                                Purpose:</div>
                                                                            <div class="col-lg-6 col-md-8">Product Promote</div>
                                                                        </div>
                                                                        <h5 class="card-title">Organization detail</h5>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label ">
                                                                                Organization: </div>
                                                                            <div class="col-lg-6 col-md-8">	YG Entertainment</div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label ">Category:
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-8">Entertainment</div>
                                                                        </div>
                                                                        <h5 class="card-title">Contact Information</h5>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label ">Fullname:
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-8">Dreamybull</div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label ">Phone
                                                                                number:</div>
                                                                            <div class="col-lg-6 col-md-8">012 345 678
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-3 label ">Email:
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-8">
                                                                                Dreamybull@gmail.com</div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer bg-success bg-opacity-10">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End View Modal-->
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>E0002</td>
                            <td>2NE1 ASIA TOUR</td>
                            <td>KUALA LUMPUR</td>
                            <td>Concert</td>
                            <td>2025-05-25</td>
                            <td>2025-04-25</td>
                            <td>2025-05-15</td>
                            <td>YG Entertainment</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></button>
                                <button type="button" class="btn btn-warning btn-sm"><i
                                        class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>E0003</td>
                            <td>2NE1 ASIA TOUR</td>
                            <td>KUALA LUMPUR</td>
                            <td>Concert</td>
                            <td>2025-05-25</td>
                            <td>2025-04-25</td>
                            <td>2025-05-15</td>
                            <td>YG Entertainment</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></button>
                                <button type="button" class="btn btn-warning btn-sm"><i
                                        class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>E0004</td>
                            <td>2NE1 ASIA TOUR</td>
                            <td>KUALA LUMPUR</td>
                            <td>Concert</td>
                            <td>2025-05-25</td>
                            <td>2025-04-25</td>
                            <td>2025-05-15</td>
                            <td>YG Entertainment</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></button>
                                <button type="button" class="btn btn-warning btn-sm"><i
                                        class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>E0005</td>
                            <td>2NE1 ASIA TOUR</td>
                            <td>KUALA LUMPUR</td>
                            <td>Concert</td>
                            <td>2025-05-25</td>
                            <td>2025-04-25</td>
                            <td>2025-05-15</td>
                            <td>YG Entertainment</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></button>
                                <button type="button" class="btn btn-warning btn-sm"><i
                                        class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>E0006</td>
                            <td>2NE1 ASIA TOUR</td>
                            <td>KUALA LUMPUR</td>
                            <td>Concert</td>
                            <td>2025-05-25</td>
                            <td>2025-04-25</td>
                            <td>2025-05-15</td>
                            <td>YG Entertainment</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></button>
                                <button type="button" class="btn btn-warning btn-sm"><i
                                        class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/backend/eventManage/index.blade.php ENDPATH**/ ?>