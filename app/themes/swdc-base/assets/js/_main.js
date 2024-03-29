// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var SWDC = {
  // References to DOM elements
  ref: {
    sidebar_el: $('.sidebar-content', '.sidebar').first()
  },
  // All pages
  common: {
    init: function() {
      // SWDC.common.toggleAffix();
      // $( window ).resize(function() {
      //   SWDC.common.windowResize();
      // });
    },
    finalize: function() { },
    windowResize: function() {
      SWDC.common.toggleAffix();
    },
    toggleAffix: function() {
      if ( $( window ).height() > (SWDC.ref.sidebar_el.offset().top + SWDC.ref.sidebar_el.outerHeight()) ) {
        $(SWDC.ref.sidebar_el).addClass('affix');
      } else {
        $(SWDC.ref.sidebar_el).removeClass('affix');
      }
    }
  },
  // Home page
  home: {
    init: function() {
      // JS here
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = SWDC;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);
