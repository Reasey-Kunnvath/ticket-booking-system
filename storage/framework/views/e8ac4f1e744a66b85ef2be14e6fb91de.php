<?php $__env->startSection('title','Cart - Checkout'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row shadow-lg my-5">
      <div class="col-12 col-sm-8 bg-white p-4">
        <div class="d-flex justify-content-between border-bottom pb-4">
          <h1 class="font-weight-bold h3">Shopping Cart</h1>
          <h2 class="font-weight-bold h3">2 Items</h2>
        </div>
        
        <div class="row mb-4 d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="<?php echo e(asset('frontend/assets/images/ticket-details.jpg')); ?>"
                class="img-fluid rounded-3"
                style="object-fit: cover; width: 100%; height: 100px;"
                alt="EVENT ABC">

            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <h6 class="mb-0">EVENT ABC</h6>
              <h6 class="text-muted">VIP SEAT</h6>
            </div>
            Quantity
            <div class="col-md-3 col-lg-3 col-xl-2 d-flex align-self-center">

              <input id="form1" min="0" name="quantity" value="1" type="number"
                class="form-control form-control-sm" />

            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
              <h6 class="mb-0">Price*QTY</h6>
            </div>
            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
              <a href="#!" class="text-danger"><i class="fas fa-times"></i></a>
            </div>
        </div>

        <div class="row mb-4 d-flex justify-content-between align-items-center">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="<?php echo e(asset('frontend/assets/images/ticket-details.jpg')); ?>"
                class="img-fluid rounded-3"
                style="object-fit: cover; width: 100%; height: 100px;"
                alt="EVENT ABC">

            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <h6 class="mb-0">EVENT ABC</h6>
              <h6 class="text-muted">VIP SEAT</h6>
            </div>
            Quantity
            <div class="col-md-3 col-lg-3 col-xl-2 d-flex align-self-center">

              <input id="form1" min="0" name="quantity" value="1" type="number"
                class="form-control form-control-sm" />

            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
              <h6 class="mb-0">Price*QTY</h6>
            </div>
            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
              <a href="#!" class="text-danger"><i class="fas fa-times"></i></a>
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

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/frontend/cart/cart.blade.php ENDPATH**/ ?>