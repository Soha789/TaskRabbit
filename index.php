<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TaskConnect - Home</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(120deg,#e3f2fd,#bbdefb);
  margin: 0;
  padding: 0;
}
header {
  background: #1565c0;
  color: #fff;
  padding: 20px;
  text-align: center;
  font-size: 28px;
  letter-spacing: 1px;
}
nav {
  background: #0d47a1;
  display: flex;
  justify-content: center;
  padding: 10px;
}
nav a {
  color: #fff;
  text-decoration: none;
  margin: 0 15px;
  font-weight: bold;
  transition: 0.3s;
}
nav a:hover { color: #ffeb3b; }
.container {
  padding: 40px;
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
  gap: 20px;
}
.card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  padding: 20px;
  text-align: center;
  transition: 0.3s;
}
.card:hover { transform: translateY(-5px); }
button {
  background: #1565c0;
  border: none;
  color: white;
  padding: 10px 20px;
  border-radius: 8px;
  cursor: pointer;
}
button:hover { background: #0d47a1; }
</style>
</head>
<body>
<header>TaskConnect Marketplace</header>
<nav>
  <a href="index.php">Home</a>
  <a href="browse_task.php">Browse Tasks</a>
  <a href="post_task.php">Post Task</a>
  <a href="profile.php">Profile</a>
  <a href="login.php">Login</a>
</nav>
<div class="container">
  <div class="card">
    <h3>Cleaning Services</h3>
    <p>Hire trusted cleaners for your home or office.</p>
    <button onclick="redirect('browse_task.php')">Explore</button>
  </div>
  <div class="card">
    <h3>Furniture Assembly</h3>
    <p>Get your furniture assembled by professionals.</p>
    <button onclick="redirect('browse_task.php')">Explore</button>
  </div>
  <div class="card">
    <h3>Moving Help</h3>
    <p>Hire movers to make your relocation easy.</p>
    <button onclick="redirect('browse_task.php')">Explore</button>
  </div>
</div>
<script>
function redirect(page){ window.location = page; }
</script>
</body>
</html>
v
