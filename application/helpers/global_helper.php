<?php 


function dd($v){
	echo "<pre>";
	print_r($v);
	echo "</pre>";
}

function prosesDataSimpanan($data)
{
	$rows = [];

	foreach ($data as $key => $r) {
		$rows[] = [
			'periode' => $r['A'],
			'uker_code' => $r['B'],
			'curr_code' => $r['C'],
			'curr_desc' => $r['D'],
			'ciff_no' => $r['E'],
			'account_number' => $r['F'],
			'short_name' => $r['G'],
			'officer_name' => $r['H'],
			'dlt' => $r['I'],
			'Open_DT' => $r['J'],
			'balance' => $r['K'],
			'available_balance' => $r['L'],
			'int_credit' => $r['M'],
			'accrued_int' => $r['N'],
			'average_balance' => $r['O'],
			'prod_code' => $r['P'],
			'PN_PENGELOLA' => $r['Q'],
			'NAMA_PENGELOLA' => $r['R']
		];
	}
	return $rows;
}

function prosesDataPinjaman($data)
{
	$rows = [];
	foreach ($data as $key => $r) {
		$rows[] = [
			'Periode' => $r['A'],	
			'Region' => $r['B'],	
			'Main_Branch' => $r['C'], 	
			'Branch' => $r['D'],	
			'Currency' => $r['E'],	
			'Nama_AO' => $r['F'],	
			'LN_Type' => $r['G'],	
			'Nomor_rekening' => $r['H'],	
			'Nama_Debitur' => $r['I'],	
			'Alamat_Identitas' => $r['J'],	
			'Kode_Pos' => $r['K'],	
			'Alamat_Kantor' => $r['L'],	
			'Kode_Pos' => $r['M'],	
			'Plafond' => $r['N'],	
			'Next_Pmt_Date' => $r['O'],	
			'Next_Int_Pmt_Date' => $r['P'],	
			'Rate' => $r['Q'],	
			'Tgl_Menunggak' => $r['R'],	
			'Tgl_Realisasi' => $r['S'],	
			'Tgl_Jatuh_tempo' => $r['T'],	
			'Jangka_Waktu' => $r['U'],	
			'Flag_Restruk' => $r['V'],	
			'CIFNO' => $r['W'],	
			'Kolektibilitas_Lancar' => $r['X'],	
			'Kolektibilitas_DPK' => $r['Y'],	
			'Kolektibilitas_Kurang_Lancar' => $r['Z'],	
			'Kolektibilitas_Diragukan' => $r['AA'],	
			'Kolektibilitas_Macet' => $r['AB'],	
			'Tunggakan_Pokok' => $r['AC'],	
			'Tunggakan_Bunga' => $r['AD'],	
			'Tunggakan_Pinalty' => $r['AF'],	
			'PN_PENGELOLA' => $r['AG'],	
			'NAMA_PENGELOLA' => $r['AH']
		];
	}
	return $rows;
}