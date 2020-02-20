// Tooltips Initialization
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

window.addEventListener('load', function(){
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var form = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(form, function(form){
        form.addEventListener('submit', function(event){
            if(form.checkValidity() === false){
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
}, false);

// headroom

// $ grab an element
var myElement = document.querySelector("#header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init();

if(document.querySelector('.load_gallery')){
    document.querySelector('.load_gallery').addEventListener('click', function(e){
        e.preventDefault();
        let lightboxes = document.querySelectorAll('.lightbox');
        lightboxes[3].click();
    });
}