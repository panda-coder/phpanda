/**
 * Created by pandacoder on 02/09/15.
 */
/**
 * Created by pandacoder on 25/08/15.
 */
"use strict";

//menu-select-option.js


(function($){
    var tabWithMenu = function(element, data)
    {
        var elem = $(element);
        var self = this;
        var tableName = inputName + '_table';
        var urlData = url;

        var data_input= data;

        // Public method
        this.init = function()
        {
            $(".tab-with-menu", elem).menu({
                items: "> :not(.ui-widget-header)"
            });

            this.parseTabs();
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
                        self.parseTabs();
                        self.parseInputs(data_input.selected);
                        self.startEvents();
                    }catch(e){
                        console.log(e.message);
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

        this.parseTabs = function()
        {
            var k;
            var obj = document.createElement("div");
            obj.className = "nav-tabs-custom";

            var tabs_ul = document.createElement("UL");
            tabs_ul.className = "nav nav-tabs ui-sortable-handle";

            for ( k in data_input.tabs  ){
                this.createTab( data_input.tabs[k], tabs_ul )
            }


            $(elem).after(obj);
        };

        this.createTab = function(txt, tabs_ul)
        {
            var item = document.createElement("UL");
            var link = document.createElement("LI");
            var text = document.createTextNode(txt);

            link.appendChild(text);
            item.appendChild(link);

            tabs_ul.appendChild(item);
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

                    if ( typeof(data_input.selectedOps[txt]) == 'undefined' ) {
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




    };


    $.fn.tabWithMenu = function(data)
    {
        return this.each(function()
        {
            var obj = new tabWithMenu(this, data);
            obj.init();
        });
    };
})(jQuery);