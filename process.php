<?php 

    if(isset($_POST['btn-send']))
    {
      
    
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contactform.php?error');
       }
       else
       {
           $to = "batthjaisingh2000@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:contactform.php?success");
               echo "done";
           }
       }
    }
    else
    {
        header("location:contactform.php");
    }
?>