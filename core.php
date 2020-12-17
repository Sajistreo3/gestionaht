<a href="index.php">go back</a>
<?php
session_start();
include "dbConnection.php";
if (isset($_POST["SignIn"])) {

    $query = $db->prepare("SELECT * FROM tbl_users WHERE username = :username and password = :password");
    $query->execute(array(
            "username" => strtolower($_POST['username']),
            "password" => md5($_POST['password']))
    );
    $users = $query->fetch(PDO::FETCH_ASSOC);
    if (!empty($users)) {
        $_SESSION['user'] = $users;
        if ($users['valid'] == '1') {

            //$_SESSION['avatar'] = $users['avatar'];
            header("location: index.php");
            //var_dump($users);
            exit();
        }else {
            $_SESSION['email'] = $users['email'];
            header("location: login.php?error=emailnotvalidated");
        }
    } else {
        echo "wrong username/password";
        header("location: login.php?error=incorrect credentials");
        $_SESSION['errorMessage'] = "incorrect credentials";
        var_dump($users);
        exit();
    }
}

//if (isset($_POST["sitenum"]))

if (isset($_POST['action']) && $_POST['action'] == 'changeSite') {
    $query = $db->prepare("SELECT * FROM tbl_sites WHERE site_number = ?");
    $query->execute([$_POST['id']]);
    $site = $query->fetch(PDO::FETCH_ASSOC);
    $_SESSION["site"] = $site;
    exit(json_encode($site));
} else if (isset($_POST['action']) && $_POST['action'] == 'Marchandise') {
//    var_dump($_POST);
    //var_dump($_FILES);

    foreach ($_FILES as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            foreach ($value2 as $key3 => $value3) {
                if ($key2 == "tmp_name")
                    if (!empty($value1['name'][$key3]))
                        move_uploaded_file($value3, 'images/' . $value1['name'][$key3]);
            }
        }
    }


    // $images = ['logo.png', 'logo.png', 'logo.png', 'logo.png', 'logo.png'];
    if (isset($_POST["site"]) && $_POST["site"] != 0) {
        foreach ($_POST['question'] as $key => $value) {
            echo $key . "<br>";

            $query = $db->prepare("INSERT INTO tbl_inspection VALUES(DEFAULT, :type, :question, :score, :comment, :image, :user, :eval, :site, DEFAULT )");
            $query->execute(array(
                    "type" => $_POST['type'],
                    "question" => $_POST['question'][$key],
                    "score" => $_POST['result'][$key],
                    "comment" => $_POST['comment'][$key],
                    "image" => implode(',', $_FILES['photo_' . $key]['name']),
                    "user" => $_SESSION['user']['id'],
                    "eval" => $_POST['evaluation'],
                    "site" => $_POST["site"],
                )
            );
        }
        unset($_SESSION["site"]);
        header("location: inspection.php");
    } else {
        header("location: marchandise.php?error=nosite");
    }


} else if (isset($_POST['action']) && $_POST['action'] == 'Inspection Propeté') {

    foreach ($_FILES as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            foreach ($value2 as $key3 => $value3) {
                if ($key2 == "tmp_name")
                    if (!empty($value1['name'][$key3]))
                        move_uploaded_file($value3, 'images/' . $value1['name'][$key3]);
            }
        }
    }


    if (isset($_POST["site"]) && $_POST["site"] != 0) {
        foreach ($_POST['question'] as $key => $value) {
            echo $key . "<br>";
            $query = $db->prepare("INSERT INTO tbl_inspection VALUES(DEFAULT, :type, :question, :score, :comment, :image, :user, :eval, :site, DEFAULT )");
            $query->execute(array(
                    "type" => $_POST['type'],
                    "question" => $_POST['question'][$key],
                    "score" => $_POST['result'][$key],
                    "comment" => $_POST['comment'][$key],
                    "image" => implode(',', $_FILES['photo_' . $key]['name']),
                    "user" => $_SESSION['user']['id'],
                    "eval" => $_POST['evaluation'],
                    "site" => $_POST["site"],
                )
            );
        }
        unset($_SESSION["site"]);
        header("location: inspection.php");
    } else {
        header("location: clean.php?error=nosite");
    }


} else if (isset($_POST['action']) && $_POST['action'] == 'Inspecter Lave Auto') {

    foreach ($_FILES as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            foreach ($value2 as $key3 => $value3) {
                if ($key2 == "tmp_name")
                    if (!empty($value1['name'][$key3]))
                        move_uploaded_file($value3, 'images/' . $value1['name'][$key3]);
            }
        }
    }


    if (isset($_POST["site"]) && $_POST["site"] != 0) {
        foreach ($_POST['question'] as $key => $value) {
            echo $key . "<br>";
            $query = $db->prepare("INSERT INTO tbl_inspection VALUES(DEFAULT, :type, :question, :score, :comment, :image, :user, :eval, :site, DEFAULT )");
            $query->execute(array(
                    "type" => $_POST['type'],
                    "question" => $_POST['question'][$key],
                    "score" => $_POST['result'][$key],
                    "comment" => $_POST['comment'][$key],
                    "image" => implode(',', $_FILES['photo_' . $key]['name']),
                    "user" => $_SESSION['user']['id'],
                    "eval" => $_POST['evaluation'],
                    "site" => $_POST["site"],
                )
            );
        }
        unset($_SESSION["site"]);
        header("location: inspection.php");
    } else {
        header("location: laveauto.php?error=nosite");
    }


} else if (isset($_POST['action']) && $_POST['action'] == 'Inspecter Securité') {

    foreach ($_FILES as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            foreach ($value2 as $key3 => $value3) {
                if ($key2 == "tmp_name")
                    if (!empty($value1['name'][$key3]))
                        move_uploaded_file($value3, 'images/' . $value1['name'][$key3]);
            }
        }
    }


    if (isset($_POST["site"]) && $_POST["site"] != 0) {
        foreach ($_POST['question'] as $key => $value) {
            echo $key . "<br>";
            $query = $db->prepare("INSERT INTO tbl_inspection VALUES(DEFAULT, :type, :question, :score, :comment, :image, :user, :eval, :site, DEFAULT )");
            $query->execute(array(
                    "type" => $_POST['type'],
                    "question" => $_POST['question'][$key],
                    "score" => $_POST['result'][$key],
                    "comment" => $_POST['comment'][$key],
                    "image" => implode(',', $_FILES['photo_' . $key]['name']),
                    "user" => $_SESSION['user']['id'],
                    "eval" => $_POST['evaluation'],
                    "site" => $_POST["site"],
                )
            );
        }
        unset($_SESSION["site"]);
        header("location: inspection.php");
    } else {
        header("location: secure.php?error=nosite");
    }


}

