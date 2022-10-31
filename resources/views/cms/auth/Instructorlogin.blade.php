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
    <link rel="stylesheet" href="{{asset('cms/css/InstructorLogin.css')}}">
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
                        <h1 class="heading-1">الدخوال الخاص بالمدرب</h1>
                        <p class="paragraph-1">أهلا بك في اكسبو</p>
                    </div>
                    <form action="">
                        <label for="username" class="label-1">الاسم بالكامل</label><br>
                        <input class="input-1" type="text" name="" id="" placeholder="أدخل الاسم بالكامل"><br>
                        <label for="username" class="label-2">البريد الالكتروني</label><br>
                        <input class="input-1" type="email" name="username" id="username"
                            placeholder="أدخل البريد الالكتروني"><br>
                        <label for="" class="label-3">رقم الهاتف</label><br>
                        <input type="tel" name="" id="phone" class="input-4" placeholder="أدخل رقم الهاتف"><br>
                        <label for="password" class="label-2">كلمة المرور</label><br>
                        <input class="input-1" type="password" name="password" id="password"
                            placeholder="أدخل كلمة المرور" />
                        <i class="bi bi-eye-slash" id="togglePassword"></i><br>
                        <a class="paragraph_2">نسيت كلمة المرور ؟</a>
                        <input class="input-2" type="submit" value="تسجيل الدخول" />
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="div-img">
                        <img src="{{asset('cms/img/Group 10964.png')}}" alt="" class="image-nav1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script src="{{asset('cms/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('cms/js/all.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.0/js/intlTelInput.min.js"></script>
    <script src="{{asset('cms/js/script.js')}}"></script>
</body>

</html>
