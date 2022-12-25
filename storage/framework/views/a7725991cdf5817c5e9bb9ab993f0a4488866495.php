<?php $__env->startSection('title', 'Pizza - Admin - Accueil'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(URL::previous()); ?>">
        <input type="submit" value="Accueil">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <p>Page d'accueil administrateur.</p>
    <p>Page de gestion</p>
    <div>
        <a class="btn btn-primary" href="<?php echo e(route('admin.pizza')); ?>">Gestion des pizzas</a>
        <a class="btn btn-primary" href="#">Gestion des commandes</a>
        <a class="btn btn-primary" href="<?php echo e(route('admin.user')); ?>">Gestion des utilisateurs</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/admin/home.blade.php ENDPATH**/ ?>