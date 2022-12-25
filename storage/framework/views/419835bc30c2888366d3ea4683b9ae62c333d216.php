<?php $__env->startSection('title', 'Pizza - Connexion'); ?>

<?php $__env->startSection('back'); ?>
    <form action="/">
        <input type="submit" value="Accueil">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <form method="post">
        <label>Connexion : </label><br>
        Login: <input type="text" name="login" value="<?php echo e(old('login')); ?>">
        MDP: <input type="password" name="mdp">
        <input type="submit" value="Envoyer">
        <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/auth/login.blade.php ENDPATH**/ ?>