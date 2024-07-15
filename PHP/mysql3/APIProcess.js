$(document).on("submit", "#addnewForm", function(e){
    e.preventDefault();
    //alert("ok");

    let formData = new FormData(this);
    formData.append("addnew", true);
    //console.log(formData);

    $.ajax({
        url : "API.php",
        type : "POST",
        data : formData,
        processData : false,
        contentType : false,
        success : function(response1){
            //console.log(response1);

            let response = jQuery.parseJSON(response1);
            //console.log(response);
            if(response.code == 204){
                $("#message").addClass("alert alert-danger");
                $("#message").text(response.message);
            }else if(response.code == 200){
                //alert("Stduent created");
                
                $("#addnewForm")[0].reset();
                $("#addnewForm").hide();

                // alert message
                alertify.set("notifier","position", "top-right");
                alertify.success(response.message);

                $('#tableData').load(location.href + " #tableData");
            }
        }
    });
});

// delete student code
$(document).on("click", ".btndelete", function(event){
    event.preventDefault();

    if(confirm("Are you sure to delete this Student ?")){
        let id = $(this).val();
        //alert(id);

        $.ajax({
            type : "POST",
            url : "API.php",
            data : {
                "delete" : true,
                "id" : id
            },
            success : function(response1){
                //console.log(response1);
                let response = jQuery.parseJSON(response1);
                //console.log(response);
                if(response.code == 200){
                    $('#tableData').load(location.href + " #tableData");
                    alertify.set("notifier","position", "top-right");
                    alertify.success(response.message);
                }else{
                    alert(response.message);
                }
            }
        });
    }
});

// view data
$(document).on("click", ".btnview", function(event){
    event.preventDefault();

    let id = $(this).val();
    //alert(id);

    $.ajax({
        type : "POST",
        url : "API.php",
        data : {
            "viewstudent" : true,
            "id" : id
        }, success : function(response1){
            //console.log(response1);
            let response = jQuery.parseJSON(response1);

            if(response.code == 200){
                $("#view_fname").val(response.student.fname);
                $("#view_lname").val(response.student.lname);
                $("#view_city").val(response.student.city);
                $("#view_email").val(response.student.email);
                $("#view_phone").val(response.student.phone);
                $("#view_gender").val(response.student.gender);
                $("#viewStudentModal").modal("show");
            }else{
                alert(response.message);
            }
        }
    });
});

// get data for edit
$(document).on("click", ".btnedit", function(event){
    event.preventDefault();
    // alert("Called");
    let id = $(this).val();

    $.ajax({
        type : "POST",
        url : "API.php",
        data : {
            "viewstudent" : true,
            "id" : id
        }, success : function(response1){
            //console.log(response1);
            let response = jQuery.parseJSON(response1);

            if(response.code == 200){
                $("#edit_id").val(response.student.id);
                $("#edit_fname").val(response.student.fname);
                $("#edit_lname").val(response.student.lname);
                $("#edit_city").val(response.student.city);
                $("#edit_email").val(response.student.email);
                $("#edit_phone").val(response.student.phone);
                $("#edit_gender").val(response.student.gender);
                $("#editStudentModal").modal("show").show();
            }else{
                alert(response.message);
            }
        }
    });
});

// code for update student
$(document).on("submit", "#editForm", function(e){
    e.preventDefault();
    //alert("ok");

    let formData = new FormData(this);
    formData.append("updatestudent", true);
    //console.log(formData);

    $.ajax({
        url : "API.php",
        type : "POST",
        data : formData,
        processData : false,
        contentType : false,
        success : function(response1){
            console.log(response1);

            let response = jQuery.parseJSON(response1);
            //console.log(response);
            if(response.code == 204){
                $("#message").addClass("alert alert-danger");
                $("#message").text(response.message);
            }else if(response.code == 200){
                //alert("Stduent created");
                
                $("#editForm")[0].reset();
                $("#editStudentModal").hide();

                // alert message
                alertify.set("notifier","position", "top-right");
                alertify.success(response.message);

                $('#tableData').load(location.href + " #tableData");
            }else{
                alert(response.message);
            }
        }
    });
});