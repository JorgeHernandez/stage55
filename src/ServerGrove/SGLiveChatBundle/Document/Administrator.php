<?php

namespace ServerGrove\SGLiveChatBundle\Document;

/**
 * @author Jorge Hernandez<jorge.hernandez64@outlook.es>
 *
 * @mongodb:Document
 */
class Administrator extends Operator
{

    /**
     * @return array
     */
    public function getRoles()
    {
        return array('ROLE_USER', 'ROLE_ADMIN');
    }
}
