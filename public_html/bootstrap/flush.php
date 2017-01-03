<?php

echo $_GET['mv'][0]."|";
echo $_GET['mv'][1]."|";
echo $_GET['mv'][2]."|<br />";

echo $_POST['mv'][0]."|";
echo $_POST['mv'][1]."|";
echo $_POST['mv'][2]."|";

//set_time_limit(0);
/*
ob_start();
for ($i=15; $i>0; $i--)
{
	echo str_pad(' ', 4096);
    echo $i.'<br />';
    ob_flush();
    flush();
    sleep(1);
}
ob_end_flush();
*/
?>
