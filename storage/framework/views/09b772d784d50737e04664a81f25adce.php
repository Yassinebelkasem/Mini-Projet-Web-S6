<div class="col-sm-3">

<div class="card">
    <?php echo e($voiture->image); ?>

    <img class="card-img-top" src="https://picsum.photos/200/300/?blur=2" alt="Title">
        <div>
            <h4 class="card-title"><?php echo e($voiture->marque); ?></h4>
            <p class="card-text"><strong>Modele :</strong><?php echo e($voiture->modele); ?></p>
            <p class="card-text"><strong>Version :</strong><?php echo e($voiture->version); ?></p>
            <p class="card-text"><strong>Année :</strong><?php echo e($voiture->annee); ?></p>
            <a href="<?php echo e(route('show',$voiture->id)); ?>" class="stretched-link"></a>

        </div>
        <div class="card-footer" style="z-index: 9">
        <form action="<?php echo e(route('supprimer',$voiture->id)); ?>" method="post">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
       <button type="submit" class="btn btn-danger float-end">Supprimer</button>
        </form>
        <a href="<?php echo e(route( 'edit', $voiture->id)); ?>" class="btn btn-primary">Modifier</a>
       
        </div>
</div>
</div><?php /**PATH C:\Users\hp\Desktop\min proret\min_projet_de_web\resources\views/components/carda.blade.php ENDPATH**/ ?>