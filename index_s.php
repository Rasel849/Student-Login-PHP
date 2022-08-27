<?php
require "db_connect.php";
if(isset($_POST["sub"]))
{
    $st_id=$_POST["student_id"];
    $st_name=$_POST["student_Name"];
    $password=$_POST["Password"];
    $cpassword=$_POST["CPassword"];
    $query=mysqli_query($connect,"select * from signin");
    $flag=0;
    while($row=mysqli_fetch_array($query))
    {
        if($st_id==$row['student_id'])
        {
            $flag=1;
        }

    }
   
    if($st_id=="" ||  $st_name=="" || $password=="" || $cpassword=="")
    {
        $error="please complete signin From";
    }
    else if($password!=$cpassword)
    {
        $error2="cann't match password";
    }

    else if($flag==1)
    {
        $error3="That Student id already created!!!!";

    }
    else{
        $query=mysqli_query($connect,"insert into signin(student_id,student_name,password,confirm_password) 
        values ('$st_id','$st_name','$password','$cpassword')");
        header('Location:index.php');

    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="my">
        <h4>Md Rasel Islam Babu</h4>
            <h5>ID:201311047</h5>
            <h5>CSE-326 Project</h5>
        </div>
        <form action="" method="post">
        <div class="Login">
            <h2>Sign in</h2>
            
            <input type="text" placeholder="Enter student ID" name="student_id" value="<?php echo isset($st_id)?$st_id:"" ?>"/>
            <p style="color:red"><?php echo isset($error3)?$error3:"" ?></P>
            <input type="text" placeholder="Enter student Name" name="student_Name" value="<?php echo isset($st_name)?$st_name:"" ?>"/>
            <input type="password" placeholder="Enter Password" name="Password" value="<?php echo isset($password)?$password:"" ?>" />
            <p style="color:red"><?php echo isset($error2)?$error2:"" ?></P>
            <input type="password" placeholder="Enter confirm Password" name="CPassword" value="<?php echo isset($cpassword)?$cpassword:"" ?>"/>
            <p style="color:red"><?php echo isset($error)?$error:"" ?></P>
            <input type="submit" value="submit" name="sub" id="LG"/>
        </div>
        </form>

    </div>
    
</body>
</html>