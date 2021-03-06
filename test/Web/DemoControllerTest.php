<?php

namespace Web;

use Swoft\Test\Web\AbstractTestCase;


/**
 * @uses      DemoControllerTest
 * @version   2017年11月30日
 * @author    huangzhhui <huangzhwork@gmail.com>
 * @copyright Copyright 2010-2017 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class DemoControllerTest extends AbstractTestCase
{

    /**
     * @test
     * @covers \App\Controllers\DemoController
     */
    public function actionView()
    {
        $response = $this->request('GET', '/demo2/view', [], parent::ACCEPT_VIEW);
        $response->assertSuccessful()->assertSee('Swoft')->assertSee('没有使用 layout');
    }

    /**
     * @test
     * @covers \App\Controllers\DemoController
     */
    public function actionLayout()
    {
        $response = $this->request('GET', '/demo2/layout', [], parent::ACCEPT_VIEW);
        $response->assertSuccessful()->assertSee('Swoft')->assertSee('使用布局文件');
    }

}