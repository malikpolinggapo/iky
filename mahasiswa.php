<!DOCTYPE html>
<html>
<head>
  <title>Web Dasar</title>
  <style>
    label{
      color: red;
    }
  </style>
  <link rel="stylesheet" href="style.css">
</head>

<body 
 
  
  <form class="form" action="login.php" method="POST">
    <h1  class="ss" ">Login</h1>
        <p>
            <label class="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Isi nama kalian" />
        </p>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="username..." />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="password..." />
        </p>
        <p>
            <input style="background-color: black; color:aliceblue" type="submit" name="submit" value="Login" />
        </p>
        </fieldset>
    </form>
    <table border="1">
    <tr>
      <td >Nama</td>
      <td>Asal</td>
    </tr>
    <tr>
      <td>Agung</td>
      <td>Gorontalo</td>
    </tr>
  </table>
  
</body>

</html>