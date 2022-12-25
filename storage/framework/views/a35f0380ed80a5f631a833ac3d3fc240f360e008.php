<?php $__env->startSection('title', 'Page confirmation - Suppression'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('admin.home')); ?>">
        <input type="submit" value="Accueil">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <p>Voulez-vous supprimer <?php echo e($pizzas->nom); ?> ?</p>

    <form action='<?php echo e(route('admin.pizza.delete',['id'=>$pizzas->id])); ?>' method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom..." value="<?php echo e(old('nom',$pizzas->nom)); ?>">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="formGroupExampleInput2" placeholder="description..." value="<?php echo e(old('description',$pizzas->description)); ?>">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" id="formGroupExampleInput2" placeholder="prix.." value="<?php echo e(old('prix',$pizzas->prix)); ?>">
        </div>

        <input class="btn btn-primary" type="submit" name="Supprimer" value="Confirmer">
        <?php echo csrf_field(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/admin/pizza/delete.blade.php ENDPATH**/ ?>