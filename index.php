
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
    <img class='opacity- h-full w-full fixed z-0' src='photo1.jpg' >
    <div class=' h-full w-full top-1  m-2 p-9 pb-4 absolute z-10 flex flex-col justify-center items-center'>
        <h1 class="text-3xl font-sans font-bold text-orange-500">LPU Travel Guide</h1>
        <p class=' text-green-500 text-sm'>We are going to Kashmir in this diwali(last date:09-2023)</p>
        <form class="flex pb-3 flex-col p-6 w-2/3 bg-slate-400/10 top-0" action="index.php " method="post" >
            <label class="text-orange-400" name='name'>Name</label>
            <input class="rounded-3xl border p-1 m-1 border-gray-500" type="text" name="name" id="name" placeholder="enter name">
            <label class="text-orange-400" name='email'>Email</label>
            <input  class="rounded-3xl border p-1 m-1 border-gray-500" type="email" name="email" id="email" placeholder="enter email">
            <label class="text-orange-400" name='age'>Age</label>
            <input class="rounded-3xl border p-1 m-1 border-gray-500" type="number" name="age" id="age" placeholder="enter age">
            <label class="text-orange-400" name='gender'>Gender</label>
            <input  class="rounded-3xl border p-1 m-1 border-gray-500" type="text" name="gender" id="gender" placeholder="enter gender">
            <label class="text-orange-400" name='phone'>Phone no.</label>
            <input class="rounded-3xl border p-1 m-1 border-gray-500" type="number" name="phone" id="phone" placeholder="enter phone">
            <label class="text-orange-400" name='other'>Any Query</label>
            <textarea class="border p-1 m-1 rounded-md border-gray-500" name="other" cols="20" id="other" rows="6" placeholder="enter somthing"></textarea>
            <div class="flex"><button  onclick='abc()' class="bg-orange-500 border border-orange-800 p-1  w-1/3 rounded-md">submit</button>
            <p id="p1" class="text-green-500"></p></div>
        
        </form>
    </div>
    <script>
        function abc(){
            alert('you succesfully regestered')
            document.getElementById('p1').innerHTML='Thanks for registration'
        }
    </script>
</body>
</html>
