<?php 
include './database.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- fontawesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- /fontawesom -->
  <link rel="stylesheet" href="./style.css">
  <title>Php Google Faq</title>

  <style>
    .debug{
      background-color: rgba(100, 0, 0, 0.2);
    }
  </style>
</head>
<body>
    <!-- HEADER -->
    <header class="px-4 d-flex justify-content-center flex-column">

      <div class="d-flex align-items-center mt-3 mb-1">
        <img src="./img/logo-Google.png" alt="google logo">
        <span class="ms-2 mb-2">Privacy e termini</span>
      </div>
      <ul class="d-flex ps-0 mb-0">
        <?php foreach($navItems as $item): ?>
        <li class="pb-2 <?php echo $item['active'] ? 'active': '' ; ?>">
          <a class="pb-2" href="<?php $item['href']?>">
            <?php echo $item['name'] ?>
          </a>
        </li>
        
        <?php endforeach; ?>
      </ul>
    </header>
    <!-- MAIN -->
    <main>
      <div class="container pt-5 pb-4">
        <div class="row d-flex justify-content-center">
          <div class="col-9">

            <?php foreach($faq as $item): ?>
              <div class="mb-5 pt-4">
                <h4 class="mb-4"><?php echo $item['title']?></h4>
                <?php echo $item['reply']?>
              </div>
            
            <?php endforeach; ?>
            
          </div>
        </div>
      </div>
    </main>
    <!-- FOOTER -->
    <footer class="py-3">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-9 d-flex justify-content-between">

            <ul class="d-flex ps-0 mb-0">
              <?php foreach($footerList as $item): ?>
              <li class="me-2">
                <a href="<?php echo $item['href']?>"><?php echo $item['name']?></a>
              </li>
              <?php endforeach; ?>
            </ul>

            <div class="d-flex">
              <div class="me-2 language">
              <i class="fa-solid fa-globe"></i>
              </div>
            <select class="form-select-sm py-0" aria-label="Default select example">
              <option selected>Italiano</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
          </div>
        </div>

      </div>

    </footer>
  
</body>
</html>