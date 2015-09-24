var clickedTime;
var createdTime;
var reactionTime;

function getRandomColor(){
    var letters = '0123456789ABCDEF'.split('');
    var color='#';
    for (var i = 0; i<6; i++){
        color += letters[Math.round(Math.random()*15)];
        
    }
    return color;
}



function makeBox(){
    
    var time = Math.random();
    time = time * 5000;
    setTimeout(function(){
               if(Math.random()>0.5){
               document.getElementById("simpleBox").style.borderRadius="100px";
               
               }
               else{
               document.getElementById("simpleBox").style.borderRadius="0px";
               }
               var top = Math.random();
               top = top*300;
               var left = Math.random();
               left = left*500;
               document.getElementById("simpleBox").style.top=top+"px";
               document.getElementById("simpleBox").style.left=left+"px";
               document.getElementById("simpleBox").style.backgroundColor=getRandomColor();
               document.getElementById("simpleBox").style.display="block";
               createdTime = Date.now();
               
               }, time);
    
    
    
    
}
var start = false;
document.getElementById("start").onclick = function(){
    if (start==false){
        start = true;
        makeBox();
        this.innerHTML="Quit";
    }
    else{
        start = false;
        document.getElementById("simpleBox").style.display="none";
        this.innerHTML="Ready GO!";
    }
}


document.getElementById("simpleBox").onclick = function(){
    clickedTime = Date.now();
    reactionTime = (clickedTime - createdTime)/1000;
    document.getElementById("time").innerHTML=reactionTime;
    this.style.display="none";
    if(start==true){
       makeBox();
    }
    else{
       document.getElementById("simpleBox").style.display="none";
    }
    
}

