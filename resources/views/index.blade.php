@extends('layouts.base')

@section('content')


<div id="cate" class="categories">
	 <div class="container">
		 <h3>CATEGORIES</h3>
		 <div class="categorie-grids">
			 <a href="{{asset('public/bicycles.html')}}"><div class="col-md-4 cate-grid grid1">
				 <h4>FIXED / SINGLE SPEED</h4>
				 <p>Are you ready for the 27.5 Revloution ?</p>
				 <a class="store" href="{{asset('public/bicycles.html')}}">GO TO STORE</a>
			 </div></a>
			 <a href="{{asset('public/bicycles.html')}}"><div class="col-md-4 cate-grid grid2">
				 <h4>PREMIMUM SERIES</h4>
				 <p>Exclusive Bike Components</p>
				 <a class="store" href="{{asset('public/bicycles.html')}}">GO TO STORE</a>
			 </div></a>
			 <a href="{{asset('public/bicycles.html')}}"><div class="col-md-4 cate-grid grid3">
				 <h4>CITY BIKES</h4>
				 <p>Street Playground</p>
				 <a class="store" href="{{asset('public/bicycles.html')}}">GO TO STORE</a>
			 </div></a>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--bikes-->
<div class="bikes">	
		 <h3>POPULAR BIKES</h3>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <img src="{{asset('public/images/bik1.jpg')}}" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>FIXED GEAR<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">Option</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{asset('public/bicycles.html')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{asset('public/bicycles.html')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
				 <img src="{{asset('public/images/bik2.jpg')}}" alt=""/>
				 <div class="bike-info">
						 <div class="model">
							 <h4>BIG BOY ULTRA<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">Option</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{asset('public/bicycles.html')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{asset('public/bicycles.html')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
					 <img src="{{asset('public/images/bik3.jpg')}}" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>ROCK HOVER<span>$300.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">Option</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{asset('public/bicycles.html')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{asset('public/bicycles.html')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
				     <img src="{{asset('public/images/bik4.jpg')}}" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>SANSACHG<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">Option</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{asset('public/bicycles.html')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{asset('public/bicycles.html')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
					 <img src="{{asset('public/images/bik5.jpg')}}" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>JETT MAC<span>$340.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">Option</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{asset('public/bicycles.html')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{asset('public/bicycles.html')}}">Quick View</a>
					 </div>
				 </li>
				 <li>
				      <img src="{{asset('public/images/bik6.jpg')}}" alt=""/>
					  <div class="bike-info">
						 <div class="model">
							 <h4>SANSACHG<span>$249.00</span></h4>							 
						 </div>
						 <div class="model-info">
						     <select>
							  <option value="volvo">Option</option>
							  <option value="saab">Option</option>
							  <option value="opel">Option</option>
							  <option value="audi">Option</option>
							 </select>
							 <a href="{{asset('public/bicycles.html')}}">BUY</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="{{asset('public/bicycles.html')}}">Quick View</a>
					 </div>
				 </li>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="{{asset('public/js/jquery.flexisel.js')}}"></script>			 
	</div>
</div>
<!---->
<div class="contact">
	<div class="container">
		<h3>CONTACT US</h3>
		<p>Please contact us for all inquiries and purchase options.</p>
		<form>
			 <input type="text" placeholder="NAME" required="">
			 <input type="text" placeholder="SURNAME" required="">			 
			 <input class="user" type="text" placeholder="USER@DOMAIN.COM" required=""><br>
			 <textarea placeholder="MESSAGE"></textarea>
			 <input type="submit" value="SEND">
		</form>
	</div>
</div>
@endsection