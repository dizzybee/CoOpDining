<div class="flexslider">
  <ul class="slides">

<?php
/* Get list of matching images */

$page_name = str_replace(" ","",strtolower(getBarePageTitle( )));
$dir = $_SERVER["DOCUMENT_ROOT"].$_zp_themeroot ."/images/side-images/";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file[0] != ".") {
                if (preg_match("*".$page_name."*", $file)) {
                    $matching[] = $file;
                }
                else {
                    $nonmatching[] = $file;
                }
            }
        }
        closedir($dh);
    }
}

if (count($matching)>0){
    $images = $matching;
}
else {
    $images = $nonmatching;
}

foreach ($images as $image) {
                echo "<li>";
                echo "<img src='".$_zp_themeroot ."/images/side-images/".$image ."'/>";
                echo "</li>";
}
?>

  </ul>
</div>