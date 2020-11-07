<!-- user info
>username,Full Name password, email, gender, phone number, type( 
    user/ planner) city, local address,    -->


<?php

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}
$err_username = $err_password = $err_fname = $err_user_type = $err_email = $err_phone_number = $err_city = $err_local_address = "";
$username = $password = $fname = $user_type = $email = $phone_number = $city = $local_address = "";
$temp_username = $temp_password = $temp_fname = $temp_user_type = $temp_email = $temp_phone_number = $temp_city = $temp_local_address = "";

$hasError = true;

if (isset($_POST['register'])) {
    echo "register button clicked";
    $temp_username = $_POST['username'];




    //username validation

    if (empty(trim($temp_username))) {
        $err_username = "Username is Required";
        $hasError = true;
    } elseif (strlen($temp_username) < 5) {
        $err_username = "Username must be 5 Charectors Long";
        $hasError = true;
    } elseif (strlen($temp_username) > 10) {
        $err_username = "Username cannot be more than 10 Charectors Long";
        $hasError = true;
    } elseif (strpos($temp_username, " ")) {
        $err_username = "Space is not Allowed";
        $hasError = true;
    } else {
        $username = validate($temp_username);
        $hasError = false;
    }



    //password validation 

    if (empty(trim($_POST['password']))) {
        $er_password = "<span style='color:red;'> Password is Required </span>";
        $hasError = true;
    } elseif (strlen($_POST['password']) < 8) {
        $er_password = "<span style='color:red;'>Password must contain at least 8 character </span>";
        $hasError = true;
    } elseif (!strpos($_POST['password'], "#")) {
        $er_password = "<span style='color:red;'>Password must contain 1 special character # </span>";
        $hasError = true;
    } elseif (!strpos($_POST['password'], "1")) {
        $er_password = "<span style='color:red;'>Password must contain 1 number  </span>";
        $hasError = true;
    } elseif (ctype_upper($_POST['password'])) {
        $er_password = "<span style='color:red;'>Password must contain 1 Lowercase  </span>";
        $hasError = true;
    } elseif (ctype_lower($_POST['password'])) {
        $er_password = "<span style='color:red;'>Password must contain 1 Uppercase  </span>";
        $hasError = true;
    } else {
        $password = validate($_POST['password']);
        $hasError = false;
    }








    echo $_POST['username'];
} else {
    //echo "<h1>All Fields are Required for Registration </h1>";
}




$xml = simplexml_load_file("data-file.xml");
$users = $xml->user;

$a = $xml->addChild("user");
$a->addChild("username", "niloy");
$a->addChild("password", "00");

foreach ($users as $key => $value) {
    echo "username: " . $value->username . "<br>";
    echo "password: " . $value->password . "<br>";
    echo "<br>";
}

$newXmlobj = new DOMDocument("1.0");
$newXmlobj->preserveWhiteSpace = false;
$newXmlobj->formatOutput = true;

$newXmlobj->loadXML($xml->asXML());

$f = fopen("new-d.xml", "w");
fwrite($f, $newXmlobj->saveXML());





// $user = $xml->addChild("user");
// $user->addChild("username", "rabbi");
// $user->addChild("password", 23);



// $xml2 = new DOMDocument("1.0");
// $xml2->preserveWhiteSpace = false;
// $xml2->formatOutput = true;

// $xml2->loadXML($xml->asXML());


// $f = fopen("new-d.xml", "w");
// fwrite($f, $xml2->saveXML());
// echo "<pre>";

// echo "</pre>";



?>


<form action="" method="post">
    <h1>All Fields are Required for Registration </h1>
    <table>
        <tr>
            <td>Full Name: </td>
            <td><input type="text" name="fname" id=""></td>
        </tr>

        <tr>
            <td>Username</td>
            <td><input type="text" name="username" id=""></td>
        </tr>

        <tr>
            <td>Password: </td>
            <td><input type="text" name="password" id=""></td>
        </tr>

        <tr>
            <td>I want to: </td>
            <td><input type="radio" name="type" id="" value="Client"> Take Service <br>
                <input type="radio" name="type" id="" value="Planner"> Plan for Others
            </td>
        </tr>

        <tr>
            <td>Email: </td>
            <td><input type="text" name="email" id=""></td>
        </tr>

        <tr>
            <td>Phone Number: </td>
            <td><input type="number" name="phone-number" id=""></td>
        </tr>

        <tr>
            <td>City: </td>
            <td><input type="text" name="city" id=""></td>
        </tr>

        <tr>
            <td>Local Address: </td>
            <td><textarea name="address" id="" cols="30" rows="10"></textarea></td>
        </tr>

        <tr>
            <td><input type="reset" name="" id=""></td>
            <td><input type="submit" id="" name="register" value="Register"></td>
        </tr>
    </table>
</form>