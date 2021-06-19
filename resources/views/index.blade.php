
@extends('master')
@section('title' , 'Home')
@section('content')

@foreach($data as $d)
<img src="{{ url('uploads/home').'/'.$d->banner}}">
@endforeach
<!-- SLIDESHOW START
	<div class="carousel-fade-transition owl-carousel carousel-main">
				<div class="item">
			<img src="/images/banners/160911394961745-19banner_.jpg" alt="COVID">
		</div>
				<div class="item">
			<img src="/images/banners/1621455108R_2021_tacony.jpg" alt="TACONY">
		</div>
				<div class="item">
			<img src="/images/banners/1609803110R_2021_tacony.jpg" alt="TACONY">
		</div>
				<div class="item">
			<img src="/images/banners/1610606479R_2021_SEBO.jpg" alt="SEBO">
		</div>
				<div class="item">
			<img src="/images/banners/160911402987767.jpg" alt="TRUCK">
		</div>
				
	</div>
-->



<section class="section background-white">
	@foreach($data as $d)

<div class="container">
	<div id="homepage-about-us">
		<div class="row">
			<!-- heading -->

			<div class="col-sm-12">
				<h1 class="text-center">{{$d->welcome}} <span class="border">{{$d->span}}</span></h1>
				<p class="tagline text-center">{{$d->tagline}}</p>
			</div>
			
			<div class="col-sm-12">
				
				<p class="text-center">
				{{$d->describe}}
				</p>
				
				<p class="text-center" style="padding-bottom:45px; border-bottom: solid 1px #dadada; margin-bottom:40px;">
				<a href="{{url('theme')}}/about-us.html" class="null-btn">Continue Reading</a>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div>
		<div class="row">
			<!-- heading -->
			<div class="col-sm-7">
				<h4>Some Tags That Describe Us</h4>
				<div class="newtextbox">
					<span>Vacuum Store</span>
					<span>Vacuum Cleaners</span>
					<span>Vacuum Repair</span>
					<span>Vacuum Bags</span>
					<span>Vacuum Filters</span>
					<span>Vacuum Accessories</span>
					<span>Vacuum Parts</span>
					<span>Central vacuums</span>
					<span>Miele Vacuums</span>
					<span>Miele Vacuum Cleaners</span>
					<span>Miele Store</span>
					<span>Miele Vacuum Cleaners</span>
					<span>Santa Rosa Vacuum Store</span>
					<span>Rohnert Park Vacuum Store</span>
					<span>Petaluma Vacuum Store</span>
				</div>
			</div>
			<div class="col-sm-5">
				<h4>Areas We Serve</h4>
				<div class="newtextbox">
					<span>Sonoma County</span>
					<span>Santa Rosa</span>
					<span>Rohnert Park</span>
					<span>Petaluma</span>
					<span>California</span>
					<p style="line-height:29px;">
					2790 Santa Rosa Ave.
					<br />Suite G, Santa Rosa, CA 95407
					<br />Ph: 707-566-7325
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
</section>



