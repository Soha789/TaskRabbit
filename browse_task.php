<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Browse Tasks - TaskConnect</title>
<style>
body {
  font-family:'Poppins',sans-serif;
  background:linear-gradient(120deg,#fff8e1,#ffecb3);
  margin:0;padding:0;
}
header {
  background:#fbc02d;color:white;text-align:center;
  padding:20px;font-size:26px;font-weight:bold;
}
.container {
  display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:20px;padding:30px;
}
.card {
  background:#fff;padding:20px;border-radius:10px;
  box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
button {
  background:#fbc02d;border:none;padding:10px 15px;
  color:#fff;border-radius:6px;cursor:pointer;
}
button:hover{background:#f9a825;}
</style>
</head>
<body>
<header>Available Tasks</header>
<div class="container">
  <div class="card">
    <h3>Clean 2-Bed Apartment</h3>
    <p>Location: Riyadh | Budget: $40</p>
    <button onclick="redirect('book_task.php')">Apply</button>
  </div>
  <div class="card">
    <h3>Assemble IKEA Wardrobe</h3>
    <p>Location: Dammam | Budget: $55</p>
    <button onclick="redirect('book_task.php')">Apply</button>
  </div>
  <div class="card">
    <h3>Move Boxes</h3>
    <p>Location: Jubail | Budget: $70</p>
    <button onclick="redirect('book_task.php')">Apply</button>
  </div>
</div>
<script>
function redirect(p){window.location=p;}
</script>
</body>
</html>
