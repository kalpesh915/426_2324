<?php
require_once("classes/Student.class.php");

if (isset($_POST["addnew"])) {
    $fname = $student->filterData($_POST["fname"]);
    $lname = $student->filterData($_POST["lname"]);
    $city = $student->filterData($_POST["city"]);
    $email = $student->filterData($_POST["email"]);
    $phone = $student->filterData($_POST["phone"]);
    $gender = $student->filterData($_POST["gender"]);

    if (
        $fname == "" || $lname == "" || $city == "" || $email == "" ||
        $phone == "" || $gender == ""
    ) {
        $response = [
            "code" => 204,
            "message" => "all fileds are required"
        ];
    } else {
        if ($student->addNewStudent($fname, $lname, $city, $email, $phone, $gender)) {
            $response = [
                "code" => 200,
                "message" => "new student created"
            ];
        } else {
            $response = [
                "code" => 204,
                "message" => "error while create new student"
            ];
        }
    }

    echo json_encode($response);
}

// code for delete data

if (isset($_POST["delete"])) {
    $id = $student->filterData($_POST["id"]);

    if ($student->deleteStudent($id)) {
        $response = [
            "code" => 200,
            "message" => "Data Deleted with ID $id"
        ];
    } else {
        $response = [
            "code" => 500,
            "message" => "Error while Deleting with ID $id"
        ];
    }

    echo json_encode($response);
}

if (isset($_POST["viewstudent"])) {
    $id = $student->filterData($_POST["id"]);
    $result = $student->getStudentById($id);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $response = [
            "code" => 200,
            "message" => "Data Found",
            "student" => $row
        ];
    }else{
        $response = [
            "code" => 500,
            "message" => "No Data Found",
        ];
    }

    echo json_encode($response);
}

// update student
if(isset($_POST["updatestudent"])){
    $id = $student->filterData($_POST["id"]);
    $fname = $student->filterData($_POST["fname"]);
    $lname = $student->filterData($_POST["lname"]);
    $city = $student->filterData($_POST["city"]);
    $email = $student->filterData($_POST["email"]);
    $phone = $student->filterData($_POST["phone"]);
    $gender = $student->filterData($_POST["gender"]);

    if ($id == "" || $fname == "" || $lname == "" || $city == "" || $email == "" || $phone == "" || $gender == "") {
        $response = [
            "code" => 204,
            "message" => "all fileds are required"
        ];
    } else {
        if ($student->updateStudent($id, $fname, $lname, $city, $email, $phone, $gender)) {
            $response = [
                "code" => 200,
                "message" => "Student Updated"
            ];
        } else {
            $response = [
                "code" => 500,
                "message" => "Nothing to Update"
            ];
        }
    }

    echo json_encode($response);
}
