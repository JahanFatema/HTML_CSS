function showDateTime() {
    let now = new Date();                
    let date = now.toLocaleDateString();  
    let time = now.toLocaleTimeString();  

    document.getElementById("datetime").innerHTML =
        "Date: " + date + "<br>Time: " + time;
}

setInterval(showDateTime, 1000);
showDateTime();