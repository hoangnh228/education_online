import "./bootstrap";
document.addEventListener("DOMContentLoaded", function () {
    var filterButton = document.querySelector(
        'button[data-bs-toggle="collapse"]'
    );
    var courseContent = document.getElementById("course-content");

    filterButton.addEventListener("click", function () {
        var filters = document.getElementById("filters");
        if (filters.classList.contains("show")) {
            courseContent.classList.remove("col-md-9");
            courseContent.classList.add("col-12");
        } else {
            courseContent.classList.remove("col-12");
            courseContent.classList.add("col-md-9");
        }
    });
});

document
    .getElementById("completeCheckout")
    .addEventListener("click", function () {
        var checkoutSuccessModal = new bootstrap.Modal(
            document.getElementById("checkoutSuccessModal")
        );
        checkoutSuccessModal.show();
        setTimeout(function () {
            window.location.href = "{{ route('home') }}";
        }, 2000);
        // Redirect after 2 seconds
    });
