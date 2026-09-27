<?php
$game = $_GET['game'] ?? 'lobby';
?>
<!DOCTYPE html>
<html lang="gu">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Raja Club - All Games</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial}
body{background:#0a0e1a;color:#fff}
.header{background:linear-gradient(90deg,#b8860b,#ffd700);padding:15px;text-align:center;font-size:22px;font-weight:bold;color:#000}
.nav{display:flex;gap:5px;padding:10px;background:#121624;overflow-x:auto}
.nav a{padding:10px 15px;background:#1e243a;color:#ffd700;border-radius:20px;text-decoration:none;font-size:13px;white-space:nowrap;border:1px solid #ffd70044}
.nav a.active{background:gold;color:#000}
.card{background:#121624;margin:10px;border-radius:15px;padding:15px;border:1px solid #ffd70022}
.timer{font-size:50px;text-align:center;color:gold;font-weight:bold}
.btn{flex:1;padding:15px;border:none;border-radius:10px;color:#fff;font-weight:bold;cursor:pointer}
.g{background:#00a651}.v{background:#8e44ad}.r{background:#e74c3c}
.nums{display:grid;grid-template-columns:repeat(5,1fr);gap:8px;margin-top:10px}
.nums button{padding:12px;background:#0d111c;border:1px solid gold;color:gold;border-radius:8px;font-size:18px}
.place{width:100%;padding:15px;background:linear-gradient(90deg,gold,orange);border:none;border-radius:10px;font-weight:bold;margin-top:15px;color:#000;font-size:16px}
.slot{display:flex;gap:10px;justify-content:center;font-size:40px;margin:15px 0}
</style>
</head>
<body>
<div class="header">👑 RAJA CLUB - Educational Demo</div>
<div class="nav">
<a href="?game=lobby" class="<?= $game=='lobby'?'active':''?>">Lobby</a>
<a href="?game=wingo" class="<?= $game=='wingo'?'active':''?>">Win Go 1Min</a>
<a href="?game=fortune" class="<?= $game=='fortune'?'active':''?>">Fortune Gems</a>
<a href="?game=card" class="<?= $game=='card'?'active':''?>">Card Game</a>
<a href="?game=jili" class="<?= $game=='jili'?'active':''?>">Jili Fishing</a>
</div>

<?php if($game=='lobby'): ?>
<div class="card"><h3>🎮 Main Lobby - બધી ગેમ અહીંથી ખુલે</h3><p style="opacity:0.7;margin-top:10px">આ Educational Purpose માટે છે. આમાંથી કોઈ પણ Game પર ક્લિક કરો.</p>
<div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:15px">
<a href="?game=wingo" style="background:#1a2a4a;padding:20px;border-radius:10px;text-align:center;color:#fff;text-decoration:none">Win Go<br>🎯</a>
<a href="?game=fortune" style="background:#2a1a4a;padding:20px;border-radius:10px;text-align:center;color:#fff;text-decoration:none">Slots<br>💎</a>
<a href="?game=card" style="background:#1a4a2a;padding:20px;border-radius:10px;text-align:center;color:#fff;text-decoration:none">Card<br>🃏</a>
<a href="?game=jili" style="background:#4a2a1a;padding:20px;border-radius:10px;text-align:center;color:#fff;text-decoration:none">Fishing<br>🐟</a>
</div></div>

<?php elseif($game=='wingo'): ?>
<div class="card"><div style="text-align:center;color:gold">WINGO - 1 MIN</div>
<div class="timer" id="tm">00:59</div>
<div style="text-align:center;font-size:11px;opacity:0.5">Round: RCW202411090059</div>
<div style="display:flex;gap:10px;margin-top:15px"><button class="btn g">GREEN</button><button class="btn v">VIOLET</button><button class="btn r">RED</button></div>
<div class="nums"><button>0</button><button>1</button><button>2</button><button>3</button><button>4</button><button>5</button><button>6</button><button>7</button><button>8</button><button>9</button></div>
<button class="place" onclick="alert('Demo Bet Placed! ₹50 on Green')">PLACE BET</button>
<div style="margin-top:10px"><small>Recent: <span style="color:green">● 1</span> <span style="color:violet">● 5</span> <span style="color:red">● 9</span></small></div>
</div>
<script>let s=59;setInterval(()=>{s--;if(s<0)s=59;document.getElementById('tm').innerText='00:'+(s<10?'0'+s:s)},1000)</script>

<?php elseif($game=='fortune'): ?>
<div class="card"><h3>💎 FORTUNE GEMS - SLOTS</h3><div style="text-align:center;margin:10px">Balance: ₹<span id="bal">1000</span></div>
<div class="slot"><div id="r1">💎</div><div id="r2">👑</div><div id="r3">💰</div></div>
<button class="place" onclick="spin()">SPIN - ₹20</button><div id="res" style="text-align:center;margin-top:10px"></div></div>
<script>
let bal=1000; const sym=["💎","👑","💰","🪙"];
function spin(){ if(bal<20){alert("Balance low!");return;} bal-=20; document.getElementById('bal').innerText=bal;
let a=sym[Math.floor(Math.random()*4)],b=sym[Math.floor(Math.random()*4)],c=sym[Math.floor(Math.random()*4)];
document.getElementById('r1').innerText=a;document.getElementById('r2').innerText=b;document.getElementById('r3').innerText=c;
if(a==b && b==c){bal+=100;document.getElementById('res').innerText="🎉 Jackpot! +₹100";}else if(a==b||b==c){bal+=40;document.getElementById('res').innerText="Win +₹40";}else{document.getElementById('res').innerText="❌ No win";} document.getElementById('bal').innerText=bal; }
</script>

<?php elseif($game=='card'): ?>
<div class="card"><h3>🃏 RUMMY - Higher Card Wins</h3><div style="display:flex;justify-content:space-around;margin:20px 0"><div><div>Your Card</div><div id="uc" style="font-size:50px">?</div></div><div><div>Dealer</div><div id="dc" style="font-size:50px">?</div></div></div>
<button class="place" onclick="playCard()">DEAL CARDS - ₹50</button><div id="cres" style="text-align:center;margin-top:10px"></div></div>
<script>function playCard(){let u=Math.floor(Math.random()*13)+1,d=Math.floor(Math.random()*13)+1;document.getElementById('uc').innerText=u;document.getElementById('dc').innerText=d;document.getElementById('cres').innerText=u>d?'🎉 You Win!':'❌ You Lose!';}</script>

<?php elseif($game=='jili'): ?>
<div class="card"><h3>🐟 JILI HAPPY FISHING - API Connector</h3>
<p style="font-size:12px;opacity:0.7;margin:10px 0">આ ત્રીજી પાર્ટી Game છે. આ `<iframe>` માં લોડ થાય. આ માટે તમારે JILI પાસેથી Merchant ID અને Key લેવું પડે.</p>
<div style="background:#000;height:300px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-direction:column">
<div style="font-size:50px">🎣</div><p>Jili Game iFrame Here</p>
<small style="opacity:0.5">API URL: https://jiligames.com/launch</small>
<p style="margin-top:10px;font-size:11px">Code: $signature = md5(MERCHANT_ID + userId)</p>
</div>
<div style="background:#1a1a00;padding:10px;border-radius:8px;margin-top:10px;font-size:11px">
<strong>Callback System:</strong><br>
1. Deduct: wallet_callback.php માંથી ₹20 કપાય<br>
2. Win: Win થાય તો +₹100 ઉમેરાય
</div>
</div>
<?php endif; ?>

</body>
</html>
