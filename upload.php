<?php
  if($_FILES['file']['name'] != "" ){
    $allow = array("jpg", "jpeg", "gif", "png");
    $info = end(explode('.', strtolower($_FILES['file']['name'])));
    if(in_array($info, $allow)){
        copy( $_FILES['file']['tmp_name'], "./image/" . $_FILES['file']['name']) or die( "Could not copy file" );
    } else {
        die("Ext error");
    }
  }
  else{
    die( "No file specified" );
  }

?>
<html>
 <body>
  <h3>File upload succeeded...</h3>
  <img src="image/<?php echo $_FILES['file']['name']; ?>"/>
 </body>
</html>