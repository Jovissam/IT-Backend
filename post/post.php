<pre>
<?php
require ("db.php");
// $kk = md5( $_POST["password"]);
// echo $kk;

function authenticate($users, $email, $password){
    foreach ($users as $key => $user) {
        if ($user['email'] == $_POST["email"]) {
            if ($user['password'] == md5( $_POST["password"])) {
                return true;
            }
        }
        return false;
    }
};

if (authenticate($users, $_POST["email"], $_POST["password"])) {
    echo "Access Granted";
} else {
    echo "Access Denied";
}
