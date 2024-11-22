<style>
/* Wyśrodkowanie kontenera reCAPTCHA */
.recaptcha-container {
    display: flex;
    flex-direction: column; /* Układ pionowy (napisy i widget w jednej kolumnie) */
    align-items: center; /* Wyśrodkowanie poziome */
    justify-content: center; /* Wyśrodkowanie pionowe */
    width: 100%; /* Dopasowanie do szerokości formularza */
    margin: 0 auto;
    padding-top: 10px; /* Odstęp od góry */
}

/* Ukrycie dodatkowego napisu generowanego przez Google (jeśli istnieje) */
.g-recaptcha iframe + div {
    display: none;
}
</style>

<div class="form-group recaptcha-container">
    <div class="g-recaptcha" data-sitekey="{$site_key}"></div>
</div>
<script src="https://www.google.com/recaptcha/api.js?hl=pl" async defer></script>
