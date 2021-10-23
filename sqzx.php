<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css">
    <script src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Apti-授权中心</title>
    <!-- zui -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/zui/1.9.2/css/zui.min.css">
  </head>
  <body>
      <!-- 侧边栏 顶部Tab栏 -->
  <body class="mdui-appbar-with-toolbar mdui-drawer-body-left mdui-theme-layout-auto mdui-loaded">
    <header class="mdui-appbar mdui-appbar-fixed">
      <div class="mdui-toolbar">
      <button class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#drawer'}"><i class="mdui-icon material-icons">menu</i></button>
      <span class="mdui-typo-title">Apti-授权中心</span>
      <div class="mdui-toolbar-spacer"></div>
      <button class="mdui-btn mdui-btn-icon" mdui-tooltip="{content: '切换主题'}"onclick="mdui.$('body').toggleClass('mdui-theme-layout-dark')"><i class="mdui-icon material-icons">color_lens</i></a>
      </div>
    </header>
    <div class="mdui-drawer mdui-shadow-1 mdui-drawer-false" id="drawer">


      <ul class="mdui-list" mdui-collapse="{accordion: true}">
        <li class="mdui-list-item mdui-ripple" onclick="window.location.href = 'index.html'">
          <i class="mdui-icon material-icons mdui-list-item-avatar mdui-color-red mdui-text-color-white">home</i>
          <div class="mdui-list-item-content">首页</div>
        </li>
        <li class="mdui-list-item mdui-ripple" onclick="window.location.href = 'zyzx.html'">
          <i class="mdui-icon material-icons mdui-list-item-avatar mdui-color-orange mdui-text-color-white">archive</i>
          <div class="mdui-list-item-content">资源中心</div>
        </li>
        <li class="mdui-list-item mdui-ripple" onclick="window.location.href = 'sqxz.php'">
          <i class="mdui-icon material-icons mdui-list-item-avatar mdui-color- mdui-text-color-white">dns</i>
          <div class="mdui-list-item-content">授权中心</div><i class="mdui-icon material-icons">adjust</i>
        </li>
        <li class="mdui-list-item mdui-ripple" onclick="window.location.href = 'wyy.html'">
          <i class="mdui-icon material-icons mdui-list-item-avatar material-icons mdui-color-blue mdui-text-color-white">album</i>
          <div class="mdui-list-item-content">每日网抑云</div>
        </li>
    </ul>
    </li>
    </ul>
    </div>
  </div>

  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <p>此网站目前处于公测阶段，部分功能暂不稳定，请见谅!</p>
  </div>
  
<div class="mdui-container">
<div class="login">
  <h1>查询服务——————</h1>
  <h2>查询授权——————</h2>
  <form action="" method="get">
  <div class="mdui-textfield mdui-textfield-floating-label">
  <label class="mdui-textfield-label">Robot账号</label>
  <input class="mdui-textfield-input" type="text" name="cs" maxlength="18"/>
  </div>
  <button class="mdui-btn mdui-ripple mdui-color-grey-700 btyuan" name="sub" type="submit" value='查询'>查询</button>
  </form>
  <h2>查询换绑——————</h2>
  <div class="mdui-textfield mdui-textfield-floating-label">
  <label class="mdui-textfield-label">Robot授权号</label>
  <input class="mdui-textfield-input" disabled type="hbjl" name="hbjl" maxlength="18"/>
  </div>
  <h1>查询结果————————</h1>
  <div class="114514">
  <?php
if(!empty($_GET['sub'])){
  header("Content-type: text/html; charset=utf-8");
  $user=$_GET["cs"];
}
   switch ($user){
       case '2034303404': 
           aa();
           break;
       case '1391120210':
           bb();
           break;
       default:
           cc();
   }
   
   function aa(){
       echo  "机器人QQ号2034303404<br>机器人已永久授权";
   }
   
   function bb(){
       echo  "机器人QQ号1391120210<br>机器人已永久授权";
   }
   
   function cc(){
       $user=$_GET["cs"];
       echo  "机器人QQ号$user<br>机器人未授权";
   }
  ?>

    <!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zui/1.9.2/js/zui.min.js"></script>
  </body>
</html>
