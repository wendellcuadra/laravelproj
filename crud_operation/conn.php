<?php

// Create Connection (replace with your own database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// READ operation
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

?>

<!-- HTML form for creating a new record -->
<form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Address:</label>
    <input type="text" name="address" required>
    <button type="submit">Create</button>
</form>

<!-- Display existing records -->
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
        </tr>
    <?php endwhile; ?>
</table>

<?php
// Close the database connection
mysqli_close($conn);
?>
