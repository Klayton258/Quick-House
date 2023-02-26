<div>
    <form action="{{route('house.search')}}">
        <div class="input-group rounded mb-3">
            <input type="text" class="form-control rounded"
                aria-label="Search" aria-describedby="search-addon" name="q"  placeholder="Search for items..."  />
            <span class="input-group-text border-0" id="search-addon">
                <i class="bi bi-search"></i>
            </span>
        </div>
    </form>
</div>
