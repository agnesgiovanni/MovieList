

<?php $__env->startSection('title', 'Actors'); ?>

<?php $__env->startSection('content'); ?>

<section id="actors" class="pt-5">
    <div class="container">   
        <div class="row justify-content-between pb-3">
            <div class="col">
                <h4 class="text-danger fw-bold">Actors</h4>
            </div>
            <?php if(Auth::user()->role == 'admin'): ?>
            <div class="col text-end">
                <a href="#" class="btn btn-danger btn-sm">Add Actor</a>
            </div>
            <?php endif; ?>
            <div class="title-actor-left">
                <form class="d-flex" action="<?php echo e(url('/searchAc')); ?>">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search Actor Address">
                </form>
            </div>
        </div> 
        <div class="row row-cols-5">
            <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo e(asset('storage/actor/'. $actor->actors->image )); ?>" class="w-100">
                            <div class="actor-name">
                                <a href="<?php echo e(url('/')); ?>/actor/<?php echo e($actor->actors->id); ?>"><?php echo e($actor->actors->name); ?></a>
                            </div>
                            <div class="actor-movies">
                                <?php echo e($actor->movies->title); ?>

                            </div>
                        </div>
                    </div>
                </div>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>   
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\kuliah\Matkul semester 5\Web Proggramming\project\code\o\ProjectWebProgLab-MovieList2\resources\views/pages/actor/index.blade.php ENDPATH**/ ?>