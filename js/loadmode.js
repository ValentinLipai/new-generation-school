jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
    $('.blog-load-more').on('click', function(){

        var button = $(this),
            data = {
                'action': 'load_more_posts',
                'query': $(this).data('query'),
                'current_page' : $(this).data('page')
            };

        $.ajax({ // you can also use $.post here
            url : '/wp-admin/admin-ajax.php', // AJAX handler
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text('Загрузка...'); // change the button text, you can also add a preloader image
            },
            success : function( response ){
                console.log(response)
                if( response.success ) {
                    button.text( 'Показать еще' );
                    console.log(button.parent());
                    console.log(button.parent().prev());
                    button.parent().prev().append(response.data); // insert new posts
                    button.data('page', Number(button.data('page')) + 1);

                    if ( button.data('page') === button.data('max') )
                        button.remove(); // if last page, remove the button
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
});

//
// const ajaxLoadMore = () => {
//
//     const button = document.querySelector('.load-more');
//
//     if (typeof (button) != 'undefined' && button != null) {
//
//         button.addEventListener('click', (e) => {
//             e.preventDefault();
//
//             let current_page = document.querySelector('.posts-list').dataset.page;
//             let max_pages = document.querySelector('.posts-list').dataset.max;
//
//             let params = new URLSearchParams();
//             params.append('action', 'load_more_posts');
//             params.append('current_page', current_page);
//             params.append('max_pages', max_pages);
//
//             axios.post('/wp-admin/admin-ajax.php', params)
//                 .then(res => {
//
//                     let posts_list = document.querySelector('.posts-list');
//
//                     posts_list.innerHTML += res.data.data;
//
//                     let getUrl = window.location;
//                     let baseUrl = getUrl.protocol + "//" + getUrl.host + "/";
//
//                     window.history.pushState('', '', baseUrl + 'page/' + (parseInt(document.querySelector('.posts-list').dataset.page) + 1));
//
//                     console.log(parseInt(document.querySelector('.posts-list').dataset.page));
//
//                     document.querySelector('.posts-list').dataset.page++;
//
//                     if (document.querySelector('.posts-list').dataset.page == document.querySelector('.posts-list').dataset.max) {
//                         button.parentNode.removeChild(button);
//                     }
//
//                 })
//
//         });
//
//     }
//
// }