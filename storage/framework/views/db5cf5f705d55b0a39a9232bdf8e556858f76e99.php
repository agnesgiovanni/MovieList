

<?php $__env->startSection('title', 'My Watchlist'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="watchlst-header">
        <i class="fa-solid fa-bookmark fa-3x me-2" style="color: red;"></i><span><h1 style="color: white;">My <span class="profile text-danger">Watchlist</span></h1></span>
    </div>
    <div class="search-watchlist">
        <form class="d-flex" action="<?php echo e(url('/searchWa')); ?>">
            <input class="form-control me-2" name="search" type="search" placeholder="Search">
        </form>
    </div>
    <div class="filter-container" name="filter">
        <i class="fa-solid fa-filter fa-lg me-2" style="color: grey;"></i>
        <span>
            <div class="dropdown-filter">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Filter
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(url('/all')); ?>">All</a></li>
                <li><a class="dropdown-item" href="<?php echo e(url('/filter')); ?>">Planned</a></li>
                <li><a class="dropdown-item" href="<?php echo e(url('/filter')); ?>">Watching</a></li>
                <li><a class="dropdown-item" href="<?php echo e(url('/filter')); ?>">Finished</a></li>
                </ul>
            </div>
        </span>
    </div>  
    <div class="watchlist-container">
        <?php $__currentLoopData = $watchlistitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table class="watchlist-table" id="watchlist-table" style="position: relative; width: 100%; color: white;">
                <thead class="table-header">
                    <tr>
                        <th style="width: 30%;">Poster</th>
                        <th style="width: 30%;">Title</th>
                        <th style="width: 30%;">Status</th>
                        <th style="width: 10%;">Action</th>
                    </tr>
                </thead>
                <tbody id="watchlist-card">
                    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="background-color: rgb(21, 21, 21); margin-bottom: 20px; border-bottom: black solid 20px;">
                            <td>
                                <img src="<?php echo e(url('storage/thumbnails/'. $m->thumbnail)); ?>">
                            </td>
                            <td><?php echo e($m->title); ?></td>
                            <td class="watchlist-status"><?php echo e($m->status); ?></td>
                            <td>
                                <div class="action">
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-ellipsis" id="<?php echo e($m->movie_id); ?>"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>
    
</div>    

<form enctype="multipart/form-data" action="<?php echo e(url('/modalWa')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="action-container">  
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>-- Open this select menu --</option>
                                <option selected value="All">All</option>
                                <option value="Planned">Planned</option>
                                <option value="Watching">Watching</option>
                                <option value="Finished">Finished</option>
                            </select>
                        </div>
                    </div>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\client\ProjectWebProgLab-MovieList2\resources\views/watchlist.blade.php ENDPATH**/ ?>