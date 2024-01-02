<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nihongo Mastery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./hiragana_katakana.css">
</head>
<body>
    <div class="container-xl">
        <!-- Logo -->
        <div class="row ">
            <div class="col bar">
                <div class="logo">
                    <a href="#">
                        <img src="./../../../image/Nihongo_Master_Logo.png" style="width: 50px;" alt="">
                    </a>
                </div>
            </div>
            <div class="col d-flex justify-content-end bar">
                <div class="login_search" style="margin-top: 11px; ">
                    <a href="#" style="color: black; font-size: 20px; margin-right: 20px;"><i class="fas fa-search"></i></a>
                    <a href="./../../../user/info/user.php" style="color: black;font-size: 20px;"><i class="fas fa-user"></i></a>

                </div>
            </div>
        </div>
        <!-- Menu Bar -->
        <div class="row menu">
            <div class="col">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Trang_Chu-tab" data-bs-toggle="tab" data-bs-target="#Trang_Chu" type="button" role="tab" aria-controls="Trang_Chu" aria-selected="false">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../../home.php">Trang Chủ</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Tai_Lieu-tab" data-bs-toggle="tab" data-bs-target="#Tai_Lieu" type="button" role="tab" aria-controls="Tai_Lieu" aria-selected="true">
                            <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../tailieu.php">Tài Liệu</a>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Han_Tu-tab" data-bs-toggle="tab" data-bs-target="#Han_Tu" type="button" role="tab" aria-controls="Han_Tu" aria-selected="false">
                            <a style="text-decoration: none; color: black;" href="./../../../source_kanji/bo_thu/bo_thu.php">Hán Tự</a>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="JLPT-tab" data-bs-toggle="tab" data-bs-target="#JLPT" type="button" role="tab" aria-controls="JLPT" aria-selected="false">
                        <span style="color: black;">
                                <a style="text-decoration: none; color: black;" href="./../../../source_JLPT/JLPT_Test.php">JLPT</a>
                            </span>
                        </button>
                    </li>
                </ul>
                
            </div>
            
            
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Tai Lieu -->
            <div class="tab-pane active" id="Tai_Lieu" role="tabpanel" aria-labelledby="Tai_Lieu-tab">
                <div class="menu_bar">
                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: navy;" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sơ cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                <a class="dropdown-item" href="./../minna/minna.php">Minna sơ cấp</a>
                                <a class="dropdown-item" href="./../kanji/kanji.php">Hán tự</a>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trung cấp</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="./../../trungcap/minna/minna_2.php">Minna trung cấp</a>
                                <a class="dropdown-item" href="./../../trungcap/kanji/kanji_2.php">Hán tự</a> 
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item dropdown" >
                            <a href="./../../N5/N5.php"> N5</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../../N4/N4.php">N4</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../../N3/N3.php">N3</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../../N2/N2.php">N2</a>
                            <hr>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="./../../N1/N1.php">N1</a>
                            <hr>
                        </li>

                    </ul>
                </div>

                <hr style="color: rgb(189, 189, 189); margin-top: 0px;">
                <div class="content ">
                    <div class="content_left" style="width: 100%;">
                        <!-- Content -->
                        <div class="hiragana">
                            <h2>Hiragana</h2>
                            <div class="item">
                                <div class="item_row_1">
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/a.png" alt="a">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/i.png" alt="i">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/u.png" alt="u">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/e.png" alt="e">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/o.png" alt="o">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ka.png" alt="ka">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ki.png" alt="ki">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ku.png" alt="ku">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ke.png" alt="ke">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ko.png" alt="ko">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/sa.png" alt="sa">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/shi.png" alt="shi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/su.png" alt="su">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/se.png" alt="se">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/so.png" alt="so">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ta.png" alt="ta">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/chi.png" alt="chi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/tsu.png" alt="tsu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/te.png" alt="te">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/to.png" alt="to">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/na.png" alt="na">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ni.png" alt="ni">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/nu.png" alt="nu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ne.png" alt="ne">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/no.png" alt="no">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ha.png" alt="ha">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/hi.png" alt="hi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/fu.png" alt="fu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/he.png" alt="he">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ho.png" alt="ho">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ma.png" alt="ma">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/mi.png" alt="mi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/mu.png" alt="mu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/me.png" alt="me">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/mo.png" alt="mo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/a.png" alt="ya">
                                        </div>
                                        <div class="img_text" style="border: none;">
                                            <img src="" alt="">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/u.png" alt="yu">
                                        </div>
                                        <div class="img_text" style="border: none;">
                                            <img src="" alt="">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/o.png" alt="yo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ra.png" alt="ra">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ri.png" alt="ri">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ru.png" alt="ru">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/re.png" alt="re">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ro.png" alt="ro">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/wa.png" alt="wa">
                                        </div>
                                        <div class="img_text" style="border: none;">
                                            <img src="" alt="">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/wo.png" alt="wo">
                                        </div>
                                        <div class="img_text" style="border: none;">
                                            <img src="" alt="">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/n.png" alt="n">
                                        </div>
                                    </div>
                                </div>
                                <div class="item_row_2">
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ga.png" alt="ga">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/gi.png" alt="gi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/gu.png" alt="gu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ge.png" alt="ge">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/go.png" alt="go">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/za.png" alt="za">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ji.png" alt="ji">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/zu.png" alt="zu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ze.png" alt="ze">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/zo.png" alt="zo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/da.png" alt="da">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ji2.png" alt="ji2">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/zu2.png" alt="zu2">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/de.png" alt="de">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/do.png" alt="do">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ba.png" alt="ba">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/bi.png" alt="bi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/bu.png" alt="bu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/be.png" alt="be">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/bo.png" alt="bo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/pa.png" alt="pa">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/pi.png" alt="pi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/pu.png" alt="pu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/pe.png" alt="pe">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/po.png" alt="po">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/kya.png" alt="kya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/kyu.png" alt="kyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/kyo.png" alt="kyo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/sha.png" alt="sha">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/shu.png" alt="shu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/sho.png" alt="sho">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/cha.png" alt="cha">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/chu.png" alt="chu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/cho.png" alt="cho">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/nya.png" alt="nya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/nyu.png" alt="nyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/nyo.png" alt="nyo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/hya.png" alt="hya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/hyu.png" alt="hyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/hyo.png" alt="hyo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/mya.png" alt="mya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/myu.png" alt="myu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/myo.png" alt="myo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/rya.png" alt="rya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ryu.png" alt="ryu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ryo.png" alt="ryo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/gya.png" alt="gya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/gyu.png" alt="gyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/gyo.png" alt="gyo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ja.png" alt="ja">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/ju.png" alt="ju">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/jo.png" alt="jo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/bya.png" alt="bya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/byu.png" alt="byu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/byo.png" alt="byo">
                                        </div>
                                    </div>
                                    <div class="col_1" style="padding-bottom: 5%;">
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/pya.png" alt="pya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/pyu.png" alt="pyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/hiragana/pyo.png" alt="pyo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="katakana" style="margin-top: 50px;">
                            <h2>Katakana</h2>
                            <div class="item">
                                <div class="item_row_1">
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/a.png" alt="a">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/i.png" alt="i">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/u.png" alt="u">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/e.png" alt="e">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/o.png" alt="o">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ka.png" alt="ka">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ki.png" alt="ki">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ku.png" alt="ku">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ke.png" alt="ke">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ko.png" alt="ko">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/sa.png" alt="sa">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/shi.png" alt="shi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/su.png" alt="su">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/se.png" alt="se">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/so.png" alt="so">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ta.png" alt="ta">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/chi.png" alt="chi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/tsu.png" alt="tsu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/te.png" alt="te">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/to.png" alt="to">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/na.png" alt="na">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ni.png" alt="ni">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/nu.png" alt="nu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ne.png" alt="ne">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/no.png" alt="no">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ha.png" alt="ha">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/hi.png" alt="hi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/fu.png" alt="fu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/he.png" alt="he">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ho.png" alt="ho">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ma.png" alt="ma">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/mi.png" alt="mi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/mu.png" alt="mu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/me.png" alt="me">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/mo.png" alt="mo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/a.png" alt="ya">
                                        </div>
                                        <div class="img_text" style="border: none;">
                                            <img src="" alt="">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/u.png" alt="yu">
                                        </div>
                                        <div class="img_text" style="border: none;">
                                            <img src="" alt="">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/o.png" alt="yo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ra.png" alt="ra">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ri.png" alt="ri">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ru.png" alt="ru">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/re.png" alt="re">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ro.png" alt="ro">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/wa.png" alt="wa">
                                        </div>
                                        <div class="img_text" style="border: none;">
                                            <img src="" alt="">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/wo.png" alt="wo">
                                        </div>
                                        <div class="img_text" style="border: none;">
                                            <img src="" alt="">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/n.png" alt="n">
                                        </div>
                                    </div>
                                </div>
                                <div class="item_row_2">
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ga.png" alt="ga">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/gi.png" alt="gi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/gu.png" alt="gu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ge.png" alt="ge">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/go.png" alt="go">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/za.png" alt="za">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ji.png" alt="ji">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/zu.png" alt="zu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ze.png" alt="ze">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/zo.png" alt="zo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/da.png" alt="da">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ji2.png" alt="ji2">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/zu2.png" alt="zu2">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/de.png" alt="de">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/do.png" alt="do">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ba.png" alt="ba">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/bi.png" alt="bi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/bu.png" alt="bu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/be.png" alt="be">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/bo.png" alt="bo">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/pa.png" alt="pa">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/pi.png" alt="pi">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/pu.png" alt="pu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/pe.png" alt="pe">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/po.png" alt="po">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/kya.png" alt="kya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/kyu.png" alt="kyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/kyo.png" alt="kyo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/sha.png" alt="sha">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/shu.png" alt="shu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/sho.png" alt="sho">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/cha.png" alt="cha">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/chu.png" alt="chu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/cho.png" alt="cho">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/nya.png" alt="nya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/nyu.png" alt="nyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/nyo.png" alt="nyo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/hya.png" alt="hya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/hyu.png" alt="hyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/hyo.png" alt="hyo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/mya.png" alt="mya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/myu.png" alt="myu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/myo.png" alt="myo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/rya.png" alt="rya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ryu.png" alt="ryu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ryo.png" alt="ryo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/gya.png" alt="gya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/gyu.png" alt="gyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/gyo.png" alt="gyo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ja.png" alt="ja">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/ju.png" alt="ju">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/jo.png" alt="jo">
                                        </div>
                                    </div>
                                    <div class="col_1">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/bya.png" alt="bya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/byu.png" alt="byu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/byo.png" alt="byo">
                                        </div>
                                    </div>
                                    <div class="col_1" style="padding-bottom: 5%;">
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/pya.png" alt="pya">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/pyu.png" alt="pyu">
                                        </div>
                                        <div class="img_text">
                                            <img src="./../../../image/katakana/pyo.png" alt="pyo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List giao trinh -->
                    <div class="d-none d-md-inline-block" style="width: 28%; border-left: 2px solid rgb(228, 228, 228); margin-left: 25px;">
                        <div class="giaoTrinh" style="margin-left: 10px;">
                            <h4><b>Giáo trình</b></h4>
                            <h4 style="text-align: end;"><b>môn học</b></h4>
                            <hr>
                            <div class="list_giaoTrinh">
                                <ul>
                                    <div class="header">
                                        <a href="#">Sơ cấp</a>
                                    </div>
                                    <li>
                                        <a href="./../../socap/hiragana/hiragana_katakana.php">Hiragana & Katakana</a>
                                    </li>
                                    <li>
                                        <a href="./../../socap/minna/minna.php">Minna sơ cấp</a>
                                    </li>
                                    <li>
                                        <a href="./../../socap/kanji/kanji.php">Hán tự</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="#">Trung cấp</a>
                                    </div>
                                    <li>
                                        <a href="./../../trungcap/minna/minna_2.php">Minna trung cấp</a>
                                    </li>
                                    <li>
                                        <a href="./../../trungcap/kanji/kanji_2.php">Hán tự</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N5/N5.php">N5</a>
                                    </div>
                                    <li>
                                        <a href="./../../N5/N5.php">Từ vựng, ngữ pháp N5</a>
                                    </li>

                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N4/N4.php">N4</a>
                                    </div>
                                    <li>
                                        <a href="./../../N4/N4.php">Từ vựng, ngữ pháp N4</a>
                                    </li>
                                
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N3/N3.php">N3</a>
                                    </div>
                                    <li>
                                        <a href="./../../N3/N3.php">Từ vựng, ngữ pháp N3</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N2/N2.php">N2</a>
                                    </div>
                                    <li>
                                        <a href="./../../N2/N2.php">Từ vựng, ngữ pháp N2</a>
                                    </li>
                                </ul>
                                <ul>
                                    <div class="header">
                                        <a href="./../../N1/N1.php">N1</a>
                                    </div>
                                    <li>
                                        <a href="./../../N1/N1.php">Từ vựng, ngữ pháp N1</a>
                                    </li>

                                </ul>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Comment -->
    <div class="container-fluid Information">
        <div class="row">
            <div class="col-2 infocomment">
                <div class="logo">
                    <a href="#">
                        <img src="./../../../image/Nihongo_Master_Logo.png" style="width: 80px;" alt="">
                    </a>
                </div>
            </div>
            <div class="col-7 infocomment" style="text-align: start;">
                <div class="item_info">
                    Địa chỉ: Phường Hòa Hiệp Nam, Quận Liên Chiểu, TP Đà Nẵng
                </div>
                <div class="item_info">
                    Điện thoại: 086 692 6448
                </div>
                <div class="item_info">
                    Email: 3120221232@ued.udn.vn
                </div>
                <div class="item_info">
                    Website: http://NihongoMastery.com
                </div>
            </div>
            <div class="col-3">
                <div style="display: flex; margin: auto;  width: 120px; justify-content: space-between;">
                    <div class="item_logo">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    <div class="item_logo">
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                    </div>
                    <div class="item_logo">
                        <a href="#"><i class="fab fa-instagram-square"></i>
                        </a>
                    </div>
                </div>
                <div style="width: 150px; margin: 0 auto;">
                    <select class="form-select form-select-lg " name="" id="" style="font-size: 14px;">
                        <option value="vn" selected>Vietnamese</option>
                        <option value="en">English</option>
                    </select>
                </div>
            </div>
            <div class="logo_bar">
                <img src="./../../../image/image_bg/Bar background.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>