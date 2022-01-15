
    <footer id="main-footer" style="    margin-bottom: 0 !important;
    position: absolute;
    bottom: 0;
    width: 100%;" class="text-white align-items-end bg-dark py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-3 text-center text-md-left">
            <a href="<?php echo base_url() ?>">
            	Copyright 2021
              <!-- <img src="img/ilkoom_logo.png" style="height: 60px;" > -->
            </a>
          </div>

      </div>
    </footer>

<?php if (isset($js)): ?>
	<?php foreach ($js as $key => $value): ?>
		<script type="text/javascript" src="<?php echo $value ?>"></script>
	<?php endforeach ?>
<?php endif ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
	const base_url = $('#base_url').val()
</script>
</body>
</html>