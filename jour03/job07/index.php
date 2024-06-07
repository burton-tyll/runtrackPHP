<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        main {
            display: flex;
            width: 100%;
            min-height: 100svh;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 500px;
            margin: auto;
            justify-self: center;
        }

        input,
        select,
        button {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <main>
        <form action='index.php' method='GET'>
            <input placeholder="Entrez un texte" name='input'>
            <select name="formSelect">
                <option value="gras">Gras</option>
                <option value="césar">César</option>
                <option value="plateforme">Plateforme</option>
            </select>
            <button>Envoyer</button>
            <?php

            $chaine = $_GET['input'];
            $selected = $_GET['formSelect'];

            function changeInput($chaine, $selected)
            {
                if ($selected == 'gras') {
                    echo gras($chaine);
                }
            }

            changeInput($chaine, $selected);

            function gras($chaine)
            {
                foreach($chaine as $char){
                    if ($char)
                }
                $chaineGrasse = ('<strong>' . $chaine . '<strong>');
                return $chaineGrasse;
            }

            ?>
        </form>
    </main>
</body>

</html>