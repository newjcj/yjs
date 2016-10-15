<!DOCTYPE html>
<html>
    <head>
        <title>
            DEMO
        </title>
    </head>
    <body>
        <?php
        $style_form = array(
            'ID' => 'form1',
            'class' => 'sss',
            'style' => 'cursor:pointer'
        );
        $this->load->helper('form');

        /*  创建form表单，$style_form里面的是form标签的参数
         * echo form_open('lims',$style_form)生成如下
         * <form style="cursor:pointer" class="sss" id="form1" accept-charset="utf-8" method="post" action="http://localhost/demo/index.php/lims">    

          </form>
         * ——————————————————————————————————————————
         * echo form_open('lims','',$style_form)生成如下
         * <form accept-charset="utf-8" method="post" action="http://localhost/demo/index.php/lims">
          <div style="display:none">
          <input type="hidden" value="form1" name="ID">
          <input type="hidden" value="sss" name="class">
          <input type="hidden" value="cursor:pointer" name="style">
          </div>
          </form>
         */
        echo form_open('lims', $style_form),
        form_label('用户名:'),form_input('username'),
        form_input('menau', '233'),
        form_password('upload'),
        form_fieldset();
//             form_

        form_close();
//        echo form_open('lims', '', $style_form);
        ?>
        <!--        <div id="footer" style="clear: both;">
                    
                </div>
                 <div id="footer">
                    
                </div>-->
        <div id="footer">

        </div>
    </body>
</html>
