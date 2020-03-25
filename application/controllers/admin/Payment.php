<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {


  public function __construct(){
      parent::__construct();
  }

  public function paytm()
  {
    $this->load->view('TxnTest');
  }

  public function hello(){
    echo "Hello";
  }

  public function paytmpost($paymet)
  {
  	 header("Pragma: no-cache");
  	 header("Cache-Control: no-cache");
  	 header("Expires: 0");

  	 // following files need to be included
  	 require_once(APPPATH . "/third_party/lib/config_paytm.php");
  	 require_once(APPPATH . "/third_party/lib/encdec_paytm.php");

  	 $checkSum = "";
  	 $paramList = array();

  	 $ORDER_ID = $paymet["ORDER_ID"];
  	 $CUST_ID = $paymet["CUST_ID"];
  	 $INDUSTRY_TYPE_ID = $paymet["INDUSTRY_TYPE_ID"];
  	 $CHANNEL_ID = $paymet["CHANNEL_ID"];
  	 $TXN_AMOUNT = $paymet["TXN_AMOUNT"];

  	// Create an array having all required parameters for creating checksum.
  	 $paramList["MID"] = 'yioOAF79378836826087';
  	 $paramList["ORDER_ID"] = $ORDER_ID;
  	 $paramList["CUST_ID"] = $CUST_ID;
  	 $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
  	 $paramList["CHANNEL_ID"] = $CHANNEL_ID;
  	 $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
  	 $paramList["WEBSITE"] = 'dineoutWEB';

  	 /*
  	 $paramList["MSISDN"] = $MSISDN; //Mobile number of customer
  	 $paramList["EMAIL"] = $EMAIL; //Email ID of customer
  	 $paramList["VERIFIED_BY"] = "EMAIL"; //
  	 $paramList["IS_USER_VERIFIED"] = "YES"; //

  	 */

  	//Here checksum string will return by getChecksumFromArray() function.
  	 $checkSum = getChecksumFromArray($paramList,'_fATwFSmd95qsU&3');
  	 echo "<html>
  	<head>
  	<title>Merchant Check Out Page</title>
  	</head>
  	<body>
  	    <center><h1>Please do not refresh this page...</h1></center>
  	        <form method='post' action='"."https://securegw-stage.paytm.in/order/process"."' name='f1'>
  	<table border='1'>
  	 <tbody>";

  	 foreach($paramList as $name => $value) {
  	 echo '<input type="hidden" name="' . $name .'" value="' . $value .         '">';
  	 }

  	 echo "<input type='hidden' name='CHECKSUMHASH' value='". $checkSum . "'>
  	 </tbody>
  	</table>
  	<script type='text/javascript'>
  	 document.f1.submit();
  	</script>
  	</form>
  	</body>
  	</html>";
   }
 }
 ?>
