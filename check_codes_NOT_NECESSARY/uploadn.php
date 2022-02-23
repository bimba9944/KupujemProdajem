<?php
$counter = 0;
foreach ($_FILES['fileToUpload']['name'] as $f => $name) {
 $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $name);
    $extension = end($temp);

if ((($_FILES["fileToUpload"]["type"][$f] == "image/gif")
|| ($_FILES["fileToUpload"]["type"][$f] == "image/jpeg")
|| ($_FILES["fileToUpload"]["type"][$f] == "image/jpg")
|| ($_FILES["fileToUpload"]["type"][$f] == "image/png"))
&& ($_FILES["fileToUpload"]["size"][$f] < 2000000)
&& in_array($extension, $allowedExts))
{
  if ($_FILES["fileToUpload"]["error"][$f] > 0)
  {
    echo "Return Code: " . $_FILES["fileToUpload"]["error"][$f] . "<br>";
  }
  else
  {

    if (file_exists("uploads/" . $name))
    {

    }
    else
    {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$f], "uploads/" . uniqid() . "_" . $name);
        echo "uploads/" . uniqid() . "_" . $name."<br>";
    }
  }
}
else
{
    $error =  "Invalid file";
    $counter++;
}
}
if ($counter == 5){
  echo "greska";
}
?>