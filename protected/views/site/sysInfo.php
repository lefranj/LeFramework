<?php
/**
 *
 * @var SiteController $this
 * @var array $params
 */

foreach ($params as $cmdItem) :
?>
    <p class="lead">
        <?=$cmdItem['name']?>:
    </p>
    <pre><?=$cmdItem['response']?></pre>
<?php
endforeach;