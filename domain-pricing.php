<?php include('header.php'); ?>

<!-- Hero Banner Start -->
<div class="banner one">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10">
        <div class="banner-heading white">
          <h1 class="mb-3 text-center">Domain Pricing</h1>
          <p class="text-center">Affordable rates for all your needs. Use promo codes for extra savings, <a href="#" style="color:white;">terms</a> will apply!</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero Banner End -->

<main>
    <!-- Domain Pricing Section Start -->
    <section class="section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="domain-pricing-table">
                        <input class="input-table-search" id="search-domain" type="text" placeholder="Search Your Ideal Domain Name...">
                        <div class="table-responsive">
                            <table class="table" id="tableone">
                                <thead>
                                    <tr>
                                        <th>Domain</th>
                                        <th>Register</th>
                                        <th>Transfer</th>
                                        <th>Renewal</th>
                                    </tr>
                                </thead>
                                <tbody id="domain-table-body">
                                    <!-- Data will be dynamically loaded here -->
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <nav>
                            <ul class="pagination justify-content-center" id="pagination">
                                <!-- Pagination links will be dynamically generated -->    
                            
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Domain Pricing Section End -->
</main>

<style>
    .active > .page-link, .page-link.active {
        z-index: 3;
        color: var(--bs-pagination-active-color);
        background-color: #ff944d;
        border-color: #ff944d;
    }

    .pagination {
        --bs-pagination-hover-color: #fff;
        --bs-pagination-hover-bg: #ff944d;
        --bs-pagination-hover-border-color: var(--bs-border-color);
        --bs-pagination-focus-color: #000000;
        --bs-pagination-focus-bg: var(--bs-secondary-bg);
        --bs-pagination-focus-box-shadow: none;
        --bs-pagination-active-color: #fff;
        /*--bs-pagination-border-color: #ff944d;*/
        margin-top: 10px;
    }

    .page-link {
        color: #212529;
    }
</style>
<?php include('footer.php'); ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function loadDomains(page = 1, search = '') {
        $.ajax({
            url: 'fetch_domains.php', // Path to backend script
            method: 'POST',
            data: { page: page, search: search },
            dataType: 'json',
            success: function(response) {
                // Populate table with data
                let rows = '';
                response.data.forEach(function(domain) {
                    rows += `
                        <tr>
                            <td>${domain.domain_name}</td>
                            <td>$ ${parseFloat(domain.register_price).toFixed(2)}</td>
                            <td>$ ${parseFloat(domain.transfer_price).toFixed(2)}</td>
                            <td>$ ${parseFloat(domain.renew_price).toFixed(2)}</td>
                        </tr>
                    `;
                });
                $('#domain-table-body').html(rows);

                // Populate pagination
                let paginationLinks = '';
                const maxVisiblePages = 6;
                const startPage = Math.max(1, response.current_page - Math.floor(maxVisiblePages / 2));
                const endPage = Math.min(response.total_pages, startPage + maxVisiblePages - 1);

                if (response.current_page > 1) {
                    paginationLinks += `<li class="page-item"><a class="page-link" href="#" style="color:#ffffff; background:#ff944d;" data-page="${response.current_page - 1}">&laquo; </a></li>`;
                }

                for (let i = startPage; i <= endPage; i++) {
                    paginationLinks += `
                        <li  class="page-item ${i === response.current_page ? 'active' : ''}">
                            <a class="page-link" href="#" data-page="${i}">${i}</a>
                        </li>
                    `;
                }

                if (response.current_page < response.total_pages) {
                    paginationLinks += `<li class="page-item"><a class="page-link" href="#" style="color:#ffffff; background:#ff944d;" data-page="${response.current_page + 1}"> &raquo;</a></li>`;
                }

                $('#pagination').html(paginationLinks);
            }
        });
    }

    // Live search
    $('#search-domain').on('input', function() {
        const searchValue = $(this).val();
        loadDomains(1, searchValue);
    });

    // Handle pagination click
    $(document).on('click', '#pagination a', function(e) {
        e.preventDefault();
        const page = $(this).data('page');
        const searchValue = $('#search-domain').val();
        loadDomains(page, searchValue);
    });

    // Initial load
    $(document).ready(function() {
        loadDomains(); // Load the first page by default
    });
</script>
