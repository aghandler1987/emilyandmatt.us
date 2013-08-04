<!DOCTYPE HTML>
<?php require_once('components.php'); 
$area = isset($_GET['area']) ? $_GET['area'] : 'welcome';  
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id ="me-top clearfix">
      <div id ="me-top-bar"></div>
      <div id ="me-top-center">
        <div id ="me-top-top">
          <img src ="images/matt_emily_top.png"/>
        </div>
        <div id ="me-top-center-bar">
          <div class ="heading">
            <p>Emily and Matthew</p>
            <p class ="date">May 24th, 2014</p>
          </div>
        </div>
      </div>
    </div>
    
    <div id ="main" class="clearfix">
      <div id ="side-bar">
        <div class ="links">
          <?php print me_get_nav($area); ?>
        </div>
      </div>
      <div id ="main-content">
        <?php echo me_get_body($area); ?>
      </div>
       <div id ="footer">
        <?php echo me_get_footer($area); ?>
       </div>
    </div>
  </body>
<?php



?>
</html>