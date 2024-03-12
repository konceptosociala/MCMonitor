<?php $this->layout('layout', ['title' => 'Not found']) ?>

<section class="error-section container-fluid text-center p-auto">
    <h1 class="display-1"><?=$this->e($error)?></h1>
    <h3 class="display-5"><?=$this->e($error_desc)?></h1>
</section>
