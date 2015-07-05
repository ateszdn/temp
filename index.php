<!DOCTYPE html>
<html lang="hu">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LENKEI Bútorszerelvény Kft.</title>

<?php include('i_meta.php'); ?>

<link href="reset.css" rel="stylesheet" type="text/css" />
<link href="style1.css" rel="stylesheet" type="text/css" />
<link href="css/reveal.css" rel="stylesheet" type="text/css" />
<link href="css/orbit-1.3.0.css" rel="stylesheet" type="text/css" />
<link href="css/orbit-customized.css" rel="stylesheet" type="text/css" />
<link href="/favicon.ico" rel="shortcut icon" />
<link href="/favicon.ico" rel="icon" /> 

<!-- <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script> -->
<script type="text/javascript" src="js/jquery.reveal.js"></script>
<script type="text/javascript" src="js/jquery.orbit-1.3.0.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>

<!--[if IE 8]>
    <style>
        div.slider-nav span.right { background: url(css/orbit/right-arrow_ie8.png); right: -44px; }
        div.slider-nav span.left { background: url(css/orbit/left-arrow_ie8.png); left: -44px; }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn').corner("20px");
        });
    </script>
<![endif]-->

	<script type="text/javascript">
		$(document).ready(function(){
			//var so = new SWFObject("images/swf/nyito.swf", "contentheader", "720", "234", "9", "#9ab823");
			//so.addVariable("flashVarText", "this is passed in via FlashVars for example only");
			//so.addParam("scale", "exactFit");
			//so.addParam("wmode", "opaque");
			//so.write("contentheader");

			var params = {wmode:"transparent"};

			swfobject.embedSWF(
			 "images/swf/nyito.swf",
			 "contentheader",
			 "720",
			 "234",
			 "9.0.0",
			 "#9ab823",
			 "expressInstall.swf",
			 params
			);

		});
	</script>

    <script type="text/javascript">
        //Térelválasztók modal
        $(document).ready(function() {
            $('#terelvalasztok-orbit').orbit({timer: false}); // create an Orbit instance
            setTimeout(function(){
                //$("#terelvalasztok-Modal").reveal(); // Modal window auto-reveal turned off
                $('#modal-img-rotate').orbit({animation: 'fade', animationSpeed: 1200, directionalNav: false, timer: true});
            }, 1000);

            setTimeout(function() {
                //$('#terelvalasztok-Modal').trigger('reveal:close')
            }, 17000);

            $('#cancel').click(function() {
                $('#terelvalasztok-Modal').trigger('reveal:close')
            });

            $('#next').click(function() {
                $('#terelvalasztok-Modal').trigger('reveal:close')
                //setTimeout(function(){
                    $("#terelvalasztok-gallery").reveal({animation: 'special'});
                    $('#terelvalasztok-orbit').orbit({timer: false});
                    //$("#terelvalasztok-gallery").trigger('reveal:open');
                //}, 500);
            });

            $('#launch-gallery1, #launch-gallery2, #launch-gallery3').click(function() {
                $("#terelvalasztok-gallery").reveal({animation: 'special'});
                if ($("#terelvalasztok-gallery .orbit-wrapper").length < 1){  // if Orbit instance not exists
                    $('#terelvalasztok-orbit').orbit({timer: false}); // create an Orbit instance
                }
            });

            $('#close-orbit').click(function() {
                $('#terelvalasztok-orbit').trigger('reveal:close')
            });
        });
    </script>

</head>

<body align="center" id="main">

<?php include('i_header.php'); ?>
<div id="background1">
  
  <div id="leftcontentstart">
  	<div id="contentheader">&nbsp;
  	  <div class="clearall"></div>
    <img src="images/contentheader1.png" width="97%" /></div>
    <div class="clearall"></div>
<!--
  <div class="nyitva">
		<p><strong>Tisztelt Partnereink!</strong></p>
		<br>
		<p>Ezúton tájékoztatjuk Önöket cégünk évvégi munkarendjéről:</p>
    	<br>
		<p>2014. december 22. hétfő Nyitvatartás: 7-13 óra</p>
		<br>
		<p>2014. december 23. kedd Nyitvatartás: 7-13 óra</p>
		<br>
		<p>2014. december 24. - 2015. január 4. között ZÁRVA leszünk.</p>
		<br>
		<p>2015. január 5. hétfő LELTÁR</p>
		<br>
		<p>2015. január 6. kedd Nyitás: 7 órakor</p>
		<br>
		<p><strong>Minden kedves partnerünknek Boldog Karácsonyi Ünnepeket<br>és sikerekben gazdag Újesztendőt kivánunk!</strong></p>
  </div>
