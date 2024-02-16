<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TODO APP | Full Stack Todo App With Php</title>
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/media.css" />
</head>

<body>
  <div class="container">
    <div class="head">
      <div class="logo">
        <h1>TODO</h1>
      </div>
      <div class="theme">
        <img src="./images/icon-moon.svg" alt="Light Theme" />
      </div>
    </div>
    <form class="item-add" action="senddata.php" method="post" id="myForm">
      <button class="btn" type="submit"></button>
      <input type="text" name="add" placeholder="Create a new todo..." />
    </form>

    <div class="wrapper">
      <div class="item-lists">
        <?php
        @include("dbcon.php");

        $sql = "SELECT * FROM `todoitems`";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<div class=item>
             <button class=btn></button>
            <p>" . $row['todoitem'] . "</p>
           </div>";
          }
        } else {
          echo `<div class="item">
          <button class="btn"></button>
          <p>No Data Found</p>
        </div>`;
        }
        $conn->close();
        ?>
      </div>
      <div class="features">
        <div class="left">
          <p>5 items left</p>
        </div>
        <div class="middle">
          <button class="btn-secondary">All</button>
          <button class="btn-secondary">Active</button>
          <button class="btn-secondary">Completed</button>
        </div>
        <div class="right">
          <button class="btn-secondary">Clear Completed</button>
        </div>
      </div>
    </div>
    <div class="reorder">
      <p>Drag and drop to reorder list</p>
    </div>
  </div>
  <script src="index.js"></script>
</body>

</html>