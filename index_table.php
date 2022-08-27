<?php
require "db_connect.php";
$q=mysqli_query($connect,"select * from login");
$flag=0;
while($r=mysqli_fetch_array($q))
{
    $flag=$r['student_id'];
    
}
$query=mysqli_query($connect,"select * from signin");
while($row=mysqli_fetch_array($query))
{
    if($flag==$row['student_id'])
    {
        $name=$row['student_name'];
        break;
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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="head1">
        <div class="my">
            <h4>Md Rasel Islam Babu</h4>
            <h5>ID:201311047</h5>
            <h5>CSE-326 Project</h5>
        </div>
        <div class="home">
            <a href="index.php">Home</a>
        </div>
    </div>
    <div class="tt">
        <div class="aa">
            <div class="ba">
            <h2> Table Name:<span style="color:rgb(0, 77, 0);text-transform: capitalize;"><?php echo "  ".$name;?></span> </h2>
            <a href="index_rej.php">Insert Data</a>
            </div>
        </div>
        <div class="bb">
            <table>
                <tr>
                    <th>student Name</th>
                    <th>Student ID</th>
                    <th>Section</th>
                    <th>Deparment</th>
                    <th>Versity Name</th>
                </tr>
                <?php
                $query=mysqli_query($connect,"select student_name,students_id,section,Dept,Varsity_Name from student_in where id='$flag' ");
                while($row=mysqli_fetch_array($query))
                {
                    ?>
                <tr>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['students_id']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['Dept']; ?></td>
                    <td><?php echo $row['Varsity_Name']; ?></td>
                </tr>
                <?php
                }
                ?>

            </table>
        </div>
    </div>
    
</body>
</html>
