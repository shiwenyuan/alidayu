<?php

require_once __DIR__."/../vendor/autoload.php";

class TestSend
{

    public function testSendSms()
    {
        $client = new TopClient('xxxx', 'xxxx');

        $req = new AlibabaAliqinFcSmsNumSendRequest;
        $param = array();
        $req->setSmsType("normal");
        $req->setSmsFreeSignName('xxx');
        $req->setSmsParam(json_encode($param));
        $req->setRecNum('xxx');
        $req->setSmsTemplateCode('xxx');
        $ret = $client->execute($req);
        var_dump($ret);
    }
}
(new TestSend)->testSendSms();
