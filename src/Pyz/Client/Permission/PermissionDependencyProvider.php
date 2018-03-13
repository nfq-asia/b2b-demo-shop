<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\Permission;

use Spryker\Client\CompanyRole\Plugin\PermissionStoragePlugin;
use Spryker\Client\PermissionExtension\Dependency\Plugin\PermissionStoragePluginInterface;
use Spryker\Client\Permission\PermissionDependencyProvider as SprykerPermissionDependencyProvider;
use SprykerShop\Client\CheckoutPage\Plugin\PlaceOrderWithAmountUpToPermissionPlugin;

class PermissionDependencyProvider extends SprykerPermissionDependencyProvider
{
    /**
     * @return \Spryker\Client\PermissionExtension\Dependency\Plugin\PermissionStoragePluginInterface[]
     */
    protected function getPermissionStoragePlugins(): array
    {
        return [
            new PermissionStoragePlugin()
        ];
    }

    /**
     * @return \Spryker\Shared\PermissionExtension\Dependency\Plugin\PermissionPluginInterface[]
     */
    protected function getPermissionPlugins(): array
    {
        return [
            new PlaceOrderWithAmountUpToPermissionPlugin()
        ];
    }
}
