<html>
    <p>
        <?php echo "欢迎回来，$n<br/>你是第$c 个访问者" ?>
    </p>
    <form action="/index.php/uploadfiles/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="fs">
        <input type="submit" name="sub" value="提交" >(小于10M)
    </form>
    <input  type="button"  value="退出" onclick="logout()"/>
</html>