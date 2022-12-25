<?php $__env->startSection('title', 'S\'inscrire sur la page'); ?>

<?php $__env->startSection('back'); ?>
    <form action="/">
        <input type="submit" value="Accueil">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <p>S'inscrire</p>
    <form method="post">
        Login: <input type="text" name="login" value="<?php echo e(old('login')); ?>" placeholder="Login" required>
        Nom : <input type="text" name="nom" value="<?php echo e(old("nom")); ?>" placeholder="Nom" required>
        Prénom : <input type="text" name="prenom" value="<?php echo e(old("prenom")); ?>" placeholder="Prénom" required>
        MDP: <input type="password" name="mdp">
        Confirmation MDP: : <input type="password" name="mdp_confirmation">
        <input type="submit" value="S'inscrire">
        <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/auth/register.blade.php ENDPATH**/ ?>