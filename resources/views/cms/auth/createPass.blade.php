<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatePass</title>
    <link rel="stylesheet" href="{{asset('cms/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cms/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{asset('cms/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('cms/css/createPass.css')}}">
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
                <div class="col-md-5">
                    <div class="content">
                        <h1 class="heading-1">انشاء كلمة مرور جديدة</h1>
                        <p class="paragraph-1">أدخل كلمة المرو الجديدة الخاصة بك لهذا الموقع وقم
                            بالحفظ
                        </p>
                    </div>
                    <form action="">
                        <label for="password" class="label-2">كلمة المرور الجديدة</label><br>
                        <input class="input-1" type="password" name="password" id="password" placeholder="أدخل كلمة المرور" />
                        <label for="password" class="label-2">تأكيد كلمة المرور</label><br>
                        <input class="input-1" type="password" name="password_confirmation" id="password_confirmation" placeholder="أدخل كلمة المرور" />
                        <input class="input_2" type="button" onclick="performResetPassword()" value="حفظ" />
                        <a href="{{route('auth.login',$guard)}}" class="sign-up">الرجوع الى تسجيل الدخول</a>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="div-img">
                        <img src="{{asset('cms/img/Group 10964.png')}}" alt="" class="image-nav1">
                    </div>
                </div>
            </div>
        </div>

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

    </section>
    </div>
    <script src="{{asset('cms/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('cms/js/all.min.js')}}"></script>
    <script src="{{asset('cms/js/script.js')}}"></script>
</body><script src="https://unpkg.com/axios@0.27.2/dist/axios.min.js"></script>
<script>
    function performResetPassword(){
                axios.post('/cms/reset-password', {
                    password: document.getElementById('password').value,
                    password_confirmation: document.getElementById('password_confirmation').value,
                    email: '{{$email}}',
                    token: '{{$token}}',

                })
                .then(function (response) {
                    console.log(response);
                    toastr.success(response.data.message);
                    // window.location.href = '/cms//login'
                })
                .catch(function (error) {
                    console.log(error);
                    toastr.error(error.response.data.message);
                });
            }
</script>
</html>
