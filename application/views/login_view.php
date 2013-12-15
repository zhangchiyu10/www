<html>
    <center>
        <h1>
            <?php echo "欢迎你,$ip" ?>
        </h1>
    </center>
    <form action="./index.php/login/check_visitor" method="post">
        <center>
            <ul style="list-style-type: none">
                <li>用户名:<input type="text" name="name"/></li>
                <li>密码：<input type="password" name="password"/></li>
                <li><input type="submit" name="sub" value="登陆"/></li>
                
            </ul>
        </center>
    </form>
    <center>
        <h1>
            <?php echo "<br/><br/>注册" ?>
        </h1>
    </center>
    
    <form action="./index.php/register/check_visitor" method="post">
        <center>
            <ul style="list-style-type: none">
                <li>用户名:<input type="text" name="name"/></li>
                <li>密码：<input type="password" name="password"/></li>
                <li>重复密码：<input type="password" name="password1"/></li>
                <li><input type="submit" name="sub" value="注册"/></li>
                
            </ul>
        </center>
    </form>
</html>