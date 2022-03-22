<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>UpTime Admin</title>

  <!-- Favicons -->
  <link href="<?php echo base_url('assetes/img/favicon.png');?>" rel="icon">
  <link href="<?php echo base_url('assetes/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assetes/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url('assetes/lib/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assetes/css/zabuto_calendar.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assetes/lib/gritter/css/jquery.gritter.css');?>" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assetes/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assetes/css/style-responsive.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assetes/lib/chart-master/Chart.js');?>"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<body>
<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>UP<span>TIME</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <!-- notification dropdown start-->
          
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url('registerController/logout');?>">Logout</a></li>
        </ul>
      </div>
    </header>