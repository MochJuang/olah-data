<div class="container">
	<div class="row">
		<div class="col">
			<div class="table-responsive mt-4">
				<table class="table table-sm table-striped" id="table-olah">
					<thead>
						<tr>
							<th>Nama Data</th>
							<th>Created At</th>
							<th>Detail</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$(() => {
			var table = $("#table-olah tbody")
		    $.ajax({
		        url:  base_url + 'home/get_olah_data',
		        method: "post",
		        // xhrFields: {
		        //     withCredentials: true
		        // },
		        success: function (data) {
		            table.empty();
		           	let dataJSON = JSON.parse(data)
		           	console.log(dataJSON)
		           	dataJSON.forEach(function(b) {
		           		console.log(b.created_at)
		           		table.append(`
		           			<tr>
		           				<td>${b.nama_data}</td>
		           				<td>${b.created_at}</td>
		           				<td>
		           					<a href="<?php echo base_url() ?>home/detail/Pinjaman/${b.id}" class="btn btn-sm btn-danger">Pinjaman</a>
		           					<a href="<?php echo base_url() ?>home/detail/Simpanan/${b.id}" class="btn btn-sm btn-primary">Simpanan</a>
		           					<a href="<?php echo base_url() ?>home/detail/Pengolahan/${b.id}" class="btn btn-sm btn-success">Pengolahan</a>
		           				</td>
		           			</tr>
		           		`)
		           		
		           	});
		 
		            $("#table-olah").DataTable();
		        }
		    });
		});

	});
</script>
