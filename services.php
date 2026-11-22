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
    <head>
        <title>AutoSpa Services</title>
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

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>

    <body>
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
        <main>
            <div class="container-fluid service-heading">
                <ul class="nav justify-content-center">
                    <h1 class="anton-sc-regular display-1 text-danger">Services</h1>
                </ul>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col my-5">
                    <div class="card bg-standard" id="standardDetail">
                        <div class="card-body">
                            <h5 class="card-title anton-sc-regular display-1">Standard Detail</h5>
                            <p class="card-text display-6">Cars: $75</p>
                            <p class="card-text display-6">Trucks: $100</p>
                            <div class="row">
                                <div class="col">
                                    <h3>Inteior Service - Wipe Down Only</h3>
                                        <ul>
                                            <li>All plastic/vinyl surfaces.</li>
                                            <li>Cupholders & door pockets.</li>
                                            <li>Vents & Empty Compartments.</li>
                                            <li>Interior Windows.</li>
                                        </ul>
                                </div>

                                <div class="col">
                                    <h3>Exterior Service</h3>
                                    <ul>
                                        <li>Remove bugs from entire front of car</li>
                                        <li>Degrease and clean tires, wheels, and rims.</li>
                                        <li>Remove moderate tar & paint from vehicle skirts.</li>
                                        <li>Wet, degrease, and agitate all dooors & trunk jams.</li>
                                        <li>Pre-rinse vehicle followed by foam cannon.</li>
                                        <li>Two bucket wash with clay mitt, top to bottom.</li>
                                        <li>Rinse vehicle, apply slow dry while wet.</li>
                                        <li>Dry with pluffle absorption towels.</li>
                                        <li>Apply spray wax.</li>
                                        <li>Apply tire shine.</li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav justify-content-center">
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
                                label: 'Book appointment',
                                target,
                                });
                            });
                            })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="col my-5">
                    <div class="card bg-full" id="standardDetail">
                        <div class="card-body">
                            <h5 class="card-title anton-sc-regular display-2">Full Detail</h5>
                            <p class="card-text display-6">Cars: $150</p>
                            <p class="card-text display-6">Trucks: $250</p>
                            <div class="row">
                                <div class="col">
                                    <h3>Inteior Service</h3>
                                        <ul>
                                            <li>Drill brush upholstery, carpet, floor mats.</li>
                                            <li>First vacuum pass.</li>
                                            <li>Clean door pockets, vents, & empty surfaces.</li>
                                            <li>Shampoo carpets & upholstery.</li>
                                            <li>Horsehair bursh & shampoo leather seats.</li>
                                            <li>Clean surface deep headliner stains.</li>
                                            <li>Final vacuum pass.</li>
                                            <li>All windows & edges/tips cleaned.</li>
                                        </ul>

                                        <p class="display-6">No windex!</p>
                                </div>

                                <div class="col">
                                    <h3>Exterior Service</h3>
                                    <ul>
                                        <li>Degrease rims & wheel wells.</li>
                                        <li>Pro-blend, hi-gloss, and wax soap.</li>
                                        <li>Rinse & wipe dry exterior.</li>
                                        <li>Apply wax infused with sealant.</li>
                                        <li>Tire shine for wheels.</li>
                                        <li>Completely remove wax.</li>
                                        <li>Spray wax touch-up (if needed).</li>
                                        <li>Inspect entire vehicle for quality assurance.</li>
                                        <li>Clean windows.</li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav justify-content-center">
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
                                label: 'Book appointment',
                                target,
                                });
                            });
                            })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="col my-5">
                    <div class="card bg-platinum" id="standardDetail">
                        <div class="card-body">
                            <h5 class="card-title anton-sc-regular display-1">Standard Detail</h5>
                            <p class="card-text display-6">Cars: $225</p>
                            <p class="card-text display-6">Trucks: $350</p>
                            <div class="row">
                                <div class="col">
                                    <h3>Inteior Service - Complete Detail Service Included</h3>
                                        <ul>
                                            <li>Single pass deep gloss polish removes:
                                                <ul>
                                                    <li>Paint defects caused by local car wash.</li>
                                                    <li>Light & medium scratches.</li>
                                                    <li>Moderate swirl & hologram.</li>
                                                    <li>Water spots.</li>
                                                </ul>
                                            </li>
                                            <li>Apply ceramic spray sealant (reload).</li>
                                            <li>Apply solution finish to restore faded trim.</li>
                                            <li>Polish all viable chrome.</li>
                                            <li>Apply ragtop/convertible protectant.</li>
                                            <li>Touch up and/or restore headlights.</li>
                                        </ul>
                                </div>

                                <div class="col">
                                    <h3>Exterior Service</h3>
                                    <ul>
                                        <li>Remove bugs from entire front of car</li>
                                        <li>Degrease and clean tires, wheels, and rims.</li>
                                        <li>Remove moderate tar & paint from vehicle skirts.</li>
                                        <li>Wet, degrease, and agitate all dooors & trunk jams.</li>
                                        <li>Pre-rinse vehicle followed by foam cannon.</li>
                                        <li>Two bucket wash with clay mitt, top to bottom.</li>
                                        <li>Rinse vehicle, apply slow dry while wet.</li>
                                        <li>Dry with pluffle absorption towels.</li>
                                        <li>Apply spray wax.</li>
                                        <li>Apply tire shine.</li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav justify-content-center">
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
                                label: 'Book appointment',
                                target,
                                });
                            });
                            })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 container">
                <h1 class="open-sans-uniquifier display-6">If you recommend someone to get a detail I will give you a free standard detail.</h1>
                <p class="display-5 open-sans-uniquifier">10 recommendations equals 1 FREE Platinum detail!</p>
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
