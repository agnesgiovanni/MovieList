

<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <?php $__currentLoopData = $rMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="carousel-item 
      <?php if($loop->first): ?> active
      <?php endif; ?>
      ">
        <img src="<?php echo e(url('storage/background/'.$b->background)); ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <?php $__currentLoopData = $b->moviegenre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($mg->genre->name); ?></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo e(' | ' . date('Y', strtotime($b->release_date))); ?> </p>
          <h1><?php echo e($b->title); ?></h1>
          <p><?php echo e($b->description); ?></p>
        </div>

        <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->role == 'member'): ?>
        <form class="d-flex" action="<?php echo e(url('/addWathclist')); ?>">
          <button type="submit" class="btn btn-danger" id="btn-admin">
            <i class="fa-solid fa-plus"></i> Add To Watchlists
          </button>
        </form>
        <?php endif; ?>
        <?php endif; ?>
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
    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="movie-list-item">
          <img src="<?php echo e(url('storage/thumbnail/'.$mo->thumbnail)); ?>">
          <p class="movie-title"><?php echo e($mo->title); ?></p>
          <p class="movie-year"><?php echo e(date('Y', strtotime($mo->release_date))); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <div class="m-5 d-flex justify-content-center">
    <?php echo e($movies->links()); ?>

  </div>
</div>

<div class="show-header">
  <div class="show">
    <i class="fa-solid fa-film"></i> Show
  </div>
  <form class="d-flex" action="<?php echo e(url('/search')); ?>">
    <input class="form-control me-2" name="search" type="search" placeholder="Search">
  </form>
</div>

<div id="genre-navbar" class="body-container">
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner-genre">
      <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="btn btn-light genre-choice me-2"><?php echo e($g->name); ?></button>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="m-5 d-flex justify-content-center">
        <?php echo e($genres->links()); ?>

    </div>
  </div>
</div>

<div id="sort-navbar" class="body-container"> 
  <p>Sort By</p>
  <form class="d-flex" action="<?php echo e(url('/latest')); ?>">
    <button id="sort-latest" type="submit" class="btn-sort me-2">Latest</button>
  </form>

  <form class="d-flex" action="<?php echo e(url('/asc')); ?>" method="GET">
    <button id="sort-asc" type="submit" class="btn-sort me-2">A-Z</button>
  </form> 

  <form class="d-flex" action="<?php echo e(url('/desc')); ?>">
    <button id="sort-desc" type="submit" class="btn-sort me-2">Z-A</button>
  </form>

  <?php if(auth()->guard()->check()): ?>
  <?php if(Auth::user()->role == 'admin'): ?>
    <a href="<?php echo e(url('/insert-movie')); ?>" style="margin-top: 10px" class="btn btn-danger justify-content-end" >
      <i class="fa-solid fa-plus"></i> Add Movie
    </a>
  <?php endif; ?>
  <?php endif; ?>
</div>

<div class="movie-container">
  <div class="movie-list">
    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="movie-list-item">
        <img src="<?php echo e(url('storage/thumbnail/'.$mo->thumbnail)); ?>">
        <p class="movie-title"><?php echo e($mo->title); ?></p>
        <p class="movie-year"><?php echo e(date('Y', strtotime($mo->release_date))); ?></p>
          
        <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->role == 'member'): ?>
          <button type="submit" class="add-watchlist" id="btn-admin" action="<?php echo e(url('/addWathclist')); ?>">
            <i class="fa-solid fa-plus"></i>
          </button>
        <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="m-5 d-flex justify-content-center">
      <?php echo e($movies->links()); ?>

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AgnesGW\Downloads\ProjectWebAgnesStev\ProjectWebProgLab-MovieList2\resources\views/home.blade.php ENDPATH**/ ?>