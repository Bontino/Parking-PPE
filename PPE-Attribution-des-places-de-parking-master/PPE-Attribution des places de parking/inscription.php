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
        <h2> Inscription </h2>
        <form method="post" action="post-inscription.php">
            <p>
                <table style="width:50%">
                    <tr>
                        <td>
                            <label>Identifiant</label> :
                        </td>
                        <td><input type="text" name="identifiant" placeholder="Ex: moncompte"maxlength="20"/>
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <label>Mot de Passe</label> :
                    </td>
                    <td>
                        <input type="password" name="mdp" placeholder="*******" maxlength="20" /><br />
                    </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <h3>Pour vous connaitre un peu plus: </h3><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Nom</label> : 
                        </td>
                        <td>
                            <input type="text" name="nom" placeholder="Ex: Tricoire" maxlength="20" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Prenom</label> :
                        </td>
                        <td> 
                            <input type="text" name="prenom" placeholder="Ex: Elliot" maxlength="20" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Adresse</label> :
                        </td>
                        <td>
                             <input type="text" name="adresse" placeholder="Ex: 8 rue de la madonne"maxlength="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Code Postal</label> :
                        </td>
                        <td>
                             <input type="text" name="cp" placeholder="Ex: 75018" maxlength="5" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Numero de tel</label> :
                        </td>
                        <td>
                             <input type="text" name="tel" placeholder="Ex: 0754506747" maxlength="10" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Adresse Mail</label> :
                        </td>
                        <td>
                         <input type="email" name="mail" placeholder="Ex: tricoire.elliot@gmail.com" maxlength="50" />
                         </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mot Clé (en cas de perte de mdp)</label> :
                        </td>
                        <td>
                         <input type="text" name="motcle" placeholder="Ex: escriva" maxlength="20" /><br /><br />
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <input type="submit" value="Valider" />
                        </td>
                    </tr>
                </table>
            </p>
        </form>
    </body>
    <?php include("footer.php"); ?>
</html>