let parent_category = document.getElementById('parent_category');
parent_category.onchange = function(){
    if(this.value>0){
        document.getElementById('onHome').setAttribute('disabled','disabled');
    }
    else{
        document.getElementById('onHome').removeAttribute('disabled');
    }
}