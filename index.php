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
<nav class="navbar navbar-fixed-top">
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
</nav>
<div id="title-area" class="slide-item">
  <div class="main-area free-flowing" style="background-color: gray; z-index: 1000">

  </div>
</div>
<div id="s1" class="slide-item" data-top-top="..." data-emit-events>
</div>
<!-- People affected -->
<div id="s2a" class="slide-item twice-window-size">

  <?php for($i = 0; $i < 10; $i++): ?>
    <div class="circle-item free-flowing"
      data-anchor-target="#s2a"
      data-bottom-top="margin-top: 0%"
      data-top-bottom="margin-top: -<?php echo rand(0,90) ?>%"
    style="left: <?php echo rand(0, 95); ?>%; top: <?php echo rand(0, 100); ?>%;
        background-image: url(http://placehold.it/150x150); z-index: 95;

    ">
  </div>
  <?php endfor; ?>

  <div id="humanitarian-crises-is-changing" class="free-flowing highlight-gray width-40p"
      style="left: 50px; z-index: 100;"

      data-anchor-target="#s2a" data-target="#s2a"
      data-bottom-top="position: fixed; bottom: 0%;"
      data-top-bottom="bottom: 80%;"


    >
    THE CONTEXT OF HUMANITARIAN CRISES IS CHANGING

    <div class="free-flowing highlight-subheading" data-anchor-target="#s2a"
        data-10-bottom-bottom="opacity: 1" data-100-bottom-bottom="opacity: 0">
      <p>The funding requirements of inter-agency appeals have increasesd by 640% since 2004 to a record $19.2.</p>
      <p>In the same amount of time, the number of poeple targeted has more than doubled.</p>
    </div>
  </div>
  <div class="free-flowing"  id="humanitarian-crises-cover" style="z-index: 90; position: fixed; top: 0; left; 0; width: 100%;
height: 100%;
background-color: white;">
  </div>


</div>
<div id="s2b" class="slide-item twice-window-size" data-top-top="..." data-emit-events>

  <div class="main-area" data-anchor-target="#s2b"

    data-center-top="position: relative;" data-top-top="position: fixed; top: !0px; bottom: auto;"
    data-bottom-bottom="position: absolute; bottom: !0; top: auto;"
    >
      <div class="canvas" style="position: relative; margin-left: 80px;">
        <div class="free-flowing natural-disaster-shares" >
          <span class="highlight-gray" style="margin-bottom: 20px; display: inline-block">
            PEOPLE AFFECTED BY NATURAL DISASTERS IN 2013
          </span>
          <div style="clear: both"></div>
          <span class="disaster-item">
            <span class="text-center">China<br/>27.5</span>
            <img src="http://placehold.it/150x150" />
          </span>
          <span class="disaster-item">
            <span class="text-center">Philippines<br/>25.7</span>
            <img src="http://placehold.it/100x100" />
          </span>
          <span class="disaster-item">
            <span class="text-center">India<br/>16.7</span>
            <img src="http://placehold.it/90x90" />
          </span>
          <span class="disaster-item">
            <span class="text-center">Vietnam<br/>4.1</span>
            <img src="http://placehold.it/40x40" />
          </span>
          <span class="disaster-item">
            <span class="text-center">Thailand<br/>3.5</span>
            <img src="http://placehold.it/40x40" />
          </span>
          <div class="highlight-subheading" data-anchor-target="#s2b" data-top-top="opacity: 0" data-center-center="opacity: 1;" style="margin-top: 20px; font-size: 22px;">
            <p>The funding requirements of inter-agency appeals have increasesd by 640% since 2004 to a record $19.2.</p>
            <p>In the same amount of time, the number of poeple targeted has more than doubled.</p>
          </div>
        </div>
      </div>

      <div id="number-of-affected-people" class="free-flowing" style="bottom: 0px; right: 0px; width: 300px;text-align: center;">
        <div style="font-size: 190px; font-weight: 800; ">
          97
        </div>
        <div style="font-size: 54px; margin-top: -52px">MILLION</div>
        <div style="font-size: 18px">NUMBER OF AFFECTED PEOPLE BY NATURAL DISASTERS IN 2013</div>
      </div>

      <div class="tweetable-fact-right free-flowing" data-anchor-target="#s2b"

        style="position: fixed; width: 200px; height: 200px; bottom: 50%;"
        data-bottom-bottom="position: absolute; right: 0; bottom: 50%;"
        data-10-bottom-bottom="right: 0px"
        data-100-bottom-bottom="right: -200px; position: fixed;"
      >
      <img src="http://placehold.it/100x100" />
      <h2>Tweetable Fact</h2>
      </div>
  </div>

</div>
<div id="s2c" class="slide-item" data-center-top="..." data-emit-events>
  <div class="main-area ">
    <div class="fluid-container">
      <div class="row"><div class="col-md-12">&nbsp;</div></div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">Asylum Seekers: <span style="font-weight: 800">1.2 MILLION</span></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8" id="people-war-asylum">
          <?php for ($i = 0; $i < 12; $i ++) :?>
            <span><img src="http://placehold.it/10x30" /></span>
          <?php endfor; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">Internally Displaced People: <span style="font-weight: 800">33.3 MILLION</span></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8" id="people-war-idp">
          <?php for ($i = 0; $i < 333; $i ++) :?>
            <span><img src="http://placehold.it/10x30" /></span>
          <?php endfor; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">Refugees: <span style="font-weight: 800">16.7 MILLION</span></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8" id="people-war-refugee">
          <?php for ($i = 0; $i < 167; $i ++) :?>
            <span><img src="http://placehold.it/10x30" /></span>
          <?php endfor; ?>
        </div>
      </div
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
          <div class="highlight-gray" style="margin-top: 5px">
            16% INCREASE IN IDPs
          </div>
           <div class="highlight-subheading" data-anchor-target="#s2b" data-top-top="opacity: 0" data-center-center="opacity: 1;" style="margin-top: 20px; font-size: 22px;">
            <p>There were 45 highly violent political conflicts in 2013. Most were intra-State conflicts in Asia and Africa.</p>
          </div>
        </div>
      </div>
    </div>
      <div id="number-of-affected-people" class="free-flowing" style="bottom: 0px; right: 0px; width: 300px;text-align: center;">
        <div style="font-size: 150px; font-weight: 800; ">
          51.2
        </div>
        <div style="font-size: 54px; margin-top: -52px">MILLION</div>
        <div style="font-size: 18px">PEOPLE AFFECTED BY<br/>CONFLICT IN 2013</div>
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


    <div class="free-flowing" class="fluid-container" style="top: 0; z-index: 100;">
      <div class="row"><div class="col-md-12">&nsbp;</div></div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-6">
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
          ><p>In the last ten years, the funding requirements of inter-agency appeals have increased by 640% from $3 billlion in 2004 to $17.9 billion in 2014.</p>
          <p>In the same amount of time, the number of people targeted has more than doubled</p>

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
          <span class="highlight-subheading">Affected people's use of social media during crisis has become a common practice in recent years</span>
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
          <span class="highlight-subheading" style="font-size: 18px;">The crisis in Syria is one of the worst on record given the sheer size of damages in the country and the effect on the region. Over <span> 150 agencies</span> and aid groups are working with local partners and national authorities to provide relief.</span>
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
          .find("span").stop(true, true).animate({ opacity: 0 }, 1000);
      }
      else {
        $("#people-war-idp").find("span").each(function(i, item) {
          $(this).stop(true, true).delay((i+1) * 10).animate({ opacity : 1 }, 50);
        });
        $("#people-war-refugee").find("span").each(function(i, item) {
          $(this).stop(true, true).delay((i+1) * 10).animate({ opacity : 1 }, 50);
        });
        $("#people-war-asylum").find("span").each(function(i, item) {
          $(this).stop(true, true).delay((i+1) * 10).animate({ opacity : 1 }, 50);
        });
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
