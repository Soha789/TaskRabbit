<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Profile - TaskConnect</title>
<style>
body {
  font-family:'Poppins',sans-serif;
  background:linear-gradient(120deg,#c5cae9,#9fa8da);
  margin:0;padding:0;
}
header {
  background:#3949ab;color:#fff;padding:20px;text-align:center;
  font-size:26px;
}
.profile {
  background:#fff;width:350px;margin:30px auto;padding:20px;
  border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,0.1);
  text-align:center;
}
.tasks {
  background:#fff;width:80%;margin:20px auto;padding:20px;
  border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
.task {
  border-bottom:1px solid #ccc;padding:10px 0;
}
.task:last-child{border:none;}
button {
  background:#3949ab;color:#fff;border:none;
  padding:8px 16px;border-radius:6px;cursor:pointer;
}
button:hover{background:#283593;}
</style>
</head>
<body>
<header>My Profile</header>
<div class="profile">
  <img src="https://i.pravatar.cc/100" style="border-radius:50%;"><br>
  <h3>Fatima Azeem</h3>
  <p>Member since 2025</p>
  <button onclick="redirect('logout.php')">Logout</button>
</div>
<div class="tasks">
  <h3>My Posted Tasks</h3>
  <div class="task">
    <strong>Clean Apartment</strong> - In Progress
  </div>
  <div class="task">
    <strong>Assemble Table</strong> - Completed
  </div>
</div>
<script>
function redirect(p){window.location=p;}
</script>
</body>
</html>
