<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Macunaímãs</title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
        <link href='http://fonts.googleapis.com/css?family=Dosis&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/responsive-carousel.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.pieces > img, .char > img').each(function() {
                    $(this).draggable({ 
                        scroll: false,
                        stack: 'img'
                    });
                });
                $('.arrow-right').click(function() {
                    var scroll = $('.macunaimas').scrollLeft();
                    if(scroll < (($('.slide').size()-1)*960)) {
                        $('.macunaimas').animate({
                            scrollLeft: '+=960'
                        })
                    } else {
                        $('.macunaimas').animate({
                            scrollLeft: 0
                        })
                    }
                });
                $('.arrow-left').click(function() {
                    var scroll = $('.macunaimas').scrollLeft();
                    if(scroll > 0) {
                        $('.macunaimas').animate({
                            scrollLeft: '-=960'
                        })
                    } else {
                        $('.macunaimas').animate({
                            scrollLeft: ($('.slide').size()-1)*960
                        })
                    }
                });
            })
        </script>
    </head>
    <body>
        <div class="up">
            <div class="splash">
                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmacunaimas&amp;send=false&amp;layout=box_count&amp;width=450&amp;show_faces=true&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=524299564248355" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:90px; margin: 30px 35px;" allowTransparency="true"></iframe>
            </div>
            <a href="/">
                <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-macunaimas.png"/>
            </a>
            <img class="arrow-left" src="<?php echo get_template_directory_uri(); ?>/img/esquerda.png"/>
            <img class="arrow-right" src="<?php echo get_template_directory_uri(); ?>/img/direita.png"/>
            <div class="macunaimas">
                <div class="slides">
                    <div class="slide">
                        <div class="char">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem1/amy01.png" />
                        </div>
                        <div class="pieces">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem1/amy02.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem1/amy03.png" /><br/>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem1/amy04.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem1/amy05.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem1/amy06.png" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="char">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem2/gorda01.png" />
                        </div>
                        <div class="pieces">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem2/gorda06.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem2/gorda07.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem2/gorda02.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem2/gorda03.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem2/gorda04.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem2/gorda05.png" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="char">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem3/magro01.png" />
                        </div>
                        <div class="pieces">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem3/magro04.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem3/magro05.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem3/magro06.png" /><br />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem3/magro02.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem3/magro03.png" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="char">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem4/nit01.png" />
                        </div>
                        <div class="pieces">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem4/nit02.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem4/nit03.png" />
                        </div>
                    </div>
                    <div class="slide">
                        <div class="char">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem5/vo01.png" />
                        </div>
                        <div class="pieces">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem5/vo02.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem5/vo03.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem5/vo04.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem5/vo05.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem5/vo06.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem5/vo07.png" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/personagem5/vo08.png" />
                        </div>
                    </div>
                </div>
            </div>
            <img class="instructions" src="<?php echo get_template_directory_uri(); ?>/img/instructions.png" alt="Arraste as roupinhas para vestir os personagens" title="Instruções!" />
        </div>
    </div>
    <div class="down">
        <div class="container">
            <div class="col salve">
                <p>
                    SALVE O ÍMÃ DE MACUNAÍMA!
                </p>
                <p>
                    Enquanto nosso site oficial não sai do 
                    forno, conheça e brinque com alguns 
                    dos personagens Macunaímãs! 
                    Esses simpáticos bonecos são ímãs de 
                    geladeira, produzidos pelo studio <a href="http://juuz.com.br/">Juuz 
                        Design</a> em Vitória - ES. São feitos à 
                    mão com todo capricho pra deixar seus 
                    ambientes mais felizes e tropicais! 
                    Fique à vontade para brincar, trocar as 
                    roupas, deixá-los peladinhos, como 
                    quiser. Divirta-se! 
                </p>
            </div>
            <div class="col loja">
                <a href="http://loja.macunaimas.com.br/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lojinha-01.gif" />
                </a>
            </div>
            <div class="col form">
                <div id="contact-form-16">
                    <form action="http://macunaimas.aws.af.cm/?p=16#contact-form-16" method="post" class="contact-form commentsblock">
                        <div>
                            <input type="text" name="16-nome" id="16-nome" value="NOME" class="name">
                        </div>
                        <div>
                            <input type="email" name="16-email" id="16-email" value="EMAIL" class="email">
                        </div>
                        <div>
                            <textarea name="16-mensagem" id="contact-form-comment-16-mensagem" rows="20">DÊ UM OLÁ!</textarea>
                        </div>
                        <p class="contact-submit">
                            <input type="submit" value="Enviar »" class="pushbutton-wide">
                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="28af546c6f"><input type="hidden" name="_wp_http_referer" value="/">
                            <input type="hidden" name="contact-form-id" value="16">
                            <input type="hidden" name="action" value="grunion-contact-form">
                        </p>
                    </form>
                </div>
            </div>
            <p class="container credits">
                Desenvolvido por <a href="http://murilopolese.com.br/">Murilo Polese</a>, design by <a href="http://juuz.com.br/">Juuz</a>
            </p>
        </div>
    </div>
    <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-37818527-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
    </script>
</body>
</html>
