<!Doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS perso -->
        <link href="style.css" rel="stylesheet" media="screen" type="text/css"/>
        <?php echo $__env->yieldContent('redirect'); ?>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>
        <?php echo $__env->yieldContent('back'); ?>

        <?php if(auth()->guard()->check()): ?>
            <br>
            <p><a class="btn btn-outline-primary" href="<?php echo e(route('logout')); ?>">Déconnexion</a></p>
            <p>Vous êtes connecté en tant que <?php echo e(Auth::user()->login); ?> </p>
        <?php endif; ?>

        <!-- Messages Flash -->
        <?php $__env->startSection('Messages_flash'); ?>
            <?php if(session()->has('etat')): ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        <p class="etat"> <?php echo e(session()->get('etat')); ?></p>
                    </div>
                </div>
            <?php endif; ?>
        <?php echo $__env->yieldSection(); ?>
        <!--error validation-->
        <?php $__env->startSection('validation'); ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        <?php echo $__env->yieldSection(); ?>

        <!--contents page-->
        <?php echo $__env->yieldContent('contents'); ?>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\wamp64\www\pizza\resources\views/main.blade.php ENDPATH**/ ?>