<?php 
    $title = "Index";
    include 'includes/header.php';
?>

    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php 
        //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';


        // declare variable
        $name = 'Markus';
        $age = 17;
        // echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.'</h1>';
        echo '<h1>My Age Is: '.$age.'</h1>';
        echo "<br>";
        // Echo using double quotes and interpolation
        echo "<h1>My Age Is: $age</h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
    <a href="https://github.com/ModernFuzzBall2/php_primer" target="_blank" class="btn btn-warning">GitHub Repo</a>

<?php require 'includes/footer.php' ?>