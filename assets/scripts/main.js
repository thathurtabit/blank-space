/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */



// On DOM Ready
(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.

  // Set my Vars
  var animDuration = 500;
  
  var currentPanel = 1;
  var totalPanels = $('.full-panel').length;
  
  // Start Barba
  Barba.Pjax.start();

  // Activate Scroll
  $('body').scrollspy({ target: '#sub-nav' });


  // Scroll to section on click
  function scrollToClick() {
  // Smooth scroll with velocity.js
  $('.scroll-to[href*="#"]').on('click', function (e) {
          // prevent default action and bubbling
          e.preventDefault();
          e.stopPropagation();
          // set target to anchor's "href" attribute
          var target = $(this).attr('href');
          // scroll to each target
          $(target).velocity('scroll', {
              duration: 500,
              offset: 0,
              easing: 'ease-in-out'
          });
      });
  }

  



  function runScrollSpy() {

    $('body').each(function () {
      var $spy = $(this).scrollspy('refresh');
    });

  }


  function waypointsInit() {

  // Set my variables
  var totalPanels = $('.full-panel').length;

    
    var panelInfo1 = document.getElementById('panel-info1');
    // If it exists, then create a waypoint
    if (typeof(panelInfo1) !== 'undefined' && panelInfo1 != null) {
      // It exists, so...
      var waypoint = new Waypoint({
        element: panelInfo1,
        handler: function(direction) {
          currentPanel = 1;
          $(this.element).addClass('waypoint-active');
        },
        offset: 'bottom-in-view'
      });
    }

    var panelInfo2 = document.getElementById('panel-info2');
    // If it exists, then create a waypoint
    if (typeof(panelInfo2) !== 'undefined' && panelInfo2 != null) {
        // It exists, so...
      var waypoint2 = new Waypoint({
        element: panelInfo2,
        handler: function(direction) {
          currentPanel = 2;
          $(this.element).addClass('waypoint-active');
        },
        offset: 'bottom-in-view'
      });
    }

    var panelInfo3 = document.getElementById('panel-info3');
    // If it exists, then create a waypoint
    if (typeof(panelInfo3) !== 'undefined' && panelInfo3 != null) {
          // It exists, so...
      var waypoint3 = new Waypoint({
        element: panelInfo3,
        handler: function(direction) {
          currentPanel = 3;
          $(this.element).addClass('waypoint-active');
        },
        offset: 'bottom-in-view'
      });
    }


    var panelInfo4 = document.getElementById('panel-info4');
    // If it exists, then create a waypoint
    if (typeof(panelInfo4) !== 'undefined' && panelInfo4 != null) {
          // It exists, so...
      var waypoint4 = new Waypoint({
        element: panelInfo4,
        handler: function(direction) {
          currentPanel = 4;
          $(this.element).addClass('waypoint-active');
        },
        offset: 'bottom-in-view'
      });
    }


    var panelInfo5 = document.getElementById('panel-info5');
    // If it exists, then create a waypoint
    if (typeof(panelInfo5) !== 'undefined' && panelInfo5 != null) {
          // It exists, so...
      var waypoint5 = new Waypoint({
        element: panelInfo5,
        handler: function(direction) {
          currentPanel = 5;
          $(this.element).addClass('waypoint-active');
        },
        offset: 'bottom-in-view'
      });
    }


    var panelInfo6 = document.getElementById('panel-info6');
    // If it exists, then create a waypoint
    if (typeof(panelInfo6) !== 'undefined' && panelInfo6 != null) {
          // It exists, so...
      var waypoint6 = new Waypoint({
        element: panelInfo6,
        handler: function(direction) {
          currentPanel = 6;
          $(this.element).addClass('waypoint-active');
        },
        offset: 'bottom-in-view'
      });
    }


    var panelInfo7 = document.getElementById('panel-info7');
    // If it exists, then create a waypoint
    if (typeof(panelInfo7) !== 'undefined' && panelInfo7 != null) {
          // It exists, so...
      var waypoint7 = new Waypoint({
        element: panelInfo7,
        handler: function(direction) {
          currentPanel = 7;
          $(this.element).addClass('waypoint-active');
        },
        offset: 'bottom-in-view'
      });
    }




  }

  function loaderAnim() {
    $('#loading-cover').show();
  }

  
   // USE http://imagesloaded.desandro.com/#background
  // To see if images were loaded before displaying them
  function checkImages() {
      $('#panel-info1').imagesLoaded( { background: true }, function() {
        $('#loading-cover').addClass("hello-app").delay(animDuration).fadeOut(animDuration / 2);
        $('.barba-container').addClass('loaded');
      });
  }

  // LOAD WEB FONTS
  WebFont.load({
    google: {
      families: ['Open Sans:300,400,700']
    },
    active: function () {
        
        // FIRE FUNCTIONS AFTER FONT HAS LOADED
        $('body').addClass('page-ready');
        $('.barba-container').addClass('active');
        loaderAnim();
    }
  });



  // FIRE WHEN DOM IS READY
  checkImages();
  waypointsInit();
  runScrollSpy();
  scrollToClick();

  // On Barba Link Click
  Barba.Dispatcher.on('linkClicked', function() {
    // Scroll to the top of the current slide
    $(".barba-container").fadeOut(animDuration, function(){
          $('html,body').scrollTop(0);
    });
  });

  // On Barba Transition Completed
  Barba.Dispatcher.on('transitionCompleted', function() {
    // Make sure the scroll spy is working on new slide
    $(".barba-container").fadeIn(animDuration);
    waypointsInit();
    runScrollSpy();
    scrollToClick();
  });


  // Barba Transition (Fade)
  var FadeTransition = Barba.BaseTransition.extend({
  start: function() {
    /**
     * This function is automatically called as soon the Transition starts
     * this.newContainerLoading is a Promise for the loading of the new container
     * (Barba.js also comes with an handy Promise polyfill!)
     */

    // As soon the loading is finished and the old page is faded out, let's fade the new page
    Promise
      .all([this.newContainerLoading, this.fadeOut()])
      .then(this.fadeIn.bind(this));
  },

  fadeOut: function() {
    /**
     * this.oldContainer is the HTMLElement of the old Container
     */

    return $(this.oldContainer).animate({ opacity: 0 }).promise();
  },

  fadeIn: function() {
    // *
    //  * this.newContainer is the HTMLElement of the new Container
    //  * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
    //  * Please note, newContainer is available just after newContainerLoading is resolved!
     

    var _this = this;
    var $el = $(this.newContainer);

    $(this.oldContainer).hide();

    $el.css({
      visibility : 'visible',
      opacity : 0
    });

    $el.animate({ opacity: 1 }, animDuration, function() {
      /**
       * Do not forget to call .done() as soon your transition is finished!
       * .done() will automatically remove from the DOM the old Container
       */

       checkImages();
       $el.addClass("active");  

      _this.done();
    });
  }
});

/**
 * Next step, you have to tell Barba to use the new Transition
 */

Barba.Pjax.getTransition = function() {
  /**
   * Here you can use your own logic!
   * For example you can use different Transition based on the current page or link...
   */

  return FadeTransition;
};








})(jQuery); // Fully reference jQuery after this point.

// End DOM ready



