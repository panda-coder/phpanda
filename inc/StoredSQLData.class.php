<?php
	/*
	    Este arquivo é parte do projeto PHPanda 



	    PHPanda é um software livre; você pode redistribui-lo e/ou 

	    modifica-lo dentro dos termos da Licença Pública Geral GNU como 

	    publicada pela Fundação do Software Livre (FSF); na versão 2 da 

	    Licença, ou (na sua opnião) qualquer versão.



	    Este programa é distribuido na esperança que possa ser  util, 

	    mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUAÇÂO a qualquer

	    MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a

	    Licença Pública Geral GNU para maiores detalhes.



	    Você deve ter recebido uma cópia da Licença Pública Geral GNU

	    junto com este programa, se não, escreva para a Fundação do Software

	    Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	*/

	define('SSD_PATH', dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'SSDs');

	StoredSQLData class{
		
		private $data; //Dados
		private $json; //Mesmo conteudo de Dados, mas com a codificação de json
		private $ext;  //Extensão para leitura e gração de do arquivo

		
		function __construct($file = ''){
			
			$ext = '.ssd';
			
			if ( ! empty( $file ) ){ //Caso seja passado no constructor um arquivo para carregar

				$arq_content = file_get_contents( SSD_PATH . DIRECTORY_SEPARATOR . $file . $this->ext );
				$this->data = json_decode( $arq_content );
			}

			

		}
		

	}	
?>
