<?php

//чи авторизований користувач
function isAuth() {
    $is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null;
    $is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null;

    if ($is_session || $is_cookie) {
        return true;
    } else {
        return false;
    }
}
//отримання поточного авторизованого користувача
function getCurrentUser() {
    global $conn;
    $is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null;
    $is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null;

    if($is_session || $is_cookie) {
        $userID = $is_session ? $_SESSION['user_id'] : $_COOKIE['user_id'];
        $sql = "SELECT * FROM user WHERE id = '" . $userID . "'";
        $result = mysqli_query($conn, $sql);
        return $user = $result->fetch_assoc();
    } else {
        return NULL;
    }
}

function getUserID() {
    global $conn;
    $is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null;
    $is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null;

    if($is_session || $is_cookie) {
        return $is_session ? $_SESSION['user_id'] : $_COOKIE['user_id'];;
    } else {
        return 0;
    }
}