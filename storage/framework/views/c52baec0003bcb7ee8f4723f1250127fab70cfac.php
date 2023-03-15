

<?php $__env->startSection('title', 'Actors'); ?>

<?php $__env->startSection('content'); ?>

<section id="actor-detail" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="row mb-2">
                    <div class="col">
                        <div class="card">
                            
                            <?php if(Auth::user()->role == 'admin'): ?>
                            <div class="admin-features">
                                <a href="edit-actor/<?php echo e($actors->id); ?>"><i class="fa-solid fa-edit"></i></a>
                                <br>
                                <form action="delete-actor/<?php echo e($actors->id); ?>" method="POST">
                                    <?php echo e(method_field('DELETE')); ?>

                                    <?php echo csrf_field(); ?>
                                    <a href="delete-actor/"><i class="fa-solid fa-trash-alt"></i></a>
                                </form>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="title">
                            Personal Info    
                        </p>
                        <div class="sub-subtitle">
                            Popularity
                        </div>
                        <div class="sub-value">
                            <?php echo e($actor->actors->popularity); ?>

                        </div>
                        <div class="sub-subtitle">
                            Birthday
                        </div>
                        <div class="sub-value">
                            <?php echo e($actor->actors->birthday); ?>

                        </div>
                        <div class="sub-subtitle">
                            Place of Birth
                        </div>
                        <div class="sub-value">
                            <?php echo e($actor->actors->place_of_birth); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="actor-name">
                    <?php echo e($actor->actors->name); ?>

                </div>
                <p class="subtitle">Biography</p>
                <p>
                    <?php echo e($actor->actors->biography); ?>

                </p>
                <p class="subtitle">Known For</p>
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <img src="<?php echo e(asset('storage/thumbnail/'. $actor->movies->thumbnail )); ?>" class="w-100">
                            <span class="movie-title"><?php echo e($actor->movies->title); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>   
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\kuliah\Matkul semester 5\Web Proggramming\project\code\s\ProjectWebProgLab-MovieList2\resources\views/pages/actor/detailActor.blade.php ENDPATH**/ ?>