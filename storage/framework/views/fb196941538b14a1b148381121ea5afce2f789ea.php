<?php $__env->startSection('title', 'Ajouter une pizza'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('admin.pizza')); ?>">
        <input type="submit" value="Accueil">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <form action="<?php echo e(route('admin.pizza.add')); ?>" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="formGroupExampleInput2" placeholder="Description...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" id="formGroupExampleInput2" placeholder="Prix..">
        </div>

        <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter">
        <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/admin/pizza/add.blade.php ENDPATH**/ ?>