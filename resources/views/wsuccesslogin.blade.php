<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
welcome worker
</body>
</html> -->


@extends('layouts.index')

@section('title','Worker')

@section('contant')
 
<!-- @section('H_active','active') -->
@section('navbar')

	
	<li class="nav-item "><a href="add_med" class="nav-link" >Add medicine</a></li>
	<li class="nav-item "><a href="delete_med" class="nav-link">Delete medicine</a></li>
	<li class="nav-item "><a href="update_med" class="nav-link">Update medicine</a></li>
	<li class="nav-item "><a href="sale_med" class="nav-link">Sale medicine</a></li>
	<li class="nav-item "><a href="show_med" class="nav-link">Show medicine</a></li>
	<li class="nav-item "><a href="#" class="nav-link">Make/View reports</a></li>
	<li class="nav-item "><a href="wloggedout" class="nav-link">Logout</a></li>
	
	

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
			            <p>Welcome to our Worker.</p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/Background.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome to our Worker</h1>
			            <p>We will help you.</p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>

	  
	  
@endsection