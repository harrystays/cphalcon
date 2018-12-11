<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Di\FactoryDefault;

use UnitTester;

class GetDefaultCest
{
    /**
     * Tests Phalcon\Di\FactoryDefault :: getDefault()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function diFactorydefaultGetDefault(UnitTester $I)
    {
        $I->wantToTest("Di\FactoryDefault - getDefault()");
        $I->skipTest("Need implementation");
    }
}