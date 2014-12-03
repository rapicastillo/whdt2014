<!DOCTYPE html>
<html class="js history backgroundsize borderradius boxshadow opacity cssanimations csstransforms csstransitions fontface skrollr " style="">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Military Assets </title>
<script type='text/javascript' src='js/jquery.min.js'></script>
<style>

.clsbody {background-color:#036cb6; font:Verdana, Geneva, sans-serif}
.headdiv { padding-left:40px;}
.clshead  { font-size:30px; font-weight:900; color:#DB423E;}
.clssubhead  { font-size:18px; font-weight:700; color:#DB423E;}
.divhead { font-size:20px; font-weight:500; color:#fff;}
.clsblock {float:inherit; display:inline-block; padding:10px 20px 10px 20px;cursor:pointer}
/*.clsblock img { background:#FFF; border-radius:30px}*/
.clsunusedblock {float:inherit; display:inline-block; padding:10px 20px 10px 20px;}
.clsdetail { text-align:left; padding-left:15%; padding-right:15%;}
.detailhead { font-size:30px; font-weight:800; color:#DB423E;}
.detaildesc { font-size:18px;font-weight:bold;color:#FFF;}
p.tc { font-weight:700; font-size:18px; color:#fff; text-align:justify; width:90%; }
span.clstext { font-size:15px;font-weight:bold;color:#FFF}
span.clsnumber { font-size:15px;font-weight:bold;color:#DB423E}
.clsblock:hover img { opacity: .6; background:#DB423E }
</style>
<script type='text/javascript'>
$(window).load(function(){
$("#Reply-open-ship").click(function () {
    $("div#Reply-ship").show("slow");

    $("div#Reply-aircraft").hide("slow");
    $("div#Reply-helicopter").hide("slow");
    $("div#Reply-un").hide("slow");
});

$("#Reply-open-aircraft").click(function () {
    $("div#Reply-aircraft").show("slow");

    $("div#Reply-ship").hide("slow");
    $("div#Reply-helicopter").hide("slow");
    $("div#Reply-un").hide("slow");
});

$("#Reply-open-helicopter").click(function () {
    $("div#Reply-helicopter").show("slow");

    $("div#Reply-ship").hide("slow");
    $("div#Reply-aircraft").hide("slow");
    $("div#Reply-un").hide("slow");
});

$("#Reply-open-un").click(function () {
    $("div#Reply-un").show("slow");

    $("div#Reply-ship").hide("slow");
    $("div#Reply-aircraft").hide("slow");
    $("div#Reply-helicopter").hide("slow");
});


});//]]>

</script>
</head>

<body class="clsbody">
<div class="container">
  <!-- <div class="headdiv">
      <font class="clshead">Foreigh military assets in support of humanitarian operations</font><br>
      <font class="clssubhead">Study on the Philippines</font>
      <p class="tc">In the direct aftermath of an emergency, it can be difficult to deliver assistance to affected communities especially if a country's infrastructure has been compromised. Partnership with other relief providers can greatly enhance the overall capacity of the humanitarian community to help those in need.
      </p>
  </div> -->
  <div class="maincotainer" style="display:inline-block;width:100%;padding-top:30px">
  		<div style="float:left;display:inline-block; width:45%; text-align: center;">
           <div class="divhead">Number of assets</div>
           <div class="subcontainer" style="padding-top:20px; text-align:center">
           		<div id="Reply-open-ship" class="clsblock">
              		<img src="images/logistics_ship_100px_bluebox.png">
                    <br><span class="clstext"> Ship </span> <br><span class="clsnumber">27</span>
                </div>
                <div id="Reply-open-aircraft" class="clsblock">
              		<img src="images/logistics_airport_100px_bluebox.png">
                    <br><span class="clstext"> Aircraft </span> <br><span class="clsnumber">72</span>
                </div>
                <div id="Reply-open-helicopter" class="clsblock">
              		<img src="images/logistics_helicopter_100px_bluebox.png">
                    <br><span class="clstext"> Helicopters </span> <br><span class="clsnumber">29</span>
                </div>
           </div>
           <div class="subcontainer" style="padding-top:20px; text-align:center">
           		<div class="clsunusedblock">
              	    <br><br>
                </div>
                <div id="Reply-open-un" class="clsblock">
              		<img src="images/activity_civil_military_coordination_100px_bluebox.png">
                    <br><span class="clstext"> UN Member States<br>that deployed assets</span> <br><span class="clsnumber">44</span>
                </div>
                <div class="clsunusedblock">
              		<br><br>
                </div>
           </div>
        </div>
        <div style="float:right;width:55%;text-align:left;">
           <div id="Reply-ship" class="clsdetail" style="display:none">
           		<div class="detailhead">27 Ships</div>
                <div class="detailimage"><img class="clsimg" src="images/ship.jpg" width="500" height="300"></div>
                <div class="detaildesc">
                	Ships Desc - Lorem ipsum dolor sit amet, in exerci feugait consectetuer mel, eos tempor labore legendos in. His et agam sale oblique, id nonumes scaevola platonem vix. Vim tritani postulant omittantur ne, quod commune et per. Duo bonorum graecis recteque no, consul bonorum ocurreret cum cu. Petentium appellantur ad vix, nam lucilius cotidieque id, eu simul splendide vix.
                </div>
           </div>
           <div id="Reply-aircraft" class="clsdetail">
           		<div class="detailhead">72 Aircrafts</div>
                <div class="detailimage"><img class="clsimg" src="images/aircraft.jpg" width="500" height="300"></div>
                <div class="detaildesc">Strategic airlifts of food, shelter, health facilities and water purification unites</div>
           </div>
           <div id="Reply-helicopter" class="clsdetail" style="display:none">
           		<div class="detailhead">29 Helicopter</div>
                <div class="detailimage"><img class="clsimg" src="images/helicopter.jpg" width="500" height="300"></div>
                <div class="detaildesc">
                	Helicopter Desc - Lorem ipsum dolor sit amet, in exerci feugait consectetuer mel, eos tempor labore legendos in. His et agam sale oblique, id nonumes scaevola platonem vix. Vim tritani postulant omittantur ne, quod commune et per. Duo bonorum graecis recteque no, consul bonorum ocurreret cum cu. Petentium appellantur ad vix, nam lucilius cotidieque id, eu simul splendide vix.
                </div>
           </div>
           <div id="Reply-un" class="clsdetail" style="display:none">
           		<div class="detailhead">44 UN Member States</div>
                <div class="detailimage"><img class="clsimg" src="images/unmember.jpg" width="500" height="300"></div>
                <div class="detaildesc">
                	UN Member Desc - Lorem ipsum dolor sit amet, in exerci feugait consectetuer mel, eos tempor labore legendos in. His et agam sale oblique, id nonumes scaevola platonem vix. Vim tritani postulant omittantur ne, quod commune et per. Duo bonorum graecis recteque no, consul bonorum ocurreret cum cu. Petentium appellantur ad vix, nam lucilius cotidieque id, eu simul splendide vix.
                </div>
           </div>
        </div>
  </div>
</div>
</body>
</html>
