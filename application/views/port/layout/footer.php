<footer>
	© <script>document.write(new Date().getFullYear())</script>
	<a href="<?php echo base_url(); ?>">Rstyping.com</a>
</footer>
</body>
<script src="<?php echo base_url(); ?>optimum/ports/js/jquery.min.js"></script>
<script>
	function paragraph(paraId)
	{
		var testTime = jQuery('#testTime').val();
		var modeId = jQuery('#modeId').val();
		var courseId = jQuery('#courseId').html();
		// alert(modeId); stop();
		window.location="<?php echo base_url()?>post/test/paraByCourse/"+testTime+"/"+paraId+"/"+courseId+"/"+modeId;
	}

	function kurtidev(paraId)
	{
		var testTime = jQuery('#testTime').val();
		var modeId = jQuery('#modeId').val();
		var courseId = jQuery('#courseId').html();
		// alert(modeId); stop();
		window.location="<?php echo base_url()?>post/test/kdParaByCour/"+testTime+"/"+paraId+"/"+courseId+"/"+modeId;
	}

	function language(lang)
	{
		var duration = jQuery('#duration').html();
		var courseId = jQuery('#courseId').html();
		// alert(duration); stop();
		if (lang == 'english') {
			window.location="<?php echo base_url()?>post/test/index/"+courseId;
		}
		if (lang == 'kruti_dev') {
			window.location="<?php echo base_url()?>post/test/krutiDev/"+courseId;
		}
		if (lang == 'mangal_regular') {
			window.location="<?php echo base_url()?>post/test/mangal/"+courseId;
		}
		
	}
</script>
</html>