<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Sales</title>
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
      background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url("../images/banner.jpg");
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
      margin: 100px auto;
      border-radius: 30px;

    }

    form {
      margin-top:90px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    input[type="text"],
    input[type="date"] {
      background-color: #DAE4F0;
      margin-top: 30px;
      border: none;
      border-radius: 10px;
      line-height: 24px;
      padding: 10px 20px; 
       display: block;
      margin-left: auto;
      margin-right: auto;
      font-size: 20px;
      width: 80%; 
    }

    input:hover {
      background-color: #736A20;
      color: white;
    }

    h1 {
      margin-top: 10px;
      color: #E2E3DC;
      font-family: 'Times New Roman', Times, serif;
    }

    button {
      border-radius: 15px;
      border: none;
      margin-top: 50px;
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
    <form action="add_salesScript.php" method="post" class="form">
      <h1>Add Sales</h1>
      <select name="crop">
        <?php
        include '../db.php';
        $q = "select * from crop";
        $result = mysqli_query($con, $q);
        if (mysqli_query($con, $q)) {
            while ($a = mysqli_fetch_assoc($result)) {
                echo "<option value=\"".$a['cname']."\">".$a['cname']."</option>
                <input type=\"hidden\" name=\"cid\" value=\"" . $a['cid'] . "\">";}
            }
  ?>
</select>
      <input type="date" placeholder="Date" name="date" required>
      <input type="text" placeholder="Total Sales" name="total" required>
      <button>Add</button>
    </form>
  </div>
</body>

</html>
