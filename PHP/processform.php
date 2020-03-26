<?php
extract($_REQUEST);

$filename=fopen("$first_name.html","w");
fwrite($filename,"First Name:");
fwrite($filename,$first_name ."\n");
fwrite($filename, "Last Name:");
fwrite($filename,$last_name ."\n");
fwrite($filename,"Email:");
fwrite($filename,$email ."\n");
fwrite($filename,"Department:");
fwrite($filename,$department ."\n");
fwrite($filename,"Gender:");
fwrite($filename,$gender ."\n");
fwrite($filename, "Your Message:");
fwrite($filename,$message ."\n");
fclose($filename);
echo("done")







?>