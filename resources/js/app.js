// Navigation toggle

window.addEventListener('load', function () {
      // mobile menu
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });

      // accordian

      let accordions = document.querySelectorAll('.accordion-item');
    
      accordions.forEach(function(accordion) {
            let heading = accordion.querySelector('.accordion-header');
      
            heading.addEventListener('click', function(e) {
            e.preventDefault();
      
            accordions.forEach(function(item) {
                  if (item !== accordion) {
                  item.classList.remove('active');
                  }
            });
      
            accordion.classList.toggle('active');
            });
      });


      // splide slider

      const splideslider = document.querySelector('#splideslider');
      if (typeof splideslider != "undefined" && splideslider != null) {

      new Splide('#splideslider', {
            type   : 'loop',
            perPage: 2,
            perMove: 1,
            gap    : 20 ,
            breakpoints: {
                  767: {
                      perPage: 1 // Number of slides per page for screens with a maximum width of 767px
                  },
                  1023: {
                      perPage: 2 // Number of slides per page for screens with a maximum width of 1023px
                  }
            }
            
            }).mount();
            
      }

      const splider = document.querySelector('#splider');
      if (typeof splider != "undefined" && splider != null) {

      new Splide('#splider', {
            type   : 'loop',
            perPage: 3,
            perMove: 1,
            gap    : 20,
            breakpoints: {
                  767: {
                      perPage: 1 // Number of slides per page for screens with a maximum width of 767px
                  },
                  1023: {
                      perPage: 2 // Number of slides per page for screens with a maximum width of 1023px
                  },
                  1240: {
                      perPage: 2 // Number of slides per page for screens with a maximum width of 1023px
                  }
            }
            
            }).mount();
      }

      // tabs

      let first__tab = document.querySelector('#tab1');
      let second__tab = document.querySelector('#tab2');
      let first__btn = document.querySelector('#firstbtn');
      let second__btn = document.querySelector('#secondbtn');
      
      if(first__btn){
            document.querySelector('#firstbtn').addEventListener('click', function (e) {
                  e.preventDefault();
                  first__tab.classList.add('active');
                  first__btn.classList.add('active');
          
                  second__tab.classList.remove('active');
                  second__btn.classList.remove('active');
            });
      };

      if(second__btn){
            document.querySelector('#secondbtn').addEventListener('click', function (e) {
                  e.preventDefault();
                  second__tab.classList.add('active');
                  second__btn.classList.add('active');
          
                  first__tab.classList.remove('active');
                  first__btn.classList.remove('active');
            });
      }

});

