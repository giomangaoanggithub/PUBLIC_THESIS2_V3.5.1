<?php

session_start();

error_reporting(0);

$_SESSION["teacher_pick_room"] = '1';

$_SESSION["teacher_curr_room"] = $_POST["room_number"];

?>