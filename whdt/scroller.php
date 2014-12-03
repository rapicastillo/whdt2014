<!DOCTYPE html>
<html>
<head>
<script src="js/skrollr.min.js"></script>
<script type="text/javascript">
    var s = skrollr.init({
        edgeStrategy: 'set',
          easing: {
            WTF: Math.random
          }
        });
</script>
</head>
<body>
  <div style="height: 1000px;"> <?php include_once("challenges.php"); ?> </div>
  <div style="height: 1000px;"> <?php include_once("military_assets.php"); ?> </div>
  <div style="height: 1000px;"> <?php include_once("tt.php") ?> </div>  
</body>
</html>
