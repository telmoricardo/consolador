/*  -------------CODIGO JS COM EFEITO TRANSITIONS BOX------------*/

$(document).ready(function() {
    $('.list-btn-table .btn_table[table="markeOne"]').addClass('active_');
    //	$('.btn_list ').addClass('active_');

    /*  -------------FILTRANDO TODOS OS PRODUTO------------*/
    $('.btn_table').click(function(event) {
        event.preventDefault();
        var bxBtnRepertorie = $(this).attr('table');
        //			console.log(bxBtnRepertorie);
        /*  -------------AGREGANDO CLASSE ACTIVE A TODOS SELECIONADOS------------*/
        $('.btn_table').removeClass('active_');
        $(this).addClass('active_');

        /*  -------------OCUTANDO PRODUTO------------*/
        $('.table_').css('transform', 'scale(0)');

        function hideRepertorie() {
            $('.table_').hide();
        }
        setTimeout(hideRepertorie, 400);
        /*  -------------MOSTRANDO PRODUTO------------*/
        function showRepertotie() {
            $('.table_[table="' + bxBtnRepertorie + '"]').show();
            $('.table_[table="' + bxBtnRepertorie + '"]').css('transform', 'scale(1)');
        }
        setTimeout(showRepertotie, 400);
    });

    /*  -------------MOSTRANDO TODOS PRODUTO------------*/
    $('.btn_table[table="all"]').click(function() {
        function showAll() {
            $('.table_').hide();
            //			$('.table_').css('transform', 'scale(1)');
        }
        setTimeout(show, 400);
    });

});