<x-app-layout>
    <div class="backgroundfinal">
        <!-- Train schedule header -->
        <section class="row" id="tmServices">
            <div class="col-12">
                <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header"
                     data-parallax="scroll"
                     data-z-index="101"
                     data-image-src="img/schedules.jpeg">

                    <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
                        <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Booking</h2>
                        <p class="tm-services-description mb-0 small"></p>
                    </div>
                </div>
            </div>
        </section>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Train Booking Form</title>
        </head>
        <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; margin: 0; padding: 0;">
        <div class="container" style="max-width: 600px; margin: 50px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <h3 style="color: #333;">Train Booking Form</h3>
            <form action="{{ route('trainform.store') }}" method="POST" id="booking-form">
                @csrf
                <!-- Personal details -->
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="name" style="font-weight: bold; color: #555;">Name:</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="email" style="font-weight: bold; color: #555;">Email:</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                </div>
                <!-- Payment information -->
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="card-number" style="font-weight: bold; color: #555;">Card Number:</label>
                    <input type="text" id="card-number" name="card" required style="width: 100%; padding: 10px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                </div>
                <!-- Departure and arrival destinations -->
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="departure" style="font-weight: bold; color: #555;">Departure:</label>
                    <select id="departure" name="departure" required style="width: 100%; padding: 10px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                        <option value="" disabled selected>Select Location</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Negombo">Negombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Jaffna">Jaffna</option>
                        <!-- Add more departure destinations here -->
                    </select>
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="destination" style="font-weight: bold; color: #555;">Destination:</label>
                    <select id="destination" name="destination" required style="width: 100%; padding: 10px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                        <option value="" disabled selected>Select Location</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Negombo">Negombo</option>
                        <option value="Jaffna">Jaffna</option>
                        <!-- Add more arrival destinations here -->
                    </select>
                </div>
                <!-- Time slot selection -->
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="time-slot" style="font-weight: bold; color: #555;">Time Slot:</label>
                    <select id="time-slot" name="time_slot" required style="width: 100%; padding: 10px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                        <option value="06:00 AM">06:00 AM</option>
                        <option value="06:40 AM">06:40 AM</option>
                        <option value="07:00 AM">07:00 AM</option>
                        <option value="07:25 AM">07:25 AM</option>
                        <option value="08:20 AM">08:20 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:15 AM">12:15 AM</option>
                        <option value="02:00 PM">02:00 PM</option>
                        <option value="03:30 PM">03:30 PM</option>
                        <option value="04:10 PM">04:10 PM</option>
                        <option value="05:00 PM">05:00 PM</option>
                        <option value="05:25 PM">05:25 PM</option>
                        <option value="05:40 PM">05:40 PM</option>
                        <option value="06:15 PM">06:15 PM</option>
                        <option value="07:20 PM">07:20 PM</option>
                        <option value="08:00 PM">08:00 PM</option>
                        <option value="09:00 PM">09:00 PM</option>
                        <option value="10:00 PM">10:00 PM</option>
                        <option value="11:30 PM">11:30 PM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <!-- Add more time slots here -->
                    </select>
                </div>
                <!-- Class selection -->
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="class" style="font-weight: bold; color: #555;">Class:</label>
                    <select id="class" name="class" required style="width: 100%; padding: 10px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                        <option value="Standard">Standard</option>
                        <option value="Economy Plus">Economy Plus</option>
                        <!-- Add more classes here -->
                    </select>
                </div>
                <!-- Total price calculation -->
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="total-price" style="font-weight: bold; color: #555;">Total Price:</label>
                    <input type="text" id="total-price" name="price" readonly style="width: 100%; padding: 10px; margin: 5px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 16px;">
                </div>
                <!-- Calculate Price button -->
                <button type="button" id="calculatePriceBtn" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; margin-bottom: 15px;">Calculate Price</button>
                <!-- Pay now button -->
                <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Pay Now</button>
            </form>

            <!-- Receipt Section -->
            <div id="receipt" style="display: none; margin-top: 20px; padding: 20px; background-color: #f9f9f9; border-radius: 5px;">
                <h3 style="color: #333;">Receipt</h3>
                <p><strong>Name:</strong> <span id="receipt-name"></span></p>
                <p><strong>Email:</strong> <span id="receipt-email"></span></p>
                <p><strong>Card Number:</strong> <span id="receipt-card"></span></p>
                <p><strong>Departure:</strong> <span id="receipt-departure"></span></p>
                <p><strong>Destination:</strong> <span id="receipt-destination"></span></p>
                <p><strong>Time Slot:</strong> <span id="receipt-time-slot"></span></p>
                <p><strong>Class:</strong> <span id="receipt-class"></span></p>
                <p><strong>Total Price:</strong> <span id="receipt-price"></span></p>
                <button onclick="window.print();" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">Print Receipt</button>
            </div>
        </div>
        </body>
        <br>
    </div>

    <!-- Inline JavaScript for form validation and price calculation -->
    <script>
        function isFormComplete() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var cardNumber = document.getElementById('card-number').value;
            var departure = document.getElementById('departure').value;
            var destination = document.getElementById('destination').value;
            var timeSlot = document.getElementById('time-slot').value;
            var travelClass = document.getElementById('class').value;

            return name && email && cardNumber && departure && destination && timeSlot && travelClass;
        }

        document.getElementById('calculatePriceBtn').addEventListener('click', function() {
            if (!isFormComplete()) {
                alert('Please fill in all fields before calculating the price.');
                return;
            }

            var departure = document.getElementById('departure').value;
            var destination = document.getElementById('destination').value;
            var travelClass = document.getElementById('class').value;

            var prices = {
                "Colombo": { "Negombo": 100, "Galle": 250, "Jaffna": 450 },
                "Negombo": { "Colombo": 100, "Galle": 350, "Jaffna": 400 },
                "Galle": { "Colombo": 250, "Negombo": 350, "Jaffna": 850 },
                "Jaffna": { "Colombo": 450, "Negombo": 400, "Galle": 850 }
            };

            var basePrice = prices[departure][destination] || 0;

            if (travelClass === "Economy Plus") {
                basePrice *= 1.2; // 20% increase for Economy Plus
            }

            document.getElementById('total-price').value = basePrice.toFixed(2);
        });

        document.getElementById('departure').addEventListener('change', function() {
            var departure = this.value;
            var destinationSelect = document.getElementById('destination');
            var destinationOptions = destinationSelect.options;

            for (var i = 0; i < destinationOptions.length; i++) {
                if (destinationOptions[i].value === departure) {
                    destinationOptions[i].disabled = true;
                } else {
                    destinationOptions[i].disabled = false;
                }
            }
        });

        document.getElementById('destination').addEventListener('change', function() {
            var destination = this.value;
            var departureSelect = document.getElementById('departure');
            var departureOptions = departureSelect.options;

            for (var i = 0; i < departureOptions.length; i++) {
                if (departureOptions[i].value === destination) {
                    departureOptions[i].disabled = true;
                } else {
                    departureOptions[i].disabled = false;
                }
            }
        });

        document.getElementById('booking-form').addEventListener('submit', function(event) {
            event.preventDefault();

            if (!isFormComplete()) {
                alert('Please fill in all fields before submitting the form.');
                return;
            }

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var cardNumber = document.getElementById('card-number').value;
            var departure = document.getElementById('departure').value;
            var destination = document.getElementById('destination').value;
            var timeSlot = document.getElementById('time-slot').value;
            var travelClass = document.getElementById('class').value;
            var totalPrice = document.getElementById('total-price').value;

            // Fill receipt with form data
            document.getElementById('receipt-name').innerText = name;
            document.getElementById('receipt-email').innerText = email;
            document.getElementById('receipt-card').innerText = cardNumber;
            document.getElementById('receipt-departure').innerText = departure;
            document.getElementById('receipt-destination').innerText = destination;
            document.getElementById('receipt-time-slot').innerText = timeSlot;
            document.getElementById('receipt-class').innerText = travelClass;
            document.getElementById('receipt-price').innerText = totalPrice;

            // Show receipt
            document.getElementById('receipt').style.display = 'block';

            // Submit form
            this.submit();
        });
    </script>
</x-app-layout>
