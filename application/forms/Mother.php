<?php

class Application_Form_Mother extends Zend_Form
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


        //The family name of the doctor
        $birth = new Zend_Form_Element_Text('birth');
        $birth->setLabel('Date Of Birth')
            ->setRequired(true)
            ->addFilter('StripTags')
            ->addFilter('StringTrim')
            ->addValidator('NotEmpty');


        //The family name of the doctor
        $age = new Zend_Form_Element_Text('age');
        $age->setLabel('Age')
            ->setRequired(true)
            ->addFilter('StripTags')
            ->addFilter('StringTrim')
            ->addValidator('NotEmpty');


        //The family name of the doctor
        $occupation = new Zend_Form_Element_Text('occupation');
        $occupation->setLabel('Occupation')
            ->setRequired(true)
            ->addFilter('StripTags')
            ->addFilter('StringTrim')
            ->addValidator('NotEmpty');



        $nationality = new Zend_Form_Element_Select('nationality');
        $nationality ->setLabel('Natinality')

            ->addMultiOptions(array(
                '1' => 'Japan',
                '2' => 'China'));



        //The email of the doctor
        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('Email')
            ->setRequired(true)
            ->addFilter('StripTags')
            ->addFilter('StringTrim')
            ->addValidator('NotEmpty');


        //The family name of the doctor
        $password = new Zend_Form_Element_Text('password');
        $password->setLabel('Password')
            ->setRequired(true)
            ->addFilter('StripTags')
            ->addFilter('StringTrim')
            ->addValidator('NotEmpty');


        //The family name of the doctor
        $password1 = new Zend_Form_Element_Text('password1');
        $password1->setLabel('Password **')
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
        $this->addElements(array($id, $name, $family_name,$birth,$age,$occupation,$nationality,$password,$password1,$phone,$email,$submit)); }
}