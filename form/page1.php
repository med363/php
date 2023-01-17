<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercice.php" method="post">
        <fieldset>
            <legend>Achat</legend>
            <div class="option">
                <label class="label1">Achat</label>  
                <select name="myoption">
                    <option value="">--choisit votre artice--</option>
                    <option value="1">pull</option>
                    <option value="2">pantallon</option>
                    <option value="3">chaussures</option>
                </select><br/>
                         <input type="submit" value="Envoyer" />

            </div>
            <div>
            <label class="label2">Quantite</label> 
            </div> 

        </fieldset>

        
    </form>
    
</body>
</html>