<?php 
$pagename = "index";
include("inc/header.php"); 
?>

		<style type="text/css">
			body {
				background-color:  #F4B408;
				color: white;
			}
			.myform{
				padding-top:120px;
			}


		</style>



		
<div class="myform row-fluid" >

	<dl class="dl-horizontal span9 offset1" style="text-align:center;">
	
  <dt></dt>
  <dd>	<h3 class="form-signin-heading">We&rsquo;d love to hear from you!<br></h3><br></dd>
  
  
  
     <form action="/webformmailer.php" method="post"> 
     	<input type="hidden" name="redirect" value="thankyou.php" />
  <dt><label for="name">Name</label></dt>
  <dd><input type="text" class="input-block-level" size="50" name="Name" id="name" placeholder="Your Name"></dd>
  
    <dt><label for="email">Email</label></dt>
  <dd><input type="text" class="input-block-level" size="50" name="Email_Address" id="email" placeholder="Your Email address"></dd>
  
    <dt><label for="message">Message</label></dt>
  <dd><textarea  name="Message" cols="50" rows="10" id="message" class="input-block-level" placeholder="Message"></textarea></dd>
  <dt></dt>
  <dd><br><br>
  <input class="btn"  type="submit" name="submit" value="SUBMIT"/>
<input type="hidden" name="form_order" value="alpha"/> <input type="hidden" name="form_delivery" value="default"/> <input type="hidden" name="form_format" value="html"/> 
</dd>
</form>
  
  
</dl>

</div>





  </body>
</html>
