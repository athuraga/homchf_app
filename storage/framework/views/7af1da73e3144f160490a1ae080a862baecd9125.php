<?php $__env->startSection('title','User Verification Setting'); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <?php if(Session::has('msg')): ?>
            <?php echo $__env->make('layouts.msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <div class="section-header">
            <h1><?php echo e(__('User Verification settings')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
                <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/setting')); ?>"><?php echo e(__('Setting')); ?></a></div>
                <div class="breadcrumb-item"><?php echo e(__('User / Vendor verification setting')); ?></div>
            </div>
        </div>
        <div class="section-body">
            <div class="alert alert-primary alert-dismissible show fade setting_alert" style="display: none;">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    <?php echo e(__('select at least one sms or phone')); ?>

                </div>
            </div>

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
            <h2 class="section-title"><?php echo e(__('verification related setting')); ?></h2>
            <p class="section-lead"><?php echo e(__('verification related setting')); ?></p>
            <form action="<?php echo e(url('admin/update_verification_seting')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo e(__('verification setting')); ?></h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="<?php echo e(__('verification')); ?>"><?php echo e(__('User and Vendor Verification')); ?></label><br>
                                <label class="switch">
                                    <input type="checkbox" name="verification" <?php echo e($general_setting->verification == 1 ? 'checked' : ''); ?>>
                                    <div class="slider"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="<?php echo e(__('verification_email')); ?>"><?php echo e(__('Verification via email ?')); ?></label><br>
                                <label class="switch">
                                    <input type="checkbox" name="verification_email" <?php echo e($general_setting->verification_email == '1' ? 'checked' : ''); ?>>
                                    <div class="slider"></div>
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label for="<?php echo e(__('verification_phone')); ?>"><?php echo e(__('Verification via phone ?')); ?></label><br>
                                <label class="switch">
                                    <input type="checkbox" name="verification_phone" <?php echo e($general_setting->verification_phone == '1' ? 'checked' : ''); ?>>
                                    <div class="slider"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><?php echo e(__('Twilio Account setting')); ?></h4>
                    </div>

                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="twilio_acc_id"><?php echo e(__('Twilio account Id')); ?></label><br>
                                <input type="text" value="<?php echo e($general_setting->twilio_acc_id); ?>" name="twilio_acc_id" id="twilio_acc_id" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="verification"><?php echo e(__('Twilio auth Token')); ?></label><br>
                                <input type="text" value="<?php echo e($general_setting->twilio_auth_token); ?>" name="twilio_auth_token" id="twilio_auth_token" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="verification"><?php echo e(__('Twilio phone number')); ?></label><br>
                                <input type="text" value="<?php echo e($general_setting->twilio_phone_no); ?>" name="twilio_phone_no" id="twilio_phone_no" class="form-control">
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('save')); ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['activePage' => 'setting'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /customers/f/2/a/homchf.one/httpd.www/resources/views/admin/setting/verification_setting.blade.php ENDPATH**/ ?>