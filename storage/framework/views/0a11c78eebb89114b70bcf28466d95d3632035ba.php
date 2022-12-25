<?php $__env->startSection('title', 'Home-page : Le panier'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('user.home')); ?>">
        <input type="submit" value="Accueil">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <p>Liste des pizzas </p>
    <a style="margin:10px;" class="btn btn-outline-primary" href="<?php echo e(route('user.panier')); ?>">Voir panier</a>
    <?php if (! (empty($pizzas))): ?>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Ajouter au panier</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pizza->nom); ?></td>
                    <td><?php echo e($pizza->description); ?></td>
                    <td><?php echo e($pizza->prix); ?>€</td>
                    <td><a class="btn btn-primary" href="<?php echo e(route('user.add', ['id'=> $pizza->id])); ?>">Ajouter</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php echo e($pizzas -> links()); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/user/commande_pizza/home.blade.php ENDPATH**/ ?>