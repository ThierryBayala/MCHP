<?php
class Application_Model_ModelDoctor extends Zend_Db_Table_Abstract
{
    protected $_name = 'Doctor';

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

    public function addDoctor($name,$family_name,$speciality,$email,$phone)
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


    public function updateDoctor($id, $name,$family_name,$speciality,$email,$phone)
    {
        $data = array('name' => $name,'family_name' => $family_name,'speciality' => $speciality,'email' => $email, 'phone' => $phone,);

        $this->update($data, 'id = '. (int)$id);
    }


/*****************************************************************************/
// The function delete is use for delete user in the database                //
/*****************************************************************************/


    public function deleteDoctor($id)
    {
        $this->delete('id =' . (int)$id);
    }

}