
<?php
$insert = false;
if(isset($_POST['name'])){
    $submit = true;
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Could not connect to database due to" . mysqli_connect_error());

    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age =$_POST['age'] ;
    $gender = $_POST['gender'] ;
    $phone = $_POST['phone'] ;
    $other = $_POST['other'];


    $sql = "INSERT INTO `form`.`form` ( `name`, `email`, `age`, `gender`, `phone`, `other`, `dt`) VALUES ( '$name', ' $email', '$age', ' $gender', '$phone', ' $other', current_timestamp());";
    // echo $sql;
    if($con->query($sql) == true){
        // echo "success";
        $insert = true;
    }
    else {
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}

 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <img class='h-full w-full fixed z-0' src='https://images.unsplash.com/photo-1531259736756-6caccf485f81?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHVuaXZlcnNpdHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60' >
    <div class=' h-full w-full  m-2 p-4 fixed z-10 flex flex-col justify-center items-center'>
        <h1 class="text-3xl">hiiii</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        <form class="flex flex-col w-2/3" action="index.php " method="post" >
            <label name='name'>name</label><input class="border p-2 border-gray-500" type="text" name="name" id="name" placeholder="enter name">
            <input  class="border p-2 border-gray-500" type="email" name="email" id="email" placeholder="enter email">
            <input class="border p-2 border-gray-500" type="number" name="age" id="age" placeholder="enter age">
            <input class="border p-2 border-gray-500" type="text" name="gender" id="gender" placeholder="enter gender">
            <input class="border p-2 border-gray-500" type="number" name="phone" id="phone" placeholder="enter phone">
            <textarea class="border p-2 border-gray-500" name="other" cols="20" id="other" rows="6" placeholder="enter somthing"></textarea>
            <button class="bg-gray-500 p-1">submit</button>
        
        </form>
    </div>
    
</body>
</html>

