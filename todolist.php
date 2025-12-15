<?php
session_start();

if(!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if (isset($_POST['tasks']) && $_POST['tasks'] !== '') {
    $_SESSION['tasks'][] = $_POST['tasks'];
}
if (isset($_POST['completed'])) {
    foreach ($_POST['completed'] as $index) {
        unset($_SESSION['tasks'][$index]);
    }}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
</head>
<body>
<h1>My To Do List</h1>

<form method="post">
    Enter a new task: <input type="text" name="tasks">
    <input type="submit" name="send">
</form>

<h2>Tasks:</h2>
<ul>
<?php
foreach ($_SESSION['tasks'] as $index => $task) {
        echo '<input type="checkbox" name="completed[]" value="' . $index . '"> ';

    echo "<li>" . $task . "</li>";
}
?>
</ul>
</body>
</html>
