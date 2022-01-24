<?php $__env->startSection('title','Vendor Profile'); ?>

<?php $__env->startSection('content'); ?>

<section class="section">
        <div class="section-header">
            <h1><?php echo e(__('Vendor profile')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(url('vendor/vendor_home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
                <div class="breadcrumb-item"><?php echo e(__('vendor profile')); ?></div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title"><?php echo e(__("Vendor profile")); ?></h2>
            <p class="section-lead"><?php echo e(__('Vendor profile')); ?></p>
            <form class="container-fuild" action="<?php echo e(url('vendor/vendor/'.$vendor->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="card">
                    <div class="card-header">
                        <h6 class="c-grey-900"><?php echo e(__('Vendor')); ?></h6>
                    </div>
                    <div class="card-body">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="Promo code name"><?php echo e(__('Vendor image')); ?></label>
                                <div class="logoContainer">
                                    <img id="image" src="<?php echo e(url($vendor->image)); ?>"  width="180" height="150" class="rounded-lg p-2">
                                </div>
                                <div class="fileContainer sprite">
                                    <span><?php echo e(__('Image')); ?></span>
                                    <input type="file" data-id="edit" name="image" value="Choose File" id="previewImage" accept=".png, .jpg, .jpeg, .svg">
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="Image"><?php echo e(__('Vendor logo')); ?></label>
                                <div class="logoContainer">
                                    <img id="licence_doc" src="<?php echo e($vendor->vendor_logo); ?>" width="200" height="182" class="rounded-lg p-2">
                                </div>
                                <div class="fileContainer">
                                    <span><?php echo e(__('Image')); ?></span>
                                    <input type="file" data-id="edit" name="vendor_logo" value="Choose File" id="previewlicence_doc"
                                        accept=".png, .jpg, .jpeg, .svg">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Vendor name"><?php echo e(__('Vendor Name')); ?><span class="text-danger">&nbsp;*</span></label>
                                <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="<?php echo e(__('Vendor Name')); ?>" value="<?php echo e($vendor->name); ?>" required=""
                                    style="text-transform: none;">

                                <?php $__errorArgs = ['name'];
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
                            <div class="col-md-6 mb-3">
                                <label for="<?php echo e(__('Email')); ?>"><?php echo e(__('Email Address')); ?></label>
                                <input type="text" name="email_id" value="<?php echo e($vendor->email_id); ?>"
                                    class="form-control <?php $__errorArgs = ['email_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="<?php echo e(__('Email id')); ?>" style="text-transform: none;" readonly>

                                <?php $__errorArgs = ['email_id'];
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
                                <label for="<?php echo e(__('contact')); ?>"><?php echo e(__('Contact')); ?><span class="text-danger">&nbsp;*</span></label>
                                <div class="row">
                                    <div class="col-md-3 p-0">
                                        <select name="phone_code" required class="form-control select2">
                                            <?php $__currentLoopData = $phone_codes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone_code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="+<?php echo e($phone_code->phonecode); ?>" <?php echo e($user->phone_code == $phone_code->phonecode ? 'selected' : ''); ?>>+<?php echo e($phone_code->phonecode); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-9 p-0">
                                        <input type="number" value="<?php echo e($vendor->contact); ?>" name="contact" value="<?php echo e(old('contact')); ?>" required class="form-control  <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <?php $__errorArgs = ['contact'];
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h6 class="c-grey-900"><?php echo e(__('Select Tags (For Restaurants it will be cuisines)')); ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="mT-30">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="First name"><?php echo e(__('Tags')); ?><span class="text-danger">&nbsp;*</span></label>

                                    <select class="select2 form-control" name="cuisine_id[]" multiple="true">
                                        <?php $__currentLoopData = $cuisines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuisine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($cuisine->id); ?>" <?php echo e(in_array($cuisine->id,explode(',',$vendor->cuisine_id)) ? 'selected' : ''); ?>><?php echo e($cuisine->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['cuisine_id'];
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
                        </div>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h6 class="c-grey-900"><?php echo e(__('Location')); ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="mT-30">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="pac-card col-md-12 mb-3" id="pac-card">
                                            <label for="pac-input"><?php echo e(__('Location based on latitude/lontitude')); ?><span class="text-danger">&nbsp;*</span></label>
                                            <div id="pac-container">
                                                <input id="pac-input" name="map_address" value="<?php echo e($vendor->map_address); ?>" type="text" class="form-control" placeholder="Enter a location" />
                                                <?php if($vendor->lat == null && $vendor->lang == null): ?>
                                                    <input type="hidden" name="lat" value="22.3039" id="lat">
                                                    <input type="hidden" name="lang" value="70.8022" id="lang">
                                                <?php else: ?>
                                                    <input type="hidden" name="lat" value="<?php echo e($vendor->lat); ?>" id="lat">
                                                    <input type="hidden" name="lang" value="<?php echo e($vendor->lang); ?>" id="lang">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="min_order_amount"><?php echo e(__('Vendor full address')); ?><span class="text-danger">&nbsp;*</span></label>
                                            <input type="text" class="form-control" name="address" value="<?php echo e($vendor->address); ?>" placeholder="<?php echo e(__('Vendor full address')); ?>" id="location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h6 class=""><?php echo e(__('Other Information')); ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="mT-30">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="min_order_amount"><?php echo e(__('Minimum order amount')); ?><span class="text-danger">&nbsp;*</span></label>
                                    <input type="number" name="min_order_amount" placeholder="<?php echo e(__('Minimum order amount')); ?>"
                                        value="<?php echo e($vendor->min_order_amount); ?>" required class="form-control <?php $__errorArgs = ['min_order_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                        <?php $__errorArgs = ['min_order_amount'];
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
                                <div class="col-md-6 mb-3">
                                    <label for="for_two_person"><?php echo e(__('Cost of two person')); ?><span class="text-danger">&nbsp;*</span></label>
                                    <input type="number" name="for_two_person" placeholder="<?php echo e(__('Cost of two person')); ?>"
                                        value="<?php echo e($vendor->for_two_person); ?>" required class="form-control  <?php $__errorArgs = ['for_two_person'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                        <?php $__errorArgs = ['min_order_amount'];
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
                                <div class="col-md-6 mb-3">
                                    <label for="avg_delivery_time"><?php echo e(__('Avg. delivery time(in min)')); ?><span class="text-danger">&nbsp;*</span></label>
                                    <input type="number" name="avg_delivery_time" value="<?php echo e($vendor->avg_delivery_time); ?>" placeholder="<?php echo e(__('Avg delivery time(in min)')); ?>" required class="form-control <?php $__errorArgs = ['avg_delivery_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                    <?php $__errorArgs = ['avg_delivery_time'];
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
                                <div class="col-md-6 mb-3">
                                    <label for="license_number"><?php echo e(__('Business License number')); ?><span class="text-danger">&nbsp;*</span></label>
                                    <input type="text" name="license_number" value="<?php echo e($vendor->license_number); ?>"  required placeholder="<?php echo e(__('Business License number')); ?>" class="form-control <?php $__errorArgs = ['license_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                    <?php $__errorArgs = ['license_number'];
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
                                <div class="col-md-6 mb-3">
                                    <label for="vendor_type"><?php echo e(__('Vendor type')); ?><span class="text-danger">&nbsp;*</span></label>
                                    <select name="vendor_type" class="form-control">
                                        <option value="all" <?php echo e($vendor->vendor_type == 'all' ? 'selected':''); ?>><?php echo e(__('All')); ?></option>
                                        <option value="veg" <?php echo e($vendor->vendor_type == 'veg' ? 'selected':''); ?>><?php echo e(__('pure veg')); ?></option>
                                        <option value="non_veg" <?php echo e($vendor->vendor_type == 'non_veg' ? 'selected':''); ?>><?php echo e(__('none veg')); ?></option>
                                        <option value="non_applicable" <?php echo e($vendor->vendor_type == 'non_applicable' ? 'selected':''); ?>><?php echo e(__('non applicable')); ?></option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="admin_commision_value"><?php echo e(__('Time slots')); ?><span class="text-danger">&nbsp;*</span></label>
                                    <select name="time_slot" class="form-control">
                                        <option value="15"  <?php echo e($vendor->time_slot == '15' ? 'selected':''); ?>><?php echo e(__('15 mins')); ?></option>
                                        <option value="30"  <?php echo e($vendor->time_slot == '30' ? 'selected':''); ?>><?php echo e(__('30 mins')); ?></option>
                                        <option value="45"  <?php echo e($vendor->time_slot == '45' ? 'selected':''); ?>><?php echo e(__('45 mins')); ?></option>
                                        <option value="60"  <?php echo e($vendor->time_slot == '60' ? 'selected':''); ?>><?php echo e(__('1 hour')); ?></option>
                                        <option value="120" <?php echo e($vendor->time_slot == '120' ? 'selected':''); ?>><?php echo e(__('2 hour')); ?></option>
                                        <option value="180" <?php echo e($vendor->time_slot == '180' ? 'selected':''); ?>><?php echo e(__('3 hour')); ?></option>
                                        <option value="240" <?php echo e($vendor->time_slot == '240' ? 'selected':''); ?>><?php echo e(__('4 hour')); ?></option>
                                        <option value="300" <?php echo e($vendor->time_slot == '300' ? 'selected':''); ?>><?php echo e(__('5 hour')); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- <div class="col-md-6 mb-3">
                                    <label for="tax"><?php echo e(__('GSTIN(%)')); ?><span class="text-danger">&nbsp;*</span></label>
                                    <input type="number" required name="tax" value="<?php echo e($vendor->tax); ?>" placeholder="<?php echo e(__('Resturant tax in %')); ?>" class="form-control">
                                </div> -->

                                <div class="col-md-6 mb-3">
                                    <label for="tax"><?php echo e(__('vendor language')); ?></label>
                                    <select name="vendor language" class="form-control">
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($language->name); ?>" <?php echo e($language->name == $vendor->vendor_language ? 'selected' : ''); ?>><?php echo e($language->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="<?php echo e(__('status')); ?>"><?php echo e(__('Status')); ?></label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="status" <?php echo e($vendor->status == 1 ? 'checked' : ''); ?>>
                                        <div class="slider"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" type="submit"><?php echo e(__('Update Vendor')); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(App\Models\GeneralSetting::first()->map_key); ?>&callback=initMap&libraries=places&v=weekly" defer></script>
    <script src="<?php echo e(asset('js/map.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app',['activePage' => 'vendor'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /customers/f/2/a/homchf.one/httpd.www/resources/views/vendor/vendor/edit_vendor.blade.php ENDPATH**/ ?>