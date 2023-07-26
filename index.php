<?php

use App\CV;

include './vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = new CV;
    $user->store($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Blank Template</title>
    <!-- Link to Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Your content goes here -->
    <div class="container">
        <h2 class="mb-4">Personal Information</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="fathers_name">Father's Name</label>
                <input class="form-control" type="text" name="fathers_name" id="fathers_name" placeholder="Enter father's name">
            </div>

            <div class="form-group">
                <label for="mothers_name">Mother's Name</label>
                <input class="form-control" type="text" name="mothers_name" id="mothers_name" placeholder="Enter mother's name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input class="form-control" type="date" name="dob" id="dob">
            </div>

            <div class=" mt-5">

                <h2>Academic Information</h2>
                <a id="academic_add_btn" class='btn btn-primary btn-sm mb-3'>Add more</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Exam Name</th>
                            <th scope="col">Institute Name</th>
                            <th scope="col">Passing Year</th>
                            <th scope="col">Result</th>
                        </tr>
                    </thead>
                    <tbody id='academic_tbody'>
                        <tr>
                            <td><input name="exam_name[]" type="text" class="form-control" placeholder="Exam name"></td>
                            <td><input name="institute_name[]" type="text" class="form-control" placeholder="Institute name">
                            </td>
                            <td><input name="exam_year[]" type="text" class="form-control" placeholder="Exam year"></td>
                            <td><input name="result[]" type="number" min="0" max="100" step="any" class="form-control" placeholder="Result"></td>
                            <td> <button class='btn btn-danger btn-sm'>Delete</button> </td>
                        </tr>

                        <!-- Add more rows for additional academic information -->
                    </tbody>
                </table>

                <h2>Skills Information</h2>
                <a id="skill_add_btn" class='btn btn-primary btn-sm mb-3'>Add more</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Skill Name</th>
                            <th scope="col">Proficiency Level</th>
                        </tr>
                    </thead>
                    <tbody id='skill_tbody'>
                        <tr>
                            <td><input name="skill_name[]" type="text" class="form-control" placeholder="Skills name">
                            </td>
                            <td><input name="pro_level[]" type="text" class="form-control" placeholder="Proficiency Level"></td>
                            <td> <button class='btn btn-danger btn-sm'>Delete</button> </td>
                        </tr>

                        <!-- Add more rows for additional skills information -->
                    </tbody>
                </table>
            </div>

            <button type="submit" id="submit_btn" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src='script.js'></script>
    <!-- Link to Bootstrap JavaScript via CDN (including Popper.js and jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>