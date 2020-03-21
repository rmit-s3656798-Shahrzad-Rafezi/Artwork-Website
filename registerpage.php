<?php
    include("header.inc");
?>

<div class="jumbotron">
    <h1 class="text-center">Welcome to Artworks</h1>
</div>

<?php
    include("nav.inc");
?>

<h2>Register</h2>
<form method="post" action="process_register.php">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Register" /></td>
        </tr>
    </table>
</form>

<?php
    include("footer.inc");
?>
