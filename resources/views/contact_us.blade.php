@extends('master')
@section('title' , "Contact Us")
@section('content')



<!-- PAGE HEADING & BREADCRUMB START -->
<div id="page-header" class="background-1">
	<div class="container">
		<!-- Heading -->
		<div class="row">
			<div class="col-sm-12">
				<h1>Contact Us</h1>
			</div>
		</div>
		<!-- Breadcrumb -->
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Contact Us</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- PAGE HEADING & BREADCRUMB END -->


<section class="section background-white" style="padding-bottom:40px">
	<div class="container"> 
		<div class="row">
        @foreach($contact as $c)
			<div class="col-sm-3">
				<h3>Contact Information</h3>
				<address>
					<p>
                        <strong class="primary-color">Address:</strong><br><br>
					{{$c->address}}
                    </p>
				</address>
				<p>
					<strong class="primary-color">Store Timings:</strong><br/>
					{{$c->timming}}
                    {{$c->close_day}}
				</p>
				<p><strong class="primary-color">Phone:</strong> <br> {{$c->phone}} </p> 
				<p class="margin-bottom"><strong class="primary-color">Email:</strong> <br> {{$c->email}} </p>
				
				<h3>Follow Us</h3>
				<div class="social">
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
				</div>				
			</div>
		@endforeach
			<div class="col-sm-6">
				<h3 class="mob-margin-top">Our Location</h3>
				<iframe src="{{$c->location}}" frameborder="0" style="border:0; width:96%; height:440px;" allowfullscreen=""></iframe>
			</div>
			<div class="col-sm-3">
				<h3>Send Us an Inquiry</h3>
				<form class="customform" method="post" action="#" name="contact_aone">
					<label>Full name</label>
					<input type="text" class="required" name="fullname">
					<label>Email</label>
					<input type="email" name="email" class="required">
					<label>Mob/Tel</label>
					<input type="text" class="required" name="phone">
					<label>Message</label>
					<textarea class="required" name="message"></textarea>
					<input type="submit" onclick="return contactformhash(this.form, this.form.fullname, this.form.email, this.form.phone, this.form.message);" value="Send to us" class="white-btn">
					<p id="error_para" style="margin-top:10px; color:red;">
					   <!-- form errors box -->
					</p>
				</form>
			</div>
		</div>
		
	</div>
</section>




@endsection