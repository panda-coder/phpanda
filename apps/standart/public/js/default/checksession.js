$(document).ready(function(){
    //checkSession.init();
});

var checkSession = {
    fullbox: null,
    newLogin: null,
    bt: null,
    username: null,
    pass: null,
    foto: null,
    ajaxResponse: null,
    contador: 3,
    titulo: null,
    msg: null,

    //$_GET retornado via AJAX
    rt: null, //Nome do modulo clicado que gerou relogin - retornado do $_GET PHP
    act: null, //Ação dentro do modulo que gerou relogin - retornado do $_GET PHP

    userinfo_id: null,
    userinfo_foto: null,
    userinfo_nome: null,

    init: function()
    {
        //funções são iniciadas via PHP
    },

    //Função iniciada via PHP quando session estiver expirada
    load: function(foto, nome, act, rt)
    {
        //alert("act: "+act+" | rt: "+rt);
        checkSession.act = act.toLocaleLowerCase();
        checkSession.rt = rt.toLocaleLowerCase();

        checkSession.configBt();

        //Colocar as informações do usuário enviadas do PHP no objeto JS

        this.userinfo_foto  = foto;
        this.userinfo_nome  = nome;

        this.foto.src = foto;
        this.username.innerHTML = nome;
//checkSession.fullbox.style.display="none";
       document.getElementById("bouncebox").style.display="none";
        //Exibir "MODAL" de relogin
        $(this.newLogin).fadeIn(function () {
            $('#bouncebox').show("slide", {"easing": "easeOutBack", "duration": 800});
            //{"easing": "easeOutBounce", "duration": 4000}
            //$(checkSession.astro).effect("bounce", {}, "slow");
        });
    },


    //Configurar botoes e inputs
    configBt: function ()
    {
        this.fullbox        = document.getElementById("userdata");
        this.newLogin       = document.getElementById("loginSessionExpires");
        this.bt             = document.getElementById("btRemakeSession");
        this.pass           = document.getElementById("iptPass");
        this.username       = document.getElementById("usernamerelogin");
        this.foto           = document.getElementById("userfotorelogin");
        this.ajaxResponse   = document.getElementById("reloginAjaxResponse");
        this.titulo         = document.getElementById("relogin-titulo");
        this.msg            = document.getElementById("relogin-msg");

        this.pass.onfocus= function () {
            this.placeholder="";
        };

        this.pass.onblur=function(){
            this.placeholder="Digite sua Senha";
        };

        this.bt.onclick=function(e)
        {
            e.preventDefault();

            $.ajax({
                //url: '?rt=loginexpires&act=checkRelogin&userid='+checkSession.userinfo_id+"&pass="+checkSession.pass.value,
                url: 'relogin.php?password='+checkSession.pass.value+'&reloginAct=verifyLogin',
                type: 'GET',
                cache: false,
                dataType: 'json',
                success: function(data){
                    if (data.status == true)
                    {
                        //alert(checkSession.act + " | "+checkSession.rt);

                        //Fechar janela que tentou abrir e executar ação novamente
                        checkSession.reload(checkSession.act, checkSession.rt);

                        $(checkSession.newLogin).fadeOut();

                        //Zerar tela de relogin
                        checkSession.msg.style.display="block";
                        checkSession.ajaxResponse.removeAttribute("class");
                        checkSession.ajaxResponse.innerHTML="";
                        checkSession.pass.value="";
                        checkSession.contado = 3;
                    }
                    else if(data.status == false)
                    {
                        checkSession.ajaxResponse.innerHTML = "<div>Senha inválida</div>";
                        checkSession.contador--;

                        if (checkSession.contador <= 0) {
                            window.location = "?rt=login";
                        }
                        else{
                            checkSession.msg.style.display="none";
                            checkSession.ajaxResponse.setAttribute("class","loginError");

                            setTimeout(function () {
                                $(checkSession.ajaxResponse).effect("pulsate", {}, "slow");
                            },200);
                        }

                    }
                },
                error: function(erro){
                    errorAjaxHandle(erro);
                }
            });
        }
    },

    //Os parametros na verdade ja são variáveis private de CHECKSESSION, utilizado como parametro apenas para facilitar a escrita.
    reload: function (acao, modulo)
    {
        //Acao representa o click em algum botão NOVO, CANCELAR ou EDITAR. Se houver click nestes botoes, não fazer nada pois a tela do modulo ja esta aberta.
        if (modulo != 0 && acao == 0)
        {
            //Pegar o X de fechar tab conforme nome do module e fechar esta TAB que esta em branco
            m_xclose = $("[module="+modulo+"_tab]")[0].getElementsByTagName("i")[0];
            m_xclose.click();

            m_btmenu = $("[module="+modulo)[0];
            m_btmenu.click();
        }
    },

    erro: function()
    {
        alert('Senha do usuário não confere!');
    }
}; //fecha obj