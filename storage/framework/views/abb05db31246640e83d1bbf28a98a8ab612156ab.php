<?php $__env->startSection('title', 'Gestion des utilisateur'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('admin.home')); ?>">
        <input type="submit" class="btn btn-info" value="Retour">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <p>Page Administrateur</p>
    <p>Gestion des Utilisateurs</p>
    <p>Liste des utilisateurs</p>
        <p>
            <a class="btn btn-outline-primary" href="<?php echo e(route('admin.users.createAdmin')); ?>"> Ajouter Admin</a>
            <a class="btn btn-outline-primary" href="<?php echo e(route('admin.users.createPizzaiolo')); ?>"> Ajouter Pizzaiolo</a>
        </p><br>
    <?php if (! (empty($users))): ?>
        <table class="table">
            <thead class="table-dark">
                 <tr>
                    <th>id</th>
                    <th>Login</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Type</th>
                    <th>Modifier mot de passe</th>
                    <th>Supprimer(Admin or User)</th>
                </tr>
            </thead>
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($user ->id); ?></td>
                    <td><?php echo e($user ->Login); ?></td>
                    <td><?php echo e($user ->nom); ?></td>
                    <td><?php echo e($user ->prenom); ?></td>
                    <td><?php echo e($user ->Type); ?></td>
                    <td><a type="button" class="btn btn-primary" href="<?php echo e(route('admin.users.edit',['id'=>$user->id])); ?>">Modifier</a></td>
                    <td><a type="button" class="btn btn-danger" href="<?php echo e(route('admin.user.delete',['id'=>$user->id])); ?>">Supprimer</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p> Aucnun utilisateur trouvé ! </p>
            <?php endif; ?>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/admin/users/index.blade.php ENDPATH**/ ?>