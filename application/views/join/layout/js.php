<script>
$(document).ready(function(){
  $("input[name='join_amount']").click(function(){
    var checkbox = $(this).val();
    if(checkbox == 1){
      $('#label').html('Subscription for 1 Year');
      $('#price').html('₹200/-');
      $('#subtotal').html('₹200/-');
      $('#subtotal').html('₹200/-');
      $('#join_amount').val('1');
    }else {
      $('#label').html('Subscription for 3 Year');
      $('#price').html('₹500/-');
      $('#subtotal').html('₹500/- only');
      $('#join_amount').val('2');
    }
  });
});

</script>
