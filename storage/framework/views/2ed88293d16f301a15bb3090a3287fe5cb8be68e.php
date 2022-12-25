<?php $__env->startSection('title', 'Page d\'accueil'); ?>

<?php $__env->startSection('redirect'); ?>
    <?php if(auth()->guard()->check()): ?>
        <?php switch($type):
            case ('admin'): ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/admin" />
            <?php break; ?>
            <?php case ('cook'): ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/cook" />
            <?php break; ?>
            <?php case ('user'): ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/user" />
            <?php break; ?>
            <?php default: ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/home" />
            <?php break; ?>
        <?php endswitch; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <h1 style="font-size: 20px; font-weight:bold;">E-Commerce PIZZA</h1>
    <?php if(auth()->guard()->guest()): ?>
        <p>Bienvenue à la pizzaria ! </p>
        <a class="btn btn-outline-primary" href="<?php echo e(route('login')); ?>">Connexion</a>
        <a class="btn btn-outline-primary" href="<?php echo e(route('register')); ?>">S'inscrire</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/home.blade.php ENDPATH**/ ?>