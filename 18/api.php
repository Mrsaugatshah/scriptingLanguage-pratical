<?php

$conn = new mysqli("localhost", "root", "", "college");

$data = json_decode(file_get_contents("php://input"), true);

$action = $data["action"] ?? "";

if ($action == "create") {

    $name = $data["name"];
    $email = $data["email"];

    $conn->query("INSERT INTO students (name, email)
                  VALUES ('$name', '$email')");

    echo "Student Added Successfully";
} elseif ($action == "update") {

    $id = $data["id"];
    $name = $data["name"];
    $email = $data["email"];

    $conn->query("UPDATE students
                  SET name='$name', email='$email'
                  WHERE id=$id");

    echo "Student Updated Successfully";
} elseif ($action == "delete") {

    $id = $data["id"];

    $conn->query("DELETE FROM students WHERE id=$id");

    echo "Student Deleted Successfully";
} else {

    // READ
    $result = $conn->query("SELECT * FROM students");

    $students = [];

    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }

    echo json_encode($students);
}

$conn->close();
