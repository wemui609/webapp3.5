<?php session_start(); 

    
        $uname=$_POST['uname'];
        $pw=$_POST['pw'];

        $connection = mysqli_connect("localhost","root","","recipeme");

        $query = "SELECT * FROM capture WHERE pw='$pw' AND user='$uname'";

        $loginCheck = mysqli_query($connection, $query);

        $row = mysqli_num_rows($loginCheck);

        //echo $row;

        //echo "<br>";

        if($row == 1){
            while($row = mysqli_fetch_assoc($loginCheck)){
                $_SESSION["uid"] = $row["uid"];
                //echo $_SESSION["uid"].'<br>';

                $_SESSION["time"] = $row["time"];
               //echo $_SESSION["time"].'<br>';
                
                $_SESSION["name"] = $row["name"];
                //echo $_SESSION["name"].'<br>';
                
                $_SESSION["email"] = $row["email"];
                //echo $_SESSION["email"].'<br>';
                
                $_SESSION["pw"] = $row["pw"];
                //echo $_SESSION["pw"].'<br>';

                 $_SESSION["user"] = $row["user"];
                //echo $_SESSION["user"].'<br>';

               // echo "<a href=\"profile.php\">proceed to profile</a>";
            }

        } else {
            //echo "try again";
        }
        mysqli_close($connection);


  
header ('Location: profile.php');
?>