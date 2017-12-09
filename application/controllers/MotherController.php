<?php

class MotherController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

  


 public function listAction()
    {
     $this->_helper->_layout->setLayout('content');

      }


 public function addAction()
    {
        $this->_helper->_layout->setLayout('content');

        $form = new Application_Form_Mother();
        $this->view->form = $form;


        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $name = $form->getValue('name');
                $family_name = $form->getValue('family_name');
                $speciality= $form->getValue('speciality');
                $email = $form->getValue('email');
                $phone=$form->getValue('phone');
                $mother = new Application_Model_ModelMother();


                $mother->addMother($name,$family_name,$speciality,$email,$phone);
                $this->_helper->redirector('list');
            } else {
                $form->populate($formData);
            }
        }


    }



      
}

