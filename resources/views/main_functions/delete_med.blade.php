@extends('layouts.index')

@section('title','Worker')

@section('contant')
 
<!-- @section('H_active','active') -->
@section('navbar')
	
	<li class="nav-item "><a href="add_med" class="nav-link">Add medicine</a></li>
	<li class="nav-item active"><a href="delete_med" class="nav-link">Delete medicine</a></li>
	<li class="nav-item "><a href="update_med" class="nav-link">Update medicine</a></li>
	<li class="nav-item "><a href="sale_med" class="nav-link">Sale medicine</a></li>
  <li class="nav-item "><a href="show_med" class="nav-link">Show medicine</a></li>
	<li class="nav-item "><a href="Worker_report" class="nav-link">Make/View reports</a></li>
	<li class="nav-item "><a href="wloggedout" class="nav-link">Logout</a></li>
	
@endsection

<style>
/* ==========================================================================
   #FONT
   ========================================================================== */
   .font-robo {
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
}

/* ==========================================================================
   #BOX-SIZING
   ========================================================================== */

html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

* {
  padding: 0;
  margin: 0;
}

*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
}

/* ==========================================================================
   #PAGE WRAPPER
   ========================================================================== */
.page-wrapper {
  min-height: 100vh;
}

body {
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
  font-weight: 400;
  font-size: 14px;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 400;
}

/* ==========================================================================
   #BACKGROUND
   ========================================================================== */
.bg-blue {
  background: #2c6ed5;
}
.bg-gra-01 {
  background: -webkit-gradient(linear, left bottom, right top, from(#fbc2eb), to(#a18cd1));
  background: -webkit-linear-gradient(bottom left, #fbc2eb 0%, #a18cd1 100%);
  background: -moz-linear-gradient(bottom left, #fbc2eb 0%, #a18cd1 100%);
  background: -o-linear-gradient(bottom left, #fbc2eb 0%, #a18cd1 100%);
  background: linear-gradient(to top right, #fbc2eb 0%, #a18cd1 100%);
}

.bg-red {
  background: #fa4251;
}
/* ==========================================================================
   #SPACING
   ========================================================================== */
.p-t-100 {
  padding-top: 100px;
}

.p-t-20 {
  padding-top: 20px;
}

.p-b-100 {
  padding-bottom: 100px;
}

/* ==========================================================================
   #WRAPPER
   ========================================================================== */
.wrapper {
  margin: 0 auto;
}

.wrapper--w680 {
  max-width: 680px;
}

/* ==========================================================================
   #BUTTON
   ========================================================================== */
.btn {
  line-height: 40px;
  display: inline-block;
  padding: 0 25px;
  cursor: pointer;
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
  color: #fff;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  font-size: 14px;
  font-weight: 700;
}

.btn--radius {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.btn--red {
    background: #ff4b5a; 
    
  }

  .btn--red:hover {
    background: #eb3746;
  }

/* ==========================================================================
   #FORM
   ========================================================================== */
input {
  outline: none;
  margin: 0;
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  width: 100%;
  font-size: 14px;
  font-family: inherit;
}

.input-group {
  position: relative;
  margin-bottom: 30px;
  border-bottom: 2px solid #ccc;
}

.input-icon {
  position: absolute;
  font-size: 18px;
  color: #ccc;
  right: 8px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  cursor: pointer;
}

.input--style-1 {
  padding: 9px 0;
  color: #666;
}

.input--style-1::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #555;
}

.input--style-1:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #555;
  opacity: 1;
}

.input--style-1::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #555;
  opacity: 1;
}

.input--style-1:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #555;
}

.input--style-1:-ms-input-placeholder {
  /* Microsoft Edge */
  color: #555;
}

/* ==========================================================================
   #TITLE
   ========================================================================== */
.title {
  margin-bottom: 37px;
}

/* ==========================================================================
   #CARD
   ========================================================================== */

.card-1 .card-heading {
  background: url("images/Untitled-2.jpg") center center/cover no-repeat;
  padding-top: 210px;
}

.card-1 .card-body {
  padding: 0 90px;
  padding-top: 55px;
  padding-bottom: 65px;
}

@media (max-width: 767px) {
  .card-1 .card-body {
    padding: 0 40px;
    padding-top: 40px;
    padding-bottom: 40px;
  }
}
</style>


<div class="page-wrapper bg-gra-01 p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Delete Medicine</h2>
                    <form action="delete_med" method="POST">

                      @csrf
                      
                        <div class="input-group">
                            <input class="input--style-1" type="int" placeholder="Add medicine Id" name="id">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--red" type="submit">Delete</button>
                        </div>
                    </form>
                    <div class="name">
                                                @if(count($errors)>0)
                                                @foreach ($errors->all() as $error)
                                                    <ul> {{$error}}  </ul>
                                                @endforeach
                                                @endif
                                               <div> <p> {{ $statues ?? '' }}</p> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	
@endsection