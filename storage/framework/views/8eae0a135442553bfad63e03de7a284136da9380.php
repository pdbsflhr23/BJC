<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VarelloAdmin</title>
    <?php echo $__env->make('layout.admin.stylesheets', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('layout.admin.favicon', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('styles'); ?>
    <?php echo $__env->make('layout.admin.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body <?php echo Session::has('skin.colour') ? 'class="skin-' . Session::get('skin.colour') . '"' : ''; ?>>
    <?php if(config('theme.demoMode')): ?>
    <?php echo $__env->make('layout.demo.fixedSkinner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div class="notifications top-right"></div>
    <div class="wrapper">
        <div class="page-wrapper">
            <div id="login-hidden" style="display: none;">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
    <?php echo $__env->make('layout.admin.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>