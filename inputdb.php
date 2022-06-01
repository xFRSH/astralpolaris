<?php
require "dbSave.php";
$db = new DataBase();
if (isset($_POST['macaddr']) && isset($_POST['ssid']) && isset($_POST['level']) && isset($_POST['lokasi'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("jaringan", $_POST['macaddr'], $_POST['ssid'], $_POST['level'], $_POST['lokasi'])) {
            echo "input sukses";
        } else echo "input gagal";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
