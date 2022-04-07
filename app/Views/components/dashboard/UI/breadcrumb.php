<ol class="breadcrumb float-sm-right">
            <?php foreach ($breads as $bread):?>
              <?php if(isset($bread["link"])):?>
              <li class="breadcrumb-item"><a href="<?=$bread['link']?>"><?=$bread["name"]?></a></li>
              <?php else : ?>
              
              <li class="breadcrumb-item active"><?=$bread["name"]?></li>
              <?php endif  ; ?>
            <?php endforeach; ?>
            </ol>