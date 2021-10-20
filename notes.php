<html>
    <body>
        <?php
            $student = ["Fikri","Arwin","Zafri","Chee Hoe"];
            $grade = ["A","B","C","D","E","F"];
            $subjects = ["English","Maths"];

            echo $student[0]."<br>";
            echo $subjects[0]."<br>";
            for($j=0;$j<count($grade);$j++){
                echo $grade[$j]." ";
            } 

            echo "<br>"."<br>" ;


            $class = [$student,$subjects,$grade];

            echo $class[0][0]."<br>";
            echo $class[1][0]."<br>";
            for ($i=0;$i<count($class[2]);$i++){
                echo $class[2][$i];
            }
        ?>
    </body>
</html>

<!-- functions

     validate($dob)
     calculate($dob,$age)
     
     function validate($date){
        *write your functions here*;
        return $date; -> to return the values of the function
     }

     function calculate($date,$age){

        return $date,$age;
     }

     function, array, loop


     arrays
     - comes in the form of integer, string and any other datatype (date,Boolean,etc....)

     $class[3] = {"Amir","Zahin","Arwin"};

     echo $class[1];

     array helps to reduce data processing


     $student[4] = {"Fikri","Arwin","Zafri","Chee Hoe"};
     $grade[6] = {"A","B","C","D","E","F"};
     $subjects[2] = {"English","Maths"}

     echo 

-->