<?php
    require_once './vendor/autoload.php';
    use App\classes\Calculator;

    if (isset($_POST['btn'])) {
        $calculator = new Calculator;
        $result = $calculator->myCalculator();

    } else {
        $result ='';
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="number" name="first_number"></td>
        </tr>
        <tr>
            <th>Second Number</th>
            <td><input type="number" name="second_number"></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" value="<?php echo $result; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+"/>
                <input type="submit" name="btn" value="-"/>
                <input type="submit" name="btn" value="*"/>
                <input type="submit" name="btn" value="/"/>
                <input type="submit" name="btn" value="%"/>
            </td>
        </tr>
    </table>
</form>