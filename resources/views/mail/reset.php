<?php
$this->layout('mail.layout')
    ->block('title', 'You have requested to reset your password');

?>

<p style="color:#1e1e2d; margin:0;font-family:'Rubik',sans-serif;">
    <span style="font-weight:bold;font-size:32px;display: block;margin-bottom:10px;"><?= translate('Hello,') ?> <?= $name ?></span>
    <span style="font-weight:400;font-size:24px;display: block;"><?= translate('You have requested to reset your password') ?></span>
</p>
<span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
<p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
    <?= translate('We cannot simply send you your old password. A unique link to reset your
    password has been generated for you.') ?>
    <?= translate('To reset your password, click the
    following link and follow the instructions.') ?>
</p>
<a href="<?= $link ?>" target="_blank" style="background:#0284c7;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;"><?= translate('Reset Password') ?></a>