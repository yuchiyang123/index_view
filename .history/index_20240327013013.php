<style>
   .header {
    position: sticky; /* 将标题栏固定在容器内 */
    top: 0; /* 将标题栏固定在容器的顶部 */
    z-index: 9996; /* 确保标题栏位于其他内容的上层 */
    /* 其他样式，例如背景颜色、文本样式等 */
    grid-area: header; 
    background-color: #ffffff;
    width: 100%; /* 设置标题栏的宽度为100%，使其填满整个屏幕 */
    height: 56px; 
    
}


.grid-container {
    
  display: grid;
  grid-template-columns: auto 500px auto;
  grid-template-rows:auto;
  grid-gap: 10px;
  /*border: 1px solid #000; /* 添加網格容器的邊框 */
  display: grid;
  grid-template-areas:
    "A B C";
    
}

.grid-item {
  border: 1px solid #000; /* 添加網格項目的邊框 */
  padding: 20px;
  text-align: center;

}
.first{
    grid-area: A;
    min-height: 800px;
}
.end{
    grid-area: C;
}
.mid{
    grid-area: B;
}
.limt{
    min-height: 350px;
}
.inner-grid {
    display: inline-grid;
    width: 30%;
    transition: background-color 0.3s;
    padding-top: 5px;
    padding-bottom: 10px;
    text-align: center;
}
.inner-grid:hover {
    background-color: rgba(128, 128, 128, 0.4);
}
.line{
    border-top: 1px solid gray;
    border-bottom: 1px solid gray;
}
.respond{
    
    padding-bottom: 8px;
    text-align: left;
    padding-left:10px;
}
.respond > div {
    display: inline-block;
     /* 可以使内容垂直居中 */
}
.message{
    text-align: right;
}
.respond, .message {
    display: inline-block;
     /* 可以使内容垂直居中 */
}
.container {
    display: flex;
    justify-content: space-between; /* 左右对齐 */
    align-items: center; /* 垂直居中对齐 */
}
/* 隐藏弹出窗口 */
.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px; /* 设置宽度 */
    padding: 20px;
    background-color: #fff;
    z-index: 9998; /* 确保弹出窗口在最上层 */
    /* 样式设置 */
}

/* 使得背景模糊 */


/* 显示触发器链接为可点击 */
.trigger a {
    cursor: pointer;
}
/* 模糊背景 */
.blur-background {
    filter: blur(0px);
}
.box{

}
.imgsize{
    width: 40px;
    height: auto;
    
}

.image-container {
    float: left;
    margin-right: 10px; /* 可以调整图像与文本之间的间距 */
}

.text-container {
    overflow: hidden; /* 清除浮动 */
}
.user{
    
    text-align: left;
    
}
.date{
    font-size: 14px;
    text-align: left;
}
a{
    text-decoration: none; /* 去除超链接下划线 */
    color: black; /* 设置超链接文本颜色为黑色 */
}
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* 半透明黑色背景 */
    z-index: 9997; /* 确保遮罩层位于其他内容的上层 */
  }
  .SeeAllMessage{
    text-align: left;
    color: white;
  }
  .LeaveMessage{
    margin-top: 10px;
  }
  .LeaveMessageUsernameIMG{
    width: 40px;
    height: auto;
  }
  .LeaveMessageimgdiv{
    float: left;
    margin-right: 10px;
  }
  .LeaveMessageUsername{
    text-align: left;
    font-size: 14px;
  }
  .LeaveMessageMain{
    text-align: left;
    font-size: 14px;
  }
</style>
<html>
<body>
<?php
    include('header.php');
