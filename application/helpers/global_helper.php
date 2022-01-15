<?php 


function dd($v){
	echo "<pre>";
	print_r($v);
	echo "</pre>";
}

function prosesDataSimpanan($data, $data_id)
{
	$rows = [];

	foreach ($data as $key => $r) {
		if ($key == 0) {
			continue;
		}
		$rows[] = [
			'data_id' => $data_id,
			'periode' => $r['A'],
			'uker_code' => $r['B'],
			'curr_code' => $r['C'],
			'curr_desc' => $r['D'],
			'ciff_no' => $r['E'],
			'account_number' => $r['F'],
			'short_name' => $r['G'],
			'officer_name' => $r['H'],
			'dlt' => $r['I'],
			'open_dt' => $r['J'],
			'balance' => $r['K'],
			'available_balance' => $r['L'],
			'int_credit' => $r['M'],
			'accrued_int' => $r['N'],
			'average_balance' => $r['O'],
			'prod_code' => $r['P'],
			'pn_pengelola' => $r['Q'],
			'nama_pengelola' => $r['R']
		];
	}
	return $rows;
}

function prosesDataPinjaman($data, $data_id)
{
	$rows = [];
	foreach ($data as $key => $r) {
		if ($key == 0) {
			continue;
		}
		$rows[] = [
			'data_id' => $data_id,
			'periode' => $r['A'],	
			'region' => $r['B'],	
			'main_Branch' => $r['C'], 	
			'branch' => $r['D'],	
			'currency' => $r['E'],	
			'nama_ao' => $r['F'],	
			'ln_type' => $r['G'],	
			'nomor_rekening' => $r['H'],	
			'nama_debitur' => $r['I'],	
			'alamat_identitas' => $r['J'],	
			'kode_pos1' => $r['K'],	
			'alamat_kantor' => $r['L'],	
			'kode_pos2' => $r['M'],	
			'plafond' => $r['N'],	
			'next_pmt_date' => $r['O'],	
			'next_int_pmt_date' => $r['P'],	
			'rate' => $r['Q'],	
			'tgl_Menunggak' => $r['R'],	
			'tgl_realisasi' => $r['S'],	
			'tgl_jatuh_tempo' => $r['T'],	
			'jangka_Waktu' => $r['U'],	
			'flag_restruk' => $r['V'],	
			'cifno' => $r['W'],	
			'kolektibilitas_lancar' => $r['X'],	
			'kolektibilitas_dpk' => $r['Y'],	
			'kolektibilitas_kurang_lancar' => $r['Z'],	
			'kolektibilitas_diragukan' => $r['AA'],	
			'kolektibilitas_macet' => $r['AB'],	
			'tunggakan_pokok' => $r['AC'],	
			'tunggakan_bunga' => $r['AD'],	
			'tunggakan_pinalty' => $r['AF'],	
			'pn_pengelola' => $r['AG'],	
			'nama_pengelola' => $r['AH']
		];
	}
	return $rows;
}