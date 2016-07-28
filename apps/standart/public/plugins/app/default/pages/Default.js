$(function () {
    /**
     *    Estanciado para todo o projeto
     */
    $(".maskDate").mask("99/99/9999");
    $(".maskDatetime").mask("99/99/9999 99:99");
    $(".maskCep").mask("99999-999");
    $(".maskPlacaVeiculo").mask("AAA-9999");

    $(".rg").mask("99.999.999-9");
    $(".maskCpf").mask("999.999.999-99");
    $(".maskCnpj").mask("99.999.999/9999-99");

    var maskPhone = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        options   = {
            onKeyPress: function (val, e, field, options) {
                field.mask(maskPhone.apply({}, arguments), options);
            }
        }
    $('.maskPhone').mask(maskPhone, options);

    $(".maskPercent").mask('00.0000', {reverse: true});
    $(".maskBRLPercent").mask('00,0000', {reverse: true});
    $(".maskPercent100").mask('000.0000', {reverse: true});
    $(".maskBRLCurrency").mask('000.000.000.000.009,9999', {reverse: true});
    $(".maskUSDCurrency").mask('000,000,000,000,009.9999', {reverse: true});

    /**
     * Fixa o menu dos Modulos
     */
    $('.module-control-navbar').livequery(function () {
        $(this).affix({
            offset: {
                top: $('header').height()
                //top: 150
            }
        });
    });
    /**
     *    Fixa o menu dos Modulos FIM
     */

    /**
     *    Ações do MENU
     */
    $(this).on('click', "[data-system='menu']", function (e) {
        e.preventDefault();

        actionMenu($(this));
    });

    /**
     *    Remove a ABA e redireciona para a última
     */
    $(this).on('click', '.closeTab', function (e) {
        e.preventDefault();

        var tabContentId = $(this).parent().attr("href");

        $(this).parent().parent().remove(); //remove li of tab
        $("#content-tab a:last").tab('show'); // Select first tab
        $(tabContentId).remove(); //remove respective tab content
    });

    /**
     *    Remove todas as ABAS
     */
    $('#tabs-remove-all').click(function (e) {
        e.preventDefault();

        $('#content-tab li a.content-tab').not('a[module="tab_dashboard"]').not('a#content-tab-options', '#tabs-remove-all').parent().remove();
        $('.tab-content div.tab-content-module').not('#tab_dashboard').remove();
        $('#content-tab a:last').tab('show'); // Seleciona a ultima aberta
    });

    /**
     *    Ações do MENU FIM
     */

    /*
     *	Ações do Globais
     */

    /**
     *    Coloca e Tira seleção de toda a tabela do Datatables
     */
    $(document).on('click', '.btnTableSelectAll', function (e) {
        e.preventDefault();

        var divSelector = $(this).attr('data-datatables');

        dataTablesSelectDeselectAll(divSelector);
    });

    //$('#dashboard-search-menu div input').change(function(e){
    $('#menu-search-btn').click(function (e) {
        e.preventDefault();

        var str   = $('#menu-search-str').val().toLowerCase();
        str       = removeAcento(str);
        var limit = str.length;
        var menu  = '';

        $('#treeview-menu-search').html('').show();

        $.each($('#content-menu li a.sub-menu'), function (index, value) {
            var itemStr = $(value).text().trim().toLowerCase();
            itemStr     = removeAcento(itemStr);

            var re   = new RegExp(str.replace(' ', '.*'));
            var resp = re.test(itemStr);

            if (resp) {
                if (itemStr.length > 0 && str.length > 0) {
                    menu = $(value).parent().clone()[0];
                    $('#treeview-menu-search').append(menu).show();
                }
            }
        });

        if (menu != '') {
            $('.first-menu').hide();
        } else {
            $('#treeview-menu-search').html('').hide();
            $('.first-menu').show();
        }
    });

    /**
     *    JQUERY VALIDATE
     *    Valida campos com valor vazio
     */
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg !== value;
    }, "Campo obrigatório");


    /* Ações do Globais FIM */
});

/**
 *    Função para ações do menu
 *
 *    Abre uma TAB e seu Content no centro do Projeto
 */
function actionMenu(element) {

    var tabModule = $(element).attr('module');
    var tabId     = tabModule + '_tab';
    var tabTitle  = $(element).attr('title') || $(element).attr('data-original-title');
    var tabLink   = $(element).attr('href');
    var checkTab  = 0;

    if (tabModule == undefined || tabModule == '' || tabLink == '' || tabLink == undefined) {
        alert('Erro na configuração do LINK');
    } else {
        // Verifica se a TAB já não esta ativa, se estiver tem que dar FOCUS
        $('#content-tab li').each(function (index, value) {
            if ($(this).find('a').attr('module') == tabId) {
                checkTab = 1;
            }
        });

        // Cria a TAB caso não foi aberta
        if (checkTab == 0) {
            $('#content-tab').append('<li> <a href="#' + tabId + '" data-toggle="tab" module="' + tabId + '" title="' + tabTitle + '" class="content-tab">' + tabTitle + ' &nbsp; <i class="fa fa-times close closeTab"></i> </a> </li>');
            $('#tab-content').append('<div id="' + tabId + '" class="tab-pane tab-content-module active box noBorder" id="' + tabId + '" module="' + tabId + '"></div>');

            $('#content-tab li a[module="' + tabId + '"]').tab('show');

            //	Fecha automaticamente o Menu lateral direito
            $('body').addClass('sidebar-collapse');
            $('#menu-search-str').val('');
            $('#menu-search-btn').trigger('click').delay(500).queue(function () {
                loadContent(tabLink, '#' + tabId, '');
                $(this).dequeue()
            });

            // posiciona a página no topo
            $('html, body').animate({
                scrollTop: $("html").offset().top
            }, 1000);
        }
        // Da Focus na TAB
        else {
            // posiciona a página no topo
            $('html, body').animate({
                scrollTop: $("html").offset().top
            }, 1000);

            $('#content-tab li a[module="' + tabId + '"]').tab('show');
        }
    }
}

