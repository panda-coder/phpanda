/**
 *    Atualiza a TABLE
 *    tableReload(table)
 *
 *    return void
 */
function dataTablesReload(table) {
    table.ajax.reload();
}

/**
 * Retorna a linha
 *
 * Caso o IDX não seja informado, será retornado o ID
 *
 * Pode ser o valor da coluna ou ela em matriz
 * tableGetData(table, this, 1)
 *
 * return array or value(quando tiver idx)
 */
function dataTablesGetData(table, selector, idx) {
    var data = table.row(selector).data();
    var idx = (idx != 'undefined') ? parseInt(idx) : '';

    if (idx || idx == 0) {
        data = data[idx];
    } else {
        data = data.DT_RowId;
    }

    return data;
}

/**
 *    Retorna array com os IDS das linhas selecionadas
 *    tableGetData(table)
 *
 *    return array
 */
function dataTablesGetSelectesId(table) {
    var data = [];

    $.each(table.rows('.selected').data(), function (index, value) {
        data.push(value.DT_RowId);
    });

    return data;
}

function dataTablesGetSelectesMultID(table, fKey, sKey) {
    array1 = eval(fKey[0] + " = {};");
    array2 = eval(sKey[0] + " = {};");

    //console.log(array1);
    var i = 0;
    $.each(table.rows('.selected').data(), function (index, value) {
        //eval(fKey[0]+".push(value."+fKey[1]+");");
        //eval(sKey[0]+".push(value."+sKey[1]+");");

        eval(fKey[0] + "[i] = value." + fKey[1]);
        eval(sKey[0] + "[i] = value." + sKey[1]);

        i++;
        //data.push(value.DT_BancoID);
    });

    eval("datax = { " + fKey[0] + " : array1, " + sKey[0] + " : array2 };");

    //console.log("dx: ");
    //console.log(datax);

    return JSON.stringify(datax);
}

/**
 *    Retorna array com os DADOS das linhas selecionadas
 *    tableGetData(table, column)
 *
 *    return array
 */
function dataTablesGetSelectesData(table) {
    var data = [];

    $.each(table.rows('.selected').data(), function (index, value) {
        data.push(value);
    });

    return data;
}

function dataTablesSelectRow(selector) {
    $(selector).toggleClass('selected');
}

function dataTablesSelectDeselectAll(divSelector) {
    $(divSelector + ' tbody tr').toggleClass('selected');
}

/**
 *    Filtrar tabela por coluna
 */
function dataTablesFilterByColumn(table, value, column) {
    table.column(column).search(
        value
    ).draw();
}

/**
 *    divSelector    = Div que sera aplicado
 *    tootle    = OPEN ou CLOSE
 */
function dataTablesSelect(divSelector, toggle, divCollapse) {
    if (toggle == 'open' || toggle == 'close') {
        if (toggle == 'open') {
            if ($(divSelector).is(":hidden")) {
                $(divCollapse).trigger('click');
            }
        } else {
            if ($(divSelector).is(":visible")) {
                $(divCollapse).trigger('click');
            }
        }
    }
}