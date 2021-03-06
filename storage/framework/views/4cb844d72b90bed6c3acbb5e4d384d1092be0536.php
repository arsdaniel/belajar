

<?php $__env->startSection('content'); ?>
<div class="container mt-9">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            </div>

            <div class="card card-success">
              <div class="card-header"><h4><?php echo e(__('Login')); ?></h4></div>

              <div class="card-body">
              <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" tabindex="1" value="<?php echo e(old('email')); ?>" required >
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                            <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            <?php if(Route::has('password.request')): ?>
                            <div class="float-right">
                                <a href="<?php echo e(route('password.request')); ?>" class="text-small">
                                Lupa Password?
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                            <input id="password" type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" tabindex="2" required="">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                            <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div> 
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember">
                            <label class="custom-control-label" for="remember"> <?php echo e(__('Remember Me')); ?></label>
                            </div>
                        </div>

                       

                       

                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block">
                                    <?php echo e(__('Login')); ?>

                                </button>

                               
                            </div>
                       
                    </form>
                <div class="text-center mt-4 mb-3">
                    Belum Punya Akun? <a href="<?php echo e(__('register')); ?>">Daftar</a>
                </div>
                

              </div>
            </div>
            
            <div class="simple-footer">
              Copyright © Stisla 2018
            </div>
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fortify\resources\views/web/auth/login.blade.php ENDPATH**/ ?>