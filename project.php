<?php
  include("data.php");
  $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
  $projectReviews = array_filter($reviews, fn($r) => $r['projectId'] == $id);
  $projectReviews = array_slice($projectReviews, 0, 3);
?>
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
  <div class="container d-flex flex-column text-center justify-content-center mt-4">
    <img src="<?php echo $projects[$id]['img']; ?>" alt="Your or Company Image" style="width: 100%; aspect-ratio: 16 / 9; object-fit: cover;">
    <h1 class="text-center pt-4 pb-3" style="font-size: 32px;"><?php echo $projects[$id]['title']; ?></h1>
    <p><?php echo $projects[$id]['detailedDesc']; ?></p>
    <div class="d-flex justify-content-center align-items-center flex-wrap" style="gap: 0.5rem;">
      <?php foreach ($projectReviews as $review) { ?>
        <div class="card mx-2 text-center mb-3" style="width: 22rem; border: none; background: var(--card-color); border-radius: 15px; box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);">
          <div class="card-body">
            <h5 class="card-title my-2" style="color: var(--title-color); font-size: 24px;">
              <?php echo htmlspecialchars($review['name']); ?>
            </h5>
            <div class="flex-row">
              <?php for ($star = 1; $star <= $review['rate']; $star++) { ?>
                <i class="fa-solid fa-star fs-1 mb-3 text-warning"></i>
              <?php }
              if ($review['rate'] != 5) {
                for ($star = 1; $star <= 5 - $review['rate']; $star++) { ?>
                  <i class="fa-solid fa-star fs-1 mb-3 text-secondary"></i>
                <?php }
              } ?>
            </div>
            <p class="card-text pb-3" style="color: var(--title-color); font-size: 12px;">
              <?php echo htmlspecialchars($review['comment']); ?>
            </p>
          </div>
        </div>
      <?php } ?>
      <a class="d-flex align-items-center justify-content-center" style="
          background: var(--title-color);
          color: var(--background-color);
          border-radius: 25px;
          padding: 10px;
          height: 51px;
          min-width: 51px;"
          href="reviews.php?id=<?php echo $id; ?>">
        <i class="fa-solid fa-arrow-right fs-2"></i>
      </a>
    </div>
    <a href="feedback.php#feedbackForm" class="btn btn-success my-2 w-100" style="font-family: 'Russo One'; padding: 12px 0; border-radius: 30px;" data-text="Questions about <?php echo $projects[$id]['title']; ?>">
      Write Us For It
    </a>
    <a href="" class="btn btn-outline-success mt-2 mb-3 w-100" style="font-family: 'Russo One'; padding: 12px 0; border-radius: 30px;">
      See Project
    </a>
  </div>
  <?php include("footer.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.querySelectorAll('a[data-text]').forEach(btn => {
      btn.addEventListener('click', (e) => {
        const text = btn.dataset.text;
        localStorage.setItem('feedbackTitle', text); // сохраняем временно
      });
    });
  </script>
</body>
</html>