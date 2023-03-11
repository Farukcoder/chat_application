import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function (){
    $(document).on('click','#send_message',function (e){
        e.preventDefault();

        let username = $('#username').val();
        let message = $('#message').val();
        if (username == '' || message == ''){
            alert('please enter both username and message');
            return false;
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method:'post',
            url:'/send-message',
            data: {username:username, message:message},
            success:function (res){

            }
        });
    });
});

window.Echo.channel('chat')
    .listen('.message',(e)=>{
        $('#messages').append('<li class="d-flex justify-content-between mb-4"><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar" class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60"><div class="card"><div class="card-header d-flex justify-content-between p-3"><p class="fw-bold mb-0">'+ e.username +'</p><p class="text-muted small mb-0"><i class="far fa-clock"></i></p></div><div class="card-body"><p class="mb-0">'+ e.message +'</p></div></div></li>');
        $('#message').val();
    });
