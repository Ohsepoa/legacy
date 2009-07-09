<?php
/**
 * Filemaneger
 * (C)2007-2009 BeaBo Japan by Hiroki Seike
 * http://beabo.net/
 **/

// --------------------------------------------------------
// ���C��
// --------------------------------------------------------
define('_AD_FILEMANAGER_PATH_HOME', "�z�[��");
define('_AD_FILEMANAGER_TYPE', "�^�C�v");
define('_AD_FILEMANAGER_EDIT', "�ǉ�");
define('_AD_FILEMANAGER_DEL', "�폜");
define('_AD_FILEMANAGER_RETURN', "���X�g�֖߂�");
define('_AD_FILEMANAGER_ACTION_DELETE', "&nbsp;�폜");
define('_AD_FILEMANAGER_ACTION_DEFULT', "&nbsp;-----");
define('_AD_FILEMANAGER_ACTION_SUBMIT', "&nbsp;�K�p&nbsp;");
define('_AD_FILEMANAGER_FILE_TOTAL', "���v");

// --------------------------------------------------------
// �G���[���b�Z�[�W
// --------------------------------------------------------
define('_AD_FILEMANAGER_ERROR_REQUIRED', "{0}�͕K�����͂��ĉ�����");
define('_AD_FILEMANAGER_ERROR_PERMISSION', "�A�N�Z�X����������܂���B");
define('_AD_FILEMANAGER_ERROR_FILE_PERMISSION', "%s �́A�A�N�Z�X����������܂���B");
define('_AD_FILEMANAGER_ERROR_DELETE_FOR_PERMISSION', "%s �́A�폜����A�N�Z�X�������Ȃ��׃t�@�C���}�l�[�W���[����폜�ł��܂���B");
define('_AD_FILEMANAGER_NOTFOUND', "�t�@�C����������܂���B");
define('_AD_FILEMANAGER_ERROR_FILE_EXISTS', "'%s' ��������܂���B");

// --------------------------------------------------------
// �A�b�v���[�h
// --------------------------------------------------------
define('_AD_FILEMANAGER_PREVIEW', "�v���r���[");
define('_AD_FILEMANAGER_FILENAME', "�t�@�C��");
define('_AD_FILEMANAGER_FOLDER_ADD', "�f�B���N�g���ǉ�");
define('_AD_FILEMANAGER_SIZE', "�T�C�Y");
define('_AD_FILEMANAGER_DATE', "�X�V����");
define('_AD_FILEMANAGER_UPLOAD', "�A�b�v���[�h");
define('_AD_FILEMANAGER_UPLOAD_DSC', "Upload���N���b�N���āA�t�@�C����I������ƃA�b�v���[�h���J�n���܂��B");
define('_AD_FILEMANAGER_UPLOAD_NOTACCESS',  "%s �́A�A�b�v���[�h�ł��܂���BFTP�\�t�g�ȂǂŁA�p�[�~�b�V������ύX���ĉ������B");
define('_AD_FILEMANAGER_UPLOAD_PERMISSION', "�A�b�v���[�h�p�X��������Ȃ����A�A�b�v���[�h����������܂���B");
define('_AD_FILEMANAGER_UPLOAD_NOFILE', "�A�b�v���[�h����t�@�C����������܂���B�t�@�C����I�����ĉ������B");
define('_AD_FILEMANAGER_SINGLEUPLOAD', "�t�@�C���A�b�v���[�h");
define('_AD_FILEMANAGER_NOTFOUNDURL', "�A�b�v���[�h�p�X��������܂���B");
define('_AD_FILEMANAGER_CONFIRMMSSAGE', "%s �փt�@�C�����A�b�v���[�h���܂��B<br />�A�b�v���[�h�\�ȃt�@�C���T�C�Y�� %s�܂ŉ\�ł��B");

