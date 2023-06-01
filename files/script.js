window.onload=slider;
function slider(){
    let pics=document.getElementsByClassName('img');
    console.log(pics);
    for(let x=pics.length-1; x > -1; x--){
        if(x == 0){
            for(let i = 0; i < pics.length; i++) pics[i].removeAttribute('style');
            break;

        }
    if(!pics[x].getAttribute('style')){
        pics[x].style.opacity=0;
        break;
    }
        
    }
    setTimeout(slider,6000);
}