/* Funções Globais FIM */

function loadContent(url, loadDivSelector, parms, selectorLoad) {
    if (parms) {
        parms = '&' + parms;
    }

    if (selectorLoad) {
        loadingMessage('show', selectorLoad);
    }

    //	Adiciona a mensagem de carregando o Módulo
    $(loadDivSelector).html('Carregando Módulo. Aguarde...');

    $.get(url + parms, function (data, status, xhr) {
        if (status == "error") {
            if (loadDivSelector) {
                $("" + loadDivSelector).html(msg + xhr.status + " " + xhr.statusText);
            }

            if (selectorLoad) {
                loadingMessage('hide', selectorLoad);
            }
        } else {
            if (loadDivSelector) {

                /*
                 *Se a STRING RETORNADA for HTML, imprimir, se for JSON, tratar obj json
                 * JSON é retornado no caso de SESSION EXPIRADA [ LoginController.php -> ReloginAct(); ]
                 * */
                try {
                    data = JSON.parse(data);
                    if (data.status == 0) {
                        $(loadDivSelector).html(data.content + data.script);
                    } else {
                        $(loadDivSelector).html(data.script + data.content);
                    }
                } catch (ex) {
                    $(loadDivSelector).html(data);
                }

                if (selectorLoad) {
                    loadingMessage('hide', selectorLoad);
                }
            }
        }
    });
}

function loadContentJson(url, loadDivSelector, parms, divResponseAajx) {
    $.get(url + parms, function (data, status, xhr) {
        if (status == "error") {
            if (loadDivSelector) {
                $("" + loadDivSelector).html(msg + xhr.status + " " + xhr.statusText);
            }
        } else {
            if (loadDivSelector) {
                $(loadDivSelector).html(data);

                if (divResponseAajx) {
                    $(divResponseAajx).html(data.script);
                }
            }
        }
    });
}

function loadAjax(url, type, data) {
    if (url) {
        var type       = type ? type : 'GET';
        var data       = data ? data : '';
        var dataType   = dataType ? dataType : 'json';
        var beforeSend = beforeSend ? beforeSend : '';
        var response   = '';

        response = $.ajax({
            url: url,
            type: type,
            data: data,
            dataType: dataType,
            cache: false,
            beforeSend: function () {
                beforeSend
            }
        }).responseText;
        //response	= response.success(function(data){ return data; });

        return response;
    }
}

/**
 *    Redireciona para o local indicado
 *    Tira uma porcentagem do top por causa do navbar
 */
function scrollTop(target, adjust) {
    if (!adjust) {
        adjust = 0;
    }

    $('html, body').animate({
        scrollTop: $(target).offset().top + adjust
    }, 1000);
}

function navBarButtonAdd(navID, button) {
    $.each(button.reverse(), function (index, value) {
        $('#' + navID + ' .nav-buttons-actions').prepend(value);
    });
}

function createIfNotExistNavBar(modulePage) {
    var navBarStr = modulePage + 'NavBar';
    if ($('#' + navBarStr).length == 0) {
        var navBar = '<div id="' + navBarStr + '" class="module-control-navbar"> <nav class="navbar navbar-default navbar-static"><div class="container-fluid pull-right nav-buttons-actions"> <span id="" class="navBarActions"></span><i class="fa fa-minus"></i></button> </div> </nav> </div></div> </nav> </div>';

        if ($('#' + modulePage + 'body_content').length > 0) {
            $('#' + modulePage + 'body_content').prepend(navBar);
        } else if ($('#' + modulePage + 'form').length > 0) {
            $('#' + modulePage + 'form').prepend(navBar);
        }
    }
}
function navBarButtonChange(navID, button) {
    var buttons = '';

    $.each(button, function (index, value) {
        buttons += value + ' ';
    });

    $('#' + navID + ' .navBarActions').html(buttons);
}

function loadingMessage(toggle, divSelector, message) {
    var toggle          = (toggle == "show") ? toggle : 'hide';
    var divSelector     = divSelector ? divSelector : '';
    var divSelectorLoad = divSelector.replace('#', '');
    var message         = message ? message : 'Carregando';
    var styleLoad       = '<div id="' + divSelectorLoad + 'Load" class="overlay"> <i class="fa fa-refresh fa-spin"></i> </div>';


    if (divSelector) {
        switch (toggle) {
            case 'show':
                $(divSelector + 'Load').remove();
                $(divSelector).append(styleLoad);
                break;

            case 'hide':
                setTimeout(function () {
                    $(divSelector + 'Load').remove();
                }, 800);
                break;

            default:
                $(divSelector).append(styleLoad);
                break;
        }
    }
}

/**
 *    divSelector    = Div que sera aplicado
 *    tootle    = OPEN ou CLOSE
 */

function collapsedTable(divSelector, toggle, divCollapse) {
    var div = $(divSelector).get(0);
    var collapse = $(divCollapse).get(0);

    switch (toggle){
        case 'open':
            if ($(div).is(":hidden")) {
                $(collapse).trigger('click');
            }
            break;
        case 'close':
            if ($(div).is(":visible")) {
                $(collapse).trigger('click');
            }
            break;
        default:
            console.log('error');
    }
}

function alertModal(id, title, content, buttons) {
    var id      = id;
    var title   = title ? title : '';
    var content = content ? content : '';
    var buttons = buttons ? buttons : '';

    $(id + ' div.modal-header .modal-title').html(title);
    $(id + ' div.modal-body').html(content);
    $(id + ' div.modal-footer').html(buttons);

    $(id).modal();
}

