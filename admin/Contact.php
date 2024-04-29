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

    <h2>Contact Table</h2>

    <table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Mobile Number</th>
        <th>Email Address</th>
        <th>Email Subject</th>
        <th>Message</th>
    </tr>
    <?php
    // Database connection
    include '../server.php';

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // SQL query to fetch data
    $sql = "SELECT * FROM contact";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["fullName"] . "</td>";
            echo "<td>" . $row["mobileNo"] . "</td>";
            echo "<td>" . $row["emailAdd"] . "</td>";
            echo "<td>" . $row["emailSubj"] . "</td>";
            echo "<td>" . $row["messages"] . "</td>";
            echo "</tr>";
        }
    } else {
        // If no data found, display a single row with a message
        echo "<tr><td colspan='6'>No data found</td></tr>";
    }

    // Close connection
    $connect->close();
    ?>
</table>

    <div class="container">
        <h1>Contact</h1>

        <div class="form-container">
            <label for="myWorksTitle" class="form-label">Contact Description</label>
            <form>
                <input type="text" id="myWorksTitle" class="form-control" placeholder="Enter form title">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="form-container">
            <label for="uploadWorksTitle" class="form-label">Location</label>
            <form>
                <input type="text" id="uploadWorksTitle" class="form-control" placeholder="Enter form title">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="form-container">
            <label for="uploadWorksTitle" class="form-label">Email</label>
            <form>
                <input type="text" id="uploadWorksTitle" class="form-control" placeholder="Enter form title">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="form-container">
            <label for="uploadWorksTitle" class="form-label">Phone</label>
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
