

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>

<div class="profile-container">
    <div class="profile-left">
        <div class="my-profile-header">
            <h1>My <span class="profile text-danger">Profile</span></h1>
            <?php if(auth()->guard()->check()): ?>
            <?php if(Auth::user()->image == ''): ?>
                <div class="profile-image">
                    <button type="button" class="btn btn-dark rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-user fa-4x"></i>
                    </button>
                </div>
            <?php else: ?>
                <div class="profile-image">
                    <button type="button" class="btn btn-dark rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="<?php echo e($users->image); ?>" alt="">
                        
                    </button>
                </div>
            <?php endif; ?>     
            <?php endif; ?>
        </div>

        <div class="profile-desc">
            <h4 class="username-name" value="<?php echo e($users->username); ?>"><?php echo e($users->username); ?></h4>
            <p class="username-email" value="<?php echo e($users->email); ?>"><?php echo e($users->email); ?></p>
        </div>
    </div>
    
    <div class="profile-form-right">
        <h1 class="profile-form-header text-danger">Update Profile</h1>
        <form enctype="multipart/form-data" action="<?php echo e(url('/profile')); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="mb-3">
                <label for="floatingInput" class="form-label text-light">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo e($users->username); ?>">
                <div class="error">
                    <?php $__errorArgs = ['username'];
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
            </div>
            <div class="mb-3">
                <label for="floatingInput" class="form-label text-light">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($users->email); ?>">
                <div class="error">
                    <?php $__errorArgs = ['email'];
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
            </div>
            <div class="mb-3">
                <label for="floatingInput" class="form-label text-light">DOB</label>
                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo e($users->dob); ?>">
                <div class="error">
                    <?php $__errorArgs = ['dob'];
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
            </div>
            <div class="mb-3">
                <label for="floatingInput" class="form-label text-light">Phone</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="<?php echo e($users->phoneNumber); ?>">
                <div class="error">
                    <?php $__errorArgs = ['phoneNumber'];
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
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-danger" type="submit">Save Changes</button>
            </div>   
        </form>
    </div>
</div>

<form enctype="multipart/form-data" action="<?php echo e(url('/modal')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="image" class="form-input" id="image-url" placeholder="Image URL">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="save-picture">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AgnesGW\Downloads\ProjectWebProgLab-MovieList2\resources\views/profile.blade.php ENDPATH**/ ?>