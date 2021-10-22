<?php
if (!defined('MC_CORE')) {
    header("Location: /");
    exit();
}
?><!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="UTF-8">
    <title>音乐搜索器 - 多站合一音乐搜索,音乐在线试听</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="author" content="maicong.me">
    <meta name="keywords" content="音乐搜索,音乐搜索器,音乐试听,音乐在线听,网易云音乐,QQ音乐,酷狗音乐,酷我音乐,虾米音乐,百度音乐,一听音乐,咪咕音乐,荔枝FM,蜻蜓FM,喜马拉雅FM,全民K歌,5sing原创翻唱音乐">
    <meta name="description" content="麦葱特制多站合一音乐搜索解决方案，可搜索试听网易云音乐、QQ音乐、酷狗音乐、酷我音乐、虾米音乐、百度音乐、一听音乐、咪咕音乐、荔枝FM、蜻蜓FM、喜马拉雅FM、全民K歌、5sing原创翻唱音乐。">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="音乐搜索器">
    <meta name="application-name" content="音乐搜索器">
    <meta name="format-detection" content="telephone=no">
    	<link rel="shortcut icon" href="Music.svg">
    <link rel="apple-touch-icon" href="static/img/apple-touch-icon.png">
    <link rel="stylesheet" href="//cdn.staticfile.org/amazeui/2.3.0/css/amazeui.min.css">
    <link rel="stylesheet" href="static/css/style.css?v<?php echo MC_VERSION; ?>">
	<style>
	 body{
		background-color: #fff;
		}
	.links{
		color:#000;
	}
	footer{
    width: 100%;
    height:50px;
    position:absolute;
    bottom:-300px;
    left:0px;
    background: #fff;
}
	</style>
