// grab the load more button
var loadButton = document.getElementById('load-more');
var feed = new Instafeed({
  get: 'user',
  userId: '633678483',
  accessToken: '633678483.1677ed0.48e4238ec75a4e2da7a43430f026cae0',
  target: "instafeed",
  sortBy: 'most-recent',
  limit: "17",
  resolution: 'standard_resolution',
  template: '<div class="photo-box"><div class="image-wrap wow fadeIn"><a href="{{link}}" target="_blank"><img src="{{image}}"></a><p class="likes"><i class="fa fa-heart" aria-hidden="true"></i> {{likes}}</p></div></div>',


  // when loading more, run this function
  after: function() {
    // disable button if no more results to load
    if (!this.hasNext()) {
      loadButton.setAttribute('disabled', 'disabled');
      loadButton.innerHTML = 'none left...';
    }
  },
});
// bind the load more button
loadButton.addEventListener('click', function() {
  feed.next();
});
feed.run();
