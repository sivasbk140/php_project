<!DOCTYPE html>
<html>
<head>
  <title>User Table</title>
  <style>
    table {
      width: 600px;
      border-collapse: collapse;
      margin: 20px 0;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #ccc;
    }
  </style>
</head>
<body>

  <table>
    <tr>
      <th>Sr No</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Id</th>
    </tr>

    <?php
    $i = 1;
    foreach ($data as $row) {
      echo "<tr>";
      echo "<td>" . $i . "</td>";
      echo "<td>" . $row->first_name . "</td>";
      echo "<td>" . $row->last_name . "</td>";
      echo "<td>" . $row->email . "</td>";
      echo "</tr>";
      $i++;
    }
    ?>
  </table>

</body>
</html>
