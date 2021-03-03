<?php

   require_once '../bootstrap.php';
    
    $role = new Roles();
    // $role->setId(3);
    $role->setNom('ROLE_USER3');
    
    $entityManager->persist($role);
    $entityManager->flush();

    echo $role->getId();

?>