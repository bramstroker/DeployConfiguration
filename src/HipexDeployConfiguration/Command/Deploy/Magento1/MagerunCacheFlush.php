<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. 2018
 */

namespace HipexDeployConfiguration\Command\Deploy\Magento1;

use HipexDeployConfiguration\DeployCommand;
use HipexDeployConfiguration\ServerRole;

class MagerunCacheFlush extends DeployCommand
{
    /**
     * DeployModeSet constructor.
     */
    public function __construct()
    {
        parent::__construct('magerun cache:flush');
        $this->setServerRoles([ServerRole::APPLICATION_FIRST]);
    }
}