<section class="section" style="background:#ecefe4;">
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">Most Popular <span class="border">Vacuums</span></h1>
				<p class="tagline text-center">Leaving no single dirt behind.</p>
			</div>
		</div>
		<div class="row">
						<div class="col-sm-3 product-box">
				<div class="post-box hvr-float">
					<a href="{{url('theme')}}/product9052.html?brand=dyson&amp;product=dyson-v8-animal">
						<img src="{{url('theme')}}/images/products/thumb/1585937605-1.jpg">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">$499.99</span></p>
					<a href="{{url('theme')}}/product9052.html?brand=dyson&amp;product=dyson-v8-animal" class="h3 pname">Dyson V8 Animal (Not Available)</a>
				</div>
			</div>
						<div class="col-sm-3 product-box">
				<div class="post-box hvr-float">
					<a href="{{url('theme')}}/productb291.html?brand=sebo&amp;product=sebo-airbelt-e3-premium-white-vacuum-cleaner">
						<img src="{{url('theme')}}/images/products/thumb/15859366699.jpg">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">$999.99</span></p>
					<a href="{{url('theme')}}/productb291.html?brand=sebo&amp;product=sebo-airbelt-e3-premium-white-vacuum-cleaner" class="h3 pname">Sebo Airbelt E3 Premium White Vacuum Cleaner</a>
				</div>
			</div>
						<div class="col-sm-3 product-box">
				<div class="post-box hvr-float">
					<a href="{{url('theme')}}/product0a2e.html?brand=sebo&amp;product=sebo-automatic-x7-premium-pet-black">
						<img src="{{url('theme')}}/images/products/thumb/1599767324t.jpg">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">$1,099.00</span></p>
					<a href="{{url('theme')}}/product0a2e.html?brand=sebo&amp;product=sebo-automatic-x7-premium-pet-black" class="h3 pname">Sebo Automatic X7 Premium Pet Black</a>
				</div>
			</div>
						<div class="col-sm-3 product-box">
				<div class="post-box hvr-float">
					<a href="{{url('theme')}}/productd9de.html?brand=riccar&amp;product=riccar-r25d-deluxe">
						<img src="{{url('theme')}}/images/products/thumb/1585937907r-2.jpg">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">$599.99</span></p>
					<a href="{{url('theme')}}/productd9de.html?brand=riccar&amp;product=riccar-r25d-deluxe" class="h3 pname">Riccar R25D Deluxe Vacuum Cleaner</a>
				</div>
			</div>
						<div class="col-sm-3 product-box">
				<div class="post-box hvr-float">
					<a href="{{url('theme')}}/productf453.html?brand=sebo&amp;product=sebo-felix-1-premium-black-vacuum-cleaner">
						<img src="{{url('theme')}}/images/products/thumb/1597448318_black.jpg">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">$699.99</span></p>
					<a href="{{url('theme')}}/productf453.html?brand=sebo&amp;product=sebo-felix-1-premium-black-vacuum-cleaner" class="h3 pname">Sebo Felix 1 Premium Black Vacuum Cleaner</a>
				</div>
			</div>
						<div class="col-sm-3 product-box">
				<div class="post-box hvr-float">
					<a href="{{url('theme')}}/product6c69.html?brand=dyson&amp;product=dyson-v7-motorhead">
						<img src="{{url('theme')}}/images/products/thumb/1585937646-2.jpg">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">$399.99</span></p>
					<a href="{{url('theme')}}/product6c69.html?brand=dyson&amp;product=dyson-v7-motorhead" class="h3 pname">Dyson V7 </a>
				</div>
			</div>
						<div class="col-sm-3 product-box">
				<div class="post-box hvr-float">
					<a href="{{url('theme')}}/productf72d.html?brand=sebo&amp;product=sebo-essential-g1-gray-vacuum-cleaner">
						<img src="{{url('theme')}}/images/products/thumb/1597448030G4.jpg">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">$699.99</span></p>
					<a href="{{url('theme')}}/productf72d.html?brand=sebo&amp;product=sebo-essential-g1-gray-vacuum-cleaner" class="h3 pname">Sebo Essential G4 Gray Vacuum Cleaner</a>
				</div>
			</div>
						<div class="col-sm-3 product-box">
				<div class="post-box hvr-float">
					<a href="{{url('theme')}}/productcb74.html?brand=sebo&amp;product=sebo-airbelt-d4-premium-black-vacuum-cleaner">
						<img src="{{url('theme')}}/images/products/thumb/1618423966ack_large.jpg">
					</a>
					<p style="margin-bottom:5px; font-family:'Montserrat-Bold';"><span style="background:#f5be17; padding:2px 7px; border-radius:4px; color:#eb1d25;">$1,299.99</span></p>
					<a href="{{url('theme')}}/productcb74.html?brand=sebo&amp;product=sebo-airbelt-d4-premium-black-vacuum-cleaner" class="h3 pname">Sebo Airbelt D4 Premium Black Vacuum Cleaner</a>
				</div>
			</div>
					</div>
		
		<div class="row">
			<div class="col-sm-12 margin-top">
				<div class="view-more text-center">
					<span>Want to see more vacuum cleaners?</span> &nbsp;
					<a href="{{url('theme')}}/products3d78.html?category=vacuums-cleaners" class="btn-link-primary">Browse All</a>
				</div>
			</div>
		</div>
		
	</div>
</section>



<section class="section background-white">
	<div class="container">
		
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">What <span class="border">Our Clients</span> Say About Us?</h1>
				<p class="tagline text-center">You are in good company!</p>
			</div>
		</div>
		
		<div class="row">
			@foreach($review as $r)
			<div class="col-sm-12">
				<div class="awards carousel-blocks owl-carousel carousel-main m-t-md">

					<div class="item">
						<img src="{{url('theme')}}{{$r->image}}" alt="Miele vacuum repair">
						<p>
							<strong>{{$r->name}}</strong><br />
							{{$r->description}}
						</p>
					</div>
				</div>
			</div>
			@endforeach
			<div class="col-sm-12" style="text-align:center;">
				<a href="{{url('theme')}}/https://www.google.com/search?gs_ssp=eJzj4tVP1zc0TKqKN0pOi7c0YLRSNaiwMLAwMbEwMjO1MDSzSLFMsTKoMEyzSElMtUhMMQbKGZqlevEm6ubnpSqUJSaXluYWAwCJaRO4&amp;q=a-one+vacuums&amp;oq=a-one+v&amp;aqs=chrome.1.69i57j46j0l5.3178j0j7&amp;sourceid=chrome&amp;ie=UTF-8#lrd=0x8084482658168d9d:0x1f8dae8ad308416e,1,,," target="_blank" class="yellow-btn">View All 57 Reviews</a>
			</div>
		</div>
	</div>
</section>



<div class="background-white">
<div class="container">
	<div class="discuss-project-again">
		<div class="row">
			<div class="col-sm-9">
			<h4 class="h1 white-color no-margin">Do you want to repair your vacuum cleaner or any other appliances?</h4>
			</div>
			<div class="col-sm-3 m-margin-top m-margin-bottom-10">
				<a href="{{url('theme')}}/contact-us.html" class="fright white-btn">Contact Us &nbsp; <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>
</div>
</div>


@endsection

