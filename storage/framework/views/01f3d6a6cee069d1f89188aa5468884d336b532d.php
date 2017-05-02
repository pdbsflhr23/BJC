<?php $__env->startSection('content'); ?>
    <div class="log-in-wrapper">
        <?php if( ! empty($forgotPasswordComplete)): ?>
            <div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Success! Check your inbox now</div>
        <?php endif; ?>
        <?php if( ! empty($signUpComplete)): ?>
            <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Success! Log in now</div>
        <?php endif; ?>
        <h1 class="log-in-title">Welcome to <strong class="text-primary">Varello</strong>Admin<br><small>Please enter your details</small></h1>
            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Please enter your email address...">
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-lg" name="password" id="password" placeholder="And your password...">
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember_me" data-icheck>
                <label for="remember_me" class="icheck-label">
                    Keep me signed in
                </label>
            </div>
                <button type="submit" class="btn btn-transparent btn-lg btn-transparent-primary btn-block">
                    Log In
                </button>
                </form>
            <ul class="login-bottom-links">
                <li><a href="<?php echo e(route('admin.forgotPassword')); ?>">Forgot your password?</a></li>
                <li><a href="<?php echo e(route('admin.signUp')); ?>">Need an account?</a></li>
            </ul>
        </form>
    </div>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
    <div class="log-in-wrapper">
        <?php if( ! empty($forgotPasswordComplete)): ?>
            <div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Success! Check your inbox now</div>
        <?php endif; ?>
        <?php if( ! empty($signUpComplete)): ?>
            <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Success! Log in now</div>
        <?php endif; ?>
        <h1 class="log-in-title">Welcome to <strong class="text-primary">Varello</strong>Admin<br><small>Please enter your details</small></h1>
        <form>
            <div class="form-group">
                <input type="email" class="form-control input-lg" id="email" placeholder="Please enter your email address...">
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-lg" id="password" placeholder="And your password...">
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember_me" data-icheck>
                <label for="remember_me" class="icheck-label">
                    Keep me signed in
                </label>
            </div>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-transparent btn-lg btn-transparent-primary btn-block">
                Log In
            </a>
            <ul class="login-bottom-links">
                <li><a href="<?php echo e(route('admin.forgotPassword')); ?>">Forgot your password?</a></li>
                <li><a href="<?php echo e(route('admin.signUp')); ?>">Need an account?</a></li>
            </ul>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.adminLoggedOut', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.adminLoggedOut', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>