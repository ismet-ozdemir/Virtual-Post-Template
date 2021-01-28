/**
 *
 * @author     İsmet Özdemir <ismetozdemir813@gmail.com>
 * @category   Virtual post template.
 *
 */

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanal Post</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css?v=1611846242">
    <link rel="stylesheet" href="css/bootstrap-icons.css?v=<?= time() ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        body {
            height: 100vh;
        }

        .nav-link {
            background: hsl(218, 17%, 35%) !important;
            color: #fff !important;
            border-radius: 0 !important;
        }

        .nav-link.active {
            background: #2e3646 !important;
        }

        .card {
            border: 0 !important;
        }

        @media screen and (max-width:767px) {
            .form-select {
                margin-bottom: 15px !important;
            }
        }

    </style>
</head>

<body>

    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-md-6 mt-5 mb-5 p-4" style="border:1px solid #ddd;">
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Garanti Bonus Kart</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Maximum Kart</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Yapı Kredi World Kart</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="username" class="form-label">Kart Üzerindeki İsim</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cardNumber" class="form-label">Kart Numarası</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-credit-card"></i></span>
                                            <input type="text" class="form-control" aria-label="cardNumber" aria-describedby="basic-addon2">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="cardNumber" class="form-label">Son Kullanma Tarihi</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Ay</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Yıl</option>
                                                            <option value="1">2021</option>
                                                            <option value="2">2022</option>
                                                            <option value="3">2023</option>
                                                            <option value="4">2024</option>
                                                            <option value="5">2025</option>
                                                            <option value="6">2026</option>
                                                            <option value="7">2027</option>
                                                            <option value="8">2028</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cvv" class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                                <div class="row">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" aria-label="cvv">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Hizmet sözleşmesini okudum ve onayladım.</label>
                                    </div>
                                    <div class="d-grid gap-2 d-md-block mt-3">
                                        <button class="btn rounded-0" type="button" style="background:hsl(218, 17%, 35%); color:#fff;">Kaydet</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="username" class="form-label">Kart Üzerindeki İsim</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cardNumber" class="form-label">Kart Numarası</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-credit-card"></i></span>
                                            <input type="text" class="form-control" aria-label="cardNumber" aria-describedby="basic-addon2">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="cardNumber" class="form-label">Son Kullanma Tarihi</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Ay</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Yıl</option>
                                                            <option value="1">2021</option>
                                                            <option value="2">2022</option>
                                                            <option value="3">2023</option>
                                                            <option value="4">2024</option>
                                                            <option value="5">2025</option>
                                                            <option value="6">2026</option>
                                                            <option value="7">2027</option>
                                                            <option value="8">2028</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cvv" class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                                <div class="row">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" aria-label="cvv">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Hizmet sözleşmesini okudum ve onayladım.</label>
                                    </div>
                                    <div class="d-grid gap-2 d-md-block mt-3">
                                        <button class="btn rounded-0" type="button" style="background:hsl(218, 17%, 35%); color:#fff;">Kaydet</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="username" class="form-label">Kart Üzerindeki İsim</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cardNumber" class="form-label">Kart Numarası</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-credit-card"></i></span>
                                            <input type="text" class="form-control" aria-label="cardNumber" aria-describedby="basic-addon2">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="cardNumber" class="form-label">Son Kullanma Tarihi</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Ay</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Yıl</option>
                                                            <option value="1">2021</option>
                                                            <option value="2">2022</option>
                                                            <option value="3">2023</option>
                                                            <option value="4">2024</option>
                                                            <option value="5">2025</option>
                                                            <option value="6">2026</option>
                                                            <option value="7">2027</option>
                                                            <option value="8">2028</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cvv" class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                                <div class="row">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" aria-label="cvv">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Hizmet sözleşmesini okudum ve onayladım.</label>
                                    </div>
                                    <div class="d-grid gap-2 d-md-block mt-3">
                                        <button class="btn rounded-0" type="button" style="background:hsl(218, 17%, 35%); color:#fff;">Kaydet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>