
function authorize(){
  if(!empty($_REQUEST[day]))
    return false;
}

function forms(){
echo <<< EOT
<html>
<head>
</head>
<body>
<form action="login.php" method="post">
username:<input type="text" name="username"></br>
password:<input type="password" name="pass"></br>
confirm password:<input type="password" name="re_pass"></br>
<input type="submit" value="submit" name="submit">

</form>
</body>
</html>
EOT;
}
