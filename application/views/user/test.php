<div  style="width:60%">
    <form action="<?php echo site_url('user/update');?>" method="post" id="frm" class="portlet-body form" role="form">
        <div class="form-body">
            <div class="form-group">
                <label>用户名：</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope font-red"></i>
                    </span>
                    <input type="text" class="form-control" name="user" placeholder="用户名" value="<?php echo $ulist['user']?>"/> 
                    </div>
                    <label style="margin-left:40px;margin-top:8px;"><?php echo form_error('user','<span style="color:red">','</span>')?></label>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">密码：</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user font-red"></i>
                    </span>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="密码" value=""/>
                </div>
                <label style="margin-left:40px;margin-top:8px;"><?php echo form_error('password','<span style="color:red">','</span>')?></label>
            </div>
        </div>
        	
            <button type="submit" class="btn blue" onclick="window.frm.submit()">提交修改</button>
            <button type="button" class="btn default" onclick="window.location.href='<?php current_url()?>'">
            	关闭
            </button>
            
    </form>
</div>