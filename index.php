<?php include("data.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
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
  <div class="container py-4">
    <h1 class="mb-3 text-center" style="font-family: 'Russo One'; font-size: 32px; color: var(--title-color);">About Me (or Company)</h1>
    <div class="d-flex align-items-center justify-content-center gap-4 flex-wrap">
      <div style="flex-shrink: 0;">
        <img src="images/image.png" alt="Your or Company Image"
             style="width: 300px; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 25px;">
      </div>
      <div style="max-width: 700px;">
        <p style="color: var(--text-color); font-family: 'Montserrat', sans-serif;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum bibendum est at vestibulum. In imperdiet ex id enim hendrerit dictum. Etiam eget imperdiet lectus. Vestibulum et facilisis metus, vel finibus justo. Fusce eu mollis eros. Ut malesuada egestas nisi, sit amet vehicula ligula finibus a. Vestibulum sed nulla eget nunc mollis euismod. Vivamus felis velit, sodales quis congue vel, tempor sed leo. Pellentesque rutrum luctus ex, at faucibus elit luctus eget.<br><br>
          Phasellus vestibulum, metus eu aliquet vehicula, urna orci dapibus leo, id dignissim justo risus ac diam. Sed sed dapibus elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla ex neque, varius at massa sit amet, eleifend elementum lorem. In interdum dui nec nisi luctus, sed mollis mi fringilla. Morbi a gravida ante. Praesent dapibus viverra malesuada. Cras ac tristique metus...
        </p>
      </div>
      <a href="about.php" class="btn btn-secondary mt-3 w-100" style="background: var(--btn-color); color: var(--title-color); font-family: 'Russo One'; padding: 12px 0;">
          See More
        </a>
    </div>
  </div>
  <div class="container pb-3">
    <h1 class="text-center pt-4 pb-3" style="font-size: 32px;">Last Projects</h1>
    <div class="d-flex flex-row">
      <?php for($i = count($projects) - 1; $i > count($projects) - 4; $i--) { ?>
      <div class="card mx-3 text-center" style="width: 25.5rem; border: none; background: var(--card-color); border-radius: 15px;">
        <img src="<?php echo $projects[$i]['img']; ?>" class="card-img-top" style="border-radius: 15px;">
        <div class="card-body">
          <h5 class="card-title" style="color: var(--title-color); font-size: 21px;"><?php echo $projects[$i]['title']; ?></h5>
          <p class="card-text pb-3" style="color: var(--title-color); font-size: 12px;"><?php echo $projects[$i]['desc']; ?></p>
          <a href="project.php?id=<?php echo $projects[$i]['id']; ?>" class="btn btn-secondary w-100" style="background: var(--card-btn); color: var(--card-btn-text); padding: 8px 0;">See More</a>
        </div>
      </div>
      <?php } ?>
    </div>
    <a class="btn btn-secondary w-100 my-3" style="background: var(--btn-color); color: var(--title-color);" href="projects.php">See More Projects</a>
  </div>
  <?php include("footer.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
