

<?php $__env->startSection('title', 'Movies'); ?>

<?php $__env->startSection('content'); ?>

<section id="actors" class="pt-5">
    <div class="container">   
        <div class="row justify-content-between pb-3" id="movie-container">
            <div class="col">
                <h4 class="text-danger fw-bold">Movies</h4>
            </div>

            <div class="col2">
                <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->role == 'admin'): ?>
                    <a href="<?php echo e(url('/insert-movie')); ?>" style="margin-top: 10px" class="btn btn-danger justify-content-end" >
                    <i class="fa-solid fa-plus"></i> Add Movie
                    </a>
                <?php endif; ?>
                <?php endif; ?>

                <div class="title-actor-left">
                    <form class="d-flex" action="<?php echo e(url('/search')); ?>">
                        <input class="form-control me-2" name="search" type="search" placeholder="Search Movie Address">
                    </form>
                </div>
            </div>
        </div> 
        <div class="row row-cols-5">
            <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo e(url('storage/thumbnail/'.$m->thumbnail)); ?>" class="w-100">
                            <div class="actor-name">
                                <a href="<?php echo e(url('/movie')); ?>/<?php echo e($m->id); ?>"><?php echo e($m->title); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>   
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AgnesGW\Downloads\ProjectWebAgnesStev\ProjectWebProgLab-MovieList2\resources\views/movie.blade.php ENDPATH**/ ?>