function removeAcento(str) {
    return str.replace(/[áàâã]/g, 'a')
        .replace(/[éèê]/g, 'e')
        .replace(/[íìî]/g, 'i')
        .replace(/[óòôõ]/g, 'o')
        .replace(/[úùû]/g, 'u')
        .replace(/[çC]/g, 'cC');
}

$(document).on('change', '[data-recharge]', function () {
    var self        = this;
    var parentN     = $(this).parentNode;
    var recharge    = $(this).data('recharge').split(' ');
    var keyDataPost = $(this).data('key-data-post');
    var modulo      = $(this).data('modulo');
    if (typeof(keyDataPost) == 'undefined') {
        throw "Keydata post undefined";
        return false;
    }
    if (typeof(modulo) == 'undefined') {
        throw "modulo post undefined";
        return false;
    }
    var value;
    var target;
    if ($(this).hasClass("sig-autocomplete")) {
        target = $(this).data("target");
        value  = $('#' + target).val();
    } else if ($(this).hasClass("src-autocomplete")) {
        target = this.parentNode.parentNode.getElementsByClassName("selected_id")[0];
        value  = $(target).val();
    } else {
        value = $(this).val();
    }
    for (i in recharge) {
        var field       = $('#' + recharge[i], parentN).get(0);
        var urlRecharge = $(field).data('url-recharge');
        if (typeof(urlRecharge) == 'undefined') {
            throw "urlRecharge post undefined";
            continue;
        }
        $.ajax({
            url: urlRecharge,
            type: 'POST',
            data: keyDataPost + '=' + value + '&field=' + recharge[i],
            dataType: 'json',
            cache: false,
            beforeSend: function () {
                loadingMessage('show', '#' + modulo + 'tab');
            },
            success: function (data) {
                loadingMessage('hide', '#' + modulo + 'tab');
                //alert(data.content);
                $('#' + modulo + 'responseAjax').html(data.script);
            },
            error: function (erro) {
                loadingMessage('hide', '#' + modulo + 'tab');
            }
        });
    }
});

$(document).on('change', '[data-row-recharge]', function () {
    var parentN     = $(this).parentNode;
    var rowId       = $(this)
        .closest('tr') // Get the closest tr parent element
        .prevAll() // Find all sibling elements in front of it
        .length;
    var recharge    = $(this).data('row-recharge').split(' ');
    var keyDataPost = $(this).data('key-data-post');
    var modulo      = $(this).data('modulo');
    if (typeof(keyDataPost) == 'undefined') {
        throw "KeyDataPost undefined";
        return false;
    }
    if (typeof(modulo) == 'undefined') {
        throw "modulo undefined";
        return false;
    }
    var value;
    if ($(this).hasClass("sig-autocomplete")) {
        var target = $(this).data("target");
        value      = $('#' + target).val();
    } else {
        value = $(this).val();
    }
    for (i in recharge) {
        var field       = $('#' + recharge[i], parentN).get(0);
        var urlRecharge = $(field).data('url-recharge');
        if (typeof(urlRecharge) == 'undefined') {
            throw "urlRecharge undefined";
            continue;
        }
        $.ajax({
            url: urlRecharge,
            type: 'POST',
            data: keyDataPost + '=' + value + '&rowid=' + rowId + '&field=' + recharge[i],
            dataType: 'json',
            cache: false,
            beforeSend: function () {
                loadingMessage('show', '#' + modulo + 'tab');
            },
            success: function (data) {
                loadingMessage('hide', '#' + modulo + 'tab');
                //alert(data.content);
                $('#' + modulo + 'responseAjax').html(data.script);
            },
            error: function (erro) {
                loadingMessage('hide', '#' + modulo + 'tab');
            }
        });
    }
});


/* Funções Globais FIM */

/**
 *    Valida campos com valor vazio
 */
function lobiBoxMessage(type, title, msg, img, delay) {
    var type  = type ? type : 'success';
    var title = title ? title : '';
    var msg   = msg ? msg : '';
    var img   = img ? img : '';
    var delay = delay ? delay : 10000;

    Lobibox.notify(type, {
        img: img,
        delay: delay,
        title: title,
        msg: msg,
        closable: true,
        closeOnClick: true,
        sound: false,
        soundPath: 'public/plugins/lobibox-master/src/sounds/'
    });
}

/**
 *    Exemplo de utilização ->
 *    checkbox_prop('#<?php echo APP::$strModulePage; ?>select-all-pedido-venda',"#<?php echo APP::$strModulePage; ?>form [name='id_pedido_venda[]']");
 */
function checkbox_prop(selector, selector_target) {
    if ($(selector).is(':checked')) {
        $(selector_target).prop("checked", true);
    } else {
        $(selector_target).prop("checked", false);
    }
}

function number_format(number, decimals, dec_point, thousands_sep) {
    number         = (number + '')
        .replace(/[^0-9+\-Ee.]/g, '');
    var n          = !isFinite(+number) ? 0 : +number,
        prec       = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep        = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec        = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s          = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + (Math.round(n * k) / k)
                    .toFixed(prec);
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s              = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
        .split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '')
            .length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1)
            .join('0');
    }
    return s.join(dec);
}

/**
 * Adicionar no validator a função regex
 */
$.validator.addMethod(
    "regex",
    function (value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },
    "Por favor, verifique os dados."
);

