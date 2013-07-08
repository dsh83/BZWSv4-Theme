jQuery(document).ready(function($) {
  $('#full-width-slider').royalSlider({
    arrowsNav: true,
    loop: true,
    keyboardNavEnabled: true,
    controlsInside: true,
    imageScaleMode: 'fit',
    arrowsNavAutoHide: false,
    arrowsNavHideOnTouch: true,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 600,     
    autoScaleSliderHeight: 600,
    controlNavigation: 'none',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 3,
    loop: true,
    usePreloader: true,
    numImagesToPreload: 99,
    autoPlay: {
            // autoplay options go gere
            enabled: true,
            pauseOnHover: true,
            delay: 1600
        },
    transitionType:'move',
    transitionSpeed: 550,
    globalCaption: false,
    deeplinking: {
      enabled: true,
      change: false
    },
    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
    imgWidth: null,
    imgHeight: 600
  });
});