<?php
// $Id: blocksadmin.php,v 1.2 2005/03/18 12:52:49 onokazu Exp $
//%%%%%%	Admin Module Name  Blocks 	%%%%%
define("_AM_DBUPDATED", "�ǡ����ơ��֥뤬���åץǡ��Ȥ���ޤ���");

//%%%%%%	blocks.php 	%%%%%
define("_AM_BADMIN", "�֥�å�����");
define("_AM_ADDBLOCK", "Add a new block");
define("_AM_LISTBLOCK", "List all blocks");
define("_AM_SIDE", "ɽ��������");
define("_AM_BLKDESC", "�֥�å�����");
define("_AM_TITLE", "�����ȥ�");
define("_AM_WEIGHT", "�¤ӽ�");
define("_AM_ACTION", "���");
define("_AM_BLKTYPE", "Block Type");
define("_AM_LEFT", "��");
define("_AM_RIGHT", "��");
define("_AM_CENTER", "���");
define("_AM_VISIBLE", "�Ļ�");
define("_AM_POSCONTT", "Position of the additional content");
define("_AM_ABOVEORG", "Above the original content");
define("_AM_AFTERORG", "After the original content");
define("_AM_EDIT", "Edit");
define("_AM_DELETE", "Delete");
define("_AM_SBLEFT", "������ - ��");
define("_AM_SBRIGHT", "������ - ��");
define("_AM_CBLEFT", "���󥿡� - ��");
define("_AM_CBRIGHT", "���󥿡� - ��");
define("_AM_CBCENTER", "���󥿡� - ���");
define("_AM_CONTENT", "Content");
define("_AM_OPTIONS", "Options");
define("_AM_CTYPE", "Content Type");
define("_AM_HTML", "HTML");
define("_AM_PHP", "PHP Script");
define("_AM_AFWSMILE", "Auto Format (smilies enabled)");
define("_AM_AFNOSMILE", "Auto Format (smilies disabled)");
define("_AM_SUBMIT", "Submit");
define("_AM_CUSTOMHTML", "Custom Block (HTML)");
define("_AM_CUSTOMPHP", "Custom Block (PHP)");
define("_AM_CUSTOMSMILE", "Custom Block (Auto Format + smilies)");
define("_AM_CUSTOMNOSMILE", "Custom Block (Auto Format)");
define("_AM_DISPRIGHT", "Display only rightblocks");
define("_AM_SAVECHANGES", "Save Changes");
define("_AM_EDITBLOCK", "Edit a block");
define("_AM_SYSTEMCANT", "System blocks cannot be deleted!");
define("_AM_MODULECANT", "This block cannot be deleted directly! If you wish to disable this block, deactivate the module.");
define("_AM_RUSUREDEL", "Are you sure you want to delete block <b>%s</b>?");
define("_AM_NAME", "Name");
define("_AM_USEFULTAGS", "Useful Tags:");
define("_AM_BLOCKTAG1", "%s will print %s");
define('_AM_SVISIBLEIN', 'Show blocks visible in %s');
define('_AM_TOPPAGE', 'Top Page');
define('_AM_VISIBLEIN', 'Visible in');
define('_AM_ALLPAGES', 'All Pages');
define('_AM_TOPONLY', 'Top Page Only');
define('_AM_ADVANCED', 'Advanced Settings');
define('_AM_BCACHETIME', 'Cache lifetime');
define('_AM_BALIAS', 'Alias name');
define('_AM_CLONE', 'Clone'); // clone a block
define('_AM_CLONEBLK', 'Clone'); // cloned block
define('_AM_CLONEBLOCK', 'Create a clone block');
define('_AM_NOTSELNG', "'%s' is not selected!"); // error message
define('_AM_EDITTPL', 'Edit Template');
define('_AM_MODULE', 'Module');
define('_AM_GROUP', 'Group');
define('_AM_UNASSIGNED', 'Unassigned');
// $Id: groups.php 184 2006-01-22 22:34:51Z skalpa $
//%%%%%%  Admin Module Name  AdminGroup      %%%%%
define("_AM_EDITADG","Edit Groups");
define("_AM_MODIFY","Modify");

define("_AM_CREATENEWADG","Create New Group");

