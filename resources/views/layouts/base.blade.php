<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Home :: w3layouts</title>
<link href="{{asset('public/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="{{asset('public/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('public/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href="{{asset('http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400')}}" rel="stylesheet" type="text/css">
<!--webfont-->
<!-- dropdown -->
<script src="{{asset('public/js/jquery.easydropdown.js')}}"></script>
<link href="{{asset('public/css/nav.css')}}" rel="stylesheet" type="text/css" media="all"/>
<script src="{{asset('public/js/scripts.js')}}" type="text/javascript"></script>
<!--js-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="{{asset('public/js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->

</head>
<body>
<!--banner-->
<script src="{{asset('public/js/responsiveslides.min.js')}}"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="{{'/'}}"><img src="public/images/logo.png" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><a href="{{asset('bicycles')}}">BICYCLES</a>
							  <!--<ul class="dropdown2">
									<li><a href="{{asset('bicycles')}}">FIXED / SINGLE SPEED</a></li>
									<li><a href="{{asset('bicycles')}}">CITY BIKES</a></li>
									<li><a href="{{asset('bicyclesl')}}">PREMIMUN SERIES</a></li>												
							  </ul>-->
						  </li>
						  <li class="dropdown1"><a href="{{asset('parts')}}">PARTS</a>
							 <!--<ul class="dropdown2">
									<li><a href="{{asset('parts')}}">CHAINS</a></li>
									<li><a href="{{asset('parts')}}">TUBES</a></li>
									<li><a href="{{asset('parts')}}">TIRES</a></li>
									<li><a href="{{asset('parts')}}">DISC BREAKS</a></li>
							  </ul>-->
						 </li>      
						 <li class="dropdown1"><a href="{{asset('accessories')}}">ACCESSORIES</a>
							 <!--<ul class="dropdown2">
									<li><a href="{{asset('accessories')}}">LOCKS</a></li>
										<li><a href="{{asset('accessories')}}">HELMETS</a></li>
										<li><a href="{{asset('accessories')}}">ARM COVERS</a></li>
										<li><a href="{{asset('accessories')}}">JERSEYS</a></li>
							  </ul>-->
						 </li>            
						  <!--<li class="dropdown1"><a href="{{asset('extras')}}">EXTRAS</a>
							<ul class="dropdown2">
									<li><a href="{{asset('404')}}">CLASSIC BELL</a></li>
									<li><a href="{{asset('404')}}">BOTTLE CAGE</a></li>
									<li><a href="{{asset('404')}}">TRUCK GRIP</a></li>
							  </ul>
						 </li>-->                                      
                         <li class="dropdown1"><a href="{{asset('login')}}">enter</a></li>                       
                         <li class="dropdown1"><a href="{{asset('register')}}">register</a></li>
                         
                        
                      <li>
                          <a class="shop" href="{{asset('cart')}}"><img src="{{asset('public/images/cart.png')}}" alt=""/></a>
                      </li>
					  </ul>
                      
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>HANDMADE BICYCLE</h1></li>
								<li><h1>SPEED BICYCLE</h1></li>	
								<li><h1>MOUINTAIN BICYCLE</h1></li>	
						  </ul>
						  <p>You <span>create</span> the <span>journey,</span> we supply the <span>parts</span></p>
						  <a class="morebtn" href="{{asset('bicycles')}}">SHOP BIKES</a>
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="{{asset('public/images/scroll.png')}}" alt=""/></a>
	 </div>				 
</div>
@yield('content')
<div class="footer">
	 <div class="container wrap">
		<!--<div class="logo2">
			 <a href="{{asset('public/index/html')}}"><img src="{{asset('public/images/logo2.png')}}" alt=""/></a>
		</div>-->
		<div class="ftr-menu">
			 <ul>
				 <li><a href="{{asset('bicycles')}}">BICYCLES</a></li>
                 <li><a href="{{asset('parts')}}">PARTS</a></li>
				 <li><a href="{{asset('accessories')}}">ACCESSORIES</a></li>
				 <!--<li><a href="{{asset('public/404.html')}}">EXTRAS</a></li>-->
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->
</body>
</html>