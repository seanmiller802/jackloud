// grab out load more button
var loadButton2 = document.getElementById('load-more2');
var feed2 = new Instafeed({
  get: 'tagged',
  tagName: 'camping',
  userId: '633678483',
  accessToken: '633678483.1677ed0.48e4238ec75a4e2da7a43430f026cae0',
  target: "instafeed2",
  limit: "16",
  resolution: 'standard_resolution',
  template: '<div class="photo-box"><div class="image-wrap"><a href="{{link}}" target="_blank"><img src="{{image}}"></a><div class="likes"><i class="fa fa-heart" aria-hidden="true"></i> {{likes}}</div></div></div>',

  // every time we load more, run this function
  after: function() {
    // disable button if no more results to load
    if (!this.hasNext()) {
      loadButton2.setAttribute('disabled', 'disabled');
      loadButton2.innerHTML = 'none left...';
    }
  },
});

feed2.run();
