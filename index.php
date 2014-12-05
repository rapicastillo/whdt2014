  <?php include("partials/arrays.inc"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='style/bootstrap.css'/>
    <link rel='stylesheet' type='text/css' href='style/bootstrap-theme.css'/>
    <link rel='stylesheet' type='text/css' href='style/custom2.css'/>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,800'/>

    <link rel="stylesheet" type="text/css" href="style/circle.css">
</head>
<body>
<!-- <nav class="navbar navbar-fixed-top" data-anchor-target="#title-area" data-top-bottom="opacity: 0" data--50-top-bottom="opacity: 1">
  <ul class="nav-list">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li><a href="#">7</a></li>
  </ul>

  <div id="nav-download-report" style="width: 300px; padding: 10px; background-color: lightgray; bottom: 0;left: -240px; position: absolute;">
    <span class="pull-left">
      <img src="http://placehold.it/100x100" />
    </span>
    <span style="font-size: 18px; margin-left: 10px;">
      Download the report
    </span>
  </div>
</nav> -->


<div id="title-area" class="slide-item">
  <div class="main-area free-flowing" style="z-index: 1000">
    <div class="fluid-container" id="actual-title">
      <div class="row">
        <div class="col-md-8">
          <h1 class="white-title dark-color">World Humanitarian</h1>
          <h1 class="red-title color-red" style="margin-top: 0">Data and Trends 2014</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 text-left">
          <h3 style="margin-left: 30px;">An annual OCHA publication that presents global and country-level data and trend analysis about humanitarian crises and assistance</h3>
        </div>
      </div>
    </div>
    <div class="free-flowing grow-from-bottom" id="branch-1" style="height: 0%; background-image: url(img/000-title-branch-1.png)"></div>
    <div class="free-flowing grow-from-bottom" id="branch-2" style="height: 0%; background-image: url(img/000-title-branch-2.png)"></div>
    <div class="free-flowing grow-from-bottom" id="branch-3" style="height: 0%; background-image: url(img/000-title-branch-1-2.png)"></div>
    <div class="free-flowing grow-from-bottom" id="circle-1" style="opacity: 0; background-image: url(img/000-title-circle.png)"></div>
    <div class="free-flowing grow-from-bottom" id="circle-2" style="opacity: 0; background-image: url(img/000-title-circle-2.png)"></div>
  </div>
</div>
<div id="s1" class="slide-item" data-top-top="..." data-emit-events>
</div>
<!-- People affected -->
<div id="s2a" class="slide-item twice-window-size">

  <?php for($i = 0; $i < count($photos); $i++): ?>
    <div class="circle-item free-flowing"
      data-anchor-target="#s2a"
      data-bottom-top="margin-top: 0%"
      data-100-top-bottom="margin-top: -<?php echo rand(0,90) ?>%"
    style="left: <?php echo rand(0, 80); ?>%; top: <?php echo rand(0, 100); ?>%;
        background-image: url(<?php echo $photos[$i] ?>); z-index: 95;

    ">
  </div>
  <?php endfor; ?>

  <div id="humanitarian-crises-is-changing" class="free-flowing highlight-gray width-40p"
      style="z-index: 100; width: 100%; text-align: center;"

      data-anchor-target="#s2a" data-target="#s2a"
      data-bottom-top="position: fixed; top: 100%;"
      data-top-bottom="top: 0%;"

      data-100-top-bottom="top: 0%;"


    >
    THE CONTEXT OF HUMANITARIAN CRISES IS CHANGING

    <div class="free-flowing highlight-subheading text-left" data-anchor-target="#s2a"
        data-10-bottom-bottom="opacity: 1" data-100-bottom-bottom="opacity: 0">
        <div class="fluid-container">
          <div class="row"><div class="col-md-12">&nbsp;</div></div>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <p>

                In 2013 the humanitarian community was confronted with emergencies of unprecedented magnitude.

              </p>
              <p>This interactive - based on the publication - shows the impact of natural disasters and conflict on the millions of people affected worlwide, the changing nature of the crises and looks at the critical role that partnerships can play in meeting the needs of affected people.</p>
            </div>
            <div class="col-md-3">
              <img src="img/graph-funding-people.png" />
            </div>
          </div>
      </div>
    </div>

  </div>

  <div class="free-flowing" data-anchor-target="#s2a"
          data-10-bottom-bottom="opacity: 1" data-100-bottom-bottom="opacity: 0"
          style="right: 10px; top: 50px; z-index: 100;">

    </div>

  <div class="free-flowing"  id="humanitarian-crises-cover"
      style="z-index: 90; position: fixed;
              top: 0; left; 0; width: 100%;
              height: 100%; background-color: white;">
  </div>


</div>
<div id="s2emergency-area" data-bottom-top="background-size: 50% 100%;" data-top-bottom="background-size: 100% 100%">
<div id="s2b" class="slide-item twice-window-size" data-top-top="..." data-emit-events>

  <div class="main-area" data-anchor-target="#s2b"

    data-center-top="position: relative;" data-top-top="position: fixed; top: !0px; bottom: auto;"
    data-bottom-bottom="position: absolute; bottom: !0; top: auto;"
    >
      <div class="canvas" style="position: relative;">
        <div class="free-flowing natural-disaster-shares" >
          <span class="highlight-gray" style="margin-bottom: 20px; display: inline-block">
            PEOPLE AFFECTED BY <span class="dark-color">CONFLICTS</span> AND<br/><span class="dark-color">NATURAL DISASTERS</span> IN 2013
          </span>
          <div style="clear: both"></div>
          <div class="fluid-container">
            <div class="row">
              <div class="col-md-5 text-right">
                <div class="color-red big-number">97
                </div>
              </div>
              <div class="col-md-7">
                <div class="color-red big-number-ext">MILLION</div>
                <div class="dark-color big-number-detail">PEOPLE AFFECTED BY <span class="color-blue">NATURAL DISASTERS</span> IN 2013</div>
              </div>
            </div>
            <div class="row"><div class="col-md-12">&nbsp;</div></div>
            <div class="row" id="country-affected">
              <div class="col-md-1"></div>
              <div class="col-md-2 text-center">
                <div class="gray-circle-bg text-center">
                  <div class="color-red country-name">CHINA</div>
                  <div class="dark-color">27.5 million</div>
                  <div class=""><img src="img/003-people-affected.png" /></div>
                </div>
              </div>
              <div class="col-md-2 text-center">
                <div class="gray-circle-bg text-center">
                  <div class="color-red country-name">PHILIPPINES</div>
                  <div class="dark-color">25.7 million</div>
                  <div class=""><img src="img/003-people-affected.png" /></div>
                </div>
              </div>
              <div class="col-md-2 text-center">
                <div class="gray-circle-bg text-center">
                  <div class="color-red country-name">INDIA</div>
                  <div class="dark-color">16.7 million</div>
                  <div class=""><img src="img/003-people-affected.png" /></div>
                </div>
              </div>
              <div class="col-md-2 text-center">
                <div class="gray-circle-bg text-center">
                  <div class="color-red country-name">VIETNAM</div>
                  <div class="dark-color">4.1 million</div>
                  <div class=""><img src="img/003-people-affected.png" /></div>
                </div>
              </div>
              <div class="col-md-2 text-center">
                <div class="gray-circle-bg text-center">
                  <div class="color-red country-name">THAILAND</div>
                  <div class="dark-color">3.5</div>
                  <div class=""><img src="img/003-people-affected.png" /></div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
            <div class="row">
              <div class="col-md-12">&nbsp;</div>
            </div>
            <div class="row">
              <div class="col-md-11"><span class="highlight-blue pull-right">
                Top five countries by number of people affected by natural disasters</span></div>
            </div>
          </div>
        </div>
      </div>
  </div>

</div>
<div id="s2c" class="" data-center-top="..." data-emit-events>
  <div class="">
    <div class="fluid-container">
      <div class="row">
        <div class="col-md-5 text-right">
          <div class="color-red big-number"><span style="letter-spacing: -0.09em">51</span>.2</div>
        </div>
        <div class="col-md-7">
          <div class="color-red big-number-ext">MILLION</div>
          <div class="dark-color big-number-detail">PEOPLE AFFECTED BY <span class="color-blue">CONFLICT</span> IN 2013</div>
        </div>
      </div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><span class="color-red">ASYLUM SEEKERS:</span> <span style="font-weight: 800">1.2 MILLION</span></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="people-war-asylum">
          <?php for ($i = 0; $i < 12; $i ++) :?>
            <span><img src="img/002-people.png" /></span>
          <?php endfor; ?>
        </div>
      </div>

      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><span class="color-red">INTERNALLY DISPLACED PEOPLE:</span> <span style="font-weight: 800">33.3 MILLION</span></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="people-war-idp">
          <?php for ($i = 0; $i < 333; $i ++) :?>
            <span><img src="img/002-people.png" /></span>
          <?php endfor; ?>
        </div>
      </div>

      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><span class="color-red">REFUGEES:</span> <span style="font-weight: 800">16.7 MILLION</span></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="people-war-refugee">
          <?php for ($i = 0; $i < 167; $i ++) :?>
            <span><img src="img/002-people.png" /></span>
          <?php endfor; ?>
        </div>
      </div>

      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-right">
          <span class="highlight-blue" style="margin-top: 5px">
            16% INCREASE IN IDPs
          </span>
           <!-- <div class="highlight-subheading" data-anchor-target="#s2b" data-top-top="opacity: 0" data-center-center="opacity: 1;" style="margin-top: 20px; font-size: 22px;">
            <p>There were 45 highly violent political conflicts in 2013. Most were intra-State conflicts in Asia and Africa.</p>
          </div> -->
        </div>
      </div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>

      <div class="row" style="padding: 120px 0px">
        <div class="col-md-5 text-right">
          <div class="color-red big-number"><span style="-0.08em">1</span>48.2</div>
        </div>
        <div class="col-md-7">
          <div class="color-red big-number-ext">MILLION</div>
          <div class="dark-color big-number-detail">TOTAL COMBINED AMOUNT OF PEOPLE AFFECTED BY <span class="color-blue">CONFLICT</span> AND <span class="color-blue">NATURAL DISASTERS</span> IN 2013</div>
        </div>
      </div>

      <div class="row"><div class="col-md-12">&nbsp;</div></div>
    </div>

  </div>


</div>


<div id="s2" class="slide-item" data-top-top="..." data-emit-events>
  <!-- Main area -->
  <div class="main-area"
    data-anchor-target="#s2"
    data-bottom-top="position: absolute; top: !0; bottom: auto;"
    data-top-top="position: fixed;"
    style="z-index: 1000"
    >


    <div class="free-flowing fluid-container" style="width: 100%; top: 0; z-index: 100;">
      <div class="row" style="margin: 0; padding: 0;">
        <div class="col-md-12 text-center" style="margin: 0; padding: 0;">
          <div class="highlight-gray">CRISES ARE LONGER AND MORE EXPENSIVE</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="highlight-subheading" style="margin-top: 20px; font-size: 22px;"
            data-anchor-target="#s2"
            data-50-center-top="opacity:0"
            data-center-top="opacity:1"
          >
          <p>In the last ten years, the funding requirements of inter-agency appeals have increasesd by 600% from $3 billion in 2004 to $17.9 billion in 2014.</p>
          <p>In the same amount of time, the number of people targeted for assistance has more than doubled.</p>

          </div>
        </div>
      </div>
    </div>

      <!-- TEXT -->
      <div class="fluid-container">
        <div></div>
      </div>

      <div id="title-slides-area" class="fluid-container">
          <div class="row" style=" width: 100%; height: 100%">
            <div class="col-md-5"></div>

            <div class="col-md-2" >
              <div id="stats-area" class="clstxt text-right">
                <h3><span class="color-white">Funding requested in 2004</span></h3>
              </div>
            </div>

            <div class="col-md-1" >
              <div id="first-needs-graph" class="firstgrph" style="padding-left: 0; text-align: center;">
                <h4>$<span  data-final-count="3" data-type="int">3</span><br/><span style="font-size: 11px;">BILLION</span></h4>
              </div>
            </div>
            <div class="col-md-1" >
              <div id="second-needs-graph" class="secondgrph" style="padding-left: 0; text-align: center">
                <h4>$<span  data-final-count="17.9" data-type="float">17.9</span><br/><span style="font-size: 11px;">BILLION</span></h4>
              </div>
            </div>
            <div class="col-md-3">
              <div id="stats-area"  class="clstxt2">
                <div class="clssubtxt1" class="color-white"><h4 class="color-white">More than 6 times the request a decade ago</h4></div>
                <div class="clssubtxt2"><h3><span class="color-white">Funding requested in 2014</span></h3></div>
              </div>
            </div>
          </div>
      </div>
  </div>
  <!-- End of main area -->
</div>


<div id="s3" class="slide-item" data-top-top="..." data-emit-events>
  <div class="main-area"  data-bottom-top="transform:translate(0,100%);" data-anchor-target="#s3" data-top-top="transform:translate(0,0%);" style="position: fixed; top: 0; left: 0;">
    <div id="why-partnerships-important" class="fluid-container">
      <div class="row">
        <div class="col-md-12"><span class="highlight-gray">WHY ARE PARTNERSHIPS IMPORTANT?</span></div>
      </div>

      <div class="row"><div class="col-md-1">&nbsp;</div><div class="col-md-11">&nbsp;</div></div>

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <div class="message-answer">
            <img src="img/twitter.png" width="100%"/>
          </div>
          <p></p>
        </div>
        <div class="col-md-3">
          <div class="message-answer">
            <img src="img/005-agency.png" width="100%"/>
          </div>
        </div>
        <div class="col-md-3">
          <div class="message-answer">
            <img src="img/005-military.png" width="100%"/>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3 text-center">
          <p class="partnership-header">Make the most of <br/>new opportunities</p>
        </div>
        <div class="col-md-3  text-center">
          <p class="partnership-header">Overcome challenges and<br/>build capacity</p>
        </div>
        <div class="col-md-3 text-center">
          <p class="partnership-header">Deliver<br/>effectively</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="s4" class="slide-item">
  <div id="main-area">

    <div id="partnerships-opportunities" class="fluid-container free-flowing">
      <div class="row">
        <div class="col-md-12"><span class="highlight-gray">MAKING THE MOST OF NEW OPPORTUNITIES</span></div>
      </div>
      <div class="row">
        <div class="col-md-12">&nbsp;</div>
      </div>
      <div class="row">
        <div class="col-md-1">&nbsp;</div>

          <div class="col-md-5">
            <div class="message-answer">
              <img src="img/social-media.png" width="100%"/>
            </div>
            <p></p>
          </div>

        <div class="col-md-5">
          <span class="highlight-blue">SOCIAL MEDIA</span>
          </br>
          <span class="highlight-subheading">
            <p>Social media is still an experimental field, but through strengthening partnerships with social media users for data collection and analysis, the humanitarian community will be able to make the most of this new opportunity.</p>
            <p>Twitter in particular, is providing a new avenue of valuable data. To make the most of it, we first need to understand who is using it and how.
            </p>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="s5" class="slide-item">
  <div id="main-area">

    <div id="partnerships-opportunities" class="fluid-container">
      <div class="row">
        <div class="col-md-12">
          <span class="highlight-gray">OVERCOMING CHALLENGES</span>
        </div>
      </div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>

      <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-5">
          <span class="highlight-blue">CASE STUDY: SYRIA</span>
          </br>
          <span class="highlight-subheading" style="font-size: 2em;"><PA>The crisis in Syria is one of the worst on record given the sheer size of damage in the country and the effect on the region. Over <span> 150 agencies</span> and aid groups are working with local partners and national authorities to provide relief.</span>
          <div>
            <sub class="color-white">Hover over circles for more information.</sub>
          </div>
        </div>
        <div class="col-md-6">
          <!-- START OF Nikki's work -->
          <?php include("partials/challenges.php"); ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="s6" class="slide-item" style="background-size: cover; background-attachment: scroll;">
  <div id="main-area">

    <div id="partnerships-effectiveness" class="fluid-container">
      <div class="row">
        <div class="col-md-12">
          <span class="highlight-gray">DELIVERING EFFECTIVELY</span>
        </div>
      </div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10">
          <span class="highlight-subheading" style="font-size: 18px;">In the direct aftermath of an emergency, it can be difficult to deliver assistance to affected communities especially if a country's infrastructure has been compromised. Partnerships with other relief providers can greatly enhance the overall capacity of the humanitarian community to help those in need. Directly after Super Typhoon Haiyan, foreign military assets were key in delivering relief.</span>
          <div>
            <sub class="color-white">Click on a square for more information</sub>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- START OF Nikki's work -->
          <?php include("partials/military.php"); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="s7" class="slide-item" style="background-image: url(img/last-background.png); background-size: cover;">
  <div class="main-area">
    <div class="fluid-container">
      <div class="row">
        <div class="col-md-12">&nbsp;</div>
      </div>
      <div class="row">
        <div class="col-md-3 dark-color">
          <div style="margin-left: 10px; font-size: 1em;">
            <ul sytle="list-style: none;" id="final-links">
              <li style="background-image: url(img/last-report.png);"><a href="downloads/World Humanitarian Data and Trends 2014.pdf" target="_blank">Download the<br/>full report</a></li>
              <li style="background-image: url(img/last-highlights.png);"><a href="downloads/data-trends-highlights.pdf" target="_blank">Download the<br/>highlights page</a></li>
              <li style="background-image: url(img/last-global.png);"><a href="downloads/global-risks.pdf" target="_blank">Download the<br/>global challenges page</a></li>
              <li style="background-image: url(img/last-graphs.png);"><a href="downloads/WHDT-images.zip" target="_blank">Download the<br/>graphics</a></li>
              <li style="background-image: url(img/last-hdx-2.png);"><a href="https://data.hdx.rwlabs.org/dataset/world-humanitarian-data-and-trends
" target="_blank">Download the<br/>data</a></li>
            </ul>
          </div>
        </div>
      <div class="col-md-7" style="font-size: 1.5em"><p>This report is just one part of OCHA's efforts to improve data and analysis on humanitarian situations worldwide and build a humanitarian data commmunity.</p></div>

      </div>
    </div>
  </div>

  <div class="free-flowing color-white" style="left:20px; bottom: 20px; width: 90%; background-color: rgba(0, 0, 0, 0.7); padding: 5px 10px 10px;">
      <sub><strong>The information gap</strong><br/>
          Due to the complexity of humanitarian crises, there are many gaps in the available information. Even the concepts of humanitarian needs and assistance are flexible, and there are also inherent biases in the information. To truly understand and measure impact, the humanitarian community will need to continue working on better standards and ways of collecting, sharing and using data.
      </sub>
    </div>
</div>

<script type='text/javascript' src='js/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/skrollr-ie.min.js"></script>
<script src="js/custom.js"></script>
<script type='text/javascript'>
$(function() {

  var uagent = navigator.userAgent.toLowerCase();

  if (uagent.search("iphone") > -1 || uagent.search("android") > -1) {
    window.location = "./index-mobile.php";
  }

  var s = skrollr.init({
    keyframe: function(element,name, direction) {
        $(element).trigger(name, direction);
    }
    ,
    forceHeight: false,
    edgeStrategy: 'set',
      easing: {
        WTF: Math.random
      }
  });

  //Resize windows and re-activate skrollr
  $(window).on("resize", function() {
    $(".slide-item, .main-area").width($(window).width()).height($(window).height());
    $(".twice-window-size").width($(window).width()).height($(window).height() * 2);

    s.refresh();
  });
  $(window).trigger("resize");
  $("#s2b").on("dataTopTop", function(event, direction) {
    if (direction == "down")
    {
      $("#humanitarian-crises-is-changing, #humanitarian-crises-cover").delay(500).fadeOut("fast");
    }
    else
    {
      $("#humanitarian-crises-is-changing, #humanitarian-crises-cover").fadeIn("fast");
    }

  });
  $("#s2").on("dataTopTop", function(event, direction) {

    var bar_graph = $("#first-needs-graph");
    var bar_graph2 = $("#second-needs-graph");

    if (direction == "down" && $(this).attr("data-has-loaded") != "true" )
    {
      $(this).attr("data-has-loaded", "true")
      bar_graph.css("height", "0%");
      bar_graph.stop(true, true).animate({ height: "20%" }, 2000);
      bar_graph2.css("height", "0%");
      bar_graph2.stop(true, true).animate({ height: "85%" }, 2000);
      $("#title-slides-area #stats-area").css("opacity", 0).animate({ "opacity" : 1, bottom : "+=0px" }, 2000);

      $("#title-slides-area").find("[data-final-count]").each(function () {
        var $this = $(this);
        jQuery({ Counter: 0 }).stop(true, true).animate({
              Counter: parseFloat($this.attr("data-final-count")) }, {
              duration: 2000,
              easing: 'swing',
              step: function () {

              if ($this.attr("data-type") == "int")
              { $this.text( Math.ceil(this.Counter) ); }
              else if ($this.attr("data-type") == "float")
              { $this.text( Math.ceil(this.Counter * 10) / 10 ); }
              }
          });

        });
      }
      else
      {
        // bar_graph.stop(true, true).animate({"height": "0%"}, 1000);
        // bar_graph2.stop(true, true).animate({"height": "0%"}, 1000);
        // $("#title-slides-area #stats-area").stop(true, true).animate({opacity: 0}, 1000);
      }
  });

  $("#s2c").on("dataCenterTop", function(event, direction) {
      if (direction == "up") {
        $("#people-war-idp, #people-war-refugee, #people-war-asylum")
          .find("span").stop(true, true).css({ opacity: 0 });
      }
      else {
        setTimeout(function() {
          $("#people-war-idp").find("span").each(function(i, item) {
            $(this).stop(true, true).delay((i+1) * 5).animate({ opacity : 1 }, 50);
          });
          $("#people-war-refugee").find("span").each(function(i, item) {
            $(this).stop(true, true).delay((i+1) * 5).animate({ opacity : 1 }, 50);
          });
          $("#people-war-asylum").find("span").each(function(i, item) {
            $(this).stop(true, true).delay((i+1) * 5).animate({ opacity : 1 }, 50);
          });
        }, 200);
      }
  });

  $("#s3").on("dataTopTop", function(event, direction) {
    if (direction == "down")
    {
      $("#s2 .main-area").stop(true, true).fadeOut("fast");
    }
    else {
      $("#s2 .main-area").stop(true, true).fadeIn("fast");
    }
  });

  $("#Reply-open-ship").on("click", function () {
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

  $("#nav-download-report").on("mouseenter mouseleave", function(event) {
    if (event.type == "mouseenter") {
      $(this).animate({ left: "+=240px" }, 500);
    }
    else if (event.type == "mouseleave") {
      $(this).animate({ left: "-=240px" }, 500);
    }
  });
});
</script>
<script type="text/script">
$(function () {


});//]]>

</script>
</body>
</html>
