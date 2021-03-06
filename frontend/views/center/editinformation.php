<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta name="data-spm" content="a215s">
	<meta content="telephone=no,email=no" name="format-detection">
	<meta content="fullscreen=yes,preventMove=no" name="ML-Config">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="仌仌众梦" />	
	<title>编辑个性签名</title>
	<?= Html::cssFile('@web/style/css/font-awesome.min.css') ?>
	<?= Html::cssFile('@web/style/css/reset.css') ?>
	<?= Html::cssFile('@web/style/css/style.css') ?>
</head>
<body>
	<section class="bodyA"><img src="<?= Yii::getAlias('@web') . '/' ?>style/images/u0.gif" alt=""></section>
	<div id="body_h" class="bgeee">
		<section class="pagetop">
			<a class="pagetopleft" href="javascript:history.go(-1)"><i class='icon-angle-left'></i></a>
			<h2>编辑</h2>
			<a class="pagetopright" href="/"></a>
		</section>
		<section class="headerh"></section>
		<section class="modular8 modular35">
			<form action="" method="post" id="post">
				<textarea name="editinformation" placeholder="限制输入14个汉字" rows="10" maxlength="50"><?php echo $userinfo['signature']; ?></textarea>
			</form>
		</section>
		<div class="modular6">
			<p class="form-ok"><input class="resetform bgfeb528-wf" name="formok-btn" type="submit" value="确认"></p>
		</div>
	</div>
<?= Html::jsFile('@web/style/js/jquery-2.1.1.min.js') ?>
<?= Html::jsFile('@web/style/js/reset.js') ?>
<script>
	$(document).ready(function(){
		$(".bodyA").hide();
		$(".form-ok").click(function(){
			var editinformation=$("textarea[name='editinformation']").val();
			if(editinformation.length > 14){
				$('#tip-error span').html('个签长度不符合规范');
				$('#tip-error').show();
				setTimeout(function(){
					$('#tip-error').fadeOut(500);
				},1000);
				$("textarea[name='editinformation']").focus();
			}else{
				$("#post").submit();
			}
		});
	})
</script>
</body>
</html>