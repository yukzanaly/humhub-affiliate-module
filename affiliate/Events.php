<?php

namespace  affiliate\humhub\modules\affiliate;

use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Affiliate',
            'icon' => '<i class="fa fa-code"></i>',
            'url' => Url::to(['/affiliate/index']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'affiliate' && Yii::$app->controller->id == 'index'),
        ]);
    }

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Affiliate',
            'url' => Url::to(['/affiliate/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-code"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'affiliate' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }
}
