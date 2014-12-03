<!DOCTYPE html>
<html>
<head>
  <style>
    .map-country-item
    {
      margin: 20px;
      padding: 40px;
    }
  </style>
</head>
<body>

<!-- div style="width: 100%; height: 1000%; display: inline-block; position: absolute; top: 0; left: 0;">
  <svg width="100%" height="100%" style="position: fixed; top: 0; left: 0;">
    <text id="map-countdown-item" x="0" y="24" style="font-family: arial; font-size: 28px" >1,500,200</text>
    <circle cx="20" cy="20" r="10" fill="blue" />
    <circle cx="100" cy="100" r="15" fill="green" />

    <path d=" M 10 25
              S -10  55 50 95
            "

            stroke="red" stroke-width="2" fill="none" />
  </svg>
</div -->

<div id="map-area">
  <div id="map-data-score"
      style="position: fixed; top: 0px; left: 10px; background-color: white; width: 100%;"
      count-total='500000000'><h1>0</h1></div>
  <div id="map-area-countries"></div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script type="text/javascript">


$(function() {
  var comma_format = d3.format(",");
  var data;
  d3.json("d/map.json", function(error, json)
    {
      console.log(json);
      data = json;

      countries = d3
          .select("body #map-area")
          .selectAll("div.map-country-item")
          .data(data.countries)
          .enter().append("div")
          .html(function(d) {



            var html = "";
            html += "<div class='map-"+  d.type +"'>";
            html += "<h1 class='map-count' count-value='" + d.in_need + "'>0</h1>";
            html += "<h3>" + d.name + "</h3>";
            html += "<div class='other-facts'>";
            for (i in d.other_fig)
            {
              html +=   "<div class='other-fact-item'><img src='" + d.other_fig[i].image + "' /><span class='of-number' count-value='" + d.other_fig[i].count + "'>0</span><span class='of-label'> " + d.other_fig[i].label + "</span></div>";
            }
            html += "</div>";
            html += "</div>";
            // this.innerHTML(html);

            // this.select(".other-facts").data(d.other_fig).enter().append("div");

            return html;
          })
          .classed("map-country-item", true);


        var mapAreaHeight = $("#map-area").height();
    console.log(mapAreaHeight, $("#map-area").height());

    var mapIncrement = parseInt($("#map-data-score").attr("count-total")) / mapAreaHeight;

    console.log(" MAP INC ", mapIncrement);

    $("#map-data-score").scroll(function() {
        console.log($("#map-area").offset(), " --- ", $("#map-area").position());
        console.log("Hello World");
    });
    $(window).bind("scroll", function () {

      var mapAreaOffset = $("#map-area").offset().top - $(window).scrollTop();

      console.log(mapAreaOffset , mapIncrement);
      if (mapAreaOffset < 0 )
      {
        $("#map-data-score h1").text(comma_format(Math.floor(mapAreaOffset * -1 * mapIncrement)));
      }
    });


    console.log("Hello World 3");

    });


});


</script>
</body>
</html>
