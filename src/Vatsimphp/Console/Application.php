<?php

/*
 * This file is part of the Vatsimphp package
 *
 * Copyright 2016 - Jelle Vink <jelle.vink@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Vatsimphp\Console;

use Vatsimphp\Vatsimphp;
use Vatsimphp\Command\UpdateCommand;
use Vatsimphp\Command\StatusCommand;
use Symfony\Component\Console\Application as BaseApplication;

/**
 *
 * Console application
 *
 */
class Application extends BaseApplication
{
    /**
     * Ctor
     */
    public function __construct()
    {
        parent::__construct('VatsimPHP', Vatsimphp::VERSION);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();
        $commands[] = new UpdateCommand();
        $commands[] = new StatusCommand();
        return $commands;
    }
}
