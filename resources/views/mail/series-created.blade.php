@component('mail::message')
#{{ $nomeSerie }} criada

A série {{ $nomeSerie }} com {{ $qtdTemporadas }} temporadas e {{ $episodiosPorTemporada }} episodios.

Acesse aqui:

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
    
@endcomponent

@endcomponent
