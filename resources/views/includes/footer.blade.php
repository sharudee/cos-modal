<script src="{{URL::to('resources/assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{URL::to('resources/assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('resources/assets/js/Menu.min.js')}}"></script>
<script src="{{URL::to('resources/assets/js/sb-admin-2.js')}}"></script>
<script src="{{URL::asset('resources/assets/js/custom.js')}}"></script>

<script>
	$(document).ready(function(){
		$('.cust_code').click(function(){
				//alert('click');
				$('input[name="cust_grp"]').val($('.cust_code').attr("id"));
			});
		
	});
</script>