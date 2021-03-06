<?php

namespace FondOfOryx\Zed\ErpOrderPageSearch\Persistence;

use Orm\Zed\ErpOrder\Persistence\ErpOrderQuery;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method \FondOfOryx\Zed\ErpOrderPageSearch\Persistence\ErpOrderPageSearchPersistenceFactory getFactory()
 */
class ErpOrderPageSearchQueryContainer extends AbstractQueryContainer implements ErpOrderPageSearchQueryContainerInterface
{
    /**
     * @param int[] $erpOrderIds
     *
     * @return \Orm\Zed\ErpOrder\Persistence\ErpOrderQuery
     */
    public function queryErpOrdersByErpOrderIds(
        array $erpOrderIds
    ): ErpOrderQuery {
        $erpOrderQuery = $this->getFactory()->getErpOrderQuery()->clear();

        if (empty($erpOrderIds)) {
            return $erpOrderQuery;
        }

        return $erpOrderQuery->filterByIdErpOrder_In(
            $erpOrderIds
        );
    }

    /**
     * @param int[] $erpOrderIds
     *
     * @return \Orm\Zed\ErpOrder\Persistence\ErpOrderQuery
     */
    public function queryErpOrderWithAddressesAndCompanyBusinessUnitByErpOrderIds(
        array $erpOrderIds
    ): ErpOrderQuery {
        $fooErpOrderQuery = $this->queryErpOrdersByErpOrderIds($erpOrderIds);

        return $fooErpOrderQuery;
    }
}
