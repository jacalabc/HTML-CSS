<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$data=$_GET;
echo json_encode($data);
?>