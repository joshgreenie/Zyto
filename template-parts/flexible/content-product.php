<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 6/6/2017
 * Time: 10:41 AM
 */


$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');

?>

<div class="test-product-wrapper">
    <div class="container">
        <div class="test-product">
            <h2>Test referral string from Cookie</h2>
            <?= "<a href='$button_link' class='referral-link'><h2>$button_text</h2></a>" ?>
        </div>
    </div>
</div>

