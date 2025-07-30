<!DOCTYPE html>
<html>
<head>
    <title>Display Records</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>

<h2>All Records</h2>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data as $row) { ?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->first_name; ?></td>
        <td><?php echo $row->last_name; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><a href="<?php echo base_url('update/edit/' . $row->id); ?>">Update</a></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
