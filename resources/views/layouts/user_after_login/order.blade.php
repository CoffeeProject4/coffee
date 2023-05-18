@extends('layouts.app')

<link href="{{ asset('css/order_css.css') }}" rel="stylesheet">



@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <!-- <header>
        <nav>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#review">Review</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#outlets">Outlets</a></li>
            <li><a href="#login">Login</a></li>
          </ul>
        </nav>
      </header> -->

    <section id="home">
        <h1>Hot Coffee Every Morning</h1>
        <h2>Welcome To Fresh Cafe</h2>
        <button>Order Now</button>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We Provide Fresh Food With Nice Ambience.</p>
        <a href="#">Read More...</a>
    </section>

    <section id="menu">
        <h2>Our Menu</h2>
        <div class="menu-item">
            <img src="fresh_tea.jpg" alt="Fresh Tea">
            <h3>Fresh Tea</h3>
            <p>$20.00</p>
            <button>Order Now</button>
        </div>
        <!-- Repeat the above menu item structure for other items -->
    </section>


    <!-- ORDER PAGE -->
    <section id="gallery">
        <h2>Orders Section</h2>
        <div class="gallery-item">
            <img src="coffee_capitano.jpg" alt="Coffee Capitano">
            <h3>Coffee Capitano</h3>
            <hr>

            <section id="order">
                <h2>Order</h2>
                <form action="" method="get">
                        <input type="text" name="name" required placeholder="Enter Name">
                        <input type="email" name="email" required placeholder="Enter Email">
                        <input type="tel" name="phone" required placeholder="Enter Phone">
                        <textarea id="" cols="37" rows="3"  name="address" required placeholder="Enter Address"></textarea>
                        <br>
                    <button type="submit">Submit</button>
                </form>
            </section>





        </div>
        <!-- Repeat the above gallery item structure for other images -->
    </section>

    <section id="review">
        <h2>Our Review</h2>
        <div class="review-item">
            <img src="user_avatar.jpg" alt="John Deo">
            <p>Ambience Is Good</p>
        </div>
        <!-- Repeat the above review item structure for other reviews -->
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form>
            <input type="text" placeholder="Enter Your Name" required>
            <input type="email" placeholder="Enter Your Email" required>
            <input type="tel" placeholder="Enter Your Phone" required>
            <button type="submit">Submit</button>
        </form>
    </section>

    <section id="outlets">
        <h2>Outlets</h2>
        <div class="outlet-item">
            <img src="salt_lake_outlet.jpg" alt="Salt Lake Sector 5">
            <button>Book Seat</button>
        </div>
        <!-- Repeat the above outlet item structure for other outlets -->
    </section>

    <footer>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#review">Review</a></li>
            <li><a href="#order">Order</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </footer>
@endsection
