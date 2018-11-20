//#snd 접근법
/* $("#snd")
document.getElementById("snd") //바닐라자바스크립트(순수자바스크립트) ->ES5
document.querySelector("#snd")//firebase,php 순수자바스크립트 ->ES6*/

///내가 한것
/* $("#bt_play").click(function(){
    $("#snd")[0].play();
    $(this).removeClass("fa-play-circle").addClass("fa-pause-circle");
    $(this).click(function(){
        $("#snd")[0].pause();
        $(this).removeClass("fa-pause-circle").addClass("fa-play-circle");
    });
}); */

//1번 제이쿼리
/* $("#bt_play").click(function(){
    if($("#snd")[0].paused){
        $("#snd")[0].play();
        $(this).removeClass("fa-play-circle").addClass("fa-pause-circle");
    }
    else{
        $("#snd")[0].pause();
        $(this).removeClass("fa-pause-circle").addClass("fa-play-circle");
    }
}); */

//3번 순수 자바스크립트
/* document.querySelector("#bt_play").addEventListener("click", function(){
    if(document.querySelector("snd").paused){
        document.querySelector("snd").play();
        this.classList.toggle("fa-play-circle" , false);
        this.classList.toggle("fa-pause-circle", true);
    }
    else {
        document.querySelector("snd").pause();
        this.classList.toggle("fa-play-circle" , true);
        this.classList.toggle("fa-pause-circle", false);
    }
}); */

//위에꺼를 이런식으로 많이 사용
var snd = document.querySelector("#snd");
var bt_play = document.querySelector("#bt_play");
bt_play.addEventListener("click", soundPlay);
function soundPlay(){
    if(snd.paused){
        snd.play();
        this.classList.toggle("fa-play-circle" , false);
        this.classList.toggle("fa-pause-circle", true);
    }
    else{
        snd.pause();
        this.classList.toggle("fa-play-circle" , true);
        this.classList.toggle("fa-pause-circle", false);
    }
}

