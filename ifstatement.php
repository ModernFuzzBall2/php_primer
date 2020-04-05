<?php 
    $title = "If Statement";
    include 'includes/header.php';
?>

    <?php 

        // An If statement that will carry out an action based on the value of the variable.

        echo '<h2>If Statement</h2>';

        $grade = 80;
        // ===, ==, >, <, >=, <=
        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }

        $grade = 'A';
        // If-Else If-Else
        if($grade == 'A'){
            echo '<h2 style="color: gold">YOU ARE A SUPERSTAR!</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: green">YOU DID WELL!</h2>';
        }
        else{
            echo '<h2 style="color: red">YOU HAVE FAILED....</h2>'; 
        }
    ?>

<?php require 'includes/footer.php' ?>