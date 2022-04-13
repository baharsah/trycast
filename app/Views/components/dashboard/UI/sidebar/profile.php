<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">
            <?php if(\Config\Services::session()->status):?>
              <?=\Config\Services::session()->username ?>
              <?php else:?>
                Guest
                <?php endif ; ?>
                <?php if(ENVIRONMENT === 'development') : ?> (Development) <?php endif ; ?>
        </div>
      </div>