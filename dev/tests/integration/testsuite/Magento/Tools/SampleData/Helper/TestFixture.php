<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Tools\SampleData\Helper;


class TestFixture extends Magento\SampleData\Helper\Fixture
{
    public function getPath($subPath)
    {
        $file = realpath(__DIR__ . '/../_files/fixtures/' . ltrim($subPath, '/'));
        if (file_exists($file)) {
            return $file;

        }
        return parent::getPath($subPath);
    }
}
