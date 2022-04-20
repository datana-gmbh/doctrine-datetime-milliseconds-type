<?php

declare(strict_types=1);

/*
 * This file is part of datana-gmbh/doctrine-datetime-milliseconds-type package.
 *
 * (c) Datana GmbH <info@datana.rocks>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Datana\Doctrine\Type\Tests\Unit\Doctrine\DBAL\Types\Type;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\TestCase;

abstract class TypeTestCase extends TestCase
{
    /**
     * @test
     */
    final public function nameMethod(): void
    {
        $type = static::createType();

        self::assertSame(
            static::name(),
            $type->getName(),
        );
    }

    abstract protected static function createType(): Type;

    abstract protected static function name(): string;
}
