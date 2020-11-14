<?php
require_once './vendor/autoload.php';
use App\classes\Student;

$student = new Student();
$queryResult = $student->getStudentInfoById($_GET['id']);
$StudentIdData = mysqli_fetch_assoc($queryResult);

if (isset($_POST['btn'])) {
    // $student->updateStudentInfo($StudentIdData['student_id']);
    // $student->updateStudentInfo($_GET['id']);
    $student->updateStudentInfo();
}

?>

<hr>

<a href="index.php">Add Student</a>

<a href="view-student.php">View Student</a>

<hr>

<form action="" method="POST">
    <table>
        <tr>
            <th>Name :</th>
            <td>
                <input type="text" value="<?php echo $StudentIdData['name']; ?>" required name="name"/>
                <input type="hidden" value="<?php echo $StudentIdData['student_id']; ?>" required name="id"/>
            </td>
        </tr>
        <tr>
            <th>Email Address :</th>
            <td><input type="email" value="<?php echo $StudentIdData['email']; ?>"  required name="email"/></td>
        </tr>
        <tr>
            <th>Mobile Number :</th>
            <td><input type="number" value="<?php echo $StudentIdData['mobile']; ?>" required name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"/></td>
        </tr>
    </table>
</form>