<?php
include('cdn.php');
?>
<style>
   
body {
    display: block;
    margin: 0; /* 设置 margin 为 0 */
}
.grid-container {
  
  display: grid;
  grid-template-columns: auto 300px 560px auto 300px ;
  grid-template-rows:auto;
  grid-gap: 10px;
  grid-template-areas:
    "D A B E C";
    
}

.grid-item {
    padding: 15px;
    text-align: center;

}
.cut{
    border: 1px solid gray;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
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
   
    grid-gap: 10px;
}
.four{
    grid-area: D;
}
.five{
    grid-area: E;
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
}
.message{
    text-align: right;
}
.respond, .message {
    display: inline-block;
}
.container {
    display: flex;
    justify-content: space-between; 
    align-items: center;
}

.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 600px;
    padding: 20px;
    background-color: #fff;
    z-index: 9998;
    max-width: 600px; 
    max-height: 800px;
    overflow-y: auto;

}

.trigger a {
    cursor: pointer;
}

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
    margin-right: 10px; 
}

.text-container {
    overflow: hidden; 
}
.user{
    
    text-align: left;
    font-weight: bold;
    
}
.date{
    font-size: 14px;
    text-align: left;
}
a{
    text-decoration: none; 
    color: black; 
}
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); 
    z-index: 9997; 
  }
  .SeeAllMessage{
    padding-top: 5px;
    text-align: left;
  }
  .SeeAllMessage a{
    text-align: left;
    color: gray;
    font-weight: bold;
  }
  .LeaveMessage{
    margin-top: 10px;
    padding-bottom : 5px;
    
  }
 
  .LeaveMessageall{
    border-radius: 5px;
    display: block;
    
  }
  .LeaveMessageUsernameIMG{
    width: 40px;
    height: auto;
    background-color:#ffffff;
    padding-bottom: 6px;
    
  }
  .LeaveMessageimgdiv{
    float: left;
    margin-right: 10px;
    display: block;
  }
  .LeaveMessageUsername{
    text-align: left;
    font-size: 14px;
    font-weight: bold;
  }
  .LeaveMessageMain{
    text-align: left;
    font-size: 14px;
    padding-bottom: 6px;

  }
  .LeaveMessageAction{
    font-size: 12px;
    text-align: left;
  }
  .condition{
    
  }
  
</style>
<html>
<body>
<?php
    include('header.php');
