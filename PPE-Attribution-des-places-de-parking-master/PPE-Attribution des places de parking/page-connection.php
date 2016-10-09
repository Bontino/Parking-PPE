<!DOCTYPE html>
<html>
       <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="moncss.css" />
    <title>Site de reservation</title>
    <h1> MAISON DES LIGUES DE LORRAINE </h1>
    </head>

    <?php include("menu.php"); ?>
    <body>
        
        <form method="post" action="post-connection.php">
            <p>
             <table style="width:50%">
                <h2>Vos identifiants</h2>
                <table style="width:50%">
                    <tr>
                    <td>
                <label>Identifiant</label> :
                         </td> 
                    <td colspan=2>
                <input type="text" name="identifiant" placeholder="Ex : moncompte" maxlength="20" />
                    </td>
                </tr>
                <tr>
                    <td >
                <label>Mot de Passe</label> :
                    </td>
                    <td colspan=2>
                <input type="password" name="mdp" placeholder="*******" maxlength="20" />
                    </td>
                </tr>
                <tr>
                   <td> 
                   <a href="mdp-perdu.php">Mot de passe perdu ?</a>
                </td>
                <td>
                 <input type="submit" value="Valider" /> 
                </td>
                </tr>
                </table>
            </p>
        </form>
    </body>
    <?php include("footer.php"); ?>
</html>