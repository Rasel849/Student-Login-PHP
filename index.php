<?php
require "db_connect.php";
if(isset($_POST["login"]))
{
    $st_id=$_POST["student_id"];
    $password=$_POST["Password"];

    $query=mysqli_query($connect,"select * from signin");
    $flag=0;
    while($row=mysqli_fetch_array($query))
    {
        if($st_id==$row['student_id']&& $password==$row['password'])
        {
            $flag=1;
            break;
        }
        if($st_id!=$row['student_id']&& $password==$row['password'])
        {
            $flag=2;
        }
        if($st_id==$row['student_id']&& $password!=$row['password'])
        {
            $flag=3;
        }

    }
    if($flag==0)
    {
        $error4="please signin after login";

    }
    else if($flag==2)
    {
        $error5="student id wrong";
    }
    else if($flag==3)
    {
        $error6="password wrong";
    }
    else if($st_id==""||$password==""){
        $error4="please signin after login";
       
    }
    else{
        $query=mysqli_query($connect,"insert into login(student_id) 
        values ('$st_id')");
        header('Location:index_table.php');
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
            <h2>Login</h2>
            <input type="text" placeholder="Student ID" name="student_id"/>
            <p style="color:red"><?php echo isset($error5)?$error5:"" ?></P>
            <input type="password" placeholder="Enter Password" name="Password"/>
            <p style="color:red"><?php echo isset($error6)?$error6:"" ?></P>
            <p style="color:red"><?php echo isset($error4)?$error4:"" ?></P>
            <input type="submit" value="Login" name="login" id="LG"/>
            <div class="sign">
                <a href="index_s.php">
                    sign in
                </a>

            </div>
        </div>
       </form>

    </div>
    
</body>
</html>