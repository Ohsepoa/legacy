<?php
// Blocks
$constpref = '_MB_' . strtoupper( $mydirname ) ;

if( defined( "FOR_XOOPS_LANG_CHECKER" ) || ! defined( $constpref."_LOADED" ) ) {

// a flag for this language file has already been read or not.
define( $constpref."_LOADED" , 1 ) ;

define($constpref."_NOTYET","�����Υȥåץ���ƥ�ĤϤ���ޤ���");// ver 3.00 changed
define($constpref."_TMRSI","�����Ǥ��ɤޤ줿����ƥ�Ĥϡ�");// ver 3.00 changed
define($constpref."_ORDER","�¤ӽ�");
define($constpref."_DATE","�Ǻ�����");
define($constpref."_HITS","�ҥåȿ�");
define($constpref."_DISP","ɽ�������");
define($constpref."_ARTCLS","��");
define($constpref."_CHARS","ɽ����̾��Ĺ��");
define($constpref."_LENGTH"," �Х���");
define($constpref."_MON","��");
define($constpref."_TUE","��");
define($constpref."_WED","��");
define($constpref."_THE","��");
define($constpref."_FRI","��");
define($constpref."_SAT","<span style=\"color:blue\">��</span>");
define($constpref."_SUN","<span style=\"color:red\">��</span>");
define($constpref."_DATE_FORMAT","Yǯm��");

define($constpref."_DISP_TOPICID","ɽ�����ƥ��ꢨʣ�����ꤹ����ϥ��ƥ��꡼�ֹ�򥫥��(,)�Ƕ��ڤ롣<br/>���֥��ƥ��꡼�ϴޤޤʤ����Ȥ���ա�ɬ�פʤ顢�ƥ��֥��ƥ��꡼������Ū�˻��ꤹ�뤳�ȡ�<br/>��0�������ƥ����ɽ����");
define($constpref."_DISP_HOMETEXT","��ʸ��ɽ��������");
define($constpref."_DIPS_ICON","���ƥ��ꥢ�������ɽ��");

define($constpref."_READMORE","³�����ɤ�");
define($constpref."_COMMENTS","0������");
define($constpref."_ONECOMMENT","1������");
define($constpref."_BYTESMORE","�Ĥ�%s��");
define($constpref."_NUMCOMMENTS","%s������");

define($constpref."_MORE","��äȵ����򸫤�");

}
?>