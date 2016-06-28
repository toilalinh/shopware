<?php
/**
 * Shopware 4
 * Copyright © shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Commands;

use Shopware\Components\Snippet\DatabaseHandler;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @category  Shopware
 * @package   Shopware\Command
 * @copyright Copyright (c) 2013, shopware AG (http://www.shopware.de)
 */
class SnippetsToDbCommand extends ShopwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('sw:snippets:to:db')
            ->setDescription('Load snippets from .ini files into database')
            ->addOption(
                'include-plugins',
                null,
                InputOption::VALUE_NONE,
                'If given, the active plugin snippets will also be loaded'
            )
            ->addOption(
                'force',
                'f',
                InputOption::VALUE_NONE,
                'If given, the file will be overwritten if it already exists'
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var DatabaseHandler $databaseLoader */
        $databaseLoader = $this->container->get('shopware.snippet_database_handler');
        $force = $input->getOption('force');

        $databaseLoader->setOutput($output);
        $databaseLoader->loadToDatabase(null, $force);

        //Import plugin snippets
        if ($input->getOption('include-plugins')) {
            $pluginRepository = $this->container->get('shopware.model_manager')->getRepository('Shopware\Models\Plugin\Plugin');
            $plugins = $pluginRepository->findByActive(true);
            $pluginBasePath = $this->container->get('application')->AppPath('Plugins');

            foreach ($plugins as $plugin) {
                $pluginPath = implode('/', array(
                    rtrim($pluginBasePath, '/'),
                    $plugin->getSource(),
                    $plugin->getNamespace(),
                    $plugin->getName()
                ));

                $output->writeln('<info>Importing snippets for '.$plugin->getName().' plugin</info>');
                $databaseLoader->loadToDatabase($pluginPath.'/Snippets/', $force);
                $databaseLoader->loadToDatabase($pluginPath.'/snippets/', $force);
                $databaseLoader->loadToDatabase($pluginPath.'/Resources/snippet/', $force);
            }

            $output->writeln('<info>Plugin snippets processed correctly</info>');
        }
    }
}
