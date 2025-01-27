<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id =$_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$studentID = $resultData['studentID'];
$name = $resultData['name'];
$email = $resultData['email'];
$contact = $resultData['contact'];

?>
<html>
<head>
<title>Edit Data</title>
<link rel="stylesheet" href="input.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<section class="container">
    <header>Edit Data</header>
    <form action="#" class="form">
        <div class="input-box">
            <label>Student ID</label>
            <input  class="entry" type="text" name="studentID" value="<?php echo $studentID; ?>">
            <label>Email</label>
            <input  class="entry" type="text" name="name" value="<?php echo $name; ?>">
            <label>Contact</label>
            <input  class="entry" type="text" name="email" value="<?php echo $email; ?>">
            label>Contact</label>
            <input  class="entry" type="text" name="Contact" value="<?php echo $contact; ?>">
        </div>
        <div class="buttons">
            <button class="submit">Submit</button>
            <button class="cancel">Cancel</button>
        </div>   
    </form>
</section>
</body>
</html>