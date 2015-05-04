<?php
  $title = "Contact";
  include('headers/top.php');
?>
<table>
<?php
  $contacts = array();
  $file = fopen("src/contact.csv","r");
  while(!feof($file))
  {
    $contacts[] = fgetcsv($file);
  }
  fclose($file);
  foreach($contacts as $contact) {
    echo $tab."<tr>\n";
    foreach($contact as $piece)
      echo $tab.$tab."<td>".$piece."</td>\n";
    echo $tab."</tr>\n";
  }
?>
</table>
<?php include('headers/bottom.php'); ?>
