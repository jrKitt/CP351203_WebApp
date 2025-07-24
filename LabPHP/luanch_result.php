<?php
$name = $_POST['name'];
$mn = [
    'kp' => 'ข้าวผัด',
    'wkp' => 'ผัดกะเพรา',
    'ty' => 'ต้มยำกุ้ง',
    'somtum' => 'ส้มตำ',
    'kmk' => 'ข้าวมันไก่'
];

echo "<h2>ผลการสั่งอาหารกลางวัน</h2>";
echo "ชื่อผู้สั่ง: " . $name . "<br/>";
echo "เมนูที่เลือก:<br/>";

echo "<ol>";
foreach ($mn as $key => $res) {
    if ($_POST[$key]) {
        echo "<li>" . $res . "</li>";
    
    }
}
echo "</ol>";
?>
