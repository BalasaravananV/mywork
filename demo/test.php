<?php
 require_once('database.php');



// mysqli_close($conn);
// $name = $_POST['name'];
// $name = $_POST['name'];
// $email= $_POST['email'];
// $pasword= $_POST['password'];
// $phone= $_POST['phone'];
// $age= $_POST['age'];

if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty($_POST['name'])){
    $nameErr = "This field is Required";
  }
  else{
    $name = $_POST['name'];
  }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty($_POST['email'])){
    $emailErr = "This field is Required";
  }
  else{
    $name = $_POST['email'];
  }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty($_POST['password'])){
    $passwordErr = "This field is Required";
  }
  else{
    $password = $_POST['password'];
  }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty($_POST['phone'])){
    $phoneErr = "This field is Required";
  }
  else{
    $phone = $_POST['phone'];
  }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty($_POST['age'])){
    $ageErr = "This field is Required";
  }
  else{
    $age = $_POST['age'];
  } 
}



//Query
$data = "INSERT INTO  myguests(name,email,password, phone,age)values('$name','$email','$password','$phone','$age')";
if($conn->query($data)){
  echo "Added Successfully";
 // print_r($data);die;
}
else{
  echo "data not inserted";
}

/*sql Query */

// $sql = "select * from myguests";
// $result = $conn->query($sql);
// //print_r($result);
// if($result->num_rows>0){
//   while($row = $result->fetch_assoc()){
//     $list[] = [
//         'name' => $row['name'],
//         'email' => $row['email'],
//         'phone' => $row['phone'],
//         'age' => $row['age'],
        
//     ];
              
//   }
?>

<a href = "login.php">Login</a>