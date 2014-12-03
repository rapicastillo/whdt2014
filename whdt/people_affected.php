<!DOCTYPE html>
<html class="js history backgroundsize borderradius boxshadow opacity cssanimations csstransforms csstransitions fontface skrollr " style="">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>People affected</title>
<script type='text/javascript' src='js/jquery.min.js'></script>
<style>
.chclsbody {background-color:#036cb6; font:Verdana, Geneva, sans-serif}
.chcontainer { padding-left:10%;padding-right:10%;}
.chmaincotainer {display:inline-block;width:100%;padding-top:10px}
.chheaddiv { padding-left:10%;padding-right:10%;}
.chclsheadb { font-size:40px; font-weight:900; color:#DB423E;}
.chclsheadw { font-size:40px; font-weight:900; color:#FFF;}
.chclssubhead  { font-size:18px; font-weight:700; color:#FFF;}
.chdivhead { font-size:40px; font-weight:900; color:#90A9AB;text-align:center;padding-top:10px}
hr {size:5; height:60px;width:6px;color:#90A9AB;background-color:#90A9AB}
.cstats-area .ndstats-area { opacity: 0; }
.chclslasthead { font-size:40px; font-weight:700; color:#DB423E;}
</style>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	<script src="js/skrollr.min.js"></script>
	<script type="text/javascript">
		$(function() {
		  setTimeout ( function () {
			$("#people-affected-area").find("[people-affected-count]").each(function () {
				var $this = $(this);
				console.log($this);
				jQuery({ Counter: 0 }).animate({
						  Counter: parseFloat($this.attr("people-affected-count")) }, {
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
	
			$("#people-affected-area").css("opacity", 0).animate({ "opacity" : 1, bottom : "+=0px" }, 2000);
		  },
		  500);
		});
</script>
</head>
<body class="chclsbody">
<div  id="people-affected-area" class="chcontainer">
  <div class="chheaddiv">
  	  <span class="chclssubhead">In 2013</span><br>	
      <span class="chclsheadb"><span people-affected-count="148.2" data-type="float"> 148.2 </span> Million</span><span class="chclsheadw"> people were affected by</span><br>
      <div class="chdivhead">emergencies</div>            
  </div>
  <div class="chmaincotainer">
  		<div style="float:left;display:inline-block; width:48%;">
           <div class="chdivhead" style="text-align:right">natural disaster</div>
           <div class="clsnd" id="ndstats-area" style="text-align:right">
           <?php 
				$nd = array(7,1,3,1,2);
				$numimg = 18;				
				$lastdiv = '</div><div style="float:inherit;text-align:right;padding-top:4%" id="divright" class="chclslasthead"><span people-affected-count="97" data-type="int">97 </span> million</div>';
				$finaldisplay = "";
				foreach($nd as $val)
				{
					$divval = 1;
					if($val==2)
						$finaldisplay .= '<div style="float:right" id="right">';
					for($i=0;$i<$val;$i++)
					{
						if($val==2)
							$finaldisplay .= '<div style="margin-left:10px" id="nd'.($divval).'">';
						else
							$finaldisplay .= '<div id="nd'.($divval).'">';
						for($j=0;$j<$numimg;$j++)
						{	
							$finaldisplay .= '<img src="images/people_affected_population_40px_lighblue.png">';		
						}
						
						$finaldisplay .= '</div>';
						
						$divval += 1;
					}
					if($val==2)
						$finaldisplay .= $lastdiv;
					$numimg -= 4;
				}				
				echo $finaldisplay;			
				?>
                </div>
        </div>
        <div style="float:inherit;display:inline-block; width:4%;">
          <hr/> 
          <div></div>
        </div>
        <div style="float:right;display:inline-block;width:48%;">
          <div class="chdivhead" style="text-align:left">conflict</div>
          <div class="clsconflict" id="cstats-area" style="text-align:left">
                <?php 
				$conflict = array(5,3,4,2);
				$numimg = 18;				
				$lastdiv = '</div><div style="float:inherit;text-align:left;padding-top:4%" id="divright" class="chclslasthead"><span  people-affected-count="51.5" data-type="float">51.5</span> million</div>';
				$finaldisplay = "";
				foreach($conflict as $val)
				{
					$divval = 1;
					if($val==2)
						$finaldisplay .= '<div style="float:left" id="left">';
					for($i=0;$i<$val;$i++)
					{
						if($val==2)
							$finaldisplay .= '<div style="margin-right:10px" id="c'.($divval).'">';
						else
							$finaldisplay .= '<div id="c'.($divval).'">';
						for($j=0;$j<$numimg;$j++)
						{	
							$finaldisplay .= '<img src="images/people_affected_population_40px_lighblue.png">';		
						}
						
						$finaldisplay .= '</div>';
						
						$divval += 1;
					}
					if($val==2)
						$finaldisplay .= $lastdiv;
					$numimg -= 5;
				}				
				echo $finaldisplay;			
				?>                
           </div>
        </div>
  </div>
</div>
</body>
</html>