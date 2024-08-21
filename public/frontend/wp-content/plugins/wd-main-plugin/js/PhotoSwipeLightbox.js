/* ###############################  
          PhotoSwipe v5
##################################  */

import PhotoSwipeLightbox from './photoswipe-lightbox.esm.js'
import PhotoSwipe from './photoswipe.esm.js'

const photo_swipe_options = {
  gallery: '.images-gallery-swiper2',
  children: 'a',
  loop: global_swiper_photoswipe_loop_setting,
  showHideAnimationType: 'zoom', /* options: fade, zoom, none */
  // zoom: false,
  initialZoomLevel: 'fit',
  secondaryZoomLevel: 1.5,
  maxZoomLevel: 1,
  close: true,
  arrowKeys: true,
  /* ## Options ## */
  bgOpacity: 0.9,/* deafult: 0.8 */
  wheelToZoom: true, /* deafult: undefined */
  counter: !global_swiper_photoswipe_loop_setting,
  pswpModule: PhotoSwipe,
}
  
productImagesGallerySwiper2Array.forEach( productImagesGallerySwiper2 => {
  const lightbox = new PhotoSwipeLightbox(photo_swipe_options)
  
  lightbox.init()
  
  lightbox.on('change', () => {
    const { pswp } = lightbox
    productImagesGallerySwiper2.slideTo(pswp.currIndex, 0, false)
  })
  
  lightbox.on('afterInit', () => {
    const { pswp } = lightbox
    if(productImagesGallerySwiper2.params.autoplay.enabled){
      productImagesGallerySwiper2.autoplay.stop()
    }
  })
  
  lightbox.on('closingAnimationStart', () => {
    const { pswp } = lightbox
    productImagesGallerySwiper2.slideTo(pswp.currIndex, 0, false);
    /* if autoplay enabled == true -> autoplay.start() when close lightbox */
    if(productImagesGallerySwiper2.params.autoplay.enabled){
      productImagesGallerySwiper2.autoplay.start()
    }
  })
  
} )

/************************** images stack gallery zoom *********************************/
const stackLightbox = new PhotoSwipeLightbox( {
  gallery:'.images-gallery-stack',
  children:'a',

  initialZoomLevel: 'fit',
  secondaryZoomLevel: 1.5,
  maxZoomLevel: 2,
  preload: [1, 1],

  pswpModule: PhotoSwipe
} )

stackLightbox.init()