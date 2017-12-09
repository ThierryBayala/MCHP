<?php

class ChildController extends Zend_Controller_Action
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

      }



      public function updateAction()
    {
     //update the list

      }

      public function deleteAction()
    {
     //Action for delete data

      }


}

