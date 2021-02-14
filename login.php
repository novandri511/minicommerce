<?php 
    session_start();
   $conn = new mysqli('localhost','root','','olioli');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form role='form' method='post'>
    <div>
        <input type="text" class='form-control' name='user'>
    </div>
    <div>
        <input type="text" class='form-control' name='pass'>
    </div>
    <div>
        <button name='login'>Login</button>
    </div>
    </form>

<?php
    if(isset($_POST['login'])){
        $ambil = $conn->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password='$_POST[pass]'");
        $cocok = $ambil->num_rows;
    
        if($cocok == 2){
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo '<div class="alert alert-info">Login Sukses</div>';
            echo '<meta http-equiv="refresh" content="1;url=index.php">';
        }
        else{
            echo '<div class="alert alert-danger">Login Gagal</div>';
            echo "<meta http-equiv='refresh' content='1;url=login.php'";
        }
    }
?>

</body>
</html>