<?php
$pageTitle = $trans('contact.title');
require __DIR__ . '/../layouts/header.php';
?>

<section class="relative">
  <?php generateBackground('white',3); ?>
  <div class="block-content flex-center min-h-dvh py-24 lg:py-30">
    <article class="rounded-2xl lg:rounded-4xl bg-white p-7 flex flex-col-reverse lg:flex-row gap-7 xl:gap-12 w-full">

      <div class="w-full lg:w-1/2 h-112 lg:h-auto">
        <div class="relative rounded-lg lg:rounded-xl h-full bg-grey-100/10 overflow-hidden">
          <div class="absolute top-4 left-4 flex items-center gap-2 text-white font-bold text-xl leading-none z-2">
            <svg class="size-7 rounded-full"><use href="#flag-mx"/></svg>
            <span class="pt-1.5">MEX</span>
          </div>

          <div id="offices-swiper" class="swiper !h-full w-full z-0">
            <div class="swiper-wrapper !h-full">
              <?php foreach($content['offices'] as $slide): ?>
                <div class="swiper-slide !h-full relative block">
                  <img src="/public/images/office/<?= $slide['image']?>" alt="<?= $slide['alt']?>" class="absolute top-0 left-0 w-full h-full object-cover">
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div id="offices-thumbs-swiper" class="swiper w-[calc(100%_-_--spacing(8))] z-1 !absolute bottom-4 left-4 right-4">
            <div class="swiper-wrapper !h-full">
              <?php foreach($content['offices'] as $slide): ?>
                <div class="swiper-slide group !h-full relative block">
                  <img src="/public/images/office/<?= $slide['image']?>" alt="<?= $slide['alt']?> thumbnail" class="w-full h-28 md:h-32 object-cover border-surface-100 border rounded-lg group-[&.swiper-slide-thumb-active]:border-brand-100">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full lg:w-1/2 lg:py-7">
        <h2 class="text-4xl font-bold text-center mb-6 lg:mb-8">
          <?= $trans('contact.title') ?>
        </h2>

        <!-- Success Message -->
        <div id="success-message" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
          <?= $trans('contact.success') ?>
        </div>

        <!-- Error Message -->
        <div id="error-message" class="hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
          <span id="error-text"></span>
        </div>

        <form id="contact-form" class="space-y-6">
          <!-- Name -->
          <div>
            <label for="name" class="block text-sm mb-1">
              <?= $trans('contact.form.name') ?>
            </label>
            <input
              type="text"
              id="name"
              name="name"
              required
              class="w-full px-4 py-3 border border-grey-100/40 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-100"
            >
            <span class="error-message text-red-700 text-sm hidden" id="error-name"></span>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm mb-1">
              <?= $trans('contact.form.email') ?>
            </label>
            <input
              type="email"
              id="email"
              name="email"
              required
              class="w-full px-4 py-3 border border-grey-100/40 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-100"
            >
            <span class="error-message text-red-700 text-sm hidden" id="error-email"></span>
          </div>

          <!-- Phone -->
          <div>
            <label for="phone" class="block text-sm mb-1">
              <?= $trans('contact.form.phone') ?>
            </label>
            <input
              type="tel"
              id="phone"
              name="phone"
              class="w-full px-4 py-3 border border-grey-100/40 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-100"
            >
          </div>

          <!-- Message -->
          <div>
            <label for="message" class="block text-sm mb-1">
              <?= $trans('contact.form.message') ?>
            </label>
            <textarea
              id="message"
              name="message"
              rows="6"
              required
              class="w-full px-4 py-3 border border-grey-100/40 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-100"
            ></textarea>
            <span class="error-message text-red-700 text-sm hidden" id="error-message"></span>
          </div>

          <!-- Submit Button -->
          <div>
            <button
              type="submit"
              id="submit-btn"
              class="button bg-brand-100 py-3 px-12 rounded-lg font-semibold cursor-pointer hover:bg-brand-200 transition-colors disabled:opacity-60 disabled:pointer-events-none disabled:cursor-not-allowed"
            >
              <?= $trans('contact.form.submit') ?>
            </button>
          </div>

          <p class="text-xs">
            <?= $currentLang === 'es'
              ? 'Este sitio está protegido por reCAPTCHA y se aplican la Política de privacidad y los Términos de servicio de Google.'
              : 'This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.'
            ?>
          </p>
        </form>
      </div>

    </article>
  </div>
</section>

<script>
// Contact form configuration
window.contactConfig = {
  recaptchaSiteKey: '<?= $config['recaptcha']['site_key'] ?>',
  submitUrl: '/<?= $currentLang === 'es' ? 'es/' : '' ?><?= $currentLang === 'es' ? 'contacto' : 'contact' ?>',
  language: '<?= $currentLang ?>'
};

document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute(window.contactConfig.recaptchaSiteKey, {action: 'contact'}).then(function(token) {
        const formData = new FormData(e.target);
        formData.append('recaptcha_token', token);

        fetch(window.contactConfig.submitUrl, {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(data => {
          console.log('send')
        });
      });
    });
  });
})
</script>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
