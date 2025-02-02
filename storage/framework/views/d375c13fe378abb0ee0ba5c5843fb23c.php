<?php $__env->startSection('title', 'Support Message View Detail'); ?>
<?php $__env->startSection('support_show', 'show'); ?>
<?php $__env->startSection('goin_active', 'active'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <h1 class="pt-3" ><strong>Support Ticket #123</strong></h1>
                 <p class="h3"><strong>Message : </strong></p>
                 <p>“I hope this message finds you well. I am writing to report an issue I encountered while trying to purchase tickets on your platform.”</p>
                 <p class="h3 pt-5"> <strong>Reply</strong></p>
              <h1 class="card-title pt-0">Type your respond : </h1>
              <textarea class="tinymce-editor" style="height: 100%">
                Thank you for bringing this issue to our attention. We apologize for the inconvenience you experienced while trying to purchase tickets.
                After reviewing the details you provided, here are some steps you can take to try and resolve the issue:
                Clear Your Cache and Cookies: Sometimes, cached data can interfere with the purchase process. Please try clearing your browser’s cache and cookies, then attempt the purchase again.
                Try a Different Browser or Device: If possible, try using another browser or device to see if the issue persists.
                Check Your Internet Connection: Ensure you have a stable internet connection while completing the transaction.

                If the problem continues after trying the above steps, please let us know and provide any additional details or screenshots. Alternatively, you can try purchasing your tickets through our mobile app or contact our customer service at [Support Hotline/Email] for assistance with manual ticket processing.
                Once again, we apologize for the inconvenience and appreciate your patience. Please don’t hesitate to reach out if you need further assistance.
              </textarea>
              <div class="float-end pt-2">
                <a href="#" type="button" class="btn btn-primary ">Reply</a>
              <a href="#" type="button" class="btn btn-danger">Discard</a>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.masterPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel\ticket-booking-system\resources\views/backend/supportCenter/supportMeessage/supportMessageViewDetail.blade.php ENDPATH**/ ?>