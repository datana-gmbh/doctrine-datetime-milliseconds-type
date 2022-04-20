<?php

declare(strict_types=1);

/*
 * This file is part of datana-gmbh/doctrine-postgresql-milliseconds-platform package.
 *
 * (c) Datana GmbH <info@datana.rocks>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Datana\Doctrine\Postgres\Platform\Doctrine\DBAL\Platforms;

use Doctrine\DBAL\Platforms\PostgreSQL100Platform;

final class PostgreSQLMillisecondsPlatform extends PostgreSQL100Platform
{
    public function getDateTimeFormatString(): string
    {
        return sprintf('%s.u', parent::getDateTimeFormatString());
    }
}
