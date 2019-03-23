
var racenum = "";
for( var i=1; i<13; i++){
    racenum += `<option>${i}R</option>`;
} 
$('#rSelect').html(racenum);

var betmoney = "";
for( var i=100; i<=2000; i+=100){
    betmoney += `<option>${i}円</option>`;
} 

$('#pSelect').html(betmoney);