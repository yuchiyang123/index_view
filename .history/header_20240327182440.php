<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<style>
   .header {
    position: sticky; /* 将标题栏固定在容器内 */
    top: 0; /* 将标题栏固定在容器的顶部 */
    z-index: 9999; /* 确保标题栏位于其他内容的上层 */
    /* 其他样式，例如背景颜色、文本样式等 */
    grid-area: header; 
    background-color: lightslategray;
    width: 100%; /* 设置标题栏的宽度为100%，使其填满整个屏幕 */
    height: 56px; 
    margin-bottom: 10px;
    box-sizing: border-box;
}
ion-icon {
  font-size: 35px;
}
.profileimg{
    width: 35px;
    height: auto;
}

.headerdiv{
    display: grid;
    grid-template-columns: 150px auto repeat(4, 100px) 35px 50px auto 70px;
    grid-template-rows: 56px;
    text-align:center;
    margin: auto;
    font-size: 24px;
}
.headerlogomargin{
    margin: auto;
}
.headerprofileimgmargin{
    margin: auto;
}
.headeractionmargin{
    margin: auto;
}
.nav-link {
    text-decoration: none;
    color: black;
    cursor: pointer;
}
.nav-link.underline {
    text-decoration: underline;
}
.nav-link.underline::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        width: 100%;
        height: 2px;
        background-color: blue; /* 自定义下划线颜色 */
        border-radius: 5px; /* 添加圆角 */
        transform: scaleX(0); /* 初始时下划线不可见 */
        transition: transform 0.3s ease; /* 添加过渡效果 */
    }
</style>
<header class="header">
    <div >
        <div class="headerdiv">
            <div class="headerlogomargin">
                旅遊媒合平台
            </div>
            <div></div>
            <div class="headeractionmargin">
                <a href="#" class="nav-link" onclick="toggleUnderline(event)">首</a>
            </div>
            <div class="headeractionmargin">
                <a href="#" class="nav-link" onclick="toggleUnderline(event)">揪</a>
            </div>
            <div class="headeractionmargin">
                <a href="#" class="nav-link" onclick="toggleUnderline(event)">打</a>
            </div>
            <div class="headeractionmargin">
                <a href="#" class="nav-link" onclick="toggleUnderline(event)">訊</a>
            </div>
            <div ></div>
            <div ></div>
            <div ></div>
            <div class="headerprofileimgmargin">
                <img src="img/2-1.png" class="profileimg">
            </div>
        </div>
    </div>    
</header>
<script>
    function toggleUnderline(event) {
        // 遍历所有具有.nav-link类的元素
        const links = document.querySelectorAll('.nav-link');
        links.forEach(link => {
            // 移除所有元素的下划线类
            link.classList.remove('underline');
        });
        // 添加被点击元素的下划线类
        event.target.classList.add('underline');
    }
</script>