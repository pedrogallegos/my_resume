@extends('layouts.app')

@section('title', 'Pedro Gallegos Garcilazo - CV Online')

@section('content')
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4" data-aos="fade-right" data-aos-delay="100"> {{-- Cambiado text-black a text-white para mejor contraste con el gradiente --}}
                            <div class="text-uppercase">Desarrollo &middot; Web &middot; Laravel</div>
                        </div>
                        <div class="fs-3 fw-light text-muted" data-aos="fade-right" data-aos-delay="200">Hola, soy</div>
                        <h1 class="display-3 fw-bolder mb-5" data-aos="fade-right" data-aos-delay="300">
                            <span class="text-gradient d-inline">Pedro Gallegos Garcilazo</span>
                        </h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3" data-aos="fade-up" data-aos-delay="400">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="#resume">Ver Currículum</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="#projects">Ver Proyectos</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0" data-aos="zoom-in" data-aos-delay="500">
                        <div class="profile bg-gradient-primary-to-secondary rounded-circle">`
                                <img class="profile-img" src="{{ asset('images/Pedro_CV.png') }}" alt="Pedro_CV" />
                            {{-- SVG Dots: No incluidos aquí para simplificar. Si los quieres, deberías copiar el código SVG completo de index.html del tema y pegarlo aquí dentro de divs con las clases dots-X --}}
                            {{-- Si usas los dots, recuerda ajustar su CSS en resources/css/styles.css para que sean estables con el zoom --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5" id="resume">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0" data-aos="fade-up"><span class="text-gradient d-inline">Currículum</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <section data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0 text-custom-brand">Experiencia</h2> {{-- text-custom-brand se puede quitar si no se usa para experiencia --}}
                            <a class="btn btn-primary px-4 py-3" href="#!">
                                <div class="d-inline-block bi bi-download me-2"></div>
                                Descargar CV
                            </a>
                        </div>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2 text-custom-brand-2">2019 - Presente</div> {{-- text-custom-brand-2 se puede quitar --}}
                                            <div class="small fw-bolder">Fullstack Developer Jr</div>
                                            <div class="small text-muted">Jonitech</div>
                                            <div class="small text-muted">México</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 bg-light p-4 rounded-4"> {{-- Se agregó bg-light p-4 rounded-4 a este div también --}}
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="bi bi-chevron-right text-success me-1"></i>Desarrollador Backend Jr. con experiencia en Node.js y Next.js.</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i>Especializado en la creación de APIs RESTful y GraphQL.</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i>Cuento con sólidos conocimientos en MongoDB</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i>Arquitectura hexagonal</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i>Autenticación con JWT</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i>Control de versiones con Git</li>
                                            <li><strong>Busco aplicar mi pasión por el desarrollo web y mis habilidades de colaboración en un entorno profesional dinámico y de aprendizaje continuo.</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2 text-custom-brand-2">2019 - 2025</div> {{-- text-custom-brand-2 se puede quitar --}}
                                            <div class="small fw-bolder">Gerente Administrativo</div>
                                            <div class="small text-muted">Lacore Logistics</div>
                                            <div class="small text-muted">México</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 bg-light p-4 rounded-4"> {{-- Se agregó bg-light p-4 rounded-4 a este div también --}}
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="bi bi-chevron-right text-success me-1"></i> Diseño e implementación de mejoras en procesos operativos, resultando en una optimización significativa de los tiempos de ejecución.</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i> Gestión integral de la relación con proveedores, clientes y colaboradores, asegurando una comunicación fluida y la satisfacción de sus necesidades.</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i></i> Administración y control riguroso de los gastos de caja chica, incluyendo la elaboración de reportes y la conciliación de fondos.</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i></i> Control y registro sistemático de todas las entradas y salidas de mercancía del almacén, manteniendo la precisión del inventario.</li>
                                            <li><i class="bi bi-chevron-right text-success me-1"></i></i> Supervisión de la rotación de mercancías para minimizar obsolescencias y pérdidas, y elaboración de informes periódicos de inventario para la toma de decisiones.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-secondary fw-bolder mb-4 text-custom-brand">Educación</h2> {{-- text-custom-brand se puede quitar --}}
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2 text-custom-brand-2">2020 - Presente</div> {{-- text-custom-brand-2 se puede quitar --}}
                                            <div class="mb-2">
                                                <div class="small fw-bolder">Universidad Virtual del Estado de Guanajuato</div>
                                                <div class="small text-muted">México</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">Ingeniería</div>
                                                <div class="small text-muted">Sistemas computacionales</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>
                                            <ul>
                                                <li><i class="bi bi-chevron-right text-success me-1"></i>Gestiona proyectos informáticos innovadores que aporten a la mejora continua de los procesos de las organizaciones, buscando la sustentabilidad de la misma en un contexto globalizado.</li>
                                                <li><i class="bi bi-chevron-right text-success me-1"></i>Diseña y modela sistemas informáticos, mediante el uso de conocimiento matemático, lógico y estructurado.</li>
                                                <li><i class="bi bi-chevron-right text-success me-1"></i>Diseña, configura y administra redes de computadora, obedeciendo los protocolos y estándares vigentes.</li>
                                                <li><i class="bi bi-chevron-right text-success me-1"></i>Desarrolla, implementa y administra software para ofrecer soluciones, que ayuden a mejorar la productividad y competitividad en las organizaciones.</li>
                                                <li><i class="bi bi-chevron-right text-success me-1"></i>Aplica innovaciones informáticas para mejorar y asegurar la calidad en los diferentes procesos, productos y servicios en una organización.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="pb-5"></div>
                    <section data-aos="fade-up" data-aos-delay="300">
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Habilidades Profesionales</span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Desarrollo Web</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Análisis Estadístico</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Marketing Digital</div></div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Seguridad de Redes</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Diseño de Interfaz de Usuario</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Gestión de Proyectos</div></div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="feature bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Lenguajes y Tecnologías</span></h3>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML5</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS3</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-md-3">
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP (Laravel)</div></div>
                                        <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MySQL / SQLite</div></div>
                                        <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Git / GitHub</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="py-5" id="projects">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0" data-aos="fade-up"><span class="text-gradient d-inline">Proyectos</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5" data-aos="fade-right">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Gestión de clientes</h2>
                                        <p>Projecto colaborativo con una comunidad de desarrolladores juniors, lo cual reforzamos conocimientos básicos. Utilizando tecnologías como Node.js y Express.Js </p>
                                    </div>
                                    {{-- Reemplaza con la imagen de tu proyecto si tienes una --}}
                                    <img class="img-fluid" src="{{ asset('images/Node.png') }}" alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="card overflow-hidden shadow rounded-4 border-0" data-aos="fade-left">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Project Survey System</h2>
                                        <p>Desarrollo de una plataforma versátil para encuestas, preguntas y respuestas, capaz de recopilar información y opiniones de diversos sectores. Esta plataforma incluirá un sistema de gestión de contenido CMS</p>
                                    </div>
                                    {{-- Reemplaza con la imagen de tu proyecto si tienes una --}}
                                    <img class="img-fluid" src="{{ asset('images/Laravel.png') }}" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-gradient-primary-to-secondary text-white" id="contact">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">¿Hablamos?</h2>
                    <a class="btn btn-primary px-4 py-3"" href="mailto:pedrogallegos543@gmail.com">Contactame</a>
                </div>
            </div>
        </section>
    @endsection