<?php
$content=file_get_contents("../data/data.yaml");
$data=yaml_parse($content);

/*echo "<pre>";
print_r($data);
echo"<pre>";*/


echo"<table>";
foreach($data as $experience) {
    foreach($experience as $cle=>$val){
        echo '<a href="'.$val.'">'.$cle.'</a>';
    }
}

echo"</table>"
?>