if (isset($_POST['site'])) {
    //call the function or execute the code
    processDrpdown($_POST['site']);
} else {
    echo "no site Selected";
}


function processDrpdown($selectedVal)
{
    echo "Selected value in php " . $selectedVal;
}


//LogOut
if (isset($_POST["SignOut"])) {
    unset($_SESSION['user']);
    header("location: index.php");
}


if (isset($_POST["register"])) {
    unset($_POST["register"]);

    $query = $db->prepare("SELECT * FROM tbl_users WHERE username = :username");
    $query->execute(array(
            "username" => $_POST['username'])
    );
    $userDB = $query->fetch(PDO::FETCH_ASSOC);

    if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) || empty($_POST['password'])) {
        header("location: registration.php?error=emptyfields");
    } else {
        if (!empty($userDB)) {
            header("location: registration.php?error=username");
            echo "username is already exists";
        } else {
            //Upload File
            // Register Data into Database

            if ($_POST['password'] === $_POST['cpassword']) {
                if (isset($_SESSION['user']) && $_SESSION['user']['level'] <= 2) {
                    $query = $db->prepare("INSERT INTO tbl_users (`firstname`,`lastname`,`username`, `password`, `level`,`status`) VALUES(:firstname,:lastname ,:username, :password, :level, DEFAULT)");
                    $query->execute(array("firstname" => $_POST['firstname'], "lastname" => $_POST['lastname'], "username" => strtolower($_POST['username']), "password" => md5($_POST['password']), "level" => $_POST['level']));
                    // header("location: index.php?success=created");
                    echo "You have been fucked succcessssfuuuulllllyyyy";
                } else {
                    $query = $db->prepare("INSERT INTO tbl_users (`firstname`,`lastname`,`username`, `password`, `level`,`status`) VALUES(:firstname,:lastname ,:username, :password, :level, DEFAULT)");
                    $query->execute(array("firstname" => $_POST['firstname'], "lastname" => $_POST['lastname'], "username" => strtolower($_POST['username']), "password" => md5($_POST['password']), "level" => '7'));
                    // header("location: index.php?success=created");
                    echo "WELCOME NEW CUSTOMER ";
                    header("location: index.php?");
                }

            } else {
                header("location: registration.php?error=cpass");
                echo "DFuck you bitch";
            }
        }
    }

}

