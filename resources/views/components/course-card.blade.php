@props(['course'])

@php

$discountedPrice = $course['discount'] > 0
? $course['originalPrice'] - ($course['originalPrice'] * $course['discount'] / 100)
: $course['originalPrice'];

$modalityConfig = [
'Online' => ['class' => 'badge--online', 'icon' => 'icons.monitor'],
'En Vivo' => ['class' => 'badge--live', 'icon' => 'icons.video'],
'Presencial' => ['class' => 'badge--presencial', 'icon' => 'icons.map-pin'],
];

$modality = $modalityConfig[$course['modality']];

$finalPrice = discountedPrice($course['originalPrice'], $course['discount']);

@endphp

<article class="course-card" data-category="{{ $course['category'] }}">
    <div class="course-card__image-wrap">
        <!-- Imagen del curso -->
        <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}" class="course-card__image">
        <!-- Badge de la modalidad -->
        <span class="badge {{ $modality['class'] }}">
            <x-dynamic-component :component="$modality['icon']" class="badge__icon" />
            {{ $course['modality'] }}
        </span>
    </div>

    <div class="course-card__body">
        <!-- Información del curso -->
        <div class="course-card__info">
            <!-- Título del curso -->
            <h3 class="course-card__title">{{ $course['title'] }}</h3>
            <!-- Instructor del curso -->
            <p class="course-card__instructor">Por: {{ $course['instructor'] }}</p>
            <!-- Fecha de inicio del curso -->
            <div class="course-card__date">
                <x-icons.calentar class="course-card__date-icon" />
                <span>Inicio: {{ $course['startDate'] }}</span>
            </div>

            @if($course['discount'] > 0)
            <!-- Precio con descuento del curso -->
            <span class="course-card__price">{{ formatPrice($finalPrice) }}</span>
            <!-- Precio original del curso -->
            <div class="course-card__original-price">
                <span class="course-card__price-strike">{{ formatPrice($course['originalPrice']) }}</span>
                <span class="course-card__savings">
                    Ahorro: {{ formatPrice($course['originalPrice'] - $finalPrice) }}
                </span>
            </div>
            @else
            <!-- Precio sin descuento del curso -->
            <span class="course-card__price">{{ formatPrice($course['originalPrice']) }}</span>
            @endif
        </div>

        <button class="course-card__btn">Ver Curso</button>
    </div>
</article>