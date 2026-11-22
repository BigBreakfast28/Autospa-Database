<?php 

$to = "deancameron99@gmail.com";
$from = "Zakawn's Auto Span";
$subject = "Detailing Inquiry";

$name = $email = $phone = $comments = '';
$nameErr = $emailErr = $phoneErr = $comments = '';
$valid = TRUE;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "This is a required field!";
    } else {
        $name = form_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-]*$/",$name)) {
            $nameErr = "Only letters and white space is allowed";
            $valid = FALSE;
        }
    }
    
    if (empty($_POST['email'])) {
        $emailErr = "This is a required field!";
    } else {
        $email = form_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address!";
            $valid = FALSE;
        }
    }

    if (empty($_POST['phone'])) {
        $phoneErr = "This is a required field!";
    } else {
        $phone = form_input($_POST['phone']);
        if (!preg_match('/^[0-9]{10}+$/',$phone)) {
            $phoneErr = "Please enter a valid phone number!";
            $valid = FALSE;
        }
    }

    if (empty($_POST['comments'])) {
        $comments = '';
    } else {
        $comments = form_input($_POST['comments']);
    }

    if ($valid) {
        $message = "Name: " . $name . "\n" . "Phone: " . $phone . "\n" . "Email: " . $email . "\n" . "Comments: " . $comments;

        mail($to, $subject, $message);
        
        /*echo "<script>alert('$text');</script>"*/;
    }

    function form_input($data) {
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        $data = trim($data);
        return $data;
}
}
?>

