<?php /* Smarty version 2.6.30, created on 2018-03-20 11:04:34
         compiled from admin/promo_edit */ ?>
<!-- content starts -->
<style>
.chosen-container{
	width: 100% !important;
}
.chosen-container .chosen-single{
	height: 38px;                                                                                              
	padding: 8px 12px;
}
.chosen-container .chosen-single b{
	background: url(<?php echo $this->_tpl_vars['base_path']; ?>
bower_components/chosen/chosen-sprite.png) no-repeat 0 10px !important;
}
</style>
<script src='<?php echo $this->_tpl_vars['base_path']; ?>
bower_components/wangEditor/release/wangEditor.min.js'></script>
<div>
	<ul class="breadcrumb">
		<li>
			<a href="/admin">首页</a>
		</li>
		<li>
			<a href="<?php echo $this->_tpl_vars['admin']; ?>
promolist">营销活动</a>
		<li>
			<a href="javascript:;">编辑</a>
		</li>
	</ul>
</div>
<div class=" row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-tint"></i>修改营销活动</h2>
			</div>
			<div class="box-content">
				<form role="form" method="post" enctype="multipart/form-data" class="form-horizontal col-sm-10">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">活动名称</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="<?php echo $this->_tpl_vars['detail']['name']; ?>
" disabled/>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">营销方式</label>
						<div class="col-sm-10">
							<label>
								<input type="checkbox" name="ways" value="1" <?php if ($this->_tpl_vars['detail']['way'] == "短信" || $this->_tpl_vars['detail']['way'] == "都有"): ?>checked<?php endif; ?>>
								短信
							</label>
							<label>
								<input type="checkbox" name="ways" value="2" <?php if ($this->_tpl_vars['detail']['way'] == "邮件" || $this->_tpl_vars['detail']['way'] == "都有"): ?>checked<?php endif; ?>>
								邮件
							</label>
						</div>
					</div>
					<div class="form-group source">
						<label class="col-sm-2 control-label">渠道码</label>
						<div class="col-sm-5">
							<input type="text" id="source1" class="form-control" value="<?php echo $this->_tpl_vars['detail']['source1']; ?>
" disabled/>
						</div>
						<div class="col-sm-offset-1 col-sm-4">
							<button class="btn btn-success animated rubberBand generate">生成</button>
							<button class="btn btn-success animated rubberBand glyphicon glyphicon-plus"></button>
						</div>
					</div>
					<div class="form-group source <?php if (! $this->_tpl_vars['detail']['source2']): ?>hidden<?php endif; ?>">
						<div class="col-sm-offset-2 col-sm-5">
							<input type="text" id="source2" class="form-control" value="<?php echo $this->_tpl_vars['detail']['source2']; ?>
" disabled/>
						</div>
						<div class="col-sm-offset-1 col-sm-4">
							<button class="btn btn-success animated rubberBand generate">生成</button>
							<button class="btn btn-success animated rubberBand glyphicon glyphicon-plus"></button>
							<button class="btn btn-success animated rubberBand glyphicon glyphicon-minus"></button>
						</div>
					</div>
					<div class="form-group source <?php if (! $this->_tpl_vars['detail']['source3']): ?>hidden<?php endif; ?>">
						<div class="col-sm-offset-2 col-sm-5">
							<input type="text" id="source3" class="form-control" value="<?php echo $this->_tpl_vars['detail']['source3']; ?>
" disabled/>
						</div>
						<div class="col-sm-offset-1 col-sm-4">
							<button class="btn btn-success animated rubberBand generate">生成</button>
							<button class="btn btn-success animated rubberBand glyphicon glyphicon-plus"></button>
							<button class="btn btn-success animated rubberBand glyphicon glyphicon-minus"></button>
						</div>
					</div>
					<div class="form-group source <?php if (! $this->_tpl_vars['detail']['source4']): ?>hidden<?php endif; ?>">
						<div class="col-sm-offset-2 col-sm-5">
							<input type="text" id="source4" class="form-control" value="<?php echo $this->_tpl_vars['detail']['source4']; ?>
