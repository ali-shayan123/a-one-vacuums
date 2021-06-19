@extends('master')
@section('title' , "Products")
@section('content')


<!-- PAGE HEADING & BREADCRUMB START -->
<div id="page-header" class="background-1">
	<div class="container">
		<!-- Heading -->
		<div class="row">
			<div class="col-sm-12">
				<h1>
				Vacuum Cleaners				</h1>
			</div>
		</div>
		<!-- Breadcrumb -->
		<div class="row">
			<div class="col-sm-12">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
					<li class="breadcrumb-item active"><a href="{{url('/products')}}">Products</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- PAGE HEADING & BREADCRUMB END -->


<section class="section background-white">
	<div class="container">
		<div class="row">
		@foreach($product as $p)
			<div class="col-sm-3 product-box">
				<!-- Detail -->
				<div class="post-box hvr-float">
					<a href="product99b6.html?brand=sebo&amp;product=sebo-airbelt-e2">
						<img src="{{url('theme')}}{{$p->image}}">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">${{$p->price}}</span></p>
					<a href="product99b6.html?brand=sebo&amp;product=sebo-airbelt-e2" class="h3 pname">{{$p->name}}</a>
				</div>
			</div>	
		@endforeach			
		</div>		
	</div>
</section>


<div class="background-white">
<div class="container">
	<div class="discuss-project-again">
		<div class="row">
			<div class="col-sm-8">
			<h4 class="h1 white-color no-margin">Do you have any question?</h4>
			</div>
			<div class="col-sm-4 m-margin-top m-margin-bottom-10">
				<a href="{{'/contact'}}" class="fright white-btn">Contact Us &nbsp; <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
</div>
</div>

@endsection