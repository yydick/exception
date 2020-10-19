<?php

/**
 * 异常处理注册
 * 
 * Class ExceptionHandler 注册异常处理
 * 
 * PHP version 7.2
 * 
 * @category Spool
 * @package  Exception
 * @author   yydick Chen <yydick@sohu.com>
 * @license  https://spdx.org/licenses/Apache-2.0.html Apache-2.0
 * @link     http://url.com
 * @DateTime 2020-10-19
 */

namespace Spool\Exception;

/**
 * 异常处理注册
 * 
 * Class ExceptionHandler 注册异常处理
 * 
 * PHP version 7.2
 * 
 * @category Spool
 * @package  Exception
 * @author   yydick Chen <yydick@sohu.com>
 * @license  https://spdx.org/licenses/Apache-2.0.html Apache-2.0
 * @link     http://url.com
 * @DateTime 2020-10-19
 */
class ExceptionHandler
{
    protected static $expception = [];
    protected static $error = [];
    protected static $shutdown = [];
    /**
     * 开始监控所有的出错信息
     * 
     * @return void
     */
    public function hookAllError(): void
    {
    }
    /**
     * 设置一个异常处理函数
     * 
     * @param callable $expceptionHandler 要设置的异常处理函数
     * 
     * @return string
     */
    public function pushExceptionHandler(callable $expceptionHandler): ?string
    {
        return null;
    }
}
