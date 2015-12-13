@extends('layouts.default')
@section('title_page') Promotion @stop

@section('active_home') 
class='active'
@stop

@section('content')

<div class="jumbotron">
<div class="container">
	<div class="row"><h4>
		<div class="col-sm-3">เลขที่ Promotion</div>
		<div class="col-sm-6">xxxxxxxxx</div></h4>
		
	</div>		
	<div class="row">
		<div class="col-sm-3">รายละเอียด</div>
		<div class="col-sm-6">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</div>
	</div>
</div>
</div>

<p><a href ="{{URL::to('sales/addpromotioncust')}}" class="btn btn-sm btn-success">Add Product</a></p>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Brand</th>
			<th>Group</th>
			<th>Type</th>
			<th>Design</th>
			<th>Color</th>
			<th>Size</th>
			<th>Description</th>
			<th>Disc 1</th>
			<th>Disc 2</th>
			<th>Disc (Baht)</th>
			<th>Unit Price</th>
			<th>Sales Price</th>
			<th> </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>C1</td>
			<td>xx</td>
			<td>xx</th>
			<td>xxxx</td>
			<td>xxxx</td>
			<td>xxxxxxxxx</td>
			<td>Description</td>
			<td>99</td>
			<td>99</td>
			<td>999999</td>
			<td>999999</td>
			<td>999999</td>
			<td>
				
				
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
				
			</td>
		</tr>

		<tr>
			<td>C0002</td>
			<td>xxx</td>
			<td>xx</th>
			<td>xxxx</td>
			<td>xxxx</td>
			<td>xxxxxxxxx</td>
			<td>Description</td>
			<td>99</td>
			<td>99</td>
			<td>999999</td>
			<td>999999</td>
			<td>999999</td>
			<td>
				
				
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>

		<tr>
			<td>C0003</td>
			<td>xxx</td>
			<td>xx</th>
			<td>xxxx</td>
			<td>xxxx</td>
			<td>xxxxxxxxx</td>
			<td>Description</td>
			<td>99</td>
			<td>99</td>
			<td>999999</td>
			<td>999999</td>
			<td>999999</td>
			<td>
				
				
				<form method="POST" action ="#" style="display:inline-block">
					<input  name="_method" type="hidden"  value="DELETE">
					<input type ="hidden" name="_token"  value="{{csrf_token()}}">
					<button class="btn btn-sm btn-danger"> Delete </button>
				</form>
			</td>
		</tr>
	</tbody>
</table>


@stop
