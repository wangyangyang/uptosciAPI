uptosciAPI
==========

博文网开放平台接口 http://open.uptosci.com <br/>


博文网开放平台介绍：<br/>
博文医学学术数据开放平台向广大医疗信息服务工作者开放博文网全部基础数据（目前接口还在不断的完善中），主要数据如下：<br/>
2500万Pubmed文献摘要数据；<br/>
2万期刊数据，包含SCI影像因子数据；<br/>
1万文献 摘要翻译数据；<br/>
20万常用药物数据；<br/>
药典及中医药数据数据；<br/>



文件说明：
oauth.class.php 博文网 OAuth 认证类(OAuth2)、操作类
index.php 首页
config.php 配置文件
callbacl.php 回调处理方法
list.php 报道列表信息
news.php 业内新闻列表信息
showdetail.php 文献详情
memberinfo.php 用户基本信息获取

程序使用说明：
1.先在 http://open.uptosci.com 创建应用
2.修改配置文件 config.php 中的 CLINET_KEY,CLINET_SKEY,CALLBACK_URL
3.测试程序


注意：
本例只是简单的一个demo展示
