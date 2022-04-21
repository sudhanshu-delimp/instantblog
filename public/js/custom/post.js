let token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute('content');

let post_select = document.getElementById('post_select');
let sub_post_select = document.getElementById('sub_post_select');
var data = {};

post_select.onchange = function(){
    data['tag_id'] = this.value;
    if(typeof postId !== 'undefined'){
        data['post_id'] = postId;
    }
    fetch(getChildTagsURL, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            Accept: 'application/json, text-plain, */*',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': token,
        },
        body: JSON.stringify(data),
    })
    .then((response) => response.json())
    .then((data) => {
        console.log(data);
        let tagString='';
        if(data.childTags.length > 0){
            data.childTags.forEach(element=>{
                var select = (data.selected_tag==element.id)?'selected':'';
                tagString +='<option value="'+element.id+'" '+select+'>'+element.title+'</option>';
            });
        }
        sub_post_select.innerHTML = tagString;
    });
}

if(typeof postId !== 'undefined'){
    post_select.dispatchEvent(new Event("change"));
}