@extends('_layouts.main')

@section('body')
    <div id="body-text" class="d-flex flex-column">
        <h1 class="fs-1 text-center">Hi there! Welcome to my little corner on the internet.</h1>
        <p class="fs-4 text-center">My name is Qoushik. I spend my time bringing my ideas to 'life' digitally, and no I don't mean AI.
            <br />I build things that make my everyday experiences a little more enjoyable.
            <br />Whether it's a site for my business or a mod for the games I play or just making some discoveries, I'm always curious about how the ball rolls.
            <br />Thanks for stopping by and feel free to explore or reach out.
        </p>
        <br />
        <br />
        <hr class="my-4" />
        <div id="icons">
            <h2 class="h2 fs-1 text-center">Things I work with</h2>
            <div class="d-flex flex-wrap mb-4 mx-4 gap-4 justify-content-center">
                <img class="sm" src="https://www.python.org/static/community_logos/python-logo-inkscape.svg" />
                <img class="sm" src="https://www.php.net/images/logos/new-php-logo.png" />
                <img class="sm" src="https://raw.githubusercontent.com/laravel/art/refs/heads/master/logo-lockup/4%20PNG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.png" />
                <img class="sm" src="https://upload.wikimedia.org/wikipedia/commons/3/34/Microsoft_Office_Excel_%282019%E2%80%93present%29.svg" />
                <img class="sm"
                    src="https://camo.githubusercontent.com/69545b92555ae5b2ca37c7ad5dfa5f60d72d24c70341b05f819a40d5523a3181/68747470733a2f2f676574636f6d706f7365722e6f72672f696d672f6c6f676f2d636f6d706f7365722d7472616e73706172656e742e706e67" />
                <img class="sm" src="https://pages.github.com/images/logo.svg" />
                <img class="sm" src="https://laravelnews.s3.amazonaws.com/images/jigsaw-leader-1655807964.png" />
                <img class="sm" src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png" />
                <img class="sm" src="https://upload.wikimedia.org/wikipedia/commons/d/d2/C_Sharp_Logo_2023.svg" />
                <img class="sm" src="https://nodejs.org/static/logos/nodejsLight.svg" />
                <img class="sm" src="https://raw.githubusercontent.com/npm/logos/refs/heads/master/npm%20logo/npm-logo-red.svg" />
                <img class="sm" src="https://visualstudio.microsoft.com/wp-content/uploads/2019/09/vs-code-responsive-01-1.png" />
                <img class="sm" src="https://visualstudio.microsoft.com/wp-content/uploads/2021/10/Product-Icon.svg" />
                <img class="sm" src="https://static.cdnlogo.com/logos/m/10/mysql.svg" />
                <img class="sm" src="https://mariadb.com/wp-content/uploads/2019/11/mariadb-logo_white-transparent.png" />
            </div>
        </div>
        <hr class="my-4" />
        <h2 class="h2 fs-1 text-center">Stuff I made</h2>
        <div id="modding-bot" class="my-2">
            <h3 class="h3 fs-2 text-center">StarQ Modding Bot</h3>
            <div class="d-flex flex-wrap flex-column mb-4 gap-2 mx-4 justify-content-center">
                <img class="site-image" style="width: 35vw !important;" src="{{ $page->images }}/site/starq-bot.png" />
                <p class="fs-4 text-center">Discord Bot tailored for usage around Cities: Skylines II mods and related contents.</p>
                <a class="site-btn btn btn-info text-dark fs-3" href="https://discord.com/application-directory/1138819493045489694" target="_blank">Add the Bot to your Discord Server</a>
            </div>
        </div>
        <div id="sites" class="my-2">
            <h3 class="h3 fs-2 text-center">Sites</h3>
            <div class="d-flex flex-wrap flex-column mb-4 gap-2 mx-4 justify-content-center">
                <div class="d-flex flex-wrap flex-column mb-4 gap-2 mx-4 justify-content-center">
                    <img class="site-image" src="{{ $page->images }}/site/skkm-staffhub.png" />
                    <p class="fs-4 text-center">CRM like site tailored for the business.</p>
                    <a class="site-btn btn btn-info text-dark fs-3" href="https://sk-km.com.bd/" target="_blank">SK-KM Business Site</a>
                </div>
                <div class="d-flex flex-wrap flex-column mb-4 gap-2 mx-4 justify-content-center">
                    <img class="site-image" src="{{ $page->images }}/site/qstar-github.png" />
                    <p class="fs-4 text-center">You don't need a description for this.</p>
                    <a class="site-btn btn btn-info text-dark fs-3" href="https://qstar-inc.github.io/" target="_blank">This Site</a>
                </div>
            </div>
            <h4 class="h4 fs-2 text-center">Cities: Skylines II</h4>
            <div class="d-flex flex-wrap flex-column mb-2 gap-2 mx-4 justify-content-center">
                <div class="d-flex flex-wrap flex-column mb-4 gap-2 mx-4 justify-content-center">
                    <img class="site-image" src="{{ $page->images }}/site/assetDatbase.png" />
                    <p class="fs-4 text-center">A complete asset database for all vanilla, DLC and modded assets.</p>
                    <a class="site-btn btn btn-info text-dark fs-3" href="https://qstar-inc.github.io/cities2-AssetDatabase/" target="_blank">Asset Database</a>
                </div>
                <div class="d-flex flex-wrap flex-row gap-2 mx-4 justify-content-center">
                    <div><a class="btn btn-info text-dark fs-3" href="https://qstar-inc.github.io/cities2-PrefabMaker/" target="_blank">Prefab Maker</a></div>
                    <div><a class="btn btn-info text-dark fs-3" href="https://qstar-inc.github.io/cities2-GUID-Database/" target="_blank">GUID Database</a></div>
                    <div><a class="btn btn-info text-dark fs-3" href="https://qstar-inc.github.io/cities2-objects/" target="_blank">Object Browser</a></div>
                </div>
            </div>
            <p class="fs-4 mb-4 text-center">and many other private/deprecated sites.</p>
        </div>
        {{-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"> --}}
        <h3 class="h3 fs-2 text-center">Cities: Skylines II mods</h3>
        <div class="accordion mx-4">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-center fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Code Mods
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <div class="d-flex flex-wrap justify-content-center">
                            @include('_layouts.partials.mods', [
                                'name' => 'Asset UI Manager',
                                'code' => 'a80eea0c-7738-4577-87dc-59b950bd8ad7',
                                'desc' => 'Move/split/add various assets in the asset UI in an orderly manner.',
                                'id' => 98560,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Auto Vehicle Renamer',
                                'code' => '7f2d546a-50bc-4864-96b1-c2a33ca4ec88',
                                'desc' => 'Automatically renames vehicles to include it\'s origin information on spawn',
                                'id' => 79872,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Boundary Lines Modifier',
                                'code' => 'd5d539ba-aab5-4ae9-b3fd-0d5d3c946c52',
                                'desc' => 'Modify the map/tile border size and color.',
                                'id' => 86728,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Citizen Model Manager',
                                'code' => 'a1ec0fce-496c-439d-af84-96d7ce766d9e',
                                'desc' => 'Customize the appearance of citizen groups by swapping in any loaded \'CharacterGroup\' prefabs',
                                'id' => 92952,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Demand Master Pro [Alpha]',
                                'code' => '13ae3529-64f8-4988-8d21-8c65094b93fa',
                                'desc' => 'Modify various parameters that leads to stable demand change.',
                                'id' => 86944,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Simple Mod Checker Plus',
                                'code' => '5599f857-1b79-46bf-b710-4388cda5e11f',
                                'desc' => 'Mod load notification, backup/restore game/mods settings/keybinds, and more tools.',
                                'id' => 79186,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Trading Cost Tweaker',
                                'code' => 'fe6a7637-9208-46a1-b569-70a8a14a3677',
                                'desc' => 'Modify various outside trading data',
                                'id' => 86124,
                            ])
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-center fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Assets
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">

                        <h3 class="fs-3 text-center">Static Ploppables</h3>
                        <div class="d-flex flex-wrap justify-content-center">
                            @include('_layouts.partials.mods', [
                                'name' => 'Static Ploppables [UI Dependency]',
                                'code' => '677afe08-714a-4899-b3f6-7cd37a194e51',
                                'desc' => 'UI Dependency for all Static Ploppables packs',
                                'id' => 79020,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Static Ploppables 01: Base Game',
                                'code' => 'eff50e78-0ee9-444f-9ba2-da4eb5c24200',
                                'desc' => 'Adds ploppable, non-functional base game buildings',
                                'id' => 79021,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Static Ploppables 02: French Pack',
                                'code' => 'b7344a84-64d3-4efa-a1e9-4e0ed4b63931',
                                'desc' => 'Adds ploppable, non-functional French Pack buildings',
                                'id' => 94119,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Static Ploppables 03: German Pack',
                                'code' => '91a3bfcd-5493-4070-92d0-3b55fd84427d',
                                'desc' => 'Adds ploppable, non-functional German Pack buildings',
                                'id' => 95288,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Static Ploppables 04: UK Pack',
                                'code' => '6821e43f-01b4-4f49-a419-a347c6d80bdc',
                                'desc' => 'Adds ploppable, non-functional UK Pack buildings',
                                'id' => 95964,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Static Ploppables 05: Modern Architecture',
                                'code' => 'ef5ea466-1014-4d15-ab69-71bea029b1cb',
                                'desc' => 'Adds ploppable, non-functional Modern Architecture buildings',
                                'id' => 96323,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Static Ploppables 06: Urban Promenades',
                                'code' => 'afd6f001-8f26-4122-9d98-885cd028a04a',
                                'desc' => 'Adds ploppable, non-functional Urban Promenades buildings',
                                'id' => 96324,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Static Ploppables 07: Japan Pack',
                                'code' => 'abedc7e6-0076-45bb-af37-c10389539b37',
                                'desc' => 'Adds ploppable, non-functional Japan Pack buildings',
                                'id' => 96779,
                            ])
                        </div>
                        <h3 class="fs-3 text-center">Real World Brands</h3>
                        <div class="d-flex flex-wrap justify-content-center">
                            @include('_layouts.partials.mods', [
                                'name' => 'Real World Brand: Apple',
                                'code' => 'b62ae615-bff2-42b8-b56d-e82e587db7bb',
                                'desc' => 'Adds \'Apple\' as a Electronics Company',
                                'id' => 86423,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Real World Brand: Discord',
                                'code' => '6041cd82-b1b5-4287-973f-bd526c6a3f7f',
                                'desc' => 'Adds \'Discord\' as a Software Company',
                                'id' => 84186,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Real World Brand: Paradox Interactive',
                                'code' => '834ec2d3-b419-4dcf-8d7c-f235ccf720c5',
                                'desc' => 'Adds \'Paradox Interactive\' as a Company',
                                'id' => 80939,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Real World Brands: Adobe',
                                'code' => '6d030ee4-2e87-4b78-9961-3b342ef2d1e4',
                                'desc' => 'Adds \'Adobe\' as a Software Company',
                                'id' => 83168,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Real World Petrochemical Companies',
                                'code' => '65b6eca0-b389-4cb4-af69-daac3dc270b1',
                                'desc' => 'Adds 7 real world gas companies',
                                'id' => 81625,
                            ])
                        </div>
                        <h3 class="fs-3 text-center">Zoning</h3>
                        <div class="d-flex flex-wrap justify-content-center">
                            @include('_layouts.partials.mods', [
                                'name' => 'Medium Office Zoning',
                                'code' => '9f058661-7af7-4e45-ba70-f5f49aa9019e',
                                'desc' => 'Adds 2 \'Office Medium\' zoning based on \'Commercial High\' buildings',
                                'id' => 83207,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Mixed Residential Office Zoning',
                                'code' => 'd964469f-67c9-4e04-8964-3b2fe139186a',
                                'desc' => 'Adds Mixed Residential Office Zoning',
                                'id' => 79067,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Single Family Residentials',
                                'code' => '4994d86b-72c8-43ad-819e-ae2029d8d8cc',
                                'desc' => 'One zoning which includes all vanilla low density houses.',
                                'id' => 87691,
                            ])
                        </div>
                        <h3 class="fs-3 text-center">Transportations</h3>
                        <div class="d-flex flex-wrap justify-content-center">
                            @include('_layouts.partials.mods', [
                                'name' => 'Elevated Train Station',
                                'code' => 'b0f166dd-c5b0-4b65-9cb4-560862f19ce3',
                                'desc' => 'Adds 2 elevated train stations using models of elevated subway stations',
                                'id' => 84515,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Intersectable Subway System',
                                'code' => '8e9acad1-44a2-490f-96db-d3e0552a9257',
                                'desc' => 'Complete Subway System which can intersect with Roads',
                                'id' => 87219,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Mini Track Services',
                                'code' => 'bb702099-1273-48d6-972e-1337fda9529d',
                                'desc' => 'Single Tracks which can facilitates various train/tram/subway depo/station functions.',
                                'id' => 87564,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Vanilla Roads Reversed',
                                'code' => '993c56a2-0c3c-47e1-b066-6cce56456bb7',
                                'desc' => 'Reversed variants of vanilla roads and highways',
                                'id' => 86461,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'Vanilla Vehicles Remixed',
                                'code' => '8c63030d-cfd2-4515-9a00-312f6697f7c7',
                                'desc' => 'Repurpose some vanilla vehicles for other activities',
                                'id' => 84787,
                            ])
                        </div>
                        <h3 class="fs-3 text-center">Everything else</h3>
                        <div class="d-flex flex-wrap justify-content-center">
                            @include('_layouts.partials.mods', [
                                'name' => 'Prop Vanilla Vegetations',
                                'code' => '63c9fa24-7c30-4233-866b-e21498ddbfd1',
                                'desc' => 'Prop vegetations which can change color',
                                'id' => 87099,
                            ])
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-center fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        Maps
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <div class="d-flex flex-wrap justify-content-center">
                            @include('_layouts.partials.mods', [
                                'name' => 'Flatland Ultimate',
                                'code' => '260dd1ef-f8bc-46f2-b57a-71808463f972',
                                'desc' => 'Just a flat map; no trees, no fuss.',
                                'id' => 75944,
                            ])
                            @include('_layouts.partials.mods', [
                                'name' => 'North American Mainland',
                                'code' => '8f6e306d-9ae6-436b-b871-0d2c6893dfc9',
                                'desc' => 'North America',
                                'id' => 75964,
                            ])

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/600" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/600" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}
    <div id="lets-connect"class="mainbox container-fluid d-flex p-3 flex-column text-center">
        <h2 class="fs-1">Let's Connect</h2>
        <p class="fs-5">If you're interested in working together or have an exciting opportunity to discuss, feel free to reach out via email.
            <br />It's the best way to connect for professional inquiries.
        </p>
        <p class="fs-2"><span class="hidden-text" id="mail">Click to Reveal</span></p>
        <p class="fs-5">For discussions, ideas, or collaborations in the modding space, you can also find me on one of the following Discord servers or any
            other Cities Skylines II related servers.
        </p>
        <div class="container-fluid col-6 m-auto">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <div class="p-1 text-center"><a class="discord-link" href="https://discord.gg/U2PSjUzUuF">StarQ</a></div>
                </div>
                <div class="col-12 col-md-6 m-auto">
                    <div class="p-1 text-center"><a class="discord-link" href="https://discord.gg/citiesskylines">Cities: Skylines</a></div>
                </div>
                <div class="col-12 col-md-6 m-auto">
                    <div class="p-1 text-center"><a class="discord-link" href="https://discord.gg/q3dzd4p5Hx">Cities: Skylines Modding</a></div>
                </div>
                <div class="col-12 col-md-6 m-auto">
                    <div class="p-1 text-center"><a class="discord-link" href="https://discord.gg/FEPVQ28E6n">T. D. W.'s Village</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
