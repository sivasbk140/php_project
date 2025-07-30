<!DOCTYPE html>
<html>
<head>
    <title>Update Record</title>
    <style>
        table {
            width: 400px;
            margin: 20px auto;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>

<h2 align="center">Update Record</h2>

<form method="post" action="<?php echo base_url('update/updatedata'); ?>">
    <input type="hidden" name="id" value="<?php echo $data->id; ?>">
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="first_name" value="<?php echo $data->first_name; ?>"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="last_name" value="<?php echo $data->last_name; ?>"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo $data->email; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>

</body>
</html>
