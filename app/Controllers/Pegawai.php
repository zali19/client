<?php namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\ModelPegawai;

class Pegawai extends BaseController
{
	use ResponseTrait;

	function __construct()
	{
		$this->model = new ModelPegawai();
	}

	public function index()
	{
		return view('welcome_message');
	}

	public function create()
	{
		$data = [
				'nama'  => $this->request->getVar('nama'),
				'email' => $this->request->getVar('email'),
		];

		$this->model->save($data);

		$response = [
				'status' => 201,
				'error'  => null,
				'message'=> [
				'sucsses' => ' berhasil input data'
				]
		];

		return $this->respond($response);
	}


	//--------------------------------------------------------------------

}