?>
  <div id="box" class="box">
    <div class="grid-container">
    
      <div class="grid-item"><div class="first">1</div></div>
      
        <div class="mid">
          <div class="grid-item">
            <div class="limt">
            <div class="image-container">
                <img src="img/2-1.png" class="imgsize">
                        </div>
                <div class="text-container">
                    <div class="user"><a href="#"><div><a href="#">你的名字</a></div></a></div>
                    <div class="date"><div><a href="#">日期</a></div></div>
                </div>
                <div class="clearfix"></div> 
                <p class="main">
                Download Composer Latest: v2.7.2
                    Windows Installer
                    The installer - which requires that you have PHP already installed - will download Composer for you and set up your PATH environment variable so you can simply call composer from any directory.

                    Download and run Composer-Setup.exe - it will install the latest composer version whenever it is executed.

                    Command-line installation
                    To quickly install Composer in the current directory, run the following script in your terminal. To automate the installation, use the guide on installing Composer programmatically.

                    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
                    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413f
                    f2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
                    php composer-setup.php
                    php -r "unlink('composer-setup.php');"
                    This installer script will simply check some php.ini settings, warn you if they are set incorrectly, and then download the latest composer.phar in the current directory. The 4 lines above will, in order:

                    Download the installer to the current directory
                    Verify the installer SHA-384, which you can also cross-check here
                    Run the installer
                    Remove the installer<div class="trigger"><a href="#">查看完整内容</a></div>
                </p>
                <div class="container">
                    <div class="respond"><a href="#">👍🏽</a><div><a href="#">58</a></div></div>
                    <div class="message"><div><a href="#">8則留言</a></div></div>
                </div>
                <div class="line">
                    <div class="inner-grid">👍</div>
                    <div class="inner-grid">👍🏻</div>
                    <div class="inner-grid">👍🏿</div>
                </div>
                <div class="SeeAllMessage"><a href="#">查看全部留言</a></div>
                <div class="LeaveMessage">
                    <div><a href="#"></a></div>
                    <div><div class="LeaveMessageimgdiv"><img src="img/2-1.png" class="LeaveMessageUsernameIMG"></div><div class="LeaveMessageUsername">留言姓名</div><div class="LeaveMessageMain">內容內容內容內容內容</div></div>
                </div>
                <div class="LeaveMessage">
                    <div><a href="#"></a></div>
                    <div><div class="LeaveMessageimgdiv"><img src="img/2-1.png" class="LeaveMessageUsernameIMG"></div><div class="LeaveMessageUsername">留言姓名</div><div class="LeaveMessageMain">內容內容內容內容內容</div></div>
                </div>
            </div>
        </div><br>
          <div class="grid-item">4</div><br>
          <div class="grid-item">5</div><br>
          <div class="grid-item">6</div><br>
          <div class="grid-item">7</div><br>
          <div class="grid-item">8</div><br>
          <div class="grid-item">8</div><br>
          <div class="grid-item">8</div><br>
          <div class="grid-item">8</div><br>
          <div class="grid-item">8</div><br>
          <div class="grid-item">9</div>
          <div class="overlay" id="overlay"></div>
          <div id="popup" class="popup">
        <div class="content">
        <div class="image-container">
            <img src="img/2-1.png" class="imgsize">
        </div>
        <div class="text-container">
            <div class="user"><a href="#"><div><a href="#">你的名字</a></div></a></div>
            <div class="date"><div><a href="#">日期</a></div></div>
        </div>
        <div class="clearfix"></div> 
            <p class="main">
                Download Composer Latest: v2.7.2
                    Windows Installer
                    The installer - which requires that you have PHP already installed - will download Composer for you and set up your PATH environment variable so you can simply call composer from any directory.

                    Download and run Composer-Setup.exe - it will install the latest composer version whenever it is executed.

                    Command-line installation
                    To quickly install Composer in the current directory, run the following script in your terminal. To automate the installation, use the guide on installing Composer programmatically.

                    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
                    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413f
                    f2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
                    php composer-setup.php
                    php -r "unlink('composer-setup.php');"
                    This installer script will simply check some php.ini settings, warn you if they are set incorrectly, and then download the latest composer.phar in the current directory. The 4 lines above will, in order:

                    Download the installer to the current directory
                    Verify the installer SHA-384, which you can also cross-check here
                    Run the installer
                    Remove the installer
            </p>
        <div class="container">
            <div class="respond"><a href="#">👍🏽</a><div><a href="#">58</a></div></div>
            <div class="message"><div><a href="#">8則留言</a></div></div>
        </div>
            <div class="line">
            <div class="inner-grid">👍</div>
            <div class="inner-grid">👍🏻</div>
            <div class="inner-grid">👍🏿</div>
        </div>
        </div>
            <!--div class="close"><a href="#">关闭</a></div-->
        </div>
        </div>
      
            <div class="grid-item"><div class="end">3</div></div>
        </div> 
    </div>
  </div>
  <script>
    var overlay = document.getElementById('overlay');
    var trigger = document.querySelector('.trigger a');
    var popup = document.getElementById('popup');
    var header = document.querySelector('.header');
    trigger.addEventListener('click', function(event) {
        event.preventDefault(); 
        popup.style.display = 'block'; 
        header.style.backgroundColor = 'rgba(0, 0, 0, 0.000001)';
        overlay.style.display = 'block';
        popup.style.border = '1px solid gray'; 
        popup.style.boxShadow = '0px 0px 15px rgba(0, 0, 0, 0.7)';
        /*
        document.body.classList.add('blur-background'); 
        popup.style.filter = 'none';// 移除 body 元素的模糊效果*/
    });
    var closeBtn = document.querySelector('.close a');
    /*
    closeBtn.addEventListener('click', function(event) {
        event.preventDefault(); 
        popup.style.display = 'none'; 
        popup.style.boxShadow = 'none';   
    });
    */
    overlay.addEventListener('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        popup.style.display = 'none';
        overlay.style.display = 'none' ;
        popup.style.boxShadow = 'none';
        header.style.backgroundColor = '#ffffff';
    });
  </script>
</body>
</html>