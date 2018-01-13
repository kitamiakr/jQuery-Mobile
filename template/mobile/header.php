<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<title>[judul]</title>
	<script type="text/javascript">
		try{
			$(function(){

			});
		}catch(error){
			console.error("Your javascript has been an error"+error);
		}
	</script>
</head>
<body>
<div data-role="page" id="pagel">
	<div data-theme="b" data-role="header">
		 <span class="ui-title"></span>
		 <?php if (!$logged_in): ?>
		 	<a data-role="button" data-theme="a" href="<?php echo site_url('user/login')?>" class="ui-btn-right" data-ajax="false"> Masuk</a>
		 <?php else:?>
		 	<a href="<?php echo site_url('user/profile')?>" class="ui-btn-right"> 
		 	Hai , <?php echo $this->session->userdata('username');?></a>

		 <?php endif?>

		 <a href="<?php echo site_url();?>" data-icon="home" data-iconpos="Left" class="ui-btn-left">
		 	Beranda
		 </a>
</div>