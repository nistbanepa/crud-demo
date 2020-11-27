<?php
echo '
    <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>

    Welcome  echo $_POST["name"]; <br>
    Your email address is: echo $_POST["email"]';
?>