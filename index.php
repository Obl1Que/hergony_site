<?php
require($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
?>

<div class="main-photos">
    <div class="main-photo-div">
        <img src="/uploads/main-photo-2.png" class="main-photo">
    </div>
    <div class="main-photo-div">
        <img src="/uploads/main-photo-1.png" class="main-photo">
    </div>
    <div class="main-photo-div">
        <img src="/uploads/main-photo-3.png" class="main-photo">
    </div>
</div>
<div class="main-body">
    <div class="mailing">
        <h3 class="mailing-main-text">
            ПОДПИШИТЕСЬ НА НАШУ РАССЫЛКУ
        </h3>
        <div class="mailing-text">
            Будьте в курсе новых поступлений и скидок
        </div>
        <div class="mailing-form-post">
            <form method="post">
                <div>
                    <input type="email" placeholder="EMAIL" name="EMAIL" required class="mailing-input">
                </div>
                <div>
                    <input type="submit" value="ПОДПИСАТЬСЯ" class="mailing-button">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
?>