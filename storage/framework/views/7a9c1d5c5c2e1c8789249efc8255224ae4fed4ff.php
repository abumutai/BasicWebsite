<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Home </h1>
    <?php if(session('successMsg')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('successMsg')); ?>

    </div>
    <?php endif; ?>
    <table class="table">
        <thead class="black white-text">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($student->id); ?></th>
                <td><?php echo e($student->first_name); ?></td>
                <td><?php echo e($student->last_name); ?></td>
                <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->phone); ?></td>
                <td><a class="btn btn-raised btn-primary btn-sm" href="<?php echo e(route('edit',$student->id)); ?> "> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>  
                  || 
                  <form method="POST" id="delete-form<?php echo e($student->id); ?>" action="<?php echo e(route('delete',$student->id)); ?>" style="display:none;">
                  <?php echo e(csrf_field()); ?>

                  <?php echo method_field('DELETE'); ?>
                </form>
                <button onclick="if(confirm('Do you want to delete student?')){
                  event.preventDefault();
                  document.getElementById('delete-form<?php echo e($student->id); ?>').submit();
                }
                else{
                  event.preventDefault();
                }
                
                " 
                 class="btn btn-raised btn-danger btn-sm"  href=""><i class="fas fa-trash-alt"></i>
                </button>
                </td>
           </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($students->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lcrud\lblog\resources\views/welcome.blade.php ENDPATH**/ ?>