

<?php $__env->startSection('title', 'Movie Detail'); ?>

<?php $__env->startSection('content'); ?>

<section id="actor-detail" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="row mb-2">
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo e(asset('storage/thumbnail/'. $movies->thumbnail )); ?>" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="movie-title">
                    <?php echo e($movies->title); ?>

                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->role == 'admin'): ?>
                        <div class="admin-features">
                            <a href="edit-movie/<?php echo e($movies->id); ?>"><i class="fa-solid fa-edit"></i></a>
                            <br>
                            <form action="delete-movie/<?php echo e($movies->id); ?>" method="POST">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo csrf_field(); ?>
                                <a href="delete-movie/"><i class="fa-solid fa-trash-alt"></i></a>
                            </form>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <?php $__currentLoopData = $movies->moviegenre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button class="genre rounded-circle"><?php echo e($mg->genre->name); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br>
                <br>
                <i class="fa-solid fa-calendar-days" style="color: rgb(44, 44, 199)"></i>

                <div class="relase-date">
                    <h4 class="date">Release Date</h4>
                    <p>
                        <?php echo e(date('Y', strtotime($movies->release_date))); ?>

                    </p>
                </div>

                <div class="storyline">
                    <h4 class="story">Storyline</h4>
                    <p> <?php echo e($movies->description); ?></p>
                </div>
                
                <div class="director">
                    <h4 class="dir">Director</h4>
                    <p> <?php echo e($movies->director); ?></p>
                </div>
            </div>
        </div>
        
        <div class="cast-body">
            <div class="actor-header">
                <i class="fa-solid fa-lines-leaning fa-lg me-2" style="color: red"></i>Cast
            </div>
            <div class="row row-cols-5">
                <?php $__currentLoopData = $movies->movieactor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo e(url('storage/actor/'.$mg->actors->image)); ?>" class="w-100">
                                <div class="actor-name">
                                    <p><?php echo e($mg->actors->name); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        
        
    </div>
</section>

<?php $__env->stopSection(); ?>   
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AgnesGW\Documents\Project\ProjectWebProgLab-MovieList2\resources\views/detailMovie.blade.php ENDPATH**/ ?>