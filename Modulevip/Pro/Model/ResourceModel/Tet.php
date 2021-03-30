<?php

namespace Modulevip\Pro\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Tet extends AbstractDb
{
    /**
     * Tet Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('modulevip_pro_tet', 'id');
    }
}
