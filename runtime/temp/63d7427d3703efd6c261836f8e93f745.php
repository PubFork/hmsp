<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"template/default_wap/html/vod\play.html";i:1526363316;s:88:"D:\phpStudy\PHPTutorial\WWW\maccmsV10.3.06\template\default_wap\html\public\include.html";i:1536591340;s:85:"D:\phpStudy\PHPTutorial\WWW\maccmsV10.3.06\template\default_wap\html\public\head.html";i:1527560351;s:85:"D:\phpStudy\PHPTutorial\WWW\maccmsV10.3.06\template\default_wap\html\public\foot.html";i:1522744369;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>在线播放<?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> - 高清资源 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['vod_name']; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>免费在线观看,<?php echo $obj['vod_name']; ?>剧情介绍" />
    <meta name="description" content="<?php echo $obj['vod_name']; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>免费在线观看,<?php echo $obj['vod_name']; ?>剧情介绍" />
    <link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script>var maccms={"path":"/maccmsV10.3.06","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
</head>
<body>
<!-- 页头 -->
<input type="checkbox" id="navSwitch">
<header class="g_nav trans">
    <ul class="g_wrap_p">
        <li><a href="<?php echo $maccms['path']; ?>">首页</a></li>
        <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li><a href="<?php echo mac_url('topic/index'); ?>">影视专题</a></li>
        <li><a href="<?php echo mac_url('map/index'); ?>">热门排行</a></li>
    </ul>
    <div class="g_wrap_p">
        <div class="ui-search">
            <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();">
                <input type="text" id="wd" name="wd" class="search-input" value="请输入影片名或演员名称" onfocus="if(this.value=='请输入影片名或演员名称'){this.value='';}" onblur="if(this.value==''){this.value='请输入影片名或演员名称';};" />
                <input type="submit" id="searchbutton"  class="search-button" value="搜索" />
            </form>
        </div>
        <div class="resou">
            <?php $_5d41789f43b29=explode(',',$maccms['search_hot']); if(is_array($_5d41789f43b29) || $_5d41789f43b29 instanceof \think\Collection || $_5d41789f43b29 instanceof \think\Paginator): if( count($_5d41789f43b29)==0 ) : echo "" ;else: foreach($_5d41789f43b29 as $key2=>$vo2): ?>
            <a href="<?php echo mac_url('vod/search',['wd'=>$vo2]); ?>"><?php echo $vo2; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</header>
<header class="g_header2">
    <a href="javascript:MAC.GoBack()"><i class="moreArrow2"></i>返回</a>
    影片详情
    <label for="navSwitch" href="javascript:;" class="s_c mac_user"><i class="i_user"><span></span></i></label>
    <label for="navSwitch" href="javascript:;" class="s_r s_bt"><i class="i_bread"><span></span></i></label>
</header>
<!--影片详细介绍-->
<div id="detail-box">
    <!-- 播放器 -->
    <div id="bofang_box">
        <?php echo $player_data; ?>
        <?php echo $player_js; ?>
    </div>
</div>
<!-- 排序方式 -->
<script type="text/javascript">
    function settab_zzjs(name,num,n){
        for(i=1;i<=n;i++){
            var menu=document.getElementById(name+i);
            var con=document.getElementById(name+"_"+"zzjs"+i);
            menu.className=i==num?"on_zzjs":"";
            con.style.display=i==num?"block":"none";
        }
    }
</script>
<section class="tab">
    <ul>
        <li id="zzjs1" onclick="settab_zzjs('zzjs',1,3)" class="on_zzjs"><a href="javascript:void(0);">剧集</a></li>
        <li id="zzjs2" onclick="settab_zzjs('zzjs',2,3)"><a href="javascript:void(0);">剧情介绍</a></li>
        <li id="zzjs3" onclick="settab_zzjs('zzjs',3,3)"><a href="javascript:void(0);">评论</a></li>
    </ul>
</section>
<section class="tab_box">
    <section id="zzjs_zzjs1">
        <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
        <div class="down-title">
            <h2><?php echo $vo['player_info']['show']; ?>-在线播放</h2><span>[<?php echo $vo['player_info']['tip']; ?>]</span>
        </div>
        <div class="video_list fn-clear">
            <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
            <a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $vo2['name']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/down.js"></script>
        <?php if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): ?>
        <div class="down-title">
            <h2>下载地址</h2><span>※手机用户需下载手机迅雷即可边下边播※</span>
        </div>
        <div id="downlist_<?php echo $key; ?>">
            <div class="down_list">
                <ul id="downul">
                    <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
                    <li><input type="checkbox" name="down_url_list_0" class="down_url" value="<?php echo $vo2['url']; ?>" file_name="<?php echo $vo2['name']; ?>" />
                        <p><strong class="down_part_name"><span class="filename"><?php echo $vo2['name']; ?></span><span class="filesize"></span></strong></p><span><label class="thunder_down">迅雷下载</label></span></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </section>
    <section id="zzjs_zzjs2" style="display:none;">
        <div id="juqing" >
            <div class="info fn-clear">
                <dl class="nyzhuy"><dt>主演：</dt><dd><?php echo $obj['vod_actor']; ?></dd></dl>
                <dl class="fn-left"><dt>导演：</dt><dd><?php echo $obj['vod_director']; ?></dd></dl>
                <dl class="fn-right"><dt>地区：</dt><dd><span><?php echo $obj['vod_area']; ?></span></dd></dl>
                <dl class="fn-left"><dt>时间：</dt><dd><span><?php echo date('Y-m-d H:i:s',$obj['vod_time']); ?></span></dd></dl>
                <dl class="fn-right"><dt>年份：</dt><dd><span><?php echo $obj['vod_year']; ?></span></dd></dl>
            </div>
            <div class="tjuqing"><span>剧情：</span><p><?php echo $obj['vod_content']; ?>&hellip;</p></div>
            <div class="fenx info"><dt>分享给朋友：</dt><dd><div class="bdsharebuttonbox"><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
                <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></dd></div>
        </div>
    </section>
    <section id="zzjs_zzjs3" style="display:none;">
        <div class="mac_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" ></div>
        <script>
            $(function(){
                MAC.Comment.Login = <?php echo $comment['login']; ?>;
                MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
                MAC.Comment.Init();
                MAC.Comment.Show(1);
            });
        </script>
    </section>
</section>
<!--猜你喜欢-->
<section class="box">
    <section class="title"><i class="iLine"></i><h2>喜欢<strong>“<?php echo $obj['vod_name']; ?>”</strong>的人也喜欢</h2></section>
    <div class="box_con">
        <ul class="img-list dis">
            <?php $__TAG__ = '{"num":"6","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><span><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/></span><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</section>

<!-- 页脚 -->
<footer class="footer">
    Copyright &#169; 2012-2018 <?php echo $maccms['site_wapurl']; ?>. All Rights Reserved.
</footer>

</body>
</html>