/**
 * Created by pandacoder on 25/08/15.
 */
"use strict";

//menu-select-option.js


(function($){
    var menuSelectOoption = function(element, inputN, url)
    {
        var elem = $(element);
        var self = this;
        var inputName = inputN;
        var tableName = inputName + '_table';
        var urlData = url;

        var data_input;

        /*
         = {
         "header": [ "tipo", "volume"],
         "opts": {
         "CX - Caixa" : [
         {"id": 1, "description": "10x11x12"},
         {"id": 2, "description": "10x11x12"},
         {"id": 3, "description": "10x11x12"},
         {"id": 5, "description": "10x11x12"},
         {"id": 6, "description": "10x11x12"},
         {"id": 7, "description": "10x11x12"},
         {"id": 8, "description": "10x11x12"}
         ],
         "UN - Unidade": [
         {"id": 4, "description": "15x11x14"}
         ]
         },
         "selected": [ ],
         "selectedOps": {}
         }
         {
         "header":["Tipo","Descricao"],
         "opts":{
         "CX - Caixa":[
         {"id":"1","description":"BOMBAS DE AGUA | Altura:1200 - Largura:500 - Comprimento:1000 - Peso:10"}
         ]
         },
         "selected":[],"selectedOps":[]}"
         */



        // Public method
        this.init = function()
        {
            $(".menu-add-ops", elem).menu({
                items: "> :not(.ui-widget-header)"
            });
            this.initData();
        };

        this.initData = function()
        {
            $.ajax({
                url: urlData,
                type: 'POST',
                dataType: 'json',
                cache: false,
                success: function (data) {
                    try{
                        data_input = $.parseJSON(data);

                        self.parseMenu();
                        self.parseTable();
                        self.parseInputs(data_input.selected);
                        self.startEvents();
                    }catch(e){
                        console.log(e.message);
                        console.log(e.stack);
                    }
                }
            });
        };

        this.startEvents = function()
        {
            $(elem).on('click', '.menu-option-add:not(.ui-state-disabled)', function(){
                $(this).addClass("ui-state-disabled");
                var body = $('#' + tableName + ' tbody').get(0);
                var id = $(this).data("id");
                var description = $(this).html();
                var group = $(this).data("group");

                self.parseGroupTR(group, [{ 'id': id, 'description': description}], body);
                self.parseInputs( [ id ] );
            });

            $('#' + tableName ).on( 'click', '.menu-option-rm', function(){
                $('li[data-id=' + $(this).data("id") + ']').removeClass("ui-state-disabled");
                $('#' + inputName + '-' + $(this).data("id")).remove();
                $(this).closest('tr').remove();
            });
        };



        this.parseInputs = function(selects)
        {
            var k;
            for ( k in selects ){
                var obj = document.createElement("INPUT");
                obj.setAttribute("type", "hidden");
                obj.setAttribute("name", inputName + "[]");
                obj.id = inputName + '-' + selects[k];
                obj.setAttribute("value", selects[k] );

                $(elem).after(obj);
            }
        };

        this.parseMenu = function()
        {
            $(elem).html( self.createMenu() );
        };

        this.parseTable = function()
        {
            var k;
            var obj = document.createElement("TABLE");
            obj.id = tableName;
            obj.className = "table tb-menu-options";

            var head = document.createElement("THEAD");
            var tr = document.createElement("TR");
            var tipo = document.createElement("TH");
            var text = document.createTextNode("Tipo");
            tipo.appendChild(text);
            var rm = document.createElement("TH");
            var text = document.createTextNode("Ação");
            rm.appendChild(text);
            var description = document.createElement("TH");
            text = document.createTextNode("Descrição");
            description.appendChild(text);

            tr.appendChild(tipo);
            tr.appendChild(description);
            tr.appendChild(rm);
            head.appendChild(tr);
            obj.appendChild(head);

            obj.className = "table tb-menu-options";

            var body = document.createElement("TBODY");

            for ( k in data_input.selectedOps  ){
                this.parseGroupTR(k, data_input.selectedOps[k], body);
            }


            obj.appendChild(body);

            $(elem).after(obj);
        };

        this.createMenu = function()
        {
            "use strict";

            var obj = document.createElement("LI");
            obj.className = "nav dropdown";

            var btn = document.createElement("BUTTON");
            btn.className = "btn btn-primary text-muted dropdown-toggle";
            btn.setAttribute('data-toggle', "dropdown");
            var text = document.createTextNode("Menu +");
            btn.appendChild(text);
            obj.appendChild(btn);

            var dropdown =  document.createElement("UL");
            dropdown.className = "dropdown-menu";
            var menuOps =  document.createElement("UL");
            menuOps.className = "menu-options";
            var textD = document.createTextNode("Menu +");

            menuOps.appendChild( this.parseAdd( this.itemMenu("Adicionar")) );

            $(menuOps).menu({
                items: "> :not(.ui-widget-header)"
            });

            dropdown.appendChild(menuOps);
            obj.appendChild(dropdown);

            return obj;
        };

        this.itemMenu = function(txt)
        {
            var obj = document.createElement("LI");
            var text = document.createTextNode(txt);
            obj.className = "";
            obj.appendChild(text);

            return obj;
        };

        this.parseAdd = function(obj)
        {
            var k;
            var ul = document.createElement("ul");
            for ( k in data_input.opts  ){
                this.parseGroup(k, data_input.opts[k], ul, true);
            }
            obj.appendChild(ul);

            return obj;
        };

        this.parseGroup = function(txt, group, ul, add)
        {
            var obj = this.itemMenu(txt);
            obj.className = "ui-widget-header";
            var k;

            ul.appendChild(obj);
            for ( k in group ){
                var item = this.itemMenu(group[k].description);
                item.setAttribute("data-id", group[k].id );
                item.setAttribute("data-group", txt );

                if ( data_input.selected.indexOf(group[k].id) > -1 && add){
                    item.className = "ui-state-disabled";

                    if ( typeof(data_input.selectedOps) == 'undefined' ){
                        data_input.selectedOps = [];
                    }

                    if ( !( txt in data_input.selectedOps) ) {
                        data_input.selectedOps[txt] = [];
                    }
                    data_input.selectedOps[txt].push( group[k] );
                }
                if  ( add ){
                    item.className += " menu-option-add";
                }else{
                    item.className += " menu-option-rm";
                }
                ul.appendChild(item);
            }

            return ul;
        };

        this.parseGroupTR = function(txt, group, body)
        {

            var k, tipo, desc, text, tr;

            for ( k in group ){
                tr = document.createElement("TR");
                tr.setAttribute("data-id", group[k].id);

                tipo = document.createElement("TD");
                text = document.createTextNode(txt);
                tipo.appendChild(text);

                desc = document.createElement("TD");
                text = document.createTextNode(group[k].description);
                desc.appendChild(text);

                var rm = document.createElement("TD");
                var button = document.createElement("BUTON");
                button.setAttribute("data-id", group[k].id );
                button.className = "btn btn-primary menu-option-rm";
                rm.className = "text-center";
                text = document.createTextNode("Remover");
                button.appendChild(text);
                rm.appendChild(button);

                tr.appendChild(tipo);
                tr.appendChild(desc);
                tr.appendChild(rm);

                body.appendChild(tr);
            }



            return body;
        };


    };


    $.fn.menuSelectOption = function(inputName, url)
    {
        return this.each(function()
        {
            var mSelectOp = new menuSelectOoption(this, inputName, url);
            mSelectOp.init();
        });
    };
})(jQuery);