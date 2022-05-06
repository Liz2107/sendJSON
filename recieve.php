?<php
$requestPayload = file_get_contents("php://input");
$myfile = fopen("results.txt", "w") or die("Unable to open file!");
echo "<script>console.log("php line 4");</script>";
$data = json_decode($requestPayload);
$txt = $data + \n";
fwrite($myfile, $txt);
fclose($myfile);
echo "<script>console.log("php line 8");</script>";
>?
