console.log('here')

const closeBtn = document.querySelector('.close-btn')
const cookiesBanner = document.querySelector('.cookies-banner')

closeBtn.addEventListener('click', (e)=>{
    e.preventDefault();
    cookiesBanner.remove();
})
