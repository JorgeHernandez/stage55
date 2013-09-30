<?php

namespace ServerGrove\SGLiveChatBundle\Document;

use Doctrine\ODM\MongoDB\DocumentRepository;
use ServerGrove\SGLiveChatBundle\Document\Operator;

/**
 * Description of RatingRepository
 *
 * @author Jorge Hernandez<jorge.hernandez64@outlook.es>
 */
class RatingRepository extends DocumentRepository
{

    public function getOperatorRatings(Operator $operator)
    {
        return $this->findBy(array('chatOperatorId' => $operator));
    }

}