// --------------------------------------------------------
// �t�H���_
// --------------------------------------------------------
define('_AD_FILEMANAGER_FOLDER', "�t�H���_");
define('_AD_FILEMANAGER_FOLDERNAME', "�t�H���_��");
define('_AD_FILEMANAGER_FOLDER_UPLOAD', "���̃t�H���_�ɃA�b�v���[�h");
define('_AD_FILEMANAGER_ERROR_FOLDERNAME', "�t�H���_��������������܂���B�t�H���_�����m�F���ĉ������B<br />�t�H���_���Ŏg���镶���́A���p�p����-~_�݂̂����p�o���܂��B<br />�p���͏������݂̂����p�o���܂��B");
define('_AD_FILEMANAGER_ERROR_PATH', "�t�H���_���̎w�肪����������܂���B�t�H���_�����m�F���ĉ������B");
define('_AD_FILEMANAGER_ADDFOLDER', "�t�H���_�̒ǉ�");
define('_AD_FILEMANAGER_ADDFOLDER_DSC', "�V�����t�H���_��ǉ����܂��B�쐬���ꂽ�t�H���_�̓t�@�C���}�l�[�W���[���瑀��ł��܂��B");
define('_AD_FILEMANAGER_ADDFOLDER_SUCCESS', "�t�H���_��ǉ����܂����B");
define('_AD_FILEMANAGER_ADDFOLDER_ERROR', "�t�H���_���Ȃ����A�A�N�Z�X�������Ȃ��ׁA�t�H���_��ǉ��o���܂���B");
define('_AD_FILEMANAGER_ADDFOLDER_CONFIRMMSSAGE', "%s �̉��Ƀt�H���_���쐬���܂��B<br />�쐬����t�H���_������͂��ĉ������B");
define('_AD_FILEMANAGER_DELFOLDER', "�t�H���_�̍폜");
define('_AD_FILEMANAGER_DELFOLDER_DSC', "�w�肵���t�H���_���폜���܂��B");
define('_AD_FILEMANAGER_DELFOLDER_CONFIRMMSSAGE', "�t�H���_ %s ���폜���܂��B");
define('_AD_FILEMANAGER_DELFOLDER_FILE_EXISTS', "�t�H���_�Ƀt�@�C��������� %s �͍폜�ł��܂���B�t�H���_�̓��e���m�F���ĉ������B");
define('_AD_FILEMANAGER_DELFOLDER_SUCCESS', "�t�H���_���폜���܂����B");
define('_AD_FILEMANAGER_DELFOLDER_ERROR', "�t�H���_���폜�o���܂���B�w�肵���t�H���_����łȂ����A�K�؂ȃp�[�~�b�V�����ł���܂���B");
define('_AD_FILEMANAGER_DELFOLDER_ISDIR', "�t�H���_ %s �́A�t�H���_�łȂ��׃t�@�C���}�l�[�W���[����폜�ł��܂���B");
define('_AD_FILEMANAGER_DELFOLDER_NOTACCESS', "�t�H���_ %s �́A�t�@�C���}�l�[�W���[����폜�ł��܂���BFTP�\�t�g�ȂǂŁA�p�[�~�b�V������ύX���ĉ������B");
define('_AD_FILEMANAGER_FILECOUNT', "�t�@�C�����v");

// --------------------------------------------------------
// SWFUpload
// --------------------------------------------------------
define('_AD_FILEMANAGER_SWF_UPLOAD_QUEUE', "�A�b�v���[�h");
define('_AD_FILEMANAGER_SWF_UPLOAD_CNACEL', "���ׂẴA�b�v���[�h���L�����Z������");
define('_AD_FILEMANAGER_SWF_COULD_NOT_LOAD', "SWFUpload ���C�u���������[�h�o���܂���BJavaScript �̗��p�������ĉ������B");
define('_AD_FILEMANAGER_SWF_LOADING', "SWFUpload ���C�u������ǂݍ���ł��܂��B���΂炭���҂���������...");
define('_AD_FILEMANAGER_SWF_LOAD_HAS_FAILED', "SWFUpload ���C�u���������[�h�o���܂���B���C�u�������Z�b�g����Ă��邩�m�F���邩�AFlash �v���C���[���C���X�g�[�����ĉ������B");
define('_AD_FILEMANAGER_SWF_INSTALL_FLASH', "SWFUpload  ���C�u���������[�h�o���܂���B���C�u�������Z�b�g����Ă��邩�m�F���邩�AFlash �v���C���[���C���X�g�[�����ĉ������B<br />�����炩�� <a href=\"http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash\">Adobe website</a>Flash �v���C���[���C���X�g�[�����ĉ�����");

// --------------------------------------------------------
// �ݒ�m�F
// --------------------------------------------------------
define('_AD_FILEMANAGER_OPTION', "�I�v�V����");
define('_AD_FILEMANAGER_OPTION_DSC', "�I�v�V����");
define('_AD_FILEMANAGER_CHECK_NG', "���C�u�����̃t�@�C����������܂���B�t�@�C�����A�b�v���[�h���ĉ������B<br />");
define('_AD_FILEMANAGER_CHECK_OK', "���C�u�����t�@�C���̐ݒu�́A�������Ă��܂��B");
define('_AD_FILEMANAGER_CHECK', "������̊m�F");
define('_AD_FILEMANAGER_CHECK_DSC_1', "SWFUpload�𗘗p����ꍇ");
define('_AD_FILEMANAGER_CHECK_DSC_2', "SWFUpload���g�����A�b�v���[�h����ʂɌ��J����̂̓I�X�X���ł��܂���B<br />���C�u�����̂���ꏊ��htaccess���g�����A�N�Z�X������ݒ肵�Ă��������B");
define('_AD_FILEMANAGER_HTACCESS_DSC_1', "���L�t�H�[�����N���b�N����Ɛݒ���e��I���ł��܂��B");
define('_AD_FILEMANAGER_HTACCESS_DSC_2', "���݃A�N�Z�X���Ă���IP�A�h���X�̂݋�����ꍇ�i�����I�ɑg�������T���v���ł��B���g���̃T�[�o���ɍ��킹�ĕύX���ĉ������B�j");
define('_AD_FILEMANAGER_HTACCESS_PATH', "htaccess�t�@�C����ݒu����p�X");

// --------------------------------------------------------
// FFMPEG ����
// --------------------------------------------------------
define('_AD_FILEMANAGER_ACTION_CONVERT', "FLV�ϊ�");
define('_AD_FILEMANAGER_ACTION_CAPTURE', "�L���v�`���[�摜�쐬");

?>
