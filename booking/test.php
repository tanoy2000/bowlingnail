<?php
include('../conn/conn.php');
$startTime = [];
// $select = ["10:00-11:00", "16:00-17:00"];
$sql = "SELECT * from test";
// $query = '10:00-11:00,16:00-17:00';
$result = mysqli_query($conn,$sql);
$query=mysqli_fetch_assoc($result)['time'];
// echo($query);
// exit;


$select = explode(",",$query);
// print_r($select);
foreach ($select as $element) {
    // echo $element;
    array_push($startTime, explode("-", $element)[0]);
}
// print_r($startTime);
$time = ["08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00"];
for ($i = 0; $i < count($time) - 1; $i++) {
?>
    <input class="checkbox-nailer" type="checkbox" name="timeslot[]" value="<?php ?>" <?php echo in_array($time[$i], $startTime) ? 'readonly disabled' : '' ?>>
    <label for="timeslot"> <?php echo $time[$i] ?> - <?php echo $time[$i + 1] ?>
        <br>
    <?php
}
    ?>