<?php $__env->startSection('konten'); ?>
    <div class="h-screen bg-primary lg:bg-primary px-12 flex justify-center items-center p-10 flex-row flex-wrap">
        <div
            class="h-full overflow-y-auto bg-white justify-center flex flex-col transition ease-in-out items-center w-[100%] md:w-[70%] lg:w-[50%] rounded-md lg:rounded-r-none border-2 lg:border-0 drop-shadow-sm px-12 py-20">
            <div class="">
                <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="w-full max-h-44 lg:hidden" alt="Sample image" />
            </div>
            <h1 class="font-extrabold w-full text-center text-3xl mt-8">Register Page</h1>
            <form class="w-full form-control" action="/proses_register" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-control w-full mt-6">
                    <label class="label">
                        <span class="label-text">Nama</span>
                    </label>
                    <input name="nama" type="text" placeholder="Type here" value="<?php echo e(old('nama')); ?>" class="input input-bordered w-full" />
                    <label class="label">
                        <?php $__errorArgs = ['nama'];
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
                        <span class="label-text">Roles</span>
                    </label>
                    <select name="roles" class="select select-bordered">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input name="username" type="text" placeholder="Type here" value="<?php echo e(old('username')); ?>" class="input input-bordered w-full" />
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
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" name="password" placeholder="Type here"
                        class="input input-bordered w-full" />
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
                </div>
                <button type="submit" class="btn btn-primary w-full mt-12">Register</button>
            </form>
            <p class="mt-4">Sudah punya akun? <a class="text-primary" href="/login">Login</a></p>
        </div>
        <div
            class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12 hidden lg:rounded-r-md lg:flex lg:bg-white h-full items-center">
            <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="w-full"
                alt="Sample image" />
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mphstar/Development/web/auth-laravel/resources/views/register.blade.php ENDPATH**/ ?>