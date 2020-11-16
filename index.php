<?php
    session_start();
    if (isset($_SESSION['id'])) {
        header('Location: dashboard.php');
    }

 require_once './vendor/autoload.php';
 use App\classes\Login;

 if (isset($_POST['btn'])) {
    $login =new Login();
    $login->adminLoginCheck();
 }

?>



<style>
    .form-container{
        width: 50%;
        height: 50%;
        margin: 150px auto;
        box-shadow: 0 0 3px 3px grey;
        box-sizing:border-box;
        padding: 150px;

    }

</style>

<div class="form-container">
    <form action="" method="POST">
        <table>
            <tr>
                <th>Email Address</th>
                <td><input type="email" name="email"/></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password"/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="btn" value="Submit"/></td>
            </tr>
        </table>
    </form>
</div>
