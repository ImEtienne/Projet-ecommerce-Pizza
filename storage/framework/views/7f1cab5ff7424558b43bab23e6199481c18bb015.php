<?php $__env->startSection('title', 'Liste des Pizzas'); ?>
<?php $__env->startSection('contenuPizza'); ?>
    <?php if (! (empty())): ?>
        <p>Liste des Pizzas</p>
        <table>
            <?php $__currentLoopData = $listePizza; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizzas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pizzas -> id); ?></td>
                    <td><?php echo e($pizzas -> nom); ?></td>
                    <td><?php echo e($pizzas -> description); ?></td>
                    <td><?php echo e($pizzas -> prix); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/listePizza.blade.php ENDPATH**/ ?>