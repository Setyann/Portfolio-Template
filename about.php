<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
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
  <section class="container py-4" style="padding-bottom: 50px; border-bottom: 2px solid var(--title-color); margin-bottom: 20px; ">
    <h1 class="mb-3 text-center" style="font-family: 'Russo One'; font-size: 32px; color: var(--title-color);">About Me (or Company)</h1>
    <div class="d-flex align-items-start justify-content-center gap-4 flex-wrap">
      <div style="flex-shrink: 0;">
        <img src="images/image.png" alt="Your or Company Image" style="width: 300px; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 25px;">
      </div>
      <div style="max-width: 700px;">
        <p style="color: var(--text-color); font-family: 'Montserrat', sans-serif;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum rhoncus rhoncus. Aenean molestie mollis ipsum, tempus facilisis nulla semper in. Sed nec faucibus ligula. Ut convallis nibh massa, a viverra felis sagittis eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec feugiat massa id ante tristique, non scelerisque libero ornare. Maecenas ullamcorper ex velit, id vehicula dolor feugiat consectetur.<br><br>
          Vivamus lectus neque, convallis facilisis scelerisque euismod, ullamcorper ut purus. Praesent gravida vehicula ultrices. Pellentesque efficitur neque sed nunc tincidunt faucibus. Etiam blandit, arcu eget aliquam sagittis, tortor mi lobortis diam, eget finibus nisl tellus eget erat. Maecenas mi purus, ultrices eget porttitor vitae, efficitur eu lacus. Aliquam accumsan augue at turpis ullamcorper, a interdum orci semper. Morbi dictum, tortor ac aliquet tempus, lacus purus luctus lectus, non ultrices justo ex pulvinar lacus. Mauris lorem augue, bibendum sed condimentum nec, interdum eu velit.<br><br>
          Maecenas iaculis risus nec ante porta, quis dictum diam auctor. Mauris nulla massa, sagittis ut libero quis, vestibulum pretium tellus. Aliquam arcu mi, laoreet ut nibh nec, mollis dignissim nibh. Integer at neque bibendum, lobortis tellus ac, aliquam est. Suspendisse tempus libero nisi, ut porta metus malesuada eget. Integer ut dapibus ligula. Donec est lacus, congue in porta tempor, ornare scelerisque mi. Phasellus convallis suscipit lectus eget accumsan.
        </p>
      </div>
    </div>
  </section>
  <section class="container py-4" style="padding-bottom: 50px; border-bottom: 2px solid var(--title-color); margin-bottom: 20px; ">
    <h1 class="mb-3 text-center" style="font-family: 'Russo One'; font-size: 32px; color: var(--title-color);">Skills</h1>
    <div class="d-flex align-items-start justify-content-center gap-4 flex-row flex-wrap">
      <div class="text-center mx-5">
        <img src="images/image.png" alt="Skill" style="width: 250px; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 100%;">
        <h2 class="text-center mt-3" style="font-size: 24px;">Skill</h2>
      </div>
      <div class="text-center mx-5">
        <img src="images/image.png" alt="Skill" style="width: 250px; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 100%;">
        <h2 class="text-center mt-3" style="font-size: 24px;">Skill</h2>
      </div>
      <div class="text-center mx-5">
        <img src="images/image.png" alt="Skill" style="width: 250px; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 100%;">
        <h2 class="text-center mt-3" style="font-size: 24px;">Skill</h2>
      </div>
    </div>
  </section>
  <section class="container py-4" style="padding-bottom: 50px; margin-bottom: 20px; ">
    <h1 class="mb-3 text-center" style="font-family: 'Russo One'; font-size: 32px; color: var(--title-color);">Why Choose Us?</h1>
    <div class="d-flex align-items-start justify-content-center gap-4 flex-row flex-wrap">
      <div class="text-center" style="background: var(--card-color); padding: 20px; max-width: 350px; border-radius: 25px;">
        <h1 class="mb-3 text-center" style="font-family: 'Russo One'; font-size: 21px; color: var(--title-color);">Title</h1>
        <p class="text-center" style="font-size: 14px; color: var(--title-color);">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis maximus urna, eget consequat felis fermentum vitae. Vivamus non quam eleifend, consectetur lectus eu, lobortis arcu.</p>
      </div>
      <div class="text-center" style="background: var(--card-color); padding: 20px; max-width: 350px; border-radius: 25px;">
        <h1 class="mb-3 text-center" style="font-family: 'Russo One'; font-size: 21px; color: var(--title-color);">Title</h1>
        <p class="text-center" style="font-size: 14px; color: var(--title-color);">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis maximus urna, eget consequat felis fermentum vitae. Vivamus non quam eleifend, consectetur lectus eu, lobortis arcu.</p>
      </div>
      <div class="text-center" style="background: var(--card-color); padding: 20px; max-width: 350px; border-radius: 25px;">
        <h1 class="mb-3 text-center" style="font-family: 'Russo One'; font-size: 21px; color: var(--title-color);">Title</h1>
        <p class="text-center" style="font-size: 14px; color: var(--title-color);">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis maximus urna, eget consequat felis fermentum vitae. Vivamus non quam eleifend, consectetur lectus eu, lobortis arcu.</p>
      </div>
    </div>
  </section>
  <?php include("footer.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
