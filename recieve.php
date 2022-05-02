?<php
$requestPayload = file_get_contents("php://input");
$myfile = fopen("results.txt", "w") or die("Unable to open file!");
$data = json_decode($requestPayload);
$txt = $data + \n";
fwrite($myfile, $txt);
fclose($myfile);
>?
