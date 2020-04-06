@extends('layouts.index')

@section('title','Home page')

@section('contant')
 
@section('ED_active','active')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  
  .impo
   {
     margin:0 ;
      padding :0;
      font-family : sans-serif;
     background: url(‪Background.jpg) no-repeat;
     background-size: cover;
   }
   .box
   {
     position : absolute;
     top :20%;
     left : 35%;
     transform: translate (-50%,-50%);
     width :400px;
     padding :40px;
     background : rgba(0,0,0,.8);
     box-sizing : border-box;
     box-shadow : 0 15px 25px rgba(0,0,0,.5);
     border-radius: 10px;

   }
   .box h3 {
    margin :0 0 30px;
   padding :0;
   color : #fff ;
   text-align : center;
   }
   .box .inputbox {
       position : relative ;
   }
   .box .inputbox input 
   {
    width:100%;
     padding:10px 0;
     letter-spacing : 1px;
     font-size : 16px;
     color : #fff;
     margin-bottom : 30px;
     border : none;
     border-bottom : 1px solid #fff;
     outline : none;
     background : transparent ;
   }
   .box .inputbox label 
   {
    position : absolute;
     top :-30px;
     left : 0;
     letter-spacing : 1px;
     padding:10px 0;
     font-size : 16px;
     color : #fff;
     pointer-events : none;
     transition : .5s;
   }
   .box .inputbox input : focus  ~ label ,
   .box .inputbox input : valid  ~ label 
   {
       top : -18px ;
       left : 0 ;
       color : #03a9f4 ;
       font-size : 12px;
   }
   .box input[type="submit"]
   {
     background : transparent;
     border : none ;
     outline : none ;
     color : #fff;
     background : #03a9f4;
     padding : 10px 20px ;
     cursor : pointer ;
     border-radius : 5px;


   }
  </style>


  <center>
    <div style="height: 400px;">
    
 <br>
  <div class="box" style="margin-top:40px;">
   <h3 align="center">Team Login</h3></br >


<!--
   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif
 -->

   <form method="post" action="/workerlogged">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
    <div class="inputbox">
     <label>Enter Email</label>
     <input type="email" name="field3" class="form-control" />
    </div>
    <div class="inputbox">
     <label>Enter Password</label>
     <input type="password" name="field4" class="form-control" />
    </div>
    <div class="inputbox">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
   </form>
  
  </div>








  </center>

@endsection