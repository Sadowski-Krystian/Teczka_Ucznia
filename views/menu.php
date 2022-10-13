<?php
$lst = $dane;
$link = $args['link'];
$li = '';
$actGet = $_GET['act'];
$actCls = 'active';
foreach($lst as $key=>$val){
    isset($val['link']) ? $link=$val['link'] : null;
    $label = isset($val['etykieta']) ? $val['etykieta'] : $val;
    $active = ($link==$actCls) ? ' class="'.$actCls.'"' : "";
    $li .= '<li><a href="?svc=teczka&act='.$link.'"'.$active.'>'.$label.'</a></li>';
}
$out = '<ul>'.$li.'</ul>';