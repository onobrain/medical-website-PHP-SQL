// >> focus : 
const inputs = document.querySelectorAll(".form__input");
// >> add focus : 
function addfocus(){
    let parent = this.parentNode.parentNode
    parent.classList.add('focus');
}
// >> remove focus : 
function removefocus(){
    let parent = this.parentNode.parentNode
    if(this.value == ""){
        parent.classList.remove('focus');
    }
}
inputs.forEach(input => {
    input.addEventListener('focus',addfocus);
    input.addEventListener('blur',removefocus)
});