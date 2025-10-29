<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - TaskConnect</title>
<style>
body {
  background: linear-gradient(135deg,#bbdefb,#90caf9);
  font-family: 'Poppins', sans-serif;
  display:flex;justify-content:center;align-items:center;
  height:100vh;margin:0;
}
form {
  background:#fff;padding:30px;border-radius:12px;
  box-shadow:0 5px 20px rgba(0,0,0,0.1);
  width:320px;text-align:center;
}
input {
  width:90%;padding:10px;margin:10px 0;
  border-radius:6px;border:1px solid #ccc;
}
button {
  width:95%;padding:10px;background:#1976d2;
  color:#fff;border:none;border-radius:8px;cursor:pointer;
}
button:hover{background:#0d47a1;}
a{text-decoration:none;color:#1976d2;font-weight:bold;}
</style>
</head>
<body>
<form>
  <h2>Welcome Back</h2>
  <input type="email" placeholder="Email" required>
  <input type="password" placeholder="Password" required>
  <button type="button" onclick="redirect('index.php')">Login</button>
  <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</form>
<script>
function redirect(p){window.location=p;}
</script>
</body>
</html>
