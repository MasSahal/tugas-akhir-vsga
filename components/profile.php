<div class="col-sm-6 clearfix">
    <div class="user-profile pull-right">
        <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
        <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['username'] ?? "Debug"; ?><i class="fa fa-angle-down"></i></h4>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Log Out</a>
        </div>
    </div>
</div>