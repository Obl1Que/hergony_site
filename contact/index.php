<?php
require($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
?>
<div class="main-body">
    <div class="contact-form">
        <div class="contact-form-info">
            <div class="contact-form-info-block">
                <h2 class="contact-form-info-block-h2">
                    ONLINE STORE
                </h2>
                <div class="contact-form-info-block-text">
                    <p>
                        <span style="font-weight: bold">Email:</span>
                        info@dapdaplab.com
                    </p>
                    <p>Онлайн заказы</p>
                </div>
            </div>
            <div class="contact-form-info-block">
                <h2 class="contact-form-info-block-h2">
                    SALES / PRESS
                </h2>
                <div class="contact-form-info-block-text">
                    <p>
                        <span style="font-weight: bold">Email:</span>
                        info@dapdaplab.com
                    </p>
                    <p>Оптовые продажи, Маркетинг и PR</p>
                </div>
            </div>
            <div class="contact-form-info-block">
                <h2 class="contact-form-info-block-h2">
                    SOCIAL MEDIA
                </h2>
                <div class="contact-form-info-block-text">
                    <p><a style="text-decoration: none; color: #1E1E1E">Telegram</a></p>
                    <p><a style="text-decoration: none; color: #1E1E1E">Instagram</a></p>
                    <p><a style="text-decoration: none; color: #1E1E1E">Facebook</a></p>
                    <p><a style="text-decoration: none; color: #1E1E1E" href="https://vk.com/hergony">VK</a></p>
                </div>
            </div>
        </div>
        <div class="contact-form-message">
            <h2 class="contact-form-info-block-h2">СВЯЖИТЕСЬ С НАМИ</h2>
            <div>
                <div class="input-name">
                    <p class="contact-form-info-block-text">Имя</p>
                    <input type="text" name="NAME" required class="contact-input">
                </div>
                <div class="input-email">
                    <p class="contact-form-info-block-text">Email</p>
                    <input type="email" name="EMAIL" required class="contact-input">
                </div>
                <div class="input-theme">
                    <p class="contact-form-info-block-text">Тема</p>
                    <input type="text" name="THEME" required class="contact-input">
                </div>
                <div class="input-msg">
                    <p class="contact-form-info-block-text">Сообщение</p>
                    <textarea name="MSG" required class="contact-input" cols="40" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" value="ОТПРАВИТЬ СООБЩЕНИЕ" class="mailing-button">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
?>
