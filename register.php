<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      width: 100vw;
      height: 100vh;
      overflow-x: hidden;
      font-family: 'Times New Roman', Times, serif;
      font-size: 16px;
      background-image: url("images/login.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    div {
      background-color: #3B3C16;
      opacity: .8;
      width: 400px;
      height: 600px;
      margin: 100px auto;
      border: 1px solid black;
      border-radius: 30px;

    }

    form {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    input {
      background-color: #DAE4F0;
      margin-top: 50px;
      border: none;
      border-radius: 10px;
      line-height: 24px;
      padding: 10px 30px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      font-size: 20px;
    }

    input:hover {
      background-color: #736A20;
    }

    h1 {
      color: #E2E3DC;
      font-family: 'Times New Roman', Times, serif;
    }

    button {
      border-radius: 15px;
      border: none;
      margin-top: 70px;
      padding: 10px 30px;
      background-color: #736A20;
      color: #DAE4F0;
      font-size: 20px;

    }

    button:hover {
      background-color: #554914;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: rgba(41, 42, 13, 0.5);
    }

    li {
      float: right;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      text-transform: uppercase;
      position: relative;
      transition: all 0.5s linear;
    }

    li a:hover::after {
      width: 60%;
    }

    li a::after {
      content: "";
      position: absolute;
      left: 20px;
      bottom: 10px;
      width: 0%;
      background-color: #402D10;
      color: #402D10;
      height: 2px;
      transition: all 0.5s linear;
    }
  </style>
</head>

<body>

  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="#">About us</a></li>
    <li><a href="#">Contact us</a></li>
  </ul>
  
  <div>
  
    <form action="reg.php" method="post" class="form">
   
      <h1>Signup</h1>
      <input type="text" placeholder="Name" name="name">
      <input type="password" placeholder="Password" name="pass">
      <input type="tel" placeholder="Mobile Number" name="no">
      <input type="text" placeholder="Address" name="add">
      <button>Signup</button>
    </form>
  </div>
  
    <center>
  <?php 
    session_start();
    if(isset($_SESSION['message']) && !empty($_SESSION['message']))
    {
      echo "<h1>User Already Exist</h1>";
      $_SESSION['message']="";
    }
    ?>
    </center>
  
</body>

</html>