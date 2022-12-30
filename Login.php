<?php 
// LOGIC PLACE
session_start();
// jika tidak ada post submit, kembali ke login page
if(isset($_POST['logout'])){
    session_destroy();
    
    header("Location: index.php");
    exit;
}   
if(!isset($_POST['submit'])){
    header("Location: index.php");
    exit; 
}

// jika ada post submit, kembali ke login page
if(isset($_POST['submit'])){
    if(!isset($_POST['username']) || $_POST['username'] == ''){ // jika tidak ada post username atau input username kosong
        header("Location: index.php");
        exit;
    } else if(!isset($_POST['password']) || $_POST['password'] == ''){ // jika tidak ada post password atau input password kosong
        header("Location: index.php");
        exit;
    }
    
    // Jika tidak ada error, lakukan pengecekan username dan password
    // jika username dan password nya admin, maka login succes dan tampung post username ke variable username
    if($_POST['username'] == "admin" && $_POST['password'] == 'admin'){ // jika username dan password benar
        
            
        
        $_SESSION['success']='berhasil';    
        header("Location: index.php");
    }else {
        // jika tidak, kembali ke login page
    $_SESSION['failLogin']="username atau password salah";
    header("Location: index.php");
    }
}
?>
