<ul class="tNav">
   <?php
        if(!$userid){
            ?>
            <li><a href="./tnav/login_form.php">LOGIN</a></li>
            <li><a href="./tnav/join.php">JOIN</a></li>
            <?php
        }else{
            ?>
            <li class="user" style="color:#fff;font-size:12px;line-height:28px;"><?=$username?>(<?=$userid?>) 님, 안녕하세요!</li>
            <li><a href="./tnav/logout.php">LOGOUT</a></li>
            <?php
        }
    ?>
</ul>
