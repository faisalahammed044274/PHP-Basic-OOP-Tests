<?php
require_once './vendor/autoload.php';
use App\classes\Student;

$message = '';
if (isset($_POST['btn'])) {
    $student = new Student();
    $message = $student->saveStudentInfo();
}
?>

<a href="index.php">Add Student</a>

<a href="view-student.php">View Student</a>

<hr>




<h2><?php echo $message; ?></h2>

<form action="" method="POST">
    <table>
        <tr>
            <th>Name :</th>
            <td><input type="text" required name="name"/></td>
        </tr>
        <tr>
            <th>Email Address :</th>
            <td><input type="email" required name="email"/></td>
        </tr>
        <tr>
            <th>Mobile Number :</th>
            <td><input type="number" required name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"/></td>
        </tr>
    </table>
</form>