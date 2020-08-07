<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\affiliate\humhub\modules\affiliate\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t('AffiliateModule.base', 'Guest') : Yii::$app->user->getIdentity()->displayName;

// Add some configuration to our js module
$this->registerJsConfig("affiliate", [
    'username' => (Yii::$app->user->isGuest) ? $displayName : Yii::$app->user->getIdentity()->username,
    'text' => [
        'hello' => Yii::t('AffiliateModule.base', 'Hi there {name}!', ["name" => $displayName])
    ]
])

?>

<div class="panel-heading"><strong>Affiliate</strong> <?= Yii::t('AffiliateModule.base', 'overview') ?></div>

<div class="panel-body">
    <p><?= Yii::t('AffiliateModule.base', 'Hello World!') ?></p>

    <?=  Button::primary(Yii::t('AffiliateModule.base', 'Say Hello!'))->action("affiliate.hello")->loader(false); ?></div>
