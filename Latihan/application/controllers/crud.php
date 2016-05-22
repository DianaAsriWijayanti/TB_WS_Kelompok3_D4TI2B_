<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['thread'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$jurusan = $this->input->post('jurusan');
 		$pesan = $this->input->post('pesan');
		
		$data = array(
			'nama' => $nama,
			'npm' => $npm,
			'jurusan' => $jurusan,
			'pesan' => $pesan

			);
		$this->m_data->input_data($data,'thread');
		redirect('crud/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'thread');
		redirect('crud/index');
	}
	function edit($id){
		$where = array('id' => $id);
		$data['thread'] = $this->m_data->edit_data($where,'thread')->result();
		$this->load->view('v_edit',$data);
	}


function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$npm = $this->input->post('npm');
	$jurusan = $this->input->post('jurusan');
	$pesan = $this->input->post('pesan');

	$data = array(
		'nama' => $nama,
		'npm' => $npm,
		'jurusan' => $jurusan,
		'pesan' => $pesan
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'thread');
	redirect('crud/index');
	}

}