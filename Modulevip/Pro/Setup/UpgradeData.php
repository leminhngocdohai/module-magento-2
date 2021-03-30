<?php

namespace Modulevip\Pro\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeData
 *
 * @package Modulevip\Pro\Setup
 */
class UpgradeData implements UpgradeDataInterface
{

    /**
     * Creates sample blog posts
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if ($context->getVersion()
            && version_compare($context->getVersion(), '1.0.1') < 0
        ) {
            $tableName = $setup->getTable('modulevip_pro_tet');

            $data = [
                [
                    'title' => 'Title 1 na',
                    'content' => 'Chào mừng đến với the first post.',
                    'image' => 'anh-dep-02468.jpg',
                ],
                [
                    'title' => 'Title 2 na',
                    'content' => 'Chào mừng đến với the second post.',
                    'image' => 'ao-dep-13579.jpg',
                ],
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);
        }

        $setup->endSetup();
    }
}