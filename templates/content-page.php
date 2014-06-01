<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php if(!is_single('Photos')): ?>
	<div id="sideDiv" class="col2">
	
		<div class="mailingList">
			<h4>Mailing List Sign-Up</h4>
			<b class="plus">+</b>
		</div>
	
		<div class="performers">
			<h3>Performers</h3>
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
		
		<a href="/galleries/photos/"><img src="/assets/img/totes/Tote__12.jpg"/></a>
		
	</div>
	<?php endif; ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>

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

<?php /*
<div id="sideDiv">
<a href="/performers/dj-lineup/"><img src="/assets/img/totes/Tote__03.jpg"/></a>
<a href="http://tix.ilovepromise.com/harvest.php" target="_blank"><img src="/assets/img/totes/Tote__06.jpg"/></a>
<a href="/camping/"><img src="/assets/img/totes/Tote__08.jpg"/></a>
<a href="/galleries/photos/"><img src="/assets/img/totes/Tote__12.jpg"/></a>
</div> */ ?>