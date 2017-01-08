<!DOCTYPE html>
<html>
<head>
    <title>Création d'un tableau</title>
    <meta charset="utf-8"/>
</head>
<body>

<h1>Créer un tableau</h1>

<form action="tableauexo.php" method="post">
   Choisissez le titre de votre tableau <input type="text" name="titre" value="" autofocus /><br /><br />
   Choisissez le nombre de colonnes <input type="num" name="nbcolonnes" value="" required/><br /><br />
   Choisissez le nombre de lignes <input type="num" name="nblignes" value="" required /><br /><br />
    <input type="submit" name="validation" value="Valider" /><br /><br />
</form>
</body>
</html>

<?php

class Table
{
    private $_titre;
    private $_nbcolonnes;
    private $_nblignes;

    public function __construct($nbcolonnes)
    {
        $this->_titre = $titre;
        $this->_nblignes = array();
        $this->_nbcolonnes = array();

    }

    public function createTableau()
    {
        //on verifie que le formulaire a été posté
        if (isset($_POST['validation']))
        {
            // on verifie que les champs Titre et colonne ont bien été remplis
            if (!empty($_POST['nbcolonnes']) && !empty($_POST['nblignes']))
            {
                //Affectation des valeurs saisies dans des variables
                $titre = $_POST['titre'];
                $nbcolonnes = $_POST['nbcolonnes'];
                $nblignes = $_POST['nblignes'];

                //generation du tableau
                echo '<caption><h2>' . $titre . '</h2></caption>';
                echo '<table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse;">';
                echo '<tr>';
                for ($c = 1; $c <= $nbcolonnes; $c++)
                {
                    echo '<th>Titre ' . $c . '</th>';
                }
                echo '</tr>';

                //création des lignes <tr>
                for ($l = 1; $l <= $nblignes; $l++)
                {
                    echo '<tr>';
                    //création des colonnes
                    for ($c = 1; $c <= $nbcolonnes; $c++)
                    {
                        //pour remplir avec qq chose on peut mettre le numero de la ligne et de la colonne
                        echo '<td>Ligne ' . $l . ' col.' . $c . '</td>';
                    }
                    echo '</tr>';
                }
            }

        }
    }

}