$(document).on('keydown.autocomplete', '.sig-autocomplete', function () {
    var FieldSelect = $(this);
    var Fieldsource = $(this).data("source");
    var target      = $(this).data("target");

    $(this).autocomplete({
        source: Fieldsource,
        delay: 500,
        minLength: 1,
        select: function (event, ui) {
            $('#' + target).val(ui.item.id);
            $(FieldSelect).trigger('change');
        },
        change: function (event, ui) {
            // limpa o campo hidden caso não seja selecionado
            if (ui.item == null) {
                $('#' + target).val('');
            }
        }
    });
});

$.widget("custom.sigautocomplete", $.ui.autocomplete, {
    _create: function () {
        this._super();
        this.widget().menu("option", "items", "> :not(.ui-autocomplete-category)");
    },
    _renderItem: function (ul, item) {
        //Add the .ui-state-disabled class and don't wrap in <a> if value is empty
        if (item.value == 'disabled') {
            return $('<li class="ui-state-disabled">' + item.label + '</li>').appendTo(ul);
        } else {
            return $("<li>")
                .append("<a>" + item.label + "</a>")
                .appendTo(ul);
        }
    }

});

$(document).on('keydown.autocomplete', '.src-autocomplete', function (e) {
    var FieldSelect = this;
    var source      = this.getAttribute("data-source");
    var target      = this.parentNode.parentNode.getElementsByClassName("selected_id")[0];

    if (target == undefined) {
        alert("falta input hidden para armazenar ID do registro selecionado via AUTOCOMPELTE");
        return false;
    }

    //target.value = '';

    $(this).sigautocomplete({
        source: source,
        delay: 500,
        minLength: 1,
        select: function (event, ui) {
            target.value = ui.item.id;
            $(FieldSelect).trigger('change');
        },
        change: function (event, ui) {
            // limpa o campo hidden caso não seja selecionado
            if (ui.item == null) {
                target.value = '';
            }
        }
    });
});

var basicTable = {
    /*
     * e         = Elemento que esta chamando a função (this)
     * idt       = ID da tabela que o botão clicado pertence
     * modulo    = Nome do modulo que esta sendo lido
     * */
    addTableItens: function (e, idt) {
        var o = {
            Table: document.getElementById(idt),
            CloneTable: document.getElementById(idt + "_clone")
            //Cleaner: false
        };

        e1 = "Tabela para adicionar itens não possui ID. Verifique o ID passado em createBasicTable na view";
        e2 = "Tabela CLONE não existe. Verifique o parâmetro 'add-itens => true' em createBasicTable na view";

        if (o.Table == null || o.CloneTable == null) {
            ( o.Table == null ) ? alert(e1) : true;
            ( o.CloneTable == null ) ? alert(e2) : true;

            return false;
        }

        //Verificar se existe um input NUMBER para definir quantas TRS ira adicionar simultaneamente
        var containerQtdeClone = document.getElementById(idt + "_qtdeItensAdd");

        qtdeClone = 1;
        if (containerQtdeClone != null) {
            //Não permitir que adicione mais linhas do que definido em MAX
            qtdeClone = containerQtdeClone.value;

            var max = parseInt(containerQtdeClone.getAttribute("max"));
            if (max != null && qtdeClone > max) {
                return false;
            }
        }

        $('.last-inserted-row').removeClass('last-inserted-row');

        //Adicionar TRS conforme quantidade selecionada ou PREDEFINIDA
        var i     = 0;
        var tBody = o.Table.getElementsByTagName("tbody")[0];
        while (i < qtdeClone) {
            trClone           = o.CloneTable.getElementsByTagName('tbody')[0].getElementsByTagName("tr")[0].cloneNode(true);
            trClone.className = trClone.className + " last-inserted-row";
            tBody.appendChild(trClone);
            i++;
        }
    },

    addTableItensTree: function (e, idt) {
        var o = {
            Table: document.getElementById(idt),
            CloneTable: document.getElementById(idt + "_clone")
        };

        e1 = "Tabela para adicionar itens não possui ID. Verifique o ID passado em createBasicTable na view";
        e2 = "Tabela CLONE não existe. Verifique o parâmetro 'add-itens => true' em createBasicTable na view";

        if (o.Table == null || o.CloneTable == null) {
            ( o.Table == null ) ? alert(e1) : true;
            ( o.CloneTable == null ) ? alert(e2) : true;

            return false;
        }

        //Verificar se existe um input NUMBER para definir quantas TRS ira adicionar simultaneamente
        var containerQtdeClone = document.getElementById(idt + "_qtdeItensAdd");

        qtdeClone = 1;
        if (containerQtdeClone != null) {
            //Não permitir que adicione mais linhas do que definido em MAX
            qtdeClone = containerQtdeClone.value;

            var max = parseInt(containerQtdeClone.getAttribute("max"));
            if (max != null && qtdeClone > max) {
                return false;
            }
        }

        $('.last-inserted-row').removeClass('last-inserted-row');

        //Adicionar TRS conforme quantidade selecionada ou PREDEFINIDA
        var i             = 0;
        var tBody         = o.Table.getElementsByTagName("tbody")[0];
        var cloneTBody    = o.CloneTable.getElementsByTagName('tbody')[0];
        var trClone       = null;
        var trCloneHidden = null;

        while (i < qtdeClone) {
            trClone           = o.CloneTable.getElementsByTagName('tbody')[0].childNodes[0].cloneNode(true);
            trCloneHidden     = o.CloneTable.getElementsByTagName('tbody')[0].childNodes[1].cloneNode(true);
            trClone.className = trClone.className + " last-inserted-row";
            tBody.appendChild(trClone);
            tBody.appendChild(trCloneHidden);
            i++;
        }
    },

    deleteRow: function (e) {
        var row    = e.parentNode.parentNode;
        var parent = row.parentNode;
        parent.removeChild(row);
    },

    deleteTreeRow: function (e) {
        var row    = $(e).closest('tr').get(0);
        var next   = row.nextSibling;
        var parent = row.parentNode;
        parent.removeChild(row);
        parent.removeChild(next);
    }
};
/* Funções Globais FIM */


