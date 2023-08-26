<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment</title>
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("../images/banner.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 16px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgba(64, 45, 16, 0.5);
        }

        li {
            float: left;
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
            background-color: #504822;
            color: #504822;
            height: 2px;
            transition: all 0.5s linear;
        }
        .active {
            background:#736A20;
            opacity: .6;
            color: aliceblue;
            font-weight: bold;
        }

        h1 {
            margin: 50px auto;
            margin-bottom: 20px;
            color: aliceblue;
            text-shadow: -8px -8px 15px rgb(147, 127, 45), 8px 8px 15px rgb(147, 127, 45);
        }

        .button{
            background: rgba(0, 0, 0, 0.3);
            padding: 12px 12px;
            border: none;
            border-radius: 5px;
            color: white;
            margin-bottom: 20px;
            box-shadow:  -8px -8px 10px rgba(0, 0, 0, 0.2),8px 8px 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .button:hover{
            background-color:#937F2D ;
            opacity: .6;
        }
        /* ---------------------------------------------------------------------------------- */


        .center-button {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    margin:15px;
     }

        .table-wrapper {
            overflow: auto;
            max-width: 100%;
            background-repeat: no-repeat;
            background-color: transparent;
            background-size: 40px 100%, 40px 100%, 14px 100%, 14px 100%;
            background-position: 0 0, 100%, 0 0, 100%;
            background-attachment: local, local, scroll, scroll;
        }

        tr {
            border-bottom: 1px solid;
        }

        th {
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.3);
            color: #ffffff;
            padding : 20px;
            /* white-space: nowrap; */
        }

        td {
            text-align: center;
            padding: 0.5em 4em;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.3);
            color: #ffffff;
            font-size:20px;
        }
    </style>
</head>

<body>
    <!-- top navigation bar -->
    <ul>
        <li><a href="../sales/sales.php">Sales</a></li>
        <li><a href="../crops/crop.php">Crops</a></li>
        <li><a class="active" href="#">Equipment</a></li>
        <li><a href="../logout.php">Logout</a></li>
    </ul>

    <!-- ---------------------------------------------------------------------------------- -->
    <!-- table -->

    <center>
        <h1 style="font-weight: normal;text-transform: none;">Equipments</h1>
        <button class="button" onclick="window.location.href='add_equipment.html'">Add Equipment</button>
        <div class="table-wrapper" tabindex="0">
            <table>
                <thead>
                    <tr>
                        <th>Equipment ID</th>
                        <th>Equipment</th>
                        <th>Farmer ID</th>
                        <th>Date</th>
                        <th>Cost</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
              <?php
            include '../db.php';
            $q = "select * from equipment";
            $result = mysqli_query($con, $q);
            if (mysqli_query($con, $q)) {
                while ($a = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                    <td>" . $a['eid'] . "</td>
                    <td>" . $a['ename'] . "</td>
                    <td>" . $a['fid'] . "</td>
                    <td>" . $a['date'] . "</td>
                    <td>" . $a['cost'] . "</td>
                    <td>
                    <form action=\"del_equipment.php\" method=\"post\">
                        <input type=\"hidden\" name=\"del\" value=\"" . $a['eid'] . "\">
                        <div class=\"center-button\">
                        <button class=\"button\" type=\"submit\">Delete</button>
                    </div>
                </form>
            </td>
            </tr>";
                }
            }
            ?> 
            </tbody> 
            </table>
        </div>
    </center>
</body>
</html>