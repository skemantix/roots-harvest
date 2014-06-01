<?php
/*
Template Name: Homepage
*/
?>
<script src="/assets/img/banners/nivo_slider.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	/*
		$.fancybox(
			
			{'type':'iframe',
			'content':'http://tix.ilovepromise.com/harvest.php',
			'width' : 650,
			'height' : 800,
			'centerOnScroll' : true
			}
		);
	});
	
	$('#fancybox-content #buynow').click(function(){
		$(this).parent('form').attr('target','_blank').submit();
	});
	*/
			
	$('.videoBtn').css({'cursor':'pointer'}).click(function(e){
		window.open('http://www.youtube.com/results?search_query=harvest+festival+2012+burks+falls','_blank');
	});
	$('.follow').css({'cursor':'pointer'}).click(function(e){
		window.open('https://www.facebook.com/events/631477606871622/','_blank');
	});
	
	$('.menu-videos a').attr('target','_blank');
	
	//slider config
	var banner = jQuery('#banner');
		banner.nivoSlider({
			effect: 'fade',
			animSpeed: 500,
			pauseTime: 5000,
			directionNav: true/*,
			lastSlide: function() { banner.data('nivoslider').stop(); }*/
		}); 
	});
</script>

<div class="col1" style="float: left; width: 680px;">
<div id="banWrap">	
    <div id="banner">
    	<img src="/assets/img/banners/Banner_01.jpg"/>
        <img src="/assets/img/banners/Banner_02.jpg"/>
		<img src="/assets/img/banners/Banner_03.jpg"/>
		<img src="/assets/img/banners/Banner_04.jpg"/>
		<img src="/assets/img/banners/Banner_05.jpg"/>
		<img src="/assets/img/banners/Banner_06.jpg"/>
		<img src="/assets/img/banners/Banner_07.jpg"/>
		<img src="/assets/img/banners/Banner_08.jpg"/>
		<img src="/assets/img/banners/Banner_09.jpg"/>
		<img src="/assets/img/banners/Banner_10.jpg"/>
		<img src="/assets/img/banners/Banner_11.jpg"/>
		<img src="/assets/img/banners/Banner_12.jpg"/>
    </div>
    <a href="/galleries/photos/" id="photoBtn"><span class="nodisplay">Photo Gallery</span></a>
</div>
    
    <!-- <div class="slider"></div>
	<div class="slider-overlay"></div> -->
	
	<div class="row2">
		<!-- <div id="vid">
			<a href="http://www.youtube.com/results?search_query=harvest+festival+2012+burks+falls" target="_blank"><img src="/assets/img/banners/vid.png"/></a>
		</div> -->
		<div class="video videoBtn">
			<div class="overlay">Watch Video</div>
			<b class="plus">+</b>
		</div> 
		
		<div class="follow">
			<div class="overlay">Follow Us</div>
			<p>Join us on <span>Facebook</span> for updates, <span>ride share board</span> and much more.</p>
			<b class="plus">+</b>
		</div>
	</div>
</div>


<div class="col2" style="float: left; width: 265px;">

	<div class="mailingList">
		<h4>Mailing List Sign-Up</h4>
		<b class="plus">+</b>
	</div>

	<div class="festival">
		<h3>Festival</h3>
		<p>An <span>electronic music</span> &amp; arts festival 240 km north of Toronto near <span>Burk's Falls</span></p>
		<b class="plus">+</b>
	</div>
	
	<div class="performers">
		<h3>Performers</h3>
		<p>See our <span>DJ Lineup, circus performers</span> and installation artists <span>here</span></p>
		<b class="plus">+</b>
	</div>
	
	<div class="location">
		<h3>Location</h3>
		<b class="plus">+</b>
	</div>
	
	<div class="tickets">
		<h3>Buy Tickets</h3>
		<b class="plus">+</b>
	</div>
	
	<div class="news row2">
		<h4>News</h4>
		<h5>August 19</h5>
		<p>We just put together a rideshare group for the festival to help everyone to get there happily and easily... <br/><a href="https://www.facebook.com/groups/206448899521507/" target="_blank">Harvest Festival Rideshare ></a></p>
	</div>
	
	
</div> 


<div style="display: none;">
<div id="contactForm">
		<style type="text/css">
		#SignUp .signupframe {
		  background: transparent;
		  color: #226699;
		  font-family: Arial, Helvetica, sans-serif;
		  font-size: 10px;
		  width: 100px;
		  border: 0px;
		}
		</style>
<style>
.link,
.link a,
.signupframe
{
	color: #226699;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	}
	.link,
	.link a {
		text-decoration: none;
		}
	.signupframe {
		border: 1px solid #000000;
		background: #ffffff;
		}
.signupframe .required {
	font-size: 10px;
	}
</style>
<form method="post" action="http://app.icontact.com/icp/signup.php" name="icpsignup" id="icpsignup4661" accept-charset="UTF-8" onsubmit="return verifyRequired4661();">
<input type="hidden" name="redirect" value="http://www.icontact.com/www/signup/thanks.html">
<input type="hidden" name="errorredirect" value="http://www.icontact.com/www/signup/error.html">

<div id="SignUp">
<table width="260" class="signupframe" border="0" cellspacing="0" cellpadding="5">
	<tbody><tr>
      <td valign="top" align="right">
        <span class="required">*</span>&nbsp;Email
      </td>
      <td align="left">
        <input type="text" name="fields_email">
      </td>
    </tr>
    <input type="hidden" name="listid" value="9958024">
    <input type="hidden" name="specialid:9958024" value="CLL6">

    <input type="hidden" name="clientid" value="76300">
    <input type="hidden" name="formid" value="4661">
    <input type="hidden" name="reallistid" value="1">
    <input type="hidden" name="doubleopt" value="1">
    <tr>
      <td>&nbsp;</td>
      <td><span class="required">*</span> = Required Field</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
    </tbody></table>
</div>
</form>
<script type="text/javascript">

var icpForm4661 = document.getElementById('icpsignup4661');

if (document.location.protocol === "https:")

	icpForm4661.action = "https://app.icontact.com/icp/signup.php";
function verifyRequired4661() {
  if (icpForm4661["fields_email"].value == "") {
    icpForm4661["fields_email"].focus();
    alert("The Email field is required.");
    return false;
  }


return true;
}
</script>

		</div>
	</div>