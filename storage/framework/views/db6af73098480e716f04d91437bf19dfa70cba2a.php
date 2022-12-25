<?php $__env->startSection('title', 'supprimer un utilisateur'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('admin.user')); ?>">
        <input type="submit" value="Retour">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <p>Suppression d'un utilisateur : </p>

    <form action="<?php echo e(route('admin.user.delete',['id'=>$users->id])); ?>" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="formGroupExampleInput" placeholder="nom..." value="<?php echo e(old('login',$users->login)); ?>">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom..." value="<?php echo e(old('nom',$users->nom)); ?>">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">prenom</label>
            <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="description..." value="<?php echo e(old('prenom',$users->prenom)); ?>">
        </div>

        <input class="btn btn-primary" type="submit" name="Supprimer" value="Confirmer">
    <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/admin/users/deleteUser.blade.php ENDPATH**/ ?>