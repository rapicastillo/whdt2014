;(function($, window, document, undefined)
{

  /*
  *       Plugin by Bassta ( www.bassta.bg )
  *       Dependencies: GSAP JS ( www.greensock.com ) - TimelineMax, TweenMax, jquery.history.js
  * */

  var defaults = {

    slideName: "kalfin2014",

    keyCode              : {
      LEFT : 37,
      UP   : 38,
      RIGHT: 39,
      DOWN : 40
    },

    //settings
    slideTime            : 1,
    parallaxTimeStagger  : 0.4,
    useEffects           : true,
    titleDevider         : " | ",

    //selectors
    slidesSelector       : ".slide-item",
    navigationSelector   : "#navigation",
    navigationActiveClass: "nav-active",
    goToNextSelector     : ".go-to-next",
    goToPrevSelector     : ".go-to-prev",
    forceResize          : false,

    //animations, holding TimelineMax instances for each slide
    animations           : [],

    //callbacks, when slide finish executing
    onSlideFinish        : false
  };

  function KalfinSlides(element, options)
  {

    this.element = element;
    this.settings = $.extend({}, defaults, options);

    this.$window = $(window);
    this.$document = $(document);
    this.$body = $("body");
    this.$element = $(this.element);

    this.$slides = $(this.settings.slidesSelector);
    this.$navigation = $(this.settings.navigationSelector);
    this.$navigationItems = null;
    this.$goToNext = $(this.settings.goToNextSelector);
    this.$goToPrev = $(this.settings.goToPrevSelector)

    this.keyFlag = false;
    this.isPlaying = false;

    this.direction = null;

    this.slideTime = this.settings.slideTime;

    this.prevSlideIndex = null;
    this.currentSlideIndex = null;
    this.numSlides = this.$slides.length;

    this.animations = this.settings.animations;
    this.useEffects = this.settings.useEffects;

    this.baseFontSize = 16;

    this.title = $("title").text();

    this.baseZIndex = 1000;

    //History
    this.History = window.History;

    //Google analytics or empty array to store all custom ga-ja events
    this.gaq = window._gaq || [];

    this.pageWidth = 0;
    this.pageHeight = 0;

    this.init();
  }

  KalfinSlides.prototype = {

    init: function()
    {
      var self = this;
      self.onImagesLoaded();
    },

    onImagesLoaded: function()
    {
      this.onResize();
      this.constructNavigation();
      this.addListeners();
      this.showInitialSlide();
    },

    constructNavigation: function()
    {
      //dots and shits
      var $navUL = $("<ul />");
      for(var i = 0, j = this.$slides.length; i < j; i++)
      {
        $("<li />").append($("<a />")).appendTo($navUL);
      }

      $navUL.appendTo(this.$navigation);

      this.$navigationItems = this.$navigation.find("a");
      TweenLite.set(this.$navigationItems, {borderRadius: "50%"});

    },

    showInitialSlide: function()
    {
      var self = this;

      var stateUrl = self.History.getState().url;
      var stateEnding = false;

      if(stateUrl.indexOf("?") != -1 && !stateUrl.indexOf("/") != -1)
      {
        stateEnding = stateUrl.split("?")[1].split("/")[0]
      }

      if(stateEnding && $.isNumeric(stateEnding))
      {
        this.currentSlideIndex = parseInt(stateEnding - 1);
        if(this.currentSlideIndex < 0 || this.currentSlideIndex > this.numSlides - 1)
        {
          this.currentSlideIndex = 0;
        }
      }
      else
      {
        this.currentSlideIndex = 0;
      }

      //hide preloader

      //Set page title
      var currentSlideTitle = this.$slides.eq(this.currentSlideIndex).data("title");
      var titleToAppend = currentSlideTitle ? this.settings.titleDevider + currentSlideTitle : "";
      document.title = self.title + titleToAppend;

      this.forceResize();

      //Show initial slide
      TweenLite.set(this.$slides, {y: this.pageWidth});
      TweenLite.set(this.$slides.eq(this.currentSlideIndex), {y: 0, autoAlpha: 1});
      this.animations[ this.currentSlideIndex ].play(0);

      //Update arrows
      this.updateUI();
    },

    addListeners: function()
    {
      var self = this;

      //eventualno da mu sloja throttle
      this.$window.on("resize.KalfinSlides", $.proxy(self.onResize, self));
      this.$window.on("mousewheel.KalfinSlides DOMMouseScroll.KalfinSlides", $.proxy(self.onMouseWheel, self));
      this.$goToNext.on("click.KalfinSlides", $.proxy(self.goNext, self));
      this.$goToPrev.on("click.KalfinSlides", $.proxy(self.goPrev, self));

      this.$navigationItems.on("click", function(event)
      {

        var $target = $(event.target);
        self.goToSlide($target.parent("li").index());

      });

      //Key Press
      self.$document.on("keydown.KalfinSlides", function(event)
      {
        event.preventDefault();

        var PRESSED_KEY = event.keyCode;

        if(!self.keyFlag)
        {
          self.keyFlag = true;
        }
        else
        {
          return false;
        }

        if(PRESSED_KEY == self.settings.keyCode.UP || PRESSED_KEY == self.settings.keyCode.LEFT)
        {
          self.goPrev();
        }
        else if(PRESSED_KEY == self.settings.keyCode.DOWN || PRESSED_KEY == self.settings.keyCode.RIGHT)
        {
          self.goNext();
        }
      });

      self.$document.on("keyup.KalfinSlides", function()
      {
        self.keyFlag = false;
      });

      self.$document.on("focus.KalfinSlides", function()
      {
        self.keyFlag = false;
      });

      //HTML5 Mode
      self.History.Adapter.bind(window, "statechange", function()
      {
        var slideToGo = History.getState().data.slideNum;
        self.animateToSlide(parseInt(slideToGo));
      });

      //HTML4 Mode
      self.History.Adapter.bind(window, "onanchorchange", function()
      {
        var slideToGo = History.getState().data.slideNum;
        self.animateToSlide(parseInt(slideToGo));
      });

      //Swipe
      this.$document.touchwipe({
        wipeUp              : function()
        {
          self.goPrev();
        },
        wipeLeft            : function()
        {
          self.goPrev();
        },
        wipeDown            : function()
        {
          self.goNext()
        },
        wipeRight           : function()
        {
          self.goNext()
        },
        min_move_x          : 50,
        min_move_y          : 15,
        preventDefaultEvents: true
      });

    },

    onMouseWheel: function(event)
    {
      var delta = event.originalEvent.wheelDelta / 30 || -event.originalEvent.detail;

      if(delta < -1)
      {
        this.goNext();
      }
      else if(delta > 1)
      {
        this.goPrev();
      }

      event.preventDefault();
    },

    /*
     API - Navigation
     */

    goPrev: function()
    {

      if(this.currentSlideIndex > 0 && !this.isPlaying)
      {

        this.goToSlide(parseInt(this.currentSlideIndex - 1));
      }

    },

    goNext: function()
    {
      var self = this;

      if(this.currentSlideIndex < (this.numSlides - 1) && !this.isPlaying)
      {

        this.goToSlide(parseInt(this.currentSlideIndex + 1));

      }
      else if(self.currentSlideIndex == self.numSlides - 1)
      {
        //LAST SLIDE
      }

    },

    goToSlide: function(slideIndex)
    {
      var slideToGo = parseInt(slideIndex);

      if(slideToGo >= 0 && slideToGo < this.$slides.length && !this.isPlaying)
      {
        this.prevSlideIndex = this.currentSlideIndex;
        this.currentSlideIndex = slideToGo;
        this.replaceState();
      }

    },

    replaceState: function()
    {
      var $currentSlide = this.$slides.eq(this.currentSlideIndex);

      var currentSlideTitle = $currentSlide.data("title");
      var titleToAppend = currentSlideTitle ? this.settings.titleDevider + currentSlideTitle : "";

      var currentDeeplink = $currentSlide.data("deepilink");
      var deepLink = currentDeeplink ? currentDeeplink : "";

      self.History.replaceState({slideNum: self.currentSlideIndex}, this.title + titleToAppend, "?" + (parseInt(this.currentSlideIndex + 1)) + "/" + deepLink);

      //google analytics
       this.gaq.push([ "_trackEvent", self.slideName, "slideVew", self.History.getState().url ,self.currentSlideIndex ]);
//      ga('send', 'event', this.settings.slideName, "slideVew", self.History.getState().url ,this.currentSlideIndex + 1 );
    },


    animateToSlide: function(_slideIndex)
    {
      var self = this;

      if(_slideIndex < 0 || _slideIndex > self.numSlides - 1 || self.isPlaying)
      {
        return false;
      }


      if(this.prevSlideIndex > this.currentSlideIndex)
      {
        this.direction = "slideUpToDown";
      }
      else
      {
        this.direction = "slideDownToUp";
      }

      self.isPlaying = true;
      TweenLite.delayedCall(this.slideTime, function()
      {
        self.isPlaying = false;
      });

      /*
      *       Actual transitioning between slides
      * */

      var $prevSlide = this.$slides.eq(this.prevSlideIndex);
      var $currentSlide = this.$slides.eq(this.currentSlideIndex)

      this.forceResize();

      this.baseZIndex++;

      this.animations[this.currentSlideIndex].progress(0).pause();

      if(this.direction == "slideUpToDown")
      {
        TweenMax.to($prevSlide, this.slideTime + this.settings.parallaxTimeStagger, {y: this.pageHeight, ease: Power4.easeIn});
        TweenMax.fromTo($currentSlide, this.slideTime, {y: -this.pageHeight, zIndex: this.baseZIndex}, {y: 0, ease: Power3.easeInOut, onComplete: self.onSlideAnimEnd, onCompleteScope: self});

      }
      else
      {

        TweenMax.to($prevSlide, this.slideTime + this.settings.parallaxTimeStagger, {y: -this.pageHeight, ease: Power4.easeIn});
        TweenMax.fromTo($currentSlide, this.slideTime, {y: this.pageHeight, zIndex: this.baseZIndex}, {y: 0, ease: Power3.easeInOut, onComplete: self.onSlideAnimEnd, onCompleteScope: self});

      }

      self.updateUI();
    },

    onSlideAnimEnd: function()
    {
      this.animations[this.prevSlideIndex].play(0).pause();
      this.animations[ this.currentSlideIndex ].play(0);
    },

    updateUI: function()
    {

      var $navItemToGighlight = this.$navigation.find("li").eq(this.currentSlideIndex).find("a");

      TweenLite.to(this.$navigationItems.filter("." + this.settings.navigationActiveClass), 0.5, { className: "-=" + this.settings.navigationActiveClass, scale: 1});
      TweenLite.to($navItemToGighlight, 0.5, { className: "+=" + this.settings.navigationActiveClass, scale: 1.3});

    },

    onResize   : function()
    {

      this.pageWidth = this.$window.innerWidth();
      this.pageHeight = this.$window.innerHeight();

      this.baseFontSize = Math.floor((this.pageWidth + this.pageHeight) / 90); //10.5
      if(self.baseFontSize < 8)
      { //min font size
        self.baseFontSize = 8;
      }

      this.$body.css({
        fontSize: this.baseFontSize + "px"
      });

      this.$slides.css({
        width : this.pageWidth + "px",
        height: this.pageHeight + "px"
      })

    },

    forceResize: function(){
      if(this.settings.forceResize){
        this.$window.trigger("resize");
      }
    }

  };

  $.fn[ "kalfinSlides" ] = function(options)
  {
    return this.each(function()
    {
      if(!$.data(this, "plugin_KalfinSlides"))
      {
        $.data(this, "plugin_KalfinSlides", new KalfinSlides(this, options));
      }
    });
  };

  /*
   External plugins
   */

  /* TouchSwipe */
  $.fn.touchwipe = function(settings)
  {
    var config = {
      min_move_x          : 20,
      min_move_y          : 20,
      wipeLeft            : function()
      {
      },
      wipeRight           : function()
      {
      },
      wipeUp              : function()
      {
      },
      wipeDown            : function()
      {
      },
      preventDefaultEvents: true
    };
    if(settings)
    {
      $.extend(config, settings);
    }
    this.each(function()
    {
      var startX;
      var startY;
      var isMoving = false;

      function cancelTouch()
      {
        this.removeEventListener('touchmove', onTouchMove);
        startX = null;
        isMoving = false
      }

      function onTouchMove(e)
      {
        if(config.preventDefaultEvents)
        {
          e.preventDefault()
        }
        if(isMoving)
        {
          var x = e.touches[0].pageX;
          var y = e.touches[0].pageY;
          var dx = startX - x;
          var dy = startY - y;
          if(Math.abs(dx) >= config.min_move_x)
          {
            cancelTouch();
            if(dx > 0)
            {
              config.wipeLeft()
            }
            else
            {
              config.wipeRight()
            }
          }
          else if(Math.abs(dy) >= config.min_move_y)
          {
            cancelTouch();
            if(dy > 0)
            {
              config.wipeDown()
            }
            else
            {
              config.wipeUp()
            }
          }
        }
      }

      function onTouchStart(e)
      {
        if(e.touches.length == 1)
        {
          startX = e.touches[0].pageX;
          startY = e.touches[0].pageY;
          isMoving = true;
          this.addEventListener('touchmove', onTouchMove, false)
        }
      }

      if('ontouchstart'in document.documentElement)
      {
        this.addEventListener('touchstart', onTouchStart, false)
      }
    });
    return this
  }
  //end touchSwipe

})
  (jQuery, window, document);

