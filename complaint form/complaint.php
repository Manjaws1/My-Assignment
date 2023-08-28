<?php

if(isset($_POST['submit'])){

    if(isset($_POST['firstname']) && !empty(($_POST['firstname']))){
        $firstname = $_POST['firstname'];
    }

    if(isset($_POST['lastname']) && !empty(($_POST['lastname']))){
        $lastname = $_POST['lastname'];
    }
    if(isset($_POST['middlename']) && !empty(($_POST['middlename']))){
        $middlename= $_POST['middlename'];
    }
    if(isset($_POST['gender']) && !empty(($_POST['gender']))){
        $gender = $_POST['gender'];
    }
    
    if(isset($_POST['email']) && !empty(($_POST['email']))){  
        $email = $_POST['email'];
    }
    
    if(isset($_POST['id']) && !empty(($_POST['id']))){
        $id = $_POST['id'];
    }
    
    if(isset($_POST['department']) && !empty(($_POST['department']))){
        $department = $_POST['department'];
    }
    
    if(isset($_POST['level']) && !empty(($_POST['level']))){
        $level  =  $_POST['level'];

    }

    if(isset($_POST['campus']) && !empty(($_POST['campus']))){
        $campus = $_POST['campus'];
    }
    
    if(isset($_POST['telephone']) && !empty(($_POST['telephone']))){
        $telephone  =  $_POST['telephone'];

    }

    if(isset($_POST['date']) && !empty(($_POST['date']))){
        $date = $_POST['date'];
    }
    
    if(isset($_POST['level']) && !empty(($_POST['level']))){
        $level  =  $_POST['level'];

    }

    if(isset($_POST['address']) && !empty(($_POST['address']))){
        $address  =  $_POST['address'];

    }

    if(isset($_POST['state']) && !empty(($_POST['state']))){
        $state = $_POST['state'];
    }
    
    if(isset($_POST['country']) && !empty(($_POST['country']))){
        $country =  $_POST['country'];

    }

    if(isset($_POST['complaint']) && !empty(($_POST['complaint']))){
        $complaint  =  $_POST['complaint'];

    } 

    if(isset($_POST['room']) && !empty(($_POST['room']))){
        $room = $_POST['room'];
    }
    
    if(isset($_POST['complaint_area']) && !empty(($_POST['complaint_area']))){
        $complaint_area =  $_POST['complaint_area'];

    }



$studentdata = file_get_contents ('complaint.json');
$datalist = json_decode($studentdata); 
$profile=array(
    'firstname'=>$firstname,
    'middlename'=>$middlename,
    'lastname'=>$lastname,
    'gender'=>$gender,
    'email'=>$email,
    'id'=>$id,
    'department'=>$department,
    'level'=>$level,
    'campus'=>$campus,
    'telephone'=>$telephone,
    'date'=>$date,
    'address'=>$address,
    'country'=>$country,
    'state'=>$state,
    'complaint'=>$complaint,
    'room'=>$room,
    'complaint_area'=>$complaint_area
);

array_push($datalist, $profile);
$en_datalist = json_encode($datalist);

file_put_contents ('complaint.json', $en_datalist);


echo "<script>
alert('Information submitted');

window.location = 'complaint.html'
</script>";

}

?> 