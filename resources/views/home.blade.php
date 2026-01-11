@extends('layouts.site')

@section('content')

<section id="sobre" class="py-5 mt-lg-5 fade-in">
    <h2 class="d-lg-none fw-bold mb-4" data-i18n="title-sobre"></h2>

    <p class="text-justify opacity-75" data-i18n="sobre-0"></p>
    <p class="text-justify opacity-75" data-i18n="sobre-1"></p>
    <p class="text-justify opacity-75" data-i18n="sobre-2"></p>
</section>

<section id="carreira" class="py-5 fade-in">
    <h2 class="d-lg-none fw-bold mb-4" data-i18n="title-experiencia"></h2>

    <div class="experience-group mb-5">
        <div class="row mb-5 experience-item">
            <header class="col-md-3 opacity-50 small text-uppercase fw-bold pt-1" data-i18n="exp-0-periodo"></header>

            <div class="col-md-9">
                <h4 class="h5 fw-bold text-color" data-i18n="exp-0-cargo"></h4>
                <p class="small opacity-75 mb-3" data-i18n="exp-0-local"></p>
                <p class="opacity-75" data-i18n="exp-0-descricao"></p>

                <div class="d-flex flex-wrap gap-2 mt-3">
                    <span class="badge-tech">PHP</span>
                    <span class="badge-tech">Git</span>
                    <span class="badge-tech">PostgreSQL</span>
                    <span class="badge-tech">Laravel</span>
                </div>
            </div>
        </div>

        <div class="row mb-5 experience-item">
            <header class="col-md-3 opacity-50 small text-uppercase fw-bold pt-1" data-i18n="exp-1-periodo"></header>

            <div class="col-md-9">
                <h4 class="h5 fw-bold text-color" data-i18n="exp-1-cargo"></h4>
                <p class="small opacity-75 mb-3" data-i18n="exp-1-local"></p>

                <ul class="opacity-75 list-unstyled">
                    <li data-i18n="exp-1-item-0"></li>
                    <li data-i18n="exp-1-item-1"></li>
                    <li data-i18n="exp-1-item-2"></li>
                </ul>

                <div class="d-flex flex-wrap gap-2 mt-2">
                    <span class="badge-tech">PHP</span>
                    <span class="badge-tech">jQuery</span>
                    <span class="badge-tech">PostgreSQL</span>
                    <span class="badge-tech">Git</span>
                </div>
            </div>
        </div>

        <div class="row experience-item">
            <header class="col-md-3 opacity-50 small text-uppercase fw-bold pt-1" data-i18n="exp-2-periodo"></header>

            <div class="col-md-9">
                <h4 class="h5 fw-bold text-color" data-i18n="exp-2-cargo"></h4>
                <p class="small opacity-75 mb-3" data-i18n="exp-2-local"></p>
                <p class="opacity-75" data-i18n="exp-2-descricao"></p>

                <div class="d-flex flex-wrap gap-2 mt-2">
                    <span class="badge-tech">PHP</span>
                    <span class="badge-tech">Git</span>
                </div>
            </div>
        </div>

        <div class="floating-actions">
            <button id="theme-toggle" class="btn rounded-circle d-flex align-items-center justify-content-center">
                <i id="theme-icon" class="bi bi-sun-fill"></i>
            </button>

            <button id="lang-toggle" class="btn rounded-circle d-flex align-items-center justify-content-center"
                data-language="pt-br">
                <span class="fi fi-us fis"></span>
            </button>
        </div>

    </div>
</section>

<section id="contato" class="py-5 mb-5 d-flex flex-column align-items-center text-center">
    <p data-i18n="contato-texto" class="mb-3"></p>

    <a href="mailto:jaovictor.mota@gmail.com" class="btn btn-small btn-outline-info" data-i18n="contato-botao"></a>
</section>

@endsection