<?php include("data.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects</title>
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
  <div class="container pb-3">
    <h1 class="text-center pt-4 pb-3" style="font-size: 32px;">Projects</h1>
    <div class="d-flex flex-row flex-wrap">
      <?php for($i = 0; $i < count($projects); $i++) { ?>
      <div class="card mx-2 text-center mb-3" style="width: 25rem; border: none; background: var(--card-color); border-radius: 15px;">
        <img src="<?php echo $projects[$i]['img']; ?>" class="card-img-top" style="border-radius: 15px;">
        <div class="card-body">
          <h5 class="card-title" style="color: var(--title-color); font-size: 21px;"><?php echo $projects[$i]["title"]; ?></h5>
          <p class="card-text pb-3" style="color: var(--title-color); font-size: 12px;"><?php echo $projects[$i]["desc"]; ?></p>
          <a href="project.php?id=<?php echo $projects[$i]['id']; ?>" class="btn btn-secondary w-100" style="background: var(--card-btn); color: var(--card-btn-text); padding: 8px 0;">See More</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php include("footer.php") ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>