?>
  <div id="box" class="box">
    <div class="grid-container">
        <div></div>
        <div class="grid-item ">
        <div class="four"></div>
            <div class="first border border-2 pt-2 ps-3 shadow p-3 mb-5 bg-body rounded">
                
                    <div class="condition ">
                        <div>
                            <div class="radio-tophead d-block mx-auto fs-3 fw-bolder ">
                                <label>條件塞選</label>
                            </div>
                            <div class="condition-radio text-start">
                            <div class="radio-head fs-5 fw-bolder">
                                <label>天數</label>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="date" value=""><label class="form-check-label">全部(0)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="date" value="1day"><label class="form-check-label">當天來回(0)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="date" value="2days"><label class="form-check-label">兩日遊(0)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="date" value="3days"><label class="form-check-label">三日遊(0)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="date" value="4days"><label class="form-check-label">四天~六天(0)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="date" value="7days"><label class="form-check-label">七天~九天(0)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="date" value="10days"><label class="form-check-label">十天以上(0)</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="radio-head  fs-5 fw-bolder">
                                <label>性別</label>
                            </div>
                            <div class="radio-group">
                                <input class="form-check-input" type="radio" name="sex" value=""><label class="form-check-label">不拘</label>
                            </div>
                            <div class="radio-group">
                                <input class="form-check-input" type="radio" name="sex" value="male"><label class="form-check-label">男</label>
                            </div>
                            <div class="radio-group">
                                <input class="form-check-input" type="radio" name="sex" value="woman"><label class="form-check-label">女</label>
                            </div>
                        </div>
                        <div>
                            <div class="radio-head  fs-5 fw-bolder">
                                <label>性別</label>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value=""><label class="form-check-label">不拘</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="male"><label class="form-check-label">男</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="woman"><label class="form-check-label">女</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="radio-head  fs-5 fw-bolder">
                                <label>技能</label>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="skill" value=""><label class="form-check-label">不拘</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="skill" value="car"><label class="form-check-label">開車</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="skill" value="motorcycle"><label class="form-check-label">騎車</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="radio-head  fs-5 fw-bolder">
                                <label>人數</label>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="NOpeople" value=""><label class="form-check-label">不拘</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="NOpeople" value="two"><label class="form-check-label">2~4人</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="NOpeople" value="five"><label class="form-check-label">5~7人</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="NOpeople" value="eight"><label class="form-check-label">8~10人</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="NOpeople" value="tenOver"><label class="form-check-label">10人以上</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="radio-head  fs-5 fw-bolder">
                                <label>年齡</label>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="age" value=""><label class="form-check-label">不拘</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="age" value="2000"><label class="form-check-label">00後(2000~)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="age" value="1990"><label class="form-check-label">九0後(1990~)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="age" value="1980"><label class="form-check-label">八0後(1980~)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="age" value="1970"><label class="form-check-label">七0後(1970~)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="age" value="1960"><label class="form-check-label">六0後(1960~)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="age" value="1950"><label class="form-check-label">五0後(1950~)</label>
                                </div>
                            </div>
                            <div class="radio-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="age" value="1949"><label class="form-check-label">五0前(~1949)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="five"></div>
      <div class="grid-item"><div class="end">3</div></div>
        <div class="mid">
        <div class="cut">
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
                    <div>
                        <div class="LeaveMessageimgdiv">
                            <img src="img/2-1.png" class="LeaveMessageUsernameIMG">
                        </div>
                        <div class="LeaveMessageall">
                            <div class="LeaveMessageUsername">
                                留言姓名
                            </div>
                            <div class="LeaveMessageMain">
                                內容內容內容內容內容
                            </div>
                            <div class="LeaveMessageAction">
                                <a href="#">4天</a>&emsp;<a href="#">讚</a>&emsp;<a href="#">回復</a>&emsp;<a href="#">動作</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="LeaveMessage">
                    <div><a href="#"></a></div>
                    <div>
                        <div class="LeaveMessageimgdiv">
                            <img src="img/2-1.png" class="LeaveMessageUsernameIMG">
                        </div>
                        <div class="LeaveMessageall">
                            <div class="LeaveMessageUsername">
                                留言姓名
                            </div>
                            <div class="LeaveMessageMain">
                                內容內容內容內容內容
                            </div>
                            <div class="LeaveMessageAction">
                                <a href="#">4天</a>&emsp;<a href="#">讚</a>&emsp;<a href="#">回復</a>&emsp;<a href="#">動作</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
        </div><br>
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
                    <div>
                        <div class="LeaveMessageimgdiv">
                            <img src="img/2-1.png" class="LeaveMessageUsernameIMG">
                        </div>
                        <div class="LeaveMessageall">
                            <div class="LeaveMessageUsername">
                                留言姓名
                            </div>
                            <div class="LeaveMessageMain">
                                內容內容內容內容內容
                            </div>
                            <div class="LeaveMessageAction">
                                <a href="#">4天</a>&emsp;<a href="#">讚</a>&emsp;<a href="#">回復</a>&emsp;<a href="#">動作</a>
                            </div>
                        </div>
                        
                    </div>
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
          <div class="grid-item">9</div>
          <div class="overlay" id="overlay"></div>
          <div id="popup" class="popup">
          <div class="mid">
        <div class="cut">
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
                    f2e3b6f88543c636f7cd84f6db9189d43a81e5
                    503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
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
                <div class="SeeAllMessage"><a href="#">查看全部留言</a></div>
                <div class="LeaveMessage">
                    <div><a href="#"></a></div>
                    <div>
                        <div class="LeaveMessageimgdiv">
                            <img src="img/2-1.png" class="LeaveMessageUsernameIMG">
                        </div>
                        <div class="LeaveMessageall">
                            <div class="LeaveMessageUsername">
                                留言姓名
                            </div>
                            <div class="LeaveMessageMain">
                                內容內容內容內容內容
                            </div>
                            <div class="LeaveMessageAction">
                                <a href="#">4天</a>&emsp;<a href="#">讚</a>&emsp;<a href="#">回復</a>&emsp;<a href="#">動作</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="LeaveMessage">
                    <div><a href="#"></a></div>
                    <div>
                        <div class="LeaveMessageimgdiv">
                            <img src="img/2-1.png" class="LeaveMessageUsernameIMG">
                        </div>
                        <div class="LeaveMessageall">
                            <div class="LeaveMessageUsername">
                                留言姓名
                            </div>
                            <div class="LeaveMessageMain">
                                內容內容內容內容內容
                            </div>
                            <div class="LeaveMessageAction">
                                <a href="#">4天</a>&emsp;<a href="#">讚</a>&emsp;<a href="#">回復</a>&emsp;<a href="#">動作</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="LeaveMessage">
                    <div><a href="#"></a></div>
                    <div>
                        <div class="LeaveMessageimgdiv">
                            <img src="img/2-1.png" class="LeaveMessageUsernameIMG">
                        </div>
                        <div class="LeaveMessageall">
                            <div class="LeaveMessageUsername">
                                留言姓名
                            </div>
                            <div class="LeaveMessageMain">
                                內容內容內容內容內容
                            </div>
                            <div class="LeaveMessageAction">
                                <a href="#">4天</a>&emsp;<a href="#">讚</a>&emsp;<a href="#">回復</a>&emsp;<a href="#">動作</a>
                            </div>
                        </div>
                        
                    </div>
                </div><div class="LeaveMessage">
                    <div><a href="#"></a></div>
                    <div>
                        <div class="LeaveMessageimgdiv">
                            <img src="img/2-1.png" class="LeaveMessageUsernameIMG">
                        </div>
                        <div class="LeaveMessageall">
                            <div class="LeaveMessageUsername">
                                留言姓名
                            </div>
                            <div class="LeaveMessageMain">
                                內容內容內容內容內容
                            </div>
                            <div class="LeaveMessageAction">
                                <a href="#">4天</a>&emsp;<a href="#">讚</a>&emsp;<a href="#">回復</a>&emsp;<a href="#">動作</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="LeaveMessage">
                    <div><a href="#"></a></div>
                    <div>
                        <div class="LeaveMessageimgdiv">
                            <img src="img/2-1.png" class="LeaveMessageUsernameIMG">
                        </div>
                        <div class="LeaveMessageall">
                            <div class="LeaveMessageUsername">
                                留言姓名
                            </div>
                            <div class="LeaveMessageMain">
                                內容內容內容內容內容
                            </div>
                            <div class="LeaveMessageAction">
                                <a href="#">4天</a>&emsp;<a href="#">讚</a>&emsp;<a href="#">回復</a>&emsp;<a href="#">動作</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
        </div><br>
            <!--div class="close"><a href="#">关闭</a></div-->
        </div>
        </div>
      
            
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