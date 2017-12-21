<?php
	session_start();
	//require_once("dbconfig.php");
    date_default_timezone_set('Asia/Seoul');

    	$login;

	if($_SESSION['id']=="")
		{
			$login="<a href='./login.php'>Login</a>";
		} else
		{
			$login="<a href='./logout.php'>Logout</a>";
		}
?>

<!doctype html>  
<meta charset="utf-8"/>
<html>  
<style>
/* Makeshift CSS Reset */
{
    margin: 0;
    padding: 0;
}
 
/* Tell the browser to render HTML 5 elements as block */
header, footer, aside, nav, article {
    display: block;
}
 
body {
    margin: 0 auto;
    width: 940px;
    font: 13px/22px Helvetica, Arial, sans-serif;
    background: #F6D8CE;
}
 
h2 {
    font-size: 28px;
    line-height: 44px;
    padding: 22px 0;
    
}
 
h3 {
    font-size: 18px;
    line-height: 22px;
    padding: 11px 0;
}
 
p {
    padding-bottom: 22px;
}
nav {position: absolute; left: 0; width: 100%; background:#FF0000;} 

nav ul {
    margin: 0 auto;
    width: 940px;
    list-style: none;
}

nav ul li {
    float: left;
}
 
    nav ul li a {
        display: block;
        margin-right: 10px;
        width: 140px;
        font-size: 14px;
        line-height: 44px;
        text-align: center;
        text-decoration: none;
        color: #000000;
    }
 
        nav ul li a:hover {
            color: #fff;
        }
 
        nav ul li.selected a {
            color: #fff;
        }
 

#intro {
    margin-top: 66px;
    padding: 20px;
    background: #F6D8CE;
    background-size: 100%;
    border-radius: 22px;

}

#intro h2 {
    width: 336px;
    color: #FF0000;
}
 
#intro h2 {
    padding: 0 0 15px 0;
    font-weight: normal
    color: #fff;
}
 
#intro p {
    padding: 0;
}

#content {
    display: table;
}
 
    #mainContent {
        display: table-cell;
        width: 900px;
        padding-right: 22px;
    }
 
    aside {
        display: table-cell;
        width: 300px;
    }

.blogPost div {
    column-count: 2;
    column-gap: 22px;
   
}
 .blogPost header {
        column-span: all;
    }

#login {text-align:right; font-size:18px }
</style>
<head>  
    <title>적십자는 생명입니다.</title>  
</head>  
<body>  
    <header>  
        <h1>Red Cross</h1>  
    </header>  
<div id='login'><?php echo $login ?></div> 
    <nav>  
        <!-- Navigation -->  
    <ul>  
        <li><a href="first_page.html">헌혈이란?</a></li>  
        <li><a href="F_second.php">오해와 진실</a></li>  
        <li><a href="F_third.php">헌혈과정</a></li>  
        <li><a href="F_fourth.php">혈액검사</a></li>
	<li><a href="F_fifth.php">혈액상식</a></li> 
	<li><a href="F_sixth.php">자유게시판</a></li>     
    </ul>  
    </nav>  
    <section id="intro">  
     
    </section>  
<div id="content">
	<div id="mainContent">
    <section>  
        <!-- Main content area -->
  	<article class="blogPost">  
           <header>  
               <h2>헌혈이란?</h2>  
           </header>  
          <p>혈액의 성분 중 한 가지 이상이 부족하여 건강과 생명을 위협받는 다른 사람을 위해, 건강한 사람이 자유의사에 따라 아무 대가 없이 자신의 혈액을 기증하는 사랑의 실천이자, 생명을 나누는 고귀한 행동입니다. 
          헌혈은 수혈이 필요한 환자의 생명을 구하는 유일한 수단입니다. 혈액은 아직 인공적으로 만들 수 있거나, 대체할 물질이 존재하지 않습니다. 
          생명을 사고 팔 수 없다는 인류 공통의 윤리에 기반하여, 세계 각국은 혈액의 상업적 유통을 법으로 규제하고 있습니다.
          헌혈한 혈액은 장기간 보관이 불가능합니다.(농축적혈구 35일, 혈소판 5일) 따라서 적정 혈액보유량인 5일분을 유지하기 위해 헌혈자분들의 지속적이고 꾸준한 헌혈이 필요합니다.
          외국으로부터 수입하지 않고 혈액을 자급자족하기 위해서는 연간 약 300만명의 헌혈자가 헌혈에 참여해야 합니다. 
          우리는 언제 수혈을 받을 상황에 처할지 모릅니다. 건강할 때 헌혈하는 것은 자신과 사랑하는 가족을 위하여, 더 나아가 모두를 위한 사랑의 실천입니다.</p> 
       </article>  
    </section> 
</div> 

    </div>  
  
</body>  
</html>  
