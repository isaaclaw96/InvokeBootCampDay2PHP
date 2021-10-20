<html>
    <body>


        <?php
            if(isset($_POST['answer'])){
                questionAnswer();
            }
            $questions = $_POST['questions'];
            

            // switch ($questions){
            //     case ($questions == 'q1'):
            //         questionOne();
            //     case ($questions == 'q2'):
            //         questionTwo();
            //     case ($questions == 'q3'):
            //         questionThree();
                           
            // }

            function questionAnswer(){
                if($_POST['questions'] == 'q1'){
                  $output = $_POST['answer'];
                  echo $output;
                } elseif ($_POST['questions'] == 'q2'){
                    $output = $_POST['answer'];
                  echo $output;
                } elseif ($_POST['questions'] == 'q3'){
                    $output = $_POST['answer'];
                  echo $output;
                }
            }
           
        ?>
        <form action="q4.php" method="post">
        <button>Return</button>
        </form>
    </body>
</html>