
// script.js
const projectsContainer = document.querySelector('.swiper-wrapper');

// Fetch the project data from the JSON file
fetch('json/projects.json')
  .then((response) => response.json())
  .then((data) => {
    data.forEach((project) => {
      const projectHTML = `
        <div class="swiper-slide">
          <div class="itemsslid">
            <p class="rating">
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
            </p>
            <p>${project.description}</p>
            <div class="itemrow">
              <img src="https://avatars.githubusercontent.com/u/100499106" alt="">
              <div>
                <h4><a href="${project.githubLink}" target="_blank">${project.title}</a></h4>
                <p>Dris7</p>
              </div>
            </div>
          </div>
        </div>
      `;
      projectsContainer.innerHTML += projectHTML;
    });
  });
  
  // Load icons from the second JSON file and create image elements
  fetch('json/mainIcons.json')
    .then(response => response.json())
    .then(data => {
      const iconContainer2 = document.getElementById('iconContainer2');
      data.icons.forEach(icon => {
        const skils = document.createElement('div')
        skils.className = 'skils'
        const img = document.createElement('img');
        img.src = icon.src;
        img.alt = icon.alt;
        img.width = 40;
        img.height = 40;
        skils.appendChild(img)
        iconContainer2.appendChild(skils);
      });
    })
    .catch(error => console.error(error));




var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

