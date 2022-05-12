<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<main>

<div class="container">
    
    <?php 

        include("kullanicilar.php");


        if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
        {
           $_SESSION["login"] = "true";
           $_SESSION["user"] = $user;
           $_SESSION["pass"] = $pass;
    
           echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
    
        }
    
        else 
        {
                echo "Kullancı Adı veya Şifre Yanlış.<br>";
                echo "!!!TEKRAR DENEYİN!!!";
                header("Refresh: 1; url=login.php");
        }
    
    ?>
    
</div>

</main>


<footer class="py-5 bg-info text-white text-center">
Web-Teknolojileri-Projesi
</footer>

<!-- BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>