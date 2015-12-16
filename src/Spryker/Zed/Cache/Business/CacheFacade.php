<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\Cache\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;
use Spryker\Zed\Cache\CacheConfig;

/**
 * @method CacheDependencyContainer getBusinessFactory()
 * @method CacheConfig getConfig()
 */
class CacheFacade extends AbstractFacade
{

    /**
     * @return array
     */
    public function deleteAllFiles()
    {
        return $this->getBusinessFactory()->createCacheDelete()->deleteAllFiles();
    }

}
