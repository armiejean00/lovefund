<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <title>LoveFund
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    *{
        /* border:1px solid red; */
    }
</style>
<body>
    <div class="fixed-top">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="#home"><img src="{{ asset('images/logo.png') }}" style="height:50px">LoveFund</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#donation">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission-id">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    
                   
                    
                    <style>
                        .nav-link.active {
                            color: #007bff; /* Change this color to your active link color */
                           text-decoration: underline wavy #007bff;
                           text-decoration-thickness: 2px; 

                        }
                    </style>
                </nav>
            </div>
        </header>

       

    </div>
    <section class="home-sec" id="home">
        <div class="container">
            <div class="home-content">
                <div class="row">
                    <div class="col-lg-6 align-item-center">
                        <div class="home-info">
                            <h1>Together, we transform challenges into opportunities</h1>
                            <h2>With <span>LoveFund</span>'s  vital support for those in need.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nobis voluptates modi.</p>
                            <div class="buttons">
                                <a href={{ route('register') }} class="btn1" style="background-color: rgba(9, 9, 185, 0.767)">Register Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-first order-lg-last">
                        <div class="img-sec">
                            <img src="{{ asset('images/img-3.jpg') }}" alt="home-image" >
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="don-sec" id="donation">
        <div class="container">
            <div class="heading">
                <h2>We Manage Wastage or Donation like...</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="{{ asset('images/don/clothing.png') }}" alt="img" >
                        
                        <h3>Clothes</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="{{ asset('images/don/sneakers.png') }}" alt="img" >
                      
                        <h3>Footware</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="{{ asset('images/don/salary.png') }}" alt="img" >
                        <h3>Fund</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="{{ asset('images/don/gadgets.png') }}" alt="img" >
                        <h3>Gadgets</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="{{ asset('images/don/book.png') }}" alt="img" >
                        <h3>Stationary</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="don-box">
                        <img src="{{ asset('images/don/shopping-bag.png') }}" alt="img" >
                        <h3>Food</h3>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <a href="#contact" class="btn1">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission" id="mission-id">
        <div class="container">
            <div class="heading">
                <h2>Our Missions</h2>
                <p>We have delivered <span>Wastage</span> or <span>Donations</span> to needy Peoples</p>
            </div>
            <div class="gallery-sec">
                <div class="container">
                    <div class="image-container">
                        <div class="image"> <img src="{{ asset('images/miss/1.jpg') }}" alt="img" ></div>
                        <div class="image"> <img src="{{ asset('images/miss/2.jpg') }}" alt="img" ></div>
                        <div class="image"> <img src="{{ asset('images/miss/3.jpg') }}" alt="img" ></div>
                        <div class="image"> <img src="{{ asset('images/miss/4.jpg') }}" alt="img" ></div>
                        <div class="image"> <img src="{{ asset('images/miss/5.jpg') }}" alt="img" ></div>
                        <div class="image"> <img src="{{ asset('images/miss/6.jpg') }}" alt="img" ></div>
                    </div>
                </div>
                <div class="pop-image">
                    <span>&times;</span>
                    <img src="{{ asset('images/gallery/1.jpg') }}" alt="gallery-img" >
                   
                </div>
                </div>
            </div>
    </section>

    <section class="about-sec" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 about-img">
                    <img src="{{ asset('images/img-2.jpeg') }}" alt="about" >
                
                </div>
                <div class="col-lg-8 order-first order-lg-last">
                    <div class="heading">
                        <h2>What We Do & Why We Do</h2>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur voluptatibus voluptatem
                        neque, dicta architecto minima amet suscipit deserunt delectus cumque ea excepturi fuga alias,
                        labore eaque placeat facere impedit quia? </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aspernatur totam, perferendis
                        deleniti natus voluptatum. Distinctio consequuntur eum facilis et? Amet vero soluta distinctio
                        veniam eveniet? Corrupti laborum ex nobis.</p>
                </div>
            </div>
        </div>
    </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="heading">
                    <h2>Connect With Us</h2>
                    <p>Fill this form, our team will collect your <span>Donation</span> or <span>Wastage</span> from your place.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Mobile No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <select name="donation" id="donation">
                                                        <option value="">Choose Donation or Wastage</option>
                                                        <option value="food">Food</option>
                                                        <option value="clothes">Clothes</option>
                                                        <option value="footware">Footware</option>
                                                        <option value="books">Books</option>
                                                        <option value="fund">Fund</option>
                                                        <option value="gadget">Ele. Gadgets</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="text" id="" cols="90" rows="1" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <a href="#" class="btn1 mt-5">Submit Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Code Convent foundation</h4>
                        <p>Address : 3, Near IT Park, Mahatma Gandhi Road, Mumbai 440000 </p>
                        <p>Contact No : <a href="tel: +91 98659****59">+91 98659****59</a></p>
                        <p>Email : <a href="mailto:foundation@code.com">foundation@code.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#donation">Donations</a></li>
                            <li><a href="#mission-id">Missions</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                        
                            <a href="#">  <img src="{{ asset('images/icons/facebook.png') }}" alt="facebook" ></a>
                            <a href="#"><img src="{{ asset('images/icons/instagram.png') }}" alt="instagram" ></a>
                            <a href="#"><img src="{{ asset('images/icons/youtube.png') }}" alt="youtube" ></a>
                            <a href="#"><img src="{{ asset('images/icons/linkedin.png') }}" alt="linkedin" ></a>
                            <a href="#"><img src="{{ asset('images/icons/gmail.png') }}" alt="gmail" ></a>
                        </div>
                        <p>Copyright &copy; 2022 | All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script>
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.nav-link.active')?.classList.remove('active');
                this.classList.add('active');
            });
        });
    </script>
</body>

</html>