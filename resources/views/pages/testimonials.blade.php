<x-app-layout>
    <div class="backgroundfinal">
        <!-- Train schedule header -->
        <section class="row" id="tmServices">
            <div class="col-12">
                <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header"
                     data-parallax="scroll"
                     data-z-index="101"
                     data-image-src="img/ice-mountain.jpg">

                     <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
                        <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Train Schedule</h2>
                        <p class="tm-services-description mb-0 small">

                        </p>
                    </div>
                </div>
            </div>   
        </section>

        
        <!-- Train booking form section -->
        <div class="row tm-testimonials-section">
            <div class="col-12">
                <form action="{{ route('trainform.store') }}" method="POST" id="booking-form">
                    <!-- Form content goes here -->
                    @csrf
                    <!-- Personal details -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <!-- Payment information -->
                    <div class="form-group">
                        <label for="card-number">Card Number:</label>
                        <input type="text" id="card-number" name="card" required>
                    </div>
                    <!-- Departure and arrival destinations -->
                    <div class="form-group">
                        <label for="departure">Departure:</label>
                        <select id="departure" name="departure" required>
                            <option value="Colombo">Colombo</option>
                            <option value="Negombo">Negombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Jaffna">Jaffna</option>
                            <!-- Add more departure destinations here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="destination">Destination:</label>
                        <select id="destination" name="destination" required>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Negombo">Negombo</option>
                            <option value="Jaffna">Jaffna</option>
                            <!-- Add more arrival destinations here -->
                        </select>
                    </div>
                    <!-- Time slot selection -->
                    <div class="form-group">
                        <label for="time-slot">Time Slot:</label>
                        <select id="time-slot" name="time_slot" required>
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
                    <div class="form-group">
                        <label for="class">Class:</label>
                        <select id="class" name="class" required>
                            <option value="Standard">Standard</option>
                            <option value="Economy Plus">Economy Plus</option>
                            <option value="Economy Plus">Business class</option>
                            <!-- Add more classes here -->
                        </select>
                    </div>
                    <!-- Total price calculation -->
                    <div class="form-group">
                        <label for="total-price">Total Price:</label>
                        <input type="text" id="total-price" name="price">
                    </div>
                    <!-- Calculate Price button -->
                    <button type="button" id="calculate-price">Calculate Price</button>
                    <!-- Pay now button -->
                    <button>Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
