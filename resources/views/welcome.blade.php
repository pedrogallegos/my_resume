@extends('layouts.app')

@section('title', 'Mi CV - Pedro Gallegos Garcilazo')

@section('content')
    <div class="row">
        <div class="col-md-4">
            {{-- Sección de Información Personal y Contacto --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Información Personal</h4>
                    <img src="{{ asset('images/Pedro_CV.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Tu Foto de Perfil">
                    <p><strong>Nombre:</strong> Pedro Gallegos Garcilazo</p>
                    <p>
                        <strong>Email:</strong>
                        <a href="mailto:pedrogallegos543@gmail.com">
                            pedrogallegos543@gmail.com <i class="fas fa-envelope"></i> {{-- Icono de email --}}
                        </a>
                    </p>
                    <p>
                        <strong>Teléfono:</strong>
                        <a href="https://wa.me/+525580318995" target="_blank"> {{-- Reemplaza XXXXXXXXXXXX con tu número de teléfono, incluyendo el código de país sin el "+" --}}
                            +52 558 031 8995 <i class="fab fa-whatsapp"></i> {{-- Icono de WhatsApp --}}
                        </a>
                    </p>
                    <p>
                        <strong>LinkedIn:</strong>
                        <a href="https://www.linkedin.com/in/pedro-gallegos-garcilazo-9a58311a7" target="_blank">
                            <i class="fab fa-linkedin fa-2x"></i> {{-- Icono de LinkedIn --}}
                        </a>
                    </p>
                    <p>
                        <strong>GitHub:</strong>
                        <a href="https://github.com/pedrogallegos" target="_blank">
                            <i class="fab fa-github fa-2x"></i> {{-- Icono de GitHub --}}
                        </a>
                    </p>
                </div>
            </div>

            {{-- Resto de tu CV --}}
            {{-- Sección de Habilidades --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Habilidades</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Laravel</li>
                        <li class="list-group-item">PHP</li>
                        <li class="list-group-item">Bootstrap</li>
                        <li class="list-group-item">JavaScript</li>
                        <li class="list-group-item">Base de Datos (MySQL, PostgreSQL)</li>
                        {{-- Agrega más habilidades aquí --}}
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            {{-- Sección de Resumen/Perfil Profesional --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Perfil Profesional</h4>
                    <p class="card-text">
                        Soy un desarrollador web con experiencia en Laravel, PHP y Bootstrap, buscando oportunidades para aplicar mis habilidades en proyectos innovadores. Apasionado por aprender nuevas tecnologías y crear soluciones eficientes.
                    </p>
                </div>
            </div>

            {{-- Sección de Experiencia Laboral --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Experiencia Laboral</h4>
                    <p><strong>Puesto de Trabajo</strong> en Nombre de la Empresa (Mes Año - Mes Año)</p>
                    <ul>
                        <li>Responsabilidad 1: Descripción de tu rol y logros.</li>
                        <li>Responsabilidad 2: Utiliza verbos de acción.</li>
                        <li>Responsabilidad 3: Cuantifica logros cuando sea posible.</li>
                    </ul>
                    <hr>
                    <p><strong>Otro Puesto de Trabajo</strong> en Otra Empresa (Mes Año - Mes Año)</p>
                    <ul>
                        <li>Descripción de tu rol y logros.</li>
                    </ul>
                    {{-- Agrega más experiencias --}}
                </div>
            </div>

            {{-- Sección de Educación --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Educación</h4>
                    <p><strong>Título / Grado</strong> - Nombre de la Institución (Año de Inicio - Año de Fin)</p>
                    <ul>
                        <li>Detalles relevantes del curso o proyecto final.</li>
                    </ul>
                    {{-- Agrega más educación --}}
                </div>
            </div>

            {{-- Sección de Proyectos (Opcional) --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Proyectos</h4>
                    <p><strong>Nombre del Proyecto</strong> - Descripción breve del proyecto. <a href="#" target="_blank">Enlace al Proyecto</a></p>
                    <ul>
                        <li>Tecnologías utilizadas: Laravel, Bootstrap, etc.</li>
                        <li>Tu contribución y logros.</li>
                    </ul>
                    {{-- Agrega más proyectos --}}
                </div>
            </div>

            {{-- Sección de Contacto (Opcional, si no usas Livewire por ahora) --}}
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contacto</h4>
                    <p>Si deseas contactarme, envíame un correo electrónico a: <a href="mailto:tu.email@ejemplo.com">tu.email@ejemplo.com</a></p>
                    {{-- Más adelante, aquí irá un formulario de contacto dinámico --}}
                </div>
            </div>
        </div>
    </div>
@endsection