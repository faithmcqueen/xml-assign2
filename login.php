<?php



include "includes/header.php";
?>
<div class="container-sm text-center pgwrap">
    <h1 class="pgtitle">Help Desk</h1>
    <div class="text-center formwrap">
        <form method="post" action="" id="loginform">
            <div class="form-group">
                <label for="username">Username:</label>
                <input id="username" class="form-control-sm" name="username" type="text" />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control-sm" id="pass" name="pass"  />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-outline-dark" id="submitbtn" value="Login" />
            </div>
        </form>
    </div>
</div>
<?php include "includes/footer.php"; ?>
