<?php $__env->startSection('title','edit vendor discount'); ?>

<?php $__env->startSection('content'); ?>

<section class="section">

    <div class="section-header">
        <h1><?php echo e(__('Edit new discount')); ?></h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo e(url('vendor/vendor_home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
            <div class="breadcrumb-item active"><a href="<?php echo e(url('vendor/vendor_discount/')); ?>"><?php echo e(__('Vendor discount')); ?></a></div>
            <div class="breadcrumb-item"><?php echo e(__('Edit Vendor Discount')); ?></div>
        </div>
    </div>

    <div class="section-body">
        <?php if($errors->any()): ?>
        <div class="alert alert-primary alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($item); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>
        <form class="container-fuild" action="<?php echo e(url('vendor/vendor_discount/'.$vendorDiscount->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <label for="Promo code name"><?php echo e(__('Discount  image')); ?></label>
                            <div class="logoContainer">
                                <img id="image" src="<?php echo e(url('images/upload/'.$vendorDiscount->image)); ?>"  width="180" height="150">
                            </div>
                            <div class="fileContainer sprite">
                                <span><?php echo e(__('Image')); ?></span>
                                <input type="file" data-id="edit" accept=".jpg , .jpeg , .png"  name="image" value="Choose File" id="previewImage">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="Discount type"><?php echo e(__('Discount type')); ?></label>
                            <select name="type" class="form-control">
                                <option value="<?php echo e('percentage'); ?>" <?php echo e($vendorDiscount->type == 'percentage' ? 'selected' : ''); ?>><?php echo e(__('percentage')); ?></option>
                                <option value="<?php echo e('amount'); ?>" <?php echo e($vendorDiscount->type == 'amount' ? 'selected' : ''); ?>><?php echo e(__('amount')); ?></option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('Discount')); ?>"><?php echo e(__('Discount')); ?></label>
                            <input type="number" name="discount"
                                class="form-control <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="<?php echo e(__('discount')); ?>" value="<?php echo e($vendorDiscount->discount); ?>" required=""
                                style="text-transform: none;">

                            <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('Discount start/end Period')); ?>"><?php echo e(__('Discount start/end Period')); ?></label><br>
                            <input type="text" name="start_end_date" value="<?php echo e($vendorDiscount->start_end_date); ?>" class="form-control"/>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="max_discount_amount"><?php echo e(__('Maximum Discount amount')); ?></label>
                            <input type="number" name="max_discount_amount" value="<?php echo e($vendorDiscount->max_discount_amount); ?>"
                                class="form-control <?php $__errorArgs = ['max_discount_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="<?php echo e(__('Maximum Discount amount')); ?>">

                            <?php $__errorArgs = ['max_discount_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="Description"><?php echo e(__('Description')); ?></label>
                            <textarea name="description" placeholder="<?php echo e(__('Description')); ?>" class="form-control"><?php echo e($vendorDiscount->description); ?></textarea>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="min_item_amount"><?php echo e(__('Minimum Item amount')); ?></label>
                            <input type="number" name="min_item_amount" value="<?php echo e($vendorDiscount->min_item_amount); ?>"
                                class="form-control <?php $__errorArgs = ['min_item_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="<?php echo e(__('Minimum Item amount')); ?>">

                            <?php $__errorArgs = ['min_item_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="<?php echo e(__('update Discount')); ?>" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['activePage' => 'vendor'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /customers/f/2/a/homchf.one/httpd.www/resources/views/vendor/vendor discount/edit_vendor_discount.blade.php ENDPATH**/ ?>