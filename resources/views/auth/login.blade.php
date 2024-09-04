<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <title>LoveFund</title>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" >
              <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="easyclass" />
                <h4>lovefund</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href={{ route('register') }} class="toggle"   style="  
                text-decoration: underline wavy #007bff;
                text-decoration-thickness: 2px; ">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

        
          </div>

          <div class="carousel">
            <div class="images-wrapper">
                <img src="{{ asset('images/1.png') }}" class="image img-1 show" alt="" style="height:400px"/>
              <img src="{{ asset('images/2.png') }}" class="image img-2" alt="" style="height:400px"/>
              <img src="{{ asset('images/4.png') }}" class="image img-3" alt="" style="height:400px"/>
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Create your own courses</h2>
                  <h2>Customize as you like</h2>
                  <h2>Invite students to your class</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="js/app.js"></script>
  </body>
</html>