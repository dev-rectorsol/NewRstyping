<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>Rstyping Test</title>
    <link href="<?php echo base_url(); ?>optimum/ports/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>optimum/ports/css/style.css" rel="stylesheet"/>
    <script src="<?php echo base_url()?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo base_url()?>/optimum/ports/js/base64.js"></script>
    <?php include('typescript.php'); ?>
<style>

@font-face {
  font-family: 'Mangal-Regular';
  src: url('<?php echo base_url("optimum/ports/fonts/mangal/Mangal-Regular.eot") ?>?#iefix') format('embedded-opentype'),
  url('<?php echo base_url("optimum/ports/fonts/mangal/Mangal-Regular.woff") ?>') format('woff'),
  url('<?php echo base_url("optimum/ports/fonts/mangal/Mangal-Regular.ttf") ?>')  format('truetype'),
  url('<?php echo base_url("optimum/ports/fonts/mangal/Mangal-Regular.svg") ?>#Mangal-Regular') format('svg');
  font-weight: normal;
  font-style: normal;
}




        	@font-face {
				    font-family: 'kruti_dev_016thin';
				    src: url('<?php echo base_url("optimum/ports/fonts/kruti_dev_016-webfont.woff2") ?>') format('woff2'),
				         url('<?php echo base_url("optimum/ports/fonts/kruti_dev_016-webfont.woff") ?>') format('woff');
				    font-weight: normal;
				    font-style: normal;

          }

          .kruti_dev{
            font-family: 'kruti_dev_016thin';
          }
          .mangal{
            font-family: 'Mangal-Regular' !important;
          }
        </style>
  </head>
  <body onload="addWords()">
    <header>
      <h3>Rstyping Test</h3>
    </header>
