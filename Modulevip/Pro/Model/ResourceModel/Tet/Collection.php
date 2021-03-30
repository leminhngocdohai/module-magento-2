<?php
namespace Modulevip\Pro\Model\ResourceModel\Tet;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Modulevip\Pro\Model\Tet', 'Modulevip\Pro\Model\ResourceModel\Tet');
    }
}
