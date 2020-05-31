@extends('layouts.index')

@section('title','Manager')

@section('contant')


@section('navbar')

	<li class="nav-item active"><a href="registerworker" class="nav-link">Rigister worker</a></li>
	<li class="nav-item "><a href="A_make_report" class="nav-link">Make reports</a></li>
	<li class="nav-item "><a href="A_view_report" class="nav-link">View reports</a></li>
	<li class="nav-item "><a href="aloggedout" class="nav-link">Logout</a></li>

@endsection



<section class="hero-wrap hero-wrap-2" style="background-image: url('images/ut1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Worker Registration <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Manager</h1>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
    			
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-md-7 d-flex">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Register A new Worker</h3>
                                        
                                        <form method="post" id="contactForm" class="contactForm",action="registerworker">
                                            @csrf
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="password" class="form-control" name="password" id="password" placeholder="Password">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="password" class="form-control" name="repassword" id="repassword" placeholder="Re Enter Password">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Create" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
                                        </form>
                                               
                                                @if(count($errors)>0)
                                                @foreach ($errors->all() as $error)
                                                    <ul> {{$error}}  </ul>
                                                @endforeach
                                                @endif
                                               <div> <p> {{ $statues ?? '' }}</p> </div>

									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-lg-5 p-4" style="background-image: url(images/t1.jpg);">
                                    <div style="background-image: url(images/t1.jpg);font-size=20px;">
                                       
                                    </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>
@endsection