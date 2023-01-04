<?php
function dd ($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
//  $data=$_GET;
$data=$_POST;
// dd($data);
echo json_encode($data);
?>