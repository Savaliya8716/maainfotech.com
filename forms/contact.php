<?php
  $servername = "localhost";
  $username = "u758648975_maainfotech";
  $password = "Admin@Maainfotech1";
  $dbname = "u758648975_Maainfotech";

  // Create connection
  $conn = new mysqli($localhost, $u758648975_maainfotech, $Admin@Maainfotech1, $u758648975_Maainfotech);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

function insertqueryfunction($dbfield,$table) {
   $count = 0;
   $fields = '';

   foreach($dbfield as $col => $val) {
      if ($count++ != 0) $fields .= ', ';
      $col = addslashes($col);
      $val = addslashes($val);
      $fields .= "`$col` = '$val'";
   }
   $query = "INSERT INTO $table SET $fields;";
   return $query;

} 

if(isset($_POST['submit']))
{

    // Report all errors
error_reporting(E_ALL);

    // Same as error_reporting(E_ALL);
     ini_set("error_reporting", E_ALL);
     $username_form = $_POST['username'];
     $firstname_form = $_POST['firstname'];
     $password_form = $_POST['password'];
     $you_table_name = 'you_table_name';

     $dbfield = array("username"=>$username_form, "firstname"=>$firstname_form,"password"=>$password_form);

     $querytest =  insertqueryfunction($dbfield,'you_table_name');

     if ($conn->query($querytest) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}  
?> 
<form class="php-email-form mt-4" method="post">
  <div class="row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
    </div>
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
    </div>
  </div>
  <div class="form-group mt-3">
    <input type="no" name="phone" class="form-control" id="phone" placeholder="Enter Your Mobile No" required>
  </div>
  <div class="form-group mt-3">
    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
  </div>
  <div class="text-center mt-3"><button type="submit" name="submit">Send Message</button></div>
</form>