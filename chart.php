<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <style>
    body { background-color: black; }
    #title-slides-area { position: relative; background-color: whitesmoke;}
    #title-slides-area > .row { position: absolute; bottom: 0; }
    #title-slides-area > .row > div { height: 100%; position: relative; }
    #title-slides-area #stats-area { opacity: 0; }
	.clstxt { position: absolute; bottom: 0; }
	.clstxt2 { position: absolute; bottom: 0; height:85% }
	.clssubtxt1 { padding-bottom:100%;width:50%;height:60% }
	.clssubtxt2 { padding-top:66%;width:70%;height:40% }
	.firstgrph { height: 0%; background-color: gray; position: absolute; bottom: 0; width: 75%;padding-left:22px;color:#FFF }
	.secondgrph {height: 0%; background-color: brown; position: absolute; bottom: 0; width: 75%;padding-left:10px;color:#FFF}
  </style>
  <!-- Latest compiled and minified JavaScript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>

	<script src="js/skrollr.min.js"></script>
	<script type="text/javascript">

		$(function() {
		  /* Styling ..*/
		  $("#title-slides-area, #title-slides-area > .row").height($(window).height() * .95);

		  /* Animation ..  */
		  setTimeout ( function () {

			var bar_graph = $("#first-needs-graph");
			var bar_graph2 = $("#second-needs-graph");
			bar_graph.css("height", "0%");
			bar_graph.animate({ height: "20%" }, 2000);
			bar_graph2.css("height", "0%");
			bar_graph2.animate({ height: "85%" }, 2000);

			$("#title-slides-area").find("[data-final-count]").each(function () {
				var $this = $(this);
				console.log($this);
				jQuery({ Counter: 0 }).animate({
						  Counter: parseFloat($this.attr("data-final-count")) }, {
						  duration: 2000,
						  easing: 'swing',
						  step: function () {
							console.log(this.Counter);
							if ($this.attr("data-type") == "int")
							{ $this.text( Math.ceil(this.Counter) ); }
							else if ($this.attr("data-type") == "float")
							{ $this.text( Math.ceil(this.Counter * 10) / 10 ); }
						  }
				  });

			  });

			$("#title-slides-area #stats-area").css("opacity", 0).animate({ "opacity" : 1, bottom : "+=0px" }, 2000);

		  },
		  500);
		});
	/*
		var s = skrollr.init({
			edgeStrategy: 'set',
			  easing: {
				WTF: Math.random
			  }
			});
			*/
	</script>
</head>
<body>
  <div id="title-slides-area" class="fluid-container">
    <div class="row" style=" width: 100% ">
    <div class="col-md-2" style="width:8%">
        <div id="stats-area" class="clstxt">
          <h3><span>In 2004</span></h3>
        </div>
      </div>
      <div class="col-md-1" >
        <div id="first-needs-graph" class="firstgrph">
          <h4>$<span  data-final-count="3" data-type="int">3</span>M</h4>
        </div>
      </div>
      <div class="col-md-2" style="width:22%;">
        <div id="stats-area"  class="clstxt">
          <h3><span>was requested. In 2014</span></h3>
        </div>
      </div>
      <div class="col-md-1" >
        <div id="second-needs-graph" class="secondgrph">
          <h4>$<span  data-final-count="19.2" data-type="float">19.2</span>M</h4>
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
</body>
</html>
