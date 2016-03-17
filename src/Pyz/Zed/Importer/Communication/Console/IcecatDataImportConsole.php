<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Importer\Communication\Console;

use Spryker\Zed\Console\Business\Model\Console as SprykerConsole;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @method \Pyz\Zed\Importer\Business\ImporterFacade getFacade()
 */
class IcecatDataImportConsole extends SprykerConsole
{

    const COMMAND_NAME = 'import:icecat-data';
    const DESCRIPTION = 'Imports Icecat demo data http://icecat.biz';

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setName(self::COMMAND_NAME)
            ->setDescription(self::DESCRIPTION);
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getFacade()->import($output, $this->getMessenger());
    }

}