/***
 * Loading plugin
 */

$.fn.loadIcon = function (opts) {
    "use strict";
    var self = this;


    self.destroy = function () {
        self.find('span.fa.fa-refresh.fa-spin').delay(400).queue(function () {
            $(this).remove();
        });
    }

    self.create = function () {
        self.append('<span class="fa fa-refresh fa-spin"></span>');
    }

    if (opts.type == "show") {
        self.create();
    }

    if (opts.type == "hide") {
        self.destroy();
    }

    return this;
}

$.fn.deactivateForm = function () {
    "use strict";

    $('input:not(.notUnable), select:not(.notUnable), button:not(.notUnable) , textarea:not(.notUnable)', this).prop("disabled", true);
}

function expandTreeRow(obj) {
    "use strict";
    var tr       = $(obj).closest('tr').get(0);
    var nextText = $(tr).next('tr').toggle();
    $('i', obj).toggleClass('fa-plus fa-minus');
}


function getExtraFilter(module) {
    var combo = $('.' + module + 'extraFilterCombo');
    var data  = [];

    $(combo).each(function () {

        var opVal     = parseInt($(this).val());
        var columnN   = parseInt($(this).data('column'));
        var op        = $(this).closest('.extraFilter').get(0);
        var auxValues = null;
        var datatype  = $(op).data("datatype");

        switch (opVal) {
            case 1:
                data.push({
                    column: columnN,
                    type: opVal,
                    min: $('.' + module + 'min-filter', op).val(),
                    max: $('.' + module + 'max-filter', op).val(),
                    datatype: datatype
                });
                break;
            case 2:
                auxValues = [];
                $('.' + module + 'column-val', op).each(function () {
                    auxValues.push($(this).val());
                });

                data.push({
                    column: columnN,
                    type: opVal,
                    values: auxValues,
                    datatype: datatype
                });
                break;
            default:
                throw "Not implemented yet: " + opVal;
        }
    });

    return data;
}

function extraFilterChange(obj, module, idx) {
    var oldValue  = parseInt($(obj).data("old-value"));
    var extra     = $(obj).closest('.extraFilter');
    var classes   = $(extra).data("classfield");
    var newValue  = parseInt($(obj).val());
    var nameValue = $(extra).data("name");
    $(obj).data("old-value", newValue);
    var insertObj = null;

    switch (oldValue) {
        case 1:
            $('.min-filter', extra).remove();
            $('.max-filter', extra).remove();
            break;
        case 2:
        case 3:
            $('.filterVal', extra).remove();
            $('.filterBtn', extra).remove();
            $('.blankSpace', extra).remove();
            break;
    }


    switch (newValue) {
        case 1:
            insertObj = '<div class="form-group col-md-3 min-filter" >'
                + '<input name="' + nameValue + '[min][]" class="form-control ' + classes + ' ' + module + 'min-filter' + '" data-column="' + idx + '" id="' + module + 'column_min_' + idx + '" value="" type="text" data-placement="left" data-toggle="popover" data-content="" placeholder="minimo" aria-required="true">'
                + '</div>'
                + '<div class="form-group col-md-3 max-filter">'
                + '<input name="' + nameValue + '[max][]" class="form-control ' + classes + ' ' + module + 'max-filter" name="' + module + 'column_max_' + idx + '"  data-column="' + idx + '" id="' + module + 'column_max_' + idx + '" value="" type="text" data-placement="left" data-toggle="popover" data-content="" placeholder="máximo" aria-required="true">'
                + '</div>';
            $(extra).append(insertObj);
            break;
        case 2:
        case 3:
            insertObj = '<div class="form-group col-md-5 filterVal" >'
                + '<input name="' + nameValue + '[value][]" class="form-control ' + classes + ' ' + module + 'column-val" data-column="' + idx + '" value="" type="text" data-placement="left" data-toggle="popover" data-content="" placeholder="Buscar por" aria-required="true">'
                + '</div>'
                + '<div class="form-group col-md-1 filterBtn" >'
                + '<button type="button" class="btn btn-primary" onclick="insertExtraField(this, \'' + module + '\', ' + idx + ');">+</button>'
                + '</div>';
            $(extra).append(insertObj);
            break;
    }
}

function insertExtraField(obj, module, idx) {
    var extra     = $(obj).closest('.extraFilter');
    var nameValue = $(extra).data("name");
    var classes   = $(extra).data("classfield");
    insertObj     = '<div class="form-group col-md-6 blankSpace" >&nbsp;</div><div class="form-group col-md-5 filterVal" >'
        + '<input name="' + nameValue + '[value][]" class="form-control ' + classes + ' ' + module + 'column-val" data-column="' + idx + '" value="" type="text" data-placement="left" data-toggle="popover" data-content="" placeholder="Buscar por" aria-required="true">'
        + '</div>';
    $(extra).append(insertObj);
}

function showFilterRange(module) {
    $('.' + module + 'filterRange').toggleClass('hidden');
}

