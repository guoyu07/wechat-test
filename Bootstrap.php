<?php

namespace xutl\test;

use EasyWeChat\Foundation\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        /**
         * 预加载就是用来让插件自己注册自己的处理方法
         */
        $app->server->setMessageHandler(function ($message) {
            return "您好！欢迎关注我!";
        });
    }
}

 