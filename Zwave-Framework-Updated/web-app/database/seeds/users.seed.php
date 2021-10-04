<?php

//users::createNew()
Class Users{

	public function __construct(){
		
	}

	public function createNew(){

		insertat('tbl_user', [

			'name'=>'Geet Kr.',
			'company_name'=>'',
			'email' =>'geet@gmail.com',
			'mobile_no' => '',
			'landline' => '',
			'company_description' => '',
			'bd_id' => '10',
			'status' => 'enable',
			'assigned_no_count' => '',
			'max_no_count' => '5',

		]); //insert into tbl_user values(name,company_name,email...) 

		$user_id = last_inserted_id('tbl_user');

		insertat('tbl_login', [

			'auth_id'=>'geet@gmail.com',
			'auth_pass'=>pass_encrypt('zwave@test'),
			'role_id' =>'1',
			'user_id' => $user_id,

		]);

		return "Record Inserted";

	}
}