<?php $__env->startSection('title','Sell Your Ticket'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="container w-full">
                <div class="card card-style1 border-0">
                    <div class="card-body p-4 p-md-5 p-xl-6">
                        <form>
                            <h1>Event Creation Form</h1>
                            <br>
                            <h5>Create Your Own Event With Us!</h5>
                            <br>
                            <ul>
                                <li>Promote and pre-sell eTickets for your events on our platform!. app, no matter the size of your event or even if its are free.</li>
                                <li>Scan attendees at your event to admit them quickly and even check ID & vaccination status</li>
                                <li>Review detailed event insights with full access and sales visibility.</li>
                                <li>No need to print physical tickets</li>
                            </ul>
                            <br><hr>

                            <h1>Register Your Event</h1>
                            <br>
                            <h5>Your Organization</h5>
                            <br>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="organizationName" class="form-label">Organization Name <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="organizationName" placeholder="Enter organization name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="organizationType" class="form-label">Organization Type <span style="color:red">*</span></label>
                                    <select class="form-control" id="organizationType" required>
                                        <option value="">Select type</option>
                                        <option value="nonprofit">Non-Profit</option>
                                        <option value="corporate">Corporate</option>
                                        <option value="government">Government</option>
                                    </select>
                                </div>
                            </div>
                            <br><hr>

                            <h1>Contact Information</h1>
                            <br>
                            <h5>In case of problems our team will reach out to this contact</h5>
                            <br>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Enter Your Fullname" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Enter Your Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Phone Number <span style="color:red">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">+855</span>
                                    <input
                                        type="tel"
                                        class="form-control"
                                        id="phoneNumber"
                                        placeholder="Enter Your Phone Number"
                                        pattern="[0-9]{8,10}"
                                        required
                                        aria-describedby="phoneHelp">
                                </div>
                            </div>
                            <br><hr>

                            <h1>About Event</h1>
                            <br>
                            <h5>Your Event Information</h5>
                            <br>
                            <div class="container">

                                    <div class="mb-3 row">
                                        <!-- Title -->
                                        <div class="col-md-6">
                                            <label for="eventTitle" class="form-label">Title <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="eventTitle" placeholder="Enter event title" required>
                                        </div>
                                        <!-- Ticket Price -->
                                        <div class="col-md-6">
                                            <label for="ticketPrice" class="form-label">Ticket Price <span style="color:red">*</span></label>
                                            <input type="number" class="form-control" id="ticketPrice" placeholder="Enter ticket price" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <!-- Subtitle -->
                                        <div class="col-md-6">
                                            <label for="eventSubtitle" class="form-label">Subtitle <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="eventSubtitle" placeholder="Enter event subtitle" required>
                                        </div>
                                        <!-- Event Date -->
                                        <div class="col-md-6">
                                            <label for="eventDate" class="form-label">Event Date <span style="color:red">*</span></label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="eventDate" required>
                                                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <!-- Upload Image -->
                                        <div class="col-md-6">
                                            <label for="eventImage" class="form-label">Upload Your Event Image (JPG, JPEG, PNG)<span style="color:red">*</span></label>

                                            <input
                                                type="file"
                                                class="form-control mt-2"
                                                id="eventImage"
                                                accept=".jpg, .jpeg, .png"
                                                required>
                                        </div>
                                        <!-- Event Purpose -->
                                        <div class="col-md-6">
                                            <label for="eventPurpose" class="form-label">Event Purpose <span style="color:red">*</span></label>
                                            <textarea id="message" rows="10" class="form-control" placeholder="Write your event description" style="resize: none;"></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary px-5">Complete</button>
                                    </div>

                            </div>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ST15\wamp\www\Ticket Booking System\ticket-booking-system\resources\views/frontend/sell-your-ticket/sell_your_ticket.blade.php ENDPATH**/ ?>