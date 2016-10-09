<?php
    session_start();
?>

<!DOCTYPE html>
<html>
       <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="moncss.css" />
    <title>Site de reservation</title>
    <h1> MAISON DES LIGUES DE LORRAINE </h1>
    </head>

    <?php 
        include("menu.php"); 
        include("connection.php");
    ?>

    <body>
        <h2> Modification du profil </h2>
    <?php
        $req = $bdd->query('SELECT * FROM utilisateur');
        while($donnees = $req->fetch())
        {
            if($donnees['id_uti'] == $_GET['id_uti'])
                {
                    $nom = $donnees['nom'];
                    $prenom = $donnees['prenom'];
                    $adresse = $donnees['adresse'];
                    $cp = $donnees['cp'];
                    $tel = $donnees['tel'];
                    $mail = $donnees['mail'];
                    $motcle = $donnees['motcle'];
                }
        }

        echo '<form method="post" action="post-modifier-profil.php?id_uti='.$_GET['id_uti'].'">'
        ?>
            <p>
                                <table style="width:50%">
                    <tr>
                        <td>
                            <label>Identifiant</label> :
                        </td>
                        <td><input type="text" name="identifiant" placeholder="Ex : moncompte"maxlength="20"/>
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <label>Mot de Passe</label> :
                    </td>
                    <td>
                        <input type="password" name="mdp" maxlength="20" /><br />
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
                            <input type="text" name="nom" placeholder="Ex : Dupont" maxlength="20" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Prenom</label> :
                        </td>
                        <td> 
                            <input type="text" name="prenom" placeholder="Ex : Pierre" maxlength="20" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Adresse</label> :
                        </td>
                        <td>
                             <input type="text" name="adresse" placeholder="Ex : 8 rue de la madonne"maxlength="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Code Postal</label> :
                        </td>
                        <td>
                             <input type="text" name="cp" placeholder="Ex : 75018" maxlength="5" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Numero de tel</label> :
                        </td>
                        <td>
                             <input type="text" name="tel" placeholder="Ex : 0754126987" maxlength="10" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Votre Adresse Mail</label> :
                        </td>
                        <td>
                         <input type="email" name="mail" placeholder="Ex : dupont.pierre@gmail.com" maxlength="50" />
                         </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mot Clé (en cas de perte de mdp)</label> :
                        </td>
                        <td>
                         <input type="text" name="motcle" placeholder="Ex : carotte" maxlength="20" /><br /><br />
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