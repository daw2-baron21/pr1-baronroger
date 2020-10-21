<?php

    session_start();

    $_SESSION['user'] = 'Roger';

    $_SESSION['password'] = 113;

    $_SESSION['location'] = 'Barcelona';

?>

<?php setcookie("cookie","COOKIE!", time() + 3600, "/", "", 0);

?>

<?php

echo $_COOKIE["cookie"];

?>

    

<?php

date_default_timezone_set("Europe/Madrid");

echo("Son las ");

echo date("H");

echo(":");

echo date("i");

echo(" del dia ");

echo date("d");

echo (" del año ");

echo date("Y");

?>



<html>

  <head>

    <title>Directives Variables</title>

  </head>

<body>

    <h1>Index</h1>

<a href="file2.php?nombre=Roger&edad=19">Link a la primera pagina<br></a>

<a href="file2.php">Link pagina2.php<br></a>


<form method="POST"action="file2.php">

    Te gustaría acceder?<input type="text" name="opcion">

    <br>

    Usuario:<input type="<br> text" name="usu">

    <br>

    Contraseña:<input type="<br> password" name="pasw">

    <br>

    <input type="submit" value="Enviar formulario">



</form>



</body>

</html>
