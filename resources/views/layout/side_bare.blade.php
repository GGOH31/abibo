<div class="aside">
    <div class="aside-header">
        <h3 class="aside-title">Hotel ABIBO</h3>
        <div class="aside-addon"><button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside"><i class="fa fa-times aside-icon-minimize"></i> <i class="fa fa-thumbtack aside-icon-maximize"></i></button></div>
    </div>
    <div class="aside-body" data-simplebar="data-simplebar">
        <div class="menu">
            <div class="menu-item">
                <a href="{{ url('/accueil') }}" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Accueil</span></a>
            </div>
            <div class="menu-section">
                <div class="menu-section-icon"><i class="fa fa-ellipsis-h"></i></div>
                <h2 class="menu-section-text">Application</h2>
            </div>
            <div class="menu-item">
                <a href="{{ url('/reservation') }}" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-envelope"></i></div><span class="menu-item-text">Rervation</span>
                    <div class="menu-item-addon"><span class="badge badge-label-success">new</span></div>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ url('/galerie') }}" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-comments"></i></div><span class="menu-item-text">Galerie</span></a>
            </div>
            <div class="menu-item">
                <a href="{{ url('/event') }}" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-dollar-sign"></i></div><span class="menu-item-text">Evernements</span></a>
            </div>
            <div class="menu-section">
                <div class="menu-section-icon"><i class="fa fa-ellipsis-h"></i></div>
                <h2 class="menu-section-text">Parametre</h2>
            </div>
            <div class="menu-item"><button class="menu-item-link menu-item-toggle"><div class="menu-item-icon"><i class="fa fa-palette"></i></div><span class="menu-item-text">Base</span><div class="menu-item-addon"><i class="menu-item-caret caret"></i></div></button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="{{ url('/chambre-liste') }}" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Chambre</span></a></div>
                    <div class="menu-item"><a href="{{ url('/front-liste') }}" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Front</span></a></div>
                    {{-- <div class="menu-item"><a href="../../elements/base/type.html" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Typography</span></a></div> --}}
                </div>
            </div>
           
        </div>
    </div>
</div>