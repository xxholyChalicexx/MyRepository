<?php
require("config.php");
session_start();
$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) OR DIE(mysqli_connect_errno());
 ?>

<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.0.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="messageScript/sendmessage.js"></script>
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "index.css"], "outOfDate":[]};
</script>

  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4254526159"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?crc=3916672252"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=4219221946" id="pagesheet"/>
  <link rel="stylesheet" type="text/css" href="css/modalView.css"/>
  <link rel="stylesheet" type="text/css" href="css/footer.css"/>

  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?crc=79355346"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-master.css?crc=4033963444"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_index.css?crc=3889622718" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->

  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/abel:n4:default;ubuntu:n7,n5:default;nunito:n7:default.js" type="text/javascript">\x3C/script>');
</script>
   </head>
 <body>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">

      <div><center>
	  <h1 style="font-size: 25px;">Welcome to SettleMetal</h1>
	  <br/>
	 <hr/>
	  <p><input id="txt_signin_01" type="text" class="modal_input_box" placeholder="Enter phone number" maxlength="10"></p>

      <p><button id="btn_signin_01" class="modal_button " onclick="sendSMS()">signin</button></p>
	  </center>
		<h2 class="hr_center"><span>or</span></h2>
		<center>
		<button id="btn_fb_signin_01" class="modal_button " style="background-color:#008bd8">Facebook Login</button>
		</center>
		<p></p>
	  </div>
    </div>
    <div class="modal-footer">
	<hr/>
      <h3 id="modalfooter"></h3>
    </div>
  </div>

