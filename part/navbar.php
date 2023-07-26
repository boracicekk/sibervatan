<header>
    <div class="container">
        <div class="header-wrapper mt-5">
            <div class="row header-content">
                <div class="header-title col-md-8">
                    <a href="<?php echo $index ?>">Bora Çiçek</a>
                </div>
                <div class="header-menu col-md-4">
                    <ul>
                        <li>
                            <a href="<?php echo $index ?>" style="opacity: 100%;">Ana Sayfa</a>
                        </li>
                        <li>
                            <a href="<?php echo $blog ?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?php echo $about ?>">Hakkımda</a>
                        </li>
                        <li>
                            <a href="<?php echo $contact ?>">İletişim</a>
                        </li>
                        <?php if(isset($_COOKIE["auth"])):?>
                            <li>
                                <a href="<?php echo $adminPanel ?>">Admin Panel</a>
                            </li>
                            <li>
                                <a href="<?php echo $logout ?>">Çıkış Yap</a>
                            </li>
                        <?php endif;?>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</header>