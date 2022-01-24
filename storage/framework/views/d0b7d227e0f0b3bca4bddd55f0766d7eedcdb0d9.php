<?php $__env->startSection('title','Version Setting'); ?>

<?php $__env->startSection('content'); ?>

    <?php if(Session::has('msg')): ?>
        <?php echo $__env->make('layouts.msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('Version Setting')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
                <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/setting')); ?>"><?php echo e(__('Setting')); ?></a></div>
                <div class="breadcrumb-item"><?php echo e(__('Version Setting')); ?></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <span class="text-danger font-weight-bold"><?php echo e(__("* * Please don't change value of version code this settings will use for developer only")); ?></span>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('admin/update_version_setting')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-md-6 mb40 pr3">
                            <div class="form-group">
                                <label><?php echo e(__('IOS User Version')); ?></label>
                                <input class="form-control" type="text" name="ios_customer_version" value="<?php echo e($general_setting->ios_customer_version); ?>" style="text-transform: none">
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-8 col-md-6 mb40 pr3">
                            <div class="form-group ">
                                <label class="control-label"><?php echo e(__('IOS Driver Version')); ?></label>
                                <input class="form-control" type="text" name="ios_driver_version" value="<?php echo e($general_setting->ios_driver_version); ?>" style="text-transform: none">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 col-sm-8 col-md-6 mb40 pr3">
                            <div class="form-group ">
                                <label class="control-label"><?php echo e(__('IOS User App URL')); ?></label>
                                <input class="form-control" type="text" name="ios_customer_app_url" value="<?php echo e($general_setting->ios_customer_app_url); ?>" style="text-transform: none">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-6 mb40 pr3">
                            <div class="form-group ">
                                <label class="control-label"><?php echo e(__('IOS Driver App URL')); ?></label>
                                <input class="form-control" type="text" name="ios_driver_app_url" id="ios_driver_app_url" value="<?php echo e($general_setting->ios_driver_app_url); ?>" style="text-transform: none">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 col-sm-8 col-md-6 mb40 pr3">
                            <div class="form-group ">
                                <label class="control-label"><?php echo e(__('Android User Version')); ?></label>
                                <input class="form-control" type="text" name="android_customer_version" value="<?php echo e($general_setting->android_customer_version); ?>" style="text-transform: none">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-6 mb40 pr3">
                            <div class="form-group ">
                                <label class="control-label"><?php echo e(__('Android Driver Version')); ?></label>
                                <input class="form-control" type="text" name="android_driver_version" id="android_driver_version" value="<?php echo e($general_setting->android_driver_version); ?>" style="text-transform: none">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 col-sm-8 col-md-6 mb40 pr3">
                            <div class="form-group ">
                                <label class="control-label"><?php echo e(__('Android User App URL')); ?></label>
                                <input class="form-control" type="text" name="android_customer_app_url" value="<?php echo e($general_setting->android_customer_app_url); ?>" style="text-transform: none">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-6 mb40 pr3">
                            <div class="form-group ">
                                <label class="control-label"><?php echo e(__('Android Driver App URL')); ?></label>
                                <input class="form-control" type="text" name="android_driver_app_url" value="<?php echo e($general_setting->android_driver_app_url); ?>" style="text-transform: none">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12">
                            <div class="mtb15 text-center">
                                <button type="submit" class="btn btn-primary" type="button"><?php echo e(__('Update')); ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['activePage' => 'setting'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /customers/f/2/a/homchf.one/httpd.www/resources/views/admin/setting/version_setting.blade.php ENDPATH**/ ?>