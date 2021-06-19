
@extends('master')
@section('title' , "About Us")
@section('content')

<!-- PAGE HEADING & BREADCRUMB START -->
<div id="page-header" class="background-1">
	<div class="container">
		<!-- Heading -->
		<div class="row">
			<div class="col-sm-12">
				<h1>Here We Talk About Ourself</h1>
			</div>
		</div>
		<!-- Breadcrumb -->
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">About Us</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- PAGE HEADING & BREADCRUMB END -->


<section class="section background-white">
		<div class="container">
			<div id="homepage-about-us">
				<div class="row">
					<!-- Heading -->
					<div class="col-sm-3" style="padding-top:10px;">
						<h2 class="h1"><span class="primary-color">A-ONE<br />VACUUMS</span><br /><span class="secondary-color">SINCE 1999</span></h2>
					</div>
					<!-- Detail -->
					<div class="col-sm-9">
						<p>A-One Vacuums is the best source in the area for top-of-the-line vacuum cleaners from brands such as Miele, Oreck, Dyson, Sebo and Simplicity. We also carry Air Purifiers, Floor Machines, Steamers and cleaning products. In addition to professional vacuum retail, we also provide top-quality repair services on all vacuum makes and models, performed here on-site by certified technicians.</p>
						<p style="font-style:italic;">We also stock parts, filters, bags and belts for most popular brands of vacuum cleaners.</p>
					</div>
				</div>
			</div>
		</div>
	<!-- ABOUT US END -->
</section>


<!-- CAPABILITIES START -->
<section class="section" style="border-top: solid 1px #ecefe4;">
	<div class="container">
		
		<!-- Heading -->
		<div class="row">
			<div class="col-sm-12">
				<h4 class="text-center h1" style="color:#2c348e;">Why <span style="color:#eb1d25;">A-ONE VACUUMS</span></h4>
			</div>
		</div>
		
		<!-- Capabilities -->
		<div class="row">
			<!-- Capability 1 -->
			@foreach($about as $a)
			<div class="col-xs-12 col-sm-6 col-md-6 capabilities">
				<div class="col-xs-2 col-sm-3 col-md-3 icon-box">
					<i class="{{$a->icon}}"></i>
				</div>
				<div class="col-xs-10 col-sm-9 col-md-9">
					<strong>{{$a->name}}</strong>
					<p>{{$a->para}}</p>
				</div>
			</div>
			@endforeach
		</div>

	</div>
</section>
<!-- CAPABILITIES START -->


<div class="background-white">
<div class="container">
	<div class="discuss-project-again">
		<div class="row">
			<div class="col-sm-10">
			<h4 class="h1 white-color no-margin">Do you have any question?</h4>
			</div>
			<div class="col-sm-2 m-margin-top m-margin-bottom-10">
				<a href="contact-us.html" class="fright white-btn">Contact Us &nbsp; <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
</div>
</div>


@endsection