<?php
    // logicnya cuy

    
    if (isset($_POST['submit'])) {
        $drop = $_POST["drop"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
    

    switch ($drop) {
        // tambah
        case "tambah";
        $num3 = $num1 + $num2;
        break;
        // kurang
        case "kurang";
        $num3 = $num1 - $num2;
        break;
        // kali
        case "kali";
        $num3 = $num1 * $num2;
        break;
        // bagi
        case "bagi";
        $num3 = $num1 / $num2;
        break;
        default:
        $num3 = "Pilih Operasinya Dulu cuy!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator by syehan</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- cssnya cuy -->
    <style>
        * {
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}

body {
  background-image: url(3671320.jpg);
  background-size: cover;
}

.container {
  width: 450px;
  height: 450px;
  background: transparent;
  backdrop-filter: blur(8px);
  border-radius: 20px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  text-align: center;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
}

h3 {
  margin: 40px 0 65px 0;
  font-size: 22px;
  color: white;
}

form {
  position: absolute;
  left: 50%;
  top: 45%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
}

input {
  width: 290px;
  height: 30px;
  margin: 20px 0 0 0;
  border-radius: 40px;
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  -ms-border-radius: 40px;
  -o-border-radius: 40px;
  padding: 0 30px;
  font-size: 18px;
  color: black;
  border: 2px solid rgb(0, 0, 0, 0.65);
  outline: none;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
}

input:hover {
  width: 250px;
}

select {
  width: 270px;
  height: 30px;
  margin-top: 20px;
  padding: 0 30px;
  font-size: 18px;
  color: black;
  border: none;
  border-radius: 40px;
  -webkit-border-radius: 40px;
  -moz-border-radius: 40px;
  -ms-border-radius: 40px;
  -o-border-radius: 40px;
  outline: none;
}

input[type="submit"] {
  background-color: #050508;
  width: 190px;
  height: 30px;
  color: white;
  font-size: 20px;
  border: none;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
}

input [type="submit"]:active {
  transform: scale(0.9);
  -webkit-transform: scale(0.9);
  -moz-transform: scale(0.9);
  -ms-transform: scale(0.9);
  -o-transform: scale(0.9);
}

h5 {
  color: rgb(170, 168, 168);
  margin-top: 30px;
  font-size: 18px;
}

h5 span {
  color: white;
  font-size: 18px;
}

    </style>
</head>
<body>
    <div class="container">

    <h3>Kalkulator</h3>

        <form action="" method="POST">
            <input type="text" name="num1" placeholder="Masukan angka pertama cuy" value="<?= @$num1 ?>">
            <input type="text" name="num2" placeholder="Masukan angka kedua cuy" value="<?= @$num2 ?>">
            <select name="drop">
                <option>PILIH OPERASI CUY</option>
                <option value="tambah">TAMBAH</option>
                <option value="kurang">KURANG</option>
                <option value="kali">KALI</option>
                <option value="bagi">BAGI</option>
            </select>

            <input type="submit" name="submit">

            <h5>HASILNYA CUY :

            <br>
            <span><?= @$num3 ?></span>

            </h5>
        </form>
    </div>
</body>
</html>