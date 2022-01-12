<div class="container my-3">
	<form action="<?php echo base_url('home/import_data') ?>" id="form-input" method="post">
		<div class="input-group">
			<input type="file" name="file" id="form-import" class="form-control">
			<div class="input-group-addon">
				<button type="submit" id="import-button" class="btn btn-success disabled">
					<i class="fa fa-check"></i>
				</button>
			</div>
		</div>
	</form>

	<div class="row mt-5">
		<div class="col table-responsive">
			<table class="table table-sm table-striped" id="table-data">
				<thead>
					<tr>
						<th>Periode	</th>
						<th>Region	</th>
						<th>Main Branch	</th>
						<th>Branch	</th>
						<th>Currency	</th>
						<th>Nama AO	</th>
						<th>LN Type	</th>
						<th>CIFNO	</th>
						<th>Nomor rekening	</th>
						<th>simpedes	</th>
						<th>tabunganku	</th>
						<th>Nama Debitur	</th>
						<th>Alamat Identitas	</th>
						<th>Kode Pos	Alamat Kantor	</th>
						<th>Kode Pos	</th>
						<th>Plafond	</th>
						<th>Next Pmt Date	</th>
						<th>tgl	</th>
						<th>bln	</th>
						<th>thn	</th>
						<th>Next Int Pmt Date	</th>
						<th>Rate	</th>
						<th>Tgl Menunggak	</th>
						<th>Tgl Realisasi	</th>
						<th>Tgl Jatuh tempo	</th>
						<th>Jangka Waktu	</th>
						<th>Flag Restruk	</th>
						<th>Kolektibilitas Lancar	</th>
						<th>Kolektibilitas DPK	</th>
						<th>Kolektibilitas Kurang Lancar	</th>
						<th>Kolektibilitas Diragukan	</th>
						<th>Kolektibilitas Macet	</th>
						<th>Baki debet	</th>
						<th>Tunggakan Pokok	</th>
						<th>Tunggakan Bunga	</th>
						<th>Tunggakan Pinalty	</th>
						<th>saldo 1	</th>
						<th>saldo 2	</th>
						<th>tabunganku	</th>
						<th>=/- saldo 1 	</th>
						<th>=/- saldo 2	</th>
						<th>+/- tabunganku	</th>
						<th>PN   PENGELOLA	</th>
						<th>NAMA  PENGELOLA </th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<script>
	// alert('test')
	$(document).ready(function() {
		//alert('test')
		$('#table-data').DataTable();

		$(document).on('change', '#form-import', function(event) {
			event.preventDefault();
			const btnImport = $('#import-button')
			console.log($(this))
			if ($(this).val()) {
				btnImport.removeClass('disabled')
			}else{
				if(btnImport.hasClass('disabled')){
					btnImport.removeClass('disabled')
				}
			}



		});
	});

	$(document).on('submit', '#form-input', function(event) {
		event.preventDefault();
		const btnImport = $('#import-botton')
		if(btnImport.hasClass('disabled')){
			return ;
		}

		var data = new FormData(this);
		$.ajax({
			type: 'POST',
			url: "<?php echo base_url('home/import_data') ?>",
			data: data,
			dataType: 'json',
			contentType: false,
			cache: false,
			processData:false,
			beforeSend: function() {
				btnImport.addClass('disabled', true);
				btnImport.html(`
					<div class="spinner-border" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				`)
			}, 
			success: function(result) {
				btnImport.removeClass('disabled');
				btnImport.html(`
					<i class="fa fa-check"></i>
				`)
				console.log(result)
			}
		});
	});
</script>