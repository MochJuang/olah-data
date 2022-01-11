<div class="container my-3">
	<div class="input-group">
		<input type="file" class="form-control">
		<div class="input-group-addon">
			<button id="import-button" class="btn btn-success disabled">
				<i class="fa fa-check"></i>
			</button>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col table-responsive">
			<table class="table table-sm table-striped" id="table-data">
				<thead>
					<tr>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>dfdasfasdfasdfads</th>
						<th>Name</th>
						<th>No</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function($) {

		$('#table-data').DataTable();

		$(document).on('change', '#form-import', function(event) {
			event.preventDefault();
			const btnImport = $('#import-button')

			if ($(this).val()) {
				btnImport.removeClass('disabled')
			}else{
				if(btnImport.hasClass('disabled')){
					btnImport.removeClass('disabled')
				}
			}



		});
	});

	$(document).on('click', '#import-button', function(event) {
		event.preventDefault();
		if(btnImport.hasClass('disabled')){
			return ;
		}
	});
</script>