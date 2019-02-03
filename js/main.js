function getColor() {
    var radios = document.getElementsByName('Choice');
    var chosen = 0;
    for (var i = 0; i < radios.length; i++){
        if (radios[i].checked){
            chosen = i;
            break;
        }
    }
    if(chosen === 0){
        peiqi();
    }
    else if(chosen == 1){
        winnie();
    }
    else if(chosen === 2){
        xiongben();
    }

}

function Validate(){
    getColor();
    if ( ( document.getElementsByName('Choice')[0].checked === false ) && ( document.getElementsByName('Choice')[1].checked === false ) && ( document.getElementsByName('Choice')[2].checked === false )) {
        alert ( "Please choose your Image!" );
    }
    if ( ( document.getElementById("favcolor1").value === "#000000" ) || ( document.getElementById("favcolor2").value === "#000000" ) || ( document.getElementById("favcolor3").value === "#000000" )) {
        alert ( "Please choose your color!" );
    }
}

function ajaxImage() {
    $.ajax({
        url: "upload_file.php",
        type: "GET",
        success: function (e) {
            callBack(e);
        },
        error: function (request, status, error) {
            console.log("AJAX error! Flag:" + flag);
        }
    });
}
function hext(hex) {
    var res = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return res ? {
        r: parseInt(res[1], 16),
        g: parseInt(res[2], 16),
        b: parseInt(res[3], 16)
    } : null;
}

function callBack(result) {
    if(result === "false"){
       alert("No"); 
    }
    else{
       alert(result);
    }
}
function peiqi(){
    var r= document.getElementById("favcolor1").value;
    var g = document.getElementById("favcolor2").value;
    var b = document.getElementById("favcolor3").value;
          var c = document.getElementById("myCanvas");
          var ctx = c.getContext("2d");
          var img = document.getElementById("fr");
          ctx.drawImage(img, 0, 0);
          var imgData = ctx.getImageData(0, 0, c.width, c.height);
          var i;
          for (i = 0; i < imgData.data.length; i += 4) {
              if(imgData.data[i] >= 150 && imgData.data[i] <= 255 && imgData.data[i + 1] < 100){
                  imgData.data[i] = hext(r).r;
                  imgData.data[i + 1] = hext(r).g;
                  imgData.data[i + 2] = hext(r).b;
                  imgData.data[i + 3] = 255;
              }
              else if(imgData.data[i] >= 150 && imgData.data[i] <= 255 && imgData.data[i + 2] > 210){
                  imgData.data[i] = hext(g).r;
                  imgData.data[i + 1] = hext(g).g;
                  imgData.data[i + 2] = hext(g).b;
                  imgData.data[i + 3] = 255;
              }
              else {
                  imgData.data[i] = hext(b).r;
                  imgData.data[i + 1] = hext(b).g;
                  imgData.data[i + 2] = hext(b).b;
                  imgData.data[i + 3] = 255;
              }


          }
          ctx.putImageData(imgData, 0, 0);

}
function winnie(){
        var r= document.getElementById("favcolor1").value;
    var g = document.getElementById("favcolor2").value;
    var b = document.getElementById("favcolor3").value;
          var c = document.getElementById("myCanvas");
          var ctx = c.getContext("2d");
          var img = document.getElementById("sd");
          ctx.drawImage(img, 0, 0);
          var imgData = ctx.getImageData(0, 0, c.width, c.height);
          var i;
          for (i = 0; i < imgData.data.length; i += 4) {
              if(imgData.data[i] >= 100 && imgData.data[i] <= 255 && imgData.data[i + 1] >= 100 && imgData.data[i + 1] <= 255){
                  imgData.data[i] = hext(r).r;
                  imgData.data[i + 1] = hext(r).g;
                  imgData.data[i + 2] = hext(r).b;
                  imgData.data[i + 3] = 255;
              }
              else if(imgData.data[i] < 50 && imgData.data[i + 1] < 50 && imgData.data[i + 2] < 50){
                  imgData.data[i] = hext(g).r;
                  imgData.data[i + 1] = hext(g).g;
                  imgData.data[i + 2] = hext(g).b;
                  imgData.data[i + 3] = 255;
              }
              else {
                  imgData.data[i] = hext(b).r;
                  imgData.data[i + 1] = hext(b).g;
                  imgData.data[i + 2] = hext(b).b;
                  imgData.data[i + 3] = 255;
              }


          }
          ctx.putImageData(imgData, 0, 0);
}
function xiongben(){
        var r= document.getElementById("favcolor1").value;
    var g = document.getElementById("favcolor2").value;
    var b = document.getElementById("favcolor3").value;
          var c = document.getElementById("myCanvas");
          var ctx = c.getContext("2d");
          var img = document.getElementById("th");
          ctx.drawImage(img, 0, 0);
          var imgData = ctx.getImageData(0, 0, c.width, c.height);
          var i;
          for (i = 0; i < imgData.data.length; i += 4) {
              if(imgData.data[i] > 150 && imgData.data[i] < 225){
                  //console.log(hext(r).r);
                  imgData.data[i] = hext(r).r;
                  imgData.data[i + 1] = hext(r).g;
                  imgData.data[i + 2] = hext(r).b;
                  imgData.data[i + 3] = 255;
              }
              else if(imgData.data[i] < 50 && imgData.data[i + 1] < 50 && imgData.data[i + 2] < 50){
                  imgData.data[i] = hext(g).r;
                  imgData.data[i + 1] = hext(g).g;
                  imgData.data[i + 2] = hext(g).b;
                  imgData.data[i + 3] = 255;
              }
              else if(imgData.data[i] > 90 && imgData.data[i]  < 150 
              && imgData.data[i + 1] > 90 && imgData.data[i + 1] < 150 
              && imgData.data[i + 2] > 90 && imgData.data[i + 2] < 150 ){
                  imgData.data[i] = hext(b).r;
                  imgData.data[i + 1] = hext(b).g;
                  imgData.data[i + 2] = hext(b).b;
                  imgData.data[i + 3] = 255;
              }


          }
          ctx.putImageData(imgData, 0, 0);
        
}