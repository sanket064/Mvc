<div class="new-width">
<footer class="footer-distributed">

<div class="footer-left">

  <h3><img src="assets/Logo.png"/></span></h3>
  <?php foreach($this->arrCats as $cat)
{
  ?>
  <p class="footer-links">
    <ul class="new-position">
      <li>
  <a href="index.php?controller=pages&action=eventsInCat&catid=<?=$cat["id"]?>"><?=$cat["Name"]?></a>
      </li>
    </ul>
  </p>
  <?php
        }
        ?>
  <p class="footer-company-name"></p>
</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>21 Revolution Street</span> Vancouver, B.C</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+1 555 123456</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@company.com">mesoforte@gmail.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>Mesoforte &copy; <?php echo date("Y"); ?></span>
    <span>About the company</span>
    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
  </p>

  <div class="footer-icons">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

  </div>

</div>

</footer>
</div>