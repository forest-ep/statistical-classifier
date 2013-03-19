<?php

/**
 * This file is part of the Statistical Classifier package.
 *
 * (c) Cam Spiers <camspiers@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Camspiers\StatisticalClassifier\Console\Command\Index;

use Symfony\Component\Console\Input;
use Symfony\Component\Console\Output;

use Camspiers\StatisticalClassifier\Console\Command\Command;

/**
 * @author Cam Spiers <camspiers@gmail.com>
 * @package Statistical Classifier
 */
class RemoveCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('index:remove')
            ->setDescription('Remove an index')
            ->configureIndex();
    }

    protected function execute(Input\InputInterface $input, Output\OutputInterface $output)
    {
        $this->cache->delete($input->getArgument('index'));
    }
}
