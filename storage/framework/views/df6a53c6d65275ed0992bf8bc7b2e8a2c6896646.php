<?php $__env->startSection('title','Order Setting'); ?>

<?php $__env->startSection('content'); ?>

<?php if(Session::has('msg')): ?>
<?php echo $__env->make('layouts.msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<section class="section">
    <div class="section-header">
        <h1><?php echo e(__('Order pages')); ?></h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
            <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/setting')); ?>"><?php echo e(__('Setting')); ?></a></div>
            <div class="breadcrumb-item"><?php echo e(__('Order pages')); ?></div>
        </div>
    </div>
    <div class="section-body">
        <form action="<?php echo e(url('admin/update_order_setting')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="card card-primary mt-3">
                <div class="card-header">
                    <h5><?php echo e(__('auto cancel order')); ?></h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for=""><?php echo e(__('order cancel thresold by vendor(In minutes)')); ?></label>
                            <input type="number" min=1 value="<?php echo e($orderData->vendor_order_max_time); ?>" required name="vendor_order_max_time" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for=""><?php echo e(__('order cancel thresold by driver(In minutes)')); ?></label>
                            <input type="number" min=1 required value="<?php echo e($orderData->driver_order_max_time); ?>" name="driver_order_max_time" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-primary mt-3">
                <div class="card-header">
                    <?php echo e(__('delivery charges')); ?>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for=""><?php echo e(__('charges based on ?')); ?></label>
                            <select class="form-control" name="delivery_charge_type">
                                <option value="order_amount"
                                    <?php echo e($orderData->delivery_charge_type == 'order_amount' ? 'selected' : ''); ?>>
                                    <?php echo e(__('order amount')); ?></option>
                                <option value="delivery_distance"
                                    <?php echo e($orderData->delivery_charge_type == 'delivery_distance' ? 'selected' : ''); ?>>
                                    <?php echo e(__('Delivery distance (KM)')); ?></option>
                            </select>
                        </div>
                    </div>
                    <?php
                        $charges = json_decode($orderData->charges)
                    ?>
                    <div>
                        <table class="table delivery_table">
                            <tr class="delivery_charge_table <?php echo e($orderData->delivery_charge_type == 'order_amount' ? 'hide' : ''); ?>">
                                <td><?php echo e(__('Distance From')); ?></td>
                                <td><?php echo e(__('Distance To')); ?></td>
                                <td><?php echo e(__('Charges')); ?>(<?php echo e($currency_symbol); ?>)</td>
                                <td></td>
                            </tr>
                            <tr
                                class="order_charge_table <?php echo e($orderData->delivery_charge_type == 'delivery_distance' ? 'hide' : ''); ?>">
                                <td><?php echo e(__('Order From')); ?></td>
                                <td><?php echo e(__('Order To')); ?></td>
                                <td><?php echo e(__('Charges')); ?>(<?php echo e($currency_symbol); ?>)</td>
                                <td></td>
                            </tr>
                            <?php $__currentLoopData = $charges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $charge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="number" min=1 required value="<?php echo e($charge->min_value); ?>" name="min_value[]"
                                        class="form-control"></td>
                                <td><input type="number" min=1 required value="<?php echo e($charge->max_value); ?>" name="max_value[]"
                                        class="form-control"></td>
                                <td><input type="number" min=1 required value="<?php echo e($charge->charges); ?>" name="charges[]"
                                        class="form-control"></td>
                                <td><button type="button" class="btn btn-danger removebtn"><i
                                            class="fas fa-times"></i></button></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <div class="text-center mt-3">
                            <button type="button" class="btn btn-primary"
                                onclick="add_field()"><?php echo e(__('Add Field')); ?></button>
                        </div>
                    </div>
                    <?php
                        $order_charges = json_decode($orderData->order_charges)
                    ?>
                </div>
                <div class="card-footer">
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary"><?php echo e(__('save')); ?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['activePage' => 'setting'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /customers/f/2/a/homchf.one/httpd.www/resources/views/admin/setting/order_setting.blade.php ENDPATH**/ ?>