<?php

$basse=mysqli_connect("localhost","root","");
mysqli_select_db($basse,"index");
if($basse){
    echo" ";}
else{echo"non";
}
?>