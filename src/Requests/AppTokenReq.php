<?php

namespace Wenhsing\Tongtu\Requests;

class AppTokenReq extends Request
{
    protected $method = 'GET';
    protected $uri = '/open-platform-service/devApp/appToken';

    public function dependent(array $data = null)
    {
        return [
            'query' => [
                'accessKey' => $this->config->get('app_key', ''),
                'secretAccessKey' => $this->config->get('app_secret', ''),
            ],
        ];
    }

    public function format(array $data = [])
    {
        if (
            isset($data['success'])
            && isset($data['code'])
            && $data['success']
            && 0 == $data['code']
        ) {
            return $data['datas'];
        }
        throw new ServerException("Error.", 1, $data);
    }
}
