<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->VerificationToken]);
?>
Hello <?= $user->Email ?>,

Follow the link below to verify your email:

<?= $verifyLink ?>
