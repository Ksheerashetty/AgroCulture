<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Crop</title>
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("../images/banner.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            overflow: hidden;
        }

        div {
            background-color: #3B3C16;
            opacity: .8;
            width: 400px;
            /* height: 500px; */
            margin: 50px auto;
            border: 1px solid black;
            border-radius: 30px;

        }

        form {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        input {
            background-color: #DAE4F0;
            margin-top: 30px;
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
            color: white;
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
            margin-bottom: 20px;

        }

        button:hover {
            background-color: #554914;
        }
    </style>
</head>

<body>

    <div>
        <form action="add_crops.php" method="post" class="form">
            <h1>Add Crops</h1>
            <input type="text" placeholder="Crop" name="crops" required>
            <input type="number" placeholder="Quantity" name="quantity" required>
            <button>Add</button>
        </form>
    </div>
    <center>
  <?php 
    session_start();
    if(isset($_SESSION['message']) && !empty($_SESSION['message']))
    {
      echo "<h1>Crop Already Exist</h1>";
      $_SESSION['message']="";
    }
    ?>
    </center>
</body>

</html>