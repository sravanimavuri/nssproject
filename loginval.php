
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('nss') ; 
  
    $query=mysql_query("SELECT * FROM registration WHERE username='".$username."' AND password='".$password."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    echo" if loop ";
    while($row=mysql_fetch_assoc($query))  
    {  
     echo"while loop";
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    /*session_start();  
    $_SESSION['sess_user']=$user;*/
   echo "$user , $pass" ;	
  
    /* Redirect browser */   
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo" reqiured all fields";
}  
}  
?> 