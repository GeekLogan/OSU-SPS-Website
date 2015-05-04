<?php
	date_default_timezone_set('America/New_York');
	$tab = "\t";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>SPS at Ohio State | <?php echo $title; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
</script>
<style type="text/css">
<?php include("style.css"); ?>
</style>
</head>

<body>
<div id="top">
	<div id="titleBox">
		<?php echo $title; echo "\n"; ?>
	</div>
	<div id="tabBox">
<?php
	if(True) {
		$pages = simplexml_load_file("src/pages.xml");
		foreach($pages->children() as $child) {
				$label = "";
				$line = "";
				$line .= $tab;
				$line .= $tab;
				$line .= '<div class="tab">';
				$line .= '<a class="nostyle" href= "';
				$line .= $child;
				$line .= '.html">';
				foreach($child->attributes() as $key => $value) {
	    			if($key == "label") {
						$label = $value;
						$line .= $value;
					}
				}
				$line .= "</a></div>\n";
				//if($label != $title) {
					echo $line;
				//}
		}
	}
?>
		<div class="tab"><a class="nostyle" href="http://www.facebook.com/groups/SPSatOSU/">Facebook</a></div>
	</div>
</div>
<div id="bottom">
