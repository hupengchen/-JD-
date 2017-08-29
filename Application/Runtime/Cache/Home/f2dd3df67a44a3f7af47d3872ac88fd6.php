<?php if (!defined('THINK_PATH')) exit();?>		<div class="form">
		    <div class="item">
		        <span class="label"><em>*</em>昵称：</span>
		        <div class="fl">
		            <input type="text" class="itxt" maxlength="20" id="nickName" name="userVo.nickName" value="<?php echo ($userData['nickName']); ?>"/>
		            <input type="hidden" name="userId" value="<?php echo ($userData['userId']); ?>" id="userId">
		            <div class="clr"></div>
		        </div>
		    </div>
		    <div class="item">
		        <span class="label"><em>*</em>生日：</span>
		        <div class="fl birthday-info">
		            <select name="" class="selt selt1" id="birthdayYear"><option value="0" disabled="" selected="selected">请选择：
		            <?php echo ($year); ?>
		            </select>
		            <label class="ml5 mr5">年</label>
		            <select name="" class="selt selt1" id="birthdayMonth"><option value="0" disabled="" selected="selected">请选择：</option>
		            <?php echo ($month); ?>
		            </select>
		            <label class="ml5 mr5">月</label>
		            <select name="" class="selt selt1" id="birthdayDay">
					<?php echo ($day); ?>
		            </select>
		            <label class="ml5 mr5">日</label>
		            <span class="ftx03">填生日有惊喜哦~</span>
		            <div class="clr"></div>
		        </div>
		    </div>
		    <div class="item">
		        <span class="label"><em>*</em>所在地：</span>
		        <div class="fl">
		            <select name="province" class="selt mr5" id="province">
		                <?php echo ($province); ?>
		            </select>
		            <select name="userVo.city" class="selt mr5" id="city">
		            <?php echo ($city); ?>
		            </select>
		            <select name="userVo.county" class="selt mr5" id="county">
		            <?php echo ($county); ?>
		            </select>
		            <div class="clr"></div>
		        </div>
		    </div>
		</div>