if (isset($_POST["registers"])) {
    unset($_POST["registers"]);

    $query = $db->prepare("SELECT * FROM `tbl_users` WHERE `email` = :email");
    $query->execute(array(
            "email" => $_POST['email'])
    );

    $userDB = $query->fetch(PDO::FETCH_ASSOC);

    if (!empty($userDB)) {
        header("location: index.php?error=emailexist");
        unset($_SESSION['username']);
    } else {
        $query = $db->prepare("SELECT * FROM `tbl_users` WHERE `username` = :username");
        $query->execute(array(
                "username" => $_POST['username'])
        );
        $userDB = $query->fetch(PDO::FETCH_ASSOC);
        if (!empty($userDB)) {
            header("location: index.php?error=username_exist");
        } else {

            if ($_POST['password'] === $_POST['cpassword']) {





                if (isset($_SESSION['user']) && $_SESSION['user']['level'] <= 2) {
                    $query = $db->prepare("INSERT INTO tbl_users (`firstname`,`lastname`, `email` ,`username`, `password`, `level`, `valid` ,`status`) VALUES(:firstname,:lastname, :email ,:username, :password, :level, DEFAULT, DEFAULT)");
                    $query->execute(array("firstname" => $_POST['firstname'], "lastname" => $_POST['lastname'],"email" => $_POST['email'] ,"username" => strtolower($_POST['username']), "password" => md5($_POST['password']), "level" => $_POST['level']));
                    // header("location: index.php?success=created");
                    echo "You have been fucked succcessssfuuuulllllyyyy";
                } else {
                    $query = $db->prepare("INSERT INTO tbl_users (`firstname`,`lastname`, `email`,`username`, `password`, `level`, `valid`,`status`) VALUES(:firstname,:lastname , :email ,:username, :password, :level, DEFAULT, DEFAULT)");
                    $query->execute(array("firstname" => $_POST['firstname'], "lastname" => $_POST['lastname'],"email" => $_POST['email'] , "username" => strtolower($_POST['username']), "password" => md5($_POST['password']), "level" => '7'));
                    // header("location: index.php?success=created");
                    echo "WELCOME NEW CUSTOMER ";
                    header("location: index.php?success=checkemail");
                }







                //Register Data into Database
//                $query = $db->prepare("INSERT INTO users (`email`,`username`, `password`, `avatar`) VALUES(:email,:username, :password, :avatar)");
//                $query->execute(array("email" => $_POST['email'], "username" => $_POST['username'], "password" => md5($_POST['password'])));

                $_SESSION['username'] = $_POST['username'];
                $query = $db->prepare("SELECT * FROM tbl_users WHERE email = :email;");
                $query->execute(array(
                        "email" => $_POST['email'],
                    )
                );
                $userid = $query->fetch(PDO::FETCH_ASSOC);

                $id = $userid['id'];
                $to = $_POST['email'];
                $subject = "Email Validation";
                $headers = array(
                    'From' => 'herzing.prog@gmail.com',
                    'Reply-To' => 'do-not-reply@company.com',
                    'X-Mailer' => 'PHP/' . phpversion(),
                    'MIME-Version' => '1.0',
                    'Content-type' => 'text/html; charset=utf-8'
                );
                $msg = '
    <!doctype html>
      <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>Gestion AHT | Validation</title>
        </head>
        <body>
          <h1>Hello  ' . $_SESSION['username'] . '</h1>
          <p>Please validate your account to continue by <a href="http://localhost/Gestion_AHT/core.php?user=' . encrypt($id) . '">clicking here</a></p>
          <p>Regards, Team Gestion AHT</p>
        </body>
      </html>
  ';
                if (isset($userid) && $userid['valid'] == 0) {
                    $mail = mail($to, $subject, $msg, $headers);

                    if ($mail) {
                        echo "Success";
                        var_dump($mail);
                    } else {
                        echo "Error";
                        var_dump($mail);
                    }
                    header("location: login.php?success=created");
                    unset($_SESSION['username']);
                }else{
                    header("location: login.php?error=notcreated");
                    unset($_SESSION['username']);
                }

            } else {
                header("location: registration.php?error=cpass");
                echo "DFuck you bitch";
            }

        }
    }

}


