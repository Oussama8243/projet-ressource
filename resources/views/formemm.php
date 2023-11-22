<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{Route('affichage')}}" method="post" >
 <input type="email" name="email" placeholder="Email" ><br>
<input type="password" name="password" placeholder="Mot de passe"><br>
<input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"><br>
<select multiple name="filiere">
<option value="Tdi">Tdi</option>
<option value="Tdd">Tdd</option>
<option value="Tsg">TSG</option>
<option value="Ts">Ts</option>
<option value="tsi">tsi</option>
<option value="tre">tre</option>
</select><br>
<input type="date" name="date"><br>
<input type="checkbox" name="save"><br>

<input type="submit" value="M'inscrire">
</form>

</body>
</html>