(function () {
  var news = [
    '<span>LATEST NEWS</span> Save the date!  The Shell Powering Progress Together will take place on 3 March 2016',
    '<span>LATEST NEWS</span> Watch the video highlights from last year’s forum <i><a href="https://www.youtube.com/watch?v=U66ui8u0_lQ">here</a></i>',
    '<span>LATEST NEWS</span> Get to know this year’s moderators and speakers <i><a href="programme.html#programme-speakers">here</a></i>',
    '<span>LATEST NEWS</span> Log on to Rappler on event day for live streaming'
  ];

  var i = 0;

  setInterval(function () {
    if (i < news.length - 1) i++;
    else i = 0;

    document.getElementById('newsContainer').innerHTML = news[i];
  }, 10000);

  $('.carousel').carousel({
    interval: 4000
  });


})();