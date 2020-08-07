<?php

namespace affiliate\humhub\modules\affiliate\controllers;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@affiliate/views/layouts/default";

    /**
     * Renders the index view for the module
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

