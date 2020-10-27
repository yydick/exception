<?php

/**
 * Spool 通用异常处理
 * 
 * Class CliException 异常处理
 * 
 * PHP version 7.2
 * 
 * @category Spool
 * @package  Exception
 * @author   yydick Chen <yydick@sohu.com>
 * @license  https://spdx.org/licenses/Apache-2.0.html Apache-2.0
 * @link     http://url.com
 */

namespace Spool\Exception;

use \Exception;

/**
 * Spool 通用异常处理
 * 
 * Class CliException 异常处理
 * 
 * PHP version 7.2
 * 
 * @category Spool
 * @package  Exception
 * @author   yydick Chen <yydick@sohu.com>
 * @license  https://spdx.org/licenses/Apache-2.0.html Apache-2.0
 * @link     http://url.com
 */
class SpoolException extends Exception
{
    /**
     * 异常信息渲染
     * 
     * @param \Exception $exp 捕获的异常
     * 
     * @return void
     */
    public function render(\Exception $exp)
    {
    }
    /**
     * 失败了
     * 
     * @param string $msg  出错信息
     * @param int    $code 出错编号
     * 
     * @return void
     */
    public function failed(string $msg = '', int $code = 0): void
    {
        throw new \Exception($msg, $code);
    }
}
