<html>

<body>
<?php


if($_POST['reg']){
   $username = $_POST['username'];
   $password = $_POST['password'];


   $info = array ('Username' => $username,
      'Password' => $password);

   $data = file_get_contents('results.json');

   $tempArray = json_decode($data);
   //append additional json to json file
   $tempArray[]=$info;
   $jsonData = json_encode($tempArray);
   file_put_contents('results.json', $jsonData);
   header('Refresh:0; URL = Feed.html');  
}

?>
</body>

</html>