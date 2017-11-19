<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>{{$title or 'Painel'}}</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/layout.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/painel/css/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/font-awesome/css/font-awesome.min.css')}}">
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col menu_fixed">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="" class="site_title"><i class="fa fa-paw"></i> <span>Projeto WEB</span></a>
						</div>
						<div class="clearfix"></div>
						<!-- menu profile quick info -->
						<div class="profile clearfix">
							<div class="profile_pic">
								<img src="" alt="..." class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>Bem Vindo,</span>
								<h2>{{auth()->user()->name}}</h2>
							</div>
						</div>
						<!-- /menu profile quick info -->
						<br />