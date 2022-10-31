<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter-Code</title>
  <link rel="stylesheet" href="{{asset('cms/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('cms/css/all.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="{{asset('cms/css/login.css')}}">
  <link rel="stylesheet" href="{{asset('cms/css/Enter-Code.css')}}">
</head>

<body>
  <header>
    <div class="nav-img">
      <img src="{{asset('cms/img/Layer 1.png')}}" alt="" class="image-nav">
    </div>
  </header>

  <section class="section-1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 text-center text-md-end">
          <div class="content">
            <p class="fw-bold fs-5">ادخال الكود</p>
            <p>أدخل الكود الذي تم ارساله الى بريدك الالكتروني هنا</p>

            <form action="" class="form justify-content-center justify-content-md-start">
              <input type="text" placeholder="*" class="pass form-control">
              <input type="text" placeholder="*" class="pass form-control">
              <input type="text" placeholder="*" class="pass form-control">
              <input type="text" placeholder="*" class="pass form-control">
            </form>

            <input type="submit" value="طلب الاستعادة" class="form-control mt-5 mb-5 submit-1">
            <div class="login">
              <a href="#" class="a-1">الرجوع الى تسجيل الدخول</a>
            </div>
          </div>
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
