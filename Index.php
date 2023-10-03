<?php get_header(); ?>
<?php
  
  if( have_posts()):
   while(have_posts()): the_post();

 

  endwhile;
 endif;

 ?>
 <?php
/*
Template Name: Home
*/
?>
<!-- <body oncontextmenu=" return false"> -->
<body>
<section class="hero-sec">

  
<div class="row">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 heading" style="padding-right:50px">
				<h1 class="first-heading"> Launch Your <span class="orange-text">Business</span> In just a few clicks</h1>
				<p class="hero-para">
	  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
	  </p>

				<a href="tel:+92 12 3456 678"><span class="number">+92 12 3456 678</span></a>
				<span class="call-for-qoutation"><a href="tel:+92 12 3456 678">Call for a Quotation</a></span>

			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 249.png" alt="" srcset="" class="custom-width">
			</div>
		</div>
	</div>
</div>
</div>
</section>   
<section class="left-img-sec">

  <div class="container">
			<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Rectangle 148.png" alt="" srcset="" class="custom-width">
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 heading" style="padding-left:50px">
					<h1 class="first-heading"> A True <span class="orange-text">Logo</span> Makers</h1>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group (2).png" alt="" class="logo-makers" width="25">
								<h3 class="logo-makers">
								Fully integrated
								</h3>
								<p class="hero-para-2">We get insulted by others, lose trust for those We get back freezes</p>

							</div>
							<div class="col-md-6">
								<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 994.png" alt="" class="logo-makers" width="25">
								<h3 class="logo-makers">
								Payments functionality
								</h3>
							<p class="hero-para-2">
							We get insulted by others, lose trust for those We get back freezes</p>
							</div>
						</div>

						<div class="row" style="margin-top:15px">
							<div class="col-md-6">
								<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group.png" alt="" class="logo-makers" width="25">
								<h3 class="logo-makers">
								Prebuilt components
								</h3>
								<p class="hero-para-2">We get insulted by others, lose trust for those We get back freezes</p>

							</div>
							<div class="col-md-6">
								<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/msg.png" alt="" class="logo-makers" width="25">
								<h3 class="logo-makers">
								Improved platform
								</h3>
							<p class="hero-para-2">We get insulted by others, lose trust for those We get back freezes</p>
							</div>
						</div>
					</div>

				</div>
				
			</div>
		</div>
	</div>
</section>  
<section class="portfolio">
<h1 class="portfolio-first-heading"> Our Great Work <span class="orange-text remove-bg">Portfolio</span> </h1>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Logo')" id="defaultOpen">Logo Designs</button>
  <button class="tablinks" onclick="openCity(event, 'ui/ux')">UI/UX Designs</button>
  <button class="tablinks" onclick="openCity(event, 'branding')">Branding</button>
</div>

<div id="Logo" class="tabcontent">
<div class="row">
        <div class="wrapper">
      <input type="checkbox" id="btnBox"/>
      <ul>
        <li  class="logo-for-portfolio-1"></li>
        <li  class="logo-for-portfolio-2"></li>
        <li  class="logo-for-portfolio-3"></li>
        <li  class="logo-for-portfolio-4"></li>
        <li  class="logo-for-portfolio-5"></li>
        <li  class="logo-for-portfolio-6"></li>
        <li  class="logo-for-portfolio-7"></li>
        <li  class="logo-for-portfolio-8"></li>
        <li  class="logo-for-portfolio-9"></li>
        
      </ul>
      <label class="btn-area" for="btnBox">
        <span class="btn1">LOAD MORE</span>
        <span class="btn2">LOAD LESS</span>
      </label>  
    </div>
</div>

<div id="ui/ux" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="branding" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

</section> 



<!-- Offer Include Section -->
<section class="logos">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Brands Logo Group.png" alt="" class="logos-sec">
			</div>
		</div>
	</div>
</section>
<section class="offering-two-container">
<div class="container service-offer-div">
	<div class="row">
		<div class="col-md-6" style="padding:0px;">
		<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 302.png" class="brand"/>
		</div>
		
		<div class="col-md-6" style="padding-left:30px;">
		<h2 class="service-offer">
		Put Your <span class="redtext-service-offer">Brand</span> Out There
		</h2>
		<p class="service-offer-para">
		Show up as a pro with printed business cards, t-shirts and branded merchandise that make your brand look official from day one. 
		</p>
		<a href="#"><button class="btn btn-outline-success my-2 my-sm-0" >Get Started <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron.png" class="logos"/></button></a>

		

		</div>
			

		</div>
	</div>
</div>

<div class="container service-offer-div">
	<div class="row">
		<div class="col-md-6" >
		<h2 class="service-offer">
		Easily Launch Your <span class="redtext-service-offer">Business</span> Online.</h2>
		<p class="service-offer-para">
		Lock in your domain name, create a website and set up a professional business email address. 
		</p>
		<a href="#"><button class="btn btn-outline-success my-2 my-sm-0" >Get Started <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron.png" class="logos"/></button></a>
		</div>
		
		<div class="col-md-6" style="padding:0px;">
		<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Rectangle 190.png" class="brand"/>
	</div>
			

		</div>
	</div>
</div>
</section>
<section class="cloud">
<h2 class="service-offer cloud-title">
		Create Your <span class="redtext-service-offer">Online</span> Presence</h2>
		<p class="get-started-para">
        Immediately join us, make your life more alive with broad and large access
        </p>
		<div class="container">
			<div class="row">
				<div class="col-md-4 round-edges">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Vector.png" alt="" class="vector">
					<h3 class="vector-title">Get Started For Free</h3>
				</div>
				<div class="col-md-4 round-edges">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/right.png" alt="" class="vector">
					<h3 class="vector-title">No Signup Needed</h3>
				</div>
				<div class="col-md-4 round-edges">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group-200.png" alt="" class="vector">
					<h3 class="vector-title">100% Satisfied</h3>
				</div>
				
			</div>
		</div>
</section>
<section class="testimonials">
<h2 class="service-offer align-center">
What Our <span class="redtext-service-offer align-center">Customer Say’s </span></h2>
<div class="container">
	<div class="row">
		<div class="col-md-4 testimonial-round-edges">
<h6 class="testimonial-title">
Whein Kim
</h6>
<p class="service-offer-para">
Really a very satisfying hosting make my business more advanced and famous around the world with speed and great storage capacity


		</p>
		<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 998.png" alt="" class="review logos">
		</div>
		<div class="col-md-4 testimonial-round-edges">
<h6 class="testimonial-title">
Yoon Ackerman
</h6>
<p class="service-offer-para">
Really a very satisfying hosting make
my business more advanced and famous
around the world with speed and great
storage capacity 
		</p>
		<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 999.png" alt="" class="review logos">
		</div>
		<div class="col-md-4 testimonial-round-edges">
<h6 class="testimonial-title">
HillalNeet
</h6>
<p class="service-offer-para">
The extraordinary ability of my business to be growing, at an affordable price makes me very happy, thanks OnceHosting
		</p>
		<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 998.png" alt="" class="review logos">
		</div>
	</div>
</div>
</section>
</body>

<?php get_footer();  ?>
