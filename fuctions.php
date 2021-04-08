<?php
if (session_id() == ""){
  session_start();
}

function split_session(){
    if(!isset($_SESSION['uid'])) {
        header("Location: login.php");
        exit;
    }

    $session_data=$_SESSION['uid'];

    return explode('|', $session_data, 2);
}
function set_token($email){
    $_SESSION['uid']="email".'|'.$email;

    return 1;
}

function dir_in_tree($path){
    global $repo_root;

    $fqf = $repo_root. $path;
    if(file_exists($fqf) || is_dir($fqf)){
        return false;
    }

    return true;
}
?>