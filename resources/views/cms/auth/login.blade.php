<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{asset('cms/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('cms/css/all.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
            <label for="username" class="label-1 text-start">البريد الالكتروني</label><br>
            <input class="input-1" type="email" name="username" id="username" placeholder="أدخل البريد الالكتروني"><br>
            <label for="password" class="label-2">كلمة المرور</label><br>
            <input class="input-1" type="password" name="password" id="password" placeholder="أدخل كلمة المرور" />
            <i class="bi bi-eye-slash" id="togglePassword"></i><br>
            <a class="paragraph_2">نسيت كلمة المرور ؟</a>
            <input class="input-2" type="submit" value="تسجيل الدخول" />
            <div class="div-1">
              <p class="paragraph-3">ليس لديك حساب؟</p>
              <a href="" class="sign-up">انشاء حساب</a>
            </div>
            <div class="div-2">
              <img src="{{asset('cms/img/Group 10756.png')}}" alt="" class="image-1">
              <input class="input-3" type="submit" value="الدخول بواسطة جوجل">
            </div>
            <div class="div-3">
              <p class="paragraph-3">لوحة تحكم المدربين</p>
              <a href="" class="sign-up-1">تسجيل دخول</a>
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
  </section>
  </div>
  <script src="{{asset('cms/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('cms/js/all.min.js')}}"></script>
  <script src="{{asset('cms/js/script.js')}}"></script>
</body>

</html>
