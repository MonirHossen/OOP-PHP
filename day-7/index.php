<?php
$name    = "";
$email   = "";
$phone   = "";
$address = "";
$city    = "0";

if (isset($_POST['submit']))
{
    $name     =  $_POST['name'];
    $email    =  $_POST['email'];
    $phone    =  $_POST['phone'];
    $address  =  $_POST['address'];
    $city     =  $_POST['city'];

    $error = 0;
    if ($name == "")
    {
        $error++;
        print "Name Required<br>";
    }

    if ($email == "")
    {
        $error++;
        print "Email Required<br>";
    }

    if ($phone == "")
    {
        $error++;
        print "Phone Required<br>";
    }

    if ($city == "0")
    {
        $error++;
        print "City Required";
    }

    if ($error == 0)
    {
        print "Data Saving";
        $name    = "";
        $email   = "";
        $phone   = "";
        $address = "";
        $city    = "0";
    }


//    if ($name=="" || $email=="" || $phone=="" || $address=="" || $city=="0")
//    {
//        print "Data Missing";
//    }
//    else
//        {
//            print "Data Saving";
//            $name    = "";
//            $email   = "";
//            $phone   = "";
//            $address = "";
//            $city    = "0";
//        }

}
?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <title>This is First PHP</title>
       <link rel="stylesheet" href="css/bootstrap.css">
   </head>
<body>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">

                    <form action="" method="post">

                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" name="name" class="form-control" id="firstName" value="<?php print $name;?>">
                        </div>

                        <div class="form-group">
                            <label for="emailAddress">Email Address</label>
                            <input type="email" name="email" class="form-control"value="<?php print $email;?>" id="emailAddress">
                        </div>

                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="number" name="phone" class="form-control" value="<?php print $phone;?>" id="phoneNumber">
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <textarea class="form-control" name="address" id="Address"><?php print $address;?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="City">City</label>
                            <select name="city" class="form-control">
                                <option value="0">----Select----</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Tangail">Tangail</option>
                                <option value="Feni">Feni</option>
                            </select>
                        </div>

                        <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