<!doctype html>
<html lang="en">
        <title>AutoSpa</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
        <link rel="StyleSheet" href="./styles.css">
    </head>

    <body class="">
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                    <img src="./images/autospa-logo.JPG" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="">
            <div class="container my-3">
                <ul class="nav justify-content-center">
                    <h1 class="headliner display-1 anton-sc-regular">Zakwans Auto Spa Contact</h1>
                </ul>
                <ul class="nav justify-content-center">
                    <h3 class="anton-sc-regular">Revitilize Your Ride</h3>
                </ul>
            </div>

            <div class="container-fluid">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./images/cleaninteior.jpg" class="d-block w-100" alt="Zakwan detailing car">
                    </div>
                    <div class="carousel-item">
                    <img src="./images/carwash.jpg" class="d-block w-100" alt="Zakwan detailing car">
                    </div>
                    <div class="carousel-item">
                    <img src="images/mercedez.jpg" class="d-block w-100" alt="Zakwan detailing car">
                    </div>
                    <div class="carousel-item">
                    <img src="images/handwash.jpg" class="d-block w-100" alt="Zakwan detailing car">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

            <div class="container mt-5">
                <p class="display-6">
                    Transform your vechicle into a showroom stunner with Zakwan's Auto Spa.
                    Our expert team provides top-notch detailing services that will make your car shine like new. 
                    From inteior deep cleaning to exteior polishing, we cater to all your car needs.
                </p>
            </div>

            <div class="container my-3">
                <ul class="nav justify-content-center">
                    <h1 class="display-1 anton-sc-regular my-3">Why Choose Us?</h1>
                </ul>
                <div class="row">
                    <div class="col-sm--2">
                        <h1 class="p-5 best-spa">Best Auto Spa In Town</h1>
                    </div>
                    <div class="col-sm-8">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">Experienced Professionals</li>
                        <li class="list-group-item">Premium Quality Products</li>
                        <li class="list-group-item">Attention to Detail</li>
                        <li class="list-group-item">Convenient Scheduling</li>
                        <li class="list-group-item">Competitive Pricing</li>
                    </ol>
                    </div>
                    <div class="col-sm-2">
                        <!-- Google Calendar Appointment Scheduling begin -->
                        <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                        <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                        <script>
                        (function() {
                        var target = document.currentScript;
                        window.addEventListener('load', function() {
                            calendar.schedulingButton.load({
                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ243Ay_0R2p8bO64o9eOCBMS7ah4Sm5i5Z4kMWrQ8ifTD72OjGoRU4cdujziqUpKLGFHe8J44_7?gv=true',
                            color: '#039BE5',
                            label: 'Book an appointment',
                            target,
                            });
                        });
                        })();
                        </script>
                        <!-- end Google Calendar Appointment Scheduling -->
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <ul class="nav justify-content-center">
                    <h1 class="anton-sc-regular display-3">Services</h1>
                </ul>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body p-5 bg-standard">
                                <h4 class="card-title">Standard Detail</h4>
                                <p class="card-text">Includes inteior and exteior.</p>
                                <a href="./services.php" class="card-link">See details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="card">
                            <div class="card-body p-5 bg-full">
                                <h4 class="card-title">Full Detail</h4>
                                <p class="card-text">Upgrade from standard package.</p>
                                <a href="./services.php" class="card-link">See details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="card">
                            <div class="card-body p-5 bg-platinum">
                                <h4 class="card-title">Platinum Detail</h4>
                                <p class="card-text">Highest tier avaliable, detailed to perfection.</p>
                                <a href="./services.php" class="card-link">See details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end" id="demo">
                <div class="offcanvas-header">
                    <h1 class="offcanvas-title anton-sc-regular text-danger">AutoSpa Standards</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ol>
                        <li class="list-item anton-sc-regular">Exteior Wash & Wax</li>
                        <li class="list-item anton-sc-regular">Interior Vacuum & Shampoo</li>
                        <li class="list-item anton-sc-regular">Leather Conditioning</li>
                        <li class="list-item anton-sc-regular">Wheel & Tire Cleaning</li>
                        <li class="list-item anton-sc-regular">Paint Correction & Ceramic Coating</li>
                    </ol>
                    <button class="btn btn-primary" type="button"><a href="services.php" class="text-white">All Services</a></button>
                </div>
                </div>

                <ul class="nav justify-content-center mt-3">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                        General Description
                    </button>
                </ul>
            </div>

            <div class="container-fluid contact-me mt-3">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-primary p-3  "  data-bs-toggle="modal" data-bs-target="#myModal">
                        Contact Us
                    </button>
                </div>
            </div>

                    <!-- The Modal -->
                <div class="modal container-fluid" id="myModal">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h4 class="modal-title anton-sc-regular">Zakwan's Auto Spa</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                        <div class="container-fluid">
                                <div class="">
                                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="was-validated p-5">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"  value="<?php echo $name; ?>" required>
                                                <label for="name">Name:</label>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field. <?php echo $nameErr ?></div>
                                            </div>

                                            <div class="form-floating mb-3 mt-3">
                                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email;?>" required>
                                                <label for="email">Email:</label>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field. <?php echo $emailErr ?></div>
                                            </div>

                                            <div class="form-floating mb-3 mt-3">
                                                <input type="tel" class="form-control" id="phone" placeholder="000-000-0000" name="phone" value="<?php echo $phone;?>" required>
                                                <label for="phone">Phone:</label>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Please fill out this field. <?php echo $phoneErr ?></div>
                                            </div>

                                            <div class="form-floating mb-3 mt-3">
                                                <textarea class="form-control" placeholder="Enter comments and questions here." col="3" row="6" name="comments"></textarea>
                                                <label for="comments">Comments:</label>
                                                
                                            </div>
                                            <input type="submit" class="btn btn-primary p-2" id="toastbtn">
                                        </form>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container-fluid mb-2">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="index.php"><img src="./images/autospa-logo.JPG" alt="autospa logo" width="200px" height="200px"></a>
                    </div>
                    <div class="col-sm-5 p-4">
                        <h1 class="anton-sc-regular">Location</h1>
                        <p>University Park, IL 60466</p>
                    </div>
                    <div class="col-sm-5 p-4">
                        <h1 class="anton-sc-regular">Contact</h1>
                        <p>Phone: 773-514-0748</p>
                        <p><a href="https:Zakwanautospa708@gmail.com">Zakwanautospa708@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
