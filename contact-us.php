<?php
/*
Template Name: Contact
*/
?>
<body>
<?php get_header(); ?>

<section class="breadcrumb-custom">

<h1 class="professional-title z-index">
<?php wp_title( '' ) ?> </h1>
<h1 class="professional-title custom-collapse">
<?php wp_title( '' ) ?> </h1>


</section>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3464.7782177344507!2d-95.6068757248766!3d29.72618293358045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640dc57d0459691%3A0x2de30e26e7bf06e!2s12413%20Urban%20Dale%20Ct%2C%20Houston%2C%20TX%2077082%2C%20USA!5e0!3m2!1sen!2s!4v1694414690055!5m2!1sen!2s" width="745" height="980" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 contact-page-half" style="background-color:#FF6E31" >
        <h2 class="get-started-title contact-page-title">
        Ready To Get Started?
        </h2>
        <p class="get-started-para contact-page-para">
        Immediately join us, make your life more alive with broad and large access
        </p>
        <?php echo do_shortcode("[contact-form-7 id='33' title='Contact form 1_copy']"); ?>
        
        </div>
    </div>
</div>
<?php get_footer();  ?>
































<?php get_footer();  ?>