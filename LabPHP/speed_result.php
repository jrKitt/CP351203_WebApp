<?php 

$name = $_POST['name'];
$distance = $_POST['distance'];
$time = $_POST['time'];

if($time <= 0){
    echo "เวลาไม่ถูกต้อง ไม่สามารถหารด้วยศูนย์ได้";
}
$speed = $distance / $time;

echo "<h1>ผลการคำนวณความเร็ว</h1>";

?>
ชื่อผู้ใช้: <?=$name?><br/>
ระยะทาง: <?= $distance?> กิโลเมตร<br/>
เวลา: <?=$time?> ชั่วโมง<br/>
ความเร็ว: <?=$speed?> กิโลเมตร/ชั่วโมง
