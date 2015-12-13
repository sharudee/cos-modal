<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use App\Http\Model\entity;

use Request;

use App\Http\Requests\EntityFormRequest;

use DB;

class CosController extends Controller {

	public function __construct()			// ต้องมีเป็น  Function แรก
	{
		// Initial Value
		//$this->middleware('auth');     // Set ให้ผ่าน Auth ก่อน

		
	}	

	public function getIndex()
	{
		return view('sales.index');
		
	}

	// ---------------------------  Promotion ---------------------------//

	public function getPmtmast()
	{
		//return "Ok";

		return view('sales.show_promotion');
	}

	public function getAddpromotion()
	{
		//return "Ok";

		return view('sales.add_promotion');
	}	

	public function getPromotioncust()
	{
		//return "Ok";

		return view('sales.show_promotion_customer');
	}
	public function getPromotionprod()
	{
		//return "Ok";

		return view('sales.show_promotion_product');
	}
	public function getPromotiondisc()
	{
		//return "Ok";

		return view('sales.show_promotion_discount');
	}
	
	public function getSku()
	{
		//return "Ok";

		return view('sales.show_sku');
	}

	public function getAddsku()
	{
		//return "Ok";

		return view('sales.add_sku');
	}



	// ---------------------------  Entity  ---------------------------//

	public function getEntity()
	{
		//return "Ok";

		return view('sales.show_entity');    // dotenv
	}

	public function getShowentity()
	{
		$data_entity = Entity::all();
		

		return  view('sales.show_entity_data') ->with('entity',$data_entity) ;  // ส่งค่าไปที่ View
	
	}

	public function getAddentity()
	{
		//query Builder

		$custgrp_mast = DB::table('custgrp_mast') ->get();
		//var_dump($custgrp_mast);

		return view('sales.add_entity')->with('custgrp',$custgrp_mast);
	}

	public function postAddnewentity(EntityFormRequest $request )
	{
		


		$destination_path = 'upload';
		$file = Request::file('entity_file');

		//curent URL
		$url = Request::url();
		//var_dump($url);

		//file name
		//$file_name = Request::file('entity_file')->getClientOriginalName();

		//$mimetype = Request::file('entity_file')->getMimeType();
		//$filesize = Request::file('entity_file')->getClientSize();

		// check is file is valid
		//$check_valid = Request::file('entity_file')-> isValid();

		// Upload Fail Display Error Message
		//$error_msg = Request::file('entity_file')->getErrorMessage();


		//var_dump($mimetype);

		//if(Request::hasFile('entity_file'))
		//{
//
		//	Request::file('enitty_file')->move($destination_path);
		//}

		//$entity = Request::all();


		/*
		foreach($entity as $item)
		{
			$check = $item['checkbox'];
			if($check)
			{
				Enntity::create($item);
			}
		}
		*/

		//var_dump($entity);
		/*$entity_code = Request::Input('entity_code');

		if(Request::has('entity_code')) :
			return $entity_code;
		endif;*/

		/*$cos_no = Request::Input('cos_no');
		$entity_tname = Request::Input('entity_tname');
		$entity_ename = Request::Input('entity_ename');
		$cust_grp = Request::Input('cust_grp');
		$tax_rate = Request::Input('tax_rate');
		$ent_ctrl = Request::Input('ent_ctrl');
		$dsgrp_type = Request::Input('dsgrp_type');
		$sale_type = Request::Input('sale_type');
		$ret_type = Request::Input('ret_type');
		$modified = date('Y-m-d H:i:s');

		
		$entity_code = $request->Input('entity_code');
		$cos_no = $request->Input('cos_no');
		$entity_tname = $request->Input('entity_tname');
		$entity_ename = $request->Input('entity_ename');
		$cust_grp = $request->Input('cust_grp');
		$tax_rate = $request->Input('tax_rate');
		$ent_ctrl = $request->Input('ent_ctrl');
		$dsgrp_type = $request->Input('dsgrp_type');
		$sale_type = $request->Input('sale_type');
		$ret_type = $request->Input('ret_type');
		$modified = date('Y-m-d H:i:s');*?

		$entity = Entity::create( 
			array(
				'entity_code' 	=> $entity_code,
				'entity_tname' => $entity_tname,
				'cos_no'	=>$cos_no ,
				'entity_ename'	=> $entity_ename ,
				'cust_grp' 	=> $cust_grp ,
				'tax_rate' 	=> $tax_rate ,
				'ent_ctrl' 	=> $ent_ctrl ,
				'dsgrp_type' 	=> $dsgrp_type ,
				'sale_type' 	=> $sale_type ,
				'ret_type' 	=> $ret_type ,
				'upd_by'	=> 'Admin'
				/*'updated_at'	=> $modified,
				'created_at'	=> $modified*/
			//)

		//);

		/*
			$entity = new Entity;
			$entity -> entity_code = $entity_code;
			$entity -> entity_tnamae = $enitty_tname;

			$entity->save();
		*/
	}


	// ---------------------------  Doc Mast ---------------------------//

	public function getDocmast()
	{
		//return "Ok";

		return view('sales.show_docmast');
	}

	public function getAdddocmast()
	{
		//return "Ok";

		return view('sales.add_docmast');
	}

	// ---------------------------  Wh Mast ---------------------------//

	public function getWhmast()
	{
		//return "Ok";

		return view('sales.show_whmast');
	}

	public function getAddwhmast()
	{
		//return "Ok";

		return view('sales.add_whmast');
	}

	// ---------------------------  PC ---------------------------//

	public function getPc()
	{
		//return "Ok";

		return view('sales.show_pc');
	}

	public function getAddpc()
	{
		//return "Ok";

		return view('sales.add_pc');
	}

	public function getPcwork()
	{
		//return "Ok";

		return view('sales.show_pcwork');
	}

	public function getAddpcwork()
	{
		//return "Ok";

		return view('sales.add_pcwork');
	}

	public function getAddpctime()
	{
		//return "Ok";

		return view('sales.add_pctime');
	}


	// --------------------------- Commission & Incentive -----------------------//
	public function getCommission()
	{
		//return "Ok";

		return view('sales.show_commission');
	}

	public function getIncentive()
	{
		//return "Ok";

		return view('sales.show_incentive');
	}

	// ---------------------------  Customer ---------------------------//

	public function getAddcustomer()
	{
		//return "Ok";

		return view('sales.add_customer');
	}

	// ---------------------------  Sales ---------------------------//

	public function getAddsales()
	{
		//return "Ok";

		return view('sales.add_sales');
	}

	public function getAddreturn()
	{
		//return "Ok";

		return view('sales.add_return');
	}

	public function getAddremand()
	{
		//return "Ok";

		return view('sales.add_remand');
	}

	public function getAddcustorder()
	{
		//return "Ok";

		return view('sales.add_custorder');
	}

	

}
