<!doctype html>
<html lang="en">
        <!---head codes for css, bootstrap-THIS IS THE TABLE FOR REVIEWER AND EDITORS->
        @include('frontend.partials.frontendhead')
    <body>
        <!---header code -->
        @include('frontend.partials.frontendheader')

     <!---main body-->
    <main>

        <div class="container mt-4">
            <div class="card">
                <div class="card-header cen-bg-darkblue text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="m-0 text-white">Data Table</h4>
                        <div class="d-flex align-items-center">
                            <label for="itemsPerPage" class="text-white me-2 mb-0">Show</label>
                            <select id="itemsPerPage" class="form-select form-select-sm" style="width: auto;">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="all">All</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body cen-bg-darkgrey">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="cen-bg-darkblue text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="tableBody">
                            <!-- Table data will be populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            <span id="showing-text">Showing 1 to 10 of 100 entries</span>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination" id="pagination">
                                <!-- Pagination will be populated by JavaScript -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript for functionality -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Sample data - in a real application, this would come from your backend
                const data = [];
                for (let i = 1; i <= 100; i++) {
                    data.push({
                        id: i,
                        title: `Item Title ${i}`,
                        author: `Author ${i % 5 + 1}`,
                        category: `Category ${i % 4 + 1}`,
                        status: i % 3 === 0 ? 'Published' : (i % 3 === 1 ? 'Draft' : 'Under Review'),
                        date: `2024-${(i % 12) + 1}-${(i % 28) + 1}`,
                    });
                }

                let currentPage = 1;
                let itemsPerPage = 10;
                const tableBody = document.getElementById('tableBody');
                const pagination = document.getElementById('pagination');
                const itemsPerPageSelect = document.getElementById('itemsPerPage');
                const showingText = document.getElementById('showing-text');

                // Function to render table data
                function renderTable() {
                    tableBody.innerHTML = '';

                    const startIndex = (currentPage - 1) * (itemsPerPage === 'all' ? data.length : itemsPerPage);
                    const endIndex = itemsPerPage === 'all' ? data.length : Math.min(startIndex + parseInt(itemsPerPage), data.length);

                    for (let i = startIndex; i < endIndex; i++) {
                        const item = data[i];
                        const row = document.createElement('tr');

                        // Apply status-based styling
                        let statusClass = '';
                        if (item.status === 'Published') {
                            statusClass = 'text-success';
                        } else if (item.status === 'Draft') {
                            statusClass = 'text-warning';
                        } else {
                            statusClass = 'text-info';
                        }

                        row.innerHTML = `
                    <td>${item.id}</td>
                    <td>${item.title}</td>
                    <td>${item.author}</td>
                    <td>${item.category}</td>
                    <td><span class="${statusClass}">${item.status}</span></td>
                    <td>${item.date}</td>
                    <td>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-primary cen-btn-darkblue" title="View">
                                <i class="bi bi-eye"></i> View
                            </button>
                            <button type="button" class="btn btn-secondary" title="Edit">
                                <i class="bi bi-pencil"></i> Edit
                            </button>
                        </div>
                    </td>
                `;

                        tableBody.appendChild(row);
                    }

                    // Update showing text
                    showingText.textContent = itemsPerPage === 'all'
                        ? `Showing all ${data.length} entries`
                        : `Showing ${startIndex + 1} to ${endIndex} of ${data.length} entries`;

                    renderPagination();
                }

                // Function to render pagination
                function renderPagination() {
                    pagination.innerHTML = '';

                    if (itemsPerPage === 'all') {
                        return; // No pagination needed when showing all items
                    }

                    const pageCount = Math.ceil(data.length / itemsPerPage);

                    // Previous button
                    const prevLi = document.createElement('li');
                    prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
                    prevLi.innerHTML = `<a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>`;
                    prevLi.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (currentPage > 1) {
                            currentPage--;
                            renderTable();
                        }
                    });
                    pagination.appendChild(prevLi);

                    // Page numbers
                    let startPage = Math.max(1, currentPage - 2);
                    let endPage = Math.min(pageCount, currentPage + 2);

                    // Always show first page
                    if (startPage > 1) {
                        const li = document.createElement('li');
                        li.className = 'page-item';
                        li.innerHTML = `<a class="page-link" href="#">1</a>`;
                        li.addEventListener('click', function() {
                            currentPage = 1;
                            renderTable();
                        });
                        pagination.appendChild(li);

                        if (startPage > 2) {
                            const ellipsis = document.createElement('li');
                            ellipsis.className = 'page-item disabled';
                            ellipsis.innerHTML = `<a class="page-link" href="#">...</a>`;
                            pagination.appendChild(ellipsis);
                        }
                    }

                    // Page numbers around current page
                    for (let i = startPage; i <= endPage; i++) {
                        const li = document.createElement('li');
                        li.className = `page-item ${i === currentPage ? 'active' : ''}`;
                        li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                        li.addEventListener('click', function() {
                            currentPage = i;
                            renderTable();
                        });
                        pagination.appendChild(li);
                    }

                    // Always show last page
                    if (endPage < pageCount) {
                        if (endPage < pageCount - 1) {
                            const ellipsis = document.createElement('li');
                            ellipsis.className = 'page-item disabled';
                            ellipsis.innerHTML = `<a class="page-link" href="#">...</a>`;
                            pagination.appendChild(ellipsis);
                        }

                        const li = document.createElement('li');
                        li.className = 'page-item';
                        li.innerHTML = `<a class="page-link" href="#">${pageCount}</a>`;
                        li.addEventListener('click', function() {
                            currentPage = pageCount;
                            renderTable();
                        });
                        pagination.appendChild(li);
                    }

                    // Next button
                    const nextLi = document.createElement('li');
                    nextLi.className = `page-item ${currentPage === pageCount ? 'disabled' : ''}`;
                    nextLi.innerHTML = `<a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>`;
                    nextLi.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (currentPage < pageCount) {
                            currentPage++;
                            renderTable();
                        }
                    });
                    pagination.appendChild(nextLi);
                }

                // Handle items per page change
                itemsPerPageSelect.addEventListener('change', function() {
                    itemsPerPage = this.value;
                    currentPage = 1; // Reset to first page
                    renderTable();
                });

                // Initial render
                renderTable();
            });
        </script>

    </main>

        <!--footer-->
        @include('frontend.partials.frontendfooter')

  </body>
</html>
