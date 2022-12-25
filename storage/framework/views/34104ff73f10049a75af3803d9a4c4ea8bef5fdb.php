<?php $__env->startSection('title', 'Votre panier'); ?>

<?php $__env->startSection('back'); ?>
    <form action="<?php echo e(route('user.commande')); ?>">
        <input type="submit" value="Retour">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>

    <?php if (! (empty($panier))): ?>
        <p>Le panier : </p>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Mettre à jour</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <?php $total = 0 ?>
            <?php $__currentLoopData = collect($panier)->keys()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $panier_pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $total += $pizzas[$panier_pizza-1]->prix * $panier[$panier_pizza]?>
                <tr>
                    <td><?php echo e($pizzas[$panier_pizza-1]->nom); ?></td>
                    <td><?php echo e($pizzas[$panier_pizza-1]->prix); ?>€</td>
                    <td>

                        <form action="<?php echo e(route('user.panier.update',['id'=>$panier_pizza])); ?>" method="POST">
                            <?php echo method_field('put'); ?>
                            <input type="number" name="qte" value="<?php echo e($panier[$panier_pizza]); ?>" placeholder="Quantité" min="1" max="10" required>
                    </td>
                    <td>
                        <p><?php echo e($pizzas[$panier_pizza-1]->prix * $panier[$panier_pizza]); ?>€ </p>
                    </td>
                    <td>
                        <input type="submit" value="Mettre à jour">
                        <?php echo csrf_field(); ?>
                        </form>
                    </td>
                    <td><a class="btn btn-primary" href="<?php echo e(route('user.panier.delete', ['id'=>$panier_pizza])); ?>">Supprimer</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <p>Prix total: <?php echo e($total); ?>€</p><br>
        <a class="btn btn-primary" href="<?php echo e(route('user.panier.payer')); ?>">Commander <?php echo e($total); ?>€</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\pizza\resources\views/user/commande_pizza/panier.blade.php ENDPATH**/ ?>