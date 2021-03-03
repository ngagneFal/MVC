<?php
namespace src\model;
use libs\system\MOdel;

class RolesDb extends MOdel
{
    public function findAll()
    
    {

        return $this->entityManager
                    ->createQuery("SELECT r FROM Roles+ r")
                    ->getResult();
        // return array("ROLE_COMPTA","ROLE_FINANCE");
    }
}

?>