</head>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
<body>
    <section class="am-g about">
        <div class="am-container am-margin-vertical-xl">
            <header class="am-padding-vertical">
                <h2 class="about-title about-color">音乐搜索器<p><?php echo MC_VERSION; ?></h2></p>
                <p class="am-text-center">多站合一音乐搜索解决方案</p>
				<p class="am-text-center">不会使用？<a id="copyrightOwner1" href="javascript:void(0)" data-am-modal="{target: '#copr-jiaoc'}" title="使用&注意">请点击这里</a></p>
            </header>
            <hr>
            <div class="am-u-lg-12 am-padding-vertical">
                <form id="j-validator" class="am-form am-margin-bottom-lg" method="post">
                    <div class="am-u-md-12 am-u-sm-centered">
                        <ul id="j-nav" class="am-nav am-nav-pills am-nav-justify am-margin-bottom music-tabs">
                            <li class="am-active" data-filter="name">
                                <a>音乐名称</a>
                            </li>
                            <li data-filter="id">
                                <a>音乐 ID</a>
                            </li>
                            <li data-filter="url">
                                <a>音乐地址</a>
                            </li>
                        </ul>
                        <div class="am-form-group">
                            <input id="j-input" data-filter="name" class="am-form-field am-input-lg am-text-center am-radius" placeholder="例如: 周深 问花" data-am-loading="{loadingText: ' '}" pattern="^.+$" required>
                            <div class="am-alert am-alert-danger am-animation-shake"></div>
                        </div>
                        <div id="j-type" class="am-form-group am-text-center music-type">
                        <?php foreach ($music_type_list as $key => $val) { ?>
                            <label class="am-radio-inline">
                                <input type="radio" name="music_type" value="<?php echo $key; ?>" data-am-ucheck<?php if ($key === 'netease') echo ' checked'; ?>>
                                <?php echo $val; ?>
                            </label>
                            <?php if ($key === 'migu') echo '<br />'; ?>
                        <?php } ?>
                        </div>
                        <button id="j-submit" type="submit" class="am-btn am-btn-primary am-btn-lg am-btn-block am-radius" data-am-loading="{spinner: 'cog', loadingText: '正在搜索相关音乐...', resetText: 'Get'}">Get <svg t="1634869515115" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7026" width="15" height="20"><path d="M412.780231 735.831858 235.097436 558.081525l66.63156-66.657142 111.052259 111.095237 310.945915-311.064618 66.63156 66.657142L412.780231 735.831858z" p-id="7027" fill="#d81e06"></path></svg></button>
                    </div>
                </form>
                <form id="j-main" class="am-form am-u-md-12 am-u-sm-centered music-main">
                    <a type="button" id="j-back" class="am-btn am-btn-success am-btn-lg am-btn-block am-radius am-margin-bottom-lg">成功 Get <svg t="1634869515115" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7026" width="15" height="20"><path d="M412.780231 735.831858 235.097436 558.081525l66.63156-66.657142 111.052259 111.095237 310.945915-311.064618 66.63156 66.657142L412.780231 735.831858z" p-id="7027" fill="#d81e06"></path></svg> 返回继续 <i class="am-icon-reply am-icon-fw"></i></a>
                    <div class="am-g am-margin-bottom-sm">
                        <div class="am-u-lg-6">
                            <div class="am-input-group am-input-group-sm am-margin-bottom-sm" data-am-popover="{content: '音乐地址', trigger: 'hover'}">
                                <span class="am-input-group-label"><i class="am-icon-link am-icon-fw"></i></span>
                                <input id="j-link" class="am-form-field" readonly>
                                <span class="am-input-group-btn">
                                    <a id="j-link-btn" class="am-btn am-btn-default" target="_blank">
                                        <i class="am-icon-external-link"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="am-u-lg-6">
                            <div class="am-input-group am-input-group-sm am-margin-bottom-sm" data-am-popover="{content: '音乐链接', trigger: 'hover'}">
                                <span class="am-input-group-label"><i class="am-icon-music am-icon-fw"></i></span>
                                <input id="j-src" class="am-form-field" readonly>
                                <span class="am-input-group-btn">
                                    <a id="j-src-btn" class="am-btn am-btn-default" target="_blank">
                                        <i id="j-src-btn-icon" class="am-icon-external-link"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-lg-6">
                            <div class="am-input-group am-input-group-sm am-margin-bottom-sm" data-am-popover="{content: '音乐ID', trigger: 'hover'}">
                                <span class="am-input-group-label"><i class="am-icon-list-ol am-icon-fw"></i></span>
                                <input id="j-songid" class="am-form-field" readonly>
                            </div>
                        </div>
                        <div class="am-u-lg-6">
                            <div class="am-input-group am-input-group-sm am-margin-bottom-sm" data-am-popover="{content: '音乐歌词', trigger: 'hover'}">
                                <span class="am-input-group-label"><i class="am-icon-file-text-o am-icon-fw"></i></span>
                                <input id="j-lrc" class="am-form-field" readonly>
                                <span class="am-input-group-btn">
                                    <a id="j-lrc-btn" class="am-btn am-btn-default" target="_blank">
                                        <i id="j-lrc-btn-icon" class="am-icon-external-link"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-lg-6">
                            <div class="am-input-group am-input-group-sm am-margin-bottom-sm" data-am-popover="{content: '音乐名称', trigger: 'hover'}">
                                <span class="am-input-group-label"><i class="am-icon-tag am-icon-fw"></i></span>
                                <input id="j-name" class="am-form-field" readonly>
                            </div>
                        </div>
                        <div class="am-u-lg-6">
                            <div class="am-input-group am-input-group-sm am-margin-bottom-sm" data-am-popover="{content: '音乐作者', trigger: 'hover'}">
                                <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                                <input id="j-author" class="am-form-field" readonly>
                            </div>
                        </div>
                    </div>
                    <div id="j-show" class="am-margin-vertical">
                        <div id="j-player" class="aplayer"></div>
                    </div>
                </form>
        <div class="am-popup" id="copr-jiaoc">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">使用教程</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <p><b>标红</b> 为 <strong>音乐 ID</strong>，<u>下划线</u> 表示 <strong>音乐地址</strong></p>
                    <ul>
                        <li>蜻蜓 FM 的音乐 ID 需要使用 <code>| (管道符)</code> 组合，例如 <code>158696|5266259</code></li>
                        <li>全民 K 歌的音乐名称请输入 <code>shareuid</code>，这是用户的 uid，搜索结果是该用户的所有公开作品</li>
                        <li>全民 K 歌的音乐 ID 请输入 <code>shareid</code> 这是单曲分享 id，搜索结果是该单曲信息</li>
                        <p><span>网易：</span><u>http://music.163.com/#/song?id=<b>25906124</b></u></p>
                        <p><span>ＱＱ：</span><u>http://y.qq.com/n/yqq/song/<b>002B2EAA3brD5b</b>.html</u></p>
                        <p><span>酷狗：</span><u>http://www.kugou.com/song/#hash=<b>08228af3cb404e8a4e7e9871bf543ff6</b></u></p>
                        <p><span>酷我：</span><u>http://www.kuwo.cn/yinyue/<b>382425</b>/</u></p>
                        <p><span>虾米：</span><u>http://www.xiami.com/song/<b>2113248</b></u></p>
                        <p><span>百度：</span><u>http://music.baidu.com/song/<b>266069</b></u></p>
                        <p><span>一听：</span><u>http://www.1ting.com/player/b6/player_<b>357838</b>.html</u></p>
                        <p><span>咪咕：</span><u>http://music.migu.cn/v2/music/song/<b>477803</b></u></p>
                        <p><span>荔枝：</span><u>http://www.lizhi.fm/1947925/<b>2498707770886461446</b></u></p>
                        <p><span>蜻蜓：</span><u>http://www.qingting.fm/channels/<b>158696</b>/programs/<b>5266259</b></u></p>
                        <p><span>喜马拉雅：</span><u>http://www.ximalaya.com/51701370/sound/<b>24755731</b></u></p>
                        <p><span>全民K歌 (shareuid)：</span><u>http://kg.qq.com/node/personal?uid=<b>619a958c25283e88</b></u></p>
                        <p><span>全民K歌 (shareid)：</span><u>https://kg.qq.com/node/play?s=<b>FA3h1gFhd6Vk7Ft4</b></u></p>
                        <p><span>5sing原创：</span><u>http://5sing.kugou.com/yc/<b>3082899</b>.html</u></p>
                        <p><span>5sing翻唱：</span><u>http://5sing.kugou.com/fc/<b>14369766</b>.html</u></p>
                        </ul>
				</div>
			</div>
       </div>
        <div class="am-popup" id="copr-info">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">免责声明</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
				    <p>⚠️ <b>本项目已暂停维护，存档代码仅供学习交流，不得用于商业用途</b></p>
                    <p><b>*本站音频文件来自各网站接口，本站不会修改任何音频文件。</b></p>
                    <p><b>*音频版权来自各网站，本站只提供数据查询服务，不提供任何音频存储和贩卖服务。
					</b></p>
					<p><b>*因为本站是调用各网站接口，音质不保证会很高。</b></p>
					<p>⚠️ <b>数据调用的是各网站的 API 接口，有的接口并不是开放的，随时可能失效，本项目相关代码仅供参考。</b></p>
                </div>
            </div>
        </div>
        <div class="am-popup" id="copr-author">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">作者的作品</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <p><a href="https://aplayer.js.org/">APlayer</a></p>
                    <p>
                </div>
            </div>
        </div>
    </section>
    <footer>
		<p style="color:#99A8AA;text-align:center;">©2021&nbsp;Copyright&nbsp;@<a  title="网站原创作者" class="links" href="javascript:void(0)" data-am-modal="{target: '#copr-author'}"style="text-decoration:none;">麦葱</a>&nbsp;@<a id="copyrightOwner1" title="网站二改作者" target="_blank" class="links" href="https://space.bilibili.com/415963320" style="text-decoration:none;">一只阿狼哒</a>&nbsp;&nbsp;&nbsp;&nbsp;©2021&nbsp;Github&nbsp;<a id="copyrightOwner1" title="开源地址" target="_blank" class="links" href="https://github.com/maicong/music" style="text-decoration:none">开源地址</a>&nbsp;<a  href="javascript:void(0)" data-am-modal="{target: '#copr-info'}" title="使用注意">免责声明</a></P>
    </footer>
    <script src="//cdn.staticfile.org/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.staticfile.org/amazeui/2.3.0/js/amazeui.min.js"></script>
    <script src="//cdn.staticfile.org/aplayer/1.6.0/APlayer.min.js"></script>
    <script src="//cdn.staticfile.org/Base64/1.0.1/base64.min.js"></script>
    <script src="static/js/music.js?v<?php echo MC_VERSION; ?>"></script>
</body>
</html>
