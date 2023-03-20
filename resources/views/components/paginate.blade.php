@if ($paginator->hasPages())

    <!-- Pagination -->
    <ul class="pagination">
        <li><a href="{{ $paginator->previousPageUrl() }}" class="previous">Назад</a></li>
        <li><a href="{{ $paginator->nextPageUrl() }}" class="next">Вперёд</a></li>
    </ul>

@endif
