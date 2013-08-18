<?php
	
	$this->load_template('header.php');
	
?>
<!----------- تهیه توسط آرش توانایی - 09130246374 - www.sharetronix.bolur.ir & www.bolur.ir -->
<style>

#a09130246374_input {
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	background:#f7c338 url('<?= $C->SITE_URL.'themes/'.$C->THEME?>/imgs/bg-btn-yellow.jpg') repeat-x scroll 0 0;
	border:1px solid #efb416;
	color:#4e4006;
	padding:4px 10px 5px;
	font: 11px tahoma;
	margin:0 0px 0 0;
	font-weight:bold;
	cursor:pointer;
	
}
#a09130246374_input:hover, #a09130246374_input:focus {
	background-position:0 -5px;
	cursor:pointer;
}
</style>
					<div id="invcenter">
						<h2 >پرداخت جهت ایجاد گروه جدید</h2>	
					
					<?
					if($D->error_pay){
					echo errorbox('خطا',$D->error_pay_m);
					
					}
					?>
					
					<!----------- تهیه توسط آرش توانایی - 09130246374 - www.sharetronix.bolur.ir & www.bolur.ir -->
						<div class="greygrad">
							<div class="greygrad2">
								<div class="greygrad3" style="padding-bottom:0px; padding-top:0px;"><br>
								<?= msgbox('بیشتر بدانید!!!','برای ساخت گروه باید ابتدا مبلغ '.$C->NEW_GROUP_AMOUNT.' تومان را از طریق
								دکمه زیر پرداخت نمایید و پس از پرداخت اتوماتیک به صفحه ساخت هدایت میشوید و پس از ساخت گروه این اعتبار شما مجدد 0 شده و برای ساخت گروه دیگر مستلزم پرداخت دیگری می باشد')?>
								
								
									<form method="post" action="<?= $C->SITE_URL?>groups/new" enctype="multipart/form-data">
								
								<center>
								<h2 style="font-family:tahoma;color:#408248">مبلغ قابل پرداخت : <font color="red"><?=$C->NEW_GROUP_AMOUNT?></font> تومان</h2>	
								<br>
<input name="pay_for_group" type="submit" id="a09130246374_input" value="پرداخت توسط زرین پال"/>								
									
								</center>	
									</form>
								</div>
							</div>
						</div>
					</div><!----------- تهیه توسط آرش توانایی - 09130246374 - www.sharetronix.bolur.ir & www.bolur.ir -->
<?php
	
	$this->load_template('footer.php');
	
?>