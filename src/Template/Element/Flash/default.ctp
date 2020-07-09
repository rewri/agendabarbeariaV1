<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="container">
    <div class="alert alert-dismissible alert-primary">
        <button type="button" class="close" data-dismiss="alert" onclick="this.classList.add('hidden');">&times;</button>
        <p class="mb-0"><?= $message ?></p>
    </div>
</div>
