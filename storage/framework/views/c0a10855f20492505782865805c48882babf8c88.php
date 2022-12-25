<?php $__env->startSection('title', 'Page D\'Accueil pizzaiolo'); ?>

<?php $__env->startSection('back'); ?>
        <form action="<?php echo e(URL::previous()); ?>">
            <input type="submit" value="Accueil">
        </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <a class="btn btn-outline-primary" href="<?php echo e(route('cook.edit.passwd')); ?>"> Modifier le mot de passe</a>
    <p>Préparation en cours</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/cook/home.blade.php ENDPATH**/ ?>