<?php $__env->startSection('title'); ?>
    Login Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('konten'); ?>
    <div class="h-screen bg-primary lg:bg-primary px-12 flex justify-center items-center p-10 flex-row flex-wrap">
        <div
            class="h-full overflow-y-auto bg-white justify-center flex flex-col items-center w-[100%] md:w-[70%] lg:w-[50%] rounded-md lg:rounded-r-none border-2 lg:border-0 drop-shadow-sm px-12 py-20">
            <div class="">
                <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="w-full max-h-44 lg:hidden" alt="Sample image" />
            </div>
            <form class="w-full form-control" action="/proses_login" method="post">
                <?php echo csrf_field(); ?>
                <h1 class="font-extrabold w-full text-center text-3xl">Login Page</h1>
                <div class="form-control w-full mt-6">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input name="username" type="text" placeholder="Type here" value="<?php echo e(old('username')); ?>"
                        class="input input-bordered w-full" />
                    <label class="label">
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="label-text-alt text-red-600"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </label>
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Type here" class="input input-bordered w-full" />
                    <label class="label">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="label-text-alt text-red-600"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-full mt-12">LOGIN</button>
            </form>
            <p class="mt-4">Tidak punya akun? <a class="text-primary" href="/register">Daftar Disini</a></p>

        </div>
        <div
            class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12 hidden lg:rounded-r-md lg:flex lg:bg-white h-full items-center">
            <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="w-full"
                alt="Sample image" />
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('otherjs'); ?>
<?php if(session('error')): ?>    
    <script>
        Swal.fire(
            'Gagal',
            '<?php echo e(session('error')); ?>',
            'error'
        )
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mphstar/Development/web/auth-laravel/resources/views/login.blade.php ENDPATH**/ ?>