function triggerExport(button, module) {
    var table = window[module + 'Table'];
    buttons   = {
        "copy": 0,
        "csv": 1,
        "excel": 2,
        "pdf": 3,
        "print": 4,
        "columns": 5
    };
    table.button(buttons[button]).trigger();
}
function errorAjaxHandle(erro) {

    switch (erro.status) {
        case 404:
            lobiBoxMessage('error', 'error', 'Pagina não encontrada', '', '');
            break;
        case 500:
            lobiBoxMessage('error', 'error', 'Internal Server Error', '', '');
            break;
        case 200:
            var data        = erro.responseText;

            if ( SigFormUtils.DEBUG_MODE == true){
                var errorWindow = window.open("data:text/html;charset=UTF-8," + encodeURIComponent(data),
                    "_blank");

                if (typeof errorWindow != "undefined") {
                    errorWindow.focus();
                }
            }else{
                lobiBoxMessage('error', 'error', 'Ocorreu algum erro, contate administrador do sitema - Modo debug desabilitado', '', '');
            }

            break;
        default:
            if (typeof erro.responseText != "undefined") {
                lobiBoxMessage('error ' + erro.status, 'error', erro.responseText, '', '');
            } else {
                lobiBoxMessage('error', 'error', erro.statusText, '', '');
            }

    }
}
function lookupData(controller, field, e) {
    e.preventDefault();

    var tab       = $(field).closest('.tab-content-module').get(0);
    var tabID     = '#' + $(tab).attr("id");
    var formGroup = $(field).closest('.form-group').get(0);
    var dialog    = document.createElement("DIV");

    var dialogWidth  = tab.offsetWidth * 0.7;
    var dialogHeight = 450;

    try {


        if (controller == '') {
            throw  "Exception: controller is empty";
        }

        $.ajax({
            url: '?rt=' + controller + '&act=lookupData',
            type: 'GET',
            data: '',
            dataType: 'json',
            cache: false,
            beforeSend: function () {
                loadingMessage('show', tabID);
            },
            success: function (data) {


                $(dialog).attr('title', data.title);
                $(dialog).html(data.content);
                var tableDiv        = $(".table", dialog).get(0);
                var dataTableLookup = $(tableDiv).DataTable({
                    "ajax": {
                        "url": "?rt=" + controller + "&act=getTable",
                    },
                    "processing": true,
                    "serverSide": true,
                    "scrollY": false,
                    "sDom": '<"top"f>rt<"bottom"ip><"clear">',
                    "iDisplayLength": 5,
                    "language": {
                        "url": "public/plugins/datatables/lang-portugues.json"
                    },
                    "fnDrawCallback": function (oSettings) {
                        var body = $(this.context).closest("box-body").get(0);
                        $(".top", body).css("padding-top", "10px").css("padding-right", "10px");
                    }
                });


                $('.form-control', dialog).on('change', function (e) {
                    var data   = $(this);
                    var value  = data.val();
                    var column = data.attr('data-column');

                    /*
                     * Função para buscar por coluna
                     * params (table, valor, coluna)
                     */
                    dataTablesFilterByColumn(dataTableLookup, value, data.attr('data-column'));
                });


                $('tbody', tableDiv).on('click', 'tr', function () {
                    dataTablesSelectRow(this);
                });
                $('tbody', tableDiv).on('dblclick', 'tr', function () {
                    var id_registro = dataTablesGetData(dataTableLookup, this);

                    var codigo    = dataTablesGetData(dataTableLookup, this, data.fields.codigo);
                    var descricao = dataTablesGetData(dataTableLookup, this, data.fields.descricao);
                    $('input[type=hidden]', formGroup).val(id_registro);
                    $('input[type=text]', formGroup).val(codigo + ' - ' + descricao).trigger("change");

                    $(dialog).dialog("close");
                    loadingMessage('hide', tabID);

                });

                $(dialog).dialog(
                    {
                        modal: true,
                        width: dialogWidth,
                        height: dialogHeight,
                        beforeClose: function (event, ui) {
                            delete dialog;
                            delete dataTableLookup;
                            loadingMessage('hide', tabID);
                        },
                        create: function (event, ui) {
                            var widget = $(this).dialog("widget").get(0);
                            //$('.ui-dialog-titlebar-close', widget).html('<i class="fa fa-times-circle text-danger"></i>');
                            $('.ui-dialog-titlebar-close', widget).html('<i class="fa fa-circle text-danger"></i>');
                            $('.ui-dialog-content, .box-body, .ui-dialog-titlebar', widget).css("padding", "0px");
                        }
                    });
            },
            error: function (erro) {
                loadingMessage('hide', tabID);
                errorAjaxHandle(erro);
            }
        });
    } catch (err) {
        $(dialog).attr('title', 'Erro');
        $(dialog).html(err).dialog(
            {
                width: 300, height: 200,
                dialogClass: "no-close",
                buttons: [{
                    text: "OK",
                    click: function () {
                        $(this).dialog("close");
                    }
                }],
                beforeClose: function (event, ui) {
                    delete dialog;
                },
                create: function (event, ui) {
                    var widget = $(this).dialog("widget").get(0);
                    $("button", widget).addClass("btn btn-primary");
                }
            }
        );
    }
}

