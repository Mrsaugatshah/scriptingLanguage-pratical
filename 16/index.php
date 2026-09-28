<?php
session_start();

$conn = new mysqli("localhost", "root", "", "college");

// Login
if (isset($_POST['login'])) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "1234") {
        $_SESSION['admin'] = true;
    } else {
        echo "Invalid Credentials!";
    }
}

// Create
if (isset($_POST['add']) && isset($_SESSION['admin'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO students (name,email) VALUES ('$name','$email')");
}

// Delete
if (isset($_GET['delete']) && isset($_SESSION['admin'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM students WHERE id=$id");
}

// Update
if (isset($_POST['update']) && isset($_SESSION['admin'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn->query("UPDATE students SET name='$name', email='$email' WHERE id=$id");
}
?>

<!-- Login -->
<h2>Admin Login</h2>
<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<hr>

<?php if (isset($_SESSION['admin'])) { ?>

    <h2>Add Student</h2>
    <form method="post">
        Name: <input type="text" name="name" required>
        Email: <input type="email" name="email" required>
        <input type="submit" name="add" value="Add">
    </form>

<?php } ?>

<h2>Student Records</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <?php if (isset($_SESSION['admin'])) echo "<th>Action</th>"; ?>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM students");

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";

        if (isset($_SESSION['admin'])) {
            echo "<td>
                <a href='?delete=" . $row['id'] . "'>Delete</a>
              </td>";
        }

        echo "</tr>";
    }
    ?>

</table>