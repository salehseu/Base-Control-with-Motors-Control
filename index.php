<?php  

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "robot";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}


if(isset($_POST['save'])){ 
$angle1 = $_POST['angle1'];
$angle2 = $_POST['angle2'];
$angle3 = $_POST['angle3'];
$angle4 = $_POST['angle4'];
$angle5 = $_POST['angle5'];
$angle6 = $_POST['angle6'];

    $my_query = "select * from motors WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO motors (angle1, angle2, angle3, angle4, angle5, angle6) VALUES ('$angle1', '$angle2', '$angle3', '$angle4', '$angle5', $angle6)";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}

else if(isset($_POST['on'])) {

    $my_query = "select * from onvalues WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO onvalues (OnV) VALUES (1)";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}

else if(isset($_POST['off'])) {

    $my_query = "select * from offvalues WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO offvalues (OffV) VALUES (0)";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}




if(isset($_POST['left'])){
    $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO base (LeftM) VALUES ('left')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
    

}

if(isset($_POST['right'])){
    $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO base (RightM) VALUES ('right')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
   
}


if(isset($_POST['forward'])){

    $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO base (Forward) VALUES ('forward')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
  
}

if(isset($_POST['backward'])){
    $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO base (Backward) VALUES ('backward')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
    
}



else if(isset($_POST['stop'])){

    $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($conn, $my_query);

    $my_query = "INSERT INTO base (Stop) VALUES ('stop')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}

?>