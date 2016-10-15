<?php
    class Cat{
        function selectForm($selid="cid",$pid=0){
            $data=$this->field('id,concat(path,"-",id) as abspath,name')->order('abspath,id')->select();
            $html='';
            $html.="<select name='".$selid."'>";
            $html.="<option value=0>--根分类--</option>";
            foreach($data as $sel){
                $num=count(explode('-',$sel['abspath']))-2;
                $space=str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$num)."->";
                if($pid==$sel['id']){
                    $selected="selected";
                }else{$selected='';}
                $html.="<option $selected value='".$sel['id']."'>".$space.$sel['name']."</option>";
            }
            $html.="</select>";
            return $html;

        }

    }
