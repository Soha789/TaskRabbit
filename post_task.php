<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Post a Task - TaskConnect</title>
<style>
body {
  font-family:'Poppins',sans-serif;
  background:linear-gradient(135deg,#fce4ec,#f8bbd0);
  display:flex;justify-content:center;align-items:center;
  height:100vh;margin:0;
}
form {
  background:#fff;padding:30px;border-radius:12px;
  width:360px;box-shadow:0 5px 20px rgba(0,0,0,0.1);
}
input,textarea,select {
  width:95%;padding:10px;margin:10px 0;
  border-radius:6px;border:1px solid #ccc;
}
button {
  width:100%;padding:10px;background:#ec407a;color:#fff;
  border:none;border-radius:8px;cursor:pointer;
}
button:hover{background:#d81b60;}
</style>
</head>
<body>
<form>
  <h2>Post a New Task</h2>
  <input type="text" placeholder="Task Title" required>
  <textarea placeholder="Describe your task..." required></textarea>
  <input type="number" placeholder="Budget (USD)" required>
  <select required>
    <option value="">Select Category</option>
    <option>Cleaning</option>
    <option>Moving Help</option>
    <option>Handyman</option>
  </select>
  <input type="text" placeholder="Your Location" required>
  <button type="button" onclick="redirect('browse_task.php')">Post Task</button>
</form>
<script>
function redirect(p){window.location=p;}
</script>
</body>
</html>
