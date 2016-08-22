<div class="widget">
    <h2>Member's Sign In</h2>
    <div class="inner">
        <form method="post"action="signin.php">
            <input type="email" name="uname_txt" placeholder="username" value="<?php
                   echo $_REQUEST[uname_txt];
            ?>" required><br>
            <input type="password" name="upass_pas" placeholder="password" value="<?php
                   echo $_REQUEST[upass_pas];
            ?>" required><br>
            <input class="btn" type="submit" name="btn_signin" value="Sign In" placeholder="username"><br>
            <br><p><a href="resetp.php">reset password</a></li></p>
            <p><a href="signup.php">create an account</a><br></p>
        </form>
    </div>
</div>
