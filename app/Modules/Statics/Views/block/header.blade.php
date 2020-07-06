<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>

<div id="header">
    {!! isset($messages) && ($messages != '') ? $messages : '' !!}
    <div class="top">
        <div class="container">
            <div class="header-web">
                <div class="logo">
                    <a href="">
                        <img src="http://localhost/project.vn/ColosPlatium2/public/assets/img/logo.png" alt="">
                    </a>
                </div>
                <div class="menu-top">
                    <div class="navigation mNavigation">
                           <span class="navigationIcon">
                               <span></span>
                           </span>
                        <div class="backdropNav"></div>
                        <ul>
                           <li>
                               <a href="">Giới thiệu</a>
                           </li>
                            <li>
                                <a href="">SỮa non Smart Colostrum</a>
                            </li>
                            <li>
                                <a href="">Khách hàng chia sẻ</a>
                            </li>
                            <li>
                                <a href="">Ý kiến chuyên gia</a>
                            </li>
                            <li>
                                <a href="">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
