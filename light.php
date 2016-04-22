<?php
// Smple light switcher for RPI 
// Author: Catalin Dordea ( http://catalin.dordea.ro)
// CHANGE THIS VAR TO THE PATH TO .gpio
$gpio_script_path = '/var/www/html/.gpio';

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if(isset($_GET['a'])) {

    $actiune = $_GET['a'];
}

if($actiune) {

    switch($actiune){
        case 'on':
            $time = $_GET['time'];
            exec( "sudo python ".$gpio_script_path." -a on -t ".$time);
			echo 'on';
            break;
        case 'off':
			exec( "sudo python ".$gpio_script_path." -a off 2>&1");
            echo 'off';
			break;
        case 'status':
            $handle = exec( "sudo python ".$gpio_script_path." -a status 2>&1");
            echo $handle;
            break;
        default:

        break;
    }

} else {
    echo 'no action';
}
?>
