<!DOCTYPE html>
<html>

<head>
    <title>AJAX CRUD</title>
</head>

<body>

    <h2>Student CRUD</h2>

    <form id="studentForm">
        <input type="hidden" id="id">

        Name:
        <input type="text" id="name" required>

        Email:
        <input type="email" id="email" required>

        <button type="submit">Save</button>
    </form>

    <br>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="data"></tbody>
    </table>

    <script>
        // READ
        function loadData() {
            fetch("api.php")
                .then(response => response.json())
                .then(data => {
                    let html = "";

                    data.forEach(student => {
                        html += `
                <tr>
                    <td>${student.id}</td>
                    <td>${student.name}</td>
                    <td>${student.email}</td>
                    <td>
                        <button onclick="editData(${student.id}, '${student.name}', '${student.email}')">
                            Edit
                        </button>
                        <button onclick="deleteData(${student.id})">
                            Delete
                        </button>
                    </td>
                </tr>`;
                    });

                    document.getElementById("data").innerHTML = html;
                });
        }

        // CREATE / UPDATE
        document.getElementById("studentForm").onsubmit = function(e) {
            e.preventDefault();

            let id = document.getElementById("id").value;
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;

            let action = id ? "update" : "create";

            fetch("api.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        action: action,
                        id: id,
                        name: name,
                        email: email
                    })
                })
                .then(response => response.text())
                .then(message => {
                    alert(message);
                    document.getElementById("studentForm").reset();
                    document.getElementById("id").value = "";
                    loadData();
                });
        };

        // EDIT
        function editData(id, name, email) {
            document.getElementById("id").value = id;
            document.getElementById("name").value = name;
            document.getElementById("email").value = email;
        }

        // DELETE
        function deleteData(id) {
            fetch("api.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        action: "delete",
                        id: id
                    })
                })
                .then(response => response.text())
                .then(message => {
                    alert(message);
                    loadData();
                });
        }

        // Load records when page opens
        loadData();
    </script>

</body>

</html>