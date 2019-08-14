<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:39:"template/default_wap/html/vod\type.html";i:1525826344;s:88:"D:\phpStudy\PHPTutorial\WWW\maccmsV10.3.06\template\default_wap\html\public\include.html";i:1536591340;s:85:"D:\phpStudy\PHPTutorial\WWW\maccmsV10.3.06\template\default_wap\html\public\head.html";i:1527560351;s:87:"D:\phpStudy\PHPTutorial\WWW\maccmsV10.3.06\template\default_wap\html\public\paging.html";i:1521419346;s:85:"D:\phpStudy\PHPTutorial\WWW\maccmsV10.3.06\template\default_wap\html\public\foot.html";i:1522744369;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title><?php echo $obj['type_title']; ?> - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
    <meta name="description" content="<?php echo $obj['type_des']; ?>" />
    <link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script>var maccms={"path":"/maccmsV10.3.06","mid":"<?php echo $maccms['mid']; ?>","aid":"<?php echo $maccms['aid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>js/zepto.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>js/list.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>js/iscroll.js"></script>
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
            <?php $_5d41786465f70=explode(',',$maccms['search_hot']); if(is_array($_5d41786465f70) || $_5d41786465f70 instanceof \think\Collection || $_5d41786465f70 instanceof \think\Paginator): if( count($_5d41786465f70)==0 ) : echo "" ;else: foreach($_5d41786465f70 as $key2=>$vo2): ?>
            <a href="<?php echo mac_url('vod/search',['wd'=>$vo2]); ?>"><?php echo $vo2; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</header>
<header class="g_header2">
    <a href="javascript:MAC.GoBack()"><i class="moreArrow2"></i>返回</a>
    <?php echo $obj['type_name']; ?>
    <label for="navSwitch" href="javascript:;" class="s_c mac_user"><i class="i_user"><span></span></i></label>
    <label for="navSwitch" href="javascript:;" class="s_r s_bt"><i class="i_bread"><span></span></i></label>
</header>
<!-- 搜索条件 -->
<div class="filter-focus">
    <!-- 排序方式 -->
    <div class="ui-bar fn-clear">
        <div class="view-filter">
            <a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'time' ],'show'); ?>" class='current order'>按时间</a><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'hits' ],'show'); ?>" class='order'>按人气</a><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'score' ],'show'); ?>" class='order'>按评分</a>
        </div>
    </div>
    <div class="ui-cnt">
        <ul class="selectList" >
            <li id="first_list">
                <div class="con" id="first_list_p">
                    <p>
            <a <?php if($param['class'] == ''): ?> class="cur" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>'','order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a>
            <?php $_5d41786465f00=explode(',',$obj['type_extend']['class']); if(is_array($_5d41786465f00) || $_5d41786465f00 instanceof \think\Collection || $_5d41786465f00 instanceof \think\Paginator): if( count($_5d41786465f00)==0 ) : echo "" ;else: foreach($_5d41786465f00 as $key2=>$vo2): ?>
            <a <?php if($param['class'] == $vo2): ?> class="cur" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
                    </p>
                </div>
            </li>		<li id="second_list">
            <div class="con" id="second_list_p">
                <p>
                    <a <?php if($param['area'] == ''): ?> class="cur" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>'','lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a>
                    <?php $_5d41786465e7d=explode(',',$obj['type_extend']['area']); if(is_array($_5d41786465e7d) || $_5d41786465e7d instanceof \think\Collection || $_5d41786465e7d instanceof \think\Paginator): if( count($_5d41786465e7d)==0 ) : echo "" ;else: foreach($_5d41786465e7d as $key2=>$vo2): ?>
                    <a <?php if($param['area'] == $vo2): ?> class="cur" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </p>
            </div>
        </li>
            <li id="third_list">
                <div class="con" id="third_list_p">
                    <p>
            <a  {if condition="$param['year'] eq ''"} class="cur" href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>'','level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a>
            <?php $_5d41786465e21=explode(',',$obj['type_extend']['year']); if(is_array($_5d41786465e21) || $_5d41786465e21 instanceof \think\Collection || $_5d41786465e21 instanceof \think\Paginator): if( count($_5d41786465e21)==0 ) : echo "" ;else: foreach($_5d41786465e21 as $key2=>$vo2): ?>
            <a <?php if($param['year'] == $vo2): ?> class="cur" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo2,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- 影片部分 -->
<div class="box"><i class="clear3"></i>
    <div class="box_con">
        <ul class="img-list">
            <?php $__TAG__ = '{"num":"30","paging":"yes","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><span><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"/></span><h2><?php echo $vo['vod_name']; ?></h2><p><?php echo $vo['vod_actor']; ?></p><i><?php echo $vo['vod_version']; ?></i><em></em></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<!-- 分页 -->
<div class="ui-bar list-page fn-clear">
    
<div class="mac_pages">
    <div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div>
    <div class="page_info">
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a>
        <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
        <?php else: ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页">尾页</a>

        <input class="page_input" type="text" placeholder="页码"  id="page" autocomplete="off" style="width:40px">
        <button class="page_btn mac_page_go" type="button"  data-url="<?php echo $__PAGING__['page_url']; ?>" data-total="<?php echo $__PAGING__['page_total']; ?>" data-sp="<?php echo $__PAGING__['page_sp']; ?>">GO</button>
    </div>
</div>
</div>
<!-- 页脚 -->
<footer class="footer">
    Copyright &#169; 2012-2018 <?php echo $maccms['site_wapurl']; ?>. All Rights Reserved.
</footer>

</body>
</html>