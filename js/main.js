console.log('js linked.');


const nav = document.querySelector('.mainNav'),
      header = document.querySelector('.header'),
      burger = document.querySelector('.burger'),
      navItems = document.querySelectorAll('.navItem');

        function navToggle(){
            console.log('nav toggled.')
            nav.classList.toggle('navOn');
        }

      burger.addEventListener('click', navToggle);
      navItems.forEach(item =>{
        item.addEventListener('click', function(){
          nav.classList.remove('navOn');
        })
      })


  