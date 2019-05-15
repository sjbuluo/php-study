<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-15
 * Time: 17:16
 */
?>
<form action="request_result.php" method="post" enctype="application/x-www-form-urlencoded">
    <input type="text" name="username" value="<?php echo 'me'; ?>">
    <input type="submit" value="提交">
</form>
<hr />
<form action="" method="post" name="form1">
    <input name="user" type="text" placeholder="用户名">
    <br />
    <input name="pwd" type="password" placeholder="密码">
    <br />
    <input name="submit" type="submit" value="提交">
</form>
<?php
    if(isset($_POST['submit']) && $_POST['submit'] == '提交') {
        echo "输入的用户名: ".$_POST['user']." 密码: ".$_POST['pwd']."<br >";

    }
?>
<hr>
<form action="" method="post">
    <input type="checkbox" name="book[]" value="我有一座恐怖屋">A<br>
    <input type="checkbox" name="book[]" value="深夜书屋">B<br>
    <input type="checkbox" name="book[]" value="猛鬼收容系统">C<br>
    <input type="submit" value="提交">
</form>
<?php
    if(isset($_POST['book']) && count($_POST['book']) > 0) {
        print_r($_POST['book']);
    }
?>

<hr>

<form action="" method="post">
    <select name="food[]">
        <option value="fan">饭</option>
        <option value="mian">面</option>
    </select>
    <input type="submit" value="提交">
</form>
<?php
    if (isset($_POST['food'])) {
        print_r($_POST['food']);
    }
?>

<hr>

<form action="" method="post">
    <input type="file" name="file">
    <input type="submit" value="提交">
</form>

<?php
    print_r($_POST);
    if (isset($_POST['file']) && $_POST['file'] != null) {
        print($_POST['file']);
    } else {
        print('不存在');
    }
?>

<hr>
<?php
    echo urlencode("你好")."<br>";
    echo urldecode("%E4%BD%A0%E5%A5%BD")."<br>";
?>
<hr>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit" value="上传">
</form>
<?php
    if(isset($_FILES['photo'])) {
        print_r($_FILES['photo']);
        $path = './uploaded/'.$_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $path);
        echo "<img src=\"$path\" />";
    }
?>