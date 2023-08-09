<!doctype html>
<html lang="es-GT">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Invitación</title>
        <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet" >
        <link rel="stylesheet" href="<?=base_url('css/style.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('css/lightbox.css')?>">

        <script src="<?=base_url('js/bootstrap.bundle.min.js')?>" ></script>
        <script src="<?=base_url('js/vue.min.js')?>" ></script>
        <script src="<?=base_url('js/axios.min.js')?>" ></script>
        <script src="<?=base_url('js/jquery-3.7.0.min.js')?>" ></script>
        <script src="<?=base_url('js/lightbox.js')?>" ></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


        
    </head>
    <body class="hidden">
        <div class="start-invitation d-flex flex-column justify-content-center align-items-center">
            <div class="header-text-front">Invitación de nuestra boda</div>
            <div class="boyfriend_name"> Marjorie &&ZeroWidthSpace; Moisés </div>
            <button class="btn-calendar" id="fade-button">ver Invitación</button>
        </div>
        <div class="container-fluid container-general p-0" id="app">
            <div class="box-header-content">
                <div class="front-layer d-flex flex-column justify-content-center align-items-center">
                    <div class="header-text-front">Te invitamos a nuestra boda</div>
                    <div class="boyfriend_name"> Marjorie &&ZeroWidthSpace; Moisés </div>
                    <div class="header-text-front">Save the Date</div>
                    <div class="line mt-3"></div>
                    <div class="wedding-day">Octubre 07/2023</div>
                    <button class="btn-calendar" v-on:click="googleCalendar">Agregar a mi calendario</button>
                </div>
                <div class="section-history">
                    <div class="box-history m-auto">
                        <div class="img-icon">
                            <img src="img/girasoles.png" alt="">
                        </div>
                        <div class="title-text text-center">
                            Nuestra historia
                        </div>
                        <div class="text-content text-center ps-lg-0 pe-lg-0 ps-3 pe-3">
                            Un dia saliendo de la iglesia, nos econtramos en un pasillo, nos miramos y saludamos con un "Hola" alli fue donde todo empezo. "Hay momentos en la vida que son muy especiales por si solos, pero al compartirlos con personas tan especiales como tú, se convierten en momentos imposibles de olvidar ¡Te esperamos en nuestra boda!"
                        </div>
                        <div class="box-img-boyfriend-history m-auto p-lg-0 p-3">
                            <img src="./img/foto_1.jpg" alt="foto_1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body-content">
                <div class="box-song text-center">
                    <svg xmlns="https://www.w3.org/2000/svg" width="50px" viewBox="0 0 448 512"><path d="M96 224C84.72 224 74.05 226.3 64 229.9V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32S145.7 96 128 96C57.42 96 0 153.4 0 224v96c0 53.02 42.98 96 96 96s96-42.98 96-96S149 224 96 224zM352 224c-11.28 0-21.95 2.305-32 5.879V224c0-35.3 28.7-64 64-64c17.67 0 32-14.33 32-32s-14.33-32-32-32c-70.58 0-128 57.42-128 128v96c0 53.02 42.98 96 96 96s96-42.98 96-96S405 224 352 224z"></path></svg>                    
                    <div class="title-song mt-3">
                        <div class="text-break">Caminar de Tu Mano</div> 
                    </div>
                    <div class="autor">Rio Roma</div>
                    <div class="audio-song m-auto mb-4">
                        <audio  id="audioPlayer" controls>
                            <source src="./audio/Caminar_de _tu_mano.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    <svg xmlns="https://www.w3.org/2000/svg" width="30px" viewBox="0 0 448 512"><path d="M96 96C42.98 96 0 138.1 0 192s42.98 96 96 96c11.28 0 21.95-2.305 32-5.879V288c0 35.3-28.7 64-64 64c-17.67 0-32 14.33-32 32s14.33 32 32 32c70.58 0 128-57.42 128-128V192C192 138.1 149 96 96 96zM448 192c0-53.02-42.98-96-96-96s-96 42.98-96 96s42.98 96 96 96c11.28 0 21.95-2.305 32-5.879V288c0 35.3-28.7 64-64 64c-17.67 0-32 14.33-32 32s14.33 32 32 32c70.58 0 128-57.42 128-128V192z"></path></svg>
                </div>
                <div class="confirm-assistance">
                    <div class="row justify-content-center align-items-center box-confirm-assistance">
                        <div class="col-md-6 text-center mt-lg-0 mt-5">
                            <div class="title-confirm-asistance">
                                Confirma tu asistencia
                            </div>
                            <div  id="countdown" class="countdown-clock d-flex justify-content-center mt-4">
                                <div>
                                    <div id="days" class="text-number">00</div>
                                    <div class="text-date">DÍAS</div>
                                </div>
                                <div class="text-number ms-2 me-2">:</div>
                                <div>
                                    <div id="hours" class="text-number">00</div>
                                    <div class="text-date">HRS</div>
                                </div>
                                <div class="text-number ms-2 me-2">:</div>
                                <div>
                                    <div id="minutes" class="text-number">00</div>
                                    <div class="text-date">MIN</div>
                                </div>
                                <div class="text-number ms-2 me-2">:</div>
                                <div>
                                    <div id="seconds" class="text-number">00</div>
                                    <div class="text-date">SEC</div>
                                </div>
                            </div>
                            <div class="text-legend mt-5">
                                ¡Este día es muy especial y que vayas lo hace aún más!
                            </div>
                        </div>
                        <div class="col-md-6 mt-lg-0 mt-5 mb-lg-0 mb-5">
                            <div class="form-assistance p-4">
                                <div class="text-center text-description">Ingresa los siguientes datos confirmar tu asistencia</div>
                                <form action="" v-on:submit.prevent="confirmarAsistencia" ref="datos">
                                    <input type="text" class="form-control form-control-lg mt-4" name="nombre" placeholder="Nombre" required>
                                    <select class="form-select form-select-lg mb-3 mt-5" name="estado" required>
                                        <option value="" selected>Confirmacion de asistencia</option>
                                        <option value="1">Si asistiré</option>
                                        <option value="0">No asistiré</option>
                                    </select>

                                    <button type="submit" class="btn-calendar mt-5">Enviar</button>
                                </form> 
                                <!-- Confirmacion de asistencia -->
                                <!-- <div class="text-assistance d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-envelope-check-fill"></i>
                                    ¡Gracias por confirmar tu asistencia!
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="box-photos-galery d-flex align-items-center">
                <div class="galery mt-lg-0 mt-5 mb-lg-0 mb-5">
                    <div class="m-auto">
                        <div class="img-photo">
                            <a href="<?=base_url('img/foto_6.jpg')?>" data-lightbox="image-1">
                                <img src="./img/foto_6.jpg" alt="foto_6">
                            </a>
                        </div>
                    </div>
                    <div class="m-auto">
                        <div class="img-photo">
                            <a href="<?=base_url('img/foto_3.jpg')?>" data-lightbox="image-1">
                                <img src="./img/foto_3.jpg" alt="foto_3">
                            </a>
                        </div>
                    </div>
                    <div class="m-auto mt-lg-0 mt-4">
                        <div class="img-photo">
                            <a href="<?=base_url('img/foto_4.jpg')?>" data-lightbox="image-1">
                                <img src="./img/foto_4.jpg" alt="foto_4">
                            </a>
                        </div>
                    </div>
                    <div class="m-auto mt-lg-0 mt-4">
                        <div class="img-photo">
                            <a href="<?=base_url('img/foto_5.jpg')?>" data-lightbox="image-1">
                                <img src="./img/foto_5.jpg" alt="foto_5">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-details">
                <div class="box-address-details p-3">
                    <div class="img-icon">
                        <img src="img/girasoles.png" alt="">
                    </div>
                    <div class="title-address text-center">
                        Donde y Cuando
                    </div>
                    <div class="address d-flex flex-column align-items-center">
                        <div class="mt-4">
                            <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 512 512" width="35px" height="40px" fill="#CAB164"><path d="M378.7 32H133.3L256 182.7L378.7 32zM512 192l-107.4-141.3L289.6 192H512zM107.4 50.67L0 192h222.4L107.4 50.67zM244.3 474.9C247.3 478.2 251.6 480 256 480s8.653-1.828 11.67-5.062L510.6 224H1.365L244.3 474.9z"></path></svg>
                        </div>
                        <div class="title-text-address mt-4">
                            Ceremonia y Recepción
                        </div>
                        <div class="text-address text-center">
                            <div class="text-break">Sábado, 07 de Octubre, 2023</div>
                            <div class="text-break">15:00 PM</div>
                            <div class="text-break">Santiago Sacatepéquez, Guatemala</div>
                            <div class="text-break">La Finca Romero</div>
                        </div>
                        <div class="box-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d964.9624079207264!2d-90.6686508!3d14.6644735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85897579296a5875%3A0xfcada9a102f82204!2sLa%20Finca%20Romero!5e0!3m2!1ses-419!2sgt!4v1689445671456!5m2!1ses-419!2sgt"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="box-additional-information p-4">
                        <div class="img-icon">
                            <img src="img/girasoles.png" alt="">
                        </div>
                        <div class="title-address text-center">
                            Información Adicional
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center box-text-information" >
                                <div class="text-center mb-5">
                                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px" fill="#CAB164"><path d="M480 0C497.7 0 512 14.33 512 32C512 49.67 497.7 64 480 64V448C497.7 448 512 462.3 512 480C512 497.7 497.7 512 480 512H304V448H208V512H32C14.33 512 0 497.7 0 480C0 462.3 14.33 448 32 448V64C14.33 64 0 49.67 0 32C0 14.33 14.33 0 32 0H480zM112 96C103.2 96 96 103.2 96 112V144C96 152.8 103.2 160 112 160H144C152.8 160 160 152.8 160 144V112C160 103.2 152.8 96 144 96H112zM224 144C224 152.8 231.2 160 240 160H272C280.8 160 288 152.8 288 144V112C288 103.2 280.8 96 272 96H240C231.2 96 224 103.2 224 112V144zM368 96C359.2 96 352 103.2 352 112V144C352 152.8 359.2 160 368 160H400C408.8 160 416 152.8 416 144V112C416 103.2 408.8 96 400 96H368zM96 240C96 248.8 103.2 256 112 256H144C152.8 256 160 248.8 160 240V208C160 199.2 152.8 192 144 192H112C103.2 192 96 199.2 96 208V240zM240 192C231.2 192 224 199.2 224 208V240C224 248.8 231.2 256 240 256H272C280.8 256 288 248.8 288 240V208C288 199.2 280.8 192 272 192H240zM352 240C352 248.8 359.2 256 368 256H400C408.8 256 416 248.8 416 240V208C416 199.2 408.8 192 400 192H368C359.2 192 352 199.2 352 208V240zM256 288C211.2 288 173.5 318.7 162.1 360.2C159.7 373.1 170.7 384 184 384H328C341.3 384 352.3 373.1 349 360.2C338.5 318.7 300.8 288 256 288z"></path></svg>
                                </div>
                                <div class="text-subtitle-information mb-5">
                                    Ubicación de mesas
                                </div>
                                <div class="text-information">
                                    <div class="text-break">Puedes sentarte en donde quieras, disfruta de nuestra boda.</div>
                                </div>
                                <div class="box-line" >
                                    <div class="line-2"></div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center box-text-information" >
                                <div class="text-center mb-5">
                                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 576 512" width="30px" fill="#CAB164"><path d="M576 136c0 22.09-17.91 40-40 40c-.248 0-.4551-.1266-.7031-.1305l-50.52 277.9C482 468.9 468.8 480 453.3 480H122.7c-15.46 0-28.72-11.06-31.48-26.27L40.71 175.9C40.46 175.9 40.25 176 39.1 176c-22.09 0-40-17.91-40-40S17.91 96 39.1 96s40 17.91 40 40c0 8.998-3.521 16.89-8.537 23.57l89.63 71.7c15.91 12.73 39.5 7.544 48.61-10.68l57.6-115.2C255.1 98.34 247.1 86.34 247.1 72C247.1 49.91 265.9 32 288 32s39.1 17.91 39.1 40c0 14.34-7.963 26.34-19.3 33.4l57.6 115.2c9.111 18.22 32.71 23.4 48.61 10.68l89.63-71.7C499.5 152.9 496 144.1 496 136C496 113.9 513.9 96 536 96S576 113.9 576 136z"></path></svg>                                
                                </div>
                                <div class="text-subtitle-information mb-5">
                                    ¿Qué ponerse?
                                </div>
                                <div class="text-information">
                                    <div class="text-break">Para nosotros es un día muy especial, nos encantaría que lleves lo que más te guste, no olvides que es un evento formal.</div>
                                </div>
                                <div class="box-line" >
                                    <div class="line-2"></div>
                                </div>
                                
                            </div>
                            <div class="col-md-4 text-center box-text-information" >
                                <div class="text-center mb-5">
                                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 640 512" width="30px" fill="#CAB164"><path d="M640 320V368C640 385.7 625.7 400 608 400H574.7C567.1 445.4 527.6 480 480 480C432.4 480 392.9 445.4 385.3 400H254.7C247.1 445.4 207.6 480 160 480C112.4 480 72.94 445.4 65.33 400H32C14.33 400 0 385.7 0 368V256C0 228.9 16.81 205.8 40.56 196.4L82.2 92.35C96.78 55.9 132.1 32 171.3 32H353.2C382.4 32 409.1 45.26 428.2 68.03L528.2 193C591.2 200.1 640 254.8 640 319.1V320zM171.3 96C158.2 96 146.5 103.1 141.6 116.1L111.3 192H224V96H171.3zM272 192H445.4L378.2 108C372.2 100.4 362.1 96 353.2 96H272V192zM525.3 400C527 394.1 528 389.6 528 384C528 357.5 506.5 336 480 336C453.5 336 432 357.5 432 384C432 389.6 432.1 394.1 434.7 400C441.3 418.6 459.1 432 480 432C500.9 432 518.7 418.6 525.3 400zM205.3 400C207 394.1 208 389.6 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 389.6 112.1 394.1 114.7 400C121.3 418.6 139.1 432 160 432C180.9 432 198.7 418.6 205.3 400z"></path></svg>
                                </div>
                                <div class="text-subtitle-information mb-5">
                                    Areá de parqueo
                                </div>
                                <div class="text-information">
                                    <div class="text-break">Parqueo en la ceremonia encontrarpas en los alrededores del lugar, parqueo en la recepción esta disponible para 100 vehiculos.</div>
                                </div>
                                <div class="box-line">
                                    <div class="line-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">

            </div>
        </div>
        <script>
            const fadeButton = document.getElementById('fade-button');
            const fadeContent = document.querySelector('.start-invitation');
            const fadeScroll = document.querySelector('body');

            fadeButton.addEventListener('click', () => {
                fadeContent.classList.add('out');
                fadeScroll.classList.remove('hidden');
            });

            // Fecha objetivo (Año, Mes (0-11), Día, Hora, Minuto, Segundo)
            const targetDate = new Date(2023, 9, 7, 15, 0, 0);

            function updateCountdown() {
                const now = new Date().getTime();
                const timeRemaining = targetDate - now;

                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                document.getElementById("days").textContent = days.toString().padStart(2, '0');
                document.getElementById("hours").textContent = hours.toString().padStart(2, '0');
                document.getElementById("minutes").textContent = minutes.toString().padStart(2, '0');
                document.getElementById("seconds").textContent = seconds.toString().padStart(2, '0');
            }

            // Actualizar la cuenta regresiva cada segundo
            setInterval(updateCountdown, 1000);

            // Actualizar la cuenta regresiva inmediatamente al cargar la página
            updateCountdown();
            //Este código establece una fecha objetivo (en este caso, el 1 de enero de 2024) y luego calcula la diferencia entre la fecha actual y la fecha objetivo en días, horas, minutos y segundos. Luego, actualiza los elementos HTML correspondientes con estos valores y utiliza setInterval para actualizar la cuenta regresiva cada segundo.

            //Puedes ajustar la fecha y el evento objetivo cambiando los valores en targetDate según tus necesidade



            var app = new Vue({
                el: '#app',
                data: {
                    asistencia: false,
                },
                methods: {
                    confirmarAsistencia: function(){

                            var formdata = new FormData(this.$refs.datos);
                            axios.post('<?=base_url('welcome/asistenia')?>', formdata)
                            .then(function (response) {
                                if(response.data.status == 'success'){
                                    this.createCookie('asistencia', 'true', 90);
                                }else{
                                    console.log('error');
                                }
                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                        },
                        createCookie: function (name, value, days) {
                            var expires = "";
                            if (days) {
                                var date = new Date();
                                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                expires = "; expires=" + date.toUTCString();
                            }
                            document.cookie = name + "=" + (value || "") + expires + "; path=/";
                        },
                        getCookie: function (name) {
                            var nameEQ = name + "=";
                            var ca = document.cookie.split(';');
                            for(var i = 0; i < ca.length; i++) {
                                var c = ca[i];
                                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
                            }
                            return null;
                        },
                        googleCalendar: function(){
                            const eventTitle = "Boda de Marjorie y Moisés";
                            const eventLocation = "La Finca Romero, M87J+RFG, Santiago Sacatepéquez, Guatemala";
                            const eventStartDate = "20231007T150000";
                            const eventEndDate = "20231007T190000";
                            const googleCalendarLink = `https://www.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(eventTitle)}&dates=${encodeURIComponent(eventStartDate)}/${encodeURIComponent(eventEndDate)}&location=${encodeURIComponent(eventLocation)}`;
                            window.open(googleCalendarLink);
                        }

                },
                mounted: function(){
                    if(this.getCookie('asistencia')){
                        this.asistencia = true;
                    }else{
                        this.asistencia = false;
                    }
                }
            })

        </script>
        
    </body>
</html>