var SigFormUtils = {
    DEBUG_MODE: false,
    RESPONSE_OK: 0,
    RESPONSE_ERROR: 1,
    DELAY_CLICK_DISABLED: 500,
    fileOnChange: function (e) {
        var input       = window.event.target || window.event.srcElement || e.target || e.srcElement;
        var formGroup   = $(input).closest('.form-group').get(0);
        var hiddenValue = $('.hidden-input-value', formGroup).get(0);
        var hiddenName  = $('.hidden-input-name', formGroup).get(0);

        var nome_aquivo = $('.nome-arquivo', formGroup).get(0);

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(hiddenValue).attr('value', e.target.result);
                $(hiddenName).attr('value', e.target.fileName);

                if (typeof nome_aquivo != "undefined") {
                    $(nome_aquivo).html(e.target.fileName + '&nbsp;&nbsp;&nbsp;<small><i>(pendente salvar)</i></small>');
                }
            }
            if (input.files[0].size > 10055660) {
                console.log('Problema com tamanho do arquivo');
                console.log(input.files[0].size)
            } else {
                reader.fileName = input.files[0].name;
                reader.readAsDataURL(input.files[0]);

            }
        }
    },
    imageOnChange: function (e) {
        var input       = window.event.target || window.event.srcElement || e.target || e.srcElement;
        var formGroup   = $(input).closest('.form-group').get(0);
        var hiddenValue = $('.hidden-input-value', formGroup).get(0);
        var hiddenName  = $('.hidden-input-name', formGroup).get(0);
        var imgObj      = $('img', formGroup).get(0);

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(imgObj).attr('src', e.target.result);
                $(hiddenValue).attr('value', e.target.result);
                $(hiddenName).attr('value', e.target.fileName);
            }
            if (input.files[0].size > 10055660) {
                console.log('Problema com tamanho do arquivo');
            } else {
                reader.fileName = input.files[0].name;
                reader.readAsDataURL(input.files[0]);
            }
        }
    },
    /**
     *
     * @param obj           Objeto quer disparará quando for clicado
     * @param module_page   Module page
     * @param rota          Module page
     * @param data          Data a ser enviada
     * @param target        Data a ser enviada
     * @param parseData     Data a ser enviada
     */
    btnClick: function (obj, rota, module_page, data_send, target, parseData) {
        var that = this;

        if (typeof rota == "object") {
            rota = '?rt=' + rota.controller + '&act=' + rota.acao;
        }

        if (typeof rota == "function") {
            $(obj).click(function (e) {
                var self = this;
                $(this).prop("disabled", true);

                setTimeout(function () {
                    $(self).prop("disabled", false);
                }, that.DELAY_CLICK_DISABLED);

                rota();
            });
            return '';
        }


        if (typeof target == "undefined") {
            target = '#' + module_page + "body_content";
        }


        $(obj).click(function (e) {
            e.preventDefault();

            var self = this;
            $(this).prop("disabled", true);

            setTimeout(function () {
                $(self).prop("disabled", false);
            }, that.DELAY_CLICK_DISABLED);

            if (typeof data_send === "function") {
                var data_get = data_send();
            }


            $.ajax({
                url: rota,
                type: 'GET',
                data: data_get,
                dataType: 'json',
                cache: false,
                beforeSend: function () {
                    loadingMessage('show', '#' + module_page + 'tab');
                },
                success: function (data) {
                    loadingMessage('hide', '#' + module_page + 'tab');

                    if (data.status == that.RESPONSE_OK) {
                        /**
                         * Ok
                         */
                        if (typeof parseData === "function") {
                            data = parseData(data);
                        }
                        $(target).html(data.content);
                        $('#' + module_page + 'responseAjax').html(data.script);
                    } else {
                        /**
                         * Error
                         */
                        $('#' + module_page + 'responseAjax').html(data.script + data.content);
                    }
                },
                error: function (erro) {
                    loadingMessage('hide', '#' + module_page + 'tab');
                    errorAjaxHandle(erro);
                }
            });
        });
    },
    /**
     *
     * @param obj           Objeto quer disparará quando for clicado
     * @param module_page   Module page
     * @param rota          Module page
     * @param data          Data a ser enviada
     * @param target        Data a ser enviada
     * @param parseData     Data a ser enviada
     */
    btnLiveClick: function (parent, obj, rota, module_page, data_send, target, parseData) {
        var that = this;

        if (typeof rota == "object") {
            rota = '?rt=' + rota.controller + '&act=' + rota.acao;
        }

        if (typeof rota == "function") {
            $(parent).on('click', obj, function (e) {
                var self = this;
                $(this).prop("disabled", true);

                setTimeout(function () {
                    $(self).prop("disabled", false);
                }, that.DELAY_CLICK_DISABLED);

                rota();
            });
            return '';
        }


        if (typeof target == "undefined" || target == null) {
            target = '#' + module_page + "body_content";
        }


        $(parent).on('click', obj, function (e) {
            e.preventDefault();

            var self = this;
            $(this).prop("disabled", true);

            setTimeout(function () {
                $(self).prop("disabled", false);
            }, that.DELAY_CLICK_DISABLED);

            if (typeof data_send === "function") {
                var data_get = data_send();
            }


            $.ajax({
                url: rota,
                type: 'GET',
                data: data_get,
                dataType: 'json',
                cache: false,
                beforeSend: function () {
                    loadingMessage('show', '#' + module_page + 'tab');
                },
                success: function (data) {
                    loadingMessage('hide', '#' + module_page + 'tab');

                    if (data.status == that.RESPONSE_OK) {
                        /**
                         * Ok
                         */
                        if (typeof parseData === "function") {
                            data = parseData(data);
                        }
                        $(target).html(data.content);
                        $('#' + module_page + 'responseAjax').html(data.script);
                    } else {
                        /**
                         * Error
                         */
                        $('#' + module_page + 'responseAjax').html(data.script + data.content);
                    }
                },
                error: function (erro) {
                    loadingMessage('hide', '#' + module_page + 'tab');
                    errorAjaxHandle(erro);
                }
            });
        });
    },
    btnNewWindow: function (parent, obj, rota, action, data, funcDataNull) {
        var data_url = {
            'rt': rota,
            'act': action
        }

        var data_url = jQuery.extend(data_url, data);

        if (parent == null) {

        } else {
            $(parent).on('click', obj, function (e) {
                e.preventDefault();


            });

        }
    },
    downloadBase64: function (obj) {
        var btn = document.createElement("A");
        $(btn).attr("download", obj.filename);
        $(btn).attr("target", "_blank");
        $(btn).attr("href", "data:" + obj.filetype + ";base64," + obj.content);
        btn.click();
    },
    arrayToOption: function (arr, empty) {
        var html = '';
        if (typeof empty != "undefined") {
            html += '<option value="">' + empty + '</option>';
        }
        for (j in arr) {
            html += '<option value="' + j + '">' + arr[j] + '</option>';
        }
        return html;
    },
    messageLink: function (obj) {
        alert($(obj).data('message'), $(obj).data('title'));
    },
    sendAttachMent: function (obj) {
        var file        = document.createElement("INPUT");
        var name        = document.createElement("INPUT");
        var value       = document.createElement("INPUT");
        var div         = document.createElement("DIV");
        var module_page = $(obj).data('module-page');
        var target      = obj.parentNode;
        file.setAttribute("type", "file");
        name.setAttribute("type", "hidden");
        value.setAttribute("type", "hidden");


        var arquivo = '<div class="col-md-12">' +
            '<div class="direct-chat-msg">' +
            '<div class="direct-chat-info clearfix">' +
            '<span class="direct-chat-name pull-left">Arquivo:</span>' +
            '<span class="direct-chat-timestamp pull-right">18 Jul 2016 03:36 pm</span>' +
            '</div>' +
            '<div class="direct-chat-img"><button type="button" onclick="alert(\'haha\')" class=" btn btn-primary"><i class="fa fa-file-pdf-o"></i></button></div>' +
            '<div class="direct-chat-text nome-arquivo">' +
            '' +
            '</div></div>' +
            '</div>';

        $(div).append(arquivo);

        file.setAttribute("name", module_page + "anexo[]");
        name.setAttribute("name", module_page + "anexo_name[]");
        value.setAttribute("name", module_page + "anexo_value[]");

        $(div).addClass("form-group");
        $(name).addClass("hidden-input-name");
        $(value).addClass("hidden-input-value");

        file.onchange = SigFormUtils.fileOnChange;

        div.appendChild(file);
        div.appendChild(name);
        div.appendChild(value);

        $(file).css("display", "none");

        target.appendChild(div);


        $(file).trigger('click');
    },
    btnAjaxFile: function (obj) {
        var that         = this;
        var controller   = $(obj).data('controller');
        var action       = $(obj).data('action')
        var module_page  = $(obj).data('module-page');
        var data_request = $(obj).data('request-data');
        var rota         = '?rt=' + controller + '&act=' + action;


        $.ajax({
            url: rota,
            type: 'GET',
            data: data_request,
            dataType: 'json',
            cache: false,
            beforeSend: function () {
                loadingMessage('show', '#' + module_page + 'tab');
            },
            success: function (data) {
                loadingMessage('hide', '#' + module_page + 'tab');

                if (data.status == that.RESPONSE_OK) {
                    /**
                     * Ok
                     */
                    that.downloadBase64(data.file);
                } else {
                    /**
                     * Error
                     */
                    $('#' + module_page + 'responseAjax').html(data.script + data.content);
                }
            },
            error: function (erro) {
                loadingMessage('hide', '#' + module_page + 'tab');
                errorAjaxHandle(erro);
            }
        });


    }
};

