

<?php $__env->startSection('title', 'Add Actors'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="judul">
        <h4>Add Actor</h4>
    </div>
    
    <form enctype="multipart/form-data" action=<?php echo e(url('insert-actor')); ?> method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="mb-3">
            <label for="floatingInput" class="form-label text-light">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <?php $__errorArgs = ['name'];
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
        
        

        <div class="mb-3">
            <label for="floatingInput" class="form-label text-light">Biography</label>
            <input type="text" class="form-control" id="actor_bio" name="biography" width="50px">
            <?php $__errorArgs = ['biography'];
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

        <div class="mb-3">
            <label for="floatingInput" class="form-label text-light">Date of Birth</label>
            <input type="date" class="form-control" id="dob_actor" name="birthday">
            <?php $__errorArgs = ['birthday'];
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
        
        <div class="mb-3"> 
            <label for="floatingInput" class="form-label text-light">Place of Birth</label>
            <input type="text" class="form-control" id="place_of_birth" name="place_of_birth">
            <?php $__errorArgs = ['place_of_birth'];
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
        
        <div class="mb-3">
            <label for="floatingInput" class="form-label text-light">Image Url</label>
            <input type="file" class="form-control" id="actor_photo" name="image_actor" placeholder="Insert">
            <?php $__errorArgs = ['image_actor'];
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
    
        <div class="mb-3">
            <label for="floatingInput" class="form-label text-light">Popularity</label>
            <input type="text" class="form-control" id="popularity_actor" name="popularity">
            <?php $__errorArgs = ['popularity'];
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

        <div class="d-grid gap-2 btnactor">
            <button class="btn btn-danger" type="submit">Create</button>
        </div>
    </form>
</div>



        






<?php $__env->stopSection(); ?> 
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\kuliah\Matkul semester 5\Web Proggramming\project\code\o\ProjectWebProgLab-MovieList2\resources\views/pages/actor/insertActor.blade.php ENDPATH**/ ?>