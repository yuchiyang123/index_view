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
    grid-template-columns: 100px auto  70px 70px 70px 70px auto 70px;
}
</style>
<header class="header">
    <div class="headerdiv">
        <div>
            <h2>旅遊媒合平台</h2>
        </div>
        <div>
            <ion-icon name="reorder-four-outline"></ion-icon>
        </div>
        <div>
            <ion-icon name="reorder-four-outline"></ion-icon>
        </div>
        <div>
            <ion-icon name="reorder-four-outline"></ion-icon>
        </div>
        <div>
            <ion-icon name="reorder-four-outline"></ion-icon>
        </div>
        <div>
            <img src="img/2-1.png" class="profileimg">
        </div>
    </div>
</header>