<style>
   .header {
    position: sticky; /* 将标题栏固定在容器内 */
    top: 0; /* 将标题栏固定在容器的顶部 */
    z-index: 9999; /* 确保标题栏位于其他内容的上层 */
    /* 其他样式，例如背景颜色、文本样式等 */
    grid-area: header; 
    background-color: lightslategray;
    width: 120%; /* 设置标题栏的宽度为100%，使其填满整个屏幕 */
    height: 56px; 
    margin-bottom: 10px;
}
</style>
<header class="header">Header Content</header>