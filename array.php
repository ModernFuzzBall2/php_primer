<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php';
?>

    <h1><?php echo $title; ?></h1>
    <?php 
        //a variable
        $num = 3;

        //an array
        // Only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,67,34,5,2,32,12,34,2,3,41,56);
        // You can access the value in a subscript of the array using the index.
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";
    
        for($count=0;$count<$size;$count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>

<?php require 'includes/footer.php' ?>