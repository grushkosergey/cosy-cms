<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <meta name="keywords" content="<?php echo $keywords ?>" />
  <meta name="description" content="<?php echo $description ?>" />
  <?php 
  foreach($styles as $style) {
   echo HTML::style('themes/default/css/'.$style.'.css');
  } 
  /*
  foreach($scripts as $script) {
   echo HTML::script('themes/default/css/'.$script.'.js');
  } 
  */
  ?>
 </head> 
 <body>
 <div id="container">
  <header>
  <div id="header">   
      <img src="/themes/default/images/logo.png" border="0">
        <p>Основан на kohana 3.3.1</p>        
        <div id="topmenu">
        <ul>
            <li><?php echo HTML::anchor('/#', 'Главная'); ?></li> 
            <li><?php echo HTML::anchor('/about/', 'О Cosy CMS'); ?></li>    
        </ul> 
        </div>
 
  </div>
  </header>
  
 <div id="contentcontainer">
         
        <div id="content">
     
        <!-- ### Post Entry Begin ###  -->
         
        <div class="post">
        <?php if(!empty($content))echo $content; ?>
        </div>
         
        </div>
 
        <!-- ### Sidebar Begin ### -->
         
        <div id="sidebar">
             
        <ul>
     
        <li><h2>Текстовый блок</h2>
        <ul>
            <li><?php echo HTML::anchor('/#', 'Тестовая ссылка'); ?></li>
        </ul>
        </li>
 
         
 
        </ul> 
         
        </div>
 
        <!-- ### Sidebar End ### -->
 
    </div>
 </div>
  <footer>
  <div id="footer">
    &copy; Cosy CMS <?php echo date('Y'); ?> г.
  </div>
  </footer>
 </body> 
</html>