<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{asset('cms/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('cms/css/all.min.css')}}">
  <link rel="canonical" href="https://keenthemes.com/metronic" />

<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('cms/css/login.css')}}">
</head>

<body>
  <header>
    <div class="nav-img">
      <img src="{{asset('cms/img/Layer 1.png')}}" alt="" class="image-nav">
    </div>
  </header>
  <section class="section-1">
    <div class="container">
      <div class="row">
        <div class="col-md-5 text-md-end">
          <div class="content">
            <h1 class="heading-1 text-center text-md-end">تسجيل دخول</h1>
            <p class="paragraph-1 text-center text-md-end">أهلا بك في اكسبو</p>
          </div>
          <form action="">
            <label for="email" class="label-1 text-start">البريد الالكتروني</label><br>
            <input class="input-1" type="email" name="email" id="email" placeholder="أدخل البريد الالكتروني"><br>
            <label for="password" class="label-2">كلمة المرور</label><br>
            <input class="input-1" type="password" name="password" id="password" placeholder="أدخل كلمة المرور" />
            <i class="bi bi-eye-slash" id="togglePassword"></i><br>
            <a class="paragraph_2" href="{{route('password.forgot')}}">نسيت كلمة المرور ؟</a>
            <input class="input-2" type="button" onclick="performStore()" value="تسجيل الدخول" />
            <div class="div-1">
              <p class="paragraph-3">ليس لديك حساب؟</p>
              <a href="{{route('user-regester')}}" class="sign-up"> إنشاء حساب للمتدرب</a>
            </div>

            <div class="div-3">
              <p class="paragraph-3">لوحة تحكم المدربين</p>
              <a href="http://127.0.0.1:8000/cms/users/login" class="sign-up-1">تسجيل دخول</a>
            </div>
          </form>
        </div>
        <div class="col-md-7">
          <div class="div-img">
            <img src="{{asset('cms/img/Group 10964.png')}}" alt="" class="image-nav1">
          </div>
        </div>
      </div>
    </div>
    <head>
        <title>How to use Toastr</title>
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Toastr -->
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
        </script>
        <!-- Styles -->
        <style type="text/css">
            body {
                background: whitesmoke;
                text-align: center;
            }

            button {
                background-color: darkslategrey;
                color: white;
                border: 0;
                font-size: 18px;
                font-weight: 500;
                border-radius: 7px;
                padding: 10px 10px;
                cursor: pointer;
                white-space: nowrap;
            }

            #success {
                background: green;
            }

            #error {
                background: red;
            }

            #warning {
                background: coral;
            }

            #info {
                background: cornflowerblue;
            }

            #question {
                background: grey;
            }
        </style>
    </head>



  </section>
  </div>
  <script src="{{asset('cms/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('cms/js/all.min.js')}}"></script>
  <script src="{{asset('cms/js/script.js')}}"></script>
  <script src="https://unpkg.com/axios@0.27.2/dist/axios.min.js"></script>
</body>
<script>
    function performStore(){
   axios.post('/cms/login', {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
        })
  .then(function (response) {
    console.log(response);
    window.location.href='/cms/admin';

  })
  .catch(function (error) {
    console.log(error);
    toastr.error(error.response.data.message);
  });

    }
</script>
</html>
