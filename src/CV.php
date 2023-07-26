<?php

namespace App;

use App\traits\All_Traits;
use PDO;

class CV
{
    use All_Traits;
    public function store($data)
    {
        $name = $data['name'];
        $fathers_name = $data['fathers_name'];
        $mothers_name = $data['mothers_name'];
        $email = $data['email'];
        $dob = $data['dob'];


        $sql = "insert into users (name,fathers_name,mothers_name,email,dob) values('$name','$fathers_name','$mothers_name','$email','$dob')";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();


        $sql = "select * from users order by id desc limit 1";
        $statement = $this->pdo->query($sql);
        $user =  $statement->fetch(PDO::FETCH_ASSOC);
        $user_id = $user['id'];


        $exam_names = $data['exam_name'];
        $institute_names = $data['institute_name'];
        $exam_years = $data['exam_year'];
        $results = $data['result'];

        if (is_array($exam_names)) {
            foreach ($exam_names as $key => $exam_name) {
                $sql = "insert into educations (user_id,exam_name,institute_name,exam_year,result) values('$user_id','$exam_name','$institute_names[$key]','$exam_years[$key]','$results[$key]')";
                $statement = $this->pdo->prepare($sql);
                $statement->execute();
            }
        }

        $skills = $data['skill_name'];
        $pro_levels = $data['pro_level'];

        if (is_array($skills)) {
            foreach ($skills as $key => $skill) {
                $sql = "insert into skills (user_id,skill_name,pro_level) values('$user_id','$skill','$pro_levels[$key]')";
                $statement = $this->pdo->prepare($sql);
                $statement->execute();
            }
        }

        session_start();
        $_SESSION['user_id'] = $user_id;
        header('location:resume.php');
    }

    public function fetchData($id)
    {
        $sql = "select * from users where id = $id";
        $statement = $this->pdo->query($sql);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function fetchAllData($id, $tableName)
    {
        $sql = "select * from $tableName where user_id = $id";
        $statement = $this->pdo->query($sql);
        $educations = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $educations;
    }
}
