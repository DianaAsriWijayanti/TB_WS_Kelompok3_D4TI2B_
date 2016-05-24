<?php
defined('BASEPATH') OR exit("No direct script access allowed");

class Api extends CI_Controller {
	function __construct(){
		parent::__construct();
		// Load model m_api.php
		$this->load->model('m_api');

		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
	}	

	public function index(){
		$data_index = array(
			'name'		=> '',
			'website'	=> ''
		);
		echo json_encode($data_index);
	}

	public function get() {
		$get = $this->api_model->ambilSemua();

		if(!empty($get)){
			foreach ($get as $kolom) {
				// data array from database
				$json[] = array(
					'id'  		=> $kolom['id'],
					'nama'		=> $kolom['nama'],
					'npm'		=> $kolom['npm'],
					'jurusan'	=> $kolom['jurusan'],
					'pesan'		=> $kolom['pesan'])
				);
			}
		}else{
			$json = array();
		}

		echo json_encode($json);
	}

	public function ambilSatu(){
		$id = $this->input->get('id');

		if(!empty($id)){
			$kolom = array(
				'id' = $id
			);

			$ambil = $this->api_model->ambilSatu($kolom);
			$json = array(
				'id'		=> $ambil['id'],
				'nama'		=> $ambil['nama'],
				'npm'		=> $ambil['npm'],
				'jurusan'	=> $ambil['jurusan'],
				'pesan'		=> $ambil['pesan'])
			);
		}else{
			$json = array();
		}

		echo json_encode($json);
	}

	public function simpan(){
		$postdata = file_get_contents("php://input");

		$dataObjek = json_decode($postdata);

		@$nama = $dataObjek->data->nama;
		@$npm  = $dataObjek->data->npm;
		@$jurusan = $dataObjek->data->jurusan;
		@$pesan = $pesan->data->pesan;

		if(!empty($nama)){
			$input = array(
				'nama'		=> $nama,
				'npm'		=> $npm,
				'jurusan'	=> $jurusan,
				'pesan'		=> $pesan

				);
			$simpan = $this->api_model->simpan($input);
			if($simpan){
				$json['status'] = 1;
			}else{
				$json['status'] = 0;
			}

			echo json_encode($json);
		}

	}

	public function edit(){
		$postdata = file_get_contents("php://input");
		$dataObjek = json_decode($postdata);

		@$id = $dataObjek->data->id;
		@$nama = $dataObjek->data->nama;
		@$npm = $dataObjek->data->npm;
		@$jurusan = $dataObjek->data->jurusan;
		@$pesan = $dataObjek->data->pesan;

		if(!empty($nama)){
			$input = array(
				'nama' 	=> $nama,
				'npm' 	=> $npm,
				'jurusan'	=> $jurusan,
				'pesan'	=> $pesan

				);
			//primary key table thread

			$pk['id'] = $id;

			$simpan = $this->api_model->edit($input,$pk);
			if($simpan){
				$json['status'] = 1;

			}else{
				$json['status'] = 0;
			}

			echo json_encode($json);
		}

	}

	public function hapus(){
		@$id= $this->input->get('id');
		if(!empty($id)){
			$pk['id'] = $id;

			$hapus = $this->api_model->hapus($pk);
			if($hapus){
				$json['status'] = 1;
			}else{
				$json['status'] = 0;
			}
		}

		echo json_encode($json);
	}

}