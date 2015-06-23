<?php
App::uses('Component', 'Controller');
class RejectUpperCaseComponent extends Component {


/**
 * Controller名とAction名に大文字が含まれる場合に例外を投げる
 * [a-z][0-9][_]のみを有効とする
 * @throws BadRequestException
 * @param controller
 * @return void
 */
     public function initialize(Controller $controller)
     {
        parent::initialize($controller);

        //requestのcontroller名とaction名を取得
        $reqController = $controller->request->controller;
        $reqAction = $controller->request->action;

        if ($reqController !== strtolower($reqController)) {
            // 大文字が含まれている
            throw new BadRequestException(__('This address is not valid'));
        }

        if ($reqAction !== strtolower($reqAction)) {
            // 大文字が含まれている
            throw new BadRequestException(__('This address is not valid'));
        }

    }
}
