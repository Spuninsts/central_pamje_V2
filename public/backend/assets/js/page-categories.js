document.getElementById('page_category').addEventListener('change', function () {
    let categoryId = this.value;

    fetch(`/admim/page/subcategories/{page_category}`)
        .then(response => response.json())
        .then(data => {
            let subcategorySelect = document.getElementById('page_subcategory');
            subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>'; // Clear previous options

            data.forEach(subcategories => {
                let option = document.createElement('option');
                option.value = subcategories;
                option.text = subcategories;
                subcategorySelect.appendChild(option);
            });
        });
});
