$(document).ready(function() {
  $('.table-header span').on('click', function(event) {
    console.log(event.target)
    var col = event.target.innerText.toLowerCase()
    console.log(col)
    $('.table .row').sort(function(a,b) {
      var acomp = $(a).find('.'+col).text()
      var bcomp = $(b).find('.'+col).text()
      console.log(acomp, bcomp)
      return acomp.localeCompare(bcomp)
    }).appendTo('.table')
  })
})

// function init() {
//   showParent = function(elem) {
//     var p = $(elem).parents('.project-pane__full');
//
//     if (p[0]) {
//       var index = p[0].className.replace(/\D/g, '');
//       $('body').addClass('activate-project-'+index)
//     }
//   }
//
//   $('.contents, .left-hand').on('click', function(e) {
//     e.preventDefault()
//     history.pushState({}, '', '/');
//     $(document.body).removeClass('activate-project-1 activate-project-2 activate-project-3 activate-pamphlet-1 activate-pamphlet-2 activate-pamphlet-3').removeClass('activate-pane-2').removeClass('activate-pane-3').removeClass('artists-open').removeClass('collaborators-open');
//     // $('.cart-update, .edition-toggle').css({ opacity: 0});
//   })
//
//   $('.cart-update').on('click', function(e) {
//     $(document.body).toggleClass('cart-open');
//   })
//
//   $('.edition-file__toggle').on('click', function(e) {
//     e.preventDefault();
//     history.pushState({}, '', this.href);
//
//     $('.edition-file__content').slideUp();
//     $(this).siblings('.edition-file__content').first().slideDown();
//     showParent(this);
//   })
//
//   $('.trigger').on('click', function(e) {
//     e.preventDefault();
//     var index = $(this).index('.trigger', this.parentNode);
//     history.pushState({}, '', this.href);
//     $(document.body).addClass('activate-project-'+(index+1));
//     // $('.edition-file__toggle:visible').first().trigger('click');
//     showParent(this);
//   })
//
//   // Open pamphlet
//
//   $('.trigger-half').on('click', function(e) {
//     e.preventDefault();
//     var index = $(this).index('.trigger-half', this.parentNode.parentNode);
//     history.pushState({}, '', this.href);
//     $(document.body).addClass('activate-pamphlet-'+(index+1));
//     showParent(this);
//   })
//
//   // Close pamphlet
//
//   $('.pamphlet-close').on('click', function(e) {
//     e.preventDefault();
//     history.back();
//     $(document.body).attr('class', $(document.body).attr('class').replace(/activate-pamphlet-\d+/g, ''))
//   })
//
//   $('.project-title').on('click', function(e) {
//     e.preventDefault();
//     history.pushState({}, '', this.href);
//     $(document.body).removeClass('activate-pane-3 activate-pane-2');
//     showParent(this);
//   })
//
//
//   // $('.edition-toggle').on('click', function(e) {
//   //   e.preventDefault();
//   //   if($(document.body).hasClass('activate-pane-2')){
//   //     history.pushState({}, '', this.href.replace(/\/editions\/?$/, ''));
//   //     $(document.body).removeClass('activate-pane-2').removeClass('activate-pane-3');
//   //   } else {
//   //     history.pushState({}, '', this.href);
//   //     $(document.body).addClass('activate-pane-2');
//   //   }
//   //   showParent(this);
//   // })
//
//   $('.toggle-artists').on('click', function(e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $(document.body).toggleClass('artists-open');
//   })
//
//   $('.toggle-collaborators').on('click', function(e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $(document.body).toggleClass('collaborators-open');
//   })
//
//   $('section.splash, .collaborators').on('click', function() {
//     $(document.body).removeClass('artists-open collaborators-open');
//   })
//
//   $('.editions-pane article a').on('click', function(e) {
//     e.preventDefault()
//     history.pushState({}, '', this.href);
//
//     $(document.body).addClass('activate-pane-2 activate-pane-3');
//     $('.edition-pane').removeClass('edition-pane--active')
//     $(this).parent().next('.edition-pane').addClass('edition-pane--active')
//     showParent(this);
//   })
//
//   $('.button').on('click', function() {
//     $('.cart-update--amount').html(parseInt($('.cart-update--amount').html(), 10) + 1);
//   })
//
//   // Activate static pages
//   var link = $('a[href="'+document.location.href.replace(/\/$/, '')+'"]').first().trigger('click');
// }
//
//
// $(document).ready(function() {
//   init();
//   setTimeout(function() {
//     $('body').removeClass('no-transitions');
//   }, 250);
// });
