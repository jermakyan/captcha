<?php
session_start();
//echo 'entered: '.$_POST['capcha'];
//echo 'in session: '.$_SESSION['capcha'];
if($_POST['capcha'] != $_SESSION['capcha'])
	echo "Неверно!";
else
	echo "Верно!";