if (isset($_GET['user']) and $_GET['user'] == "retryvalidation"){
    var_dump($_SESSION['email']);
    $to = $_SESSION['email'];
    $query = $db->prepare("SELECT * FROM tbl_users WHERE email = :email;");
    $query->execute(array(
            "email" => $_SESSION['email'],
        )
    );
    $userid = $query->fetch(PDO::FETCH_ASSOC);

    $subject = "Email Validation";
    $headers = array(
        'From' => 'herzing.prog@gmail.com',
        'Reply-To' => 'do-not-reply@company.com',
        'X-Mailer' => 'PHP/' . phpversion(),
        'MIME-Version' => '1.0',
        'Content-type' => 'text/html; charset=utf-8'
    );
    $msg = '
    <!doctype html>
      <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>Document</title>
        </head>
        <body>
          <h1>Hello  '.$userid['username'].'</h1>
          <p>Please validate your account to continue by <a href="http://localhost/Gestion_AHT/core.php?user=' . encrypt($userid['id']) . '">clicking here</a></p>
          <p>Regards, SysAdmin</p>
        </body>
      </html>
  ';
    if (isset($userid) && $userid['valid'] == 0) {
        $mail = mail($to, $subject, $msg, $headers);

        if ($mail) {
            echo "Success";
            var_dump($mail);
        } else {
            echo "Error";
            var_dump($mail);
        }
        unset($_SESSION['email']);
        unset($_SESSION['user']);
        echo "email sent";
        header("location: login.php?success=email_sent");
    }
    else {
        header("location: login.php?error=notcreated");
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['user']);
    }

}
else if (isset($_GET['user'])) {
    $query = $db->prepare("UPDATE tbl_users SET valid = '1' WHERE id = :id;");
    $query->execute(array(
            "id" => decrypt($_GET['user']),
        )
    );
    var_dump(decrypt($_GET['user']));
    var_dump($_GET['user']);
    echo "email validated ".decrypt($_GET['user']);
    header("location: login.php?success=emailvalidated");

}

if (isset($_POST['editUser'])) {

    //query to update database's record
    $query = $db->prepare("UPDATE `tbl_users` SET `firstname`= :firstname, `lastname`= :lastname, `username`= :username, `level`= :level, `status` = :status WHERE `id` = :id;");
    $query->execute(array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'username' => $_POST['username'],
        'level' => $_POST['level'],
        'status' => $_POST['status'],
        'id' => $_POST['id']
    ));

    //success message
    $_SESSION['msg'] = $_POST['firstname'] . " " . $_POST['lastname'] . " has been edited successfully";
    header("location: employees.php?success=edited");
}

if (isset($_POST['changePass'])) {
    if (isset($_SESSION['user']) && $_SESSION['user']['password'] == md5($_POST['opass'])) {
        if ($_POST['npass'] == $_POST['cpass']) {
            $query = $db->prepare("UPDATE `tbl_users` SET `password`= :password WHERE `id` = :id;");
            $query->execute(array(
                'password' => md5($_POST['npass']),
                'id' => $_SESSION['user']['id']
            ));
            echo "Password changed successfully";
        } else {
            echo "New password and confirm password doesnot match";
        }
    } else {
        echo "Please enter correcct old password";
    }
}


function encrypt($str){
    $enc = str_rot13($str);
    $enc = base64_encode($enc);
    $enc = "G8T2" . $enc . "LG8B4T";
    $enc = strrev($enc);
    $enc = str_rot13($enc);

    return $enc;
}

function decrypt($str){
    $enc = str_rot13($str);
    $enc = strrev($enc);
    $enc = str_replace(array("G8T2", "LG8B4T"), array("", ""), $enc);
    $enc = base64_decode($enc);
    $enc = str_rot13($enc);

    return $enc;
}
