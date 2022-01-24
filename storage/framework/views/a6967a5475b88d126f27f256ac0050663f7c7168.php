<?php $__env->startSection('title','Payment Setting'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Session::has('msg')): ?>
    <?php echo $__env->make('layouts.msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('Payment setting')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
                <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/setting')); ?>"><?php echo e(__('Setting')); ?></a></div>
                <div class="breadcrumb-item"><?php echo e(__('Payment setting')); ?></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <?php echo e(__('Payment setting')); ?>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <label for="<?php echo e(__('COD')); ?>"><?php echo e(__('COD')); ?></label><br>
                        <label class="switch">
                            <input type="checkbox" name="COD" <?php echo e($PaymentSetting->cod == 1 ? 'checked' : ''); ?>>
                            <div class="slider"></div>
                        </label>
                    </div>
                    <div class="col">
                        <label for="<?php echo e(__('stripe')); ?>"><?php echo e(__('stripe')); ?></label><br>
                        <label class="switch">
                            <input type="checkbox" name="stripe" <?php echo e($PaymentSetting->stripe == 1 ? 'checked' : ''); ?>>
                            <div class="slider"></div>
                        </label>
                    </div>
                    <div class="col">
                        <label for="<?php echo e(__('paypal')); ?>"><?php echo e(__('paypal')); ?></label><br>
                        <label class="switch">
                            <input type="checkbox" name="paypal" <?php echo e($PaymentSetting->paypal == 1 ? 'checked' : ''); ?>>
                            <div class="slider"></div>
                        </label>
                    </div>
                    <div class="col">
                        <label for="<?php echo e(__('razor pay')); ?>"><?php echo e(__('razor pay')); ?></label><br>
                        <label class="switch">
                            <input type="checkbox" name="razorpay" <?php echo e($PaymentSetting->razorpay == 1 ? 'checked' : ''); ?>>
                            <div class="slider"></div>
                        </label>
                    </div>
                    <div class="col">
                        <label for="<?php echo e(__('Flutterwave')); ?>"><?php echo e(__('Flutterwave')); ?></label><br>
                        <label class="switch">
                            <input type="checkbox" name="flutterwave" <?php echo e($PaymentSetting->flutterwave == 1 ? 'checked' : ''); ?>>
                            <div class="slider"></div>
                        </label>
                    </div>
                    <div class="col">
                        <label for="<?php echo e(__('Wallet')); ?>"><?php echo e(__('Wallet')); ?></label><br>
                        <label class="switch">
                            <input type="checkbox" name="wallet" <?php echo e($PaymentSetting->wallet == 1 ? 'checked' : ''); ?>>
                            <div class="slider"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5 stripe_card <?php echo e($PaymentSetting->stripe == 0 ? 'hide' : ''); ?>">
            <div class="card-header">
                <?php echo e(__('Stripe')); ?>

            </div>
            <form action="<?php echo e(url('admin/update_stripe_setting')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="stripe_key"><?php echo e(__('Stripe publish key')); ?></label>
                            <input type="text" name="stripe_publish_key" value="<?php echo e($PaymentSetting->stripe_publish_key); ?>" required class="form-control" style="text-transform: none" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="stripe secret key"><?php echo e(__('Stripe secret key')); ?></label>
                            <input type="text" name="stripe_secret_key" value="<?php echo e($PaymentSetting->stripe_secret_key); ?>" required class="form-control" style="text-transform: none">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input type="submit" value="<?php echo e(__('Update')); ?>"  class="btn btn-primary float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="card mt-5 paypal_card <?php echo e($PaymentSetting->paypal == 0 ? 'hide' : ''); ?>">
            <div class="card-header">
                <?php echo e(__('paypal')); ?>

            </div>
            <form action="<?php echo e(url('admin/update_paypal')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="onesignal_app_id"><?php echo e(__('paypal production key ( For Admin )')); ?></label>
                            <input type="text" name="paypal_production" value="<?php echo e($PaymentSetting->paypal_production); ?>" required class="form-control" style="text-transform: none">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="onesignal_app_id"><?php echo e(__('paypal sendbox key ( for admin )')); ?></label>
                            <input type="text" name="paypal_sendbox" value="<?php echo e($PaymentSetting->paypal_sendbox); ?>" required class="form-control" style="text-transform: none">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="onesignal_app_id"><?php echo e(__('paypal Secret key ( For user )')); ?></label>
                            <input type="text" name="paypal_secret_key" value="<?php echo e($PaymentSetting->paypal_secret_key); ?>" required class="form-control" style="text-transform: none">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="onesignal_app_id"><?php echo e(__('paypal Client Id ( For user )')); ?></label>
                            <input type="text" name="paypal_client_id" value="<?php echo e($PaymentSetting->paypal_client_id); ?>" required class="form-control" style="text-transform: none">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input type="submit" value="<?php echo e(__('Update')); ?>"  class="btn btn-primary float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="card mt-5 razorpay_card <?php echo e($PaymentSetting->razorpay == 0 ? 'hide' : ''); ?>">
            <div class="card-header">
                <?php echo e(__('Razorpay')); ?>

            </div>
            <form action="<?php echo e(url('admin/update_razorpay')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="razorpay"><?php echo e(__('Razorpay publish key')); ?></label>
                            <input type="text" name="razorpay_publish_key" value="<?php echo e($PaymentSetting->razorpay_publish_key); ?>" required class="form-control" style="text-transform: none">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input type="submit" value="<?php echo e(__('Update')); ?>"  class="btn btn-primary float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="card mt-5 flutterwave_card <?php echo e($PaymentSetting->flutterwave == 0 ? 'hide' : ''); ?>">
            <div class="card-header">
                <?php echo e(__('Flutterwave')); ?>

            </div>
            <form action="<?php echo e(url('admin/update_flutterwave')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="Flutterwave"><?php echo e(__('Flutterwave public key')); ?></label>
                            <input type="text" name="public_key" value="<?php echo e($PaymentSetting->public_key); ?>" required class="form-control" style="text-transform: none">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input type="submit" value="<?php echo e(__('Update')); ?>"  class="btn btn-primary float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['activePage' => 'setting'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /customers/f/2/a/homchf.one/httpd.www/resources/views/admin/setting/payment_setting.blade.php ENDPATH**/ ?>