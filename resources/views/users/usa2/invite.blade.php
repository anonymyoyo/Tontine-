<h1>Inviter un membre a rejoindre</h1>

<p>Lien d'invitation :
    <a href="{{ $lien }}">{{ $lien }}</a>
</p>


<h1>Rejoindre la tontine {{ $tontine->name }}</h1>

<form action="{{ route('invite', $tontine->id) }}" method="POST">
    @csrf
    <div>
        <p>Lien d'invitation :
            <a href="{{ $lien }}">{{ $lien }}</a>
        </p>
        <button type="submit">Rejoindre</button>
    </div>
</form>
