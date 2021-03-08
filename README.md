# url - 获取分享链接

以当前用户身份调用此接口，生成临时url供第三方访问。

## 安装

	./tool/jdcloud-plugin.sh add ../jdcloud-plugin-url

## 接口

生成分享URL：

	getShareUrl(ac, ...) -> url

- ac: 原调用名。

将动态调用转成一个url。分享到别处后，打开时可以看到和原调用一样的内容（免登录，同时可以隐藏原URL中的细节）。
第三方可以在该用户未退出登录期间使用该url获取数据；用户退出登录后，则无法使用该url(显示未登录)。
常用于导出文件接口。
