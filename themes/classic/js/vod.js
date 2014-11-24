jQuery(function(){
    
});

jQuery('#btn-logout').on('click', function() {
//    if (confirm("Deseja sair do sistema?")) {
        window.location = '/vod/acesso/logout';
//    }
});

jQuery('#btn-login').on('click', function() {
//    if (confirm("Deseja sair do sistema?")) {
        window.location = '/vod/acesso/login';
//    }
});
