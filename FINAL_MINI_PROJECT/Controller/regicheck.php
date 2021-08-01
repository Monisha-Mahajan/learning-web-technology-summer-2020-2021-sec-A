<?php

  require('../Model/userModel.php');
    
     $idErr = $passwordErr = $conPasswordErr = $NameErr =$emailErr =  $typeErr ="" ;

      $id = "";
      $userName= "";
      $password= "";
      $conPassword = "";
      $Name = ""; 
      $email = "";
      $type = "";
      
    
    if(isset($_POST["Register"]))
    {
          if(empty($_POST['id'])) {
          $idErr = "Please fill up the id properly";
          }else{
            $id = $_POST['id'];
          }

         
          if(empty($_POST['password'])) {
          $passwordErr = "Please fill up the password properly";
          }

          else {
          

            if (strlen($_POST['password'])<8)
            {
              $passwordErr = "Password length has to be at least 8 characters";  
            }
            else

            {
              if(strpos( $_POST['password'], '@') or strpos($_POST['password'], '#') or strpos($_POST['password'], '$') or strpos($_POST['password'], '%') )
              { 

                $password = $_POST['password'];
               }
               
              else
              {
                $passwordErr = "Password must contain at least one of the special characters (@, #,$, %)";
              }

          }
        }
          
        


        if(empty($_POST['conPassword'])) {
        $conPasswordErr = "Please fill up the password properly";
        }
        else {
          $conPassword = $_POST['conPassword'];
        
            if (!($conPassword == $password)) 
                { 
                    $conPasswordErr = "Password does not matched"; 
                }
        }


        if(empty($_POST['name'])) 
        {
          $NameErr = "Please fill up your Name properly";
        }
        else {
          $Name = $_POST['name'];
        }

        if(empty($_POST['email'])) 
        {
          $emailErr = "Please enter an email";
        }
        else {


          if (strpos($_POST['email'], '@'))
            { 

             if( strpos($_POST['email'], '.') )
             {
              $email = $_POST['email'];
             }
             else
             {
              $emailErr = "Invalid Email format! Check Your Email..";
             }
            }
            else
            {
              $emailErr = "@ is Missing..";
            }
        }

        if(empty($_POST['type']))
        {
          $typeErr = "Please Enter your type!";
        }
        else
        {
          $type = $_POST['type'];
        }
     
        if($id != "" && $password != "" && $conPassword != "" && $Name != "" && $email != "" &&  $type != "" )
        {
          insertUser($id, $password, $conPassword, $Name, $email, $type);
        }
    }
    else 
    {
        echo "";
    }
?>