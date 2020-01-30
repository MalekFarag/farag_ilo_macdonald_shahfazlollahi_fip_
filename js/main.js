console.log('js linked.');


const nav = document.querySelector('.mainNav'),
      header = document.querySelector('.header'),
      burger = document.querySelector('.burger');

        function navToggle(){
            console.log('nav toggled.')
            nav.classList.toggle('navOn');
        }

      burger.addEventListener('click', navToggle);