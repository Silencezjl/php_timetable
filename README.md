# php_timetable
PHP无课表系统

####前言
这是以前做过的一个小系统，开源给大家分享一下，主要用到PHP的curl和mysql，加上前端[SUI Mobile](http://m.sui.taobao.org/)的布局。利用curl爬去校园网的课表数据，从而实现功能。效果图如下：

![xiaoguo](/images/xiaoguo.png)

####相关工作
首先你要会用浏览器的开发者工具F12，其实就是用来抓包，chrome可以用Firebug。然后就是有个PHP的服务器，xampp这样的就可以啦！当然，做后端开发的都必须懂一些前段知识。

####核心思路
模拟校园网登陆，首先抓包看一下校园网的登陆方式，
发现我们校园网是直接POST登录，然后记录Cookie的，于是就可以使用PHP的CURL来模拟登录啦！然后用Cookie模拟POST获取课表信息。
