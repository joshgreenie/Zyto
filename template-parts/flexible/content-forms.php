<?php
/**
 * Created by PhpStorm.
 * User: Nate
 * Date: 6/27/2017
 * Time: 11:30 AM
 */

$forms = get_sub_field('forms_content');

?>

<div class="forms-wrapper">
    <div class="container">
        <div class="forms">
            <?= $forms ? $forms : "" ?>
        </div>
    </div>
</div>
