<html>
    <body>
        <?php

            // $item = ['a','b','c','d','f','g','h','i'];
            // $item_rand = array_rand($item,3);
            
            

            function kevin($name,$item,$item_rand){
                for($i=0;$i<1;$i++){
                    for($j=0;$j<1;$j++){ 
                        $kevinDisplay = $name." buys item"." ".$item[$item_rand[$j]];
                        echo "<br>"; 
                    }          
                }
                display($kevinDisplay);
            }

            function arwin($name,$item,$item_rand){
                $arwinDisplay = $name." buys items: "."<br>";
                display($arwinDisplay);
                for($j=0;$j<3;$j++){
        
                    echo $item[$item_rand[$j]];
                    unset($item[$item_rand[$j]]);
                    echo "<br>"; 
                }        
                
                echo "<br>";
                $arwinDisplayTwo = $name." buys other items :"."<br>";
                display($arwinDisplayTwo);
                $item_rand_two = array_rand($item,3);
                for($j=0;$j<3;$j++){
                    echo $item[$item_rand_two[$j]];        
                    echo "<br>";
                }

                
                
            }
            





        ?>
    </body>
</html>