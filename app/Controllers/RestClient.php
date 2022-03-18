<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$client = \Config\Services::curlrequest();
		$token  = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6IlJpZHdhbiIsImVtYWlsIjoiUmlkd2FuQGdtYWlsLmNvbSIsImlhdCI6MTY0NzYyMjU2OCwiZXhwIjoxNjQ3NjI2MTY4fQ.LRzc4jqLIbcPGhfbvNnzKboHxB2gWWXMc3lhDLqxolU";
		$url    ="http://localhost/ci4-rest-api/public/stocks";
		$headers = [
			'Authorization' => 'Bearer ' . $token
		];
		$response = $client->request('GET',$url,['headers'=>$headers]);
		print_r($response);
	}

	//--------------------------------------------------------------------

}
