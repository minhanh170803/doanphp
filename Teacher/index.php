<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (isset($_SESSION['teacher_id']) && isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Teacher') {
       include "../DB_connection.php";
       include "data/teacher.php";
       include "data/subject.php";
       include "data/grade.php";
       include "data/section.php";
       include "data/class.php";


       $teacher_id = $_SESSION['teacher_id'];
       $teacher = getTeacherById($teacher_id, $conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teacher - Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.card {
			border-radius: 15px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
		}
		.card-header {
			background-color: #0d6efd;
			color: white;
			padding: 20px;
			text-align: center;
			font-size: 1.5rem;
			border-top-left-radius: 15px;
			border-top-right-radius: 15px;
		}
		.card-body {
			padding: 25px;
		}
		.card img {
			border-radius: 50%;
			width: 150px;
			height: 150px;
			object-fit: cover;
		}
		.card h5 {
			font-size: 1.25rem;
			color: #333;
		}
		.card p {
			font-size: 1rem;
			color: #555;
		}
		.list-group-item {
			border: none;
			padding: 10px;
			font-size: 1rem;
			color: #555;
		}
		.list-group-item strong {
			color: #0d6efd;
		}
		.container {
			max-width: 900px;
			margin-top: 50px;
		}
		@media (max-width: 768px) {
			.container {
				max-width: 100%;
			}
		}
	</style>
</head>
<body>
    <?php 
        include "inc/navbar.php";

        if ($teacher != 0) {
     ?>
     <div class="container mt-5">
         <div class="card">
            <div class="card-header">
                <h2>Teacher Profile</h2>
            </div>
          <div class="card-body">
            <div class="row">
                <!-- Profile Image -->
                <div class="col-md-4 text-center">
                    <img src="../img/teacher-<?=$teacher['gender']?>.png" class="img-fluid rounded-circle" alt="Teacher Image">
                </div>
                <!-- Profile Information -->
                <div class="col-md-8">
                    <h5 class="text-center">@<?=$teacher['username']?></h5>
                    <p><strong>Full Name:</strong> <?=$teacher['fname']?> <?=$teacher['lname']?></p>
                    <p><strong>Username:</strong> <?=$teacher['username']?></p>
                    <p><strong>Employee Number:</strong> <?=$teacher['employee_number']?></p>
                    <p><strong>Address:</strong> <?=$teacher['address']?></p>
                    <p><strong>Date of Birth:</strong> <?=$teacher['date_of_birth']?></p>
                    <p><strong>Phone Number:</strong> <?=$teacher['phone_number']?></p>
                    <p><strong>Qualification:</strong> <?=$teacher['qualification']?></p>
                    <p><strong>Email:</strong> <?=$teacher['email_address']?></p>
                    <p><strong>Gender:</strong> <?=$teacher['gender']?></p>
                    <p><strong>Date of Joined:</strong> <?=$teacher['date_of_joined']?></p>
                    
                    <!-- Subjects -->
                    <p><strong>Subjects:</strong> 
                        <?php 
                           $s = '';
                           $subjects = str_split(trim($teacher['subjects']));
                           foreach ($subjects as $subject) {
                              $s_temp = getSubjectById($subject, $conn);
                              if ($s_temp != 0) 
                                $s .=$s_temp['subject_code'].', ';
                           }
                           echo rtrim($s, ', ');
                        ?>
                    </p>

                    <!-- Classes -->
                    <p><strong>Classes:</strong> 
                        <?php 
                           $c = '';
                           $classes = str_split(trim($teacher['class']));

                           foreach ($classes as $class_id) {
                               $class = getClassById($class_id, $conn);

                              $c_temp = getGradeById($class['grade'], $conn);
                              $section = getSectioById($class['section'], $conn);
                              if ($c_temp != 0) 
                                $c .=$c_temp['grade_code'].'-'.
                                     $c_temp['grade'].$section['section'].', ';
                           }
                           echo rtrim($c, ', ');
                        ?>
                    </p>
                </div>
            </div>
          </div>
        </div>
     </div>
     <?php 
        } else {
          header("Location: logout.php?error=An error occurred");
          exit;
        }
     ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
   <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(1) a").addClass('active');
        });
    </script>
</body>
</html>
<?php 

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
	header("Location: ../login.php");
	exit;
} 
?>
