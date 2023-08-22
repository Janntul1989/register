<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Registration of Livestock Farm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href={{asset("asset/assets/img/logo.jpg")}}>
    <link rel="icon" href={{asset("asset/assets/img/logo.jpg")}}>
    <link rel="stylesheet" href= {{asset("asset/assets/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/fontawesome_all.min.css")}}>
    <link rel="stylesheet" href= {{asset("asset/assets/css/ma5-menu.min.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/style.css")}}>
    <link rel="stylesheet" href={{asset("asset/assets/css/responsive.css")}}>

</head>

<body>
    <section class="body_wrapper">
        <div class="container">
            <div class="registration_form">
                <form method="post" action="{{url('/')}}" id="registration_form">
                    <fieldset>
                        <legend>রেজিষ্ট্রেশন করুন</legend>

                        <div class="form-group mb-3">
                            <label class="control-label" for="full_name">পুরো নাম</label>
                            <input id="full_name" name="full_name" placeholder="আপনার নাম লিখুন" class="form-control"
                                type="text" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="control-label" for="number">ফোন
                                নাম্বার</label>
                            <input id="number" name="number" class="form-control" type="number" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="control-label" for="nid_number">জাতীয় পরিচয় পত্র নাম্বার</label>
                            <input name="nid_number" id="nid_number" class="form-control" type="number" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="control-label" for="address">
                                ঠিকানা</label>
                            <input id="address" name="address" placeholder="গ্রাম, ইউনিয়ন, উপজেলা, জেলা"
                                class="form-control" type="text" required>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="animalBirdFarm" id="animal" checked>
                                <label class="form-check-label" for="animal">পশু</label>
                                <select class="form-select form-select-animal" aria-label=".form-select-animal">
                                    <option value="cow" selected>গবাদি পশু</option>
                                    <option value="buffalo">মহিষ</option>
                                    <option value="goat">ছাগল</option>
                                    <option value="sheep">ভেড়া</option>
                                    <option value="horse">ঘোড়া</option>
                                    <option value="dog">কুকুর</option>
                                    <option value="cat">বিড়াল</option>
                                    <option value="rabbit">খরগোশ</option>
                                    <option value="no">নাই</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="animalBirdFarm" id="bird">
                                <label class="form-check-label" for="bird">
                                    পাখি</label>
                                <select class="form-select form-select-bird" aria-label=".form-select-bird">
                                    <option value="hen" selected>দেশী মুরগি</option>
                                    <option value="duck">হাঁস</option>
                                    <option value="broiler">ব্রয়লার</option>
                                    <option value="sonali">সোনালী</option>
                                    <option value="pigeon">কবুতর</option>
                                    <option value="koel">কোয়েল</option>
                                    <option value="dove">ঘুঘু</option>
                                    <option value="bajrigar">বার্জারগার</option>
                                    <option value="parrot">তোতাপাখি</option>
                                   <option value="no">নাই</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="animalBirdFarm" id="farm">
                                <label class="form-check-label" for="farm">খামারি</label>
                                <select class="form-select form-select-farm" aria-label=".form-select-farm">
                                    <option value="dairy_farm" checked>দুগ্ধ খামার</option>
                                    <option value="goat_farm">ছাগলের খামার</option>
                                    <option value="poultry_farm">মুরগির খামার</option>
                                    <option value="fattening_farm">মোটাতাজাকরণ খামার</option>
                                     <option value="no">নাই</option>
                                </select>
                            </div>
                            <div class="licence">
                                <label class="control-label" for="licence">লাইসেন্স নাম্বার</label>
                                <input id="licence" name="licence" class="form-control" type="number"
                                    placeholder="খামারের লাইসেন্স নাম্বার দিন">
                                <span>যদি থাকে...</span>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">শর্তাবলীতে সম্মত হন</label>
                                <div class="invalid-feedback">জমা দেওয়ার আগে আপনাকে অবশ্যই একমত হতে হবে। </div>
                            </div>
                        </div>

                    </fieldset>
                    <button type="submit" class="btn">জমা দিন</button>
                </form>
            </div>
            <!-- footer top -->
            <div class="row footer_top pt-5">
                <div class="col-12">
                    <img src="{{asset("asset/assets/img/footer_top_bg.png")}}" alt="">
                </div>
            </div>
            <div class="row footer_bottom">
                <div class="col-12 text-center">
                    <p>I-Smart Livestock Services (OS-LS) © 2023 All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('/assetassets/js/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/ma5-menu.min.js')}}"></script>
    <script src="{{asset('asset/https://cdn.jsdelivr.net/npm/chart.js')}}"></script>
    <script src="{{asset('asset/assets/js/plugins.js')}}"></script>
    <script src="{{asset('asset/assets/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('asset/assets/js/main.js')}}"></script>

</body>

</html>