(function(a)
{
  a.fn.changeWidthHeight = function(b)
  {
    var c = {
      contWidth    : '',
      contHeight   : '',
      addWidth     : 0,
      subWidth     : 0,
      addHeight    : 0,
      subHeight    : 0,
      operationType: "%",
      callback     : function()
      {
      }
    };
    var b = a.extend(c, b);
    return this.each(function()
    {

      var $this = $(this);
      changesize($this, b.contWidth, b.contHeight);
      $(window).on("resize",function()
      {
        changesize($this, b.contWidth, b.contHeight);
      });

      function changesize(container, contWidth, contHeight)
      {
        var width = container.width();
        var height = container.height();
        var addWidth = b.addWidth;
        var subWidth = b.subWidth;
        var addHeight = b.addHeight;
        var subHeight = b.subHeight;
        if(b.operationType == '%')
        {
          addWidth = width * (addWidth / 100);
          subWidth = width * (subWidth / 100);
          addHeight = height * (addHeight / 100);
          subHeight = height * (subHeight / 100);
        }
        if(addWidth)
        {
          width = addWidth + width;
        }
        if(subWidth && subWidth <= width)
        {
          width = width - subWidth;
        }
        if(addHeight)
        {
          height = height + addHeight;
        }
        if(subHeight && subHeight <= height)
        {
          height = height - subHeight;
        }

        if(width && contWidth)
        {
          $(contWidth).width(Math.round(width));
        }
        if(width && contHeight)
        {
          $(contHeight).height(Math.round(height));
        }
      }
    });
  }
})(jQuery, window, document);
