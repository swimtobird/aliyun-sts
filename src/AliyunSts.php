<?php
/**
 *
 * User: swimtobird
 * Date: 2020-10-28
 * Email: <swimtobird@gmail.com>
 */

namespace Swimtobird\Sts;

use Helium\Sts\Sts;

class AliyunSts
{
    public function getToken(): array
    {
        return (new Sts(config('sts')))->token();
    }
}