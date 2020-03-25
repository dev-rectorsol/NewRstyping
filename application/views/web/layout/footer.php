<!-- JS
    ============================================ -->

<!-- jQuery JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/bootstrap.min.js"></script>
<!-- jquery Waypoints JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/jquery-waypoints.js"></script>
<!-- jquery Appear JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/jquery.appear.js"></script>
<!-- Numinate JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/numinate.min.js"></script>
<!-- Slick JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/slick.min.js"></script>
<!-- PrettyPhoto JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/jquery.prettyPhoto.js"></script>
<!-- Circle Progress JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/circle-progress.js"></script>
<!-- Event Move JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/jquery.event.move.js"></script>
<!-- Twentytwenty JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/jquery.twentytwenty.js"></script>
<!-- Scripts JS -->
<script src="<?php echo base_url('optimum/web/'); ?>js/scripts.js"></script>
<!-- cdn for sweet js -->
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<script>
	<?php if ($this->session->flashdata('success')): ?>
    setTimeout(function(){
      swal("Success", "<?php echo $this->session->flashdata('success'); ?>", "success");
  }, 500);

<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>

    setTimeout(function(){
      swal("Sorry", "<?php echo $this->session->flashdata('error'); ?>", "error");
    }, 500);

<?php endif; ?>
</script>
</body>
</html>
