

<?php $__env->startSection('title', 'Update Image'); ?>

<?php $__env->startSection('content'); ?>

<form enctype="multipart/form-data" action="<?php echo e(url('modal')); ?>" method="POST">
  <?php echo e(csrf_field()); ?>

  <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update Image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" name="image-url" class="form-input" id="image-url" placeholder="Image URL">
          <?php $__errorArgs = ['image-url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <?php echo e($message); ?>

          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="save-image">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AgnesGW\Downloads\ProjectWebProgLab-MovieList2\resources\views/modal.blade.php ENDPATH**/ ?>