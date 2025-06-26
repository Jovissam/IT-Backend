<pre>
<?php
// print_r(sha1($_POST["email"]));

// print_r($_POST);
if ($_POST["select"] == "1") {
    print_r($_POST["text"] ." has been hashed to ". md5($_POST["text"]) ." using Md5 Algo");
} else{
    print_r($_POST["text"] ." has been hashed to ". sha1($_POST["text"]) ." using Sha1 Algo");
};