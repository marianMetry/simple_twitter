var likeBtns = document.getElementsByClassName('like-btn')

var likeAction = function () {
    let $id = this.getAttribute("data-id");

    fetch(baseUrl + '/post/' + $id + '/like', {
        headers: {
            'Content-Type': 'application/json',
        },
    })
        .then((response) => response.json())
        .then((response) => {
            // console.log('Success:', response.data.likes_count);
            this.getElementsByTagName('span')[0].innerHTML = response.data.likes_count;
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}

for (var i = 0; i < likeBtns.length; i++) {
    likeBtns[i].addEventListener('click', likeAction, false);
}
