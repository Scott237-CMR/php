<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <form  method="post" action="traitement.php">
            <p> 
                <input type="text" id="name" name="nom" placeholder="nom" size="30" maxlength="10"/>
            </p>
            <p> 
                <input type="text" id="prenom" name="prenom" placeholder="prenom" size="30" maxlength="10"/>
            </p>
            <p> 
                <input type="text" id="matricule"name="matricule"  placeholder="matricule" size="30" maxlength="10"/>
            </p>
            <p> 
                <input type="email" id="email" name="email" placeholder="email" size="30" maxlength="10"/>
            </p>
            <p> 
                <input type="number" id="number" name="nomber" placeholder="numero" size="30" maxlength="10"/>
            </p>
            <p> 
                <label for=" sex "> sex :</label>
                <br>
                <input type="checkbox" id="checkbox1" name="M" placeholder="M" size="10" maxlength="5"/>
                <label for=" checkbox1"> M</label>
                <input type="checkbox" id="checkbox2" name="F" placeholder="F"/>
                <label for=" checkbox2"> F </label>
                <br>
                <input type="submit" value="m'inscripe" name="ok"/>
            </p>
        </form>
    </div>
    
</body>
</html>