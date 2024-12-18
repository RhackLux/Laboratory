<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Member Login</title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/styles.css">

	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="../assets/toastr/css/toastr.css">

	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="../assets/mycustom/css/styles.css">

	
    
</head>
<body class="index-body login">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div style="background-color:#f57200;"lass="container-fluid">
			<div style = "background-color:#f57200;"class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					
				</button>
				<a class="navbar-brand" href="#"><img src="../bg-images/sg.png" alt="Logo" style="width: 30px; height: 30px; vertical-align: middle; margin-right: 8px;">FLVCI EQUIPMENT INVENTORY MANAGEMENT SYSTEM</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>	 <br>

<!-- Updated Login Form UI -->
<div class="container vh-100 d-flex justify-content-end align-items-center" style="background-image: url('../bg-images/member.jpg'); background-size: cover; background-position: center;">
    <div class="col-md-4">
        <!-- Login Form Section -->
        <div class="login-panel panel shadow-sm rounded" style="margin-top: 30px;">

            <div class="panel-heading text-center py-3" style="background-color: #028d36; color: white; font-weight: bold; border-radius: 5px 5px 0 0;">
                <img src="../bg-images/sg.png" alt="Logo" style="width: 30px; height: 30px; vertical-align: middle; margin-right: 8px;">
                Borrower Login
            </div>
            <div class="panel-body p-4" style="background-color: white; border-radius: 0 0 5px 5px;">
                <form class="frm_memberlogin">
				<span>
                        <i class="fas fa-exclamation-triangle" style="color: red; margin-right: 5px;"></i>
                        <i> Borrowers Access only</i>
                    </span> <br><br> 

					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                    <fieldset>
                        <div class="form-group mb-3">
                            <input placeholder="00000" type="number" name="id_number" class="form-control" autofocus="on">
                        </div>

                        <div class="form-group mb-4 position-relative"></div>

                        <style>
                            .form-group {
                                position: relative; /* Ensures the icon is positioned relative to this container */
                            }
                        </style>

                        <button class="btn btn-primary btn-block" style="background-color: #028d36; border: none; padding: 12px; font-weight: bold; border-radius: 4px;">Log in</button>
                        <br>
                        <div class="text-center mt-3">
                            <a href="../" style="color: #007bff;">Go to Admin Panel</a>
                        </div>
                        <!-- Timezone Display -->
						<div class="text-center mt-2" style="font-size: 14px; color: #555;">
                            Current Timezone: <span id="timezone"></span> <br>
                            Current Time: <span id="current-time"></span>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.container -->

<!-- Additional Styling -->
<style>
    .container {
        /* height: 100vh; */
        display: flex;
        align-items: center;
        justify-content: flex-end; /* This aligns the login form to the right */
    }

    .panel {
        background-color: rgba(255, 255, 255, 0.9);
    }

    .form-control:focus {
        border-color: #028d36;
        box-shadow: 0 0 5px rgba(245, 114, 0, 0.5);
    }

    .btn-primary:hover {
        background-color: #028d36;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<!-- Script to Display Timezone -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get the user's timezone and display it
        const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        document.getElementById('timezone').textContent = timezone;

        // Function to update the current time
        function updateTime() {
            const now = new Date();
            const options = { 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit', 
                hour12: true, // Set to true for 12-hour format
                timeZone: timezone // Use the user's timezone
            };
            const timeString = now.toLocaleTimeString([], options);
            document.getElementById('current-time').textContent = timeString;
        }

        // Update time initially and every second
        updateTime();
        setInterval(updateTime, 1000);
    });
</script>


	<!-- javascript -->
	<script type="text/javascript" src="../assets/custom/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../assets/custom/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/toastr/js/toastr.min.js"></script>

	<?php include 'footer.php'; ?>
</body>
</html>