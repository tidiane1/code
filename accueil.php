<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" >
<head>
    <title>Mon super site</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="com.css"/>
</head>
<body>
    <?php
        $date = date("d-m-Y");
        $heure = date("H:i");
        echo"<h4 style='text-align: center; background-color: moccasin; border: 1px solid black; width: 250px; height: 20px;'>Dakar, le $date | $heure</h4>";
    ?>
    <div id="info" >
        <form action="verification.php" method="post">
        <center><fieldset style="margin-top: 10%; background-color:moccasin; width: 350px;">
            <legend><h2>Page D'accueil</h2></legend>
            LOGIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input type="text" name="login" style="float: right;" required/> <br/> <br/>
            PASSWORD : <input type="password" name="password" style="float: right;" required/> <br/> <br/>
            <select name="profil" style="float: right;" >
                <option value="">Profil</option>
                <option value="user">USER</option>
                <option value="admin">ADMIN</option>
            </select><br/> <br/>
                 <input type="submit" name="connexion" value="Connexion" style="float: right;"/> <br/> <br/>
        </fieldset></center>
        </form>
    </div>
</body>
</html>