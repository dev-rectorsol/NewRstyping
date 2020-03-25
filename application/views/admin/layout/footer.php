<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo base_url()?>/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url()?>/assets/vendors/dataTable/data-table.js"></script>
<script src="<?php echo base_url()?>/assets/vendors/dataTable/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>/assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url()?>/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url()?>/assets/js/off-canvas.js"></script>
<script src="<?php echo base_url()?>/assets/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url()?>/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Text Editer -->
<script type="text/javascript" src="<?php echo base_url()?>/assets/dist/summernote-bs4.js"></script>
<!-- File Upload -->
<script type="text/javascript" src="<?php echo base_url()?>/optimum/plugin/fileuplod/js/index.js"></script>
<!-- Custom js for this page -->
<script src="<?php echo base_url()?>/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script>
  $('.dataTable').DataTable( {
    responsive: true
} );
</script>
<script type="text/javascript">
  $(document).ready(function() {
      $('.summernote').summernote({
        height: 300,
        tabsize: 2
      });
      var i = 1;
      $(document).on('click', '#addLesson', function() {
  
      i++;
      /* Act on the event */
      var html 	= 	'<div id="removeDiv'+i+'" class="row">'+
                        '<div class="col-md-3">'+
                          '<div class="form-group">'+
                            '<label for="mode">Mode</label>'+
                            '<select class="form-control" id="mode" name="modeId[]">'+
                              '<option value="">--Select Mode --</option>'+
                              '<?php foreach ($mode as $value): ?>'+
                             ' <option value="<?php echo $value['id'] ?>"><?php echo $value['mode'] ?></option>'+
                              '<?php endforeach; ?>'+
                            '</select>'+
                          '</div>'+
                          '<div class="form-group">'+
                            '<label for="time" >Time</label>'+
                            '<input type="text" name="time[]" id="time" value="" placeholder="Time in Minute" class="form-control">'+
                          '</div>'+
                        '</div>'+
                        '<div class="col-md-9">'+
                        '<div class="form-group">'+
                            '<label for="Description">Question</label>'+
                            '<textarea id="Description" name="lessonDesc[]" cols="60" rows="10"></textarea>'+
                         '</div>'+
                         '</div>'+
                        '<div >'+
                            '<a id="'+i+'" class="btn btn-danger btn-sm icon-btn ml-2 remove">'+'<i class="mdi mdi-delete"></i>'+'</a>'+
                        '</div>'+
                    '</div>'+'<br/>';
     $('#repeaternew').append(html);

    });
    $(document).on('click', '.remove', function() {
      /* Act on the event */
      var remove_id = $(this).attr("id");
      $('#removeDiv'+remove_id+'').remove();
    });
  });
</script>
</body>
</html>
