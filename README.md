## 安装方法

> composer require ghzs/alidayu --prefer-dist 

#### 注意：需要提前安装好 composer， 安装方式[参考这里](https://pkg.phpcomposer.com/)

## 使用方法

> $sms = \Ghzhushou\Alidayu('$app_key', '$app_secret');     
> $sms->sendCode($mobile, $code, $app_name);

#### 参数注解
- $app_key and $app_secret 阿里大鱼会提供.
- $mobile: 接收验证码的手机号码(必填).
- $code: 验证码(必填).
- $app_name:应用名称(选填)，比如 光环助手 / 贝尔助手等。 默认为 闪趣网络.

## 例子

```php
<?php
    $sms = new \Ghzhushou\Alidayu('$app_key', '$app_secret');
    $sms->sendCode('15520303021', '123456', '光环助手');
?>
```

客户端接收到的短信内容如下：

> [身份验证] 验证码 123456， 您正在进行 光环助手 的身份验证，打死不要告诉别人哦！
