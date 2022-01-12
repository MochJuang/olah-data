<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Home extends CI_Controller {

	public function index()
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
		$this->load->view('home/main');		
		$this->load->view('template/footer', $data);		
	}

	public function import_data()
	{
		dd($_FILES);
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
        	
        	$arraySimpanan = prosesDataSimpanan($dataSimpanan);
        	dd($arraySimpanan);
        	$arrayPinjaman = prosesDataPinjaman($dataPinjaman);
        	dd($arrayPinjaman);

        }
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */