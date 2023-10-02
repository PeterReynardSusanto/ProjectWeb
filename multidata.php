<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kenal MDP</title>
</head>
<body>
    <h1> Survey MDP </h1>
        <form method="post" action="proses.php">
        Nama : <input type="text" name="nama"></br>
        Kenal MDP dari :
        <input type="checkbox" name="dari[]" value="Instagram"/> Instagram<br>
        <input type="checkbox" name="dari[]" value="Facebook"/> Facebook<br>
        <input type="checkbox" name="dari[]" value="Twitter"/> Twitter<br>
        <input type="checkbox" name="dari[]" value="Tiktok"/> Tiktok<br>
        <input type="checkbox" name="dari[]" value="Youtube"/> Youtube<br>  
        <br/>
        <button type="submit" name="simpan">Simpan</button>
        </form>
</body>
</html>