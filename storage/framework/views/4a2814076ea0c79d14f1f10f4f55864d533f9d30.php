<?php $__env->startSection('title', 'Liste des Pizzas'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('admin.home')); ?>">
        <input type="submit" value="Retour">
    </form>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contents'); ?>
    <p>Liste des Pizzas</p>
    <?php if (! (empty($pizzas))): ?>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>prix</th>
                    <th>Modifier à</th>
                    <th>Supprimer à</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pizza->id); ?></td>
                    <td><?php echo e($pizza->nom); ?></td>
                    <td><?php echo e($pizza->description); ?></td>
                    <td><?php echo e($pizza->prix); ?> € </td>
                    
                    <td><?php echo e($pizza->updated_at); ?></td>
                    <td><?php echo e($pizza->deleted_at); ?></td>
                    <td><a type="button" class="btn btn-primary" href="<?php echo e(route('admin.pizza.edit',['id'=>$pizza->id])); ?>"> Modifier</a></td>
                    <td><a type="button" class="btn btn-danger" href="<?php echo e(route('admin.pizza.delete',['id'=>$pizza->id])); ?>"> Supprimer</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>
    <a type="buttom" class="btn btn-secondary" href="<?php echo e(route('admin.pizza.add')); ?>"> Ajouter</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/admin/pizza/index.blade.php ENDPATH**/ ?>