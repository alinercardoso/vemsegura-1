/*O SCRIPT FOI PASSADO PARA A PAGINA INDEX POIS O PHP CRIA ALGUM CONFLITO AO IMPORTAR ALGUM ARQUIVO JS EXTERNO*/

/*$(document).ready(function () {
    //BarraDeProgresso

  let containerA = document.getElementById("circleA");

    let circleA = new ProgressBar.Circle(containerA, {


        color: '#ae55f2',
        strokeWidth: 6,
        duration: 1400,
        from: {
            color: '#AAA'
        },
        to: {
            color: '#ae55f2'
        },

        step: function (state, circle) {

            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 97);

            circle.setText(value);
        }


    });

    let containerB = document.getElementById("circleB");

    let circleB = new ProgressBar.Circle(containerB, {


        color: '#ae55f2',
        strokeWidth: 6,
        duration: 1600,
        from: {
            color: '#AAA'
        },
        to: {
            color: '#ae55f2'
        },

        step: function (state, circle) {

            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 16);

            circle.setText(value);
        }


    });

    let containerC = document.getElementById("circleC");

    let circleC = new ProgressBar.Circle(containerC, {


        color: '#ae55f2',
        strokeWidth: 6,
        duration: 1800,
        from: {
            color: '#AAA'
        },
        to: {
            color: '#ae55f2'
        },

        step: function (state, circle) {

            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 687);

            circle.setText(value);
        }


    });

    let containerD = document.getElementById("circleD");

    let circleD = new ProgressBar.Circle(containerD, {


        color: '#ae55f2',
        strokeWidth: 6,
        duration: 2000,
        from: {
            color: '#AAA'
        },
        to: {
            color: '#ae55f2'
        },

        step: function (state, circle) {

            circle.path.setAttribute('stroke', state.color);

            let value = Math.round(circle.value() * 269);

            circle.setText(value);
        }


    });

    //animando só quando o usuário chegar em determinada parte do site
    let dataAreaOffset = $('#data-area').offset();
    let stop = 0;

    $(window).scroll(function (e) {

        let scroll = $(window).scrollTop();

        if (scroll > (dataAreaOffset.top - 500) && stop == 0) {

            circleA.animate(1.0);
            circleB.animate(1.0);
            circleC.animate(1.0);
            circleD.animate(1.0);

            stop = 1;

        }

    });

    //Parallax(imagem ao fundo estatica)

    setTimeout(function () {

        $('#data-area').parallax({
            imageSrc: 'img/parallax.jpg'
        });
        $('#pattern-img').parallax({
            imageSrc: 'img/assedio-onibus-pessoas.jpeg'
        });


    }, 250);

    let navBtn = $('.nav-item');

    let bannerSection = $('#mainSlider');
    let aboutSection = $('#about-area');
    let servicesSection = $('#services-area');
    let timeSection = $('#time-area');
    let denunciaSection = $('#apply-area');
    let contatoSection = $('#contact-area');

    let scrollTo = '';

    $(navBtn).click(function () {

        let btnId = $(this).attr('id')


        if (btnId == 'about-menu') {
            scrollTo = aboutSection;
        } else if (btnId == 'services-menu') {
            scrollTo = servicesSection;
        } else if (btnId == 'team-menu') {
            scrollTo = timeSection;
        } else if (btnId == 'denuncia-menu') {
            scrollTo = denunciaSection;
        } else if (btnId == 'contato-menu') {
            scrollTo = contatoSection;
        } else {
            scrollTo = bannerSection
        }

        $([document.documentElement, document.body])
            .animate({
                scrollTop: $(scrollTo).offset().top - 70
            }, 1000);

    });



});

*/