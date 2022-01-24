<?php $__env->startSection('title','Vendor Delivery Timeslots'); ?>

<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="section-header">
        <h1><?php echo e($vendor->name); ?>&nbsp;<?php echo e(__('Delivery Time Slots')); ?></h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo e(url('vendor/home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
            <div class="breadcrumb-item"><?php echo e(__('Vendor delivery timeslot')); ?></div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title"><?php echo e(__("Delivery Time Slot Management")); ?></h2>
        <p class="section-lead"><?php echo e(__('Add and Edit Time Slots for the Delivery')); ?></p>
        <div class="card p-5">
            <div class="row">
                <input type="hidden" id="start_time" value="<?php echo e($start_time); ?>">
                <input type="hidden" id="end_time" value="<?php echo e($end_time); ?>">
                <input type="hidden" id="timeslot" value="<?php echo e($vendor->time_slot); ?>">

                <div class="table-responsive">
                    <form action="<?php echo e(url('admin/update_delivery_time')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <input type="hidden" name="vendor_id" value="<?php echo e($vendor->id); ?>">
                        <table class="table deliveryTimeTable">
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="vertical-align: text-top"><?php echo e($item['day_index']); ?></td>
                                        <td style="vertical-align: text-top">
                                            <?php if($item['status'] == 1): ?>
                                                <?php echo e(__('Open')); ?>

                                            <?php endif; ?>
                                            <?php if($item['status'] == 0): ?>
                                                <?php echo e(__('Close')); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td style="vertical-align: text-top">
                                            <div>
                                                <label class="switch">
                                                    <input type="checkbox" name="<?php echo e('status'.$item['id']); ?>" <?php echo e($item['status'] == 1 ? 'checked' : ''); ?>>
                                                    <div class="slider"></div>
                                                </label>
                                            </div>
                                        </td>
                                        <?php
                                            $time = json_decode($item['period_list']);
                                        ?>
                                        <td>
                                            <table>
                                                <?php $__currentLoopData = $time; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $period_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr id="<?php echo e('tr'.$item['day_index']); ?>">
                                                        <td>
                                                            <input readonly class="timeslots" value="<?php echo e($period_list->start_time); ?>" name="<?php echo e('start_time_'.$item['day_index'].'[]'); ?>" />
                                                        </td>
                                                        <td>
                                                            <input readonly class="timeslots" value="<?php echo e($period_list->end_time); ?>"  name="<?php echo e('end_time_'.$item['day_index'].'[]'); ?>" />
                                                        </td>
                                                        <td>
                                                            <?php if($loop->iteration == 1): ?>
                                                                <button type="button" class="btn btn-primary" onclick="addhours('<?php echo e($item['day_index']); ?>')"><?php echo e(__('+ Add hours')); ?></button>
                                                            <?php else: ?>
                                                                <button type="button" class="removebtn btn btn-danger text-light"><i class="fas fa-times"></i></button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </table>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <input type="submit" value="<?php echo e(__('save')); ?>" class="btn btn-primary">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['activePage' => 'delivery_timeslot'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /customers/f/2/a/homchf.one/httpd.www/resources/views/vendor/vendor/edit_delivery_time.blade.php ENDPATH**/ ?>