<?php

require_once 'projects.php';


if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $desc = $_POST['description'];

    $project = new Projects();
    $result = $project->insert($title, $desc);

    if ($result == "Success") {
      ?>
      <script>
        alert("Inserted Successfully");
      </script>
      <?php
    } else {
      $error = $result;
      echo $error;
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $project = new Projects();
    $result = $project->update($id, $title, $desc);

    if ($result == "Success") {
      ?>
      <script>
        alert("Updated Successfully");
      </script>
      <?php
    } else {
      $error = $result;
      echo $error;
    }
}

if (isset($_POST['delete'])) {

    $id = $_POST['id'];

    $project = new Projects();
    $result = $project->delete($id);

    if ($result == "Success") {
      ?>
      <script>
        alert("Deleted Successfully");
      </script>
      <?php
    } else {
      $error = $result;
      echo $error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Project</title>
</head>
<body>
    <!-- <h2>Add a New Project</h2>
    <form method="POST" action="process_project.php">
        <input type="text" name="title" placeholder="Project Title" required>
        <textarea name="description" placeholder="Project Description" required></textarea>
        <button type="submit">Add Project</button>
    </form>
    <a href="add_project.php?logout=true">Logout</a> -->
    <div class="container">
        <div class="project-container" style="margin-top: 100px;">
            <form method="post">
                <div class="project-form">
                    <h1>Insert Project</h1>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Add title" required>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="10" placeholder="Add description"></textarea>
                    </div>
                </div>
                <button type="submit" name="add">Add</button>
            </form>
        </div>
        <div class="project-container">
            <form method="post">
                <div class="project-form">
                    <h1>Modify Project</h1>
                    <div>
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id" placeholder="ID" required>
                    </div>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Add title" required>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="10" placeholder="Add description"></textarea>
                    </div>
                </div>
                <button type="submit" name="update">Update</button>
            </form>
        </div>
        <div class="project-container" style="margin-bottom: 40px;">
            <form method="post">
                <div class="project-form">
                    <h1>Delete Project</h1>
                    <div>
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id" placeholder="ID" required>
                    </div>
                </div>
                <button type="submit" name="delete">Delete</button>
            </form>
        </div>
    </div>
</body>
</html>