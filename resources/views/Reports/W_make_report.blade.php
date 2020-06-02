@extends('layouts.index')

@section('title','Worker')

@section('contant')
 
<!-- @section('H_active','active') -->
@section('navbar')
	
    <li class="nav-item "><a href="add_med" class="nav-link">Add medicine</a></li>
	<li class="nav-item "><a href="delete_med" class="nav-link">Delete medicine</a></li>
	<li class="nav-item "><a href="update_med" class="nav-link">Update medicine</a></li>
	<li class="nav-item "><a href="sale_med" class="nav-link">Sale medicine</a></li>
    <li class="nav-item "><a href="show_med" class="nav-link">Show medicine</a></li>
	<li class="nav-item active"><a href="Worker_report" class="nav-link">Make/View reports</a></li>
	<li class="nav-item "><a href="wloggedout" class="nav-link">Logout</a></li>
	
@endsection

<div class="col-md-7 d-flex  ">
    <div class="contact-wrap w-100 p-md-5 p-4">
        <h3 class="mb-4">Send Report</h3>
        <form action="W_make_report" method="POST">
           @csrf

           <?php
           $con= mysqli_connect("localhost","root","","as");
           $con_db=mysqli_select_db($con,'as');
           $sender=mysqli_query($con,'select name from workers where  active = 1');
           $sender_id=mysqli_query($con,'select id from workers where  active = 1');
           $senders=mysqli_fetch_array($sender);
           $ids=mysqli_fetch_array($sender_id);
           ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- <span>Sender Name</span> -->
                        <input type="text" class="form-control" name="sender" title="Sender Name" value="<?php echo $senders['name'] ?>" readonly>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <!-- <span>Sender Id</span> -->
                        <input type="text" class="form-control" name="s_id" title="Sender Id" value="<?php echo $ids['id'] ?>" readonly >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <!-- <span>Receiver Id</span> -->
                        <input type="text" class="form-control" name="receiver_id" title="Receiver Id" value="1" readonly>
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