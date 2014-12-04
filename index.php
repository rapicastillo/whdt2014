<?php
$photos = ["http://ocha.smugmug.com/photos/i-JWt7W7S/0/M/i-JWt7W7S-M.jpg",
          "http://ocha.smugmug.com/photos/i-xFHp7f7/0/M/i-xFHp7f7-M.jpg",
          "http://ocha.smugmug.com/photos/i-Nr3FmD5/0/M/i-Nr3FmD5-M.jpg",
          "http://ocha.smugmug.com/photos/i-gvsJ225/0/M/i-gvsJ225-M.jpg",
          "http://ocha.smugmug.com/photos/i-BdPxsNz/0/M/i-BdPxsNz-M.jpg",
          "http://ocha.smugmug.com/photos/i-9DWXm7q/0/M/i-9DWXm7q-M.jpg",
          "http://ocha.smugmug.com/photos/i-rppMLvC/0/M/i-rppMLvC-M.jpg",
          "http://ocha.smugmug.com/photos/i-GH4BvRt/0/M/i-GH4BvRt-M.jpg",
          "http://ocha.smugmug.com/photos/i-QSN9BQP/0/M/i-QSN9BQP-M.jpg",
          "http://ocha.smugmug.com/photos/i-LR2bVP5/0/M/i-LR2bVP5-M.jpg",
          "http://ocha.smugmug.com/photos/i-x5fVTMn/0/M/i-x5fVTMn-M.jpg",
          "http://ocha.smugmug.com/photos/i-b2DzS3C/0/M/i-b2DzS3C-M.jpg",
          "http://ocha.smugmug.com/photos/i-kfTZJXJ/0/M/i-kfTZJXJ-M.jpg",
          "http://ocha.smugmug.com/photos/i-GgS3CSx/0/M/i-GgS3CSx-M.jpg",
          "http://ocha.smugmug.com/photos/i-6JmthQg/0/M/i-6JmthQg-M.jpg",
          "http://ocha.smugmug.com/photos/i-phRdDGB/0/M/i-phRdDGB-M.jpg"];

?>
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
          <h1 class="white-title color-white">World Humanitarian</h1>
          <h1 class="red-title color-red" style="margin-top: 0">Data and Trends 2014</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6 text-left">
          <h3>An annual OCHA publication that presents global and country-level data and trend analysis about humanitarian crises and assistance</h3>
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

  <?php for($i = 0; $i < count($photos); $i++) {?>
    <div class="circle-item free-flowing"
      data-anchor-target="#s2a"
      data-bottom-top="margin-top: 0%"
      data-100-top-bottom="margin-top: -<?php echo rand(0,90) ?>%"
    style="left: <?php echo rand(0, 95); ?>%; top: <?php echo rand(0, 100); ?>%;
        background-image: url(<?php echo $photos[$i] ?>); z-index: 95;

    ">
  </div>
  <?php } ?>

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
      <p>This report covers two main areas: humanitarian needs and assistance in 2013, and humanitarian trends challenges and opportunities.</p>
      <p>This interactive uses examples from the report to highlight the impact of natural disasters, conflict, and the changing nature of crises. It also stresses the importance of partnerships to meet the needs of survivors.</p>
    </div>
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
          <div class="color-red big-number">51.2</div>
        </div>
        <div class="col-md-7">
          <div class="color-red big-number-ext">MILLION</div>
          <div class="dark-color big-number-detail">PEOPLE AFFECTED BY <span class="color-blue">NATURAL DISASTERS</span> IN 2013</div>
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

      <div class="row">
        <div class="col-md-5 text-right">
          <div class="color-red big-number">148.2</div>
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
          <p>The funding requirements of inter-agency appeals have increasesd by 640% since 2004 to a record $17.8 B.</p>
          <p>At the same time, the number of people targeted for assistance has more than doubled.</p>

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
            <div class="col-md-4"></div>

            <div class="col-md-2" style="width:8%">
              <div id="stats-area" class="clstxt">
                <h3><span>In 2004</span></h3>
              </div>
            </div>

            <div class="col-md-1" >
              <div id="first-needs-graph" class="firstgrph">
                <h4>$<span  data-final-count="3" data-type="int">3</span>B</h4>
              </div>
            </div>
            <div class="col-md-2" style="width:22%;">
              <div id="stats-area"  class="clstxt">
                <h3><span>was requested. In 2014</span></h3>
              </div>
            </div>
            <div class="col-md-1" >
              <div id="second-needs-graph" class="secondgrph">
                <h4>$<span  data-final-count="17.9" data-type="float">17.9</span>B</h4>
              </div>
            </div>
            <div class="col-md-2">
              <div id="stats-area"  class="clstxt2">
                <div class="clssubtxt1"><h4>more than six times the request a decade ago</h4></div>
                <div class="clssubtxt2"><h3><span>was needed</span></h3></div>
              </div>
            </div>
          </div>
      </div>
  </div>
  <!-- End of main area -->
