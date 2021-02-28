<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Verify Your Email Address')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-primary" role="alert">
                            <?php echo e(__('E-mail Verifikasi Sudah dikirim ke E-mail Anda')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Sebelum Login, Silah kan cek Email Anda untuk Verifikasi akun.')); ?>

                   
                    <form class="d-inline" method="POST" action="<?php echo e(route('verification.send')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><?php echo e(__('Klik disini untuk mengirim ulang')); ?></button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fortify\resources\views/web/auth/verify.blade.php ENDPATH**/ ?>