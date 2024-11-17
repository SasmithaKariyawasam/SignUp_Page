<?php  
include 'connect.php'; 

if (isset($_POST['signUp'])) { 
    $username = $conn->real_escape_string($_POST['username']); 
    $email = $conn->real_escape_string($_POST['email']); 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $checkEmail = "SELECT * FROM users WHERE email = '$email'"; 
    $result = $conn->query($checkEmail); 

    if ($result->num_rows > 0) { 
        echo "Email Address Already Exists!"; 
    } else { 
        $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')"; 
        if ($conn->query($insertQuery) === TRUE) { 
            header("Location: created.php"); 
            exit(); 
        } else { 
            echo "Error: " . $conn->error; 
        } 
    } 
} 

if (isset($_POST['signIn'])) { 
    $email = $conn->real_escape_string($_POST['email']); 
    $password = $_POST['password']; 

    $sql = "SELECT * FROM users WHERE email = '$email'"; 
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) { 
        $row = $result->fetch_assoc(); 
        if (password_verify($password, $row['password'])) { 
            session_start(); 
            $_SESSION['email'] = $row['email']; 
            header("Location: signin.php"); 
            exit(); 
        } else { 
            echo "Incorrect Password"; 
        } 
    } else { 
        echo "Email Not Found"; 
    } 
} 
?>
