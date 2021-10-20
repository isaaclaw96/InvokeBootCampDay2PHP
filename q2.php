<html>
    <body>


        <form action="q2.php" method="post">
            Name:
            <input type="text" name="name">
            IC:
            <input type="text" name="ic">
            Mobile:
            <input type="text" name="phone">
            <input type="submit" name="submit">
        </form>
        <?php
        if(isset($_POST['submit'])){
            displayInfo();
        }

        function getName(){
            $name = $_POST['name'];
            echo "Your name is: ".$name."<br>";
        }
        function getIC(){
            $ic = $_POST['ic'];
            echo "Your IC is: ".$ic."<br>";
        }
        function getMobile(){
            $phone = $_POST['phone'];
            echo "Your Phone is: ".$phone;
        }

        function displayInfo(){
            getName().getIC().getMobile();
        }


        ?>
    </body>
</html>