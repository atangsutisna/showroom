<?php
// Check status login
$this->simple_login->cek_login();
$site = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?= $global_header ?>
</head>
<body>
<div id="wrapper">
    <?= $header ?>
    <?= $navigation ?>
    <div id="page-wrapper" >
        <div id="page-inner">
            <?= $content ?>
        </div>
    </div>
</div>
<?= $global_footer ?>
</body>
</html>