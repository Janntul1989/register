<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <title>Livestock Farm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href={{asset("asset/assets/img/logo.jpg")}}>
    <link rel="icon" href={{asset("asset/assets/img/logo.jpg")}}>
    <link rel="stylesheet" href= {{asset("asset/assets/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/fontawesome_all.min.css")}}/>
    <link rel="stylesheet" href= {{asset("asset/assets/css/ma5-menu.min.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/style.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/responsive.css")}}>

</head>
<body>

    <section class="body_wrapper">
        <div class="container">
            <div class="row top_bar">
                <div class="col-12">
                    <div class="language_search">
                        <div class="menu_bar">
                            <!-- mobile menu toggle button start -->
                            <button class="ma5menu__toggle menu_button" type="button">
                                <img src="{{asset("asset/assets/img/home.png")}}" alt="">
                            </button>
                            <!-- mobile menu toggle button end -->

                            <!-- source for mobile menu start -->
                            <ul class="site-menu">
                                <li>
                                    <a href="{{url('/disease')}}">রোগব্যাধি, টিকা ও প্রতিকার</a>
                                </li>
                            </ul>
                            <!-- source for mobile menu end -->
                        </div>
                        <!-- Search Box -->
                        <div class="search_box">
                            <input type="text" id="search">
                            <button onclick="performSearch()">অনুসন্ধান</button>
                        </div>
                        <!-- Language Switcher -->
                        <div class="language">
                            <select id="language"  class="form-control lang-change">
                                <option value="bn" {{ session()->get('lang_code')=='bn' ? 'selected' : ''}}>বাংলা</option>

                                <option value="en" {{ session()->get('lang_code')=='en' ? 'selected' : ''}}>English</option>

                            </select>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row header_area">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3  col-12 home_button">
                    <div class="siderbar">
                        <div class="menu_bar">
                            <button class="ma5menu__toggle menu_button" type="button">
                                <img src="{{asset("asset/assets/img/home.png")}}" alt="">
                            </button>
                            <ul class="site-menu">
                                <li>
                                    <a href="{{url('/disease')}}">রোগব্যাধি, টিকা ও প্রতিকার</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12 logo_button">
                    <div class="logo_area">
                        <div class="logo">
                            <a href=""><img src="{{asset("asset/assets/img/logo-removebg-preview.png")}}" alt=""></a>
                        </div>
                        <div class="call_token">
                            <div class="call">
                                <p>হট লাইনঃ</p>
                                <span><img src="assets/img/ca.png" alt="">১৬১৪২</span>
                            </div>
                            <div class="token_registration_wrap">
                                <div class="token_registraion">
                                    <div class="registration_btn">
                                        <a href="{{url('/registration')}}">নিবন্ধন করুন</a>
                                    </div>
                                    <div class="token_btn">
                                        <button class="token" type="button" data-bs-toggle="modal"
                                            data-bs-target="#get_service">সেবা
                                            নিন</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="get_service" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <button type="button" class="close_btn" data-bs-dismiss="modal"
                                                        aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                                    <!-- token -->
                                                    <form class="token_form">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <label class="control-label" for="full_name">পুরো
                                                                    নামঃ</label>
                                                                <input id="full_name" name="full_name"
                                                                    placeholder="আপনার নাম লিখুন" class="form-control"
                                                                    type="text" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label" for="number">ফোন
                                                                    নাম্বারঃ</label>
                                                                <input id="number" name="number"
                                                                    placeholder="আপনার ফোন নাম্বার লিখুন"
                                                                    class="form-control" type="number" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="form-check mb-3">
                                                                    <label class="form-check-label"
                                                                        for="animal">প্রাণীঃ</label>
                                                                    <select class="form-select form-select-animal"
                                                                        aria-label=".form-select-animal">
                                                                        <option value="cow" selected>গবাদি পশু
                                                                        </option>
                                                                        <option value="buffalo">মহিষ</option>
                                                                        <option value="goat">ছাগল</option>
                                                                        <option value="sheep">ভেড়া</option>
                                                                        <option value="horse">ঘোড়া</option>
                                                                        <option value="dog">কুকুর</option>
                                                                        <option value="cat">বিড়াল</option>
                                                                        <option value="rabbit">খরগোশ</option>
                                                                        <option value="hen">দেশী মুরগি</option>
                                                                        <option value="duck">হাঁস</option>
                                                                        <option value="broiler">ব্রয়লার
                                                                        </option>
                                                                        <option value="sonali">সোনালী</option>
                                                                        <option value="pigeon">কবুতর</option>
                                                                        <option value="koel">কোয়েল</option>
                                                                        <option value="dove">ঘুঘু</option>
                                                                        <option value="bajrigar">বার্জারগার
                                                                        </option>
                                                                        <option value="parrot">তোতাপাখি</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-check mb-3">
                                                                    <label class="form-check-label"
                                                                        for="animal">সেবাসমূহঃ</label>
                                                                    <select class="form-select form-select-service"
                                                                        aria-label=".form-select-service">
                                                                        <option value="cow" selected>ভ্যাকসিন
                                                                        </option>
                                                                        <option value="buffalo">চিকিৎসা</option>
                                                                        <option value="goat">কৃত্রিম প্রজনন
                                                                        </option>
                                                                        <option value="sheep">প্রশিক্ষণ</option>
                                                                        <option value="horse">গর্ভাবস্থা পরীক্ষা
                                                                        </option>
                                                                        <option value="dog">নিবন্ধনকরণ</option>
                                                                        <option value="cat">ল্যাবরেটরি পরীক্ষা
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="bill">
                                                                <p class="payment">পরিশোধ করুনঃ</p>
                                                                <div class="amount"></div>
                                                                <span>টাকা</span>
                                                            </div>

                                                            <div class="form-group payment_area">
                                                                <span class="payment_method">পেমেন্ট
                                                                    মেথড</span>

                                                                <div class="payment_type">
                                                                    <ul class="nav nav-tabs" id="paymentTab"
                                                                        role="tablist">
                                                                        <li class="nav-item" role="presentation">
                                                                            <button class="nav-link active"
                                                                                id="bikash-tab" data-bs-toggle="tab"
                                                                                data-bs-target="#bikash" type="button"
                                                                                role="tab" aria-controls="bikash"
                                                                                aria-selected="true"><span
                                                                                    class="payment_icon"><img
                                                                                        src="{{asset("asset/assets/img/bkash-logo-835789094A-seeklogo.com.png")}}"
                                                                                        alt=""></span></button>
                                                                        </li>
                                                                        <li class="nav-item" role="presentation">
                                                                            <button class="nav-link" id="nogod-tab"
                                                                                data-bs-toggle="tab"
                                                                                data-bs-target="#nogod" type="button"
                                                                                role="tab" aria-controls="nogod"
                                                                                aria-selected="false"><span
                                                                                    class="payment_icon"><img
                                                                                        src="{{asset("asset/assets/img/Nagad-Logo.wine.png")}}"
                                                                                        alt=""></span></button>
                                                                        </li>
                                                                        <li class="nav-item" role="presentation">
                                                                            <button class="nav-link" id="rocket-tab"
                                                                                data-bs-toggle="tab"
                                                                                data-bs-target="#rocket" type="button"
                                                                                role="tab" aria-controls="rocket"
                                                                                aria-selected="false"><span
                                                                                    class="payment_icon"><img
                                                                                        src="{{asset("asset/assets/img/rocket.png")}}"
                                                                                        alt=""></span></button>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="tab-content" id="myTabContent">
                                                                        <div class="tab-pane fade show active"
                                                                            id="bikash" role="tabpanel"
                                                                            aria-labelledby="bikash-tab">
                                                                            <form>
                                                                                <div class="form-check">
                                                                                    <input id="bikash" name="payment"
                                                                                        placeholder="বিকাশ নাম্বার"
                                                                                        class="form-control"
                                                                                        type="number" required>
                                                                                    <br>
                                                                                    <input id="bikash" name="payment"
                                                                                        placeholder="১১ ডিজিটের Trans ID লিখুন"
                                                                                        class="form-control"
                                                                                        type="number" required>

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nogod"
                                                                            role="tabpanel" aria-labelledby="nogod-tab">
                                                                            <form>
                                                                                <div class="form-check">
                                                                                    <input id="nogod" name="payment"
                                                                                        placeholder="নগদ নাম্বার"
                                                                                        class="form-control"
                                                                                        type="number" required>
                                                                                    <br>
                                                                                    <input id="nogod" name="payment"
                                                                                        placeholder="১১ ডিজিটের Trans ID লিখুন"
                                                                                        class="form-control"
                                                                                        type="number" required>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="rocket"
                                                                            role="tabpanel"
                                                                            aria-labelledby="rocket-tab">
                                                                            <form>
                                                                                <div class="form-check">
                                                                                    <input id="rocket" name="payment"
                                                                                        placeholder="রকেট নাম্বার"
                                                                                        class="form-control"
                                                                                        type="number" required>
                                                                                    <br>
                                                                                    <input id="rocket" name="payment"
                                                                                        placeholder="১১ ডিজিটের Trans ID লিখুন"
                                                                                        class="form-control"
                                                                                        type="number" required>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span
                                                                    class="or d-block mt-5 mb-4">.........অথবা.........</span>
                                                                <div class="form-check ">
                                                                    <input type="radio" name="payment" id="cash">
                                                                    <label class="form-check-label" for="cash">ক্যাশ
                                                                        অন</label>
                                                                </div>
                                                            </div>

                                                        </fieldset>
                                                        <button type="submit" class="btn btn-success">ডাউনলোড
                                                            করুন</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="alart">>> সেবা গ্রহণের জন্য অবশ্যই নিবন্ধন করুন ...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



