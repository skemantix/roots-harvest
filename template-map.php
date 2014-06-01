<?php
/*
Template Name: PDF Map
*/
?>


<?php get_template_part('templates/page', 'header'); ?>

        <div id="container">
            <div id="content">
				<a href="https://maps.google.ca/maps?q=981+midlothian+road&oe=utf-8&client=firefox-a&channel=fflb&ie=UTF-8&ei=Pg4VUpDFI9CFyQGK-IHADA&ved=0CAoQ_AUoAg" target="_blank">Google Map</a><br/><br/>
				<script type="text/javascript">
				$(document).ready(function(){
					var myembedparams = {
						url: "/media/Map-to-Harvest-Festival.pdf", 
						pdfOpenParams: {view: 'FitH'},
						width: '900px',
						height: '500px',
					};
					var myPDF = new PDFObject(myembedparams).embed('embedMap');
				});
				</script>
				
				<div id="embedMap">
				</div>
				
		<div class="clear"></div>
            </div><!-- #content -->
        </div><!-- #container -->
		


<?php // get_sidebar(); ?>
<?php // get_footer(); ?>