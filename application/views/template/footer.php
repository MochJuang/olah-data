
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>