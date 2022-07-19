<?php
//Check if the update button has been clicked
if (isset($_GET["u_id"])) {
    $receivedId = $_GET["u_id"];
    $receivedName = $_GET["u_name"];
    $receivedEmail = $_GET["u_mail"];
    $receivedPassword = $_GET["u_pass"];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="text-info text-center">Update users</h1>
            <form method="post" action="update_handler.php">
                <input value="<?php echo "$receivedId";?> name="u_id" type="hidden">
                <input value="<?php echo "$receivedName";?> class="form-control" name="u_name" placeholder="Enter Name" type="text"><br>
                <input value="<?php echo "$receivedEmail";?> class="form-control" name="u_email" placeholder="Enter email" type="email"><br>
                <input value="<?php echo "$receivedPassword";?> class="form-control" name="u_pass" placeholder="Enter Password" type="password"><br>
                <input class="btn btn-outline-info" name="btn_update" value="Update" type="submit"><br>
                <a class="btn btn-outline-success btn-block" href="users.php">Go back</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</section>
</body>
</html>
