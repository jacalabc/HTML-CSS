<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function printStarNameNum($name,$num,$starnumber){
        for($i=1;$i<=$num;$i++){           
            for($k=0;$k<=$starnumber;$k++){
                echo '*';
            }   
            echo $name."<br>";         
        }       
    }
    printStarNameNum('星爆',10,4);
    ?>   

<br><hr>
<?php
    function printtest($name,$num,$starnumber){
        for($i=1;$i<=$num;$i++){           
            for($k=1;$k<=$starnumber;$k++){
                echo '*';
            }   
            echo $name."<br>";        
        }       
    }
    printtest('星爆',5,3);
    ?>   
    
    <?php
    // 練習
    // 印章(名字,印幾次,星星幾顆)
    function printNameNumStarNum($name, $num, $starNum)
    {
        
        echo "$name function <br>";
        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $starNum; $j++) {
                echo "*";
                // echo "$i*$j";
            }
            echo "$name for + function <br>";
        }
    }   
    echo "<hr><br>printNameNumStarNum('kai',3,5);";
        printNameNumStarNum('kai', 3, 5);
    ?>
</body>
</html>