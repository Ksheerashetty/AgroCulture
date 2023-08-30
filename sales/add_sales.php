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
    select {
    background-color: #DAE4F0;
    border: none;
    border-radius: 10px;
    line-height: 24px;
    padding: 10px 20px;
    display: block;
    margin: 10px auto;
    font-size: 20px;
    width: 80%;
    cursor: pointer; /* Add cursor style */
  }

  /* Style for the dropdown options */
  select option {
    background-color: rgba(218, 228, 240, 0.8); /* Add alpha (opacity) value */
    color: #333; 
    font-size: 18px;
  }
  select option:checked {
    background-color: #736A20;
    color: #DAE4F0;
  }
  </style>
</head>
<body>
  <div>
    <form action="add_salesScript.php" method="post" class="form">
      <h1>Add Sales</h1>
      <!-- <select name="crop" id="cropSelect">
  <?php
  include '../db.php';
  $q = "SELECT * FROM crop";
  $result = mysqli_query($con, $q);
  if ($result) {
    while ($a = mysqli_fetch_assoc($result)) {
      echo '<option value="' . $a['cname'] . '" data-cid="' . $a['cid'] . '">' . $a['cname'] . '</option>';
    }
  }
  ?>
</select>
<input type="hidden" name="cid" id="selectedCid"> -->
      <input type="text" placeholder="Crop" name="crop" required>
      <input type="date" placeholder="Date" name="date" required>
      <input type="text" placeholder="Total Sales" name="total" required>
      <!-- <script>
  document.getElementById('cropSelect').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var selectedCid = selectedOption.getAttribute('data-cid');
    document.getElementById('selectedCid').value = selectedCid;
  });
</script> -->
      <button>Add</button>
    </form>
  </div>
</body>

</html>
