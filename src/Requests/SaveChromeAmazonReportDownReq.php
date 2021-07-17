<?php

namespace Wenhsing\Tongtu\Requests;

use Wenhsing\Tongtu\Traits\ApiSignTrait;
use Wenhsing\Tongtu\Traits\OpenApiTrait;

class SaveChromeAmazonReportDownReq extends Request
{
    use ApiSignTrait;
    use OpenApiTrait;

    protected $uri = '/api-service/openapi/tongtool/saveChromeAmazonReportDown';
}
