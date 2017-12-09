<?php

class Application_Form_Doctor extends Zend_Form
{
    public function init()
    {
        $this->setName('doctor');
        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');

        // The name of the doctor
        $name = new Zend_Form_Element_Text('name');
        $name->setLabel('Name')
               ->setRequired(true)
               ->addFilter('StripTags')
               ->addFilter('StringTrim')
               ->addValidator('NotEmpty');

        //The family name of the doctor
        $family_name = new Zend_Form_Element_Text('family_name');
        $family_name->setLabel('Family Name')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty');


        // The speciality of the doctor. The select option is populate by the data from Speciality table

        $speciality = new Zend_Form_Element_Select('speciality');
        $speciality ->setLabel('Speciality')

                    ->addMultiOptions(array(
                    '1' => 'Cardiology',
                    '2' => 'Pathology'));



        //The email of the doctor
        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('Email')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty');

        //The telephone number of the doctor
        $phone = new Zend_Form_Element_Text('phone');
        $phone->setLabel('Telephone')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty');



        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id', 'submitbutton');
$this->addElements(array($id, $name, $family_name,$speciality,$phone, $email,$submit)); }
}