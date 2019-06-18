var d = document;

d.getScroll = function(){
    if(window.pageYOffset != undefined){
        return [pageXOffset, pageYOffset];
    }else{
        var sx, sy, d = document,
            r = d.documentElement,
            b = d.body;
        sx = r.scrollLeft || b.scrollLeft || 0;
        sy = r.scrollTop || b.scrollTop || 0;
        return [sx, sy];
    }
}

document.addEventListener('DOMContentLoaded', function(){
    let header = d.getElementsByTagName('header');
    header = header[0];
    window.addEventListener('scroll', function (event){
        let scroll = this.scrollY;
        this.console.log(scroll);
        if(scroll <= 80){
            header.classList.add('top-top-menu');
            header.classList.remove('top-menu');
            header.classList.remove('bottom-menu');
        }else if(scroll <= 600){
            header.classList.remove('top-top-menu');
            header.classList.add('top-menu');
            header.classList.remove('bottom-menu');
        }else{
            header.classList.remove('top-top-menu');
            header.classList.remove('top-menu');
            header.classList.add('bottom-menu');
        }
    });
});