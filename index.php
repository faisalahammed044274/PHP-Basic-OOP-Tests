<?php
require_once './vendor/autoload.php';
use App\classes\Series;
$series = new Series();

//$result =' ';
$result = [];
$result2 = [];

if (isset($_POST['btn'])) {
    $result = $series->createSeries();
}

if (isset($_POST['btn1'])) {
    $result2 = $series->findWordCharacter();
}

?>
<form action="" method="post">
    <tr>
        <th>Enter your string</th>
        <td><input type="text" size="60" name="given_string"></td>
    </tr>
    <tr>
        <th>Total number of word</th>
        <td><input type="text" value="<?php echo $result2['total_word']; ?>"></td>
    </tr>
    <tr>
        <th>Total number of character</th>
        <td><input type="text" value="<?php echo $result2['total_character']; ?>"></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" name="btn1" value="Submit" /></td>
    </tr>
</form>

<div></div>
<hr>

<form action="" method="POST">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="starting_number" /></td>
        </tr>
        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="ending_number" /></td>
        </tr>
        <tr>
            <th>Your Choice</th>
            <td>
                <input type="radio" name="choice" value="odd" /> Odd
                <input type="radio" name="choice" value="even" /> Even
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td><textarea rows="5" cols="40"><?php foreach ($result as $value) {
                                                    echo $value . ' ';
                                                } ?></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit" /></td>
        </tr>
    </table>
</form>