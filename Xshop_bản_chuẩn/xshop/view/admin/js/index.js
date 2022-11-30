const themeToggler = document.querySelector(".theme-toggler");



//change theme
themeToggler.addEventListener(
'click', () => {
   document.body.classList.toggle('dark-theme-variables');

   themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
   themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
}

)

//Active link sidebar

const currentLocation = location.href;
console.log(currentLocation);
const sideBarItem = document.querySelectorAll('a');
// console.log(sideBarItem);
const sideBarItemLength = sideBarItem.length;
for(let i = 0; i< sideBarItemLength; i++){
   // console.log(sideBarItem[i]);
   // console.log(sideBarItem[i].href);
   if(sideBarItem[i].href === currentLocation){

     
      sideBarItem[i].classList.add('active');
   }
}


//Active link sửa xóa

