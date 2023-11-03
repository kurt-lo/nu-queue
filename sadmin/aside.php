<?php
@include '../database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIDE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/users.css">
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/offices.css">
</head>

<body>
    <div class="col-3 blue-bg position-fixed p-0 container">
        <div class="d-flex align-items-center justify-content-center gap-3 m-3 px-5">
            <img src="../assets/NU_shield.svg" alt="Image" class="img-fluid" style="max-height: auto; max-width: 3.5rem;">
            <h4 class="fw-bold text-light text-center d-none d-lg-block">QUEUING SYSTEM</h4>
        </div>

        <!-- DASHBOARD -->
        <div class="fs-5 row g-0 dashboard-bg position-relative p-4 " style="width: 100%;">
            <div class="offset-md-2 d-none d-lg-block">
                <a href="dashboard.php" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-start"><i class="fa-lg bi bi-columns-gap text-light pe-2"></i>
                    <h4 class="fw-bold text-light text-center">DASHBOARD</h4>
                </a>
            </div>

            <div class="d-lg-none">
                <a href="dashboard.php" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-center"><i class="fa-lg bi bi-columns-gap text-light pe-2"></i>
                </a>
            </div>
        </div>

        <!-- USERS -->
        <div class="fs-5 row g-0 dashboard-bg position-relative p-4 " style="width: 100%;">
            <div class="col-md-2 offset-md-2 d-none d-lg-block">
                <a href="users.php" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-start"><i class="fa-lg bi bi-people-fill text-light pe-2"></i>
                    <h4 class="fw-bold text-light text-center">USERS</h4>
                </a>
            </div>

            <div class="d-lg-none">
                <a href="users.php" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-center"><i class="fa-lg bi bi-people-fill text-light pe-2"></i></a>
            </div>
        </div>

        <!-- OFFICES -->
        <div class="offices-container fs-5 row g-0  position-relative" style="width: 100%;">
            <div class="dropdown d-none d-lg-block dropdown-container">
                <button class="dropbtn text-decoration-none text-light fw-bold d-flex justify-content-start" onclick="toggleDropdown()">
                    <i class="fa-lg bi bi-buildings text-light pe-2"></i>
                    <h4 class="fw-bold text-light text-center">OFFICES</h4>
                </button>
                <ul class="dropdown-content offset-md-2" id="myDropdown">
                    <li class="pt-1"><a href="admission.php" id="admission-link" class="fw-bold text-light text-decoration-none">ADMISSION</a></li>
                    <li class="pt-1"><a href="registrar.php" id="registrar-link" class="fw-bold text-light text-decoration-none">REGISTRAR</a></li>
                    <li class="pt-1"><a href="accounting.php" id="accounting-link" class="fw-bold text-light text-decoration-none">ACCOUNTING</a></li>
                    <li class="pt-1"><a href="academics.php" id="academics-link" class="fw-bold text-light text-decoration-none">ACADEMICS</a></li>
                    <li class="pt-1"><a href="guidance.php" id="guidance-link" class="fw-bold text-light text-decoration-none">GUIDANCE</a></li>
                    <li class="pt-1"><a href="assets.php" id="assets-link" class="fw-bold text-light text-decoration-none">ASSETS</a></li>
                    <li class="pt-1"><a href="clinic.php" id="clinic-link" class="fw-bold text-light text-decoration-none">CLINIC</a></li>
                    <li class="pt-1"><a href="itso.php" id="itso-link" class="fw-bold text-light text-decoration-none">ITSO</a></li>
                </ul>
            </div>

            <div class="d-lg-none">
                <a href="#" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-center"><i class="fa-lg bi bi-buildings text-light pe-2"></i></a>
            </div>
        </div>

        <!-- REPORTS -->
        <div class="fs-5 row g-0 dashboard-bg position-relative p-4 " style="width: 100%;">
            <div class="col-md-2 offset-md-2 d-none d-lg-block">
                <a href="report.php" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-start"><i class="fa-lg bi bi-clipboard-data-fill text-light pe-2"></i>
                    <h4 class="fw-bold text-light text-center">REPORTS</h4>
                </a>
            </div>

            <div class="d-lg-none">
                <a href="report.php" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-center"><i class="fa-lg bi bi-clipboard-data-fill text-light pe-2"></i></a>
            </div>
        </div>

        <!-- LOGOUT -->
        <div class="fs-5 row g-0 dashboard-bg position-relative p-4 mt-auto" style="width: 100%;">
            <div class="col-md-2 offset-md-2 d-none d-lg-block">
                <a href="logout.php" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-start"><i class="fa-lg bi bi-box-arrow-in-right text-light pe-2"></i>
                    <h4 class="fw-bold text-light text-center">LOGOUT</h4>
                </a>
            </div>

            <div class="d-lg-none">
                <a href="logout.php" class="stretched-link text-decoration-none text-light fw-bold d-flex justify-content-center"><i class="fa-lg bi bi-box-arrow-in-right pe-2"></i></a>
            </div>
        </div>

    </div>

    <script>
        function toggleDropdown() {
            var officesDropdown = document.getElementById("myDropdown");
            if (officesDropdown.style.display === "block") {
                officesDropdown.style.display = "none";
            } else {
                officesDropdown.style.display = "block";
            }
        }
    </script>
</body>

</html>