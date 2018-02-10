<?php
/**
 * Copyright © 2016 Vihadigitalcom. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Vihadigitalcom\AlsoBought\Model\ResourceModel\Relation;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Vihadigitalcom\AlsoBought\Model\Relation','Vihadigitalcom\AlsoBought\Model\ResourceModel\Relation');
    }

    /**
     * Truncate relations table
     *
     * @return $this
     */
    public function truncate()
    {
        $connection = $this->getConnection();
        $connection->truncateTable($this->getMainTable());

        return $this;
    }

}