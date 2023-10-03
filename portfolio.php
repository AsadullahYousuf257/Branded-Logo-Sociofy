<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>


<body oncontextmenu=" return false">
    
<section class="breadcrumb-custom">

<h1 class="professional-title z-index">
<?php wp_title( '' ) ?> </h1>
<h1 class="professional-title custom-collapse">
<?php wp_title( '' ) ?> </h1>


</section>


<section class="offering-two-container">


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
		<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 1002.png" class="brand"/>
	</div>
			

		</div>
	</div>
</div>
</section>

<section class="portfolios">
<h1 class="professional-page-title" style="text-align:center;margin-top:80px;color:#fff;">
 Portfolio
        </h1>
        <p class="portfolio-para">
        Failure will never overtake me if my determination to succeed is strong enough. 
        </p>
     
        <div class="container text-center">
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
	</div>
			
</section>


			
		

</body>


<?php get_footer();  ?>