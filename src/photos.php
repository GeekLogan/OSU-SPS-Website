<?php
  $title = "Photos";
  include('headers/top.php');
?>
Below, you will find photos from Society of Physics Students Events:
<br /> <br />
<style type="text/css">
img.library {
    /*
    float: left;
    */
    max-width: 300px;
    margin-right: 50px;
}
div#photos {
    width: inherit;
    height: auto;
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
    echo '<a href="img/';
    echo $photo[0];
    echo '">';
    echo '<img class="library" src="img/';
    echo $photo[0];
    echo '" alt="';
    echo $photo[1];
    echo '" />';
    echo "</a>";
    echo "\n";
  }
?>
</div>
<?php include('headers/bottom.php'); ?>
