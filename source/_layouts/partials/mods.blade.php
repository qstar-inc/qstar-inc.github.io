<div class="d-flex mod-base m-1 p-2 gap-2 rounded-3">
    {{-- <div class="mod-image-div"> --}}
    <img class="mod-image rounded float-start" src="https://modscontent.paradox-interactive.com/cities_skylines_2/{{ $code }}/content/cover.jpg" width="200px" />
    {{-- </div> --}}
    <div class="mod-text d-flex flex-column">
        <h2 class="fs-2">{{ $name }}</h2>
        <p class="fs-4 mb-auto">{{ $desc }}</p>
        <div class="d-flex flex-wrap gap-2 mt-auto p-2">
            <a class="fs-3" href="https://mods.paradoxplaza.com/mods/{{ $id }}/Windows" target="_blank"><img class="mod-text-icon" src="{{ $page->images }}/pdx_mods.png" /></a>
            <a class="fs-3" href="https://skyve-mod.com/app/mods/{{ $id }}"><img class="mod-text-icon" src="{{ $page->images }}/skyve.png" /></a>
        </div>
    </div>
</div>
