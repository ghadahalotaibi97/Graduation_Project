<?php
session_start();
require_once('conn.php');





	if(isset($_POST['submit']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])  && !empty($_POST['email'])   && !empty($_POST['password'])&& !empty($_POST['number'])){ 
   
    
     $firstname =$_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email= $_POST['email'];
     $password = $_POST['password'];
     $number =$_POST['number'];
     $id = $_POST['getID'];

    $sql="UPDATE register SET firstname='".$firstname."',lastname='".$lastname."',email='".$email."',password='".$password."',number='".$number."' WHERE id='".$id."'";
    $update =mysqli_query($conn,$sql);
    if($update === TRUE)
    {
      echo '
         <script type="text/javascript">
          alert(" Update Success!");
          window.location.replace("profile.php");
         </script>';
    
    }

else{
		echo '
         <script type="text/javascript">
          alert("Error!");
          window.location.replace("profile.php");
         </script>';
	}

}




		?>
<?php mysqli_close($conn); ?>