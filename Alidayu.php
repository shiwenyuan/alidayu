<?php

namespace Ghzhushou;

include dirname(__FILE__) . '/src/alidayu/TopSdk.php';
date_default_timezone_set('Asia/Shanghai');

class Alidayu
{
    private $app_key;
    private $app_secret;
    public function __construct($app_key, $app_secret)
    {
        $this->app_key = $app_key;
        $this->app_secret = $app_secret;
    }

    public function sendCode($mobile, $code, $app_name = '闪趣网络')
    {
        $client = new \TopClient;
        $client->appkey = $this->app_key;
        $client->secretKey = $this->app_secret;
        $request = new \AlibabaAliqinFcSmsNumSendRequest;
        $request->setExtend("123456");
        $request->setSmsType("normal");
        $request->setSmsFreeSignName("身份验证");
        $request->setSmsParam("{\"code\":\"$code\",\"product\":\" " . $app_name . " \"}");
        $request->setRecNum($mobile);
        $request->setSmsTemplateCode("SMS_41025153");
        $response = $client->execute($request);
        return $response;
    }
}
