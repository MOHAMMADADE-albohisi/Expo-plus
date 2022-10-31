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
                        <input class="input-1" type="password" name="" id="" placeholder="أدخل كلمة المرور" />
                        <label for="password" class="label-2">تأكيد كلمة المرور</label><br>
                        <input class="input-1" type="password" name="" id="" placeholder="أدخل كلمة المرور" />
                        <input class="input_2" type="submit" value="حفظ" />
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
