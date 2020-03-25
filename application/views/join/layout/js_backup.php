<script type="text/javascript">
$(function(){
  $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        labels: {
            finish: "Submit",
            next: "Forward",
            previous: "Backward"
        }
    });
    $('.wizard > .steps li a').click(function(){
      $(this).parent().addClass('checked');
    $(this).parent().prevAll().addClass('checked');
    $(this).parent().nextAll().removeClass('checked');
    });
    // Custome Jquery Step Button
    $('.forward').click(function(){
      $("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Select Dropdown
    $('html').click(function() {
        $('.select .dropdown').hide();
    });
    $('.select').click(function(event){
        event.stopPropagation();
    });
    $('.select .select-control').click(function(){
        $(this).parent().next().toggle();
    })
    $('.select .dropdown li').click(function(){
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })
// Create by omie

$('.whoyou').click(function(){
  $('.whoyou').removeClass('active');
  $(this).addClass('active');
  var whoyou = $(this).val();
  $.ajax({
     url: "<?php echo base_url('media/join/whoyou') ?>",
     type: "POST",
     data: {whoyou : whoyou, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
     cache: false,
     success: function(data){
        console.log(data);
     }
    })
  // $("#wizard").steps('next');
})
$('.js-example-basic-single').select2();



})

</script>
