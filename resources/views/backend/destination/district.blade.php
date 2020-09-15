<?php
/** @var array $listDistrict */
echo '<option value="" selected="selected">-- Chọn Quận/Huyện --</option>';
foreach ($listDistrict as $value) {
    echo "<option  value=".$value['id'].">".$value['_name']."</option>";
}
