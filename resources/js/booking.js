document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("booking-form");
    const calculatePriceBtn = document.getElementById("calculate-price");
    const totalPriceInput = document.getElementById("total-price");

    // Calculate Price button click event
    calculatePriceBtn.addEventListener("click", function() {
        // Basic form validation
        if (!form.checkValidity()) {
            alert("Please fill in all the required fields.");
            return;
        }

        // Get departure and arrival values
        const departureSelect = document.getElementById("departure");
        const arrivalSelect = document.getElementById("arrival");
        const departureValue = departureSelect.value;
        const arrivalValue = arrivalSelect.value;

        // Check if departure and arrival are the same
        if (departureValue === arrivalValue) {
            alert("Departure and arrival locations cannot be the same.");
            return;
        }

        // Perform price calculation based on class and destination
        const classSelect = document.getElementById("class");
        const classValue = classSelect.value;

        // Simple price calculation logic (for demonstration purposes)
        let price = 0;
        if (classValue === "Standard") {
            price = 50;
        } else if (classValue === "Economy Plus") {
            price = 200;
        } else {
            price = 400;
        }

        // Additional price adjustments based on destination
        if (departureValue === "Colombo" && arrivalValue === "Galle") {
            price += 500;
        } else if (departureValue === "Colombo" && arrivalValue === "Jaffna") {
            price += 600;
        } else if (departureValue === "Colombo" && arrivalValue === "Negombo") {
            price += 150;
        } else if (departureValue === "Negombo" && arrivalValue === "Colombo") {
            price += 150;
        } else if (departureValue === "Negombo" && arrivalValue === "Galle") {
            price += 600;
        } else if (departureValue === "Negombo" && arrivalValue === "Jaffna") {
            price += 500;
        } else if (departureValue === "Galle" && arrivalValue === "Colombo") {
            price += 500;
        } else if (departureValue === "Galle" && arrivalValue === "Negombo") {
            price += 600;
        } else if (departureValue === "Galle" && arrivalValue === "Jaffna") {
            price += 1500;
        } else if (departureValue === "Jaffna" && arrivalValue === "Colombo") {
            price += 600;
        } else if (departureValue === "Jaffna" && arrivalValue === "Negombo") {
            price += 500;
        } else if (departureValue === "Jaffna" && arrivalValue === "Galle") {
            price += 1500;
        }

        // Update the total price input field
        totalPriceInput.value = "$" + price.toFixed(2);
    });
});
