<?php $__env->startSection('title','Cart - Checkout'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row shadow-lg my-5">
      <div class="col-12 col-sm-8 bg-white p-4">
        <div class="d-flex justify-content-between border-bottom pb-4">
          <h1 class="font-weight-bold h3">Shopping Cart</h1>
          <h2 class="font-weight-bold h3">2 Items</h2>
        </div>
        <div class="row py-3 border-top border-light">
          <div class="col-md-4 col-12">
            <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png" alt="Black Leather Purse" class="img-fluid d-none d-md-block" />
            <img src="https://i.ibb.co/TTnzMTf/Rectangle-21.png" alt="Black Leather Purse" class="img-fluid d-md-none" />
          </div>
          <div class="col-md-8 d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-between">
              <p class="h5 font-weight-bold mb-0">Luxe card holder</p>
              <select class="form-control form-control-sm w-auto" aria-label="Select quantity">
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
            <p class="text-muted small pt-1">Height: 10 inches</p>
            <p class="w-100 text-muted small pt-1">Composition: 100% calf leather</p>
            <div class="d-flex justify-content-between pt-1">
              <div class="d-flex">
                <p class="text-primary small text-decoration-underline ml-3 cursor-pointer">
                  <a href="#" class="font-weight-bold text-primary text-decoration-underline text-sm">Add to Favorites</a>
                </p>
                &nbsp;&nbsp;&nbsp;
                <p class="text-danger small text-decoration-underline ml-3 cursor-pointer">
                  <a href="#" class="font-weight-bold text-danger text-decoration-underline text-sm">Remove</a>
                </p>
              </div>
              <p class="h5 font-weight-bold mb-0">1,000$</p>
            </div>
          </div>
        </div>

        <div class="row py-3 border-top border-light">
          <div class="col-md-4 col-12">
            <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png" alt="Black Leather Purse" class="img-fluid d-none d-md-block" />
            <img src="https://i.ibb.co/TTnzMTf/Rectangle-21.png" alt="Black Leather Purse" class="img-fluid d-md-none" />
          </div>
          <div class="col-md-8 d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-between">
              <p class="h5 font-weight-bold mb-0">Luxe card holder</p>
              <select class="form-control form-control-sm w-auto" aria-label="Select quantity">
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
            <p class="text-muted small pt-1">Height: 10 inches</p>
            <p class="w-100 text-muted small pt-1">Composition: 100% calf leather</p>
            <div class="d-flex justify-content-between pt-1">
              <div class="d-flex">
                <p class="text-primary small text-decoration-underline ml-3 cursor-pointer">
                    <a href="#" class="font-weight-bold text-primary text-decoration-underline text-sm">Add to Favorites</a>
                  </p>
                  &nbsp;&nbsp;&nbsp;
                  <p class="text-danger small text-decoration-underline ml-3 cursor-pointer">
                    <a href="#" class="font-weight-bold text-danger text-decoration-underline text-sm">Remove</a>
                  </p>
              </div>
              <p class="h5 font-weight-bold mb-0">1,000$</p>
            </div>
          </div>
        </div>
        <div class="d-flex">
            <a href="<?php echo e(url('/all-event')); ?>" class="fs-5 font-weight-bold text-primary text-sm mt-5"><i class="fa-solid fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Browse More Events</a>
        </div>
      </div>

      <div id="summary" class="col-12 col-sm-4 px-5 py-4">
        <h1 class="font-weight-bold h3 border-bottom pb-4">Order Summary</h1>
        <div class="d-flex justify-content-between mt-4 mb-3 fw-bold">
          <span class="text-muted small">Items 2</span>
          <span class="text-muted small">2,000$</span>
        </div>
        <div>
          <label class="font-weight-medium d-block mb-2 text-muted text-sm">Shipping</label>
          <select class="form-control form-control-sm mb-4">
            <option>E-Ticket Delivery - Free</option>
            <option>Door-to-Door Delivery - Free</option>
          </select>
        </div>
        <div class="py-4">
          <label for="promo" class="font-weight-bold d-block mb-2 text-muted text-sm">Promo Code</label>
          <input type="text" id="promo" placeholder="Enter your code" class="form-control form-control-sm" />
        </div>
        <button class="btn btn-danger btn-sm w-100">Apply</button>
        <div class="border-top mt-4 pt-4">
          <div class="d-flex font-weight-bold justify-content-between py-3 text-muted small">
            <p class="h5 font-weight-bold mb-0">Total</p>
            <p class="h5 font-weight-bold mb-0">1,000$</p>
          </div>
          <button class="btn btn-primary btn-sm w-100">Checkout</button>
        </div>
      </div>
    </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ST15\wamp\www\Ticket Booking System\ticket-booking-system\resources\views/frontend/cart/cart.blade.php ENDPATH**/ ?>