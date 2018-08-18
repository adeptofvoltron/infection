<?php
/**
 * Copyright © 2017-2018 Maks Rafalko
 *
 * License: https://opensource.org/licenses/BSD-3-Clause New BSD License
 */

declare(strict_types=1);

namespace Infection\Tests\Mutator\ConditionalBoundary;

use Infection\Tests\Mutator\AbstractMutatorTestCase;

/**
 * @internal
 */
final class LessThanTest extends AbstractMutatorTestCase
{
    /**
     * @dataProvider provideMutationCases
     */
    public function test_mutator($input, $expected = null): void
    {
        $this->doTest($input, $expected);
    }

    public function provideMutationCases(): array
    {
        return [
            'It mutates less than' => [
                <<<'PHP'
<?php

1 < 2;
PHP
                ,
                <<<'PHP'
<?php

1 <= 2;
PHP
                ,
            ],
        ];
    }
}
