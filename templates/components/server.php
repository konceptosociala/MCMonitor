<?php
    function trimOrLeave(string $string, int $length): string {
        if (strlen($string) <= $length)
            return $string;

        return substr($string, 0, $length).'...';
    }
?>

<div class="server container p-4 bg-dark bg-gradient d-flex align-items-start flex-lg-row flex-md-column flex-sm-column flex-column">
    <div class="me-lg-3 mb-md-3 mb-sm-3 mb-3 mx-auto">
        <p class="server-ip text-center font-monospace"><?=$this->e($ip)?></p>
        <img src="<?=$this->e($logo)?>" width=150 class="img-thumbnail server-logo">
    </div>
    <div class="server-content">
        <h1 class="server-name  text-lg-start text-md-center text-sm-center text-center">
            <?=$this->e($title)?>
            <i class="server-version"><?=$this->e($version)?></i>
        </h1>
        <p class="server-description">
            <?= trimOrLeave($this->e($description), 400) ?> 
            <a class="text-light" href="/servers/<?=$this->e($name)?>">[Learn more]</a>
        </p>
    </div>
</div>