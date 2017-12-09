<?php

class DoctorController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }

  
 public function listAction()
    {
     $this->_helper->_layout->setLayout('content');
     $doctor = new Application_Model_ModelDoctor();
     $this->view->doctor = $doctor->fetchAll();

      }


 public function addAction()
    {
     $this->_helper->_layout->setLayout('content');

        $form = new Application_Form_Doctor();
        $this->view->form = $form;


    if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $name = $form->getValue('name');
                $family_name = $form->getValue('family_name');
                $speciality= $form->getValue('speciality');
                $email = $form->getValue('email');
                $phone=$form->getValue('phone');
                $doctor = new Application_Model_ModelDoctor();


                $doctor->addDoctor($name,$family_name,$speciality,$email,$phone);
                $this->_helper->redirector('list');
            } else {
                $form->populate($formData);
            }
}




      }




public function updateAction()
    {
$form = new Application_Form_Doctor();
$this->view->form = $form;
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $id = (int)$form->getValue('id');
                $name = $form->getValue('name');
                $family_name = $form->getValue('family_name');
                $speciality= $form->getValue('speciality');
                $email = $form->getValue('email');
                $phone=$form->getValue('phone');


                $doctor = new Application_Model_ModelDoctor();
                $doctor->updateDoctor($id,$name,$family_name,$speciality,$email,$phone);
                $this->_helper->redirector('list');
            } else {
                $form->populate($formData);
            }
        } else {
            $id = $this->_getParam('id', 0);
            if ($id > 0) {
                $doctor = new Application_Model_ModelDoctor();
                $form->populate($doctor->getDoctor($id));
            }
}
}








public function deleteAction()
    {
if ($this->getRequest()->isPost()) {
    $del = $this->getRequest()->getPost('del');
    if ($del == 'Yes') {
        $id = $this->getRequest()->getPost('id');
        $doctor = new Application_Model_ModelDoctor();
        $doctor->deleteDoctor($id);
}
    $this->_helper->redirector('list');
} else {
    $id = $this->_getParam('id', 0);

    
    $doctor = new Application_Model_ModelDoctor();
    $this->view->doctor = $doctor->getDoctor($id);
}
      }

      
}

