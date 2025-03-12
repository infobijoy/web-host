<section class="domain-search-sec">
    <div class="container">
        <h1 class="text-white text-center fw-bold mb-5">Search for a domain name</h1>
        <p class="text-white text-center mb-5">Discover, buy and register your unique domain with our domain name search or AI domain generator</p>
        <div>
            <div class="col-12 d-flex justify-content-center">
                <form class="domain-search-input col-md-8 d-flex justify-content-between">
                    <div class="d-flex align-items-center col-12">
                        <i class="bi hide-on-mobile bi-search fw-bold"></i>
                        <input class="" placeholder="Find a domain" type="text">
                    </div>
                    <button id="search-icon" class="btns one"></button>
                </form>
            </div>
            <div>
                <div class="domain-card-div" id="domain-card-container">
                </div>
                <p class="text-white text-center mb-0">Free WHOIS privacy protection is included with every eligible domain registration. <i class="bi bi-question-circle"></i></p>
            </div>
        </div>
    </div>
</section>
<section class="already-domain p-2">
    <div class="container">
        <p class="text-center mb-0">Already have a domain?
            <a class="text-decoration-underline" href="#">Transfer it <i class="bi bi-chevron-right fw-bolder"></i></a>
        </p>
    </div>
</section>
<script>
// Array of domain card data
const domainCards = [
  {
    name: ".com",
    deletePrice: "US$ 16.99",
    price: "US$ 4.99",
    hasQuestionIcon: true,
  },
  {
    name: ".online",
    deletePrice: "US$ 34.99",
    price: "US$ 1.99",
    hasQuestionIcon: false,
  },
  {
    name: ".shop",
    deletePrice: "US$ 34.99",
    price: "US$ 0.99",
    hasQuestionIcon: false,
  },
  {
    name: ".pro",
    deletePrice: "US$ 24.99",
    price: "US$ 2.99",
    hasQuestionIcon: false,
  },
  {
    name: ".net",
    deletePrice: "US$ 15.99",
    price: "US$ 11.99",
    hasQuestionIcon: true,
  },
  {
    name: ".xyz",
    deletePrice: "US$ 13.99",
    price: "US$ 1.99",
    hasQuestionIcon: false,
  },
];
// Function to generate the HTML for a domain card
function createDomainCard(card) {
  return `
            <div class="domain-pricing-card">
                <span class="domain-name">${card.name}</span>
                ${
                  card.hasQuestionIcon
                    ? '<span class="search-icon position-absolute"><i class="bi bi-question-circle"></i></span>'
                    : ""
                }
                <span class="delete-price text-decoration-line-through">${
                  card.deletePrice
                }</span>
                <span class="price">${card.price}</span>
            </div>
        `;
}

// Get the container element
const container = document.getElementById("domain-card-container");

// Loop through the array and append the generated HTML to the container
domainCards.forEach((card) => {
  container.innerHTML += createDomainCard(card);
});

  document.addEventListener('DOMContentLoaded', function() {
    function updateSearchButton() {
      const searchButton = document.getElementById('search-icon');
      if (searchButton) { // Check if the element exists
        if (window.innerWidth <= 768) {
          searchButton.innerHTML = '<i class="bi bi-search fw-bold"></i>';
          searchButton.classList.add('search-btn-icon');
        } else {
          searchButton.innerHTML = 'Search';
          searchButton.classList.remove('search-btn-icon');
        }
      }
    }

    // Initial update
    updateSearchButton();

    // Update on window resize
    window.addEventListener('resize', updateSearchButton);
  });
</script>