-->
    <!-- <div class="nyitva">
		<p><strong>Újabb akcióink hamarosan elérhetőek!</strong></p>
		<p><strong>Ünnepi nyitva tartás</strong></p>
    	<br>
    	<p>2011. utolsó nyitva tartási napja: december 22., 14. óráig.</p>
    	<br>
		<p><strong>Nyitás</strong>: 2012. január 2.</p>
		<br>
		<p>Akciós kuponfüzetünk <a href="hirlevelek/kupon.pdf">ITT</a> elérhető!</p>
		<p>Az akció időtartama: 2011. december 5. - 2012. január 31.</p>
	</div> -->
    <div id="content">
    <h2 id="contenttitle">ÜDVÖZÖLJÜK MEGÚJULT HONLAPUNKON!</h2>
    <p>Törekszünk arra hogy a lehető legtöbb és legfontosabb minden vásárlással kapcsolatos információ eljusson Önökhöz, ezért javasoljuk hogy minden esetben kattintsanak rá az „Újdonságok” rovatra is ahol reményeink szerint mindig található majd hasznos és érdekes információ.    
    
    <ul class="contentlist2">
        <!-- ÚJDONSÁGOK -->
<!--
        <li class="content2">
            <a href="akciok2.php"><img src="images/akciok/grass_tn.jpg" /></a>
        </li>
        <li class="content1">
          <a href="akciok2.php"><h3>AKCIÓS TERMÉKEK</h3></a>
          <p>GRASS komfort fiókcsúszók</p>
          <p class="contentreszlet"><a href="akciok2.php">részletek...</a></p>
        </li>
-->
        <li class="content2">
          <a href="#"><img src="images/akciok/henkel_tn.jpg" /></a>
        </li>
        <li class="content1">
          <a href="#" style="display: block;"><h3 style="font-size: 15px; line-height: 1.2em">Henkel Technomelt ömledékragasztók nagykereskedelme</h3></a>
          <p style="font-size: 10px; line-height: 1.2em; margin-top: 35px;">Széles választék, kedvező árak, szaktanácsadás, mintaküldő szolgáltatás, áruküldés futárszolgálattal.</p>
          <!-- <p class="contentreszlet"><a href="#">részletek...</a></p> -->
        </li>

<!--
        <li id="content2">
            <a href="ujdonsag.php"><img src="ujdonsagok/jowat.jpg" border="0" /></a>
        </li>
        <li id="content1">
          <a href="ujdonsag.php"><h3>ÚJDONSÁGOK</h3></a>
          <p>Jowat újdonságaink</p>
          <p class="contentreszlet"><a href="ujdonsag.php">részletek...</a></p>
        </li>
-->
        <!-- AKCIÓK -->
        <li class="content2">
          <a href="akciok.php"><img src="images/akciok/mirka_logo_tn.jpg" /></a>
        </li>
        <li class="content2">
          <a href="akciok.php"><h3>AKCIÓS TERMÉKEK</h3></a>
          <p>Akciós <br />Mirka termékeink</p>
          <!-- <p>Cégünk 20 éves évfordulója alkalmából egységesn -20 % kedvezményt adunk az alábbi termékekből</p> -->
          <p class="contentreszlet"><a href="akciok.php">részletek...</a></p><!-- <a href="akciok.php"><img src="images/akciobadge_20ev.png" alt="" style="position: relative; top: -90px; left: -180px; width: 80px; border:none"/> --></a>
        </li>
    </ul>

    <ul class="contentlist2">
        <!-- Újdonságok -->
        <li class="content2">
          <a href="ujdonsag.php" id="launch-gallery1"><img src="ragaszto_tn.jpg" /></a>
        </li>
        <li class="content2">
          <a href="ujdonsag.php" id="launch-gallery2"><h3>ÚJDONSÁGOK</h3></a>
          <p>Faipari ragasztó</p>
          <p class="contentreszlet"><a href="ujdonsag.php" id="launch-gallery3">részletek...</a></p>
        </li>
        <!-- Térelválasztók modal -->