</div>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1281"><!-- responsive breakpoint node -->
   <div class="Recolored-PNG-Graphic shadow clearfix" id="page"><!-- column -->
    <div class="position_content" id="page_position_content">
     <div class="clearfix colelem" id="ppu201-4"><!-- group -->
      <div class="clearfix grpelem" id="pu201-4"><!-- column -->
       <img class="colelem temp_no_img_src" id="u201-4" alt="SELECT DEVICE" width="232" height="35" data-orig-src="images/u201-4.png?crc=3786348439" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
       <div class="clearfix colelem" id="pu248"><!-- group -->
        <div class="transition clip_frame grpelem" id="u248"><!-- image -->
        <a href="mobile.html">
         <img class="block temp_no_img_src" id="u248_img" data-orig-src="images/mobile.png?crc=456838963" alt="" width="95" height="94" src="images/blank.gif?crc=4208392903" />
       	</a>
        </div>
        <div class="transition clip_frame grpelem" id="u258"><!-- image -->
         <a href="tablet.html">
         <img class="block temp_no_img_src" id="u258_img" data-orig-src="images/tablat.png?crc=515013814" alt="" width="93" height="94" src="images/blank.gif?crc=4208392903"/>
       	 </a>
        </div>
        <div class="transition clip_frame grpelem" id="u268"><!-- image -->
          <a href="laptop.html">
         <img class="block temp_no_img_src" id="u268_img" data-orig-src="images/laptop.png?crc=4187721194" alt="" width="95" height="94" src="images/blank.gif?crc=4208392903"/>
          </a>
        </div>
        <div class="transition clip_frame grpelem" id="u278"><!-- image -->
          <a href="camera.html">
         <img class="block temp_no_img_src" id="u278_img" data-orig-src="images/camera.png?crc=484975444" alt="" width="94" height="94" src="images/blank.gif?crc=4208392903"/>
       	 </a>
        </div>
       </div>
       <div class="clearfix colelem" id="pu367"><!-- group -->
        <div class="grpelem shared_content" id="u367" data-content-guid="u367_content"><!-- simple frame --></div>
        <img class="grpelem temp_no_img_src" id="u313-4" alt="Got Your Phone Wet" width="317" height="43" data-orig-src="images/u313-4.png?crc=128793166" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
        <div class="grpelem shared_content" id="u359" data-content-guid="u359_content"><!-- simple frame --></div>
       </div>
       <div class="clearfix colelem" id="pu316"><!-- group -->
        <div class="clip_frame grpelem" id="u316"><!-- image -->
         <img class="block temp_no_img_src" id="u316_img" data-orig-src="images/swimming-crop-u316.png?crc=4171383108" alt="" width="114" height="62" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame clearfix grpelem" id="u326"><!-- image -->
         <img class="position_content temp_no_img_src" id="u326_img" data-orig-src="images/cloud_rain.png?crc=4093531517" alt="" width="165" height="165" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame clearfix grpelem" id="u336"><!-- image -->
         <img class="position_content temp_no_img_src" id="u336_img" data-orig-src="images/toilet.png?crc=510423147" alt="" width="165" height="165" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame clearfix grpelem" id="u346"><!-- image -->
         <img class="position_content temp_no_img_src" id="u346_img" data-orig-src="images/ambulance.png?crc=3871940499" alt="" width="165" height="165" src="images/blank.gif?crc=4208392903"/>
        </div>
       </div>
       <div class="clearfix colelem shared_content" id="u356-4" data-content-guid="u356-4_content"><!-- content -->
        <p id="u356-2">We Run An Emergency Service</p>
       </div>
       <div class="clearfix colelem" id="pu384-4"><!-- group -->
        <div class="clearfix grpelem shared_content" id="u384-4" data-content-guid="u384-4_content"><!-- content -->
         <p id="u384-2">Authentic servicing</p>
        </div>
        <div class="clearfix grpelem" id="u393"><!-- group -->
         <div class="clip_frame clearfix grpelem" id="u396"><!-- image -->
          <img class="position_content temp_no_img_src" id="u396_img" data-orig-src="images/authentication.png?crc=3971578605" alt="" width="165" height="165" src="images/blank.gif?crc=4208392903"/>
         </div>
        </div>
        <div class="clearfix grpelem shared_content" id="u413-4" data-content-guid="u413-4_content"><!-- content -->
         <p id="u413-2">24X7 Support</p>
        </div>
        <div class="clearfix grpelem" id="u414"><!-- group -->
         <div class="clip_frame clearfix grpelem" id="u410"><!-- image -->
          <img class="position_content temp_no_img_src" id="u410_img" data-orig-src="images/support_time.png?crc=242345324" alt="" width="181" height="181" src="images/blank.gif?crc=4208392903"/>
         </div>
        </div>
        <div class="clearfix grpelem shared_content" id="u446-4" data-content-guid="u446-4_content"><!-- content -->
         <p id="u446-2">Reasonable Rates</p>
        </div>
        <div class="clearfix grpelem" id="u442"><!-- group -->
         <div class="clip_frame clearfix grpelem" id="u443"><!-- image -->
          <img class="position_content temp_no_img_src" id="u443_img" data-orig-src="images/price_tag.png?crc=209193393" alt="" width="172" height="172" src="images/blank.gif?crc=4208392903"/>
         </div>
        </div>
       </div>
       <div class="clearfix colelem" id="pu492"><!-- group -->
        <div class="clearfix grpelem" id="u492"><!-- group -->
         <div class="clearfix grpelem shared_content" id="u494-6" data-content-guid="u494-6_content"><!-- content -->
          <p id="u494-2">Backup</p>
          <p id="u494-4">Phone Included</p>
         </div>
        </div>
        <div class="clearfix grpelem" id="u484"><!-- group -->
         <div class="clearfix grpelem shared_content" id="u488-6" data-content-guid="u488-6_content"><!-- content -->
          <p id="u488-2">Three Months</p>
          <p id="u488-4">additional Warranty</p>
         </div>
        </div>
        <div class="clearfix grpelem" id="u500"><!-- column -->
         <div class="position_content" id="u500_position_content">
          <div class="clip_frame clearfix colelem" id="u496"><!-- image -->
           <img class="position_content temp_no_img_src" id="u496_img" data-orig-src="images/delivery_truck.png?crc=55537708" alt="" width="171" height="171" src="images/blank.gif?crc=4208392903"/>
          </div>
          <div class="clearfix colelem shared_content" id="u499-4" data-content-guid="u499-4_content"><!-- content -->
           <p id="u499-2">One Day Delivery</p>
          </div>
         </div>
        </div>
        <div class="clip_frame clearfix grpelem" id="u485"><!-- image -->
         <img class="position_content temp_no_img_src" id="u485_img" data-orig-src="images/warrenty%20card.png?crc=3794743768" alt="" width="191" height="191" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame grpelem" id="u490"><!-- image -->
         <img class="block temp_no_img_src" id="u490_img" data-orig-src="images/mobile.png?crc=456838963" alt="" width="72" height="72" src="images/blank.gif?crc=4208392903"/>
        </div>
       </div>
      </div>
      <div class="clip_frame grpelem" id="u303"><!-- image -->
       <img class="block temp_no_img_src" id="u303_img" data-orig-src="images/web-crop-u303.jpg?crc=435119720" alt="" width="696" height="715" src="images/blank.gif?crc=4208392903"/>
      </div>
      <div class="clearfix grpelem shared_content" id="u596-7" data-content-guid="u596-7_content"><!-- content -->
       <p id="u596-3"><span id="u596">200</span><span id="u596-2"></span></p>
       <p id="u596-5">Customers served</p>
      </div>
      <div class="clearfix grpelem shared_content" id="u599-7" data-content-guid="u599-7_content"><!-- content -->
       <p id="u599-3"><span id="u599">20</span><span id="u599-2"></span></p>
       <p id="u599-5">Experts</p>
      </div>
      <div class="clearfix grpelem shared_content" id="u801-8" data-content-guid="u801-8_content"><!-- content -->
       <p id="u801-4"><span id="u801">The</span><span id="u801-2"> </span><span id="u801-3">best repair services</span></p>
       <p id="u801-6">India has</p>
      </div>
      <div class="clearfix grpelem shared_content" id="u837" data-content-guid="u837_content"><!-- group -->
       <div class="shadow rgba-background clearfix grpelem" id="u804"><!-- group -->
        <a class="nonblock nontext Button clearfix grpelem" id="buttonu807" href="http://#"><!-- container box --><div class="clearfix grpelem" id="u808-4"><!-- content --><p id="u808-2">Search</p></div></a>
       </div>
      </div>
      <div class="Button clearfix grpelem shared_content" id="buttonu1215" data-content-guid="buttonu1215_content"><!-- container box -->
       <div class="clearfix grpelem" id="u1216-5"><!-- content -->
        <p id="u1216-3"><span id="u1216">City</span><span id="u1216-2"></span></p>
       </div>
	   <div class="dropdown-content">
		  <span style="display: block; text-align: left">Dehradun</span>
		  <span style="display: block; text-align: left">Bangalore</span>
		</div>
      </div>
      <div class="grpelem shared_content" id="u1616" data-content-guid="u1616_content"><!-- simple frame -->
	  <input type="text" class="input_box" placeholder="Enter City name">
	  </div>
     </div>
     <div class="clearfix colelem shared_content" id="pu5804" data-content-guid="pu5804_content"><!-- group -->
      <div class="browser_width" id="u5804-bw">
       <div class="rgba-background" id="u5804"><!-- simple frame --></div>
      </div>
      <a class="nonblock nontext MuseLinkActive clip_frame" id="u159" href="index.html"><!-- image --><img class="block temp_no_img_src" id="u159_img" data-orig-src="images/compress_logo3.png?crc=3923570232" alt="" width="284" height="48" src="images/blank.gif?crc=4208392903"/></a>
      <a class="nonblock nontext Button rounded-corners clearfix" id="buttonu3008" href="how-it-work.html"><!-- container box --><div class="clearfix grpelem" id="u3010-4"><!-- content --><p id="u3010-2">How it works</p></div></a>
      <div class="new-hyperLink clearfix" id="u3023-5"><!-- content -->
       <p id="u3023-3"><a id="u3023-3-1" class="nonblock" href="#" >Login/ Sign up</a></p>
      </div>
     </div>
     <div class="clearfix colelem" id="pu1328-5"><!-- group -->
      <div class="clearfix grpelem shared_content" id="u1328-5" data-content-guid="u1328-5_content"><!-- content -->
       <p id="u1328-3"><span id="u1328">Book a repair</span> anywhere</p>
      </div>
      <div class="clearfix grpelem shared_content" id="u1332-8" data-content-guid="u1332-8_content"><!-- content -->
       <p id="u1332-2">Diagnose, book a repair, or just know</p>
       <p id="u1332-6"><span id="u1332-3">an estimate of the repair on the</span> <span id="u1332-5">Go</span></p>
      </div>
      <div class="browser_width grpelem" id="u1325-bw">
       <div id="u1325"><!-- group -->
        <div class="clearfix" id="u1325_align_to_page">
         <div class="clip_frame clearfix grpelem" id="u1364"><!-- image -->
          <img class="position_content temp_no_img_src" id="u1364_img" data-orig-src="images/phone.png?crc=4106291881" alt="" width="447" height="568" src="images/blank.gif?crc=4208392903"/>
         </div>
         <div class="clearfix grpelem" id="pu1358-10"><!-- column -->
          <img class="colelem temp_no_img_src" id="u1358-10" alt="Download SETTLEMETAL App now " width="609" height="43" data-orig-src="images/u1358-10.png?crc=4017576775" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <div class="clearfix colelem shared_content" id="u1336" data-content-guid="u1336_content"><!-- group -->
           <div class="clearfix grpelem" id="pu1345-4"><!-- group -->
            <div class="clearfix grpelem" id="u1345-4"><!-- content -->
             <p id="u1345-2">+91</p>
            </div>
            <div class="grpelem" id="u1727"><!-- simple frame -->
			<input id="u1727-01" type="text" class="input_box" placeholder="Enter mobile number">
			</div>
           </div>
           <a class="nonblock nontext Button clearfix grpelem" id="buttonu1339" href="#"><!-- container box --><div class="clearfix grpelem" id="u1340-4"><!-- content --><p id="u1340-2">Get App</p></div></a>
          </div>
          <div class="clearfix colelem shared_content" id="u1361-5" data-content-guid="u1361-5_content"><!-- content -->
           <p id="u1361-3"><span id="u1361">Or</span><span id="u1361-2"> get directly from</span></p>
          </div>
         </div>
        </div>
       </div>
      </div>
      <a class="nonblock nontext grpelem shared_content" id="u2822" href="#" data-content-guid="u2822_content"><!-- state-based BG images --></a>
     </div>

   <div class="verticalspacer" data-offset-top="1481" data-content-above-spacer="1480" data-content-below-spacer="166"></div>

     	<!-- footer -->
     	<div class="browser_width colelem shared_content" id="u4880-bw" data-content-guid="u4880-bw_content">
     		 <div id="u4880">
      			<br/>
       			<img src="images/compress_logo3.png" id="u221" height="30" width="200" />
  		 		<div id="u423">
		  		 	<h4>&copy; 2017 SettleMetal</h4>
		  		 </div>
		  	  <div class="clearfix colelem" id="ppu201-4"><!-- group -->
			      <div class="clearfix grpelem" id="pu201-4"><!-- column -->
			       	<p id="u201-6" ><span id="style">Company</span><br/><br/>
			       		<span id="u202-6"><a href="about.html">About Us</a><br/>
			       		<a href="#">How it works</a><br/>
			       		<a href="#">Blog</a><br/>
			       		<a href="#">Terms&amp;Conditions</a><br/>
			       		<a href="#">Policy </a><br/>
			       		<a href="#">Contact Us </a>

			       		</span>
	       			</p>
	       		</div>
     		</div>
     		<div class="clearfix colelem" id="ppu201-4"><!-- group -->
			      <div class="clearfix grpelem" id="pu201-4"><!-- column -->
			       	<p id="u201-3" ><span id="style">Servicing In</span><br/><br/>
			       		<span id="u202-3"><a href="about.html">Delhi</a><br/>
			       		<a href="#">Bangalore</a><br/>
			       		<a href="#">Chennai</a><br/>
			       		<a href="#">Noida</a><br/>
			       		<a href="#">Mumbai </a>
			       		</span>
	       			</p>
	       		</div>
     		</div>
     		<div class="clearfix colelem" id="ppu201-4"><!-- group -->
			      <div class="clearfix grpelem" id="pu201-4"><!-- column -->
			       	<p id="u201-7" ><span id="style">Follow</span><br/><br/>
			       		<span id="u202-7"><a href="about.html">Facebook</a><br/>
			       		<a href="#">Twitter</a><br/>
			       		<a href="#">Google+</a><br/>
			       		<a href="#">LinkedIn</a><br/>
			       		<a href="#">YouTube </a>
			       		</span>
	       			</p>
	       		</div>
     		</div>
    		</div>
  	 	</div>
   <!-- footer ends -->
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u2822-r.png?crc=4105803385" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2822-m.png?crc=3775149641" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  </div>
  </div>
  <div class="breakpoint" id="bp_1280" data-min-width="769" data-max-width="1280"><!-- responsive breakpoint node -->
   <div class="Recolored-PNG-Graphic shadow clearfix temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content temp_no_id" data-orig-id="page_position_content">
     <span class="clearfix colelem placeholder" data-placeholder-for="pu5804_content"><!-- placeholder node --></span>
     <div class="clearfix colelem temp_no_id" data-orig-id="ppu201-4"><!-- group -->
      <div class="clearfix grpelem temp_no_id" data-orig-id="pu201-4"><!-- column -->
       <img class="colelem temp_no_id temp_no_img_src" alt="SELECT DEVICE" width="211" height="35" data-orig-src="images/u201-42.png?crc=3965631335" data-orig-id="u201-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
       <div class="clearfix colelem temp_no_id" data-orig-id="pu248"><!-- group -->
        <div class="transition clip_frame grpelem temp_no_id" data-orig-id="u248"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/mobile.png?crc=456838963" alt="" width="86" height="85" data-orig-id="u248_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="transition clip_frame grpelem temp_no_id" data-orig-id="u258"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/tablat.png?crc=515013814" alt="" width="84" height="85" data-orig-id="u258_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="transition clip_frame grpelem temp_no_id" data-orig-id="u268"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/laptop.png?crc=4187721194" alt="" width="86" height="85" data-orig-id="u268_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="transition clip_frame grpelem temp_no_id" data-orig-id="u278"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/camera.png?crc=484975444" alt="" width="85" height="85" data-orig-id="u278_img" src="images/blank.gif?crc=4208392903"/>
        </div>
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu367"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u367_content"><!-- placeholder node --></span>
        <img class="grpelem temp_no_id temp_no_img_src" alt="Got Your Phone Wet" width="331" height="43" data-orig-src="images/u313-42.png?crc=3779336280" data-orig-id="u313-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
        <span class="grpelem placeholder" data-placeholder-for="u359_content"><!-- placeholder node --></span>
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu316"><!-- group -->
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u316"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/swimming-crop-u3162.png?crc=34427275" alt="" width="104" height="56" data-orig-id="u316_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u326"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/cloud_rain-crop-u326.png?crc=4184571422" alt="" width="76" height="56" data-orig-id="u326_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u336"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/toilet-crop-u336.png?crc=162490690" alt="" width="85" height="55" data-orig-id="u336_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u346"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/ambulance-crop-u346.png?crc=4252568483" alt="" width="85" height="63" data-orig-id="u346_img" src="images/blank.gif?crc=4208392903"/>
        </div>
       </div>
       <span class="clearfix colelem placeholder" data-placeholder-for="u356-4_content"><!-- placeholder node --></span>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu384-4"><!-- group -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u384-4_content"><!-- placeholder node --></span>
        <div class="clearfix grpelem temp_no_id" data-orig-id="u393"><!-- group -->
         <div class="clip_frame grpelem temp_no_id" data-orig-id="u396"><!-- image -->
          <img class="block temp_no_id temp_no_img_src" data-orig-src="images/authentication-crop-u396.png?crc=3774415815" alt="" width="103" height="80" data-orig-id="u396_img" src="images/blank.gif?crc=4208392903"/>
         </div>
        </div>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u413-4_content"><!-- placeholder node --></span>
        <div class="clearfix grpelem temp_no_id" data-orig-id="u414"><!-- group -->
         <div class="clip_frame grpelem temp_no_id" data-orig-id="u410"><!-- image -->
          <img class="block temp_no_id temp_no_img_src" data-orig-src="images/support_time-crop-u410.png?crc=230301169" alt="" width="115" height="80" data-orig-id="u410_img" src="images/blank.gif?crc=4208392903"/>
         </div>
        </div>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u446-4_content"><!-- placeholder node --></span>
        <div class="clearfix grpelem temp_no_id" data-orig-id="u442"><!-- group -->
         <div class="clip_frame grpelem temp_no_id" data-orig-id="u443"><!-- image -->
          <img class="block temp_no_id temp_no_img_src" data-orig-src="images/price_tag-crop-u443.png?crc=174548520" alt="" width="111" height="80" data-orig-id="u443_img" src="images/blank.gif?crc=4208392903"/>
         </div>
        </div>
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu492"><!-- group -->
        <div class="grpelem temp_no_id" data-orig-id="u492"><!-- simple frame --></div>
        <div class="grpelem temp_no_id" data-orig-id="u484"><!-- simple frame --></div>
        <div class="clearfix grpelem temp_no_id" data-orig-id="u500"><!-- column -->
         <div class="position_content temp_no_id" data-orig-id="u500_position_content">
          <div class="clip_frame colelem temp_no_id" data-orig-id="u496"><!-- image -->
           <img class="block temp_no_id temp_no_img_src" data-orig-src="images/delivery_truck-crop-u496.png?crc=273476175" alt="" width="111" height="80" data-orig-id="u496_img" src="images/blank.gif?crc=4208392903"/>
          </div>
          <span class="clearfix colelem placeholder" data-placeholder-for="u499-4_content"><!-- placeholder node --></span>
         </div>
        </div>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u488-6_content"><!-- placeholder node --></span>
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u485"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/warrenty%20card-crop-u485.png?crc=4037576788" alt="" width="111" height="80" data-orig-id="u485_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <span class="clearfix grpelem placeholder" data-placeholder-for="u494-6_content"><!-- placeholder node --></span>
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u490"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/mobile.png?crc=456838963" alt="" width="50" height="49" data-orig-id="u490_img" src="images/blank.gif?crc=4208392903"/>
        </div>
       </div>
      </div>
      <div class="clip_frame grpelem temp_no_id" data-orig-id="u303"><!-- image -->
       <img class="block temp_no_id temp_no_img_src" data-orig-src="images/web-crop-u3032.jpg?crc=3801325196" alt="" width="637" height="641" data-orig-id="u303_img" src="images/blank.gif?crc=4208392903"/>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u596-7_content"><!-- placeholder node --></span>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u599-7_content"><!-- placeholder node --></span>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u801-8_content"><!-- placeholder node --></span>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u837_content"><!-- placeholder node --></span>
      <span class="Button clearfix grpelem placeholder" data-placeholder-for="buttonu1215_content"><!-- placeholder node --></span>
      <span class="grpelem placeholder" data-placeholder-for="u1616_content"><!-- placeholder node --></span>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="pu1328-5"><!-- group -->
      <span class="clearfix grpelem placeholder" data-placeholder-for="u1328-5_content"><!-- placeholder node --></span>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u1332-8_content"><!-- placeholder node --></span>
      <div class="browser_width grpelem temp_no_id" data-orig-id="u1325-bw">
       <div class="temp_no_id" data-orig-id="u1325"><!-- group -->
        <div class="clearfix temp_no_id" data-orig-id="u1325_align_to_page">
         <div class="clip_frame grpelem temp_no_id" data-orig-id="u1364"><!-- image -->
          <img class="block temp_no_id temp_no_img_src" data-orig-src="images/phone-crop-u1364.png?crc=518130011" alt="" width="406" height="544" data-orig-id="u1364_img" src="images/blank.gif?crc=4208392903"/>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu1358-10"><!-- column -->
          <img class="colelem temp_no_id temp_no_img_src" alt="Download SETTLEMETAL App now " width="597" height="43" data-orig-src="images/u1358-102.png?crc=510726519" data-orig-id="u1358-10" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u1336_content"><!-- placeholder node --></span>
          <span class="clearfix colelem placeholder" data-placeholder-for="u1361-5_content"><!-- placeholder node --></span>
         </div>
        </div>
       </div>
      </div>
      <span class="nonblock nontext grpelem placeholder" data-placeholder-for="u2822_content"><!-- placeholder node --></span>
     </div>
     <div class="verticalspacer" data-offset-top="1263" data-content-above-spacer="1256" data-content-below-spacer="69"></div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u4880-bw_content"><!-- placeholder node --></span>
    </div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u2822-r2.png?crc=4282566584" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2822-m2.png?crc=4118580981" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>

  <div class="breakpoint" id="bp_768" data-max-width="768"><!-- responsive breakpoint node -->
   <div class="Recolored-PNG-Graphic shadow clearfix temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content temp_no_id" data-orig-id="page_position_content">
     <div class="clearfix colelem" id="paccordionu2561"><!-- group -->
      <div class="browser_width" id="accordionu2561-bw">
       <ul class="AccordionWidget clearfix" id="accordionu2561"><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem100" id="u2570"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100" id="u2571-4"><!-- content --><p id="u2571-2">Menu</p></div><div class="AccordionPanelContent disn clearfix colelem100" id="u2572"><!-- column --><a class="nonblock nontext Button clearfix colelem" id="buttonu1380" href="http://#"><!-- container box --><div class="clearfix grpelem" id="u1381-4"><!-- content --><p id="u1381-2">How it works</p></div></a><a class="nonblock nontext Button clearfix colelem" id="buttonu2700" href="http://#"><!-- container box --><div class="clearfix grpelem" id="u2701-4"><!-- content --><p id="u2701-2">Login/Sign UP</p></div></a><a class="nonblock nontext Button clearfix colelem" id="buttonu2714" href="http://#"><!-- container box --><div class="clearfix grpelem" id="u2715-4"><!-- content --><p id="u2715-2">Download app</p></div></a></div></li>
       </ul>
      </div>
      <a class="nonblock nontext MuseLinkActive clip_frame temp_no_id" href="index.html" data-orig-id="u159"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/compress_logo3.png?crc=3923570232" alt="" width="152" height="26" data-orig-id="u159_img" src="images/blank.gif?crc=4208392903"/></a>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="ppu201-4"><!-- group -->
      <div class="clearfix grpelem temp_no_id" data-orig-id="pu201-4"><!-- column -->
       <img class="colelem temp_no_id temp_no_img_src" alt="SELECT DEVICE" width="126" height="33" data-orig-src="images/u201-43.png?crc=3774777979" data-orig-id="u201-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
       <div class="clearfix colelem temp_no_id" data-orig-id="pu248"><!-- group -->
        <div class="transition clip_frame grpelem temp_no_id" data-orig-id="u248"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/mobile.png?crc=456838963" alt="" width="52" height="51" data-orig-id="u248_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="transition clip_frame grpelem temp_no_id" data-orig-id="u258"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/tablat.png?crc=515013814" alt="" width="50" height="51" data-orig-id="u258_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="transition clip_frame grpelem temp_no_id" data-orig-id="u268"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/laptop.png?crc=4187721194" alt="" width="51" height="51" data-orig-id="u268_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="transition clip_frame grpelem temp_no_id" data-orig-id="u278"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/camera.png?crc=484975444" alt="" width="51" height="51" data-orig-id="u278_img" src="images/blank.gif?crc=4208392903"/>
        </div>
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu367"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u367_content"><!-- placeholder node --></span>
        <img class="grpelem temp_no_id temp_no_img_src" alt="Got Your Phone Wet" width="198" height="25" data-orig-src="images/u313-43.png?crc=3839556011" data-orig-id="u313-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
        <span class="grpelem placeholder" data-placeholder-for="u359_content"><!-- placeholder node --></span>
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu316"><!-- group -->
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u316"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/swimming-crop-u3163.png?crc=3837669987" alt="" width="62" height="34" data-orig-id="u316_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u326"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/cloud_rain-crop-u3262.png?crc=4048632964" alt="" width="46" height="34" data-orig-id="u326_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u336"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/toilet-crop-u3362.png?crc=4229695905" alt="" width="51" height="33" data-orig-id="u336_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u346"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/ambulance-crop-u3462.png?crc=432519827" alt="" width="51" height="38" data-orig-id="u346_img" src="images/blank.gif?crc=4208392903"/>
        </div>
       </div>
       <span class="clearfix colelem placeholder" data-placeholder-for="u356-4_content"><!-- placeholder node --></span>
      </div>
      <div class="clip_frame grpelem temp_no_id" data-orig-id="u303"><!-- image -->
       <img class="block temp_no_id temp_no_img_src" data-orig-src="images/web-crop-u3033.jpg?crc=521769076" alt="" width="383" height="393" data-orig-id="u303_img" src="images/blank.gif?crc=4208392903"/>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u596-7_content"><!-- placeholder node --></span>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u599-7_content"><!-- placeholder node --></span>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u801-8_content"><!-- placeholder node --></span>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u837_content"><!-- placeholder node --></span>
      <span class="Button clearfix grpelem placeholder" data-placeholder-for="buttonu1215_content"><!-- placeholder node --></span>
      <span class="grpelem placeholder" data-placeholder-for="u1616_content"><!-- placeholder node --></span>
     </div>
     <div class="clearfix colelem" id="ppu413-4"><!-- group -->
      <div class="clearfix grpelem" id="pu413-4"><!-- group -->
       <span class="clearfix grpelem placeholder" data-placeholder-for="u413-4_content"><!-- placeholder node --></span>
       <div class="clearfix grpelem temp_no_id" data-orig-id="u414"><!-- group -->
        <div class="clip_frame grpelem temp_no_id" data-orig-id="u410"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/support_time-crop-u4102.png?crc=331040712" alt="" width="99" height="69" data-orig-id="u410_img" src="images/blank.gif?crc=4208392903"/>
        </div>
       </div>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u384-4_content"><!-- placeholder node --></span>
      <div class="clearfix grpelem temp_no_id" data-orig-id="u393"><!-- group -->
       <div class="clip_frame grpelem temp_no_id" data-orig-id="u396"><!-- image -->
        <img class="block temp_no_id temp_no_img_src" data-orig-src="images/authentication-crop-u3962.png?crc=4259239099" alt="" width="89" height="69" data-orig-id="u396_img" src="images/blank.gif?crc=4208392903"/>
       </div>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u446-4_content"><!-- placeholder node --></span>
      <div class="clearfix grpelem temp_no_id" data-orig-id="u442"><!-- group -->
       <div class="clip_frame grpelem temp_no_id" data-orig-id="u443"><!-- image -->
        <img class="block temp_no_id temp_no_img_src" data-orig-src="images/price_tag-crop-u4432.png?crc=61040603" alt="" width="95" height="68" data-orig-id="u443_img" src="images/blank.gif?crc=4208392903"/>
       </div>
      </div>
     </div>
     <div class="clearfix colelem" id="pu500"><!-- group -->
      <div class="clearfix grpelem temp_no_id" data-orig-id="u500"><!-- column -->
       <div class="position_content temp_no_id" data-orig-id="u500_position_content">
        <div class="clip_frame colelem temp_no_id" data-orig-id="u496"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/delivery_truck-crop-u4962.png?crc=4022404098" alt="" width="86" height="68" data-orig-id="u496_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="u499-4_content"><!-- placeholder node --></span>
       </div>
      </div>
      <div class="clearfix grpelem temp_no_id" data-orig-id="u484"><!-- column -->
       <div class="position_content" id="u484_position_content">
        <div class="clip_frame colelem temp_no_id" data-orig-id="u485"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/warrenty%20card-crop-u4852.png?crc=93682099" alt="" width="88" height="60" data-orig-id="u485_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="u488-6_content"><!-- placeholder node --></span>
       </div>
      </div>
      <div class="clearfix grpelem temp_no_id" data-orig-id="u492"><!-- column -->
       <div class="position_content" id="u492_position_content">
        <div class="clip_frame colelem temp_no_id" data-orig-id="u490"><!-- image -->
         <img class="block temp_no_id temp_no_img_src" data-orig-src="images/mobile.png?crc=456838963" alt="" width="39" height="39" data-orig-id="u490_img" src="images/blank.gif?crc=4208392903"/>
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="u494-6_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="pu1328-5"><!-- group -->
      <span class="clearfix grpelem placeholder" data-placeholder-for="u1328-5_content"><!-- placeholder node --></span>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u1332-8_content"><!-- placeholder node --></span>
      <div class="clearfix grpelem temp_no_id" data-orig-id="u1325"><!-- group -->
       <div class="clip_frame grpelem temp_no_id" data-orig-id="u1364"><!-- image -->
        <img class="block temp_no_id temp_no_img_src" data-orig-src="images/phone-crop-u13642.png?crc=4217304480" alt="" width="244" height="326" data-orig-id="u1364_img" src="images/blank.gif?crc=4208392903"/>
       </div>
       <div class="clearfix grpelem temp_no_id" data-orig-id="pu1358-10"><!-- column -->
        <img class="colelem temp_no_id temp_no_img_src" alt="Download SETTLEMETAL App now " width="361" height="43" data-orig-src="images/u1358-103.png?crc=4015974294" data-orig-id="u1358-10" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u1336_content"><!-- placeholder node --></span>
        <span class="new-hyperLink clearfix colelem placeholder" data-placeholder-for="u1361-5_content"><!-- placeholder node --></span>
       </div>
      </div>
      <span class="nonblock nontext grpelem placeholder" data-placeholder-for="u2822_content"><!-- placeholder node --></span>
     </div>
     <div class="verticalspacer" data-offset-top="1051" data-content-above-spacer="1050" data-content-below-spacer="84"></div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u4880-bw_content"><!-- placeholder node --></span>
    </div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u2822-r3.png?crc=254955483" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2822-m3.png?crc=239228826" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>

  <!-- Other scripts -->
  <script type="text/javascript">
    var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("u3023-3-1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function(e) {
	e.preventDefault();
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

  </script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch","webpro","musewpdisclosure","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#accordionu2561', ['#bp_768'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu2561 */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
<script src="script/modalView.js" type="text/javascript"></script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=168988563" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
