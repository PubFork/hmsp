<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"D:\phpStudy\PHPTutorial\WWW\maccmsV10.3.06/application/admin\view\public\select_status.html";i:1520819142;}*/ ?>
<form class="layui-form m10" method="post" action="<?php echo $url; ?>">
    <input type="hidden" name="col" value="<?php echo $col; ?>">
    <input type="hidden" name="ids" value="<?php echo $ids; ?>">

    <div class="layui-input-inline w150">
        <select name="val">
            <option value="">选择操作</option>
            <option value="0" >未审核</option>
            <option value="1" >已审核</option>
        </select>
    </div>
    <div class="layui-input-inline">
        <button type="submit" class="layui-btn" lay-submit="" refresh="<?php echo $refresh; ?>" lay-filter="formSubmit">保 存</button>
    </div>
</form>

