<?php $__env->startSection('title', 'Créer User'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('admin.user')); ?>">
        <input type="submit" value="Retour">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
        <p>Formulaire pour la création du compte Admin</p>

        <form action="<?php echo e(route('admin.users.createAdmin')); ?>" method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">login</label>
                <input type="text" class="form-control" name="login" id="formGroupExampleInput" placeholder="Login...">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">prénom</label>
                <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="Prénom...">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">MDP</label>
                <input type="password" class="form-control" name="mdp" id="formGroupExampleInput2" placeholder="MDP..">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Confirmation MDP</label>
                <input type="password" class="form-control" name="mdp_confirmation" id="formGroupExampleInput2" placeholder="confirmation MDP..">
            </div>

            <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter">
            <?php echo csrf_field(); ?>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/admin/users/createAdmin.blade.php ENDPATH**/ ?>