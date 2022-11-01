<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForgetPass</title>
    <link rel="stylesheet" href="{{asset('cms/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cms/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{asset('cms/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('cms/css/forgetPass.css')}}">
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
                <div class="col-md-6">
                    <div class="content">
                        <h1 class="heading-1">هل نسيت كلمة المرور؟</h1>
                        <p class="paragraph-1">أدخل الايميل الخاص فيك بهذا الموقع وسوف نرسل لك كلمة المرور على ايميلك
                            الخاص</p>
                    </div>
                    <form action="">
                        <label for="username" class="label-2">البريد الالكتروني</label><br>
                        <input class="input-1" type="email" name="email" id="email_link" placeholder="أدخل البريد الالكتروني"><br>
                        <input class="input-2" type="button" onclick="performForgotpassword()" value="طلب الاستعادة" /><br>
                        <a href="{{route('auth.login',$guard)}}" class="sign-up">الرجوع الى تسجيل الدخول</a>
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
  <script src="https://unpkg.com/axios@0.27.2/dist/axios.min.js"></script>
<script>
    function performForgotpassword(){
        // alert('test');
        // consol.log('teat1');
                axios.post('/cms/forgot-password', {
                    email: document.getElementById('email_link').value,
                })
                .then(function (response) {
                    console.log(response);
                    toastr.success(response.data.message);
                    // window.location.href = '/cms/admin'
                })
                .catch(function (error) {
                    console.log(error);
                    toastr.error(error.response.data.message);
                });
            }
</script>
</body>

</html>
