<?php
$content=file_get_contents("../data/data.yaml");
$data=yaml_parse($content);

/*echo "<pre>";
print_r($data);
echo"<pre>";*/


echo"<table>";
foreach($data as $experience) {
    foreach($experience as $cle=>$val){
        echo "<tr><td>".$cle."</td><td>".$val."</td></tr>";
    }
}

echo"</table>"
?>


