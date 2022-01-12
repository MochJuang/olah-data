<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		if($_FILES['file']['error'] > 0){
			echo "error code".$_FILES['file']['error']."<br>";
		}
		// $res = file_exists(base_url().'tmp/' . $nama_file_baru);
		// var_dump($res);
		// die;
		if (file_exists(base_url().'tmp/' . $nama_file_baru)){
			unlink(base_url().'tmp/' . $nama_file_baru); // Hapus file tersebut
		}
		$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
		$tmp_file = $_FILES['file']['tmp_name'];
		// dd($tmp_file);
		// die;
		if ($ext == "xlsx") {
			// $destination_path = getcwd().DIRECTORY_SEPARATOR;
			// $target_path = $destination_path . 'images/'. basename( $_FILES["profpic"]["name"]);
			// move_uploaded_file($_FILES['profpic']['tmp_name'], $target_path);

			move_uploaded_file(base_url($tmp_file),'tmp/' . $nama_file_baru);

			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load(base_url().'tmp/' . $nama_file_baru);

			// sheet DI319 Data Simpnan
			dd($spreadsheet);	
			$dataSimpanan = $spreadsheet->getSheetByName('DI319 PN PENGELOLAH')->toArray(null, true, true, true);

			$dataPinjaman = $spreadsheet->getSheetByName('LW321 PN PENGELOLAH')->toArray(null, true, true, true);
			
			prosesDataSimpanan($dataSimpanan);
			prosesDataPinjaman($dataPinjaman);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */