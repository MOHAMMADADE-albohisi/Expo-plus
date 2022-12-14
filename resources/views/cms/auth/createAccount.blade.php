<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateAccount</title>
    <link rel="stylesheet" href="{{asset('cms/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cms/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{asset('cms/css/styleCreateAccount.css')}}">
    <link rel="stylesheet" href="{{asset('cms/css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/css/intlTelInput.css">
    <style>
        .iti__flag {
            background-image: url("{{asset('cms/path/to/flags.png')}}");
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("{{asset('cms/path/to/flags@2x.png')}}");
            }
        }
    </style>
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
                <div class="col-md-6  text-sm-end">
                    <div class="content">
                        <h1 class="heading-1 text-center">انشاء حساب</h1>
                        <p class="paragraph-1 text-center">أهلا بك في اكسبو انضم الينا</p>
                    </div>
                    <form action="">
                        <label for="username" class="label-1">الاسم بالكامل</label><br>
                        <input class="input-1" type="text" name="name" id="name" placeholder="أدخل الاسم بالكامل"><br>
                        <label for="username" class="label-2">البريد الالكتروني</label><br>
                        <input class="input-1" type="email" name="email" id="email"
                            placeholder="أدخل البريد الالكتروني"><br>
                        <label for="" class="label-3">رقم الهاتف</label><br>
                        <input type="tel" name="phone" id="phone" class="input-4" placeholder="أدخل رقم الهاتف"><br>
                        <label for="password" class="label-2">كلمة المرور</label><br>
                        <input class="input-1" type="password" name="password" id="password"
                            placeholder="أدخل كلمة المرور" />
                        <i class="bi bi-eye-slash" id="togglePassword"></i><br>

                        <input class="input-2" type="submit" onclick="performstore()" value="انشاء حساب" />
                        <div class="div-1">
                            <p class="paragraph-3">هل لديك حساب؟</p>
                            <a href="" class="sign-up">تسجيل دخول</a>
                        </div>

                    </form>
                </div>
                <div class="col-md-6">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/js/intlTelInput.min.js"></script>
    <script src="{{asset('cms/js/script.js')}}"></script>
  <script src="https://unpkg.com/axios@0.27.2/dist/axios.min.js"></script>
    <script>
        function performstore(){
           // alert('test');
            let formData=new FormData ();
                formData.append('name',document.getElementById('name').value);
                formData.append('email',document.getElementById('email').value);
                formData.append('phone',document.getElementById('phone').value);
                formData.append('password',document.getElementById('password').value);

            axios.post('/cms/regester', formData)
            .then(function (response) {
        console.log(response);
        toastr.success(response.data.message);
        window.location.href='http://127.0.0.1:8000/cms/trainee/login    '
      })
      .catch(function (error) {
        console.log(error);
        toastr.error(error.response.data.message);
      });
        }
    </script>
</body>

</html>
