<?php
require_once './vendor/autoload.php';
use App\classes\Student;

$student = new student();
$queryResult = $student->getAllStudentInfo();
?>
<hr>
    <a href="index.php">Add Student</a>
    <a href=" viewstudent.php">View Student</a>
<hr>

<table border="1" width='800'>
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Email Address</th>
        <th>Mobile Number</th>
        <th>Action</th>
    </tr>
    <?php while ($student = mysqli_fetch_assoc($queryResult)) {?>
    <tr>
        <td><?php echo $student['student_id'];?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['email'];?></td>
        <td><?php echo $student['mobile'];?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $student['student_id'];?>">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
    <?php }?>
</table>
