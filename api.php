<?php
// Establish a database connection
$con = mysqli_connect("localhost", "root", "", "metropolitan");

if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Function to fetch titles from the database
function fetchTitles($con) {
    $query = "SELECT DISTINCT p_title FROM post";
    $result = mysqli_query($con, $query);
    $titles = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $titles[] = $row['p_title'];
    }

    return $titles;
}

if (isset($_GET['action']) && $_GET['action'] === 'fetchTitles') {
    $titles = fetchTitles($con);
    echo json_encode($titles);
}

// Close the database connection
mysqli_close($con);
?>



<?php
// Establish a database connection
$con = mysqli_connect("localhost", "root", "", "metropolitan");

if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Function to fetch subjects from the database
function fetchSubjects($con) {
    $query = "SELECT DISTINCT subject FROM post";
    $result = mysqli_query($con, $query);
    $subjects = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $subjects[] = $row['subject'];
    }

    return $subjects;
}

if (isset($_GET['action']) && $_GET['action'] === 'fetchSubjects') {
    $subjects = fetchSubjects($con);
    echo json_encode($subjects);
}

// Close the database connection
mysqli_close($con);
?>
