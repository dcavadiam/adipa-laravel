<section class="catalog" id="cursos">
    <div class="catalog__container">
        <h2 class="catalog__title">Catálogo de Cursos</h2>

        <!-- Pills de categorías -->
        <div class="catalog__filters">
            <button class="filter-pill filter-pill--active" data-category="Todos">Todos</button>
            <button class="filter-pill" data-category="Psicología Clínica">Psicología Clínica</button>
            <button class="filter-pill" data-category="Psicología Organizacional">Psicología Organizacional</button>
            <button class="filter-pill" data-category="Neurociencias">Neurociencias</button>
        </div>

        <!-- Grilla -->
        <div class="catalog__grid" id="courses-grid">
            @foreach($courses as $course)
            @php
            $discountedPrice = $course['discount'] > 0
            ? $course['originalPrice'] - ($course['originalPrice'] * $course['discount'] / 100)
            : $course['originalPrice'];

            $modalityConfig = [
            'Online' => ['class' => 'badge--online', 'icon' => '🖥'],
            'En Vivo' => ['class' => 'badge--live', 'icon' => '🎥'],
            'Presencial' => ['class' => 'badge--presencial', 'icon' => '📍'],
            ];

            $modality = $modalityConfig[$course['modality']];
            @endphp
            <!-- Card de curso -->
            @include('components.course-card', ['course' => $course])
            @endforeach
        </div>
    </div>
</section>