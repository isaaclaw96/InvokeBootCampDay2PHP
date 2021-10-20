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

    

    $name = ["Kevin","Arwin"];
    $item = ['a','b','c','d','f','g','h','i'];    
    $item_rand = array_rand($item,3);
    include ('item.php');
    include ('display.php');

    kevin($name[0],$item,$item_rand);
    echo "<br>";
    arwin($name[1],$item,$item_rand);
    
    // for($i=0;$i<1;$i++){
    //     for($j=0;$j<1;$j++){
            
    //         echo $name[$i]." buys item"." ".$item[$item_rand[$j]];
    //         echo "<br>"; 
    //     }          
    // }
    
    // echo $name[$i]." buys item"." : "."<br>";
    
    // for($j=0;$j<3;$j++){
        
    //     echo $item[$item_rand[$j]];
    //     unset($item[$item_rand[$j]]);
    //     echo "<br>"; 
    // }          
    // $item_rand_two = array_rand($item,3);
    // for($j=0;$j<3;$j++){
    //     echo $name[1];
    //     echo " buys another item"." ".$item[$item_rand_two[$j]];        
    //     echo "<br>";
    // }
  
    

    ?>
</body>
</html>