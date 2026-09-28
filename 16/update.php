<?php if (isset($_SESSION['admin'])) { ?>

    <h2>Update Student</h2>

    <form method="post">
        ID: <input type="number" name="id" required>
        Name: <input type="text" name="name" required>
        Email: <input type="email" name="email" required>

        <input type="submit" name="update" value="Update">
    </form>

<?php } ?>