define("_AM_DESCRIPTION","Description");
define("_AM_INDICATES","* indicates required fields");
define("_AM_SYSTEMRIGHTS","System Admin rights");
define("_AM_ACTIVERIGHTS","�⥸�塼���������");
define("_AM_IFADMIN","If admin right for a module is checked, access right for the module will always be enabled.");
define("_AM_ACCESSRIGHTS","�⥸�塼�����Ѹ���");
define("_AM_UPDATEADG","Update Group");
define("_AM_MODIFYADG","Modify Group");
define("_AM_DELETEADG","Delete Group");
define("_AM_AREUSUREDEL","Are you sure you want to delete this group?");
define("_AM_YES","Yes");
define("_AM_NO","No");
define("_AM_EDITMEMBER","Edit Members of this Group");
define("_AM_MEMBERS","Members");
define("_AM_NONMEMBERS","Non-members");
define("_AM_ADDBUTTON"," add --> ");
define("_AM_DELBUTTON","<--delete");
define("_AM_UNEED2ENTER","You need to enter required info!");
// $Id: admin.php,v 1.1 2007/05/15 02:35:27 minahito Exp $
//%%%%%%	File Name  admin.php 	%%%%%
define('_MD_AM_DBUPDATED','Database Updated Successfully!');
// Admin Module Names
define('_MD_AM_ADGS','���롼�׸���');
define('_MD_AM_BANS','Banners');
define('_MD_AM_BKAD','Blocks');
define('_MD_AM_MDAD','Modules');
define('_MD_AM_SMLS','Smilies');
define('_MD_AM_RANK','User Ranks');
define('_MD_AM_USER','Edit Users');
define('_MD_AM_FINDUSER', 'Find Users');
define('_MD_AM_PREF','Preferences');
define('_MD_AM_VRSN','Version');
define('_MD_AM_MLUS', 'Mail Users');
define('_MD_AM_IMAGES', 'Image Manager');
define('_MD_AM_AVATARS', 'Avatars');
define('_MD_AM_TPLSETS', 'Templates');
define('_MD_AM_COMMENTS', 'Comments');

/*
 * Modules/multiMenu
 */

define("_AD_MULTIMENU_ADMIN", 	"����:�ޥ����˥塼");
define("_AD_MULTIMENU_ADMIN_01", 	"����:��˥塼01");
define("_AD_MULTIMENU_ADMIN_02", 	"����:��˥塼02");
define("_AD_MULTIMENU_ADMIN_03", 	"����:��˥塼03");
define("_AD_MULTIMENU_ADMIN_04", 	"����:��˥塼04");
define("_AD_MULTIMENU_ADMIN_05", 	"����:��˥塼05");
define("_AD_MULTIMENU_ADMIN_06", 	"����:��˥塼06");
define("_AD_MULTIMENU_ADMIN_07", 	"����:��˥塼07");
define("_AD_MULTIMENU_ADMIN_08", 	"����:��˥塼08");
define("_AD_MULTIMENU_EDITIMENU", 	"�Խ�");
define("_AD_MULTIMENU_NEWIMENU", 	"���������");
define("_AD_MULTIMENU_NEW",		"����ɲ�");
define("_AD_MULTIMENU_TITLE",		"�����ȥ�");
define("_AD_MULTIMENU_HIDE",		"����");
define("_AD_MULTIMENU_TARGET",	"ɽ����(Target)");
define("_AD_MULTIMENU_GROUPS",	"���롼��");
define("_AD_MULTIMENU_LINK",		"���");
define("_AD_MULTIMENU_OPERATION",	"��ǽ");
define("_AD_MULTIMENU_UP",		"���");
define("_AD_MULTIMENU_DOWN",		"����");
define("_AD_MULTIMENU_TARG_SELF",	"self");
define("_AD_MULTIMENU_TARG_BLANK",	"blank");
define("_AD_MULTIMENU_TARG_PARENT",	"parent");
define("_AD_MULTIMENU_TARG_TOP",	"top");
define("_AD_MULTIMENU_SUREDELETE",	"���Υ�󥯤������Ƥ⤤���Ǥ���?");
define("_AD_MULTIMENU_UPDATED",	"�ǡ����١����򹹿����ޤ���!");
define("_AD_MULTIMENU_NOTUPDATED",	"�ǡ����١����򹹿��Ǥ��ޤ���Ǥ���!");
define("_AD_MULTIMENU_SUBMIT", 	"�¹�");
?>