<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <!-- START CONTAINER -->
    <div class="row" style="align-content: center !important;">
        <!-- START CONTENT ROW -->
        <div class="col-md-12 col-xs-10" >

			<div class="widget widget-default">
                <header class="widget-header">
					<h2 class="page-header-heading">
						<span class="typcn typcn-document-add page-header-heading-icon"></span>
						New Complaint
					</h2>
                </header>
                <div class="widget-body">
                    <form class="">
                       <div class="row col-lg-5">
                         <div class="form-group">
                        	<label for="username" class="">SBT Code</label>
							 <input name="jobid" id="jobid" class="form-control input-sm" placeholder="SBT Code" type="text">
                        	<!--<p class="help-block">Select Sales Person.</p>-->
                        </div>
                        <div class="form-group">
                        	<label for="password" class="">Contact Person</label><br>
                        	<input name="jobid" id="jobid" class="form-control input-sm" placeholder="Contact Person" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
						</div>
                       <div class="form-group">
                        	<label for="password" class="">Contact Number</label><br>
                        	<input name="jobid" id="jobid" class="form-control input-sm" placeholder="Contact Number" type="text">

                        	<!--<p class="help-block">Job identifier.</p>-->
						</div>
						   </div>
						<div class="row col-lg-1"></div>
						<div class="row col-lg-5">
                       <div class="form-group">
                        	<label for="password">Contact Email</label><br>
                        	<input name="jobid" id="bid" class="form-control input-sm" placeholder="Contact Email" type="text">

						</div>
						<div class="form-group">
								<label for="password">Location</label><br>
								<input name="jobid" id="bid" class="form-control input-sm" placeholder="Location" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
						</div>

						<div class="form-group">
							<label for="password">Address</label><br>
							<input name="jobid" id="bid" class="form-control input-sm" placeholder="Address" type="text">
							<!--<p class="help-block">Job identifier.</p>-->
						</div>




						</div>
						<div class="row col-lg-5">
							<div class="form-group">
								<label for="password">Complaint</label><br>
								<textarea name="sales_comments" id="sales_comments" class="form-control" placeholder="Complaint"></textarea>
							</div>

						</div>
						<div class="row col-lg-11">
							<div class="form-group" style="text-align:right; margin-right:41px;">
								<button class="btn btn-transparent">
									<span class="typcn typcn-arrow-forward"></span>Submit
								</button>
							</div>
						</div>
                    </form>
                </div>
            </div>

		</div>
        <!-- END CONTENT ROW -->
    </div>
    <footer class="content-wrapper-footer">
        &copy; Copyright 2016 VarelloAdmin. Crafted with <span class="fa fa-heart"></span> by <a href="http://www.varellothemes.com" target="_blank">Varello Themes</a>.
    </footer>
    <!-- END CONTAINER -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>