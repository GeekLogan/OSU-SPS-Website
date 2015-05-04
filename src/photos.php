<?php
  $title = "Photos";
  include('headers/top.php');
?>
Below, you will find photos from Society of Physics Students Events:
<br />
<style type="text/css">
img.library {
  float: left;
  max-width: 400px;
  margin-right: 50px;
}
</style>
<div id="photos">
<?php
  $photos = array();
  $file = fopen("src/photos.csv","r");
  while(!feof($file))
  {
    $photos[] = fgetcsv($file);
  }
  foreach($photos as $photo) {
    echo $tab;
    echo '<img class="library" src="img/';
    echo $photo[0];
    echo '" alt="';
    echo $photo[1];
    echo '" />';
    echo "\n";
  }
?>
</div>
<?php include('headers/bottom.php'); ?>
