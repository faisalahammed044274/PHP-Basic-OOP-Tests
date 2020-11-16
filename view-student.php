<?php

session_start();

if ($_SESSION['id'] == null) {
    header('Location: index.php');
}

require_once './vendor/autoload.php';
use App\classes\Student;
use App\classes\Login;

$student = new Student();
$queryResult = $student->getAllStudentInfo();

if(isset($_GET['status'])){
$student->deleteStudentInfo($_GET['id']);
}

if (isset($_POST['btn'])) {
    $queryResult = $student->searchStudentInfoBySearchText();
    // echo '<pre>';
    // print_r($queryResult);
}

if (isset($_GET['logout'])) {
    $login = new Login();
    $login->logout();
}

?>
<hr>
    <a href="dashboard.php">Add Student</a> ||
    <a href=" view-student.php">View Student</a> ||
    <a href="?logout=true">Logout</a> ||
    <a href=""><?php echo $_SESSION['name']; ?></a>
<hr>

<hr/>
    <form action="" method="post">
        <table>
            <tr>
                <th>Enter your search Item :</th>
                <th><input type="text" name="search_text"/></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit" name="btn" value="Search"></th>
            </tr>
        </table>


    </form>
<hr/>

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
            <a href="?status=delete&id=<?php echo $student['student_id'];?>" onclick="return confirm('Are you sure to delete this !!');" >Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
