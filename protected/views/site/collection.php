<?php
/**
 * Created by LeFranj.
 * Date: 05.01.2016
 * Time: 3:00
 * @var array $thumbs
 */
?>
<div class="row">
<?php
if (!empty($thumbs)) :
foreach ($thumbs as $title => $data) :
    ?>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo $data['img'];?>" alt="...">
            <div class="caption">
                <h3><?php echo $title;?></h3>
                <p><?php echo $data['description'];?></p>
                <p><a href="<?php echo $data['url'];?>" class="btn btn-default" target="_blank">View</a></p>
            </div>
        </div>
    </div>
    <?php
endforeach;
endif;
?>
</div>
