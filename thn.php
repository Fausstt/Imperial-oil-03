<?php
$site = $_GET['st'];
if (!$site) {
    exit;
}
if ($site != 'test') {
    exit;
}
$scl = mysqli_connect('panelser.mysql.tools', 'panelser_pixel', 'd3+S%t3j8H', 'panelser_pixel'); // вход в БД
$post = mysqli_query($scl, "SELECT `Pixel` FROM `$site` ");
$pixel = [];
while ($pix = mysqli_fetch_array($post)) {
    $p = $pix['Pixel'];
    echo "
    <script>
            fetch(`https://www.facebook.com/tr?id=$p&ev=Lead&noscript=1`);
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $site ?></title>

    <link href="./file/css2" rel="stylesheet">
    <link rel="stylesheet" href="./file/style.css">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="./file/m=el_main_css">
</head>

<body>
    <header class="header">
        <div class="header__wrapper">
            <h1 class="header__title">
                Congratulations!
            </h1>
            <p class="header__register">
                You have successfully registered
            </p>
            <p class="header__successfull">
                on the platform <?php echo $site ?>
            </p>
            <h2 class="header__attention">
                Attention!
            </h2>
            <p class="headear__making">
                To start making your first money today
            </p>
            <div class="header__makesure">
                Make sure to pick up the phone from a company representative who will help you set up the program!
            </div>
        </div>
    </header>

    <section class="faq">
        <div class="container">
            <h2 class="faq__title">
                FAQ:
            </h2>

            <div class="faq__wrapper">
                <p class="faq__wrapper-counter">
                    1. What is it and how I can make money on it?
                </p>
                <p class="faq__wrapper-text">
                    The <?php echo $site ?> platform is a platform that trades cryptocurrencies in the Forex market.
                </p>
                <p class="faq__wrapper-text">
                    The program is able to independently analyse the entire situation in the cryptocurrency market
                    and conclude those transactions that will bring you profit in 100% of cases.
                </p>
                <p class="faq__wrapper-text">
                    In simple terms, the program buys cryptocurrency cheaper, and sells it more expensive, and you make
                    money on it.
                </p>
            </div>

            <div class="faq__wrapper">
                <p class="faq__wrapper-counter">
                    2. What should I do after registration?
                </p>
                <p class="faq__wrapper-text">
                    First of all relax, make some tea or coffee.
                </p>
                <p class="faq__wrapper-text">
                    Then wait for a call from a company representative who will help you activate your account and get
                    the first profit from transactions.
                </p>
                <p class="faq__wrapper-text">
                    Afterwards, he will be assigned to you as your personal assistant.
                </p>
            </div>

            <div class="faq__wrapper">
                <p class="faq__wrapper-counter">
                    3. Why is it important to take a call?
                </p>
                <p class="faq__wrapper-text">
                    In order to teach you how to use the program correctly and ensure you will use it to the maximum
                    from the first days.
                </p>
            </div>

            <div class="faq__wrapper">
                <p class="faq__wrapper-counter">
                    4. Is it legal?
                </p>
                <p class="faq__wrapper-text">
                    Yes, it's legal.
                </p>
                <p class="faq__wrapper-text">
                    <?php echo $site ?> platform pays taxes for its users
                </p>
            </div>

            <div class="faq__wrapper">
                <p class="faq__wrapper-counter">
                    5. How is it beneficial for the company?
                </p>
                <p class="faq__wrapper-text">
                    The company takes 1% when withdrawing funds from each user.
                </p>
            </div>

            <div class="faq__wrapper">
                <p class="faq__wrapper-counter">
                    6. How much money can I make from the <?php echo $site ?> program?
                </p>
                <p class="faq__wrapper-text">
                    Average user’s income is $ 3.500-4000 per week.
                </p>
            </div>

            <div class="faq__wrapper">
                <p class="faq__wrapper-counter">
                    7. How much time do I need to devote to the program?
                </p>
                <p class="faq__wrapper-text">
                    On average, for the program to work correctly, it will take no more than 30-40 minutes a day to turn
                    on and off the automatic trading mode.
                </p>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <h3 class="footer__title">
                A little more and you will earn $ 600 per day
            </h3>
            <div class="footer__line"></div>
            <p class="footer__call">
                Wait for the operator's call
            </p>
        </div>
    </footer>
    <div id="goog-gt-" class="skiptranslate VIpgJd-yAWNEb-L7lbkb" dir="ltr">
        <div style="padding: 8px;">
            <div>
                <div class="VIpgJd-yAWNEb-l4eHX"><img src="./file/translate_24dp.png" width="20" height="20" alt="Google Переводчик"></div>
            </div>
        </div>
        <div style="padding: 8px; float: left; width: 100%;">
            <h1 class="VIpgJd-yAWNEb-r4nke VIpgJd-yAWNEb-mrxPge">Исходный текст</h1>
        </div>
        <div style="padding: 8px;">
            <div class="VIpgJd-yAWNEb-nVMfcd-fmcmS"></div>
        </div>
        <div class="VIpgJd-yAWNEb-cGMI2b" style="padding: 8px;">
            <div class="VIpgJd-yAWNEb-Z0Arqf-PLDbbf"><span class="VIpgJd-yAWNEb-Z0Arqf-hSRGPd">Предложить лучший вариант
                    перевода</span></div>
            <div class="VIpgJd-yAWNEb-fw42Ze-Z0Arqf-haAclf">
                <hr style="color: #ccc; background-color: #ccc; height: 1px; border: none;">
                <div class="VIpgJd-yAWNEb-Z0Arqf-H9tDt"></div>
            </div>
        </div>
        <div class="VIpgJd-yAWNEb-jOfkMb-Ne3sFf" style="display: none;"></div>
    </div>



    <div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf">
        <div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe" width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
            </svg></div>
    </div>
</body>

</html>