<?php $__env->startSection('title', 'Changement du mot de passe'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('admin.user')); ?>">
        <input type="submit" value="Retour">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
        <p>Modification du mot de passe : </p>
    <form action="<?php echo e(route('admin.users.edit', ['id'=>$users->id])); ?>" method="POST">
        Ancien mot de passe : <input type="password" name="mdp_old" placeholder="Mot de passe" required>
        Nouveau mot de passe: <input type="password" name="mdp" placeholder="Mot de passe" required>
        Confirmer: <input type="password" name="mdp_confirmation" placeholder="Confirmer mot de passe" required>
        <input type="submit" value="Confirmer">
        <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>