<?php $__env->startSection('title', 'Modification du mot de passe'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('cook.home')); ?>">
        <input type="submit" value="Accueil">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <p>Modifier le mot de passe: </p>
    <form method="POST" >
        <?php echo method_field('put'); ?>
        Ancien mot de passe: <input type="password" name="mdp_old" placeholder="Mot de passe" required><br>
        Nouveau mot de passe: <input type="password" name="mdp" placeholder="Mot de passe" required><br>
        taper à nouveau : <input type="password" name="mdp_confirmation" placeholder="Confirmer le mot de passe" required><br>
        <input type="submit" value="Confirmer">
        <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/cook/edit.blade.php ENDPATH**/ ?>