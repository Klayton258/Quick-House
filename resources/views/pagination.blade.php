{{-- <button wire:click.prevent='previousPage'></button>
<button wire:click.prevent='nextPage'></button> --}}
{{-- <div class="row">
    <div class="col-md-12 text-center">
      <div class="site-pagination">
        <a href="#" wire:click.prevent.prevent='previousPage'>{{$houses->getPage()}}</a>
        <a href="#" wire:click.prevent.prevent='nextPage'></a>
        <span>...</span>
        <a href="#">10</a>
      </div>
    </div>
  </div> --}}

  <div class="col-md-12 text-center">
    <div class="site-pagination">
        @if ($paginator->hasPages())
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span>&laquo;</span>
            @else
                <a href="#" wire:click.prevent="gotoPage({{ $paginator->currentPage() - 1 }})">&laquo;</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span>{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active" href="#" wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a>
                        @else
                            <a href="#" wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="#" wire:click.prevent="gotoPage({{ $paginator->currentPage() + 1 }})">&raquo;</a>
            @else
                <span>&raquo;</span>
            @endif
        @endif
    </div>
</div>

