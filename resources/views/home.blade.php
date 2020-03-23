@extends('layouts.index')

@section('title','Home page')

@section('contant')
 
@section('H_active','active')

 
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/ut1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
			            <h1 class="mb-4">Welcome to our Worker</h1>
			            <p>Welcome to our Worker, you can login from this..</p>
			            <p><a href="#" class="btn btn-primary">Worker login</a></p><!--put worker login page link here -->
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
			             <p><a href="#" class="btn btn-primary">Admin login</a></p><!--put admin login page link here -->
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
@endsection
