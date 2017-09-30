<?php
    require "requires/top.php";
    require "requires/nav.php";
    require "main/landed.php";
    require "main/about.php";
    require "main/galleries.php";
    require "main/contact.php";
    require "requires/footer.php";
?>


<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript"> new WOW().init(); </script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/instafeed.min.js"></script>
<script type="text/javascript" src="js/magic.js"></script>
<script type="text/javascript" src="js/contest.js"></script>
<script type="text/javascript" src="js/feed.js"></script>
<script type="text/javascript" src="js/feed2.js"></script>

<script>
var nature = document.getElementById('nature');
var portraits = document.getElementById('portraits');
var firstFeed = document.getElementById('feedRow1');
var moreBtn = document.getElementById('load-more');
var moreBtn2 = document.getElementById('load-more2');
var secondFeed = document.getElementById('feedRow2');
document.getElementById('portraits').addEventListener('click', function() {
  nature.classList.remove('toggled');
  this.classList.add('toggled');
  firstFeed.classList.add('hidden');
  moreBtn.classList.add('hidden');
  moreBtn2.classList.remove('hidden');
  secondFeed.classList.remove('hidden');
});

document.getElementById('nature').addEventListener('click', function() {
  portraits.classList.remove('toggled');
  this.classList.add('toggled');
  firstFeed.classList.remove('hidden');
  moreBtn2.classList.add('hidden');
  moreBtn.classList.remove('hidden');
  secondFeed.classList.add('hidden');
});
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.js"></script>
