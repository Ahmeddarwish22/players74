let ad=document.getElementById('ad')
window.onscroll=function(){
    if(scrollX >=0)
    {
        ad.style.display='block';
    }
    else{
        ad.style.display='none';
    }
    ad.onclick=function(){
        scroll({
            left:0,
            top:0,
            behavior:"smooth"
        })
    }

}