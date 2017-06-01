window.onload = function(){
    var content ;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = test;
    xhr.open('get','switch.html',true);
    xhr.send(null);
}

function test(){
    //  console.log(xhr.readyState);
     alert(xhr.readyState);
     if( xhr.readyState == 4){
         content = xhr.responseText;
         alert(content);
     }
}