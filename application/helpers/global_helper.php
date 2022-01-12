<?php 


function dd($v){
	
	echo "<pre>";
	
	print_r($v);
	
	echo "</pre>";
}

function prosesDataSimpanan($data)
{
	echo "prosesDataSimpanan";
	
	dd($data);
}

function prosesDataPinjaman($data)
{	
	echo "prosesDataPinjaman";
	
	dd($data);
}

