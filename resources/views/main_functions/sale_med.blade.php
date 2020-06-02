@extends('layouts.index')

@section('title','Worker')

@section('contant')
 
<!-- @section('H_active','active') -->
@section('navbar')
	
	<li class="nav-item "><a href="add_med" class="nav-link">Add medicine</a></li>
	<li class="nav-item "><a href="delete_med" class="nav-link">Delete medicine</a></li>
	<li class="nav-item "><a href="update_med" class="nav-link">Update medicine</a></li>
	<li class="nav-item active"><a href="sale_med" class="nav-link">Sale medicine</a></li>
    <li class="nav-item "><a href="show_med" class="nav-link">Show medicine</a></li>
	<li class="nav-item "><a href="#" class="nav-link">Make/View reports</a></li>
	<li class="nav-item "><a href="wloggedout" class="nav-link">Logout</a></li>
	
@endsection


<style>
/* ==========================================================================
   #FONT
   ========================================================================== */
   .font-robo {
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
}

.font-poppins {
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
}

.font-opensans {
  font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
}
/* ==========================================================================
   #GRID
   ========================================================================== */

.form-row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: 40px;
}

.form-row .name {
  width: 125px;
  color: #555;
  font-size: 15px;
  font-weight: 700;
}

.form-row .value {
  width: -webkit-calc(100% - 125px);
  width: -moz-calc(100% - 125px);
  width: calc(100% - 125px);
}

@media (max-width: 767px) {
  .form-row {
    display: block;
  }
  .form-row .name,
  .form-row .value {
    display: block;
    width: 100%;
  }
  .form-row .name {
    margin-bottom: 7px;
  }
}
/* ==========================================================================
   #PAGE WRAPPER
   ========================================================================== */
.page-wrapper {
  min-height: 100vh;
}

body {
  font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
  font-weight: 400;
  font-size: 14px;
}
/* ==========================================================================
   #BACKGROUND
   ========================================================================== */
   .bg-gra-01 {
  background: -webkit-gradient(linear, left bottom, right top, from(#fbc2eb), to(#a18cd1));
  background: -webkit-linear-gradient(bottom left, #fbc2eb 0%, #a18cd1 100%);
  background: -moz-linear-gradient(bottom left, #fbc2eb 0%, #a18cd1 100%);
  background: -o-linear-gradient(bottom left, #fbc2eb 0%, #a18cd1 100%);
  background: linear-gradient(to top right, #fbc2eb 0%, #a18cd1 100%);
}
/* ==========================================================================
   #SPACING
   ========================================================================== */
.p-t-45 {
  padding-top: 100px;
}
.p-b-50 {
  padding-bottom: 50px;
}
/* ==========================================================================
   #WRAPPER
   ========================================================================== */
.wrapper {
  margin: 0 auto;
}

.wrapper--w790 {
  max-width: 790px;
}
/* ==========================================================================
   #BUTTON
   ========================================================================== */
.btn {
  display: inline-block;
  line-height: 50px;
  padding: 0 50px;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  cursor: pointer;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 700;
  color: #fff;
  font-family: inherit;
  
}

.btn--radius-2 {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.btn--green {
  background: #57b846;
}

.btn--green:hover {
  background: #4dae3c;
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
 .input--style-5 {
  background: #e5e5e5;
  line-height: 50px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  padding: 0 22px;
  font-size: 16px;
   color: #555; 
} 
 .input-group-desc {
   position: relative; 
} 

@media (max-width: 767px) {
  .input-group-desc {
    margin-bottom: 40px;
  }
}
.input-group {
  position: relative;
  margin: 0;
}
/* ==========================================================================
   #TITLE
   ========================================================================== */
.title {
  font-size: 24px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  color: #fff;
}
/* ==========================================================================
   #CARD
   ========================================================================== */
.card {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #fff;
}

.card-5 {
  background: #fff;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}

.card-5 .card-heading {
  padding: 20px 0;
  background: #1a1a1a;
  -webkit-border-top-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  border-top-left-radius: 10px;
  -webkit-border-top-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  border-top-right-radius: 10px;
}

.card-5 .card-body {
  padding: 52px 85px;
  padding-bottom: 73px;
}

@media (max-width: 767px) {
  .card-5 .card-body {
    padding: 40px 30px;
    padding-bottom: 50px;
  }
}
 </style>
 
<div class="page-wrapper bg-gra-01 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Sale Medicine</h2>
                </div>
                <div class="card-body">
                    <form action="sale_med" method="POST">
                    @csrf
						<div class="form-row">
                            <div class="name">Id</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="int" name="id" placeholder ="Add medicine Id">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Quantity</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="Quantity" placeholder ="Add medicine Quantity">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--green" type="submit">Sale</button>
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