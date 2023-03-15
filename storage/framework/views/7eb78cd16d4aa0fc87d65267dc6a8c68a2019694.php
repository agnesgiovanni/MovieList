

<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="judul">
        <div class="logo2">
            <h4>Hello, Welcome Back to <span class="logo2-start">Movie</span><span class="logo2-end">List </span></h4>
        </div>
    </div>

    
        <form enctype="multipart/form-data" action="" method="POST">
            <?php echo csrf_field(); ?>
            <div class="d-grid gap-2 col-6 mx-auto">
                <div class="mb-3">
                    <input type="name" class="form-control" id="exampleInputName1" name="username" placeholder="Enter your username">
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
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" value="<?php echo e(Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : ""); ?>">
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
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password">
                    <div class="error">
                        <?php $__errorArgs = ['password'];
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
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your confirm password">
                    <div class="error">
                        <?php $__errorArgs = ['password'];
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

                <button type="submit" class="btn-submit" >Register
                    <i class="fa-solid fa-arrow-right"></i> 
                </button>

                <p class="login-desc text-white">Already have an account?
                    <a href="<?php echo e(url('login')); ?>">Login now!</a>
                </p>
            </div>
        </form>
    

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AgnesGW\Documents\laravel-workspace\ProjectWebProgLab-MovieList\resources\views/register.blade.php ENDPATH**/ ?>