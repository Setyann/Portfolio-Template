<?php
  include("data.php");
  $id = isset($_GET['id']) ? (int)$_GET['id'] : null;

  if ($id === null) {
      // Показать все отзывы
      $projectReviews = $reviews;
  } else {
    // Проверяем, есть ли проект с таким ID
    if (!isset($projects[$id])) {
        $projectReviews = []; // Проект не найден
        $projectNotFound = true;
    } else {
        $projectReviews = array_filter($reviews, fn($r) => isset($r['projectId']) && $r['projectId'] == $id);
        $projectNotFound = empty($projectReviews);
    }
  }
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
  <h1 class="my-3 text-center" style="font-family: 'Russo One'; font-size: 32px; color: var(--title-color);">Clients Review</h1>
  <div class="container d-flex justify-content-center flex-wrap flex-row">
    <?php if (!empty($projectReviews)) { ?>
      <?php foreach ($projectReviews as $review) { ?>
        <div class="card mx-2 text-center mb-3" style="width: 22rem; border: none; background: var(--card-color); border-radius: 15px; box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);">
          <div class="card-body">
            <h5 class="card-title my-2" style="color: var(--title-color); font-size: 24px;"><?php echo $review['name'] ?></h5>
            <div class="flex-row">
              <?php for($star = 1; $star <= $review['rate']; $star++) { ?>
                <i class="fa-solid fa-star fs-1 mb-3 text-warning"></i>
              <?php }
              if($review['rate'] != 5) {
                for($star = 1; $star <= 5 - $review['rate']; $star++) { ?>
                  <i class="fa-solid fa-star fs-1 mb-3 text-secondary"></i>
                <?php } } ?>
            </div>
            <p class="card-text pb-3" style="color: var(--title-color); font-size: 12px;"><?php echo $review['comment'] ?></p>
          </div>
        </div>
      <?php }} else { ?>
      <p class="text-center w-100 m-3" style="font-size: 21px; color: var(--title-color);">
        No reviews found for this project. The project may be irrelevant or currently have no reviews. Please try again later.
      </p>
    <?php } ?>
  </div>
  <?php include("footer.php") ?>
</body>
</html>