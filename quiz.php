<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action='quiz.php' method='post'>
        <select name="triangles">
            <option value="triangle_one">Triangle 1</option>
            <option value="triangle_two">Triangle 2</option>
        </select>
            <input type ="submit" name="submit">
    </form>
    <?php 

    if(isset($_POST['submit'])){
        if ($_POST['triangles'] == 'triangle_one'){
            triangle_one();
        } elseif ($_POST['triangles']=='triangle_two'){
            triangle_two();
        } else {

        }
    }
    function triangle_one(){
        for ($i=1; $i<6; $i++ ) {  
            for($j=0; $j<$i; $j++ ) {
                echo "*"." ";
            }
            
            echo "<br/>";
        }
    }
    function triangle_two(){
        for ($i=1; $i<6; $i++ ) {  
            for($j=0; $j<$i; $j++ ) {
                echo "*"." ";
            }
            
            echo "<br/>";
        }
        for($i=1; $i<6; $i++){
            for($j=0;$j<6-$i;$j++){
                echo "*"." ";
            }
            echo "<br/>";
        }
    }








    
    ?>
</body>
</html>

