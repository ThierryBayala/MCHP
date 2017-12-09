<?php
class Zend_View_Helper_LoggedInAs extends Zend_View_Helper_Abstract 
{
    public function loggedInAs ()
    {
        $form = new Application_Form_Login();

        $auth = Zend_Auth::getInstance();
        if ($auth->hasIdentity()) {
            
            $username = $auth->getIdentity()->username;
            $logoutUrl = $this->view->url(array('controller'=>'auth', 'action'=>'logout'), null, true);
            return 'Welcome ' . ' <span class="current-user">'.$username .'</span> '.'<span class="log-out">'.  '. <a href="'.$logoutUrl.'">Logout</a></span>';
        } 

        $request = Zend_Controller_Front::getInstance()->getRequest();
        $controller = $request->getControllerName();
        $action = $request->getActionName();
        if($controller == 'auth' && $action == 'index') {
            return '';
        }
        $loginUrl = $this->view->url(array('controller'=>'auth', 'action'=>'index'));
        


        return  $form->setAction($loginUrl);
    }
}