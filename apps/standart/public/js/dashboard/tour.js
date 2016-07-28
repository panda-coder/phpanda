var	tour = {
	id: 'dashboard-tour',
	steps: [
	{
		target: 'message-menu',
		title: 'Mensagem',
		content: 'Visualização de mensagens de usuários do sistema, acessar o menu de opções para envio de mensagens.',
		placement: 'left',
		yOffset: 5,
		arrowOffset: 5,
		width: 300
	},
	{
		target: 'notification-menu',
		title: 'Notificação',
		content: 'Visualização de mensagens de notificação.',
		placement: 'bottom',
		yOffset: 0,
		xOffset: -130,
		arrowOffset: 130
    },
	{
		target: 'content-menu',
		title: 'Menu de Opções',
		content: 'Menu com as opções do sistema, ao clicar será disponibilizado os modulos do sistema.',
		placement: 'right',
		yOffset: 0,
		xOffset: 0,
		arrowOffset: 0,
		width: 400
    },
	{
		target: 'dashboard-search-menu',
		title: 'Menu Busca',
		content: 'Use essa busca para procurar algum modulo no menu.',
		placement: 'right',
		yOffset: -35,
		xOffset: 0,
		arrowOffset: 40
    }
  ],
  showPrevButton: true,
  scrollTopMargin: 100
};

$('#dashboard-help').click(function(e){
	e.preventDefault();

	hopscotch.startTour(tour);
});