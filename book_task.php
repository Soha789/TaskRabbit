<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book Task - TaskConnect</title>
<style>
body {
  font-family:'Poppins',sans-serif;
  background:linear-gradient(135deg,#e1bee7,#ce93d8);
  display:flex;justify-content:center;align-items:center;
  height:100vh;margin:0;
}
.card {
  background:#fff;padding:30px;border-radius:12px;
  box-shadow:0 5px 20px rgba(0,0,0,0.1);
  text-align:center;width:350px;
}
button {
  background:#8e24aa;color:#fff;border:none;
  padding:10px 20px;border-radius:8px;cursor:pointer;
}
button:hover{background:#6a1b9a;}
</style>
</head>
<body>
<div class="card">
  <h2>Confirm Booking</h2>
  <p>You are about to hire <strong>Ali the Cleaner</strong> for your task.</p>
  <p>Estimated Cost: $40</p>
  <button onclick="redirect('profile.php')">Confirm</button>
</div>
<script>
function redirect(p){window.location=p;}
</script>
</body>
</html>
