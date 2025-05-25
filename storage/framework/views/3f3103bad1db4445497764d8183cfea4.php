 
  <?php $__env->startSection('name'); ?>
   
     <div class="row">
      
 <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if (isset($component)) { $__componentOriginal5f9786a70bdaab1bc879cbc765eda8d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f9786a70bdaab1bc879cbc765eda8d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.carda','data' => ['voiture' => $voiture]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('carda'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['voiture' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($voiture)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f9786a70bdaab1bc879cbc765eda8d0)): ?>
<?php $attributes = $__attributesOriginal5f9786a70bdaab1bc879cbc765eda8d0; ?>
<?php unset($__attributesOriginal5f9786a70bdaab1bc879cbc765eda8d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f9786a70bdaab1bc879cbc765eda8d0)): ?>
<?php $component = $__componentOriginal5f9786a70bdaab1bc879cbc765eda8d0; ?>
<?php unset($__componentOriginal5f9786a70bdaab1bc879cbc765eda8d0); ?>
<?php endif; ?>
 
 
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo e($voitures->links()); ?> 
</div>
   
   
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('components.mastera', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hp\Desktop\min proret\min_projet_de_web\resources\views/homea.blade.php ENDPATH**/ ?>