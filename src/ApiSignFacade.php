<?php
/**
 * Created by phpstorm.
 * User: yangliang
 * Date: 2020/8/31 0031
 * Time: 17:50
 */


namespace Yang\ApiSign;

use Illuminate\Support\Facades\Facade;
use Yang\ApiSign\Service\ApiSignService;

class ApiSignFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ApiSignService::class;
    }
}
