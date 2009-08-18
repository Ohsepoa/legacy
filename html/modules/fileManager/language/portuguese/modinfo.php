<?php
/**
 * Filemaneger
 * (C)2007-2009 BeaBo Japan by Hiroki Seike
 * http://beabo.net/
 **/
 /**
 * Translate do Portugues from Brazil
 * by Miraldo Antoninho Ohse (leco)
 * http://mixmusicas.com/
 * mail to: m_ohse@hotmail.com
 * Thanks
 **/

define('_MI_FILEMANAGER_NAME', "Administrador de Arquivos");
define('_MI_FILEMANAGER_DESC', "Administra��o do arquivo e da pasta com os arquivos enviados.");
define('_MI_FILEMANAGER_UPDATE', 'Atualiza��o');

// --------------------------------------------------------
// Names of admin menu items
// --------------------------------------------------------
define('_MI_FILEMANAGER_MAIN', "Lista de arquivos");
define('_MI_FILEMANAGER_MAIN_DSC', "Lista de arquivos com miniaturas e vizualiza��es da imagem");
define('_MI_FILEMANAGER_UPLOAD', "Enviar arquivo");
define('_MI_FILEMANAGER_UPLOAD_DSC', "Enviar arquivos para o diret�rio de envio");

define('_MI_FILEMANAGER_FOLDER', "Pasta");
define('_MI_FILEMANAGER_FOLDER_DSC', "Administra��o do diret�rio e permiss�es");

define('_MI_FILEMANAGER_CHECK', "Verificar configura��es");
define('_MI_FILEMANAGER_CHECK_DSC', "Verificar configura���es no administrador de arquivos.");

// --------------------------------------------------------
// PreferenceEdit
// --------------------------------------------------------
define('_MI_FILEMANAGER_PATH',"Diret�rio principal para envio");
define('_MI_FILEMANAGER_PATH_DSC',"Definir o percurso de envio abaixo do /uploads/ (somente o nome da pasta, sem a barra '/' )");
define('_MI_FILEMANAGER_DIRHANDLE',"Administra��o do diret�rio de envio");
define('_MI_FILEMANAGER_DIRHANDLE_DSC',"Permite ou n�o o webmasters criar e excluir pastas.");
define('_MI_FILEMANAGER_THUMBSIZE',"Tanmanho das miniaturas");
define('_MI_FILEMANAGER_THUMBSIZE_DSC',"Especificar a largura m�xima das miniaturas na lista de arquivos.");
define('_MI_FILEMANAGER_DEBUGON',"Ligar a depura��o do envio");
define('_MI_FILEMANAGER_DEBUGON_DSC',"Habilitar ou n�o o console de depura��o de envio que est� inserido dentro de uma iframe.");


define('_MI_FILEMANAGER_XOOPSLOCK',"Esconder as imagens do sistema?");
define('_MI_FILEMANAGER_XOOPSLOCK_DSC',"Mostar ou n�o os arquivos do 'Administrador de Arquivos' (Exemplo: avatars, smilies, etc");
define('_MI_FILEMANAGER_EXTENSIONS',"Extens�o dos arquivos permitidos para envio");
define('_MI_FILEMANAGER_EXTENSIONS_DSC',"Separar a extens�o dos arquivos com uma barra '|'.<br />Certifique-se de que voc� est� usando todos os caracteres min�sculos para as extens�es dos arquivos.<br />A configura��o padr�o � gif|jpg|jpeg|png|avi|mov|wmv|mp3|mp4|flv|doc|xls|ods|odt|pdf");

// reserved  options setting 

define('_MI_FILEMANAGER_FUSE',"[ffmpeg] Usar FFmpeg");
define('_MI_FILEMANAGER_FUSE_DSC',"o FFmpeg � uma solu��o de plataforma completa para gravar, converter e transmitir audio e video.<br /> O FFmpeg deve ser suportado pelo servidor. Caso contr�rio, instale o FFmpeg bin�rio em seu servidor.");
define('_MI_FILEMANAGER_FPATH',"[ffmpeg] percurso para o FFmpeg");
define('_MI_FILEMANAGER_FPATH_DSC',"Especificar o percurso da intala��o do FFmpeg.<br />(Examplo:<tt>/usr/local/bin</tt>, <tt>/usr/bin</tt>)");
define('_MI_FILEMANAGER_FOPT',"[ffmpeg] Op��es");
define('_MI_FILEMANAGER_FOPT_DSC',"Por favor, especifique a op��o de comenado. ・・Sua vers�o n�o est� dispon�vel ・・");
define('_MI_FILEMANAGER_FCAPTURE',"[ffmpeg] Tempo Screenshot");
define('_MI_FILEMANAGER_FCAPTURE_DSC',"Tempo do come�o do v�deo para tomar um screenshot.");
define('_MI_FILEMANAGER_FCONVERT',"[ffmpeg] Tamanho m�ximo da convers�o FLV");
define('_MI_FILEMANAGER_FCONVERT_DSC',"Especificar o tamanho m�ximo dos arquivos de v�deo FLV par serem convertidos para o formato video. A unidade � MB.");
define('_MI_FILEMANAGER_FMOVIEFILE',"[ffmpeg] Formato dos arquivos para converter para FLV");
define('_MI_FILEMANAGER_FMOVIEFILE_DSC',"Separar o formado das extens�es dos arquivos com uma barra '|'.<br />Certifique-se de que voc� est� usando todos os caracteres min�sculos para as extens�es dos arquivos.<br />O formato do arquivo � convertido na configura��o do ffmpeg.<br />A configura��o padr�o � flv|avi|mwv|mov|mpg|qt|mov|3gp|3gp2|mp4");

?>
