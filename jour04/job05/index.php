<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
            width: 150px;
            height: 150px;
        }

        .morpionButton {
            width: 100%;
            height: 100%;
            font-size: 40px;
            border: none;
            background-color: white;
        }
    </style>
</head>

<body>
    <form action="index.php" method="POST">
        <table>
            <tbody>
                <tr>
                    <td><button class="morpionButton" type="submit" name="case1">-</button></td>
                    <td><button class="morpionButton" type="submit" name="case2">-</button></td>
                    <td><button class="morpionButton" type="submit" name="case3">-</button></td>
                </tr>
                <tr>
                    <td><button class="morpionButton" type="submit" name="case4">-</button></td>
                    <td><button class="morpionButton" type="submit" name="case5">-</button></td>
                    <td><button class="morpionButton" type="submit" name="case6">-</button></td>
                </tr>
                <tr>
                    <td><button class="morpionButton" type="submit" name="case7">-</button></td>
                    <td><button class="morpionButton" type="submit" name="case8">-</button></td>
                    <td><button class="morpionButton" type="submit" name="case9">-</button></td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
    $i = 0;
    foreach ($_POST as $case) {
        $i++;
        if ($_POST['case' . $i] == '-') {
            setcookie('case1', 'coucou');
        }
    }
    ?>
</body>

</html>