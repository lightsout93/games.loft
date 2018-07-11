@if ($paginator->hasPages())
    <ul class="page-nav">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled page-nav__item"><a href="#" class="page-nav__item__link"><i
                            class="fa fa-angle-double-left"></i></a></li>
        @else
            <li class="disabled page-nav__item"><a href="{{ $paginator->previousPageUrl() }}"
                                                   class="page-nav__item__link"><i
                            class="fa fa-angle-double-left"></i></a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled page-nav__item"><a href="#" class="page-nav__item__link">{{ $element }}</a></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active page-nav__item"><a href="#" class="page-nav__item__link">{{ $page }}</a></li>
                    @else
                        <li class="page-nav__item"><a href="{{ $url }}" class="page-nav__item__link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-nav__item"><a href="{{ $paginator->nextPageUrl() }}" class="page-nav__item__link"><i
                            class="fa fa-angle-double-right"></i></a></li>
        @else
            <li class="disabled page-nav__item"><a href="#" class="page-nav__item__link"><i
                            class="fa fa-angle-double-right"></i></a></li>
        @endif
    </ul>
@endif
