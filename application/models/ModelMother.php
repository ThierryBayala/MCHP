<?php
class Application_Model_ModelMother extends Zend_Db_Table_Abstract
{
    protected $_name = 'Mother';

    /*****************************************************************************/
//The follow function are use for get Id of a selected Doctor in the list    //
    /*****************************************************************************/

    public function getDoctor($id)
    {
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
            throw new Exception("Could not find row $id");
        }
        return $row->toArray();
    }
// Function for insert data of Doctor in the databse ...

    public function addMother($name,$family_name,$speciality,$email,$phone)
    {
        $data = array(
            'name' => $name,
            'family_name' => $family_name,
            'speciality' => $speciality,
            'email' => $email,
            'phone' => $phone,
        );
        $this->insert($data);
    }

    /*****************************************************************************/
// The following function is use for update doctor information               //
    /*****************************************************************************/


    public function updateMother($id, $name,$family_name,$speciality,$email,$phone)
    {
        $data = array('name' => $name,'family_name' => $family_name,'speciality' => $speciality,'email' => $email, 'phone' => $phone,);

        $this->update($data, 'id = '. (int)$id);
    }


    /*****************************************************************************/
// The function delete is use for delete user in the database                //
    /*****************************************************************************/


    public function deleteMother($id)
    {
        $this->delete('id =' . (int)$id);
    }

}