<?php 
    //1. DB Connection Open
    $conn = mysqli_connect('localhost','root','','ecom5_db') or die('Could not connect');

    // Recieve the Form Data

    //var_dump($_POST);
    //var_dump($_FILES);

    // check if the registration data is comming
    if(  (isset($_POST['action'])) && ($_POST['action'] == 'registration') ){
        

        // Always filter/Sanitize the incomming data
        $fname = mysqli_real_escape_string($conn,$_POST['fn']);
        $lname = mysqli_real_escape_string($conn,$_POST['ln']);

        $picture = mysqli_real_escape_string($conn,$_POST['pic']);

        //var_dump($_FILES);

        //Security

        

        //2. Bulid the query.
        $sql = "INSERT INTO users_tbl (`fname`,`lname`,`picture`) VALUES ('$fname','$lname','$picture')";

        //3. Execute the query
        mysqli_query($conn,$sql) or die(mysqli_error($conn));


        //4. Display the result
        echo '1';
        
    }



    if(  (isset($_POST['action'])) && ($_POST['action'] == 'login') ){
        echo '2';
    }







    //5. DB Connection Close
    mysqli_close($conn);
?>