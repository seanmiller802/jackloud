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
