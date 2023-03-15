

<?php $__env->startSection('title', 'Add Movie'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="judul">
        <h4>Add Movie</h4>
    </div>

    <form enctype="multipart/form-data" action=<?php echo e(url('insert-movie')); ?> method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="mb-3">
            <label for="floatingInput" class="form-label text-light">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            <?php $__errorArgs = ['title'];
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
            <label for="floatingInput" class="form-label text-light">Description</label>
            <input type="text" class="form-control" id="movie_desc" name="description" width="50px">
            <?php $__errorArgs = ['description'];
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
            <label for="floatingInput" class="form-label text-light">Genre</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>-- Open this select menu --</option>
                <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option id="multiselect"><?php echo e($g->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>    
        <div class="mb-3">
            <label for="floatingInput" class="form-label text-light">Actors</label>
            <br>
            <div id="container-actor">
                <div class="actors">
                    <div class="row">
                        <div class="col">
                            <label for="floatingInput" class="form-label text-light">Actor</label>
                            <select name="actor" class="form-select" aria-label="Default select example">
                                <option selected>-- Open this select menu --</option>
                                <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option id="multiselect"><?php echo e($a->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="floatingInput" class="form-label text-light">Character Name</label>
                            <input type="text" class="form-control" id="character_name" name="character_name">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col">
                            <label for="floatingInput" class="form-label text-light">Actor</label>
                            <select name="actor" class="form-select" aria-label="Default select example">
                                <option selected>-- Open this select menu --</option>
                                <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option id="multiselect"><?php echo e($a->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="floatingInput" class="form-label text-light">Character Name</label>
                            <input type="text" class="form-control" id="character_name" name="character_name">
                        </div>
                    </div>      
                </div>
            </div>
            <div class="add d-flex justify-content-end">
                <div id="add-more" class="btn btn-primary btn-add-more">Add More</div>
            </div>
        </div> 
        <div class="mb-3">
            <label for="floatingInput" class="form-label text-light">Director</label>
            <input type="text" class="form-control" id="movie_director" name="director">
            <?php $__errorArgs = ['director'];
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
            <label for="floatingInput" class="form-label text-light">Release Date</label>
            <input type="date" class="form-control" id="movie_date" name="release_date">
            <?php $__errorArgs = ['release_date'];
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
            <input type="file" class="form-control" id="movie_thumbnail" name="thumbnail" placeholder="Insert">
            <?php $__errorArgs = ['thumbnail'];
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
            <label for="floatingInput" class="form-label text-light">Background Url</label>
            <input type="file" class="form-control" id="movie_background" name="background" placeholder="Insert">
            <?php $__errorArgs = ['background'];
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

        <div class="d-grid gap-2 btnMovie">
            <button class="btn btn-danger" type="submit">Create</button>
        </div>

    </form>
</div>

<script>
    $(document).ready(function(){
        $('#add-more').on('click', function(){
            $('#container-actor').append(
                `<div class="row">
                        <div class="col">
                            <label for="floatingInput" class="form-label text-light">Actor</label>
                            <select name="actor" class="form-select" aria-label="Default select example">
                                <option selected>-- Open this select menu --</option>
                                <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option id="multiselect"><?php echo e($a->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="floatingInput" class="form-label text-light">Character Name</label>
                            <input type="text" class="form-control" id="character_name" name="character_name">
                        </div>
                </div> `
            );
        })    
    });
</script>

<?php $__env->stopSection(); ?>   
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\client\ProjectWebProgLab-MovieList2\resources\views/insertMovie.blade.php ENDPATH**/ ?>