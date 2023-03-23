<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni ispit 2</title>
    
</head>
<body>
<table>
        <tr>
            <td style="vertical-align:middle">
                <form action="analiza.php" method="POST">
                    <label>Upišite riječ:</label><br>
                    <input type="text" name="word"><br>
                    <input type="submit" value="Pošalji">
                </form>
            </td>
            <td>
                <table border="2">
                    <tr>
                        <th>Riječ</th>
                        <th>Broj slova</th>
                        <th>Broj suglasnika</th>
                        <th>Broj samoglasnika</th>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
</body>
</html>