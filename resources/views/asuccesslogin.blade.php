<!-- <!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
welcome admin
</body>
</html> -->

@extends('layouts.index')

@section('title','Manager')

@section('contant')
 
<!-- @section('H_active','active') -->
@section('navbar')

	
	<li class="nav-item "><a href="registerworker" class="nav-link">Rigister worker</a></li>
	<li class="nav-item "><a href="A_make_report" class="nav-link">Make reports</a></li>
	<li class="nav-item "><a href="A_view_report" class="nav-link">View reports</a></li>
	<li class="nav-item "><a href="aloggedout" class="nav-link">Logout</a></li>
	

@endsection

 
<div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/ut1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome in your Pharmacy</h1>
			            <p>Welcome to our Manager.</p>
		
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/bg_3.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome to our Manager</h1>
			            <p>Welcome to our Manager.</p>
			            
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>

	  
	  
@endsection