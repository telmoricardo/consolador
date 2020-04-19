/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
    $(".modal-express-ajax").on('click', function(e){
       e.preventDefault();
       $('.modal_express').html('carregando...');
       $('.bx_modal_express').show();
       var link = $(this).attr('href');
       
       $.ajax({
            url: 'ajax/contratar.php',
            type: 'GET',
            success: function (html) {
                $('.modal_express').html(html);
            }
        });
    });
    
    $('#btn-closer-express').click(function(){
        $('.bx_modal_express').hide();
    });
    
});


