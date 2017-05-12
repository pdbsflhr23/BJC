@extends('layout.admin')
@section('content')
<header class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header-heading"><span class="typcn typcn-document-add page-header-heading-icon"></span> New Job Card</h1>
                <p class="page-header-description"></p>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">
    <!-- START CONTAINER -->
    <div class="row">
        <form  method="POST" action="{{ url('job/save') }}">
            {{ csrf_field() }}
        <!-- START CONTENT ROW -->
        <div class="col-md-12 col-xs-12">
        	<div class="widget widget-default">
                <header class="widget-header">
                    Sales Information
                </header>
                <div class="widget-body">
                       <div class="form-inline">
                       <div class="row">
                         <div class="form-group">
                        	<label for="username" class="">Sales Person *</label><br>
                        	<select class="form-control input-sm" name="sales_person">
								<option value="0" selected>Select Sales Person</option>
                                @foreach($natures as $nature)
								    <option value="{{ $nature->nature }}">{{ $nature->name }}</option>
                                @endforeach
							</select>
                        </div>
                        <div class="form-group">
                        	<label for="password" class="">Job Identifier *</label><br>
                            <select class="form-control input-sm" name="identifier">
                                <option value="">Select Job identifier</option>
                                <option value="777">New Deployment [777]</option>
                                <option value="1919">Supplementry [1919]</option>
                                <option value="1313">Complaint [1313]</option>
                            </select>
						</div>
                       <div class="form-group">
                        	<label for="password" class="">PO Number *</label><br>
                        	<input name="ponumber" id="ponumber" class="form-control input-sm" placeholder="PO Number" type="text">
                           <span class="btn btn-sm btn-transparent btn-file">
							   <i class="typcn typcn-attachment-outline"></i>
                                <input type="file" name="po_file">
                           </span>
						</div>
                       <div class="form-group">
                        	<label for="password">Quotation/Bid *</label><br>
                        	<input name="quotation" id="quotation" class="form-control input-sm" placeholder="Quotation/BID" type="text">
						   <span class="btn btn-sm btn-transparent btn-file">
							   <i class="typcn typcn-attachment-outline"></i>
                                <input type="file" name="quotation_file">
                           </span>
						</div>
						<div class="form-group">
								<label for="password">Sales Project Deadline *</label><br>
								<input name="sp_deadline" id="sp_deadline" class="form-control input-sm" placeholder="Sales Project Deadline *" type="text">
							</div>
						</div>

                       <div class="row" style="margin-top: 10px;">
                       		<div class="form-group">
								<label for="password">Sales Person Comments *</label><br>
								<textarea name="sales_comments" id="sales_comments" class="form-control" placeholder="Comments"></textarea>
							</div>
                       </div>

                    </div>
                </div>
            </div>
            <div class="widget widget-default">
                <header class="widget-header">
                    Customer Details
                </header>
                <div class="widget-body">
                    <div class="form-inline">
                       <div class="row">
                         <div class="form-group">
                        	<label for="username" class="">Customer Sage ID *</label><br>
                        	<input name="sage" id="sage" class="form-control input-sm" placeholder="Company Sage ID" type="text">
                        </div>
                         <div class="form-group">
                        	<label for="username" class="">Sage ID Issued By*</label><br>
                        	<input name="sage_issued" id="sage_issued" class="form-control input-sm" placeholder="Company Sage ID" type="text">
                        </div>
                        <div class="form-group">
                        	<label for="password" class="">Company Name *</label><br>
                        	<input name="com_name" id="com_name" class="form-control input-sm" placeholder=" Company Name" type="text">
						</div>
                       <div class="form-group">
                        	<label for="password" class="">Industry *</label><br>
                        	<input name="industry" id="industry" class="form-control input-sm" placeholder="Industry" type="text">
                        	
						</div>
                       <div class="form-group">
                        	<label for="password">CNIC *</label><br>
                        	<input name="cnic" id="cnic" class="form-control input-sm" placeholder="CNIC" type="text">
						</div>
						<div class="form-group">
								<label for="password">NTN *</label><br>
								<input name="ntn" id="ntn" class="form-control input-sm" placeholder="NTN *" type="text">
							</div>
							
						<div class="form-group">
                        	<label for="password">Contact Person </label><br>
                        	<input name="contact_person" id="contact_person" class="form-control input-sm" placeholder="Contact Person" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
						</div>
						<div class="form-group">
								<label for="password">Contact Landline *</label><br>
								<input name="contact_landline" id="contact_landline" class="form-control input-sm" placeholder="Contact Landline" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
							</div>
						
                      <div class="form-group">
                        	<label for="password">Fax No</label><br>
                        	<input name="fax" id="fax" class="form-control input-sm" placeholder="Fax No" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
						</div>
						<div class="form-group">
								<label for="password">Contact Cell *</label><br>
								<input name="contact_cell" id="contact_cell" class="form-control input-sm" placeholder="Contact Cell *" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
							</div>
						
                      <div class="form-group">
                        	<label for="password">Contact Email *</label><br>
                        	<input name="contact_email" id="contact_email" class="form-control input-sm" placeholder="Contact Email" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
						</div>
						<div class="form-group">
								<label for="password">Bill To Address</label><br>
								<input name="bill_address" id="bill_address" class="form-control input-sm" placeholder="Bill To Address" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
							</div>
						
                      <div class="form-group">
                        	<label for="password">Ship To Address</label><br>
                        	<input name="ship_address" id="ship_address" class="form-control input-sm" placeholder="Ship To Address" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
						</div>
						<div class="form-group">
								<label for="password">Project Location</label><br>
								<input name="pro_location" id="pro_location" class="form-control input-sm" placeholder="Project Location *" type="text">
                        	<!--<p class="help-block">Job identifier.</p>-->
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="widget widget-default">
                <header class="widget-header">
                    Billing Information
                </header>
                <div class="widget-body">
                    <div class="form-inline">
                       <div class="row">
                       		<table>
                       			<tr>
                       				<td>
                       					<div class="form-group">
											<label for="username" class="">Net Invoice Amount</label><br>
											<input name="jobid" id="jobid" class="form-control input-lg" placeholder="Net Invoice Amount" type="text">
											<!--<p class="help-block">Select Sales Person.</p>-->
										</div>
                       				</td>
                       				<td>
                       					<div class="form-group">
											<label for="username" class="">Itemized Invoice Amount</label><br>
											<input name="jobid" id="jobid" class="form-control input-lg" placeholder="Itemized Invoice Amount" type="text">
											<!--<p class="help-block">Select Sales Person.</p>-->
										</div>
                       				</td>
                       				<td>
                       					<div class="form-group">
											<label for="username" class="">Itemized Invoice Amount (with taxes)</label><br>
											<input name="jobid" id="jobid" class="form-control input-lg" placeholder="Itemized Invoice Amount(with taxes)" type="text">
											<!--<p class="help-block">Select Sales Person.</p>-->
										</div>
                       				</td>
                       			</tr>
                       		</table>
                       </div>
                       <div class="row">
                      		<br><br>
                           <div class="form-group">
                               {{--<label for="username" class="">Itemized Invoice Amount (with taxes)</label><br>--}}
                               <input name="billing_type" id="radio_new" class="iradio_square" type="radio" value="New" checked> New &nbsp;&nbsp;
                               <input name="billing_type" id="radio_void" class="iradio_flat-aero" type="radio" value="Void"> Void
                               <!--<p class="help-block">Select Sales Person.</p>-->
                           </div>
                           <div class="table-responsive">
                           <table id="items_new" class="table">
                               <thead>
                               <tr>
                                   <th>Item Code</th>
                                   <th>Item Price</th>
                                   <th>Taxable</th>
                                   <th>QTY</th>
                                   <th>Net Price</th>
                                   <th>Sale Price</th>
                                   <th>Discount</th>
                                   <th>Tax Amount</th>
                                   <th>Reoccurrence</th>
                                   <th>R.period</th>
                                   <th>Next Reoccurence</th>
                               </tr>
                               </thead>
                           <tbody>
                               <tr id="tb_1">
                                   <td>
                                       <select class="form-control input-vsm drops" name="item_code[]" id="item_code_1">
                                           <option value="0" selected>Item</option>
                                           @foreach($codes as $code)
                                               <option value="{{ $code->id }}">{{ $code->item_code }}</option>
                                           @endforeach
                                       </select>
                                   </td>
                                   <td><input type="text" name="item_price[]" id="item_price_1" class="form-control input-vsm"></td>
                                   <td><input type="text" name="taxable[]" id="taxable_1" class="form-control input-vsm"></td>
                                   <td><input type="text" name="qty[]" id="qty_1" class="form-control input-vsm"></td>
                                   <td><input type="text" name="net_price[]" id="net_price_1" class="form-control input-vsm"></td>
                                   <td><input type="text" name="sale_price[]" id="sale_price_1" class="form-control input-vsm"></td>
                                   <td><input type="text" name="discount[]" id="discount_1" class="form-control input-vsm"></td>
                                   <td><input type="text" name="tax_amount[]" id="tax_amount_1" class="form-control input-vsm"></td>
                                   <td>
                                       <select class="form-control input-vsm" name="reoccurrence[]" id="reoccurrence_1">
                                           <option value="Yes">Yes</option>
                                           <option value="No">No</option>
                                       </select>
                                   </td>
                                   <td><input type="text" name="rperiod[]" id="rperiod_1" class="form-control input-vsm"></td>
                                   <td><input type="text" name="next_reoccurrence[]" id="next_reoccurrence_1" class="form-control input-vsm"></td>
                               </tr>
                               <tr id="tb_2">
                                   <td>
                                       <select class="form-control input-vsm drops" name="item_code[]" id="item_code_2">
                                           <option value="0" selected>Item</option>
                                           @foreach($codes as $code)
                                               <option value="{{ $code->id }}">{{ $code->item_code }}</option>
                                           @endforeach
                                       </select>
                                   </td>
                                   <td><input type="text" name="item_price[]" id="item_price_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="taxable[]" id="taxable_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="qty[]" id="qty_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="nat_price[]" id="nat_price_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="sale_price[]" id="sale_price_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="discount[]" id="discount_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="tax_amount[]" id="tax_amount_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="reoccurrence[]" id="reoccurrence_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="rperiod[]" id="rperiod_2" class="form-control input-vsm"></td>
                                   <td><input type="text" name="next_reoccurrence[]" id="next_reoccurrence_2" class="form-control input-vsm"></td>
                               </tr>
                               <tr id="tb_3">
                                   <td><input type="text" name="item_code[]" id="item_code_3" class="input-vsm form-control"></td>
                                   <td><input type="text" name="item_price[]" id="item_price_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="taxable[]" id="taxable_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="qty[]" id="qty_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="nat_price[]" id="nat_price_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="sale_price[]" id="sale_price_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="discount[]" id="discount_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="tax_amount[]" id="tax_amount_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="reoccurrence[]" id="reoccurrence_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="rperiod[]" id="rperiod_3" class="form-control input-vsm"></td>
                                   <td><input type="text" name="next_reoccurrence[]" id="next_reoccurrence_3" class="form-control input-vsm"></td>
                               </tr>
                               <tr id="tb_4">
                                   <td><input type="text" name="item_code[]" id="item_code_4" class="input-vsm form-control"></td>
                                   <td><input type="text" name="item_price[]" id="item_price_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="taxable[]" id="taxable_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="qty[]" id="qty_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="nat_price[]" id="nat_price_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="sale_price[]" id="sale_price_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="discount[]" id="discount_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="tax_amount[]" id="tax_amount_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="reoccurrence[]" id="reoccurrence_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="rperiod[]" id="rperiod_4" class="form-control input-vsm"></td>
                                   <td><input type="text" name="next_reoccurrence[]" id="next_reoccurrence_4" class="form-control input-vsm"></td>
                               </tr>
                               <tr id="more_container">
                                   <td colspan="11" class="add_new_row_control">
                                       <a href="#" id="add_field_button">
                                           <span class="typcn typcn-document-add"></span>New
                                       </a>
                                   </td>
                               </tr>
                           </tbody>
                           </table>

                           </div>
                           <div class="table-responsive">
                               <table id="items_void" class="table">
                       			<thead>
									<tr>
										<th>Sale Price</th>
										<th>Reason of Credit Memo</th>
										<th>Sales Person Comment</th>
										<th>Ref Attachment</th>
										<th>Manager Comment</th>
										<th>Manager Approval</th>
									</tr>
                       			</thead>
                       			<tr>
                       				<td><input type="text" name="sale_code_void[]" id="sale_code_void" class="input-vsm form-control"></td>
                       				<td><input type="text" name="credit_memo[]" id="credit_memo" class="form-control input-vsm"></td>
                       				<td><input type="text" name="sp_comment[]" id="sp_comment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="ref_attachment[]" id="ref_attachment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="man_comment[]" id="man_comment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="man_approval[]" id="man_approval" class="form-control input-vsm"></td>
								</tr>
                       			<tr>
                       				<td><input type="text" name="sale_code_void[]" id="sale_code_void" class="input-vsm form-control"></td>
                       				<td><input type="text" name="credit_memo[]" id="credit_memo" class="form-control input-vsm"></td>
                       				<td><input type="text" name="sp_comment[]" id="sp_comment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="ref_attachment[]" id="ref_attachment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="man_comment[]" id="man_comment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="man_approval[]" id="man_approval" class="form-control input-vsm"></td>
								</tr>
                       			<tr>
                       				<td><input type="text" name="sale_code_void[]" id="sale_code_void" class="input-vsm form-control"></td>
                       				<td><input type="text" name="credit_memo[]" id="credit_memo" class="form-control input-vsm"></td>
                       				<td><input type="text" name="sp_comment[]" id="sp_comment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="ref_attachment[]" id="ref_attachment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="man_comment[]" id="man_comment" class="form-control input-vsm"></td>
                       				<td><input type="text" name="man_approval[]" id="man_approval" class="form-control input-vsm"></td>
								</tr>
                       			<tr id="item_rows">
									<td><input type="text" name="sale_code_void[]" id="sale_code_void" class="input-vsm form-control"></td>
									<td><input type="text" name="credit_memo[]" id="credit_memo" class="form-control input-vsm"></td>
									<td><input type="text" name="sp_comment[]" id="sp_comment" class="form-control input-vsm"></td>
									<td><input type="text" name="ref_attachment[]" id="ref_attachment" class="form-control input-vsm"></td>
									<td><input type="text" name="man_comment[]" id="man_comment" class="form-control input-vsm"></td>
									<td><input type="text" name="man_approval[]" id="man_approval" class="form-control input-vsm"></td>
                       			</tr>
								<tr id="more_containers">
									<td colspan="11" class="add_new_row_control">
										<a href="#" id="new_item_btn_2">
											<span class="typcn typcn-document-add"></span>New
										</a>
									</td>
                       		</table>
                           </div>
                           <div class="col-md-12">
                               <button type="submit" class="btn btn-primary pull-right">Add Job</button>
                           </div>
					   </div>
                    </div>
                    </div>
            </div>
		</div>
        <!-- END CONTENT ROW -->
        </form>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        function getPrice(id) {
            $.ajax({
                headers: {'X-CSRF-Token': $('input[name="_token"]').val()},
                type: "POST",
                url: "{{ url('job/json/item/price') }}/"+id,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(data){
                    $('#item_price_1').val(data.price);
                }
            });
        }
    </script>
@endsection