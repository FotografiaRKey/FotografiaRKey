var menu=document.getElementById('foto');
var altura=menu.offsetTop
window.addEventListener('scroll', function()
{
   if(this.window.pageXOffset>altura){
   foto.classList.add('fixed');
}else{
    foto.classList.remove('fixed');
}
})

/*contacto*/
var inputs = document.getElementsByClassName('formulario__input');
for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('keyup', function(){
    if(this.value.length>=1) {
      this.nextElementSibling.classList.add('fijar');
    } else {
      this.nextElementSibling.classList.remove('fijar');
    }
  });
}