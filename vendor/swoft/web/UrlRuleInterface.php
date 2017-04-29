<?php

namespace swoft\web;

/**
 *
 *
 * @uses      UrlRuleInterface
 * @version   2017年04月26日
 * @author    lilin <lilin@ugirls.com>
 * @copyright Copyright 2010-2016 北京尤果网文化传媒有限公司
 * @license   PHP Version 5.x {@link http://www.php.net/license/3_0.txt}
 */
interface UrlRuleInterface
{
    public function parseRequest($manager, $request);
}