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
         
</div>
</div><?php /**PATH C:\Users\hp\Desktop\min proret\min_projet_de_web\resources\views/components/card.blade.php ENDPATH**/ ?>