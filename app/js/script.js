 $(document).ready(function(){

 	var arquivos_abertos = [""];
    var tamanho_font = "14px";

 	function CarregamentoPagina(){

 	}

 	function EditorLinhaStart(){

 	}

 	function AbrirArquivo(arquivo){

 	}

 	function FecharArquivoAberto(){

 	}

 	function DeletarArquivo(arquivo){

 	}

 	function RenomearArquivo(arquivo, novo_nome){

 	}

 	function SalvarArquivo(arquivo, conteudo){

 	}

 	function AtualizarArquivosAbertos(lista_arquivos){

 	}

 	function EditorHighlightStart(){
 		edite = document.getElementById("edite-code").value;
 		var newstr = str.replace(/xmas/i, 'Christmas');
 	}

    function Bloquear_click_direito(){

        document.oncontextmenu = document.body.oncontextmenu = function() { return false; }
    }

 	
 	/*----------------------------------------------------------------
 	Fechando arquivos abertos
 	----------------------------------------------------------------*/
 	$(".painel-left-close").click(function(){
 		$(this).parent().remove();
 	});


 	$("#edite-code").keyup(function(){

      
 	});


    Bloquear_click_direito();
 	

});