</div>


<div id="s3" class="slide-item" data-top-top="..." data-emit-events>
  <div class="main-area"  data-bottom-top="transform:translate(0,100%);" data-anchor-target="#s3" data-top-top="transform:translate(0,0%);" style="position: fixed; top: 0; left: 0;">
    <div id="why-partnerships-important" class="container">
      <div class="row"><div class="col-md-1">&nbsp;</div><div class="col-md-11">&nbsp;</div></div>
      <div class="row"><div class="col-md-1">&nbsp;</div><div class="col-md-11"><span class="highlight-gray">WHY ARE PARTNERSHIPS IMPORTANT?</span></div></div>

      <div class="row"><div class="col-md-1">&nbsp;</div><div class="col-md-11">&nbsp;</div></div>

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <div class="message-answer">
            <img src="http://placehold.it/200x200" width="100%"/>
          </div>
          <p></p>
        </div>
        <div class="col-md-3">
          <div class="message-answer">
            <img src="http://placehold.it/200x200" width="100%"/>
          </div>
        </div>
        <div class="col-md-3">
          <div class="message-answer">
            <img src="http://placehold.it/200x200" width="100%"/>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <p>Make the most of new opportunities.</p>
        </div>
        <div class="col-md-3">
          <p>Overcome challenges and build capacity</p>
        </div>
        <div class="col-md-3">
          <p>Deliver effectively</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="s4" class="slide-item">
  <div id="main-area">

    <div id="partnerships-opportunities" class="container free-flowing" style="bottom: 0; left: 0;">
      <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-4">
            <div class="message-answer">
              <img src="http://placehold.it/200x200" width="100%"/>
            </div>
            <p></p>
          </div>

          <div class="col-md-4">
            <div class="message-answer">
              <img src="http://placehold.it/200x200" width="100%"/>
            </div>
            <p></p>
          </div>

        <div class="col-md-3">
          <span class="highlight-gray">CAPITALIZING ON NEW OPPORTUNITIES</span>
          <span class="highlight-subheading">Social media is still an experimental field, but through strengthening partnerships with social media users for data collection and analysis, the humanitarian community will be able to make the most of this new opportunity.</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="s5" class="slide-item">
  <div id="main-area">

    <div id="partnerships-opportunities" class="fluid-container">
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>

      <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-11">
          <span class="highlight-gray">OVERCOMING CHALLENGES</span>
        </div>
      </div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>

      <div class="row">
        <div class="col-md-1">&nbsp;</div>
      </div>

      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>

      <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-3">
          <span class="highlight-subheading" style="font-size: 18px;">The crisis in Syria is one of the worst on record given the sheer size of damage in the country and the effect on the region. Over <span> 150 agencies</span> and aid groups are working with local partners and national authorities to provide relief.</span>
        </div>
        <div class="col-md-8">
          <!-- START OF Nikki's work -->
          <?php include("partials/challenges.php"); ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="s6" class="slide-item">
  <div id="main-area">

    <div id="partnerships-effectiveness" class="fluid-container">
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>

      <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-11">
          <span class="highlight-gray">BUILDING CAPACITY AND IMPROVING EFFECTIVENESS IN AID DELIVERY</span>
        </div>
      </div>
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row">
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-10">
          <span class="highlight-subheading" style="font-size: 18px;">In the direct aftermath of an emergency, it can be difficult to deliver assistance to affected communities especially if a country's infrastructure has been compromised. Partnership with other relief providers can greatly enhance the overall capacity of the humanitarian community to help those in need.</span>
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

<div id="s7" class="slide-item" style="background-image: url(images/bg-last-slide.png); background-size: cover;">

</div>

<script type='text/javascript' src='js/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/custom.js"></script>
<script type='text/javascript'>
$(function() {
  var s = skrollr.init({
    keyframe: function(element,name, direction) {
      console.log("XXX", element, name, direction);
        $(element).trigger(name, direction);
    }
    ,
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
    console.log("CLICKED");
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