<!-- 
        <li class="content2">
          <a href="#" id="launch-gallery1"><img src="images/terelvalasztok/terelvalasztok_tn.jpg" /></a>
        </li>
        <li class="content2">
          <a href="#" id="launch-gallery2"><h3>ÚJDONSÁG</h3></a>
          <p>Irodai térelválasztó paraván vázrendszerek</p>
          <p class="contentreszlet"><a href="#" id="launch-gallery3">részletek...</a></p>
        </li>
 -->
        <!-- AKCIÓK HAEFELE-->
        <li class="content2">
          <a href="#"><img src="images/akciok/hafele_tn.jpg" /></a>
        </li>
        <li class="content2">
          <!-- <a href="akciok_haefele.php"><h3>AKCIÓS TERMÉKEK</h3></a> -->
          <p><strong>Új, ALACSONYABB árak minden Häfele termékre!</strong> Gyors, rugalmas beszerzés.</p>
          <p class="contentreszlet"><a href="#">Kérje árajánlatunkat!</a></p></a>
        </li>
    </ul>

    <ul class="contentlist2">
        <!-- Térelválasztók modal -->
        <li class="content2">
          <a href="#" id="launch-gallery1"><img src="images/terelvalasztok/terelvalasztok_tn.jpg" /></a>
        </li>
        <li class="content2">
          <a href="#" id="launch-gallery2"><h3>ÚJDONSÁG</h3></a>
          <p>Irodai térelválasztó paraván vázrendszerek</p>
          <p class="contentreszlet"><a href="#" id="launch-gallery3">részletek...</a></p>
        </li>

    </ul>
    
    </div>

 
  </div>  

<?php include('i_rightpanel.php'); ?>
<?php include('i_bottommenu.php'); ?>
</div>

<!-- Modal windows -->
<div id="terelvalasztok-Modal" class="reveal-modal">
    <div id="terelvalasztok-Modal-ct">
        <div id="terelvalasztok-Modal-header">
            <h2>Irodai térelválasztó <br />paraván vázrendszerek</h2>
            <p>Tekintse meg katalógusunkat!</p>
            <a class="close-reveal-modal" href="#"></a>
        </div>
        <div class="modal-img">
            <div id="modal-img-rotate">
                <img src="images/terelvalasztok/terelvalasztok_kek_crop.jpg" alt="" />
                <img src="images/terelvalasztok/terelvalasztok_piros_crop.jpg" alt="" />
                <img src="images/terelvalasztok/terelvalasztok_zold_crop.jpg" alt="" />
            </div>
        </div>
        <div class="btn-fld">
            <button id="next" class="btn btn-primary" type="submit">Tovább &raquo;</button>
            <button id="cancel" class="btn" type="submit">Mégsem</button>
        </div>
    </div>
</div>

<div id="terelvalasztok-gallery" class="reveal-modal-gallery">
    <div id="terelvalasztok-gallery-ct">
        <div id="terelvalasztok-gallery-header">
            <h2>Irodai térelválasztó paraván vázrendszerek</h2>
            <!-- <p>Tekintse meg katalógusunkat!</p> -->
            <a class="close-reveal-modal" href="#"></a>
        </div>
        <div class="modal-img">
            <div id="terelvalasztok-orbit">
                <img src="images/terelvalasztok/terelvalaszto_1.jpg" alt="" data-caption="#01" />
                <img src="images/terelvalasztok/terelvalaszto_2.jpg" alt="" data-caption="#02" />
                <img src="images/terelvalasztok/terelvalaszto_3.jpg" alt="" data-caption="#03" />
                <img src="images/terelvalasztok/terelvalaszto_4.jpg" alt="" data-caption="#04" />
                <img src="images/terelvalasztok/terelvalaszto_5.jpg" alt="" data-caption="#05" />
                <img src="images/terelvalasztok/terelvalaszto_6.jpg" alt="" data-caption="#06" />
                <img src="images/terelvalasztok/terelvalaszto_7.jpg" alt="" data-caption="#07" />
                <img src="images/terelvalasztok/terelvalaszto_8.jpg" alt="" data-caption="#08" />
                <img src="images/terelvalasztok/terelvalaszto_9.jpg" alt="" data-caption="#09" />
                <img src="images/terelvalasztok/terelvalaszto_10.jpg" alt="" data-caption="#10" />
                <img src="images/terelvalasztok/terelvalaszto_11.jpg" alt="" data-caption="#11" />
            </div>
            <!-- Captions for Orbit -->
            <span class="orbit-caption" id="01">1 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="02">2 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="03">3 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="04">4 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="05">5 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="06">6 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="07">7 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="08">8 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="09">9 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="10">10 <span class="muted">/ 11</span></span>
            <span class="orbit-caption" id="11">11 <span class="muted">/ 11</span></span>
        </div>
        <div class="btn-fld">
            <button id="close-orbit" class="btn btn-primary" type="submit">Bezár</button>
        </div>
    </div>
</div>

</body>
</html>