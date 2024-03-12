<?php  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "reminders";
    $conn = mysqli_connect($servername, $username, $password, $database); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>SEP</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bxl-tailwind-css'></i>
            <div class="logo-name"><span>MP</span>MS</div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="#"><i class='bx bxs-bullseye' ></i>Analytics</a></li>
            <li><a href="#"><i class='bx bxs-dashboard'></i>Projects</a></li>
            <li><a href="#"><i class='bx bxl-github' ></i>Employees</a></li>
            <li><a href="#"><i class='bx bxl-slack'></i>About Us</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="admin_login.html" class="logout">
                    <i class='bx bx-power-off' ></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <p>Manpower Management Software</p>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="profile">
                <img src="images/logo.png">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">                       
                        <li><a href="#" class="active">Glance</a></li>
                    </ul>
                </div>
                <a href="#" class="report">
                    <i class='bx bx-cloud-download'></i>
                    <span>Download Database</span>
                </a>
            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                    <i class='bx bx-calendar-check'></i>
                    <span class="info">
                        <h3>
                            3
                        </h3>
                        <p>Projects Completed</p>
                    </span>
                </li>
                <li><i class='bx bx-calendar-exclamation' ></i>
                    <span class="info">
                        <h3>
                            5
                        </h3>
                        <p>Projects Pending</p>
                    </span>
                </li>
                <li><i class='bx bxs-group'></i>
                    <span class="info">
                        <h3>
                            100
                        </h3>
                        <p>Working Employees</p>
                    </span>
                </li>
                <li><i class='bx bxs-group'></i>
                    <span class="info">
                        <h3>
                            300
                        </h3>
                        <p>Bench Strength</p>
                    </span>
                </li>
            </ul>
            <!-- End of Insights -->

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Project Progress</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bxs-report' ></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>Estimated Duration</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="images/logo.png">
                                    <p>Employee</p>
                                </td>
                                <td>11-03-2024</td>
                                <td>40 Days</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/logo.png">
                                    <p>Employee</p>
                                </td>
                                <td>11-03-2024</td>
                                <td>40 Days</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/logo.png">
                                    <p>Employee</p>
                                </td>
                                <td>11-03-2024</td>
                                <td>40 Days</td>
                                <td><span class="status process">Ongoing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <a style="text-decoration: none; color: black;" href="Reminders.php">                     
                        <i class='bx bx-note'></i></a>
                        <h3>Reminders</h3>
                        <a style="text-decoration: none; color: black;" href="Reminders.php">
                        <i class='bx bx-filter'></i></a>
                        <a style="text-decoration: none; color: black;" href="Reminders.php">                       
                        <i class='bx bxs-report' ></i></a>                  
                    </div>
                    
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">                                
                                <?php 
                                    $sql = "SELECT * FROM `reminders`";
                                    $result = mysqli_query($conn, $sql);
                                    $sno = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                    $sno = $sno + 1;
                                    echo "<tr>
                                    <th scope='row'>"."</th>
                                    <td>". $row['title'] . "</td>
                                    </tr>";
                                    echo "<br>";
                                } 
                                ?>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>                      
                    </ul>
                </div>

                <!-- End of Reminders-->

            </div>

        </main>

    </div>
    <script>
    const toggler = document.getElementById('theme-toggle');

        toggler.addEventListener('change', function () {
            if (this.checked) {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        });
        </script>
    <script src="index.js"></script>
</body>

</html>
