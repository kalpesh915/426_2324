let count = 0;

function timeCounter(){
    count++;
    postMessage(count);

    setTimeout("timeCounter()", 1000);
}

timeCounter();