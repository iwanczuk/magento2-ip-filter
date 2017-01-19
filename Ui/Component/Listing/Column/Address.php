<?php
/**
 * See LICENSE.txt for license details.
 */

namespace MageWare\IpFilter\Ui\Component\Listing\Column;

class Address extends \Magento\Ui\Component\Listing\Columns\Column
{
    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            $fieldName = $this->getData('name');
            foreach ($dataSource['data']['items'] as &$item) {
                if (isset($item[$fieldName])) {
                    $item[$fieldName] = long2ip($item[$fieldName]);
                }
            }
        }

        return $dataSource;
    }
}
