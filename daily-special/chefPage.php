<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "chef"
&& $pass == "cloudPickle")
{
        include("form.html");
}
else
{
    if(isset($_POST))
    {?>

            <form method="POST" action="chefPage.php">
            User <input type="text" name="user"/><br/>
            Pass <input type="password" name="pass"/><br/>
            <input type="submit" name="submit" value="Go"/>
            </form>
    <?}
}
?>