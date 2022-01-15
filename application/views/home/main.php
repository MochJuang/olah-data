<div class="container my-3">
	<form action="<?php echo base_url('home/import_data') ?>" id="form-input" method="post">
		<div class="row">
			<div class="col-12 col-md-6 mt-4 mt-md-0">
				<input type="text" name="name" placeholder="Nama Data" class="form-control form-control-lg">		
			</div>
			<div class="col-12 col-md-6 mt-4 mt-md-0">
				
				<input type="file" name="file" id="form-import" class="form-control form-control-lg">
			</div>
			<div class="col-12 mt-4 ">
				<button type="submit" id="import-button" style="display: block;" class="btn btn-success btn-lg w-100 disabled">
					Upload File
				</button>
			</div>
		</div>
	</form>
	<div id="hasil" class="row mt-3">
	</div>
</div>

<script>
	// alert('test')
	$(document).ready(function() {
		//alert('test')

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
		const btnImport = $('#import-button')
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
					Upload File
				`)
				if(result.status == 200){
					$('#hasil').html(`
						<div class="alert alert-success text-center" role="alert">
							<div class="row">
								<div class="col">
									<i class="fa fa-check fa-6x"></i>					
								</div>
							</div>
							<div class="row">
								<div class="col">
								  <h3>Success Importing Data </h3>
								</div>
							</div>
						</div>				
					`)
				}
			}
		});
	});
</script>