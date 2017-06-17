<?php
    switch ($_GET["month"]) {
    	case '1月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/1gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '2月':
            echo "<IMG SRC='https://i0.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/2gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '3月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/3gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '4月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/4gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '5月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/5gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '6月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/6gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '7月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/7gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '8月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/8gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '9月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/9gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '10月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/10gatsu_01.jpg?resize=300%2C225'>";
    		break;
    	case '11月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/11gatsu_01.jpg?resize=300%2C225'>";
    		break;
    default:		
    	case '12月':
            echo "<IMG SRC='https://i1.wp.com/hananokotoba.com/wp/wp-content/uploads/2015/03/12gatsu_01.jpg?resize=300%2C225'>";
    		break;	
    }
echo"<br/><br/>";

date_default_timezone_set('Asia/Taipei');
echo date("現在時間:Y年m月j日l H點i分s秒")."<br/>";

$now=date("U");
$end=mktime(24,0,0,12,31,2017);
$time=$end-$now;
$show=intval($time/86400);
$show1=intval(($time%86400)/3600);
$show2=intval((($time%86400)%3600)/60);
$show3=intval((($time%86400)%3600)%60);
echo "距離2017年12月31日世界末日:".$show."天".$show1."小時".$show2."分鐘".$show3."秒";
















?>