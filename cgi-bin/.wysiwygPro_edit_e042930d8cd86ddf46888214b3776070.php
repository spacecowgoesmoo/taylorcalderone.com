<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "DbWKppKE95zZvhPHaZEHI8nVB_YML4a7AYhkSzXfpXwQgBmj6X15emp_3lwUOCCF72KFbjYETzAHFBS27pVH8LrDLBrKqsh_hAH5VC42Kccxjpsu3e6VGI_G4gsji_ag6hVRa4GztlxYZTQ33mEyN9zxQ705xgWocqYXrholEyVFJOVLU0f9Rsh3cE6jzksfkZQGffiDS0Ohwu9WWRS47lcLMfFAh4kQy__qeA41_7xFF8MLRL1ZjGuvq9H0fB44") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing tempsplash.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://74.220.219.59:2082/frontend/bluehost/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://spacecowmusic.com/cgi-bin/">
    <input type="hidden" name="basedir" value="/home1/spacecow/public_html/">
    <input type="hidden" name="udir" value="/home1/spacecow/public_html/cgi-bin">
    <input type="hidden" name="ufile" value="tempsplash.html">
    <input type="hidden" name="dir" value="%2fhome1%2fspacecow%2fpublic_html%2fcgi-bin">
    <input type="hidden" name="file" value="tempsplash.html">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://74.220.219.59:2082/frontend/bluehost/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="us-ascii">
    <input type="hidden" name="baseurl" value="http://spacecowmusic.com/cgi-bin/">
    <input type="hidden" name="basedir" value="/home1/spacecow/public_html/">
    <input type="hidden" name="dir" value="%2fhome1%2fspacecow%2fpublic_html%2fcgi-bin">
        <input type="hidden" name="file" value="tempsplash.html">
    <input type="hidden" name="udir" value="/home1/spacecow/public_html/cgi-bin">
    <input type="hidden" name="ufile" value="tempsplash.html">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />');
});
}

// this function updates the code in the textarea and then closes this window
function do_save() {
    document.mform.page.value = WPro.editors[0].getValue();
	document.mform.submit();
}
function do_abort() {
	document.abortform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/wysiwygPro/wysiwygPro.class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

$editor->registerButton('save', 'Save',
        'do_save();', '##buttonURL##save.gif', 22, 22,
        'savehandler'); 
$editor->addRegisteredButton('save', 'before:print' );
$editor->addJSButtonStateHandler ('savehandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 


$editor->registerButton('cancel', 'Cancel',
        'do_abort();', '##buttonURL##close.gif', 22, 22,
        'cancelhandler'); 
$editor->addRegisteredButton('cancel', 'before:print' );
$editor->addJSButtonStateHandler ('cancelhandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 
$editor->theme = 'blue'; 
$editor->addJSEditorEvent('load', 'function(editor){editor.fullWindow();setHtmlFilters(editor);}');

$editor->baseURL = "http://spacecowmusic.com/cgi-bin/";

$editor->loadValueFromFile('/home1/spacecow/public_html/cgi-bin/tempsplash.html');

$editor->registerSeparator('savecan');

// add a spacer:
$editor->addRegisteredButton('savecan', 'after:cancel');

//$editor->set_charset('iso-8859-1');
$editor->mediaDir = '/home1/spacecow/public_html/';
$editor->mediaURL = 'http://spacecowmusic.com/';
$editor->imageDir = '/home1/spacecow/public_html/';
$editor->imageURL = 'http://spacecowmusic.com/';
$editor->documentDir = '/home1/spacecow/public_html/';
$editor->documentURL = 'http://spacecowmusic.com/';
$editor->emoticonDir = '/home1/spacecow/public_html/.smileys/';
$editor->emoticonURL = 'http://spacecowmusic.com/.smileys/';
$editor->loadPlugin('serverPreview'); 
$editor->plugins['serverPreview']->URL = 'http://spacecowmusic.com/cgi-bin/.wysiwygPro_preview_e042930d8cd86ddf46888214b3776070.php?randomId=DbWKppKE95zZvhPHaZEHI8nVB_YML4a7AYhkSzXfpXwQgBmj6X15emp_3lwUOCCF72KFbjYETzAHFBS27pVH8LrDLBrKqsh_hAH5VC42Kccxjpsu3e6VGI_G4gsji_ag6hVRa4GztlxYZTQ33mEyN9zxQ705xgWocqYXrholEyVFJOVLU0f9Rsh3cE6jzksfkZQGffiDS0Ohwu9WWRS47lcLMfFAh4kQy__qeA41_7xFF8MLRL1ZjGuvq9H0fB44';
// print the editor to the browser:
$editor->htmlCharset = 'us-ascii';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>
