@extends('layouts.index')

@section('title','Home page')

@section('contant')
 
<!-- @section('H_active','active') -->
@section('navbar')

	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	<li class="nav-item "><a href="alogin" class="nav-link">Admin login</a></li>
	<li class="nav-item "><a href="wlogin" class="nav-link">Team login</a></li>
	<li class="nav-item "><a href="gallery" class="nav-link">Gallery</a></li>
	<li class="nav-item "><a href="contact" class="nav-link">Contact</a></li>

@endsection

 
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/ut1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome to our Worker</h1>
			            <p>Welcome to our Worker, you can login from this.</p>
			            <p><a href="wlogin" class="btn btn-primary">Worker login</a></p><!--put worker login page link here -->
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
			            <p>Welcome to our Manager, you can login from this.</p>
			             <p><a href="alogin" class="btn btn-primary">Admin login</a></p><!--put admin login page link here -->
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
@endsection
