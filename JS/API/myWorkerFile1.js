function timeCounter(){
    postMessage(Date());
    setTimeout("timeCounter()", 1000);
}

timeCounter();