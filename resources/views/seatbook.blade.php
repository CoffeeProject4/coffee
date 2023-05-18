<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Coffee Table Booking Form</title>
  {{-- <link rel="stylesheet" href="stylee.css"> --}}

  <style>
    body {
  font-family: Gabriola, sans-serif;
  margin: 0;
  padding: 0;
}

.home .home-content{
    background-image: url(image/home1.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

h1 {
  text-align: center;
  font-size: 40px;
}

form {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="time"],
input[type="number"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.error {
  color: red;
  font-size: 0.8em;
  margin-top: 5px;
}
  </style>
</head>
<body>



  <section class="home" id="home">
        <div class="home-content">
           
              <h1>Coffee Table Booking Form</h1>
              <form class="book-form" action="{{route('supply-data')}}" method="post" enctype="multipart/form-data">
                @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Check In Time:</label>
    <input type="time" id="time" name="time" required>

    <label for="Hours">Booking Duration :</label>
    <input type="number" id="hours" name="hours" required>

    <label for="seats">Number of Seats:</label>
    <input type="number" id="seats" name="seats" min="1" max="10" required>

    <!-- <label for="comments">Comments:</label>
    <textarea id="comments" name="comments" rows="5"></textarea> -->

    <button type="submit" id="submit-btn">CONFIRM</button>
  </form>
        </div>
    </section>




  


  {{-- <script src="script.js"></script> --}}
  <script>
    const form = document.getElementById('booking-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const dateInput = document.getElementById('date');
const timeInput = document.getElementById('time');
const seatsInput = document.getElementById('seats');
const commentsInput = document.getElementById('comments');
const submitBtn = document.getElementById('submit-btn');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  validateForm();
});

function validateForm() {
  let isValid = true;

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();
  const phone = phoneInput.value.trim();
}
  </script>
</body>
</html>