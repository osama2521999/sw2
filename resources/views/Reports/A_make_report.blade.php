@extends('layouts.index')

@section('title','Admin')

@section('contant')
 
<!-- @section('H_active','active') -->
@section('navbar')
	
    <li class="nav-item "><a href="registerworker" class="nav-link">Rigister worker</a></li>
	<li class="nav-item active"><a href="A_make_report" class="nav-link">Make reports</a></li>
    <li class="nav-item "><a href="A_view_report" class="nav-link">View reports</a></li>
	<li class="nav-item "><a href="aloggedout" class="nav-link">Logout</a></li>
	
@endsection


<div class="col-md-7 d-flex  ">
    <div class="contact-wrap w-100 p-md-5 p-4">
        <h3 class="mb-4">Send Report</h3>
        <form action="A_make_report" method="POST">
           @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="sender"  value="admin" readonly >
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <input type="text" class="form-control" name="s_id" value="1" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="receiver_id"  placeholder="Receiver_Id">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="report" class="form-control"  cols="30" rows="7" placeholder="Report"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="Send Report" class="btn btn-primary">
                        <div class="submitting"></div>
                    </div>
                </div>
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

	
@endsection