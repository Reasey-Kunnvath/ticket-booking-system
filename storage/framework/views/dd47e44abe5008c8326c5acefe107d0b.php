<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stripe Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <h1>Stripe Payment</h1>

    <?php if(session('success')): ?>
        <div style="color: green;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div style="color: red;"><?php echo e(session('error')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('payment.process')); ?>" method="POST" id="payment-form">
        <?php echo csrf_field(); ?>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" min="1" required><br><br>

        <div id="card-element"></div><br>

        <input type="hidden" name="stripeToken" id="stripeToken">
        <button type="submit">Pay</button>
    </form>

    <script>
        const stripe = Stripe("<?php echo e(config('services.stripe.key')); ?>");
        const elements = stripe.elements();
        const card = elements.create('card');
        card.mount('#card-element');

        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const {token, error} = await stripe.createToken(card);
            if (error) {
                alert(error.message);
            } else {
                document.getElementById('stripeToken').value = token.id;
                form.submit();
            }
        });
    </script>
</body>
</html>
<?php /**PATH D:\ST15\wamp\www\Ticket Booking System\ticket-booking-system\resources\views/frontend/payment-form/payment-form.blade.php ENDPATH**/ ?>