" disabled/>
						</div>
						<div class="col-sm-offset-1 col-sm-4">
							<button class="btn btn-success animated rubberBand generate">生成</button>
							<button class="btn btn-success animated rubberBand glyphicon glyphicon-minus"></button>
						</div>
					</div>
					<div class="form-group message <?php if ($this->_tpl_vars['detail']['way'] == "邮件"): ?>hidden<?php endif; ?>">
						<label for="message_template" class="col-sm-2 control-label">短信模版</label>
						<div class="col-sm-10">
							<select id="msg_templete" data-rel="chosen">
						<?php $_from = $this->_tpl_vars['template_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
								<option value="<?php echo $this->_tpl_vars['row']['templateId']; ?>
"><?php echo $this->_tpl_vars['row']['templateContent']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
							</select>
						</div>
					</div>
					<div class="form-group message <?php if ($this->_tpl_vars['detail']['way'] == "邮件"): ?>hidden<?php endif; ?>">
						<label for="mailnum" class="col-sm-2 control-label">发送短信数量</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="msgnum" name="msgnum" placeholder="" value="<?php echo $this->_tpl_vars['detail']['total_msg_num']; ?>
"/>
						</div>
					</div>
					<div class="form-group message <?php if ($this->_tpl_vars['detail']['way'] == "邮件"): ?>hidden<?php endif; ?>">
						<label for="mailnum" class="col-sm-2 control-label">每天发送上限</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="daymsgnum" name="daymsgnum" placeholder="" value="<?php echo $this->_tpl_vars['detail']['day_msg_num']; ?>
"/>
						</div>
					</div>
					<div class="form-group email <?php if ($this->_tpl_vars['detail']['way'] == "短信"): ?>hidden<?php endif; ?>">
						<label for="mail_title" class="col-sm-2 control-label">邮件标题</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="mail_title" name="mail_title" placeholder="" value="<?php echo $this->_tpl_vars['detail']['mail_title']; ?>
" />
						</div>
					</div>
					<div class="form-group email <?php if ($this->_tpl_vars['detail']['way'] == "短信"): ?>hidden<?php endif; ?>" style="height: 360px;">
						<label for="email_template" class="col-sm-2 control-label">邮件模版</label>
						<div class="col-sm-10">
							<div id="email_template"><?php echo $this->_tpl_vars['detail']['mail_templete']; ?>
</div>
						</div>
					</div>
					<div class="form-group email <?php if ($this->_tpl_vars['detail']['way'] == "短信"): ?>hidden<?php endif; ?>">
						<label for="mailnum" class="col-sm-2 control-label">发送邮件数量</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="mailnum" name="mailnum" placeholder="" value="<?php echo $this->_tpl_vars['detail']['total_mail_num']; ?>
" />
						</div>
					</div>
					<div class="form-group email <?php if ($this->_tpl_vars['detail']['way'] == "短信"): ?>hidden<?php endif; ?>">
						<label for="mailnum" class="col-sm-2 control-label">每天发送上限</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="daymailnum" name="daymailnum" placeholder="" value="<?php echo $this->_tpl_vars['detail']['day_mail_num']; ?>
" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-9">
							<button id="promo_edit" class="btn btn-primary animated rubberBand">修改</button>
						<?php if ($this->_tpl_vars['promoact_del_flg']): ?>
							<a role="button" href="<?php echo $this->_tpl_vars['admin']; ?>
promodel?id=<?php echo $this->_tpl_vars['detail']['id']; ?>
" id="promo_delete" class="col-sm-offset-1 btn btn-danger animated rubberBand">删除</a>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['promoact_sendtest_flg']): ?>
							<a role="button" href="<?php echo $this->_tpl_vars['admin']; ?>
promosendtester?id=<?php echo $this->_tpl_vars['detail']['id']; ?>
" id="promo_delete" class="col-sm-offset-1 btn btn-info animated rubberBand">测试</a>
						<?php endif; ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--/span-->
</div>
<!-- content ends -->
<script>
$(function(){
	$(".source").on("click", ".generate", function(){
		var current_obj = $(this).parents(".source");
		$.ajax({
			url: "<?php echo $this->_tpl_vars['admin']; ?>
getpromocode",
			method: "get",
			success: function(res){
				current_obj.find("input").val(res.data);
			}
		});
	})
	$(".source").on("click", ".glyphicon-plus", function(){
		var current_obj = $(this).parents(".source");
		if(current_obj.next().hasClass("source")){
			current_obj.next().removeClass("hidden");
		}
		return false;
	});
	$(".source").on("click", ".glyphicon-minus", function(){
		var current_obj = $(this).parents(".source");
		if(current_obj.prev().hasClass("source")){
			current_obj.find("input").val("");
			current_obj.addClass("hidden");
		}
	});
	var E = window.wangEditor;
	var editor2 = new E('#email_template');
    editor2.customConfig.uploadImgServer = "//api.companyclub.cn/imageup.jsp";
    // 将图片大小限制为 3M
    editor2.customConfig.uploadImgMaxSize = 5 * 1024 * 1024;
    // 限制一次最多上传 1 张图片
    editor2.customConfig.uploadImgMaxLength = 1;
    // 关闭粘贴样式的过滤
    editor2.customConfig.pasteFilterStyle = false;
    editor2.customConfig.uploadFileName = 'upfile';
	editor2.create();
	$("#promo_edit").click(function(){
		//营销活动名称
		var name = $("#name").val();
		if(name == ""){
			onerror("营销活动名称不能为空");
			return false;
		}
		var way = $('input[name=\'ways\']:checked').length==2 ? 3:$('input[name=\'ways\']:checked').val();
		if($('input[name=\'ways\']:checked').length == 0){
			onerror("至少选择一种营销方式");
			return false;
		}
		//短信模板
		var msg_templete = $("#msg_templete").val();
		if((way == 1 || way == 3) && msg_templete == ""){
			onerror("请选择短信模版");
			return false;
		}
		//发送短信数量
		var total_msg_num = parseInt($("#msgnum").val());
		if((way == 1 || way == 3) && isNaN(total_msg_num)){
			onerror("需要发送的短信数量要求大于0");
			return false;
		}
		//每天发送短信数量
		var day_msg_num = $("#daymsgnum").val();
		if((way == 1 || way == 3) && isNaN(day_msg_num)){
			onerror("每天发送的短信数量要求大于0");
			return false;
		}
		//邮件标题
		var mail_title = $("#mail_title").val();
		if((way == 2 || way == 3) && mail_title == ""){
			onerror("请确认邮件标题");
			return false;
		}
		//邮件内容
		var mail_templete = editor2.txt.html();
		if((way == 2 || way == 3) && mail_templete == ""){
			onerror("请确认邮件内容");
			return false;
		}
		//发送邮件数量
		var total_mail_num = parseInt($("#mailnum").val());
		if((way == 2 || way == 3) && isNaN(total_mail_num)){
			onerror("需要发送的邮件数量要求大于0");
			return false;
		}
		//每天发送邮件数量
		var day_mail_num = $("#daymailnum").val();
		if((way == 2 || way == 3) && isNaN(day_mail_num)){
			onerror("每天发送的邮件数量要求大于0");
			return false;
		}
		$.ajax({
			method: "post",
			data: {id: <?php echo $this->_tpl_vars['detail']['id']; ?>
, way: way, source1: $("#source1").val(), source2: $("#source2").val(), source3: $("#source3").val(), source4: $("#source4").val(), msg_templete: msg_templete, total_msg_num: total_msg_num, day_msg_num: day_msg_num, mail_title: mail_title, mail_templete: mail_templete, total_mail_num: total_mail_num, day_mail_num: day_mail_num},
			success: function(res){
				if(res.status == 200){
					window.location.reload();
				}
			}
		});
		return false;
	});
	$("input[name='ways']").change(function(){
		if($(this).is(':checked')){
			if($(this).val() == 1){
				var obj = $(".message")
			}else{
				var obj = $(".email");
			}
			obj.removeClass("hidden");
			obj.addClass("show");
		}else{
			if($(this).val() == 1){
				var obj = $(".message")
			}else{
				var obj = $(".email");
			}
			obj.removeClass("show");
			obj.addClass("hidden");
		}
	});
	function onerror(msg){
		$.noty({
			layout: "center",
			timeout: 3000,
			type: "error",
			text: msg
		}, 3000)
	}
	$(".box-content").css("height", $(".form-horizontal").height()+20);
});
</script>