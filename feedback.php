<?php include("data.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Russo+One&family=Montserrat:wght@400;600&display=swap"
    rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php include("header.php");?>
  <h1 class="my-3 text-center" style="font-family: 'Russo One'; font-size: 32px; color: var(--title-color);">Clients Review</h1>
  <div class="container d-flex justify-content-center flex-wrap flex-row">
    <?php for($i = count($reviews) - 1; $i > count($reviews) - 7; $i--) { ?>
    <div class="card mx-2 text-center mb-3" style="width: 22rem; border: none; background: var(--card-color); border-radius: 15px; box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);">
      <div class="card-body">
        <h5 class="card-title my-2" style="color: var(--title-color); font-size: 24px;"><?php echo $reviews[$i]['name'] ?></h5>
        <div class="flex-row">
          <?php for($star = 1; $star <= $reviews[$i]['rate']; $star++) { ?>
            <i class="fa-solid fa-star fs-1 mb-3 text-warning"></i>
          <?php }
          if($reviews[$i]['rate'] != 5) {
            for($star = 1; $star <= 5 - $reviews[$i]['rate']; $star++) { ?>
              <i class="fa-solid fa-star fs-1 mb-3 text-secondary"></i>
            <?php } } ?>
        </div>
        <p class="card-text pb-3" style="color: var(--title-color); font-size: 12px;"><?php echo $reviews[$i]['comment'] ?></p>
      </div>
    </div>
    <?php } ?>
    <a href="reviews.php" class="btn btn-secondary mt-3 mb-4 w-100" style="background: var(--btn-color); color: var(--title-color); font-family: 'Russo One'; padding: 12px 0;">
          See More
        </a>
  </div>
  <div class="container text-center" style="max-width: 50%;">
    <p class="mt-3">If you have any questions or need assistance, just feel free to</p>
    <form id="feedbackForm" class="d-flex flex-column">
      <h1 class="my-2" style="font-family: 'Russo One'; font-size: 32px; color: var(--title-color);">Contact Us</h1>

      <div class="form-group">
        <input type="name" id="name" class="form-input mb-3" placeholder=" " required/>
        <label for="name" class="form-label">Your Name</label>
      </div>
      
      <div class="form-group">
        <input type="email" id="email" class="form-input mb-3" placeholder=" " required/>
        <label for="email" class="form-label">Your Email</label>
      </div>
      
      <div class="form-group">
        <input type="text" id="titleMessage" class="form-input mb-3" placeholder=" " required/>
        <label for="titleMessage" class="form-label">Title of Message</label>
      </div>
      
      <div class="form-group">
        <textarea id="message" class="form-input mb-3" placeholder=" " rows="5" required></textarea>
        <label for="message" class="form-label">Message</label>
      </div>
      
      <button type="submit" class="btn btn-success w-100" style="padding: 15px; border-radius: 30px;">
        <i class="fa-solid fa-paper-plane fs-5"></i> Send
      </button>
    </form>
    <p>You have thoughts to share, you’re welcome to</p>
    <form class="d-flex flex-column">
      <h1 class="my-2" style="font-family: 'Russo One'; font-size: 32px; color: var(--title-color);">Leave Feedback</h1>
      
      <div class="form-group">
        <input type="name" id="name" class="form-input mb-3" placeholder=" " required/>
        <label for="name" class="form-label">Your Name (optional)</label>
      </div>
      
      <div class="form-group">
        <input type="text" id="text" class="form-input mb-3" placeholder=" " required/>
        <label for="text" class="form-label">Message</label>
      </div>
      
      <div class="form-group">
        <div class="form-group star-rating mb-3" id="starRating">
          <i class="fa-solid fa-star fs-1" data-value="1"></i>
          <i class="fa-solid fa-star fs-1" data-value="2"></i>
          <i class="fa-solid fa-star fs-1" data-value="3"></i>
          <i class="fa-solid fa-star fs-1" data-value="4"></i>
          <i class="fa-solid fa-star fs-1" data-value="5"></i>
        </div>
        <input type="hidden" name="rating" id="ratingValue" value="0" />
      </div>
      
      <button type="submit" class="btn btn-success w-100" style="padding: 15px; border-radius: 30px;">Publish</button>
    </form>
    <p>Or you can write to us on social networks</p>
    <div class="d-flex flex-column">
      <a target="_blank" href="mailto:example@example.com" class="text-center mb-2" style="font-size: 21px; font-family: 'Russo One';">
        <i class="fa-solid fa-envelope fs-3"></i> 
        Send Email
      </a>
      <a target="_blank" href="https://t.me/username" class="text-center mb-2" style="font-size: 21px; font-family: 'Russo One';">
        <i class="fa-brands fa-telegram fs-3"></i> 
        Write to Telegram
      </a>
      <a target="_blank" href="https://github.com/username" class="text-center mb-2" style="font-size: 21px; font-family: 'Russo One';">
        <i class="fa-brands fa-github fs-3"></i> 
        View GitHub
      </a>
    </div>
    <section style="max-width: 600px; margin: 40px auto; font-family: 'Montserrat', sans-serif; color: #ddd;">
      <h2 style="
        font-family: 'Russo One', sans-serif;
        font-size: 28px;
        text-shadow: 1px 1px 6px #888;
        margin-bottom: 20px;
        text-align: center;
      ">
        FAQ (Frequently Asked Questions)
      </h2>

      <div style="background: #111; border-radius: 10px; overflow: hidden;">
        <button class="faq-question">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit?
        </button>
        <div class="faq-answer">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lectus velit, consequat in odio at, scelerisque tempor sapien. Etiam lobortis vehicula neque vel fermentum.
        </div>

        <button class="faq-question">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit?
        </button>
        <div class="faq-answer">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lectus velit, consequat in odio at, scelerisque tempor sapien. Etiam lobortis vehicula neque vel fermentum.
        </div>

        <button class="faq-question">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit?
        </button>
        <div class="faq-answer">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lectus velit, consequat in odio at, scelerisque tempor sapien. Etiam lobortis vehicula neque vel fermentum.
        </div>
      </div>
    </section>
  </div>
  <?php include("footer.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Подключаем EmailJS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <script>
    // Инициализация EmailJS
    emailjs.init("GzZ6JLsPC2zwx2eQx");

    const feedbackForm = document.getElementById('feedbackForm');
    const stars = document.querySelectorAll('#starRating .fa-star');
    const ratingInput = document.getElementById('ratingValue');
    const storageKey = 'feedbackTitle';
    const input = document.getElementById('titleMessage');
    let selectedRating = 0;

    // Рейтинг
    stars.forEach(star => {
      star.addEventListener('mouseover', () => highlightStars(parseInt(star.dataset.value)));
      star.addEventListener('mouseout', () => highlightStars(selectedRating));
      star.addEventListener('click', () => {
        selectedRating = parseInt(star.dataset.value);
        ratingInput.value = selectedRating;
        highlightStars(selectedRating);
      });
    });

    function highlightStars(rating) {
      stars.forEach(star => star.classList.toggle('selected', parseInt(star.dataset.value) <= rating));
    }

    // Отправка формы
    feedbackForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const submitBtn = feedbackForm.querySelector('button[type="submit"]');
      const originalBtnHTML = submitBtn.innerHTML;

      // Показать загрузку и заблокировать кнопку
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';

      // Блокировать закрытие страницы
      const beforeUnloadHandler = (event) => {
        event.preventDefault();
        event.returnValue = '';
      };
      window.addEventListener('beforeunload', beforeUnloadHandler);

      const templateParams = {
        name: document.getElementById('name').value,
        title: document.getElementById('titleMessage').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value
      };

      emailjs.send("service_kqg52b1", "template_lkxq411", templateParams)
        .then(() => {
          feedbackForm.reset();
          localStorage.removeItem(storageKey);
        })
        .catch((err) => {
          console.error('EmailJS error:', err);
        })
        .finally(() => {
          // Вернуть кнопку в нормальный вид
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnHTML;
          // Разблокировать выход со страницы
          window.removeEventListener('beforeunload', beforeUnloadHandler);
        });
    });

    document.querySelectorAll('.faq-question').forEach(btn => {
      btn.addEventListener('click', () => {
        const answer = btn.nextElementSibling;
        const isOpen = answer.classList.contains('show');

        // Закрываем все
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('show'));

        // Если кликнули по закрытому — открыть
        if (!isOpen) {
          answer.classList.add('show');
        }
      });
    });

    window.addEventListener('DOMContentLoaded', () => {
      const saved = localStorage.getItem(storageKey);
      if (saved) input.value = saved;
      highlightStars(0);
      
      if (window.location.hash === '#feedbackForm') {
        const form = document.getElementById('feedbackForm');
        if (form) {
          form.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });

    window.addEventListener("beforeunload", () => {
      localStorage.removeItem("feedbackTitle");
    });
  </script>
</body>
</html>