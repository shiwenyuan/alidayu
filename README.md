## 安装方法

> composer require shiwenyuan/alidayu 

#### 注意：需要提前安装好 composer， 安装方式[参考这里](https://pkg.phpcomposer.com/)

## 说明
```
此项目只是把alidayu官方的sdk composer化了一下  方便框架引用 没有做任何封装
```
## 例子

```php
<?php
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
?>
```

