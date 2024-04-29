<?php
include '../server.php';
// Assuming you have already established a database connection

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $work = $_POST['work'];
    $description = $_POST['description'];

    
    // Sanitize data to prevent SQL injection
    $id = mysqli_real_escape_string($connect, $id);
    $work = mysqli_real_escape_string($connect, $work);
    $description = mysqli_real_escape_string($connect, $description);

    // Prepare update query
    $update_query = "UPDATE basicinfo SET id='$id', birth='$work', phone='$description'";
    
    // Execute update query
    if (mysqli_query($connect, $update_query)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
    
    // Close database connection
    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CMS Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Ervii's CMS</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1>About</h1>

        <div class="form-container">
            <label for="myWorksTitle" class="form-label">About me</label>
            <form>
                <input type="text" id="myWorksTitle" class="form-control" placeholder="Enter form title">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="form-container">
            <label for="uploadWorksTitle" class="form-label">Profession</label>
            <form>
                <input type="text" id="uploadWorksTitle" class="form-control" placeholder="Enter form title">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="form-container">
            <label for="uploadWorksTitle" class="form-label">Profession Description</label>
            <form>
                <input type="text" id="uploadWorksTitle" class="form-control" placeholder="Enter form title">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="form-container">
    <form method="post" action=""> <!-- Specify the PHP script to handle form submission -->
        <div class="form-group">
            <label for="age" class="form-label">ID</label>
            <input type="text" id="age" name="age" class="form-control" placeholder="Enter age">
        </div>
        <div class="form-group">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="text" id="birthday" name="birth" class="form-control" placeholder="Enter birthday">
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone number">
        </div>
        <div class="form-group">
            <label for="school" class="form-label">School</label>
            <input type="text" id="school" name="school" class="form-control" placeholder="Enter school">
        </div>
        <div class="form-group">
            <label for="degree" class="form-label">Degree</label>
            <input type="text" id="degree" name="degree" class="form-control" placeholder="Enter degree">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" id="address" name="address" class="form-control" placeholder="Enter address">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>

<div class="form-container">
    <label for="skillsTitle" class="form-label">Skills</label>
    <div>
        <form>
            <input type="text" id="myWorksTitle" class="form-control" placeholder="Enter form title">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div>
        <form>
            <input type="text" id="uploadWorksTitle" class="form-control" placeholder="Enter form title">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div>
        <form>
            <input type="text" id="uploadWorksTitle" class="form-control" placeholder="Enter form title">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>



    <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Home
                            </a>
                
                            <a class="nav-link" href="About.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                About
                            </a>

                            <a class="nav-link" href="portfolio.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Portfolio
                            </a>


                            <a class="nav-link" href="Contact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Contact
                            </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
