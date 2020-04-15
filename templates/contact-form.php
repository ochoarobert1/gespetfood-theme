<form class="contact-form-container">
    <div class="container">
        <div class="row">
            <div class="contact-form-item col-12">
                <input type="text" class="form-control custom-form-control" name="email" placeholder="<?php _e('E-mail (*)', 'gespetfood'); ?>" />
                <small class="danger custom-danger d-none error-email"></small>
            </div>
            <div class="contact-form-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <input type="text" class="form-control custom-form-control" name="fullname" placeholder="<?php _e('Nombre (*)', 'gespetfood'); ?>" />
                <small class="danger custom-danger d-none error-fullname"></small>
            </div>
            <div class="contact-form-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <input type="text" class="form-control custom-form-control" name="fullname" placeholder="<?php _e('Apellido (*)', 'gespetfood'); ?>" />
                <small class="danger custom-danger d-none error-fullname"></small>
            </div>
            <div class="contact-form-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <input type="text" class="form-control custom-form-control" name="fullname" placeholder="<?php _e('Compañía', 'gespetfood'); ?>" />
                <small class="danger custom-danger d-none error-fullname"></small>
            </div>
            <div class="contact-form-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <input type="text" class="form-control custom-form-control" name="fullname" placeholder="<?php _e('Pais (*)', 'gespetfood'); ?>" />
                <small class="danger custom-danger d-none error-fullname"></small>
            </div>
            <div class="contact-form-item col-12">
                <textarea name="message" class="form-control custom-form-control" id="message" cols="30" rows="4" placeholder="<?php _e('Mensaje (*)', 'gespetfood'); ?>"></textarea>
                <small class="danger custom-danger d-none error-message"></small>
            </div>
            <div class="contact-form-item col-12">
                <h6><?php _e('(*) Campos Obligatorios', 'gespetfood'); ?></h6>
            </div>
            <div class="contact-form-submit col-12">
                <button type="submit" class="btn btn-md btn-warning btn-submit"><?php _e('Enviar', 'gespetfood'); ?></button>
            </div>
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
            <div class="contact-form-loader col-12"></div>
            <div class="contact-form-response col-12"></div>
        </div>
    </div>
</form>
