<div class="add-form">
    <div class="title">
        <div class="add-food-title"><a href="<?php echo _WEB_ROOT ?>/FoodController/add_food"><span>Thêm món</span></a></div>
        <div class="add-type-title"><a href="<?php echo _WEB_ROOT ?>/TypeController/add_type"><span>Thêm loại</span></a></div>
        <div class="add-table-title"><a href="<?php echo _WEB_ROOT ?>/TableController/add_table"><span>Thêm bàn</span></a></div>
        <div class="add-area-title"><a href="<?php echo _WEB_ROOT ?>/AreaController/add_area"><span>Thêm khu</span></a></div>
        <div class="add-account-title"><a href="<?php echo _WEB_ROOT ?>/UserController/add_user"><span>Thêm người dùng</span></a></div>
        <div class="add-group-title"><a href="<?php echo _WEB_ROOT ?>/GroupController/add_group"><span>Thêm quyền</span></a></div>
        <div class="add-user-group-title"><a href="<?php echo _WEB_ROOT ?>/GroupUserController/add_groupuser"><span>Thêm phân quyền</span></a></div>
    </div>
    <div class="alert">
        <div class="error">
            <?php
            if (isset($isReplaced)) {
                echo $isReplaced;
            } else if (isset($isNull)) {
                echo $isNull;
            } else if (isset($isSucessed)) { ?>
        </div>
        <div class="success">
            <?php echo $isSucessed; ?>
        </div>
    <?php } ?>
    </div>
    <form method="post" action="<?php echo _WEB_ROOT ?>/GroupUserController/add_groupuser" class="add-user-group">
        <div class="name">
            <div><span>1) Tên tài khoản: </span></div>
            <select name="userid">
                <option value="0"></option>
                <?php foreach ($accounts as $key => $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['username'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="group">
            <div><span>2) Chọn quyền: </span></div>
            <select name="groupid">
                <option value="0"></option>
                <?php foreach ($groups as $key => $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="add-btn"><input type="submit" name="add-user-group-btn" value="thêm"></div>
    </form>
</div>