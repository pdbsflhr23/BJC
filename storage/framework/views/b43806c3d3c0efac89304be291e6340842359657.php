<aside class="left-sidebar">
    <section class="sidebar-user-panel">
        <div id="user-panel-slide-toggleable">
            <div class="user-panel-profile-picture">
                <img src="<?php echo e(asset('img/user-1-profile.jpg')); ?>" alt="Tyrone G">
            </div>
            <span class="user-panel-logged-in-text"><span class="fa fa-circle-o text-success user-panel-status-icon"></span> Logged in as <strong> <?php echo e(Auth::user()->name); ?></strong></span>
            <a href="<?php echo e(route('admin.appPages.profile.update')); ?>" class="user-panel-action-link"><span class="fa fa-pencil"></span> Manage your account</a>
        </div>
        <!-- <button class="user-panel-toggler" data-slide-toggle="user-panel-slide-toggleable"><span class="fa fa-chevron-up" data-slide-toggle-showing></span><span class="fa fa-chevron-down" data-slide-toggle-hidden></span></button> -->
    </section>
    <ul class="sidebar-nav">
        <li class="sidebar-nav-heading">
            Components
        </li>
        <li class="sidebar-nav-link <?php if(empty(request()->segment(1))): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('admin.dashboard')); ?>">
                <span class="typcn typcn-home sidebar-nav-link-logo"></span> Dashboard
            </a>
        </li>
        <li class="sidebar-nav-link <?php if(request()->segment(1) === 'widgets'): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('admin.widgets')); ?>">
                <span class="typcn typcn-shopping-bag sidebar-nav-link-logo"></span> Widgets <span class="badge badge-primary sidebar-nav-link-badge">6</span>
            </a>
        </li>
        <li class="sidebar-nav-link sidebar-nav-link-group <?php if(in_array(request()->segment(2), ['inbox', 'mail', 'profile', 'faqs', 'orders', 'invoice', 'calendar', 'enquiry', 'page-not-found'])): ?> active open <?php endif; ?>">
            <a data-subnav-toggle>
                <span class="typcn typcn-document sidebar-nav-link-logo"></span> Application Pages
                <span class="fa fa-chevron-right subnav-toggle-icon subnav-toggle-icon-closed"></span>
                <span class="fa fa-chevron-down subnav-toggle-icon subnav-toggle-icon-opened"></span>
            </a>
                
                <ul class="sidebar-nav">
                    <li class="sidebar-nav-link">
                        <a href="<?php echo e(route('admin.logIn')); ?>">
                        <span class="typcn typcn-key sidebar-nav-link-logo"></span> Log In
                        </a>
                    </li>
                    <li class="sidebar-nav-link">
                        <a href="<?php echo e(route('admin.forgotPassword')); ?>">
                        <span class="typcn typcn-key-outline sidebar-nav-link-logo"></span> Forgot Password
                        </a>
                    </li>
                    <li class="sidebar-nav-link">
                        <a href="<?php echo e(route('admin.signUp')); ?>">
                        <span class="typcn typcn-plus-outline sidebar-nav-link-logo"></span> Sign Up
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'inbox' && empty(request()->segment(3))): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.inbox')); ?>">
                        <span class="typcn typcn-folder-open sidebar-nav-link-logo"></span> Inbox <span class="badge badge-info sidebar-nav-link-badge">99+</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'inbox' && request()->segment(3) === 'view'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.inbox.view')); ?>">
                        <span class="typcn typcn-mail sidebar-nav-link-logo"></span> View Email
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'inbox' && request()->segment(3) === 'compose'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.inbox.compose')); ?>">
                        <span class="typcn typcn-arrow-forward sidebar-nav-link-logo"></span> Compose Email
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'profile' && empty(request()->segment(3))): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.profile')); ?>">
                        <span class="typcn typcn-user sidebar-nav-link-logo"></span> Profile
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'profile' && request()->segment(3) === 'update'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.profile.update')); ?>">
                        <span class="typcn typcn-user-add sidebar-nav-link-logo"></span> Update Profile
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'faqs'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.faqs')); ?>">
                        <span class="typcn typcn-info sidebar-nav-link-logo"></span> FAQs
                        </a>
                    </li>
                    
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'calendar'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.calendar')); ?>">
                            <span class="typcn typcn-calendar sidebar-nav-link-logo"></span> Calendar
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'enquiry'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.enquiry')); ?>">
                            <span class="typcn typcn-message sidebar-nav-link-logo"></span> Enquiry
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'page-not-found'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.appPages.pageNotFound')); ?>">
                            <span class="typcn typcn-warning-outline sidebar-nav-link-logo"></span> 404 Message
                        </a>
                    </li>
                </ul>
        </li>
        <li class="sidebar-nav-heading">
            Fundamentals
        </li>
        <li class="sidebar-nav-link <?php if(request()->segment(1) === 'tables'): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('admin.tables')); ?>">
                <span class="typcn typcn-th-small sidebar-nav-link-logo"></span> Tables
            </a>
        </li>
        <li class="sidebar-nav-link <?php if(request()->segment(1) === 'forms'): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('admin.forms')); ?>">
                <span class="typcn typcn-clipboard sidebar-nav-link-logo"></span> Forms
            </a>
        </li>
        <li class="sidebar-nav-link <?php if(request()->segment(1) === 'chart-js'): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('admin.chartJs')); ?>">
                <span class="typcn typcn-chart-line sidebar-nav-link-logo"></span> Chart.js <span class="badge badge-danger sidebar-nav-link-badge">3</span>
            </a>
        </li>
        <li class="sidebar-nav-link sidebar-nav-link-group <?php if(request()->segment(1) === 'ui-components'): ?> active open <?php endif; ?>">
            <a data-subnav-toggle>
                <span class="typcn typcn-th-list sidebar-nav-link-logo"></span> UI Components
                <span class="fa fa-chevron-right subnav-toggle-icon subnav-toggle-icon-closed"></span>
                <span class="fa fa-chevron-down subnav-toggle-icon subnav-toggle-icon-opened"></span>
            </a>
                <ul class="sidebar-nav">
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'alerts'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.uiComponents.alerts')); ?>">
                        <span class="typcn typcn-warning sidebar-nav-link-logo"></span> Alerts
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'buttons'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.uiComponents.buttons')); ?>">
                        <span class="typcn typcn-th-large sidebar-nav-link-logo"></span> Buttons
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'badges-and-labels'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.uiComponents.badgesAndLabels')); ?>">
                        <span class="typcn typcn-tags sidebar-nav-link-logo"></span> Badges &amp; Labels
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'typography'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.uiComponents.typography')); ?>">
                        <span class="typcn typcn-sort-alphabetically sidebar-nav-link-logo"></span> Typography
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'grid-system'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.uiComponents.gridSystem')); ?>">
                        <span class="typcn typcn-th-small-outline sidebar-nav-link-logo"></span> Grid System
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'panels'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.uiComponents.panels')); ?>">
                        <span class="typcn typcn-tabs-outline sidebar-nav-link-logo"></span> Panels &amp; Widget Boxes
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'pagination'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.uiComponents.pagination')); ?>">
                        <span class="typcn typcn-arrow-right-outline sidebar-nav-link-logo"></span> Pagination
                        </a>
                    </li>
                    <li class="sidebar-nav-link <?php if(request()->segment(2) === 'progress-bars'): ?> active <?php endif; ?>">
                        <a href="<?php echo e(route('admin.uiComponents.progressBars')); ?>">
                        <span class="typcn typcn-chart-bar sidebar-nav-link-logo"></span> Progress Bars
                        </a>
                    </li>
                </ul>
        </li>
        <?php if (\Entrust::hasRole('super-admin')) : ?>
        <li class="sidebar-nav-heading">
            Super User
        </li>
        <li class="sidebar-nav-link <?php if(request()->segment(1) === 'users'): ?> active <?php endif; ?>">
            <a href="<?php echo e(URL('users')); ?>">
                <span class="typcn typcn-th-small sidebar-nav-link-logo"></span> Users
            </a>
        </li>
        <li class="sidebar-nav-link <?php if(request()->segment(3) === 'roles'): ?> active <?php endif; ?>">
            <a href="<?php echo e(route('users/manage/roles')); ?>">
                <span class="typcn typcn-th-small sidebar-nav-link-logo"></span> Roles Management
            </a>
        </li>
        <?php endif; // Entrust::hasRole ?>
    </ul>
</aside>