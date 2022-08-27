<?php
require "db_connect.php";
$q=mysqli_query($connect,"select * from login");
$flag=0;
while($r=mysqli_fetch_array($q))
{
    $flag=$r['student_id'];
    
}
if(isset($_POST["submit"]))
{
    $student_name=$_POST["student_name"];
    $student_id=$_POST["student_id"];
    $Section=$_POST["Section"];
    $dept=$_POST["dept"];
    $Versity_Name=$_POST["Versity_Name"];
    if($student_name==""||$student_id==""||$Section==""||$dept==""||$Versity_Name=="")
    {
        $error10="Please complete Form";
    }
    else{
        $query=mysqli_query($connect,"insert into student_in(id,student_name,students_id,section,Dept,Varsity_Name)
        values('$flag','$student_name','$student_id','$Section','$dept','$Versity_Name')");
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
    <title>sign in.com</title>
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
            <h2>Registration</h2>
            <input type="text" placeholder="Enter student name" name="student_name"/>
            <input type="text" placeholder="Enter student id" name="student_id"/>
            <input type="text" placeholder="Enter Section" name="Section"/>
            <input type="text" placeholder="Enter Deparment Name" name="dept"/>
            <input type="text" placeholder="Enter Varsity Name" name="Versity_Name"/>
            <p style="color:red"><?php echo isset($error10)?$error10:"" ?></P>
            <input type="submit" value="submit" name="submit" id="LG"/>
        </div>
      </form> 

    </div>
    
</body>
</html>