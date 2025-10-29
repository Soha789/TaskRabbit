<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Signup - TaskConnect</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg,#c8e6c9,#a5d6a7);
  display: flex; justify-content: center; align-items: center;
  height: 100vh; margin: 0;
}
form {
  background: #fff; padding: 30px;
  border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);
  width: 320px; text-align: center;
}
input {
  width: 90%; padding: 10px; margin: 10px 0;
  border-radius: 6px; border: 1px solid #ccc;
}
button {
  width: 95%; padding: 10px;
  background: #388e3c; color: #fff; border: none;
  border-radius: 8px; cursor: pointer;
}
button:hover { background: #2e7d32; }
a { text-decoration: none; color: #388e3c; font-weight: bold; }
</style>
</head>
<body>
<form>
  <h2>Create Account</h2>
  <input type="text" placeholder="Full Name" required>
  <input type="email" placeholder="Email" required>
  <input type="password" placeholder="Password" required>
  <button type="button" onclick="redirect('login.php')">Sign Up</button>
  <p>Already have an account? <a href="login.php">Login</a></p>
</form>
<script>
function redirect(p){ window.location=p; }
</script>
</body>
</html>
