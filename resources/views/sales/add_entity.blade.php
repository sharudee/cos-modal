@extends('layouts.default')
@section('title_page') Entity @stop

@section('active_home') 
class='active'
@stop

@section('content')
<br>
<p class="breadcrumb">บันทึก Entity</p>

<div class="col-sm-12">
	<form action="{{URL::to('sales/addnewentity')}}"  method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
			<!--<div class="form-group">
				<legend>บันทึก  Entity</legend>
			</div>-->
			
			
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="entity_code" id="input" class="form-control input-sm">
					</div>

					<div class="col-sm-2 col-sm-offset-1">
						<label>หมายเลขเครื่อง</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="cos_no" id="input" class="form-control input-sm">
					</div>
					
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อลูกค้า (ไทย)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="entity_tname" id="input" class="form-control input-sm">
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label>ชื่อลูกค้า (อังกฤษ)</label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="entity_ename" id="input" class="form-control input-sm">
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label>กลุ่มลูกค้า</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="cust_grp" id="input" class="form-control input-sm input_cust_grp" value="">
						<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Show</a>
						<div class="modal fade" id="modal-id">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Cust Group</h4>
									</div>
									<div class="modal-body">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Cust Group</th>
													<th>Description</th>
												</tr>
											</thead>
											<tbody>
												@foreach($custgrp as $dbcust)
												<tr>
													<td><a class="cust_code" id="{{ $dbcust->custgrp_code }}" href="#">{{ $dbcust->custgrp_code}}</a></td>
													<td>{{ $dbcust->custgrp_name}}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>อัตราภาษี</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="tax_rate" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสควบคุม</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="ent_ctrl" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ประเภทการ Group Bill</label>
					</div>

					<div class="col-sm-2">
						
							
						        <select class="form-control input-sm" id="select" name="dsgrp_type">
						          <option value="SKU">SKU - ตามรหัสสินค้าลูกค้า</option>
						          <option value="DISC">DISC - ตามส่วนลดลูกค้า + GP ห้าง</option>
						        </select>
						
					</div>
				</div>



				<div class="row form-group">
					<div class="col-sm-2">
						<label>ประเภทการขาย</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="sale_type" id="input" class="form-control input-sm">
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>ประเภทรับคืน</label>
					</div>

					<div class="col-sm-2">
						<input type="text" name="ret_type" id="input" class="form-control input-sm">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>File</label>
					</div>
					<div class="col-sm-2">
						<input type="file" name="entity_file" id="input" class="form-control input-sm">
					</div>
					
				</div>


				<input type ="hidden" name="_token"  value="{{csrf_token()}}">

			</div>
			
			<br>
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="submit" class="btn btn-danger">Cancel</button>
				</div>
			</div>
	</form>
</div>

@stop