
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.6.0 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
  <style type="text/css">
        html,body {
          font-family: 'Open Sans', serif;
          font-size: 14px;
          font-weight: 300;
        }
        .hero.is-success {
          background: #F2F6FA;
        }
        .hero .nav, .hero.is-success .nav {
          -webkit-box-shadow: none;
          box-shadow: none;
        }
        .box {
          margin-top: 5rem;
        }
        input {
          font-weight: 300;
        }
        p {
          font-weight: 700;
        }
        p.subtitle {
          padding-top: 1rem;
        }
  </style>
</head>
<body>
  <section class="hero is-success is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <h3 class="title has-text-grey">Register</h3>
          <p class="subtitle has-text-grey">Register a new user to proceed.</p>
          <div class="box">
            <form action="/register" method="POST">
              {{ csrf_field() }}
              <div class="field">
                <div class="control">
                  <input name="email" class="input is-large" type="email" placeholder="Your Email" autofocus="">
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input name="name" class="input is-large" type="text" placeholder="Username">
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input name="password" class="input is-large" type="password" placeholder="Password">
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input name="password_confirmation" class="input is-large" type="password" placeholder="Confirm Password">
                </div>
              </div>

              <button type="submit" class="button is-block is-info is-large">Create User</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script async type="text/javascript" src="../js/bulma.js"></script>
</body>
</html>
