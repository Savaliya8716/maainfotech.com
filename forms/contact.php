  <form class="php-email-form mt-4" method="post">
    <div class="row">
      <div class="col-md-6 form-group">
        <input type="text" name="txtName" class="form-control" id="name" placeholder="Your Name" required>
      </div>
      <div class="col-md-6 form-group mt-3 mt-md-0">
        <input type="email" name="txtEmail" class="form-control" id="email" placeholder="Your Email" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <input type="no" name="txtPhone" class="form-control" id="phone" placeholder="Enter Your Mobile No" required>
    </div>
    <div class="form-group mt-3">
      <textarea class="form-control" name="txtMessage" id="message" rows="5" placeholder="Message" required></textarea>
    </div>
    <div class="text-center mt-3"><button type="submit" name="submit">Send Message</button></div>
  </form>


  <?php
  // database connection code
  // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

  $conn = new mysqli('localhost', 'maainfotech', 'Maainfotech@2022', 'Maainfotech');

  // get the post records
  $txtName = $_POST['txtName'];
  $txtEmail = $_POST['txtEmail'];
  $txtPhone = $_POST['txtPhone'];
  $txtMessage = $_POST['txtMessage'];

  // database insert SQL code
  $sql = "INSERT INTO `tbl_contact` (`fldName`, `fldEmail`, `fldPhone`, `fldMessage`) 
  VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

  // insert in database 
  $rs = mysqli_query($conn, $sql);

  if ($rs) {
    echo "Contact Records Inserted";
  }

  ?>