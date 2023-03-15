

<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
    

    <div class="carousel-inner">
      <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="carousel-item active 
      <?php if($loop->first): ?> active
      <?php endif; ?>
      ">
        <img src="<?php echo e(url('storage/background/'.$b->background)); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p><?php echo e($b->genre . ' | ' . $b->date); ?></p>
          <h1><?php echo e($b->name); ?></h1>
          <p><?php echo e($b->description); ?></p>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</div>   

<div class="popular-header">
  <div>
    <i class="fa-solid fa-fire-flame-curved"></i> Popular
    <hr />
  </div>
    
  <div class="movie-list">
    <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="movie-list-item">
          <img src="<?php echo e(url('storage/thumbnail/'.$mo->thumbnail)); ?>">
          <p class="movie-title"><?php echo e($mo->title); ?></p>
          <p class="movie-year"><?php echo e($mo->date); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>

<div class="show-header">
  <div class="show">
    <i class="fa-solid fa-film"></i> Show
  </div>
  <form class="d-flex" action="<?php echo e(url('/search')); ?>">
    <input class="form-control me-2" name="search" type="search" placeholder="Search">
    <button class="btn btn-outline-success text-white" type="submit">Search</button>
  </form>
</div>



<div id="sort-navbar" class="body-container"> 
  <p>Sort By</p>
  <button id="sort-latest" type="button" class="btn btn-light me-2">Latest</button>
  <button id="sort-asc" type="button" class="btn btn-light me-2">A-Z</button>
  <button id="sort-desc" type="button" class="btn btn-light me-2">Z-A</button>

  <?php if(auth()->guard()->check()): ?>
  <?php if(Auth::user()->role == 'admin'): ?>
  <button type="button" class="btn btn-danger" id="btn-admin" action="<?php echo e('/insertMovie'); ?>">
    <i class="fa-solid fa-plus"></i> Add Movie
  </button>
  <?php endif; ?>
  <?php endif; ?>
</div>

<div class="movie-list">
    <?php $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="movie-list-item">
        <img src="<?php echo e(url('storage/thumbnail/'.$mo->thumbnail)); ?>">
        <p class="movie-title"><?php echo e($mo->title); ?></p>
        <p class="movie-year"><?php echo e($mo->date); ?></p>
          
        <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->role == 'member'): ?>
          <button type="button" class="btn btn-danger" id="btn-admin" action="<?php echo e('/watchlist'); ?>">
            <i class="fa-solid fa-plus"></i>
          </button>
        <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AgnesGW\Downloads\ProjectWebProgLab-MovieList(1)\ProjectWebProgLab-MovieList\ProjectWebProgLab-MovieList\resources\views/home.blade.php ENDPATH**/ ?>