<?php $__env->startSection('title', 'Pizza - Utilisateur'); ?>

<?php $__env->startSection('contents'); ?>
    <p>Bienvenue à la page d'utilisateur</p>
        <a class="btn btn-primary" href="<?php echo e(route('user.commande')); ?>">commandes</a>
        <a class="btn btn-primary" href="<?php echo e(route('register')); ?>">Créer compte</a>
        <a class="btn btn-primary" href="<?php echo e(route('user.compte.modif')); ?>">Changer mot de passe</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/user/home.blade.php ENDPATH**/ ?>