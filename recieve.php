?<php
$requestPayload = file_get_contents("php://input");
$myfile = fopen("results.txt", "w") or die("Unable to open file!");
$txt = $requestPayload + \n";
fwrite($myfile, $txt);
fclose($myfile);
>?
