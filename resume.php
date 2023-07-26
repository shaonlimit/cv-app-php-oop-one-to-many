<?php

use App\CV;

include './vendor/autoload.php';
session_start();
$user_id = $_SESSION['user_id'];


$user = new CV;
$user = $user->fetchData($user_id);

$educations = new CV;
$educations = $educations->fetchAllData($user_id, 'educations');

$skills = new CV;
$skills = $skills->fetchAllData($user_id, 'skills');





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Information</title>
    <!-- Link to Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Personal Information</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <strong>Name:</strong>
                <span id="display_name"><?= $user['name'] ?></span>
            </div>
            <div class="col-md-6">
                <strong>Father's Name:</strong>
                <span id="display_fathers_name"><?= $user['fathers_name'] ?></span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <strong>Mother's Name:</strong>
                <span id="display_mothers_name"><?= $user['mothers_name'] ?></span>
            </div>
            <div class="col-md-6">
                <strong>Email:</strong>
                <span id="display_email"><?= $user['email'] ?></span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <strong>Date of Birth:</strong>
                <span id="display_dob"><?= $user['dob'] ?></span>
            </div>
        </div>

        <h2 class="mt-5">Academic Information</h2>
        <hr>
        <div id="academic_table_div">
            <table class="table table-bordered table-striped mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Exam Name</th>
                        <th scope="col">Institute Name</th>
                        <th scope="col">Passing Year</th>
                        <th scope="col">Result</th>
                    </tr>
                </thead>
                <tbody id="academic_table_body">
                    <?php foreach ($educations as $education) : ?>
                        <tr>
                            <td scope="col"><?= $education['exam_name'] ?></td>
                            <td scope="col"><?= $education['institute_name'] ?></td>
                            <td scope="col"><?= $education['exam_year'] ?></td>
                            <td scope="col"><?= $education['result'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <h2 class="mt-5">Skills Information</h2>
        <hr>
        <div id="skills_table_div">
            <table class="table table-bordered table-striped mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Skill Name</th>
                        <th scope="col">Proficiency Level</th>
                    </tr>
                </thead>
                <tbody id="skills_table_body">
                    <?php foreach ($skills as $skill) : ?>
                        <tr>
                            <td scope="col"><?= $skill['skill_name'] ?></td>
                            <td scope="col"><?= $skill['pro_level'] ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Link to Bootstrap JavaScript via CDN (including Popper.js and jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>