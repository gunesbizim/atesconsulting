
<style>
    .mail-container{
        margin: 5%;
        width: 100%;
        display: flex;
        flex-direction: column!important;
        justify-content: center;
        align-items: center;
    }

    .mail-container > div.image{
        width: 100%;
    }

    .mail-container > div.content{
        display: flex;
        justify-content: center;
        /* align-items: center; */
    }
</style>

<div class="mail-container"
        style="width:100%;flex-direction:column!important;justify-content:center;align-items:center;"
    >
    <div class="image"
            style="width:100vh;display:flex;justify-content:center;"
            >
        <img src="{{ asset('assets/frontend/img/ates_logo.png') }}" alt=""
                style="max-height: 20vh;">

    </div>

    <div class="content"
            style="" >
        <h3 style="">
            Contact Form Submitted
        </h3>

        <ul>
            @foreach($list as $key => $value)
                <li>
                    <span
                        style="font-weight: 600;">
                        {{ $key }}
                    </span> {{$value }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