function alert(msg, title) {
    var dialog = document.createElement("DIV");
    if (title == "undefined") {
        title = '';
    }
    $(dialog).html(msg).attr("title", title).dialog(
        {
            width: 500, height: 300,
            dialogClass: "no-close",
            modal: true,
            buttons: [{
                text: "OK",
                click: function () {
                    $(this).dialog("close");
                    $(this).dialog('destroy').remove();
                    $(dialog).remove();

                },
                class: 'btn btn-primary'
            }],
            beforeClose: function (event, ui) {
                delete dialog;
            },
            create: function (event, ui) {
                //Nothing here
            }
        }
    );
}

function convertToNumber(num) {
    var regex = /^\d{1,3}(?:\.\d{3})*,\d{2,4}$/;

    if (regex.test(num)) {
        num = num.replace(".", "");
        num = num.replace(",", ".");
    }

    return parseFloat(num);
}


socket.on('set_login', function () {
    socket.emit('logar', {
        'id_usuario': id_usuario_logado
    });
});

socket.on('message', function (data) {
    alert(JSON.stringify(data));
});


socket.on('alert', function (data) {

    for (i in data) {

        switch (parseInt(data[i].tipo_alerta)) {
            case 1:
                $('ul.menu', "#message-menu").prepend(data[i].conteudo);
                $('.number-notifications', "#message-menu").html($('ul.menu .alert-message-unread', "#message-menu").length);
                break;
            case 2:
                $('ul.menu', "#notification-menu").prepend(data[i].conteudo);
                $('.number-notifications', "#notification-menu").html($('ul.menu .alert-notification-unread', "#notification-menu").length);
                break;
            case 3:
                $('ul.menu', "#tasks-menu").prepend(data[i].conteudo);
                $('.number-notifications', "#tasks-menu").html($('ul.menu .alert-tasks-unread', "#tasks-menu").length);
                break;
        }
    }
});

socket.on('empty_alert', function (data) {
    switch (parseInt(data.tipo_alerta)) {
        case 1:
            $('ul.menu', "#message-menu").empty();
            $('.dropdown-toggle .label', "#message-menu").empty();
            break;
        case 2:
            $('ul.menu', "#notification-menu").empty();
            $('.dropdown-toggle .label', "#notification-menu").empty();
            break;
        case 3:
            $('ul.menu', "#tasks-menu").empty();
            $('.dropdown-toggle .label', "#tasks-menu").empty();
            break;
    }

});

socket.on('dashboard_information', function (data) {
    //var data = JSON.stringify(data);
    var i;

    for (i in data.module) {

        if (data.module[i] != null) {
            $('.' + i, '#dashboard-information').html(data.module[i]);
        }
    }
});


window.onbeforeunload = function (e) {
    e.preventDefault();
    return "Deseja realmente sair?";
}