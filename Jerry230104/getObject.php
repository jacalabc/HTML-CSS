<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$data=$_POST;
echo json_encode($data);
?>