<!DOCTYPE html>
<html>
<head><title>Raja Club - Wingo</title><meta name="viewport" content="width=device-width, initial-scale=1">
<style>body{background:#222;color:#fff;text-align:center;font-family:Arial} .box{background:#333;padding:20px;margin:20px;border-radius:15px} .num{font-size:50px;color:#ffd700} .btn{background:#ff4444;color:#fff;padding:15px 30px;border:none;border-radius:10px;font-size:18px}</style>
</head>
<body>
<h1>👑 RAJA CLUB 👑</h1>
<div class="box">
<h3>WINGO 30s - Random Fill ON ✅</h3>
<div class="num" id="result">--</div>
<p id="color">Loading...</p>
<button class="btn" onclick="getResult()">Get New Result</button>
</div>
<script>
function getResult(){
 fetch('api/GetGameResult.php').then(r=>r.json()).then(d=>{
  document.getElementById('result').innerText=d.data.number;
  document.getElementById('color').innerText='Color: '+d.data.color+' | Period: '+d.data.period;
 });
}
getResult(); setInterval(getResult,5000);
</script>
</body>
</html>
