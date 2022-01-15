<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header', $data);
		$this->load->view('home/main');		
		$this->load->view('template/footer', $data);		
	}
	public function get_olah_data()
	{
		$data = $this->db->get('data')->result();
		echo json_encode($data);
	}
	public function detail($type, $data_id)
	{
		$this->load->view('template/header');
		if ($type == 'Simpanan') {
				$this->load->view('home/detail');	
		}	
		else if ($type == 'Simpanan') {
				$this->load->view('home/detail');	
		}	
		$this->load->view('template/footer');	
	}
	public function pengolahan()
	{
		$data['css'] = [
			'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css',
			'https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css'
		];
		$data['js'] = [
			'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js',
			'https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js'
		];

		$this->load->view('template/header', $data);
		$this->load->view('home/data');		
		$this->load->view('template/footer', $data);		
	}

	public function import_data()
	{
        $tgl_sekarang = date('YmdHis'); 
        $nama_file_baru = 'data' . $tgl_sekarang . '.xlsx';
        if (file_exists('tmp/' . $nama_file_baru)){
            unlink('tmp/' . $nama_file_baru); // Hapus file tersebut
	    }
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
        $tmp_file = $_FILES['file']['tmp_name'];
        if ($ext == "xlsx") {

        	move_uploaded_file($tmp_file, 'tmp/' . $nama_file_baru);

        	$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
	        $spreadsheet = $reader->load('tmp/' . $nama_file_baru);

	        // sheet DI319 Data Simpnan
	        $dataSimpanan = $spreadsheet->getSheetByName('DI319 PN PENGELOLAH')->toArray(null, true, true, true);

	        $dataPinjaman = $spreadsheet->getSheetByName('LW321 PN PENGELOLAH')->toArray(null, true, true, true);
        		
        	$this->db->insert('data', [ 
        		'nama_data' => $_POST['name'],
        		'nama_file' => $nama_file_baru
        	]);
		    $insert_id = $this->db->insert_id();
		    // dd($insert_id);die;


        	$arraySimpanan = prosesDataSimpanan($dataSimpanan, $insert_id);
        	$arrayPinjaman = prosesDataPinjaman($dataPinjaman, $insert_id);

		    $this->db->insert_batch('data_pinjaman', $arrayPinjaman);
		    $this->db->insert_batch('data_simpanan', $arraySimpanan);
		    echo json_encode(['status' => 200, 'data_id' => $insert_id]);
        }
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */