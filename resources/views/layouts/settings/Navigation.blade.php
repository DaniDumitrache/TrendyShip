<style>
    .navigation {
        margin-bottom: 50px;
    }

    .navigation ul {
        display: flex;
        flex-wrap: wrap;
        border: 1px solid #FD3D57;
        border-radius: 5px;
        padding: 10px;
    }

    .navigation ul>li {
        display: inline;
        margin-left: 10px;
        margin-bottom: 10px;
        width: 100%;
    }

    .navigation ul>li>a {
        border-radius: 5px;
        border: 1px solid #FD3D57;
        padding: 10px;
        text-align: center;
        display: inline-block;
        width: 100%;
    }

    .navigation ul>li a:hover {
        color: #fff;
        background-color: #FD3D57;
    }

    .navigation ul>li a:hover {
        color: #fff;
    }

    @media (max-width: 360px) {
        .navigation ul>li {
            min-width: initial;
        }
    }

    .select2-container--default .select2-results__option[aria-selected=true] {

        background-color: #f6f6f6;
        border: none;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        color: #000;
        background-color: #f6f6f6;
        border: none;
    }

    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        -webkit-tap-highlight-color: transparent;
        background-color: #fff;
        border-radius: 5px;
        border: solid 1px #e8e8e8;
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        font-family: inherit;
        font-size: 14px;
        font-weight: normal;
        height: 42px;
        line-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 30px;
        position: relative;
        text-align: left !important;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        white-space: nowrap;
        width: auto;

    }
</style>

<div class="col-md-12">
    <div class="navigation">
        <ul style="border-bottom: 0px;">
            <li><a href="{{ route('settings/Login') }}">Autentificare</a></li>
            <li><a href="{{ route('settings/EmailServer') }}">Configurare server e-mail</a></li>
            <li><a href="{{ route('settings/Stripe') }}">Stripe Config</a></li>
        </ul>
        <ul style="border-top: 0px;">
            <li><a href="{{ route('settings/Seo') }}">SEO</a></li>
            <li><a href="{{ route('settings/ManageSite') }}">Gestionati NordPc</a></li>
            <li><a href="{{ route('settings/Advertising') }}">Configurare publicitate</a></li>
            <li><a href="{{ route('settings/GoogleLogin') }}">Setări autentificare Google</a></li>
        </ul>
    </div>

</div>
