<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Buku | <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  
</head>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-success ">
            <div class="container-fluid">

              <a class="navbar-brand" href="#">Sewa Buku</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            </div>
          </nav>

          <div class="body-content h-100">
                <div class="row g-0 h-100">
                    <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                            <?php if((Auth::user())): ?>                              

                              <?php if(Auth::user()->role_id == 1): ?>
                                      <a href="/dashboard" <?php if(request()->route()->uri == 'dashboard'): ?> class='active' <?php endif; ?>>Dashboard</a>
                                      
                                      <a href="/books" <?php if(request()->route()->uri == 'books' 
                                        || request()->route()->uri == 'category-add'
                                        || request()->route()->uri == 'book-deleted' 
                                        || request()->route()->uri == 'book-edit/{slug}'
                                        || request()->route()->uri == 'book-delete/{slug}'): ?> class='active' <?php endif; ?>>Books</a>

                                      <a href="/categories" <?php if(request()->route()->uri == 'categories' 
                                        || request()->route()->uri == 'category-add'
                                        || request()->route()->uri == 'category-deleted' 
                                        || request()->route()->uri == 'category-edit/{slug}'
                                        || request()->route()->uri == 'category-delete/{slug}'): ?> class='active' <?php endif; ?>>Categories</a>
                                      
                                      <a href="/users" <?php if(request()->route()->uri == 'users'
                                        || request()->route()->uri == 'registered-users' 
                                        || request()->route()->uri == 'user-detail/{slug}' 
                                        || request()->route()->uri == 'user-ban/{slug}' 
                                        || request()->route()->uri == 'user-banned'   ): ?> class='active' <?php endif; ?>>Users</a>
                                      
                                      <a href="/rent-logs" <?php if(request()->route()->uri == 'rent-logs'): ?> class='active' <?php endif; ?>>Rent Log</a>
                                      <a href="/" <?php if(request()->route()->uri == '/'): ?> class='active' <?php endif; ?>>Book List</a>

                                      <a href="/book-rent" <?php if(request()->route()->uri == 'book-rent'): ?> class='active' <?php endif; ?>>Book Rent</a>
                                      <a href="/book-return" <?php if(request()->route()->uri == 'book-return'): ?> class='active' <?php endif; ?>>Book Return</a>

                                      <a href="/logout" >Logout</a>
                              <?php else: ?>

                                      <a href="/profile" <?php if(request()->route()->uri == 'profile'): ?> class='active' <?php endif; ?>>Profile</a>
                                      <a href="/" <?php if(request()->route()->uri == '/'): ?> class='active' <?php endif; ?>>Book List</a>
                                      <a href="/logout" >Logout</a>

                              <?php endif; ?>
                            <?php else: ?>
                                <a href="/login">Login</a>

                            <?php endif; ?>

                    </div>
                    <div class="content p-5 col-lg-10">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
          </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/layout/mainlayout.blade.php ENDPATH**/ ?>