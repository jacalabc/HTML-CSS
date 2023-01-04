<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$data = $_POST;

$num1 = $data['num1'];
$num2 = $data['num2'];
$option = $data['option'];
$result = 0;
switch ($option) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;
    default:
        break;
}
$myArr = [
    'num1' => $num1,
    'num2' => $num2,
    'result' => $result
];
echo json_encode($myArr);
