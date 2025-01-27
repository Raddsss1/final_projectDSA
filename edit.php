<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$studentID = $resultData['studentID'];
$name = $resultData['name'];
$email = $resultData['email'];
$contact = $resultData['contact'];

// Handle form submission
$_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']) && 
    mysqli_query($mysqli, "UPDATE users SET 
    
        studentID = '{$_POST['studentID']}', 
        name = '{$_POST['name']}', 
        email = '{$_POST['email']}', 
        contact = '{$_POST['contact']}' 
        WHERE id = $id");
        $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']) && 
        header("Location: index.php") && exit();

$_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancel']) && 
    header("Location: index.php") && exit();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h2>EDIT FORM</h2>
    <section class="container">
        <header>Edit Data</header>
        <form method="post" class="form">
            <div class="input-box">
                <label for="studentID">Student ID</label>
                <input class="entry" type="text" id="studentID" name="studentID" value="<?php echo $studentID; ?>" required>

                <label for="name">Name</label>
                <input class="entry" type="text" id="name" name="name" value="<?php echo $name; ?>" required>

                <label for="email">Email</label>
                <input class="entry" type="email" id="email" name="email" value="<?php echo $email; ?>" required>

                <label for="contact">Contact</label>
                <input class="entry" type="text" id="contact" name="contact" value="<?php echo $contact; ?>" required>
            </div>
            <div class="buttons">
                <button type="submit" name="submit" class="btn btn-primary submit">Submit</button>
                <button type="submit" name="cancel" class="btn btn-secondary cancel">Cancel</button>
            </div>
        </form>
    </section>
</body>
</html>