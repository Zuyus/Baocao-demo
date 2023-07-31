
<div class="row custom-pagination">
    @if ($paginator->hasPages())
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                @if ($paginator->onFirstPage())
                    <li class="pagination-page disabled">
                        <a class="pagination-link" href="#" tabindex="-1">
                            <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
                        </a>
                    </li>
                @else
                    <li class="pagination-page"><a class="pagination-link" href="{{ $paginator->previousPageUrl() }}">
                            <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
                        </a>
                    </li>

                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="pagination-page disabled">{{ $element }}</li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="pagination-page active">
                                    <a class="pagination-link ">{{ $page }}</a>
                                </li>
                            @else
                                <li class="pagination-page">
                                    <a class="pagination-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="pagination-page">
                        <a class="pagination-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                            <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
                        </a>
                    </li>
                @else
                    <li class="pagination-page disabled">
                        <a class="pagination-link " href="#">
                            <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
