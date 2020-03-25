<?php
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $system_name; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="<?php echo $system_name ?>">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo base_url('join') ?>/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url('join') ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url('join') ?>/css/form.css">
		<!-- <link rel="stylesheet" href="<?php echo base_url('join') ?>/css/validate.css"> -->
	</head>
	<body>
