<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php require_once("cdn.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-white p-4 text-center d-flex justify-content-between">
            API + AJAX + OOP + PHP + MySql
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add New</button>
        </h1>

        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-striped" id="tableData">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("classes/Student.class.php");
                    $result = $student->getAllStudents();

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>$row[id]</td>
                                <td>$row[fname]</td>
                                <td>$row[lname]</td>
                                <td>$row[city]</td>
                                <td>$row[email]</td>
                                <td>$row[phone]</td>
                                <td>$row[gender]</td>
                                <td>$row[created_at]</td>
                                <td>
                                    <button type='button' class='btn btn-primary btnview' value='$row[id]'>
                                        <i class='fa fa-eye'></i>
                                    </button>
                                    <button type='button' class='btn btn-dark btnedit' value='$row[id]'>
                                        <i class='fa fa-pen'></i>
                                    </button>
                                    <button type='button' class='btn btn-danger btndelete' value='$row[id]'>
                                        <i class='fa fa-trash'></i>
                                    </button>
                                </td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add new Student Model -->
    <div class="modal" id="addStudentModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" id="addnewForm">
                        <div class="my-3">
                            <div id="messages" class=""></div>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name" autofocus>
                            <label class="form-label" for="fname">Enetr First Name</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name">
                            <label class="form-label" for="lname">Enetr Last Name</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="city" id="city" required class="form-control" placeholder="Enter City Name">
                            <label class="form-label" for="city">Enetr City Name</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address">
                            <label class="form-label" for="email">Enetr Email Address</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number" pattern="[0-9]{10,13}">
                            <label class="form-label" for="phone">Enetr Phone Number</label>
                        </div>
                        <div class="my-3 form-floating">
                            <select type="text" name="gender" id="gender" required class="form-control" placeholder="Select Gender">
                                <option></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label class="form-label" for="gender">Select Gender</label>
                        </div>
                        <div class="my-3">
                            <input type="submit" value="Add New Student" class="btn btn-primary" name="addProcess">
                            <input type="reset" value="Reset" class="btn btn-danger">
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Add New Student Model Complete -->

    <!-- View Student Model -->
    <div class="modal" id="viewStudentModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">view Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="my-3 form-floating">
                        <input type="text" id="view_fname" required class="form-control" placeholder="Enter First Name" readonly>
                        <label class="form-label" for="fname">Enetr First Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" id="view_lname" required class="form-control" placeholder="Enter Last Name" readonly>
                        <label class="form-label" for="lname">Enetr Last Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" id="view_city" required class="form-control" placeholder="Enter City Name" readonly>
                        <label class="form-label" for="city">Enetr City Name</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="email" id="view_email" required class="form-control" placeholder="Enter Email Address" readonly>
                        <label class="form-label" for="email">Enetr Email Address</label>
                    </div>
                    <div class="my-3 form-floating">
                        <input type="text" id="view_phone" required class="form-control" placeholder="Enter Phone Number" pattern="[0-9]{10,13}" readonly>
                        <label class="form-label" for="phone">Enetr Phone Number</label>
                    </div>
                    <div class="my-3 form-floating">
                        <select type="text" id="view_gender" required class="form-control" placeholder="Select Gender" disabled>
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label class="form-label" for="gender">Select Gender</label>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View Student Model Complete -->

      <!-- Edit Student Model -->
    <div class="modal" id="editStudentModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" id="editForm">
                        <div class="my-3">
                            <div id="messages" class=""></div>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="id" id="edit_id" required class="form-control" placeholder="Enter Student ID" readonly>
                            <label class="form-label" for="id">Enetr Student ID</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="fname" id="edit_fname" required class="form-control" placeholder="Enter First Name" autofocus>
                            <label class="form-label" for="fname">Enetr First Name</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="lname" id="edit_lname" required class="form-control" placeholder="Enter Last Name">
                            <label class="form-label" for="lname">Enetr Last Name</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="city" id="edit_city" required class="form-control" placeholder="Enter City Name">
                            <label class="form-label" for="city">Enetr City Name</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="email" name="email" id="edit_email" required class="form-control" placeholder="Enter Email Address">
                            <label class="form-label" for="email">Enetr Email Address</label>
                        </div>
                        <div class="my-3 form-floating">
                            <input type="text" name="phone" id="edit_phone" required class="form-control" placeholder="Enter Phone Number" pattern="[0-9]{10,13}">
                            <label class="form-label" for="phone">Enetr Phone Number</label>
                        </div>
                        <div class="my-3 form-floating">
                            <select type="text" name="gender" id="edit_gender" required class="form-control" placeholder="Select Gender">
                                <option></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label class="form-label" for="gender">Select Gender</label>
                        </div>
                        <div class="my-3">
                            <input type="submit" value="Update Student" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-danger">
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Edit Student Model Complete -->
</body>

</html>

<script src="APIProcess.js"></script>