<?php
    require_once './vendor/autoload.php';
    use App\classes\User;

    $result="";
    if( isset($_POST['btn']) ) {
        $user = new User();
        $result = $user->makeFullName();
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name"/></td>
        </tr> 
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name"/></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" value="<?php echo $result; ?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"/></td>
        </tr>
    </table>
</form>
