$(document).ready(function () {
    $('.minimizar').click(function () {
        $('.sidebar-wrapper').toggleClass('min-sidenav');
        $('.page-content').toggleClass('flex-page');
    });

    $('.reload').click(function () {
        location.reload();
    });
});

$(document).ready(function () {
    var $campo = $(".valorR");
    var $nome = $("#nome");
    $campo.mask('#.##0.00', { reverse: true });
});

jQuery('#nome').keyup(function () {
    var caps = jQuery('#nome').val();
    caps = caps.charAt(0).toUpperCase() + caps.slice(1);
    jQuery('#nome').val(caps);
});
//UPDATE SEM REFRESH
$(document).ready(function (event) {
    
    $('a[data-role=pagoBtn]').click(function (e) {
        var nome = $(this).data('name');
        var mes = $(this).data('mes');
        $.ajax({
            url: 'http://localhost/Controle%20de%20Cartão/pago',
            type: 'POST',
            data: { nome: nome, mes: mes },
            cache: false,
            dataType: 'html',
            success: function (error) {
                console.log(error);
                location.reload(true);            
            }
        });
    });
    $('button[data-role=fecharPag]').click(function () {
        var nome = $(this).data('name');
        var mes = $(this).data('mes');
        $.ajax({
            url: 'http://localhost/Controle%20de%20Cartão/remPago',
            type: 'POST',
            data: { nome: nome, mes: mes},
            cache: false,
            success: function (response) {
                console.log(response);
                location.reload(true);
            }
            
        });

    });
    //SAIR
    $('a[data-role=sair]').click(function () {
        var usuario = $(this).data('user');
        $.ajax({
            url: 'http://localhost/Controle%20de%20Cartão/sair',
            type: 'POST',
            data: { usuario: usuario },
            cache: false,
            success: function (response) {
                console.log(response);
                window.location.href = "http://localhost/Controle%20de%20Cartão/";
            }

        });

    });

    $('.formAdd').hide();
    $('#addCompra').click(function () {
        $('.formAdd').show(); 
        $('#addCompra').hide(); 
    });
    $('#close').click(function () {
        $('.formAdd').hide();
        $('#addCompra').show(); 
    });
    $('#cadAjax').submit(function () {
        $.ajax({
            url: 'http://localhost/Controle%20de%20Cartão/cadCompra',
            type: 'POST',
            data: $('#cadAjax').serialize(),
            cache: false,
            success: function (response) {
                console.log(response);
            }

        });
    });
    $('button[data-role=Edit]').click(function () {
        var id = $(this).data('id');
        //MOSTRAR INPUTS
        $('#nomeComp'+id).show(); 
        $('#valor'+id).show(); 
        $('#cartao'+id).show(); 
        $('#parcela'+id).show(); 
        $('#usuario'+id).show(); 
        //MOSTAR BOTOES
        $('#SendEdit'+id).show(); 
        $('#Cancel'+id).show(); 
        $('#'+id).hide(); 
        $('#del'+id).hide(); 
        $('#Cancel' + id).click(function () {
            //REMOVER INPUTS
            $('#nomeComp' + id).hide();
            $('#valor' + id).hide();
            $('#cartao' + id).hide();
            $('#parcela' + id).hide();
            $('#usuario' + id).hide();
            //REMOVER BOTOES
            $('#SendEdit' + id).hide();
            $('#Cancel' + id).hide();
            $('#' + id).show();
            $('#del' + id).show();
        });
        //FORM UPDATE
        $('#editAjax'+id).submit(function () {
            $.ajax({
                url: 'http://localhost/Controle%20de%20Cartão/editComp',
                type: 'POST',
                data: $('#editAjax' + id).serialize(),
                cache: false,
                success: function (response) {
                    console.log(response);
                    location.reload(true);
                }
    
            });
        });   
    });
    $('.delete').click(function () {
        dados = {
            id: $(this).data('id')
        };
        $.ajax({
            url: 'http://localhost/Controle%20de%20Cartão/delComp',
            type: 'POST',
            data: dados,
            cache: false,
            success: function (response) {
                console.log(response);
                location.reload();
            }

        });
    });
    $('#JaTem').submit(function () {
            $.ajax({
                url: 'http://localhost/Controle%20de%20Cartão/addDinheiro',
                type: 'POST',
                data: $('#JaTem').serialize(),
                cache: false,
                success: function (response) {
                    console.log(response);
                }    
            });
        });
    $('#UpJaTem').submit(function () {
        $.ajax({
            url: 'http://localhost/Controle%20de%20Cartão/UpAddDinheiro',
            type: 'POST',
            data: $('#UpJaTem').serialize(),
            cache: false,
            success: function (response) {
                console.log(response);
            }
        });
    });
    //PAGO NA SEÇÃO DE DETALHES
    var url = window.location.href;
    var nome = url.split("/")[url.split("/").length - 1];
    var mes = url.split("/")[url.split("/").length - 2];
    var ano = url.split("/")[url.split("/").length - 3];
    //NUBANK
    $('#JaTemDtlsNu').click(function () {
        Cookies.set('pagoNu'+ nome, $('#PgNu').show(), { expires: 365 });

    });
    $('#closeNu').click(function () {
        Cookies.remove('pagoNu'+ nome);
        $('#PgNu').hide()
    });
    if (Cookies.get('pagoNu'+ nome) == null) {
        $('#PgNu').hide()
    } else {
        $('#PgNu').show()
    }

    //PAG
    $('#JaTemDtlsPa').click(function () {
        Cookies.set('pagoPa' + nome, $('#PgPa').show(), { expires: 365 });
    });
    $('#closePa').click(function () {
        Cookies.remove('pagoPa' + nome);
        $('#PgPa').hide()
    });
    if (Cookies.get('pagoPa' + nome) == null) {
        $('#PgPa').hide()
    } else {
        $('#PgPa').show()
    }
    //CREDCARD
    $('#JaTemDtlsCr').click(function () {
        Cookies.set('pagoCr' + nome, $('#PgCr').show(), { expires: 365 });
    });
    $('#closeCr').click(function () {
        Cookies.remove('pagoCr' + nome);
        $('#PgCr').hide()
    });
    if (Cookies.get('pagoCr' + nome) == null) {
        $('#PgCr').hide()
    } else {
        $('#PgCr').show()
    }
    //DIGIO
    $('#JaTemDtlsDi').click(function () {
        Cookies.set('pagoDi' + nome, $('#PgDi').show(), { expires: 365 });
    });
    $('#closeDi').click(function () {
        Cookies.remove('pagoDi' + nome);
        $('#PgDi').hide()
    });
    if (Cookies.get('pagoDi' + nome) == null) {
        $('#PgDi').hide()
    } else {
        $('#PgDi').show()
    } 
   
});




